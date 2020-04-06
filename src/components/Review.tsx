import React, { Component } from "react";
import { Avatar, Rate } from "antd";

interface props {
  userName: string;
  userImage?: string;
  userAddress?: string;
  rating: number;
  ratingDate: string;
  reviewTitle: string;
  review: string;
}

export default class Review extends Component<props> {
  render() {
    return (
      <div className="grid align-middle has-gap-lg">
        <div className="column w-5 txt-center">
          <Avatar size={64} src={this.props.userImage} children={this.props.userName.charAt(0)} />
          <div>{this.props.userName}</div>
          {this.props.userAddress ? <div>{this.props.userAddress}</div> : null}
        </div>
        <div className="column w-19">
          <ul className="list mb-7px inline-flex align-middle is-inline">
            <li>
              <Rate className="clr-primary is-md" allowHalf value={this.props.rating} disabled />
            </li>
            <li>Reviewed {this.props.ratingDate}</li>
          </ul>
          <h3>{this.props.reviewTitle}</h3>
          <p>{this.props.review}</p>
          <div className="flex justify-between align-middle">
            <div>
              <b>Date of visit:</b> <span>25 Novembder 2018</span>
            </div>
            <button className="btn is-circle">
              <span className="icon">
                <i className="ri-flag-fill"></i>
              </span>
            </button>
          </div>
        </div>
      </div>
    );
  }
}
