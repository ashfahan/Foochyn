import React, { Component } from "react";
import { Layout } from "antd";

export default class Footer extends Component {
  render() {
    return (
      <Layout.Footer className="bg-dark">
        <div>
          This Is <b>Footer</b>
        </div>
      </Layout.Footer>
    );
  }
}
