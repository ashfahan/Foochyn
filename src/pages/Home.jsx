import React, { Component } from "react";
import { Button } from "antd";

import { NavLink } from "react-router-dom";

class Home extends Component {
  render() {
    return (
      <div className="my-2">
        <div className="mb-4">This is Home</div>
        <NavLink to="/xyz">
          <Button type="primary">Goto xyz ?</Button>
        </NavLink>
      </div>
    );
  }
}

export default Home;
