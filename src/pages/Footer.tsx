import React, { Component } from "react";
import { Layout } from "antd";

export default class Footer extends Component {
  render() {
    return (
      <Layout.Footer className="lyt-footer p-0">
        <div className="grid px-8 lyt-footer">
          <div className="column w-6@lg w-12@sm w-24">
            <h5 className="clr-primary mb-0">Discover</h5>
            <hr className="clr-primary w-3 mt-7px mb-1rem o-100" style={{ height: "2px" }} />
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Trending Restaurants
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Super Savers
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Dineout Pay
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Gourmet Passport
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Dineout Plus
            </a>
          </div>
          <div className="column w-6@lg w-12@sm w-24">
            <h5 className="clr-primary mb-0">About</h5>
            <hr className="clr-primary w-3 mt-7px mb-1rem o-100" style={{ height: "2px" }} />
            <a href="#" className="block my-7px clr-body txt-decor-none">
              About Us
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Blog
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Add Restaurant
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Terms &amp; Conditions
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Privacy Policy
            </a>
          </div>
          <div className="column w-6@lg w-12@sm w-24">
            <h5 className="clr-primary mb-0">Top Cuisines</h5>
            <hr className="clr-primary w-3 mt-7px mb-1rem o-100" style={{ height: "2px" }} />
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Chinese
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Italian
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              South Indian
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Mexican
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Parsi
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Thai
            </a>
          </div>
          <div className="column w-6@lg w-12@sm w-24">
            <h5 className="clr-primary mb-0">Top Locations </h5>
            <hr className="clr-primary w-3 mt-7px mb-1rem o-100" style={{ height: "2px" }} />
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Powai
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Andheri West
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Andheri East
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Juhu
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Colaba
            </a>
            <a href="#" className="block my-7px clr-body txt-decor-none">
              Vashi
            </a>
          </div>
        </div>
        <hr />
        <div className="txt-center lyt-footer">
          <h2 className="clr-primary">foochyn</h2>
          <div className="my-7px">Find the best Restaurants, Deals, Discounts &amp; Offers</div>
          <div className="my-7px">
            Contact:<strong> +91-9212340202</strong>
          </div>
          <div className="my-1rem">
            <a href="#" className="btm is-circlr mx-7px icon ri-2x ri-youtube-fill" />
            <a href="#" className="btm is-circlr mx-7px icon ri-2x ri-instagram-line" />
            <a href="#" className="btm is-circlr mx-7px icon ri-2x ri-whatsapp-line" />
            <a href="#" className="btm is-circlr mx-7px icon ri-2x ri-google-play-fill" />
          </div>
          <div>© 2020 Foochyn. All Rights Reserved.</div>
        </div>
      </Layout.Footer>
    );
  }
}
