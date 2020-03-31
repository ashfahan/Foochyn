import React, { Component } from "react";
import { BackTop, Layout } from "antd";

import { connect } from "react-redux";
import { setting } from "./store";

import { Route, Switch } from "react-router-dom";
import { withRouter } from "react-router";

import "antd/dist/antd.css";
import "./scss/ant-reset.scss";
import "animate.css";
// todo : use development build of fluid in production
import "./scss/fluid/temp/fluid.css";
import "remixicon/fonts/remixicon.css";
import "./scss/base.scss";

import "./fonts/Poppins/fonts.css";

import Header from "./pages/Header";
import Footer from "./pages/Footer";
import Sidebar from "./pages/Sidebar";
import Home from "./pages/Home";
import Error from "./pages/Error";

interface props {
  SetLoaded: Function;
  location: any;
}

class Main extends Component<props> {
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
      <Layout className="grid has-gap-0 is-x">
        {/*  todo : check calssname */}
        <Sidebar className="column" />
        <div className="column">
          <Header />
          <Layout.Content className="lyt-main">
            <Switch>
              <Route path="/" component={() => <Home />} exact />
              <Route component={() => <Error error={404} />} />
            </Switch>
          </Layout.Content>
          <Footer />
        </div>
        <BackTop className="z-top" />
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