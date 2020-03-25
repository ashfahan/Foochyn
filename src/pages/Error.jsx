import React, { Component } from "react";
import { Button } from "antd";

import { NavLink } from "react-router-dom";

export default class Error extends Component {
  render() {
    switch (this.props.error) {
      case 404:
        return (
          <div className="my-2">
            <div className="mb-4">404 : Place Not Found</div>
            <NavLink to="/">
              <Button type="primary">Go Home ?</Button>
            </NavLink>
          </div>
        );

      case 500:
        return (
          <div className="my-2">
            <div className="mb-4">500 : Internal Server Error</div>
            <NavLink to="/">
              <Button type="primary">Go Home ?</Button>
            </NavLink>
          </div>
        );

      default:
        console.error("Error Not Defined");
        return (
          <div className="my-2">
            <div className="mb-4">Unexpected Error </div>
            <NavLink to="/">
              <Button type="primary">Go Home ?</Button>
            </NavLink>
          </div>
        );
    }
  }
}
