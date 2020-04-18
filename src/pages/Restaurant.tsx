import React, { useState } from "react";

import { Rate, Tabs, Tooltip, Progress, List, DatePicker, TimePicker, message, Steps, Select } from "antd";
import Expend from "../components/Expend";
import Review, { props as ReviewProps } from "../components/Review";
import moment from "moment";
import UploadFile from "../components/UploadFile";
import { LoadingOutlined } from "@ant-design/icons";

interface props {
  logo?: string;
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

Restaurant.defaultProps = {
  logo: "https://source.unsplash.com/512x512/?logo",
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

export default function Restaurant(props: props) {
  const [people, setPeople] = useState<number>(1);
  const [writeReview, setWriteReview] = useState<"yes" | "no">("no");
  const [date, setDate] = useState<Date>(moment(moment.now()).add(1, "hour").toDate());
  const [reviewdate, SetReviewDate] = useState<Date>(moment(moment.now()).subtract(1, "hour").toDate());
  const [reivewstep, SetReviewStep] = useState<number>(0);

  function formatArray(value: any[] = [], separator = " • ") {
    let result = "";
    for (let index = 0; index < value.length - 1; index++) result = result + value[index] + separator;
    return result + value[value.length - 1];
  }

  function ReviewSubmit() {
    message.success("Processing complete!");
  }
  function ReviewReset() {
    setWriteReview("no");
    SetReviewStep(0);
  }

  return (
    <>
      <section className="pt-2 grid container">
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
          <div className="grid">
            <div className="column w-logo">
              <img src={props.logo} className="img is-round" alt="logo" />
            </div>
            <div className="column w-20">
              <h1 className="clr-black mb-7px">{props.name}</h1>
              <div className="is-lg">
                {formatArray(props.pricerange)} PKR Approx Per User - <span className="block inline>sm">{formatArray(props.cuisines)}</span>
              </div>
              <div className="is-lg">{formatArray(props.address, ", ")}</div>
            </div>
          </div>
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
            <Rate className="clr-body mr-7px is-lg" allowHalf value={props.diningReview} disabled /> {props.diningReview}
            <div>{props.diningReviewCount} Dining Reviews</div>
          </div>
          <div>
            <Rate className="clr-primary mr-7px is-lg" allowHalf value={props.deliveryReview} disabled /> {props.deliveryReview}
            <div>{props.deliveryReviewCount} Delivery Reviews</div>
          </div>
        </div>
      </section>

      <section className="pb-2 grid container">
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
          onChange={ReviewReset}
          defaultActiveKey="1"
          tabBarExtraContent={
            <button className="btn clr-primary">
              <i className="icon ri-coupon-3-fill" />5 Great Discounts
            </button>
          }
        >
          <Tabs.TabPane className="mt-1rem" tab="Overview" key="1">
            <div className="grid container">
              <div className="column w-24 w-16>md">
                <section className="py-1rem border-bottom">
                  <h3 className="txt-cap mb-0">Known For</h3>
                  <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
                  <div>
                    Nusr-Et Dubai is the very best meat experience – hands down. This intimate restaurant with seamless terrace for inside-out dining, is buzzing with energy. The casual service is highly personal and involving.
                    <Expend showText="Read More" hideText="Read Less" inline>
                      The founder, a master butcher for over 20 years, Nusret Gokce personally selects each and every cut of meat served in the restaurant, the master grillers complete the magic on the charcoal grill. A dining experience unlike any other with creative fish and seafood dishes for the non-carnivores.
                    </Expend>
                  </div>
                </section>

                <section className="py-1rem border-bottom">
                  <h3 className="txt-cap mb-0">Cuisines</h3>
                  <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
                  <button className="btn is-out is-primary is-pill mr-7px">North Indian</button>
                  <button className="btn is-out is-primary is-pill mr-7px">Chinese</button>
                </section>

                <section className="py-1rem border-bottom">
                  <h3 className="txt-cap mb-0">Menu</h3>
                  <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
                  <div className="grid">
                    <div className="column w-5>lg w-6>md w-12>sm w-24">
                      <img className="img is-round" src="https://source.unsplash.com/384x512/?restaurant" alt="restaurant" />
                    </div>
                    <div className="column w-5>lg w-6>md w-12>sm w-24">
                      <img className="img is-round" src="https://source.unsplash.com/384x512/?restaurant" alt="restaurant" />
                    </div>
                  </div>
                </section>

                <section className="py-1rem border-bottom">
                  <h3 className="txt-cap mb-0">Average Cost</h3>
                  <hr className="clr-primary w-1 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
                  <div className="clr-dark">{formatArray(props.pricerange, " - ")} PKR for two people (approx.)</div>
                  <div className="o-75">Exclusive of applicable taxes and charges, if any</div>
                  <Tooltip placement="rightTop" title="The cost for two is computed as follows: Average of 2 appetizers + 2 mains + 2 beverages + 1 dessert. The actual cost you incur at a restaurant might change depending on your appetite, or with changes in restaurant menu prices">
                    <div className="clr-disabled o-50 border-none border-bottom border-dashed inline">How do we calculate cost for two?</div>
                  </Tooltip>
                </section>

                <section className="py-1rem border-bottom">
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

                <section className="py-1rem border-bottom">
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
          <Tabs.TabPane className="mt-1rem" tab="Gallary" key="2">
            <div className="container">
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
          <Tabs.TabPane className="mt-1rem" tab="Reviews" key="3">
            <div className="container">
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
                        <div className="is-lg font-bold">{props.rating.food}</div>
                        Food
                      </div>
                      <div className="column py-0 my-1rem border-right">
                        <div className="is-lg font-bold">{props.rating.service}</div>
                        Service
                      </div>
                      <div className="column py-0 my-1rem border-right">
                        <div className="is-lg font-bold">{props.rating.ambience}</div>
                        Ambience
                      </div>
                      <div className="column py-0 my-1rem">
                        <div className="is-lg font-bold">{props.rating.music}</div>
                        Music
                      </div>
                    </div>
                    <div>
                      <span className="icon is-lg ri-thumb-up-line"></span> 68% of people would recommend it to a friend
                    </div>
                  </div>
                  <div className="column w-9">
                    <div className="flex align-middle">
                      <div style={{ flex: "none", width: "1.5rem" }}>5</div> <Progress className="is-lg square" percent={(props.rating.overall.five / 5) * 100} showInfo={false} />
                    </div>
                    <div className="flex align-middle">
                      <div style={{ flex: "none", width: "1.5rem" }}>4</div> <Progress className="is-lg square" percent={(props.rating.overall.four / 5) * 100} showInfo={false} />
                    </div>
                    <div className="flex align-middle">
                      <div style={{ flex: "none", width: "1.5rem" }}>3</div> <Progress className="is-lg square" percent={(props.rating.overall.three / 5) * 100} showInfo={false} />
                    </div>
                    <div className="flex align-middle">
                      <div style={{ flex: "none", width: "1.5rem" }}>2</div> <Progress className="is-lg square" percent={(props.rating.overall.two / 5) * 100} showInfo={false} />
                    </div>
                    <div className="flex align-middle">
                      <div style={{ flex: "none", width: "1.5rem" }}>1</div> <Progress className="is-lg square" percent={(props.rating.overall.one / 5) * 100} showInfo={false} />
                    </div>
                  </div>
                </div>
              </section>

              <Tabs activeKey={writeReview === "yes" ? "1" : "0"}>
                <Tabs.TabPane className="mt-1rem" key="0">
                  <section className="py-1rem border-bottom">
                    <div className="flex justify-between">
                      <h3 className="txt-cap mb-0">Reviews</h3>
                      <button className="btn is-sld is-primary" onClick={() => setWriteReview("yes")}>
                        Write review
                      </button>
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
                      dataSource={props.reviews}
                      renderItem={(item) => (
                        <>
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
                </Tabs.TabPane>
                <Tabs.TabPane className="mt-1rem" key="1">
                  <button className="my-1rem btn is-sld is-primary" onClick={ReviewReset}>
                    <i className="icon ri-arrow-left-line" /> See All Reviews
                  </button>
                  <Steps current={reivewstep}>
                    <Steps.Step title="Review" icon={reivewstep === 0 ? <LoadingOutlined /> : <i className="icon after-hide ri-file-edit-line" />} />
                    <Steps.Step title="Rate" icon={reivewstep === 1 ? <LoadingOutlined /> : <i className="icon after-hide ri-star-half-line" />} />
                    <Steps.Step title="Extra" icon={reivewstep === 2 ? <LoadingOutlined /> : <i className="icon after-hide ri-add-circle-line" />} />
                    <Steps.Step title="Summary" icon={reivewstep == 3 ? <LoadingOutlined /> : <i className="icon after-hide ri-file-list-2-line" />} />
                  </Steps>
                  <div className="py-1rem">
                    {reivewstep === 0 && (
                      <>
                        <h2 className="txt-cap mb-0">Write Your Review</h2>
                        <hr className="clr-primary w-2 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
                        <textarea placeholder="Write your thought and ideas about this resturant" className="input" rows={8}></textarea>

                        <h5 className="mt-2">Do you have any picture to share?</h5>
                        <hr className="clr-primary w-2 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />

                        <UploadFile Upload="Manual" accept=".jpeg,.jpg,.png" action="https://www.mocky.io/v2/5cc8019d300000980a055e76">
                          <button className="btn is-sld is-primary font-bold">Add A picture</button>
                        </UploadFile>
                      </>
                    )}
                    {reivewstep === 1 && (
                      <>
                        <div className="flex justify-between">
                          <h3 className="txt-cap mb-0">Rate your experience</h3>
                          <div className="clr-disabled">Click Star to select a rating</div>
                        </div>
                        <hr className="clr-primary w-2 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
                        <div className="flex align-middle justify-between">
                          <div className="column">
                            Your <b className="clr-primary">Overall</b> rating of this restaurant
                          </div>
                          <Rate className="clr-primary mr-7px" tooltips={["terrible", "bad", "normal", "good", "wonderful"]} defaultValue={1} allowHalf />
                        </div>
                        <div className="flex align-middle justify-between">
                          <div className="column">
                            Your <b className="clr-primary">Ambience</b> rating of this restaurant
                          </div>
                          <Rate className="clr-primary mr-7px" tooltips={["terrible", "bad", "normal", "good", "wonderful"]} defaultValue={1} allowHalf />
                        </div>
                        <div className="flex align-middle justify-between">
                          <div className="column">
                            Your <b className="clr-primary">Music</b> rating of this restaurant
                          </div>
                          <Rate className="clr-primary mr-7px" tooltips={["terrible", "bad", "normal", "good", "wonderful"]} defaultValue={1} allowHalf />
                        </div>
                        <div className="flex align-middle justify-between">
                          <div className="column">
                            Your <b className="clr-primary">Food</b> rating of this restaurant
                          </div>
                          <Rate className="clr-primary mr-7px" tooltips={["terrible", "bad", "normal", "good", "wonderful"]} defaultValue={1} allowHalf />
                        </div>
                        <div className="flex align-middle justify-between">
                          <div className="column">
                            Your <b className="clr-primary">Service</b> rating of this restaurant
                          </div>
                          <Rate className="clr-primary mr-7px" tooltips={["terrible", "bad", "normal", "good", "wonderful"]} defaultValue={1} allowHalf />
                        </div>
                      </>
                    )}
                    {reivewstep === 2 && (
                      <>
                        <h3 className="txt-cap mb-0">Could you say a little more about it ? (Optional)</h3>
                        <hr className="clr-primary w-2 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />

                        <h4 className="mt-1rem column">Visit</h4>
                        <div className="grid align-middle">
                          <div className="column w-12 mb-0">What sort of visit was this?</div>
                          <div className="column w-12 flex justify-end">
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="visitt_type" /> <span className="label">Couples</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="visitt_type" /> <span className="label">Family</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="visitt_type" /> <span className="label">Friends</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="visitt_type" /> <span className="label">Business</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="visitt_type" /> <span className="label">Solo</span>
                            </label>
                          </div>
                        </div>

                        <div className="grid align-middle">
                          <div className="column w-12 mb-0">When did you visit?</div>
                          <div className="column w-12 txt-right mb-0">
                            <DatePicker
                              suffixIcon={<i className="clr-body icon ri-arrow-down-s-fill" />}
                              onChange={(e) => {
                                let _date = e?.toDate() || reviewdate;
                                console.log(_date, typeof _date);
                                SetReviewDate(_date);
                              }}
                              placeholder="Date"
                              allowClear={false}
                              defaultValue={moment(reviewdate)}
                              className="input"
                              format="D/M/YYYY"
                            />
                          </div>
                        </div>

                        <div className="grid align-middle">
                          <div className="column w-12 mb-0">When time did you visit?</div>
                          <div className="column w-12 txt-right mb-0">
                            <TimePicker
                              suffixIcon={<i className="clr-body icon ri-arrow-down-s-fill" />}
                              onChange={(e) => {
                                let _date = reviewdate;
                                _date.setHours(e?.toDate().getHours() || 0);
                                _date.setMinutes(e?.toDate().getMinutes() || 0);
                                console.log(_date, typeof _date);
                                SetReviewDate(_date);
                              }}
                              placeholder="Time"
                              allowClear={false}
                              defaultValue={moment(reviewdate)}
                              className="input"
                              format="h:mm a"
                              minuteStep={15}
                            />
                          </div>
                        </div>

                        <h4 className="mt-1rem column">Enviroment</h4>
                        <div className="grid mb-7px">
                          <div className="column">
                            Does this restaurant primarily serve <b className="clr-primary">Healthy</b> cuisine?
                          </div>
                          <div className="column flex justify-end">
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="Healthy" /> <span className="label">Yes</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="Healthy" /> <span className="label">No</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="Healthy" /> <span className="label">Not Sure</span>
                            </label>
                          </div>
                        </div>
                        <div className="grid mb-7px">
                          <div className="column">
                            Is this restaurant <b className="clr-primary">family-friendly</b>?
                          </div>
                          <div className="column flex justify-end">
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="family_friendly" /> <span className="label">Yes</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="family_friendly" /> <span className="label">No</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="family_friendly" /> <span className="label">Not Sure</span>
                            </label>
                          </div>
                        </div>
                        <div className="grid mb-7px">
                          <div className="column">
                            Is this restaurant good for <b className="clr-primary">local cuisine</b>?
                          </div>
                          <div className="column flex justify-end">
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="local_cuisine" /> <span className="label">Yes</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="local_cuisine" /> <span className="label">No</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="local_cuisine" /> <span className="label">Not Sure</span>
                            </label>
                          </div>
                        </div>
                        <div className="grid mb-7px">
                          <div className="column">
                            Does this restaurant offer <b className="clr-primary">table service</b>?
                          </div>
                          <div className="column flex justify-end">
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="table_service" /> <span className="label">Yes</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="table_service" /> <span className="label">No</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="table_service" /> <span className="label">Not Sure</span>
                            </label>
                          </div>
                        </div>
                        <div className="grid mb-7px">
                          <div className="column">
                            Does this restaurant have <b className="clr-primary">tables with seating</b>?
                          </div>
                          <div className="column flex justify-end">
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="tables_with_seating" /> <span className="label">Yes</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="tables_with_seating" /> <span className="label">No</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="tables_with_seating" /> <span className="label">Not Sure</span>
                            </label>
                          </div>
                        </div>
                        <div className="grid mb-7px">
                          <div className="column">
                            Does this restaurant have a <b className="clr-primary">TV</b>?
                          </div>
                          <div className="column flex justify-end">
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="TV" /> <span className="label">Yes</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="TV" /> <span className="label">No</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="TV" /> <span className="label">Not Sure</span>
                            </label>
                          </div>
                        </div>

                        <h4 className="mt-1rem column">Personal</h4>
                        <div className="grid mb-7px">
                          <div className="column">
                            How is restaurant <b className="clr-primary">Pricing</b>?
                          </div>
                          <div className="column flex justify-end">
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="Pricy" /> <span className="label">Cheap</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="Pricy" /> <span className="label">Fair</span>
                            </label>
                            <label className="control mr-7px">
                              <input type="radio" className="radio is-primary" name="Pricy" /> <span className="label">Pricy</span>
                            </label>
                          </div>
                        </div>
                        <div className="grid mb-7px">
                          <div className="column">What dish or dishes do you recommend?</div>
                          <div className="column">
                            <Select mode="multiple" className="input" bordered={false} size="small" placeholder="Please select">
                              <Select.Option value="Food 1">Food 1</Select.Option>
                              <Select.Option value="Food 2">Food 2</Select.Option>
                              <Select.Option value="Food 3">Food 3</Select.Option>
                              <Select.Option value="Food 4">Food 4</Select.Option>
                              <Select.Option value="Food 5">Food 5</Select.Option>
                              <Select.Option value="Food 6">Food 6</Select.Option>
                              <Select.Option value="Food 7">Food 7</Select.Option>
                              <Select.Option value="Food 8">Food 8</Select.Option>
                              <Select.Option value="Food 9">Food 9</Select.Option>
                              <Select.Option value="Food 10">Food 10</Select.Option>
                            </Select>
                          </div>
                        </div>
                      </>
                    )}
                    {reivewstep === 3 && (
                      <>
                        <section className="grid">
                          <div className="column w-logo">
                            <img src={props.logo} className="img is-round" alt="Logo" />
                          </div>
                          <div className="column w-20">
                            <h1 className="clr-black mb-7px">{props.name}</h1>
                            <div className="is-lg">{formatArray(props.cuisines)}</div>
                            <div className="is-lg">{formatArray(props.address, ", ")}</div>
                          </div>
                        </section>
                      </>
                    )}
                  </div>
                  <div className="txt-right">
                    {reivewstep > 0 && (
                      <button className="btn is-out is-primary mr-7px" onClick={() => SetReviewStep(reivewstep - 1)}>
                        Previous
                      </button>
                    )}
                    {reivewstep < 3 && (
                      <button className="btn is-sld is-primary" onClick={() => SetReviewStep(reivewstep + 1)}>
                        Next
                      </button>
                    )}
                    {reivewstep === 3 && (
                      <button className="btn is-sld is-primary" onClick={() => ReviewSubmit()}>
                        Done
                      </button>
                    )}
                  </div>
                </Tabs.TabPane>
              </Tabs>
            </div>
          </Tabs.TabPane>
          <Tabs.TabPane className="mt-1rem" tab="Book a table" key="4">
            <div className="container grid">
              <div className="column">
                <section className="my-1rem border is-round p-4 grid">
                  <h5 className="column w-24">Booking</h5>
                  <div className="column w-12 grid align-middle">
                    <div className="column w-12">No of People</div>
                    <div className="column w-12 grid p-0">
                      <div className="column w-auto p-0">
                        <button className="btn is-sld is-primary is-circle" onClick={() => setPeople(people - 1)}>
                          <i className="icon ri-subtract-line" />
                        </button>
                      </div>
                      <div className="column p-0">
                        <input type="number" value={people} className="input is-unstyle hide-arrow txt-center o-100" disabled />
                      </div>
                      <div className="column w-auto p-0">
                        <button className="btn is-sld is-primary is-circle" onClick={() => setPeople(people + 1)}>
                          <i className="icon ri-add-line" />
                        </button>
                      </div>
                    </div>
                  </div>
                  <div className="column w-12 grid align-middle">
                    <div className="column w-5">Table</div>
                    <div className="column w-19">
                      <select defaultValue="" className="input">
                        <option hidden value="">
                          Select Table
                        </option>
                        <option>Table 1 (Circle) Capacity 2</option>
                        <option>Table 2 (Square) Capacity 4</option>
                        <option>Table 3 (Rectangle) Capacity 8</option>
                        <option>Table 4 (Circle) Capacity 16</option>
                      </select>
                    </div>
                  </div>
                  <div className="column w-12 grid align-middle">
                    <div className="column w-5">Date</div>
                    <div className="column w-19">
                      <div className="control has-icon-left">
                        <i className="clr-body z-10 icon is-left ri-calendar-line" />
                        <DatePicker
                          suffixIcon={<i className="clr-body icon ri-arrow-down-s-fill" />}
                          onChange={(e) => {
                            let _date = e?.toDate() || date;
                            console.log(_date, typeof _date);
                            setDate(_date);
                          }}
                          placeholder="Date"
                          allowClear={false}
                          defaultValue={moment(date)}
                          className="input"
                          format="D/M/YYYY"
                        />
                      </div>
                    </div>
                  </div>
                  <div className="column w-12 grid align-middle">
                    <div className="column w-5">Time</div>
                    <div className="column w-19">
                      <div className="control has-icon-left">
                        <i className="clr-body z-10 icon is-left ri-time-line" />
                        <TimePicker
                          suffixIcon={<i className="clr-body icon ri-arrow-down-s-fill" />}
                          onChange={(e) => {
                            let _date = date;
                            _date.setHours(e?.toDate().getHours() || 0);
                            _date.setMinutes(e?.toDate().getMinutes() || 0);
                            console.log(_date, typeof _date);
                            setDate(_date);
                          }}
                          placeholder="Time"
                          allowClear={false}
                          defaultValue={moment(date)}
                          className="input"
                          format="h:mm a"
                          minuteStep={15}
                        />
                      </div>
                    </div>
                  </div>
                </section>

                <section className="my-1rem border is-round p-4 grid">
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

                <section className="my-1rem border is-round p-4">
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
                    <h5 className="mb-0">Summary</h5>
                    <hr />
                    <div className="font-bold">{props.name}</div>
                    <div className="clr-disabled">{formatArray(props.address, ", ")}</div>
                    <hr />
                    <div className="grid">
                      <div className="column w-10">
                        <div className="clr-disabled">Date</div>
                        <div>{`${date.getDate()} ${date.toLocaleString("default", { month: "long" })}, ${date.toLocaleString("default", { weekday: "long" })}`}</div>
                      </div>
                      <div className="column">
                        <div className="clr-disabled">Time</div>
                        <div>{date.toLocaleString("en-US", { hour: "numeric", minute: "numeric", hour12: true })}</div>
                      </div>
                      <div className="column">
                        <div className="clr-disabled">people</div>
                        <div>{people}</div>
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
