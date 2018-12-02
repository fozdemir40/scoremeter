import React, { Component } from "react";
import ReactDOM from "react-dom";
import Counter from "./counter";

class Counters extends Component {
    constructor() {
        super();
        this.state = {
            counters: [
                { id: 1, value: 0 },
                { id: 2, value: 0 },
                { id: 3, value: 0 },
                { id: 4, value: 0 },
                { id: 5, value: 0 }
            ],
            total: 0
        };
    }
    handleIncrement(counter) {
        const total = this.state.total + 1;
        const counters = [...this.state.counters];
        const index = counters.indexOf(counter);
        counters[index] = { ...counter };
        counters[index].value++;
        this.setState({ counters: counters, total: total });
    }

    handleDecrement(counter) {
        const total = this.state.total - 1;
        const counters = [...this.state.counters];
        const index = counters.indexOf(counter);
        counters[index] = { ...counter };
        counters[index].value--;
        this.setState({ counters: counters, total: total });
    }

    handleReset() {
        const total = 0;
        const counters = this.state.counters.map(c => {
            c.value = 0;
            return c;
        });
        this.setState({ counters: counters, total: total });
    }

    render() {
        return (
            <div>
                <button onClick={this.handleReset.bind(this)}>Reset</button>
                {this.state.counters.map(counter => (
                    <Counter
                        key={counter.id}
                        onIncrement={this.handleIncrement.bind(this)}
                        onDecrement={this.handleDecrement.bind(this)}
                        counter={counter}
                    />
                ))}
                <span>{this.state.total}</span>
            </div>
        );
    }
}

export default Counters;

if (document.getElementById("counters")) {
    ReactDOM.render(<Counters />, document.getElementById("counters"));
}
