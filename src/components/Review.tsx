import React, { Component } from "react";
import { Avatar, Rate } from "antd";
import Expend from "./Expend";

export interface props {
  uid: number;
  userName: string;
  userImage?: string;
  userAddress?: string;
  rating: { overall: number; ambience: number; music: number; food: number; service: number };
  ratingDate: string;
  review: string;
}

export default class Review extends Component<props> {
  reviewLength: number = 200;

  render() {
    return (
      <div className="REVIEW grid align-middle has-gap-lg">
        <div className="column w-5 txt-center">
          <Avatar size={64} src={this.props.userImage} children={this.props.userName.charAt(0)} />
          <div>{this.props.userName}</div>
          {this.props.userAddress ? <div>{this.props.userAddress}</div> : null}
        </div>
        <div className="column w-19">
          <div className="mb-7px">
            <Rate className="clr-primary is-md" allowHalf value={this.props.rating.overall} disabled /> • Reviewed on {this.props.ratingDate}
          </div>
          <div className="mb-7px">
            <span>
              <b>Ambience</b>&nbsp;&nbsp;{this.props.rating.ambience}&nbsp;&nbsp;•&nbsp;&nbsp;
            </span>
            <span>
              <b>Music</b>&nbsp;&nbsp;{this.props.rating.music}&nbsp;&nbsp;•&nbsp;&nbsp;
            </span>
            <span>
              <b>Food</b>&nbsp;&nbsp;{this.props.rating.food}&nbsp;&nbsp;•&nbsp;&nbsp;
            </span>
            <span>
              <b>Service</b>&nbsp;&nbsp;{this.props.rating.service}
            </span>
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
