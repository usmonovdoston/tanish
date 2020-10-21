import { Link } from 'react-router-dom';
import React from "react";
import Fragment from "react";
const API_SERVER_URL = window.location.protocol + "//" + window.location.host + "/api/v1/goods/";
class Site extends React.Component{
    constructor(props, context) {
        super(props, context);
        this.state = {
            site: []
        };
    }
    getDefaultList(){
        let path = API_SERVER_URL + 'site?offset=0&limit=10';
        fetch(path, {method: 'GET'}).then(res => res.json())
            .then(
                (result) => {
                    if(result.status){
                        this.setState({site: result.items});
                    }
                }
            );

    }
    componentDidMount() {
        this.getDefaultList();
    }
    render() {
        const {site} = this.state;
        const infoData = site.map(function (item, key) {
            return (
                    <div className='blog_item' data={item.id} key={key}>
                        <a href={item.title}>
                            <img src={item.image} className={'img-fluid'}/>
                        </a>
                    </div>
            );
        }.bind(this));
        return (
            <div className={'blog_items d-flex f-wrap j-space-b'}>
                {infoData}
            </div>
        )
    }
}
export const Header = () => (
    <header>
        <Site/>
    </header>
)