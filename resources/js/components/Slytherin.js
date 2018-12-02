import axios from "axios";
import React, { Component } from "react";
import ReactDOM from "react-dom";
import Counters from "./counters";

export default class Slytherin extends Component {
    render() {
        return <Counters />;
    }
}

if (document.getElementById("Slytherin")) {
    ReactDOM.render(<Slytherin />, document.getElementById("Slytherin"));
}
