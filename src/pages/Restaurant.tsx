import React, { Component } from "react";

import { Rate, Tabs, Tooltip, Progress, List } from "antd";
import Expend from "../components/Expend";
import Review, { props as ReviewProps } from "../components/Review";

interface props {
  image?: "";
  favorite?: boolean;
  name: string;
  rating: { overall: { five: number; four: number; three: number; two: number; one: number }; ambience: number; music: number; food: number; service: number };
  reviews?: ReviewProps[];
  address: string[];
  cuisines: string[];
  pricerange: number[];
  diningReview?: number;
  diningReviewCount?: number;
  deliveryReview?: number;
  deliveryReviewCount?: number;
}

interface state {
  people: number;
}

export default class Restaurant extends Component<props, state> {
  static defaultProps: props = {
    image: "",
    favorite: false,
    name: "Restaurant Name",
    rating: { overall: { five: 5, four: 4, three: 3, two: 2, one: 1 }, ambience: 3, music: 2, food: 1, service: 0 },
    reviews: [
      { uid: 1, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 2, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 3, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 4, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 5, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 6, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 7, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 8, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 9, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 10, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 11, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 12, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 13, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 14, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 15, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 16, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 17, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 18, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 19, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 20, user: { name: "Mini Ribeiro Speaks", image: "https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
    ],
    address: ["South Padre Island", "TX"],
    cuisines: ["Chinese", "Italian", "Japanese"],
    pricerange: [1000, 5000],
    diningReview: 3.8,
    diningReviewCount: 1455,
    deliveryReview: 4.5,
    deliveryReviewCount: 2025,
  };

  constructor(props: props) {
    super(props);
    this.state = {
      people: 1,
    };
  }

  render() {
    return (
      <>
        <section className="px-4 pt-2 grid container">
          <div className="column w-16>lg w-24">
            <ol className="breadcrumb p-0">
              <li className="breadcrumb-item" data-separator="/">
                <a href="#" className="clr-inherit">
                  Home
                </a>
              </li>
              <li className="breadcrumb-item active" data-separator="/">
                Restaurant
              </li>
            </ol>
            <h1 className="clr-black">{this.props.name}</h1>
            <div className="is-lg">
              {this.formatArray(this.props.pricerange)} PKR Approx Per User - <span className="block inline>sm">{this.formatArray(this.props.cuisines)}</span>
            </div>
            <div className="is-lg">{this.formatArray(this.props.address, ", ")}</div>
            <div className="mt-2 grid justify-center justify-start>lg">
              <div className="column w-12 w-auto>sm">
                <button className="btn is-lg is-sld is-primary is-round w-24 w-auto>sm">
                  <span className="icon ri-star-line"></span>Add a review
                </button>
              </div>
              <div className="column w-12 w-auto>sm">
                <button className="btn is-lg is-out is-primary is-round w-24 w-auto>sm">
                  <span className="icon ri-direction-line"></span>Direction
                </button>
              </div>
              <div className="column w-12 w-auto>sm">
                <button className="btn is-lg is-out is-primary is-round w-24 w-auto>sm">
                  <span className="icon ri-bookmark-3-line"></span>Bookmark
                </button>
              </div>
              <div className="column w-12 w-auto>sm">
                <button className="btn is-lg is-out is-primary is-round w-24 w-auto>sm">
                  <span className="icon ri-share-line"></span>Share
                </button>
              </div>
            </div>
          </div>
          <div className="txt-center column w-8>lg w-24 flex justify-between>lg justify-center">
            <div className="mr-10 mr-0>lg">
              <Rate className="clr-body mr-7px is-lg" allowHalf value={this.props.diningReview} disabled /> {this.props.diningReview}
              <div>{this.props.diningReviewCount} Dining Reviews</div>
            </div>
            <div>
              <Rate className="clr-primary mr-7px is-lg" allowHalf value={this.props.deliveryReview} disabled /> {this.props.deliveryReview}
              <div>{this.props.deliveryReviewCount} Delivery Reviews</div>
            </div>
          </div>
        </section>

        <section className="px-4 pb-2 grid container">
          <div className="column w-15>sm w-24">
            <div className="is-round img-bg h-100" style={{ minHeight: "200px", backgroundImage: "url(https://source.unsplash.com/512x384/?food,restaurant)" }} />
          </div>
          <div className="column w-9>sm w-24 flex justify-between grid p-0">
            <div className="column w-24>sm w-12">
              <div className="is-round img-bg" style={{ minHeight: "200px", backgroundImage: "url(https://source.unsplash.com/512x384/?food,restaurant)" }} />
            </div>
            <div className="column w-24>sm w-12">
              <div className="is-round img-bg" style={{ minHeight: "200px", backgroundImage: "url(https://source.unsplash.com/512x384/?food,restaurant)" }} />
            </div>
          </div>
        </section>

        <section>
          <Tabs
            defaultActiveKey="4"
            tabBarExtraContent={
              <button className="btn clr-primary">
                <i className="icon ri-coupon-3-fill" />5 Great Discounts
              </button>
            }
          >
            <Tabs.TabPane tab="Overview" key="1">
              <div className="grid has-gap-lg container px-2">
                <div className="column w-24 w-16>md">
                  <section className="py-1rem">
                    <h3 className="txt-cap mb-0">Known For</h3>
                    <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
                    <div>
                      Nusr-Et Dubai is the very best meat experience – hands down. This intimate restaurant with seamless terrace for inside-out dining, is buzzing with energy. The casual service is highly personal and involving.
                      <Expend showText="Read More" hideText="Read Less" inline>
                        The founder, a master butcher for over 20 years, Nusret Gokce personally selects each and every cut of meat served in the restaurant, the master grillers complete the magic on the charcoal grill. A dining experience unlike any other with creative fish and seafood dishes for the non-carnivores.
                      </Expend>
                    </div>
                  </section>

                  <section className="py-1rem">
                    <h3 className="txt-cap mb-0">Cuisines</h3>
                    <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
                    <button className="btn is-out is-primary is-pill mr-7px">North Indian</button>
                    <button className="btn is-out is-primary is-pill mr-7px">Chinese</button>
                  </section>

                  <section className="py-1rem">
                    <h3 className="txt-cap mb-0">Menu</h3>
                    <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
                    <div className="grid">
                      <div className="column w-6>lg w-12>sm w-24">
                        <img className="img is-round" src="https://source.unsplash.com/512x384/?restaurant" alt="restaurant" />
                      </div>
                      <div className="column w-6>lg w-12>sm w-24">
                        <img className="img is-round" src="https://source.unsplash.com/512x384/?restaurant" alt="restaurant" />
                      </div>
                    </div>
                  </section>

                  <section className="py-1rem">
                    <h3 className="txt-cap mb-0">Average Cost</h3>
                    <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
                    <div className="clr-dark">{this.formatArray(this.props.pricerange, " - ")} PKR for two people (approx.)</div>
                    <div className="o-75">Exclusive of applicable taxes and charges, if any</div>
                    <Tooltip placement="rightTop" title="The cost for two is computed as follows: Average of 2 appetizers + 2 mains + 2 beverages + 1 dessert. The actual cost you incur at a restaurant might change depending on your appetite, or with changes in restaurant menu prices">
                      <div className="clr-disabled o-50 border-none border-bottom border-dashed inline">How do we calculate cost for two?</div>
                    </Tooltip>
                  </section>

                  <section className="py-1rem">
                    <h3 className="txt-cap mb-0">Features</h3>
                    <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
                    <div className="grid">
                      <div className="column flex align-middle w-12">
                        <i className="icon ri-2x ri-bank-card-line" /> Credit card
                      </div>
                      <div className="column flex align-middle w-12">
                        <i className="icon ri-2x ri-parking-box-line" /> Parking
                      </div>
                      <div className="column flex align-middle w-12">
                        <i className="icon ri-2x ri-disc-line" /> DJ
                      </div>
                      <div className="column flex align-middle w-12">
                        <i className="icon ri-2x ri-store-2-line" /> Indoor Seating
                      </div>
                      <div className="column flex align-middle w-12">
                        <i className="icon ri-2x ri-cake-line" /> Booking
                      </div>
                      <div className="column flex align-middle w-12">
                        <i className="icon ri-2x ri-wifi-line" /> Wifi
                      </div>
                    </div>
                  </section>

                  <section className="py-1rem">
                    <h3 className="txt-cap mb-0">Open Hours</h3>
                    <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
                    <div className="clr-disabled">
                      <div className="grid">
                        <div className="column w-12">MONDAY</div>
                        <div className="column w-12">12 pm - 10 pm</div>
                      </div>
                      <div className="grid">
                        <div className="column w-12">TUESDAY</div>
                        <div className="column w-12">12 pm - 10 pm</div>
                      </div>
                      <div className="grid">
                        <div className="column w-12">WEDNESDAY</div>
                        <div className="column w-12">12 pm - 10 pm</div>
                      </div>
                      <div className="grid">
                        <div className="column w-12">THURSDAY</div>
                        <div className="column w-12">12 pm - 10 pm</div>
                      </div>
                      <div className="grid">
                        <div className="column w-12">FRIDAY</div>
                        <div className="column w-12">12 pm - 10 pm</div>
                      </div>
                      <div className="grid">
                        <div className="column w-12">SATURDAY</div>
                        <div className="column w-12">12 pm - 10 pm</div>
                      </div>
                      <div className="grid">
                        <div className="column w-12">SUNDAY</div>
                        <div className="column w-12">12 pm - 10 pm</div>
                      </div>
                    </div>
                  </section>
                </div>

                <div className="column w-24 w-8>md">
                  <section className="mb-1rem">
                    <img className="img w-24" src="https://www.google.com/maps/d/thumbnail?mid=1wMZLD-KoIBt-zG0r8ziRkZeqgUA" alt="map" />
                  </section>

                  <section className="py-1rem">
                    <h3 className="txt-cap mb-0">Contact</h3>
                    <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
                    <div>
                      <div className="grid">
                        <div className="column" style={{ flex: "none", width: "30px" }}>
                          <i className="icon ri-phone-line h3 font-normal clr-inherit mb-0" />
                        </div>
                        <div className="column">
                          <div>Phone number</div>
                          <a href="#">(+92)000-111-4567</a>
                        </div>
                      </div>
                      <div className="grid">
                        <div className="column" style={{ flex: "none", width: "30px" }}>
                          <i className="icon ri-mail-send-line h3 font-normal clr-inherit mb-0" />
                        </div>
                        <div className="column">
                          <div>Mail</div>
                          <a href="#">mail@main.com</a>
                        </div>
                      </div>
                      <div className="grid">
                        <div className="column" style={{ flex: "none", width: "30px" }}>
                          <i className="icon ri-earth-line h3 font-normal clr-inherit mb-0" />
                        </div>
                        <div className="column">
                          <div>Website</div>
                          <a href="#">https://www.site.com</a>
                        </div>
                      </div>
                      <div className="grid">
                        <div className="column" style={{ flex: "none", width: "30px" }}>
                          <i className="icon ri-facebook-fill h3 font-normal clr-inherit mb-0" />
                        </div>
                        <div className="column">
                          <div>Facebook</div>
                          <a href="#">Username</a>
                        </div>
                      </div>
                      <div className="grid">
                        <div className="column" style={{ flex: "none", width: "30px" }}>
                          <i className="icon ri-twitter-fill h3 font-normal clr-inherit mb-0" />
                        </div>
                        <div className="column">
                          <div>Twitter</div>
                          <a href="#">Username</a>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </Tabs.TabPane>
            <Tabs.TabPane tab="Gallary" key="2">
              <div className="container px-2">
                <section className="grid">
                  <div className="column w-6>lg w-12>sm w-24">
                    <img className="img is-round" src="https://source.unsplash.com/512x384/?restaurant" alt="restaurant" />
                  </div>
                  <div className="column w-6>lg w-12>sm w-24">
                    <img className="img is-round" src="https://source.unsplash.com/512x384/?restaurant" alt="restaurant" />
                  </div>
                  <div className="column w-6>lg w-12>sm w-24">
                    <img className="img is-round" src="https://source.unsplash.com/512x384/?restaurant" alt="restaurant" />
                  </div>
                  <div className="column w-6>lg w-12>sm w-24">
                    <img className="img is-round" src="https://source.unsplash.com/512x384/?restaurant" alt="restaurant" />
                  </div>
                  <div className="column w-6>lg w-12>sm w-24">
                    <img className="img is-round" src="https://source.unsplash.com/512x384/?restaurant" alt="restaurant" />
                  </div>
                  <div className="column w-6>lg w-12>sm w-24">
                    <img className="img is-round" src="https://source.unsplash.com/512x384/?restaurant" alt="restaurant" />
                  </div>
                  <div className="column w-6>lg w-12>sm w-24">
                    <img className="img is-round" src="https://source.unsplash.com/512x384/?restaurant" alt="restaurant" />
                  </div>
                  <div className="column w-6>lg w-12>sm w-24">
                    <img className="img is-round" src="https://source.unsplash.com/512x384/?restaurant" alt="restaurant" />
                  </div>
                  <div className="column w-6>lg w-12>sm w-24">
                    <img className="img is-round" src="https://source.unsplash.com/512x384/?restaurant" alt="restaurant" />
                  </div>
                  <div className="column w-6>lg w-12>sm w-24">
                    <img className="img is-round" src="https://source.unsplash.com/512x384/?restaurant" alt="restaurant" />
                  </div>
                  <div className="column w-6>lg w-12>sm w-24">
                    <img className="img is-round" src="https://source.unsplash.com/512x384/?restaurant" alt="restaurant" />
                  </div>
                </section>
              </div>
            </Tabs.TabPane>
            <Tabs.TabPane tab="Reviews" key="3">
              <div className="px-2 container">
                <section className="py-1rem w-16>md">
                  <h3 className="txt-cap mb-0">Overall ratings and reviews</h3>
                  <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
                  <div className="grid">
                    <div className="column w-15">
                      <div>Reviews can only be made by diners who have eaten at this restaurant</div>
                      <div>
                        <Rate className="clr-primary mr-7px is-md" allowHalf value={4.4} disabled /> 4.4 based on recent ratings
                      </div>
                      <div className="grid txt-center">
                        <div className="column py-0 my-1rem border-right">
                          <div className="is-lg font-bold">{this.props.rating.food}</div>
                          Food
                        </div>
                        <div className="column py-0 my-1rem border-right">
                          <div className="is-lg font-bold">{this.props.rating.service}</div>
                          Service
                        </div>
                        <div className="column py-0 my-1rem border-right">
                          <div className="is-lg font-bold">{this.props.rating.ambience}</div>
                          Ambience
                        </div>
                        <div className="column py-0 my-1rem">
                          <div className="is-lg font-bold">{this.props.rating.music}</div>
                          Music
                        </div>
                      </div>
                      <div>
                        <span className="icon is-lg ri-thumb-up-line"></span> 68% of people would recommend it to a friend
                      </div>
                    </div>
                    <div className="column w-9">
                      <div className="flex align-middle">
                        <div style={{ flex: "none", width: "1.5rem" }}>5</div> <Progress className="is-lg square" percent={(this.props.rating.overall.five / 5) * 100} showInfo={false} />
                      </div>
                      <div className="flex align-middle">
                        <div style={{ flex: "none", width: "1.5rem" }}>4</div> <Progress className="is-lg square" percent={(this.props.rating.overall.four / 5) * 100} showInfo={false} />
                      </div>
                      <div className="flex align-middle">
                        <div style={{ flex: "none", width: "1.5rem" }}>3</div> <Progress className="is-lg square" percent={(this.props.rating.overall.three / 5) * 100} showInfo={false} />
                      </div>
                      <div className="flex align-middle">
                        <div style={{ flex: "none", width: "1.5rem" }}>2</div> <Progress className="is-lg square" percent={(this.props.rating.overall.two / 5) * 100} showInfo={false} />
                      </div>
                      <div className="flex align-middle">
                        <div style={{ flex: "none", width: "1.5rem" }}>1</div> <Progress className="is-lg square" percent={(this.props.rating.overall.one / 5) * 100} showInfo={false} />
                      </div>
                    </div>
                  </div>
                </section>

                <section className="py-1rem">
                  <div className="flex justify-between">
                    <h3 className="txt-cap mb-0">Reviews</h3>
                    <button className="btn is-sld is-primary">Write review</button>
                    <div className="input px-1rem py-0 w-auto event-none">
                      <span className="clr-disabled">Sort By</span>
                      <select className="input is-unstyle w-auto event-auto">
                        <option>Popularity</option>
                        <option>Saved</option>
                        <option>Critic Rating</option>
                        <option>Cost Low to High</option>
                        <option>Cost High to Low</option>
                      </select>
                    </div>
                  </div>
                  <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />

                  <List
                    itemLayout="vertical"
                    size="large"
                    pagination={{
                      onChange: (page) => {
                        console.log(page);
                      },
                      pageSize: 5,
                    }}
                    dataSource={this.props.reviews}
                    renderItem={(item) => (
                      <>
                        {}
                        <Review
                          user={{
                            name: item.user?.name || "Error",
                            image: item.user?.image,
                            address: item.user?.address,
                          }}
                          canEdit={true}
                          uid={item.uid}
                          rating={item.rating}
                          ratingDate={item.ratingDate}
                          review={item.review}
                        />
                      </>
                    )}
                  />
                </section>
              </div>
            </Tabs.TabPane>
            <Tabs.TabPane tab="Book a table" key="4">
              <div className="px-2 container grid">
                <div className="column">
                  <section className="my-1rem border border-light is-round p-4 grid has-gap-lg">
                    <h5 className="column w-24">Information</h5>
                    <div className="column w-12 grid">
                      <div className="column w-12">No of People</div>
                      <div className="column w-12 grid p-0">
                        <div className="column w-auto p-0">
                          <button className="btn is-sld is-primary is-circle" onClick={() => this.setState({ people: this.state.people - 1 })}>
                            <i className="icon ri-subtract-line" />
                          </button>
                        </div>
                        <div className="column p-0">
                          <input type="number" value={this.state.people} className="input is-unstyle hide-arrow txt-center o-100" disabled />
                        </div>
                        <div className="column w-auto p-0">
                          <button className="btn is-sld is-primary is-circle" onClick={() => this.setState({ people: this.state.people + 1 })}>
                            <i className="icon ri-add-line" />
                          </button>
                        </div>
                      </div>
                    </div>
                    <div className="column w-12">
                      <select className="input">
                        <option selected hidden value="">
                          Select Table
                        </option>
                        <option>Table 1 (Circle) Capacity 2</option>
                        <option>Table 2 (Square) Capacity 4</option>
                        <option>Table 3 (Rectangle) Capacity 8</option>
                        <option>Table 4 (Circle) Capacity 16</option>
                      </select>
                    </div>
                  </section>

                  <section className="my-1rem border border-light is-round p-4 grid has-gap-lg">
                    <h5 className="column w-24">Continue as Guest</h5>
                    <div className="column w-12">
                      <input className="input" type="text" placeholder="Full Name" />
                    </div>
                    <div className="column w-12">
                      <input className="input" type="tel" placeholder="Mobile Number" />
                    </div>
                    <div className="column w-12">
                      <input className="input" type="text" placeholder="Email" />
                    </div>
                    <div className="column w-12">
                      <input className="input" type="text" placeholder="Sepecial request" />
                    </div>
                    <label className="column control w-24">
                      <input className="checkbox" type="checkbox" />
                      <span className="label">Register with Foochyn</span>
                    </label>
                    <a className="column w-24" href="#">
                      Already have an account? Log In
                    </a>
                  </section>

                  <section className="my-1rem border border-light is-round p-4">
                    <h5>Got a Promocode</h5>
                    <div className="my-1rem group">
                      <input className="input" type="text" placeholder="Have a code specially meant for you?" />
                      <button className="btn is-sld">Apply</button>
                    </div>
                    <label className="control">
                      <input className="checkbox" type="checkbox" />
                      <span className="label block">
                        <span className="font-bold">Enable Whatsapp Permissions</span> to receive updates about booking confirmation, latest offers and other alerts.
                      </span>
                    </label>
                    <div className="my-1rem txt-center">
                      By clicking on the BOOK button you agree to the <a href="#">terms & conditions</a>.
                    </div>
                    <div className="txt-center">
                      <button className="btn is-sld is-primary w-12">Book</button>
                    </div>
                  </section>
                </div>
                <div className="column w-8">
                  <section className="my-1rem">
                    <div className="p-4">
                      <div className="flex justify-between align-middle">
                        <h5 className="mb-0">Booking Summary</h5>
                        <button className="btn">
                          <i className="icon ri-edit-2-line"></i> Edit
                        </button>
                      </div>
                      <hr />
                      <div className="font-bold">Resturant Name</div>
                      <div className="clr-disabled">Resturant Address</div>
                      <hr />
                      <div className="grid">
                        <div className="column">
                          <div className="clr-disabled">Date</div>
                          <div>24 Feb, Mon</div>
                        </div>
                        <div className="column">
                          <div className="clr-disabled">Time</div>
                          <div>11:00 PM</div>
                        </div>
                        <div className="column">
                          <div className="clr-disabled">Guests</div>
                          <div>2</div>
                        </div>
                      </div>
                    </div>
                    <div className="p-4">
                      <div className="py-7px px-1rem border border-valid clr-valid is-pill inline-block"> DEAL </div>
                      <h6 className="my-1rem">1+1 on Food</h6>
                      <h5 className="clr-disabled">TERMS AND CONDITIONS</h5>
                      <ul className="clr-disabled">
                        <li>Cannot be clubbed with any other deal.</li>
                        <li>Prior reservation is mandatory to avail this deal.</li>
                        <li>Deals might not be applicable on festive days, special occasions (e.g. valentine’s day or holi) and national holidays.</li>
                      </ul>
                    </div>
                  </section>
                </div>
              </div>
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
