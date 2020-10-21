import React from 'react';

const API_SERVER_URL = window.location.protocol + "//" + window.location.host + "/api/v1/goods/";
class News extends React.Component{
    constructor(props, context) {
        super(props, context);
        this.state = {
            news: []
        };
    }
    getDefaultList(){
        let path = API_SERVER_URL + 'news?offset=0&limit=10';
        fetch(path, {method: 'GET'}).then(res => res.json())
            .then(
                (result) => {
                    if(result.status){
                        this.setState({news: result.items});
                    }
                }
            );

    }
    componentDidMount() {
        this.getDefaultList();
    }
    render() {
        const {news} = this.state;
        const infoDataNews = news.map(function (item, key) {
            const divStyle = {
                backgroundSize: '100% 100%',
                backgroundImage: 'url(' + item.image + ')'
            };
            if(key%3==0){
                return (
                    <div className="soc_blog yangi" id="card_margin">
                        <a href="{item.link}" target="_blank" className="d-flex">
                            <div className="fx-50 sm_fx_100">
                                <div className="soc_img soc_img_9"
                                     style={divStyle}>
                                    <div className="text_link">
                                        <h4>
                                            {item.site}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div className="soc_desc fx-50">
                                <h4>
                                    {item.title}
                                </h4>
                                <div className="kontent">
                                    {item.content}
                                </div>
                            </div>
                        </a>
                        <div className="soc_like">
                            <i className="fa fa-eye" aria-hidden="true"></i><span>{item.view}</span>
                            <i className="fa fa-thumbs-o-up plyus" aria-hidden="true"></i><span>{item.layk}</span>
                            <i className="fa fa-thumbs-o-down minus" aria-hidden="true"></i><span>{item.dislayk}</span>
                        </div>
                    </div>
                )
            }else{
                return (
                    <div className="soc_blog fx_calc-50 yangi">
                        <a href="{item.link}" target="_blank" style={{display: 'block'}}>
                            <div className="soc_img soc_img_7"
                                 style={divStyle}>
                                <div className="text_link">
                                    <h4>
                                        {item.site}
                                    </h4>
                                </div>
                            </div>
                            <div className="soc_desc">
                                <h4>
                                    {item.title}
                                </h4>
                                <div className="kontent">
                                    {item.content}
                                </div>
                            </div>
                        </a>
                        <div className="soc_like sd_icon">
                            <i className="fa fa-eye" aria-hidden="true"></i><span>{item.view}</span>
                            <i className="fa fa-thumbs-o-up plyus" aria-hidden="true"
                              ></i><span>{item.layk}</span>
                            <i className="fa fa-thumbs-o-down minus" aria-hidden="true"
                              ></i><span>{item.dislayk}</span>
                        </div>
                    </div>
                )
            }
        }.bind(this));
        return (
            <div className={'news_items d-flex f-wrap j-space-b'}>
                {infoDataNews}
            </div>
        )
    }
}
export const Home = () => (
    <home>
        <News/>
    </home>
)