import React, { Component } from "react";
import { BackTop, Layout } from "antd";

import { connect } from "react-redux";
import { setting } from "./store";

import { Route, Switch } from "react-router-dom";
import { withRouter } from "react-router";

import "antd/dist/antd.css";
import "remixicon/fonts/remixicon.css";
import "./scss/Fluid/fluid.scss";
import "./scss/base.scss";

import "./fonts/Jt-Leonor/fonts.css";

import Header from "./pages/Header";
import Footer from "./pages/Footer";
import Home from "./pages/Home";
import Error from "./pages/Error";

class Main extends Component {
  constructor(props) {
    super(props);
    window.onload = () => {
      this.props.SetLoaded(true);
    };
  }

  componentDidUpdate = () => {
    console.log(this.props);

    console.log("current location is ", this.props.location.pathname);
  };

  render() {
    return (
      <Layout>
        <Header />
        <Layout.Content className="lyt-main">
          <Switch>
            <Route path="/" component={() => <Home />} exact />
            <Route component={() => <Error error={404} />} />
          </Switch>
          <BackTop className="top" />
        </Layout.Content>
        <Footer />
      </Layout>
    );
  }
}

const mapStateToProps = store => ({
  loaded: store.setting.loaded
});

const mapDispatchToProps = {
  SetLoaded: setting.SetLoaded
};

export default withRouter(connect(mapStateToProps, mapDispatchToProps)(Main));
