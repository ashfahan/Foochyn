import React, { Component } from "react";

interface props {
  image: string;
  name: string;
  resurantcount: number;
}

export default class CuisinesCard extends Component<props> {
  render() {
    return (
      <div className="grid align-middle p-4 is-round bg-light">
        <div className="column w-6">
          <img className="img" src={this.props.image} alt={this.props.name} />
        </div>
        <div className="column">
          <h5>{this.props.name}</h5>
          <div>{this.props.resurantcount} Restaurants</div>
        </div>
      </div>
    );
  }
}
