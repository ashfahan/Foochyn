import React, { Component } from "react";
import { Rate } from "antd";

export default class ResturantCard extends Component {
  // this.props = {
  //   image: "https://source.unsplash.com/512x384/?food,resturant",
  //   title: "Ceciches Ceciches",
  //   location: "South Padre Island, TX",
  //   price: "1000-5000",
  //   reviews: "500",
  //   rating: 2.5,
  //   favotite: false,
  //   cuisines: "Barbecue, Chinese , Fase Food , North Indian"
  // };

  render() {
    return (
      <div className="bg-white p-7px">
        <div className="bg-primary img-bg is-round-sm txt-right relative" style={{ minHeight: "200px", backgroundImage: `url(${this.props.image})` }}>
          <i className={`absolute ri-2x txt-shadow-round right-0 py-7px px-1rem ${this.props.favorite ? "ri-heart-fill clr-primary" : "ri-heart-add-line clr-white"}`}></i>
        </div>
        <h5 className="my-7px">{this.props.title}</h5>
        <div className="clr-disabled">{this.props.location}</div>
        <div className="clr-disabled">
          {this.props.price} PKR Approx for 2 Person | {this.props.cuisines}
        </div>
        <div className="flex align-middle">
          <Rate className="clr-primary" allowHalf defaultValue={parseFloat(this.props.rating)} disabled />
          <div className="ml-7px inline txt-baseline clr-disabled">{this.props.reviews} reviews</div>
        </div>
        <div className="clr-disabled">{this.format(this.props.location)}</div>
      </div>
    );
  }
}
