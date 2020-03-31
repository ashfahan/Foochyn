import React, { Component } from "react";

interface props {
  image: string;
  location: string;
  resurantcount: number;
}

export default class LocationCard extends Component<props> {
  render() {
    return (
      <div className="LOCATIONCARD relative p-7px flex justify-center align-middle" style={{ minHeight: "200px" }}>
        <div className="bg-primary img-bg is-round-sm absolute top-0 bottom-0 left-0 right-0" style={{ backgroundImage: `url(${this.props.image})` }} />
        <div className="FADER is-round-sm absolute top-0 bottom-0 left-0 right-0" />
        <div className="relative txt-shadow-round clr-white is-lg txt-center">
          <div>{this.props.location}</div>
          <div>{this.props.resurantcount} Restaurant</div>
        </div>
      </div>
    );
  }
}
