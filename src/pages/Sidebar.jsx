import React, { Component } from "react";
import { Route } from "react-router-dom";

export default class Sidebar extends Component {
  constructor(props) {
    super(props);
    this.state = {
      active: false
    };
  }
  render() {
    return (
      <>
        <Route
          path="/"
          render={() => (
            <aside className={"sticky top-0 hidden flex@md is-y align-middle justify-between lyt-sidebar collapsed h-100vh py-1rem shadow z-10 " + this.props.className}>
              <button className="btn is-circle is-lg" onClick={() => this.setState({ active: true })}>
                <span className="icon">
                  <i class="ri-menu-line"></i>
                </span>
              </button>
              <div className="txt-vertical rotate-180 is-sm txt-upper">
                <span className="mb-1rem">
                  <span className="bg-secondary inline-block o-25" style={{ width: "2px", height: "30px" }}></span>
                  <span className="bg-black inline-block" style={{ width: "2px", height: "30px" }}></span>
                </span>
                <b>© 2020, NOREBRO THEME BY COLABRIO</b>
              </div>
              <div className="txt-vertical rotate-180 relative share">
                <i class="icon ri-close-line ri-2x is-circle"></i> <b className="is-sm txt-upper mt-7px">Share</b>
                <div className="absolute bg-white left-50 flex is-x-rev p-7px">
                  <a href="#" className="my-7px txt-decor-none btn is-circle clr-body">
                    <i class="icon is-lg ri-whatsapp-line"></i>
                  </a>
                  <a href="#" className="my-7px txt-decor-none btn is-circle clr-body">
                    <i class="icon is-lg ri-facebook-fill"></i>
                  </a>
                  <a href="#" className="my-7px txt-decor-none btn is-circle clr-body">
                    <i class="icon is-lg ri-twitter-line"></i>
                  </a>
                </div>
              </div>
            </aside>
          )}
          exact
        />
        <aside className={`lyt-sidebar fixed p-1rem pl-4 flex is-y justify-between ${this.state.active ? "active" : ""}`}>
          <div className="flex justify-between align-bottom mb-6">
            <div className="h3 mb-0">Foochyn</div>
            <button className="btn is-circle ri-2x p-7px" onClick={() => this.setState({ active: false })}>
              <span className="icon">
                <i class="ri-close-line"></i>
              </span>
            </button>
          </div>

          <div>
            <h5 className="my-1rem">Home</h5>
            <h5 className="my-1rem">Shortcodes</h5>
            <h5 className="my-1rem">Portfolio</h5>
            <h5 className="my-1rem">Blog</h5>
            <h5 className="my-1rem">Shop</h5>
            <h5 className="my-1rem">Pages</h5>
          </div>

          <div>
            <div className="mb-4">
              <div>
                © 2020, Norebro Theme by <a href="#">Colabrio</a>
              </div>
              <div>
                <a href="#">Privacy Policy</a> | <a href="#">Sitemap</a>
              </div>
              <div>All Rights Reserved</div>
            </div>
            <div>
              <a href="#" className="ml--7px txt-decor-none btn is-circle clr-body">
                <i class="icon is-lg ri-whatsapp-line"></i>
              </a>
              <a href="#" className="mx-7px txt-decor-none btn is-circle clr-body">
                <i class="icon is-lg ri-facebook-fill"></i>
              </a>
              <a href="#" className="txt-decor-none btn is-circle clr-body">
                <i class="icon is-lg ri-twitter-line"></i>
              </a>
            </div>
          </div>
        </aside>
        <div className="overlay" onClick={() => this.setState({ active: false })}></div>
      </>
    );
  }
}
