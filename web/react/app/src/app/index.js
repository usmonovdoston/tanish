import {render} from "react-dom";
import React from "react";
import {About} from './components/About';
import {History} from './components/History';
import {Home} from './components/Home';
import {Header} from './components/Header';
import {BrowserRouter as Router, Route, Switch} from 'react-router-dom';
import {Login} from "./components/Login";
import {Form} from "./components/Form";
import {Message} from "./components/Message";
import {Search} from "./components/Search";
import {Click} from "./components/Click";

const root = (
    <React.Fragment>
        <Header/>
        <Home/>
    </React.Fragment>
);
render(root, window.document.getElementById('root'));
