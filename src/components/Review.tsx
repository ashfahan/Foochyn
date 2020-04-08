import React, { Component } from "react";
import { Avatar, Rate } from "antd";
import Expend from "./Expend";

export interface props {
  user: {
    name: string;
    image?: string;
    address?: string;
  };
  uid: number;
  rating: { overall: number; ambience: number; music: number; food: number; service: number };
  ratingDate: string;
  review: string;
  canEdit?: boolean;
}

export default class Review extends Component<props> {
  reviewLength: number = 200;

  render() {
    return (
      <div className="REVIEW grid align-middle has-gap-lg border-bottom py-1rem">
        <div className="column w-5 txt-center">
          <Avatar size={64} src={this.props.user.image} children={this.props.user.name.charAt(0)} />
          <div>{this.props.user.name}</div>
          {this.props.user.address ? <div>{this.props.user.address}</div> : null}
        </div>
        <div className="column w-19">
          <div className="mb-7px flex justify-between align-middle">
            <div>
              <Rate className="clr-primary is-md" allowHalf value={this.props.rating.overall} disabled /> • Reviewed on {this.props.ratingDate}
            </div>
            {this.props.canEdit === true ? (
              <div>
                <div className="dropdown on-hover">
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
          <div className="mb-7px">
            <b>Ambience</b>&nbsp;&nbsp;{this.props.rating.ambience}&nbsp;&nbsp;•&nbsp;&nbsp;
            <b>Music</b>&nbsp;&nbsp;{this.props.rating.music}&nbsp;&nbsp;•&nbsp;&nbsp;
            <b>Food</b>&nbsp;&nbsp;{this.props.rating.food}&nbsp;&nbsp;•&nbsp;&nbsp;
            <b>Service</b>&nbsp;&nbsp;{this.props.rating.service}
          </div>
          <div>
            {this.props.review.slice(0, this.reviewLength)}
            <Expend
              showText="Read More"
              hideText="Read Less"
              extrabuttons={
                <button className="ml-auto btn txt-right" onClick={() => this.report(this.props.uid)}>
                  <i className="icon ri-flag-fill transform-none after-hide" /> report
                </button>
              }
              inline
              inlineEllipsis={this.props.review.length > this.reviewLength}
              buttonClass="btn is-unstyle clr-primary"
            >
              {this.props.review.slice(this.reviewLength)}
            </Expend>
          </div>
        </div>
      </div>
    );
  }

  report(uid: number) {
    // todo
    alert("reported uid : " + uid);
  }
}
