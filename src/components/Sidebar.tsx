import React, { Component } from "react";
interface state {
  active: boolean;
}

export default class Sidebar extends Component<{}, state> {
  ref = React.createRef<HTMLDivElement>();

  constructor(props) {
    super(props);
    this.state = {
      active: false,
    };
  }

  componentDidMount() {
    window?.addEventListener("OpenSibebar", (e) => this.setState({ active: true }), false);
  }

  render() {
    return (
      <>
        <aside ref={this.ref} className={`lyt-sidebar fixed p-1rem pl-4 flex is-y justify-between ${this.state.active ? "active" : ""}`}>
          <div className="flex justify-between align-bottom mb-6">
            <div className="h3 mb-0">Foochyn</div>
            <button className="btn is-circle ri-2x p-7px" onClick={() => this.setState({ active: false })}>
              <i className="icon ri-close-line" />
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
              <div>© 2020 Foochyn</div>
              <div>All Rights Reserved</div>
            </div>
            <div>
              <a href="#" className="ml--7px txt-decor-none btn is-circle clr-inherit">
                <i className="icon is-lg ri-whatsapp-line" />
              </a>
              <a href="#" className="mx-7px txt-decor-none btn is-circle clr-inherit">
                <i className="icon is-lg ri-facebook-fill" />
              </a>
              <a href="#" className="txt-decor-none btn is-circle clr-inherit">
                <i className="icon is-lg ri-twitter-line" />
              </a>
            </div>
          </div>
        </aside>
        <div className="overlay" onClick={() => this.setState({ active: false })} />
      </>
    );
  }
}
