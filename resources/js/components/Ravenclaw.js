import axios from "axios";
import React, { Component } from "react";
import ReactDOM from "react-dom";
import Counters from "./counters";

export default class Ravenclaw extends Component {
    render() {
        return <Counters />;
    }
}
if (document.getElementById("Ravenclaw")) {
    ReactDOM.render(<Ravenclaw />, document.getElementById("Ravenclaw"));
}
