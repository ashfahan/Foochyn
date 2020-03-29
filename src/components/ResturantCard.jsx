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
        <div className="flex align-baseline">
          <span className="clr-primary">{this.props.rating}</span>
          <Rate className="clr-primary mx-7px is-md" allowHalf value={this.props.rating} disabled />
          <span className="clr-disabled">({this.props.reviews})</span>
        </div>
        <div className="clr-disabled">{this.format(this.props.location)}</div>
        <div className="clr-disabled">{this.format(this.props.cuisines)}</div>
        <div className="clr-disabled">{this.format(this.props.pricerange)} PKR Approx Per User</div>
      </div>
    );
  }

  format(value) {
    let result = "";
    for (let index = 0; index < value.length - 1; index++) result = result + value[index] + " • ";
    return result + value[value.length - 1];
  }
}
