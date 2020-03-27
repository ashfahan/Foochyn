import React, { Component } from "react";
import Headroom from "headroom.js";
import _ from "lodash";

export default class Header extends Component {
  constructor(props) {
    super(props);
    this.ref = React.createRef();
  }

  componentDidMount() {
    var found = setInterval(() => {
      if (document.querySelector(".lyt-sidebar.column") != undefined) {
        this.ref.current.style.width = `${window.innerWidth - document.querySelector(".lyt-sidebar.column").clientWidth}px`;
        window.onresize = _.debounce(() => (this.ref.current.style.width = `${window.innerWidth - document.querySelector(".lyt-sidebar.column").clientWidth}px`), 100);
        clearInterval(found);
      }
    }, 1000);

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
        <div className="column w-4">Foochyn</div>
        <div className="column w-13">{/* <input type="search" className="input" /> */}</div>
        <div className="column w-5 txt-right">
          <button className="btn is-out is-primary mr-2">Login</button>
          <button className="btn is-sld is-primary mr-2">Sign Up</button>
          <div class="dropdown on-hover">
            <button class="btn is-sld is-primary dropdown-trigger">Language</button>
            <div class="menu is-primary right-0 clr-body txt-left">
              <button class="menu-item">Mandarin</button>
              <button class="menu-item">Spanish</button>
              <button class="menu-item">English</button>
              <button class="menu-item">Urdu</button>
              <button class="menu-item">Arabic</button>
              <button class="menu-item">Portuguese</button>
              <button class="menu-item">Bengali</button>
              <button class="menu-item">Russian</button>
              <button class="menu-item">Japanese</button>
              <button class="menu-item">Punjabi</button>
              <button class="menu-item">German</button>
              <button class="menu-item">Javanese</button>
              <button class="menu-item">Wu</button>
              <button class="menu-item">Indonesian</button>
              <button class="menu-item">Telugu</button>
            </div>
          </div>
        </div>
      </header>
    );
  }
}
