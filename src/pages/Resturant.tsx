import React, { Component } from "react";

import "../scss/home.scss";
import { Rate, Tabs } from "antd";

interface props {
  image?: "";
  favorite?: boolean;
  name?: string;
  rating?: number;
  reviews?: number;
  location?: string[];
  cuisines?: string[];
  pricerange?: number[];
  diningReview?: number;
  diningReviewCount?: number;
  deliveryReview?: number;
  deliveryReviewCount?: number;
}

class Resturant extends Component<props> {
  static defaultProps: props = {
    image: "",
    favorite: false,
    name: "Resturant Name",
    rating: 0,
    reviews: 0,
    location: ["South Padre Island", "TX"],
    cuisines: ["Chinese", "Italian", "Japanese"],
    pricerange: [0],
    diningReview: 3.8,
    diningReviewCount: 1455,
    deliveryReview: 4.5,
    deliveryReviewCount: 2025
  };

  render() {
    console.log(this.props);

    return (
      <>
        <section className="p-4 py-2@md grid container">
          <div className="column w-16">
            <ol className="breadcrumb p-0">
              <li className="breadcrumb-item" data-separator="/">
                <a href="#" className="clr-inherit">
                  Home
                </a>
              </li>
              <li className="breadcrumb-item active" data-separator="/">
                Resturant
              </li>
            </ol>
            <h1 className="clr-black">{this.props.name}</h1>
            <div className="is-lg">
              {this.formatArray(this.props.pricerange)} PKR Approx Per User - {this.formatArray(this.props.cuisines)}
            </div>
            <div className="is-lg">{this.formatArray(this.props.location, ", ")}</div>
            <div className="mt-2">
              <button className="btn is-lg is-sld is-primary is-round mr-7px">
                <span className="icon txt-middle ri-star-line"></span> Add a review
              </button>
              <button className="btn is-lg is-out is-primary is-round mr-7px">
                <span className="icon txt-middle ri-star-line"></span> Add a review
              </button>
              <button className="btn is-lg is-out is-primary is-round mr-7px">
                <span className="icon txt-middle ri-star-line"></span> Add a review
              </button>
              <button className="btn is-lg is-out is-primary is-round mr-7px">
                <span className="icon txt-middle ri-star-line"></span> Add a review
              </button>
            </div>
          </div>
          <div className="column w-8 flex justify-between">
            <div className="txt-center">
              <Rate className="clr-body mr-7px is-lg" allowHalf value={this.props.diningReview} disabled /> {this.props.diningReview}
              <div>{this.props.diningReviewCount} Dining Reviews</div>
            </div>
            <div className="txt-center">
              <Rate className="clr-primary mr-7px is-lg" allowHalf value={this.props.deliveryReview} disabled /> {this.props.deliveryReview}
              <div>{this.props.deliveryReviewCount} Delivery Reviews</div>
            </div>
          </div>
        </section>

        <section className="p-4 py-2@md grid container">
          <div className="column w-15">
            <div className="bg-primary is-round img-bg h-100" style={{ backgroundImage: "url(https://source.unsplash.com/512x384/?food,resturant)" }} />
          </div>
          <div className="column w-9 flex justify-between grid p-0">
            <div className="column w-24">
              <div className="bg-primary is-round img-bg" style={{ minHeight: "200px", backgroundImage: "url(https://source.unsplash.com/512x384/?food,resturant)" }} />
            </div>
            <div className="column w-24">
              <div className="bg-primary is-round img-bg" style={{ minHeight: "200px", backgroundImage: "url(https://source.unsplash.com/512x384/?food,resturant)" }} />
            </div>
          </div>
        </section>

        <section>
          <Tabs tabBarStyle={{ padding: "0 10%" }} defaultActiveKey="1">
            <Tabs.TabPane tab="Overview" key="1">
              <div className="p-4 py-2@md container"></div>
            </Tabs.TabPane>
            <Tabs.TabPane tab="Gallary" key="2">
              <div className="p-4 py-2@md container"></div>
            </Tabs.TabPane>
            <Tabs.TabPane tab="Reviews" key="3">
              <div className="p-4 py-2@md container"></div>
            </Tabs.TabPane>
            <Tabs.TabPane tab="Book a table" key="4">
              <div className="p-4 py-2@md container"></div>
            </Tabs.TabPane>
          </Tabs>
        </section>
      </>
    );
  }

  formatArray(value: any[] = [], separator = " • ") {
    let result = "";
    for (let index = 0; index < value.length - 1; index++) result = result + value[index] + separator;
    return result + value[value.length - 1];
  }
}

export default Resturant;
