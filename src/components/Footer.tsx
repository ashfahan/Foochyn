import React, { Component } from "react";
import { Layout } from "antd";

export default class Footer extends Component {
  render() {
    return (
      <Layout.Footer className="lyt-footer p-2 grid txt-center sticky bottom-0">
        <div className="column w-8">
          <h3>Diners</h3>
          <div>Join more than 440,000 diners</div>
          <div>Who discover new restaurants with FOoChyn</div>
          <div className="mt-1rem">
            <button className="btn is-sld is-primary is-lg">Learn More</button>
          </div>
        </div>
        <div className="column w-8">
          <h3>Restaurants</h3>
          <div>Join more than 1,300 resturants</div>
          <div>Who promote their restaurant with FOoChyn</div>
          <div className="mt-1rem">
            <button className="btn is-sld is-primary is-lg">Learn More</button>
          </div>
        </div>
        <div className="column w-8">
          <h3>Follow Us</h3>
          <div>Join more than 180,000 fans</div>
          <div>Who rave absolute FOoChyn on social</div>
          <div className="mt-1rem">
            <a href="#">
              <i className="icon title is-sm ri-facebook-box-line"></i>
            </a>
            <a href="#">
              <i className="icon title is-sm ri-instagram-line"></i>
            </a>
          </div>
        </div>
        <div className="column w-15 mx-auto mt-2 flex justify-between">
          <a href="#">About us</a>
          <a href="#">FAQ</a>
          <a href="#">Contact US</a>
          <a href="#">Partner With us</a>
          <a href="#">Terms &amp; Conditions</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Restaurateurs</a>
        </div>
        <hr className="w-24 o-25" />
        <div className="container column w-24">© First Table (Australia) Pty Ltd 2014 - 2020. All rights reserved. The First Table logo and name are trademarks of First Table Limited.</div>
      </Layout.Footer>
      // <div>© 2020 Foochyn. All Rights Reserved.</div>
    );
  }
}
