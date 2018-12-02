import React, { Component } from "react";
import ReactDOM from "react-dom";
import Counters from "./counters";

export default class Gryffindor extends Component {
    render() {
        return <Counters />;
    }
}

if (document.getElementById("Gryffindor")) {
    ReactDOM.render(<Gryffindor />, document.getElementById("Gryffindor"));
}
