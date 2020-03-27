import React, { Component } from "react";
import { BackTop, Layout } from "antd";

import { connect } from "react-redux";
import { setting } from "./store";

import { Route, Switch } from "react-router-dom";
import { withRouter } from "react-router";

import "antd/dist/antd.css";
import "./scss/ant-reset.scss";
import "animate.css";
import "./scss/Fluid/fluid.scss";
import "remixicon/fonts/remixicon.css";
import "./scss/base.scss";

import "./fonts/Poppins/fonts.css";

import Header from "./pages/Header";
import Footer from "./pages/Footer";
import Sidebar from "./pages/Sidebar";
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
      <Layout className="grid has-gap-0 is-x">
        <Sidebar className="column">as</Sidebar>
        <div className="column">
          <Header />
          <Layout.Content className="lyt-main">
            <Switch>
              <Route path="/" component={() => <Home />} exact />
              <Route
                render={() => (
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
                )}
              />
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
