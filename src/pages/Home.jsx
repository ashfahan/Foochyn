import React, { Component } from "react";
import { NavLink } from "react-router-dom";
import { Button } from "antd";
import TitleBg from "../images/home-title-bg.jpg";

class Home extends Component {
  render() {
    return (
      <div className="">
        <section className="flex justify-center align-middle h-min-100vh bg-img" style={{ backgroundImage: `url(${TitleBg})` }}>
          sad
        </section>
        <div className="h-min-100vh mb-4">This is Home</div>
        <div className="h-min-100vh mb-4">This is Home</div>
        <div className="h-min-100vh mb-4">This is Home</div>
        <div className="h-min-100vh mb-4">This is Home</div>
        <NavLink to="/xyz">
          <Button type="primary">Goto xyz ?</Button>
        </NavLink>
      </div>
    );
  }
}

export default Home;
