import React, { Component } from "react";
import Headroom from "headroom.js";
import { NavLink } from "react-router-dom";
import _ from "lodash";

export default class Header extends Component {
  constructor(props) {
    super(props);
    this.ref = React.createRef();
  }

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
        initial: "animated fixed top-0",
        // when scrolling up
        pinned: "slideInDown",
        // when scrolling down
        unpinned: "slideOutUp",
        // when above offset
        top: "bg-hide clr-white txt-shadow",
        // when below offset
        notTop: "shadow"
        // when at bottom of scoll area
        // bottom: "",
        // when not at bottom of scroll area
        // notBottom: "",
        // when frozen method has been called
        // frozen: ""
      },
      // element to listen to scroll events on, defaults to `window`
      scroller: window,
      // callback when pinned, `this` is headroom object
      onPin: function() {},
      // callback when unpinned, `this` is headroom object
      onUnpin: function() {},
      // callback when above offset, `this` is headroom object
      onTop: function() {},
      // callback when below offset, `this` is headroom object
      onNotTop: function() {},
      // callback when at bottom of page, `this` is headroom object
      onBottom: function() {},
      // callback when moving away from bottom of page, `this` is headroom object
      onNotBottom: function() {}
    });
    headroom.init();
  }

  render() {
    return (
      <header ref={this.ref} className={`ant-layout-header lyt-header grid ${this.props.className}`}>
        <div className="column w-4 font-bold is-lg">Foochyn</div>
        <div className="column w-20 txt-right">
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
