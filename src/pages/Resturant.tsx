import React, { Component } from "react";

import "../scss/home.scss";
import { Rate, Tabs, Tooltip } from "antd";
import Expend from "../components/Expend";

interface props {
  image?: "";
  favorite?: boolean;
  name?: string;
  rating?: number;
  reviews?: number;
  address?: string[];
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
    address: ["South Padre Island", "TX"],
    cuisines: ["Chinese", "Italian", "Japanese"],
    pricerange: [1000, 5000],
    diningReview: 3.8,
    diningReviewCount: 1455,
    deliveryReview: 4.5,
    deliveryReviewCount: 2025,
  };

  render() {
    return (
      <>
        <section className="px-4 py-2 grid container">
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
            <div className="is-lg">{this.formatArray(this.props.address, ", ")}</div>
            <div className="mt-2">
              <button className="btn is-lg is-sld is-primary is-round mr-7px">
                <span className="icon ri-star-line"></span>Add a review
              </button>
              <button className="btn is-lg is-out is-primary is-round mr-7px">
                <span className="icon ri-direction-line"></span>Direction
              </button>
              <button className="btn is-lg is-out is-primary is-round mr-7px">
                <span className="icon ri-bookmark-3-line"></span>Bookmark
              </button>
              <button className="btn is-lg is-out is-primary is-round mr-7px">
                <span className="icon ri-share-line"></span>Share
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

        <section className="px-4 pb-2 grid container">
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
              <button className="btn clr-primary">
                <i className="icon ri-coupon-3-fill" />5 Great Discounts
              </button>
            }
          >
            <Tabs.TabPane tab="Overview" key="1">
              <div className="grid has-gap-lg container px-2">
                <div className="column w-16">
                  <section className="py-1rem">
                    <h3 className="txt-cap mb-0">Known For</h3>
                    <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px" }} />
                    <div>
                      Nusr-Et Dubai is the very best meat experience – hands down. This intimate restaurant with seamless terrace for inside-out dining, is buzzing with energy. The casual service is highly personal and involving.
                      <Expend showText="Read More" hideText="Read Less">
                        The founder, a master butcher for over 20 years, Nusret Gokce personally selects each and every cut of meat served in the restaurant, the master grillers complete the magic on the charcoal grill. A dining experience unlike any other with creative fish and seafood dishes for the non-carnivores.
                      </Expend>
                    </div>
                  </section>

                  <section className="py-1rem">
                    <h3 className="txt-cap mb-0">Cuisines</h3>
                    <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px" }} />
                    <button className="btn is-out is-primary is-pill mr-7px">North Indian</button>
                    <button className="btn is-out is-primary is-pill mr-7px">Chinese</button>
                  </section>

                  <section className="py-1rem">
                    <h3 className="txt-cap mb-0">Average Cost</h3>
                    <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px" }} />
                    <div className="clr-dark">{this.formatArray(this.props.pricerange, " - ")} PKR for two people (approx.)</div>
                    <div className="o-75">Exclusive of applicable taxes and charges, if any</div>
                    <Tooltip placement="rightTop" title="The cost for two is computed as follows: Average of 2 appetizers + 2 mains + 2 beverages + 1 dessert. The actual cost you incur at a restaurant might change depending on your appetite, or with changes in restaurant menu prices">
                      <div className="clr-disabled o-50 border-none border-bottom border-dashed inline">How do we calculate cost for two?</div>
                    </Tooltip>
                  </section>

                  <section className="py-1rem">
                    <h3 className="txt-cap mb-0">Features</h3>
                    <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px" }} />
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
                        <i className="icon ri-2x ri-bank-card-line" /> Indoor Seating
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
                    <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px" }} />
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

                <div className="column w-8">
                  <section className="mb-1rem">
                    <img className="img" src="https://www.google.com/maps/d/thumbnail?mid=1wMZLD-KoIBt-zG0r8ziRkZeqgUA" />
                  </section>

                  <section className="py-1rem">
                    <h3 className="txt-cap mb-0">Contact</h3>
                    <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px" }} />
                    <div>
                      <div className="grid">
                        <div className="column w-2">
                          <i className="icon ri-phone-line h3 font-normal clr-inherit mb-0" />
                        </div>
                        <div className="column">
                          <div>Phone number</div>
                          <a href="#">(+92)000-111-4567</a>
                        </div>
                      </div>
                      <div className="grid">
                        <div className="column w-2">
                          <i className="icon ri-mail-send-line h3 font-normal clr-inherit mb-0" />
                        </div>
                        <div className="column">
                          <div>Mail</div>
                          <a href="#">mail@main.com</a>
                        </div>
                      </div>
                      <div className="grid">
                        <div className="column w-2">
                          <i className="icon ri-earth-line h3 font-normal clr-inherit mb-0" />
                        </div>
                        <div className="column">
                          <div>Website</div>
                          <a href="#">https://www.site.com</a>
                        </div>
                      </div>
                      <div className="grid">
                        <div className="column w-2">
                          <i className="icon ri-facebook-fill h3 font-normal clr-inherit mb-0" />
                        </div>
                        <div className="column">
                          <div>Facebook</div>
                          <a href="#">Username</a>
                        </div>
                      </div>
                      <div className="grid">
                        <div className="column w-2">
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
              <section className="px-4 py-1rem container grid">
                <div className="column w-6">
                  <img className="img is-round" src="https://source.unsplash.com/512x384/?resturant" alt="resturant" />
                </div>
                <div className="column w-6">
                  <img className="img is-round" src="https://source.unsplash.com/512x384/?resturant" alt="resturant" />
                </div>
                <div className="column w-6">
                  <img className="img is-round" src="https://source.unsplash.com/512x384/?resturant" alt="resturant" />
                </div>
                <div className="column w-6">
                  <img className="img is-round" src="https://source.unsplash.com/512x384/?resturant" alt="resturant" />
                </div>
                <div className="column w-6">
                  <img className="img is-round" src="https://source.unsplash.com/512x384/?resturant" alt="resturant" />
                </div>
                <div className="column w-6">
                  <img className="img is-round" src="https://source.unsplash.com/512x384/?resturant" alt="resturant" />
                </div>
                <div className="column w-6">
                  <img className="img is-round" src="https://source.unsplash.com/512x384/?resturant" alt="resturant" />
                </div>
                <div className="column w-6">
                  <img className="img is-round" src="https://source.unsplash.com/512x384/?resturant" alt="resturant" />
                </div>
                <div className="column w-6">
                  <img className="img is-round" src="https://source.unsplash.com/512x384/?resturant" alt="resturant" />
                </div>
                <div className="column w-6">
                  <img className="img is-round" src="https://source.unsplash.com/512x384/?resturant" alt="resturant" />
                </div>
                <div className="column w-6">
                  <img className="img is-round" src="https://source.unsplash.com/512x384/?resturant" alt="resturant" />
                </div>
              </section>
            </Tabs.TabPane>
            <Tabs.TabPane tab="Reviews" key="3">
              <div className="px-4 py-2 container"></div>
            </Tabs.TabPane>
            <Tabs.TabPane tab="Book a table" key="4">
              <div className="px-4 py-2 container"></div>
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
