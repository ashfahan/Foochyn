import React, { Component } from "react";
import { Avatar, Rate, List } from "antd";
import Expend from "./Expend";

export interface props {
  user?: {
    name: string;
    image?: string;
    address?: string;
  };
  resturant?: {
    name: string;
    address: string[];
    cuisines: string[];
    image: string;
  };
  uid: number;
  rating: { overall: number; ambience: number; music: number; food: number; service: number };
  ratingDate: string;
  review: string;
  images?: string[];
  canEdit?: boolean;
  type?: "Card" | "Deck";
}

export default class Review extends Component<props> {
  reviewLength: number = 200;

  render() {
    return (
      <div className="REVIEW grid align-middle has-gap-lg border-bottom py-1rem">
        {this.props.type !== "Deck" ? (
          <div className="column w-5 txt-center">
            <Avatar size={64} src={this.props.user?.image} children={this.props.user?.name.charAt(0)} />
            <div>{this.props.user?.name}</div>
            {this.props.user?.address ? <div>{this.props.user?.address}</div> : null}
          </div>
        ) : null}
        <div className={`column ${this.props.type === "Deck" ? "w-24" : "w-19"}`}>
          <div className={`grid ${this.props.type == "Deck" ? "" : ""}`}>
            {this.props.type == "Deck" ? (
              <div className="column w-3 pl-0">
                <img src={this.props.resturant?.image} className="img is-round-lg" alt="Resturant LOGO" />
              </div>
            ) : null}
            <div className="column align-self-middle">
              {this.props.type == "Deck" ? (
                <>
                  <h3 className="mb-0">{this.props.resturant?.name}</h3>
                  <div>{this.formatArray(this.props.resturant?.cuisines)}</div>
                  <div>{this.formatArray(this.props.resturant?.address, ", ")}</div>
                </>
              ) : (
                <>
                  <Rate className="clr-primary" allowHalf value={this.props.rating.overall} disabled /> • Reviewed on {this.props.ratingDate}
                </>
              )}
            </div>
            {this.props.canEdit === true ? (
              <div className="column txt-right">
                {this.props.type == "Deck" ? <> {this.props.ratingDate}&nbsp;&nbsp;</> : null}
                <div className="dropdown on-hover txt-left">
                  <button className="btn is-circle after-hide dropdown-trigger">
                    <i className="icon ri-more-2-fill" />
                  </button>
                  <div className="menu is-primary right-0">
                    <button className="menu-item">Edit</button>
                    <button className="menu-item">Delete</button>
                  </div>
                </div>
              </div>
            ) : null}
          </div>
          {this.props.type == "Deck" ? (
            <div>
              <Rate className="clr-primary" allowHalf value={this.props.rating.overall} disabled /> • {this.props.rating.overall}
            </div>
          ) : null}
          <div>
            <b>Ambience</b>&nbsp;&nbsp;{this.props.rating.ambience}&nbsp;&nbsp;•&nbsp;&nbsp;
            <b>Music</b>&nbsp;&nbsp;{this.props.rating.music}&nbsp;&nbsp;•&nbsp;&nbsp;
            <b>Food</b>&nbsp;&nbsp;{this.props.rating.food}&nbsp;&nbsp;•&nbsp;&nbsp;
            <b>Service</b>&nbsp;&nbsp;{this.props.rating.service}
          </div>
          <div className="mt-7px">
            {this.props.review.slice(0, this.reviewLength)}
            <Expend
              showText="Read More"
              hideText="Read Less"
              extrabuttons={
                this.props.canEdit ? null : (
                  <button className="ml-auto btn txt-right" onClick={() => this.report(this.props.uid)}>
                    <i className="icon ri-flag-fill transform-none after-hide" /> report
                  </button>
                )
              }
              inline
              inlineEllipsis={this.props.review.length > this.reviewLength}
              buttonClass="btn is-unstyle clr-primary"
            >
              {this.props.review.slice(this.reviewLength)}
            </Expend>
          </div>
          <div className="grid">
            {this.props.images?.map((item) => (
              <div className="column w-4">
                <img className="is-round img" src={item} alt="" />
              </div>
            ))}
          </div>
        </div>
      </div>
    );
  }

  report(uid: number) {
    // todo
    alert("reported uid : " + uid);
  }

  formatArray(value: any[] = [], separator = " • ") {
    let result = "";
    for (let index = 0; index < value.length - 1; index++) result = result + value[index] + separator;
    return result + value[value.length - 1];
  }
}
