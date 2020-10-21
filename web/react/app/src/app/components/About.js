import React from 'react';
class Toggle extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            isToggleOn: true,
            backgroundButton: 'green'
        };

        // Эта привязка обязательна для работы `this` в колбэке.
        this.handleClick = this.handleClick.bind(this);
    }

    handleClick() {
        this.setState(state => ({
            isToggleOn: !state.isToggleOn,
            backgroundButton: state.backgroundButton=='green'?'red':'green'
        }));
    }

    render() {
        return (
            <button style={{backgroundColor:this.state.backgroundButton,color:'#fff',padding:'5px'}} onClick={this.handleClick}>
                {this.state.isToggleOn ? 'Включено' : 'Выключено'}
            </button>
        );
    }
}
export class About extends React.Component{
    constructor(props) {
        super(props);
        this.state = {date: new Date()};
    }
    ActionLink() {
        function handleClick(e) {
            e.preventDefault();
            console.log('По ссылке кликнули.');
        }

        return (
            <a href="#" onClick={handleClick}>
                Нажми на меня
            </a>
        );
    }
    render() {
        return(
            <Toggle/>
        );
    }
}