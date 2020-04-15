import React from "react";
import { List, DatePicker, TimePicker, Select, Slider } from "antd";
import RestaurantCard, { props as RestaurantCardProps } from "../components/RestaurantCard";
import moment from "moment";
import Expend from "../components/Expend";

interface props {
  result: RestaurantCardProps[];
}

Search.defaultProps = {
  result: [
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
    { link: "#", name: "Ceciches Ceciches", image: "https://source.unsplash.com/512x384/?food,restaurant", address: ["South Padre Island", "TX"], pricerange: [1000, 5000], reviews: 500, rating: 2.5, cuisines: ["Barbecue Chinese", "North Indian"] },
  ],
};

export default function Search(props: props) {
  return (
    <>
      <section className="py-1rem container grid has-gap-lg">
        <div className="column w-6">
          <form>
            <div className="menu">
              <div className="my-7px">DATE</div>
              <div className="control has-icon-left">
                <i className="clr-body z-10 icon is-left ri-calendar-line" />
                <DatePicker suffixIcon={<i className="clr-body icon ri-arrow-down-s-fill" />} placeholder="Date" allowClear={false} defaultValue={moment(moment.now())} className="input" format="D/M/YYYY" />
              </div>
            </div>
            <div className="menu">
              <div className="my-7px">MEAL</div>
              <div className="control has-icon-left">
                <i className="clr-body z-10 icon is-left ri-time-line" />
                <TimePicker suffixIcon={<i className="clr-body icon ri-arrow-down-s-fill" />} placeholder="Time" allowClear={false} defaultValue={moment(moment.now()).add(1, "hour")} className="input" format="h:mm a" minuteStep={15} />
              </div>
            </div>
            <div className="menu">
              <div className="my-7px">Area</div>
              <div className="control has-icon-left">
                <i className="clr-body z-10 icon is-left ri-map-pin-line" />
                <Select bordered={false} suffixIcon={<i className="clr-body icon ri-arrow-down-s-fill" />} className="input" showSearch placeholder="Location, Restaurant, Cuisine">
                  <Select.Option value="lahore">Lahore</Select.Option>
                  <Select.Option value="karachi">Karachi</Select.Option>
                  <Select.Option value="islamabad">Islamabad</Select.Option>
                  <Select.Option value="peshawar">Peshawar</Select.Option>
                  <Select.Option value="rawalpindi">Rawalpindi</Select.Option>
                  <Select.Option value="multan">Multan</Select.Option>
                  <Select.Option value="faisalabad">Faisalabad</Select.Option>
                  <Select.Option value="gujranwala">Gujranwala</Select.Option>
                  <Select.Option value="quetta">Quetta</Select.Option>
                  <Select.Option value="sialkot">Sialkot</Select.Option>
                  <Select.Option value="hyderabad">Hyderabad</Select.Option>
                  <Select.Option value="bahawalpur">Bahawalpur</Select.Option>
                  <Select.Option value="sargodha">Sargodha</Select.Option>
                  <Select.Option value="gujrat">Gujrat</Select.Option>
                  <Select.Option value="sukkhur">Sukkhur</Select.Option>
                  <Select.Option value="jhelum">Jhelum</Select.Option>
                  <Select.Option value="sheikhupura">Sheikhupura</Select.Option>
                  <Select.Option value="sahiwal">Sahiwal</Select.Option>
                  <Select.Option value="jhang">Jhang</Select.Option>
                  <Select.Option value="abbotabad">Abbotabad</Select.Option>
                  <Select.Option value="kasur">Kasur</Select.Option>
                  <Select.Option value="miawali">Miawali</Select.Option>
                  <Select.Option value="attok">Attok</Select.Option>
                  <Select.Option value="mardan">Mardan</Select.Option>
                  <Select.Option value="deraIsmailKhan">Deraismailkhan</Select.Option>
                  <Select.Option value="mansehra">Mansehra</Select.Option>
                </Select>
              </div>
            </div>

            <div className="menu">
              <div className="my-7px">Pricing</div>
              <div className="flex">
                <i className="icon is-lg ri-wallet-line" />
                <Slider className="flex-grow" step={100} range defaultValue={[1000, 5000]} min={100} max={20000} tipFormatter={(value) => `${value} PKR`} />
                <i className="icon is-lg ri-wallet-2-line" />
              </div>
            </div>

            <div className="menu">
              <button type="button" className="menu-trigger active btn is-unstyle is-block py-7px">
                Features
              </button>
              <div>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" />
                  <span className="label block">
                    <i className="icon is-lg ri-coupon-3-fill" />
                    Offer Discount
                  </span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" />
                  <span className="label block">
                    <i className="icon is-lg ri-bank-card-line" /> Credit card
                  </span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" />
                  <span className="label block">
                    <i className="icon is-lg ri-parking-box-line" /> Parking
                  </span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" />
                  <span className="label block">
                    <i className="icon is-lg ri-disc-line" /> DJ
                  </span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" />
                  <span className="label block">
                    <i className="icon is-lg ri-store-2-line" /> Indoor Seating
                  </span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" />
                  <span className="label block">
                    <i className="icon is-lg ri-cake-line" /> Booking
                  </span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" />
                  <span className="label block">
                    <i className="icon is-lg ri-wifi-line" /> Wifi
                  </span>
                </label>
                <Expend buttonClass="btn is-unstyle is-block clr-primary" showText="+9 more">
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" /> <span className="label block">Free Cocktail or Mocktail</span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" /> <span className="label block">30% Discount</span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" /> <span className="label block">Free Dessert</span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" /> <span className="label block">Happy Hours</span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" /> <span className="label block">Free Glass of Wine</span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" /> <span className="label block">Free Appetizer</span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" /> <span className="label block">Free Beer</span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" /> <span className="label block">Other Offers</span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" /> <span className="label block">40% Discount</span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" /> <span className="label block">Extra 200 EazyPoints </span>
                  </label>
                </Expend>
              </div>
            </div>
            <div className="menu">
              <button type="button" className="menu-trigger btn is-unstyle is-block py-7px active flex">
                CUISINES
              </button>
              <div>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" />
                  <span className="label block">
                    <i className="icon is-lg ri-restaurant-line" /> North Indian
                  </span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" />
                  <span className="label block">
                    <i className="icon is-lg ri-restaurant-line" /> Chinese
                  </span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" />
                  <span className="label block">
                    <i className="icon is-lg ri-restaurant-line" /> Modern Indian
                  </span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" />
                  <span className="label block">
                    <i className="icon is-lg ri-restaurant-line" /> Italian
                  </span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" />
                  <span className="label block">
                    <i className="icon is-lg ri-restaurant-line" /> Cafe
                  </span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" />
                  <span className="label block">
                    <i className="icon is-lg ri-restaurant-line" /> Pan Asian
                  </span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" />
                  <span className="label block">
                    <i className="icon is-lg ri-restaurant-line" /> South Indian
                  </span>
                </label>
                <Expend buttonClass="btn is-unstyle is-block clr-primary" showText="+11 more">
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" />
                    <span className="label block">
                      <i className="icon is-lg ri-restaurant-line" /> Fast Food
                    </span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" />
                    <span className="label block">
                      <i className="icon is-lg ri-restaurant-line" /> Finger Food
                    </span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" />
                    <span className="label block">
                      <i className="icon is-lg ri-restaurant-line" /> Fusion
                    </span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" />
                    <span className="label block">
                      <i className="icon is-lg ri-restaurant-line" /> Indian
                    </span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" />
                    <span className="label block">
                      <i className="icon is-lg ri-restaurant-line" /> Mughlai
                    </span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" />
                    <span className="label block">
                      <i className="icon is-lg ri-restaurant-line" /> European
                    </span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" />
                    <span className="label block">
                      <i className="icon is-lg ri-restaurant-line" /> Lebanese
                    </span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" />
                    <span className="label block">
                      <i className="icon is-lg ri-restaurant-line" /> Greek
                    </span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" />
                    <span className="label block">
                      <i className="icon is-lg ri-restaurant-line" /> Bengali
                    </span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" />
                    <span className="label block">
                      <i className="icon is-lg ri-restaurant-line" /> Gujarati
                    </span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" />
                    <span className="label block">
                      <i className="icon is-lg ri-restaurant-line" /> Goan
                    </span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" />
                    <span className="label block">
                      <i className="icon is-lg ri-restaurant-line" /> Multicuisine
                    </span>
                  </label>
                </Expend>
              </div>
            </div>
            <div className="menu">
              <button type="button" className="menu-trigger btn is-unstyle is-block py-7px">
                CATEGORIES
              </button>
              <div>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" /> <span className="label block">Casual Dining</span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" /> <span className="label block">Luxury Dining</span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" /> <span className="label block">Hotel Dining</span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" /> <span className="label block">Bar/Pub</span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" /> <span className="label block">Sweet Shop</span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" /> <span className="label block">Cafe/Bakery</span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" /> <span className="label block">Delivery Only</span>
                </label>
                <Expend buttonClass="btn is-unstyle is-block clr-primary" showText="+1 more">
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" /> <span className="label block">Takeaway</span>
                  </label>
                  <label className="control w-24 my-2">
                    <input className="checkbox" type="checkbox" /> <span className="label block">Other</span>
                  </label>
                </Expend>
              </div>
            </div>
            <div className="menu">
              <button type="button" className="menu-trigger btn is-unstyle is-block py-7px">
                MEAL TYPES
              </button>
              <div>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" /> <span className="label block">Set Menu</span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" /> <span className="label block">A`la carte</span>
                </label>
                <label className="control w-24 my-2">
                  <input className="checkbox" type="checkbox" /> <span className="label block">Buffet</span>
                </label>
              </div>
            </div>
          </form>
        </div>
        <div className="column w-18">
          <div className="flex justify-between align-middle mb-7px">
            <input type="search" className="input mr-1rem is-min is-primary is-lg" placeholder="Search  " />
            <div className="input px-1rem py-0 inline-flex align-middle w-auto event-none">
              <span className="clr-disabled">Sort By </span>
              <select className="input is-unstyle w-auto event-auto">
                <option>Popularity</option>
                <option>Saved</option>
                <option>Critic Rating</option>
                <option>Cost Low to High</option>
                <option>Cost High to Low</option>
              </select>
            </div>
          </div>

          <List
            itemLayout="vertical"
            pagination={{
              onChange: (page) => {
                console.log(page);
              },
              pageSize: 12,
            }}
            grid={{
              gutter: 4,
              xs: 1,
              sm: 2,
              lg: 3,
              xxl: 4,
            }}
            dataSource={props.result}
            renderItem={(item) => (
              <List.Item>
                <RestaurantCard address={item.address} cuisines={item.cuisines} favorite={item.favorite} image={item.image} link={item.link} name={item.name} pricerange={item.pricerange} rating={item.rating} reviews={item.reviews} />
              </List.Item>
            )}
          />
        </div>
      </section>
    </>
  );
}
