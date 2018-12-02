import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Counter extends Component {
    render() {
        const { onIncrement, onDecrement } = this.props;
        return (
            <div>
                <span>{this.formatCount()}</span>
                <button onClick={() => onIncrement(this.props.counter)}>
                    Add
                </button>

                <button
                    onClick={() => onDecrement(this.props.counter)}
                    disabled={this.props.counter.value === 0 ? "disabled" : ""}
                >
                    Delete
                </button>
            </div>
        );
    }

    formatCount() {
        const { value } = this.props.counter;
        return value;
    }
}

if (document.getElementById("counter")) {
    ReactDOM.render(<Counter />, document.getElementById("counter"));
}
