import axios from "axios";
import React, { Component } from "react";
import ReactDOM from "react-dom";
import Counters from "./counters";

export default class Hufflepuff extends Component {
    render() {
        return <Counters />;
    }
}

if (document.getElementById("Hufflepuff")) {
    ReactDOM.render(<Hufflepuff />, document.getElementById("Hufflepuff"));
}
