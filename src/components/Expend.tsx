import React, { Component, ReactNode } from "react";
import { Collapse } from "antd";
import "./Expend.scss";

interface props {
  showText: string;
  hideText: string;
  extrabuttons: ReactNode;
}

interface state {
  expend: boolean;
}

export default class Expend extends Component<props, state> {
  static defaultProps = {
    showText: "Show",
    hideText: "Hide",
    extrabuttons: null,
  };

  constructor(props) {
    super(props);
    this.state = { expend: false };
  }

  render() {
    return (
      <>
        <Collapse bordered={false} className="Expend" activeKey={this.state.expend ? "1" : "-1"}>
          <Collapse.Panel header="" className="p-0" showArrow={false} key="1">
            {this.props.children}
          </Collapse.Panel>
        </Collapse>
        <div className="button-area">
          <button className="btn is-out is-primary flex" onClick={() => this.setState({ expend: !this.state.expend })}>
            {this.state.expend ? this.props.hideText : this.props.showText}&nbsp;
            <i className={`icon ${this.state.expend ? "ri-arrow-up-s-line" : "ri-arrow-down-s-line"}`}></i>
          </button>
          {this.props.extrabuttons}
        </div>
      </>
    );
  }
}
