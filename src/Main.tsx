import React, { Component } from "react";
import { BackTop, Layout, Modal, Select } from "antd";

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

interface state {
  cityModel: boolean;
}

class Main extends Component<props, state> {
  constructor(props: props) {
    super(props);
    window.onload = () => {
      this.props.SetLoaded(true);
    };

    this.state = {
      cityModel: true
    };
  }

  cityModel() {
    this.setState({ cityModel: false });
  }

  componentDidUpdate = () => {
    console.log(this.props);
    console.log("current location is ", this.props.location.pathname);
  };

  render() {
    return (
      <Layout className="grid has-gap-0 is-x">
        <Sidebar />
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
        <Modal destroyOnClose footer={null} maskClosable={false} closable={false} centered visible={this.state.cityModel}>
          <h5 className="mb-1rem">Select your City</h5>
          <Select bordered={false} suffixIcon={<i className="is-lg icon ri-map-pin-line" />} className="input p-0" showSearch placeholder="City">
            <Select.Option value="lahore">Lahore</Select.Option>
            <Select.Option value="karachi">Karachi</Select.Option>
            <Select.Option value="islamabad">Islamabad</Select.Option>
            <Select.Option value="peshawar">Peshawar</Select.Option>
            <Select.Option value="rawalpindi">Rawalpindi</Select.Option>
            <Select.Option value="multan">Multan</Select.Option>
            <Select.Option value="faisalabad">Faisalabad</Select.Option>
            <Select.Option value="gujranwala">Gujranwala</Select.Option>
            <Select.Option value="quetta">Quetta</Select.Option>
            <Select.Option value="sialkot">Sialkot</Select.Option>
            <Select.Option value="hyderabad">Hyderabad</Select.Option>
            <Select.Option value="bahawalpur">Bahawalpur</Select.Option>
            <Select.Option value="sargodha">Sargodha</Select.Option>
            <Select.Option value="gujrat">Gujrat</Select.Option>
            <Select.Option value="sukkhur">Sukkhur</Select.Option>
            <Select.Option value="jhelum">Jhelum</Select.Option>
            <Select.Option value="sheikhupura">Sheikhupura</Select.Option>
            <Select.Option value="sahiwal">Sahiwal</Select.Option>
            <Select.Option value="jhang">Jhang</Select.Option>
            <Select.Option value="abbotabad">Abbotabad</Select.Option>
            <Select.Option value="kasur">Kasur</Select.Option>
            <Select.Option value="miawali">Miawali</Select.Option>
            <Select.Option value="attok">Attok</Select.Option>
            <Select.Option value="mardan">Mardan</Select.Option>
            <Select.Option value="deraIsmailKhan">Deraismailkhan</Select.Option>
            <Select.Option value="mansehra">Mansehra</Select.Option>
          </Select>
          <div className="txt-right mt-7px">
            <button className="btn is-out is-primary mr-7px" onClick={() => this.cityModel()}>
              Cancel
            </button>
            <button className="btn is-sld is-primary" onClick={() => this.cityModel()}>
              OK
            </button>
          </div>
        </Modal>
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
