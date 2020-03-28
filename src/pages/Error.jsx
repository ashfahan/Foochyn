import React, { Component } from "react";
import { Result } from "antd";

import { NavLink } from "react-router-dom";

export default class Error extends Component {
  render() {
    switch (this.props.error) {
      case 403:
        return (
          <div className="h-min-100vh flex align-middle justify-center">
            <Result
              status="403"
              title="403"
              subTitle="Sorry, you are not authorized to access this page."
              extra={
                <NavLink to="/">
                  <button className="btn is-sld is-primary">Back Home</button>
                </NavLink>
              }
            />
          </div>
        );

      case 404:
        return (
          <div className="h-min-100vh flex align-middle justify-center">
            <Result
              status="404"
              title="404"
              subTitle="Sorry, the page you visited does not exist."
              extra={
                <NavLink to="/">
                  <button className="btn is-sld is-primary">Back Home</button>
                </NavLink>
              }
            />
          </div>
        );

      case 500:
        return (
          <div className="h-min-100vh flex align-middle justify-center">
            <Result
              status="500"
              title="500"
              subTitle="Sorry, the server is wrong."
              extra={
                <NavLink to="/">
                  <button className="btn is-sld is-primary">Back Home</button>
                </NavLink>
              }
            />
          </div>
        );

      default:
        return (
          <div className="h-min-100vh flex align-middle justify-center">
            <Result
              status="warning"
              title="There are some problems with your operation."
              extra={
                <NavLink to="/">
                  <button className="btn is-sld is-primary">Back Home</button>
                </NavLink>
              }
            />
          </div>
        );
    }
  }
}
