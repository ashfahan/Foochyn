import React, { Component, ReactNode } from "react";
import { Collapse } from "antd";
import "./Expend.scss";

interface props {
  showText?: string;
  hideText?: string;
  extrabuttons?: ReactNode;
  buttonClass?: string;
  inline?: boolean;
  inlineEllipsis: boolean;
}

interface state {
  expended: boolean;
}

export default class Expend extends Component<props, state> {
  static defaultProps = {
    showText: "Show",
    hideText: "Hide",
    extrabuttons: null,
    buttonClass: "btn is-out is-primary",
    inline: false,
    inlineEllipsis: false,
  };

  constructor(props) {
    super(props);
    this.state = { expended: false };
  }

  render() {
    return (
      <>
        {this.props.inlineEllipsis && this.props.inlineEllipsis && !this.state.expended && "…"}
        <Collapse bordered={false} className={`Expend ${this.props.inline ? "inline" : ""}`} activeKey={this.state.expended ? "1" : "-1"}>
          <Collapse.Panel header="" className="p-0" showArrow={false} key="1">
            {this.props.children}
          </Collapse.Panel>
        </Collapse>
        <div className="button-area">
          <button className={this.props.buttonClass} onClick={() => this.setState({ expended: !this.state.expended })}>
            {this.state.expended ? this.props.hideText : this.props.showText}&nbsp;
            <i className={`icon ${this.state.expended ? "ri-arrow-up-s-line" : "ri-arrow-down-s-line"}`}></i>
          </button>
          {this.props.extrabuttons}
        </div>
      </>
    );
  }
}
