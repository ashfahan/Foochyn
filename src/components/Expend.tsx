import React, { Component, ReactNode } from "react";
import { Collapse } from "antd";
import "./Expend.scss";

interface props {
  showText: string;
  hideText: string;
  button: ReactNode;
}

interface state {
  expend: boolean;
}

export default class Expend extends Component<props, state> {
  static defaultProps = {
    showText: "Show",
    hideText: "Hide",
    button: null,
  };

  constructor(props) {
    super(props);
    this.state = { expend: false };
  }

  toggleExpend() {
    const expend = !this.state.expend;
    this.setState({ expend });
  }

  render() {
    return (
      <>
        <Collapse bordered={false} className="Expend" activeKey={this.state.expend ? "1" : "-1"}>
          <Collapse.Panel header="" className="p-0" showArrow={false} key="1">
            {this.props.children}
          </Collapse.Panel>
        </Collapse>
        <div className="mt-2">
          {!this.state.expend && (
            <button className="btn is-out is-primary" onClick={() => this.toggleExpend()}>
              {this.props.showText}
              <i className="icon ri-arrow-down-s-line"></i>
            </button>
          )}
          {this.state.expend && (
            <button className="btn is-out is-primary" onClick={() => this.toggleExpend()}>
              {this.props.hideText}
              <i className="icon ri-arrow-up-s-line"></i>{" "}
            </button>
          )}
          {this.props.button}
        </div>
      </>
    );
  }
}
