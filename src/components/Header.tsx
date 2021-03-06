import React, { Component } from "react";
import Headroom from "headroom.js";
import { NavLink } from "react-router-dom";

interface props {
  location: { hash: string; key: string; pathname: string; search: string; state: object };
  className?: string;
}

export default class Header extends Component<props> {
  ref = React.createRef<HTMLDivElement>();
  event = new Event("OpenSibebar");

  componentDidMount() {
    var headroom = new Headroom(this.ref.current, {
      // vertical offset in px before element is first unpinned
      offset: 100,
      // scroll tolerance in px before state changes
      tolerance: 5,
      // or you can specify tolerance individually for up/down scroll
      // tolerance: {
      //   up: 5,
      //   down: 0
      // },
      // css classes to apply
      classes: {
        // when element is initialised
        initial: "animated sticky shadow top-0",
        // when scrolling up
        pinned: "slideInDown",
        // when scrolling down
        unpinned: "slideOutUp",
        // when above offset
        top: "headroom--top",
        // when below offset
        notTop: "headroom--not-top",
        // when at bottom of scoll area
        bottom: "headroom--bottom",
        // when not at bottom of scroll area
        notBottom: "headroom--not-bottom",
        // when frozen method has been called
        frozen: "headroom--frozen",
      },
      // element to listen to scroll events on, defaults to `window`
      scroller: window,
      // callback when pinned, `this` is headroom object
      onPin: function () {},
      // callback when unpinned, `this` is headroom object
      onUnpin: function () {},
      // callback when above offset, `this` is headroom object
      onTop: function () {},
      // callback when below offset, `this` is headroom object
      onNotTop: function () {},
      // callback when at bottom of page, `this` is headroom object
      onBottom: function () {},
      // callback when moving away from bottom of page, `this` is headroom object
      onNotBottom: function () {},
    });
    headroom.init();
  }

  render() {
    return (
      <header ref={this.ref} className={`ant-layout-header lyt-header grid ${this.props.className}`}>
        <NavLink className="column w-4 font-bold is-lg txt-decor-none" to="/">
          Foochyn
        </NavLink>
        <div className="column w-20 txt-right hidden>sm block">
          <button className="btn is-circle is-lg" onClick={() => window.dispatchEvent(this.event)}>
            <i className="icon ri-menu-line" />
          </button>
        </div>
        <div className="column w-20 txt-right hidden block>sm">
          <a href="#" className="btn is-out is-primary mr-7px txt-decor-none">
            Contact Us
          </a>
          <NavLink to="/search">
            <button className="btn is-out is-primary mr-7px">Find Table</button>
          </NavLink>
          <NavLink to="/signup">
            <button className="btn is-sld is-primary mr-7px">Join Us</button>
          </NavLink>
          <div className="dropdown on-hover">
            <button className="btn is-sld is-primary dropdown-trigger">Language</button>
            <div className="menu is-primary right-0 clr-body txt-left">
              <button className="menu-item">Mandarin</button>
              <button className="menu-item">Spanish</button>
              <button className="menu-item">English</button>
              <button className="menu-item">Urdu</button>
              <button className="menu-item">Arabic</button>
              <button className="menu-item">Portuguese</button>
              <button className="menu-item">Bengali</button>
              <button className="menu-item">Russian</button>
              <button className="menu-item">Japanese</button>
              <button className="menu-item">Punjabi</button>
              <button className="menu-item">German</button>
              <button className="menu-item">Javanese</button>
              <button className="menu-item">Wu</button>
              <button className="menu-item">Indonesian</button>
              <button className="menu-item">Telugu</button>
            </div>
          </div>
        </div>
      </header>
    );
  }
}
