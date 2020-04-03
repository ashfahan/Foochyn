import React, { Component } from "react";

import "../scss/home.scss";
import { Rate, Tabs } from "antd";
import Expend from "../components/Expend";

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
    deliveryReviewCount: 2025,
  };

  render() {
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
              <button className="btn inline-flex is-lg is-sld is-primary is-round mr-7px">
                <span className="icon ri-star-line"></span>&nbsp;Add a review
              </button>
              <button className="btn inline-flex is-lg is-out is-primary is-round mr-7px">
                <span className="icon ri-direction-line"></span>&nbsp;Direction
              </button>
              <button className="btn inline-flex is-lg is-out is-primary is-round mr-7px">
                <span className="icon ri-bookmark-3-line"></span>&nbsp;Bookmark
              </button>
              <button className="btn inline-flex is-lg is-out is-primary is-round mr-7px">
                <span className="icon ri-share-line"></span>&nbsp;Share
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
          <Tabs
            defaultActiveKey="1"
            tabBarExtraContent={
              <button className="btn clr-primary inline-flex">
                <i className="icon ri-coupon-3-fill"></i>&nbsp;5 Great Discounts
              </button>
            }
          >
            <Tabs.TabPane tab="Overview" key="1">
              <div className="p-4 py-2@md container">
                <section>
                  <h3 className="txt-cap mb-0">Known For</h3>
                  <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px" }} />
                  <p>A Cisternino, all'interno di una caratteristica aia immersa nella Valle d'Itria, fa capolino questo intimo complesso di trulli risalenti al 1800, ristrutturati secondo la tradizione. Un posto magico dove trascorrere una vacanza all'insegna del relax .</p>
                  <Expend showText="Read More" hideText="Read Less">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam, reiciendis ut eveniet autem cupiditate facere perferendis beatae officiis cumque esse laborum porro ad alias? Ipsum repellat soluta assumenda! Suscipit, ipsum.
                  </Expend>
                </section>
              </div>
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
