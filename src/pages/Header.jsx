import React, { Component } from "react";
import { Layout } from "antd";

export default class Header extends Component {
  render() {
    return (
      <Layout.Header className="lyt-header">
        <div>
          This Is <b>Header</b>
        </div>
      </Layout.Header>
    );
  }
}