import React, { Component } from "react";
import { Rate } from "antd";

interface props {
  image: string;
  link: string;
  favorite: boolean;
  name: string;
  rating: number;
  reviews: number;
  location: string[];
  cuisines: string[];
  pricerange: number[];
}

export default class ResturantCard extends Component<props> {
  render() {
    return (
      <div className="bg-white is-round overflow-hidden relative card-zoom card-hover">
        <a href={this.props.link} className="stretch-link clr-hide absolute">
          .
        </a>
        <div className="txt-right relative overflow-hidden" style={{ minHeight: "200px" }}>
          <div className="bg-primary img-bg" style={{ backgroundImage: `url(${this.props.image})` }} />
          <i className={`absolute ri-2x txt-shadow-round right-0 py-7px px-1rem ${this.props.favorite ? "ri-heart-fill clr-primary" : "ri-heart-add-line clr-white"}`} />
        </div>
        <div className="p-7px">
          <h4 className="my-7px">{this.props.name}</h4>
          <div className="flex align-baseline">
            <span className="clr-primary">{this.props.rating}</span>
            <Rate className="clr-primary mx-7px is-md" allowHalf value={this.props.rating} disabled />
            <span className="clr-disabled">({this.props.reviews})</span>
          </div>
          <div className="clr-disabled">{this.format(this.props.location)}</div>
          <div className="clr-disabled">{this.format(this.props.cuisines)}</div>
          <div className="clr-disabled">{this.format(this.props.pricerange)} PKR Approx Per User</div>
        </div>
      </div>
    );
  }

  format(value: any[]) {
    let result = "";
    for (let index = 0; index < value.length - 1; index++) result = result + value[index] + " • ";
    return result + value[value.length - 1];
  }
}
