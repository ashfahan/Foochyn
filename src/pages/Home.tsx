import React, { Component } from "react";
import TitleBg from "../images/home-title-bg.jpg";
import { Carousel, Select, DatePicker, TimePicker } from "antd";
import moment from "moment";

import ResturantCard from "../components/ResturantCard";
import LocationCard from "../components/LocationCard";
import CuisinesCard from "../components/CuisinesCard";
import "../scss/home.scss";

import chinese from "../images/cuisine/chinese.webp";
import european from "../images/cuisine/european.webp";
import italian from "../images/cuisine/italian.webp";
import japanese from "../images/cuisine/japanese.webp";
import mediterranean from "../images/cuisine/mediterranean.webp";
import northindian from "../images/cuisine/northindian.webp";
import panasian from "../images/cuisine/pan-asian.webp";
import southindian from "../images/cuisine/south-indian.webp";

class Home extends Component {
  NextArrow(props) {
    return <div className={`${props.className}`} style={{ ...props.style }} onClick={props.onClick} />;
  }
  PrevArrow(props) {
    return <div className={`${props.className}`} style={{ ...props.style }} onClick={props.onClick} />;
  }

  render() {
    return (
      <>
        <section className="mb-2 clr-white flex justify-center align-middle bg-img" style={{ minHeight: "400px", backgroundImage: `linear-gradient(to bottom, hsla(0, 0%, 0%, 0.3), hsla(0, 0%, 0%, 0.5)), url(${TitleBg})` }}>
          <div className="w-24 p-6">
            <h1 className="txt-center txt-cap">Find your table for any occasion</h1>
            <div className="grid block flex@lg">
              <div className="column group w-11@lg block flex@sm">
                <div className="control has-icon-left is-lg my-0@sm">
                  <i className="clr-body z-10 icon is-left ri-calendar-line"></i>
                  <DatePicker suffixIcon={<i className="clr-body icon ri-arrow-down-s-fill" />} placeholder="Date" allowClear={false} defaultValue={moment(moment.now())} size="large" className="input is-round-sm@sm" format="D/M/YYYY" />
                </div>
                <div className="control has-icon-left is-lg my-7px my-0@sm">
                  <i className="clr-body z-10 icon is-left ri-calendar-line"></i>
                  <TimePicker suffixIcon={<i className="clr-body icon ri-arrow-down-s-fill" />} placeholder="Time" allowClear={false} defaultValue={moment(moment.now()).add(1, "hour")} size="large" className="input is-round-sm@sm" format="h:mm a" minuteStep={15} />
                </div>
                <div className="control has-icon-left is-lg my-0@sm">
                  <i className="clr-body z-10 icon is-left ri-user-line"></i>
                  <Select bordered={false} size="large" suffixIcon={<i className="clr-body icon ri-arrow-down-s-fill" />} className="input is-round-sm@sm" showSearch defaultValue="2">
                    <Select.Option value="1">1 People</Select.Option>
                    <Select.Option value="2">2 People</Select.Option>
                    <Select.Option value="3">3 People</Select.Option>
                    <Select.Option value="4">4 People</Select.Option>
                    <Select.Option value="5">5 People</Select.Option>
                    <Select.Option value="6">6 People</Select.Option>
                    <Select.Option value="7">7 People</Select.Option>
                    <Select.Option value="8">8 People</Select.Option>
                    <Select.Option value="9">9 People</Select.Option>
                    <Select.Option value="10">10 People</Select.Option>
                    <Select.Option value="11">11 People</Select.Option>
                    <Select.Option value="12">12 People</Select.Option>
                    <Select.Option value="13">13 People</Select.Option>
                    <Select.Option value="14">14 People</Select.Option>
                    <Select.Option value="15">15 People</Select.Option>
                  </Select>
                </div>
              </div>
              <div className="column w-7@lg">
                <div className="control has-icon-left is-lg">
                  <i className="clr-body z-10 icon is-left ri-map-pin-line"></i>
                  <Select bordered={false} size="large" suffixIcon={<i className="clr-body icon ri-arrow-down-s-fill" />} className="input" showSearch placeholder="Location, Restaurant, Cuisine">
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
              <div className="column w-5@lg">
                <button className="btn is-block h-100 is-sld is-primary">Search Table</button>
              </div>
            </div>
          </div>
        </section>

        <section className="p-4 py-2@md">
          <h2 className="txt-cap mb-0">Popular Offer in {"city"}</h2>
          <hr className="clr-primary w-3 mt-7px mb-1rem o-100" style={{ height: "3px" }} />
          <Carousel
            {...{
              nextArrow: <this.NextArrow />,
              prevArrow: <this.PrevArrow />
            }}
            className="txt-center grid flex"
            autoplay
            dots
            accessibility
            adaptiveHeight
            arrows
            infinite
            draggable
            slidesToShow={6}
            slidesToScroll={6}
            responsive={[
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 6,
                  slidesToScroll: 6
                }
              },
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 4,
                  slidesToScroll: 4
                }
              },
              {
                breakpoint: 576,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 450,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
            ]}
          >
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
            <div className="px-7px w-auto">
              <img className="img is-round-sm shadow-sm" src="https://im1.dineout.co.in/images/uploads/misc/2020/Jan/7/20offtotalbill.jpg" alt="deal" />
            </div>
          </Carousel>
        </section>

        <section className="p-4 py-2@md">
          <h2 className="txt-cap mb-0">Featured restaurants in {"city"}</h2>
          <hr className="clr-primary w-3 mt-7px mb-1rem o-100" style={{ height: "3px" }} />
          <div className="grid has-gap-lg">
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} name="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} name="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={true} name="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} name="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
          </div>
        </section>

        <section className="p-4 py-2@md">
          <h2 className="txt-cap mb-0">Popular Areas in {"city"}</h2>
          <hr className="clr-primary w-3 mt-7px mb-1rem o-100" style={{ height: "3px" }} />
          <div className="grid has-gap-lg">
            <div className="column w-6@lg w-12@sm w-24">
              <LocationCard location="Lahore" resurantcount={500} image="https://source.unsplash.com/512x384/?Lahore" />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <LocationCard location="Islamabad" resurantcount={500} image="https://source.unsplash.com/512x384/?Islamabad" />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <LocationCard location="Karachi" resurantcount={500} image="https://source.unsplash.com/512x384/?Karachi" />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <LocationCard location="Peshawar" resurantcount={500} image="https://source.unsplash.com/512x384/?Peshawar" />
            </div>
          </div>
        </section>

        <section className="p-4 py-2@md">
          <h2 className="txt-cap mb-0">Popular Cuisines</h2>
          <hr className="clr-primary w-3 mt-7px mb-1rem o-100" style={{ height: "3px" }} />
          <div className="grid has-gap-lg">
            <div className="column w-6@lg w-12@sm w-24">
              <CuisinesCard image={chinese} name="Chinese" resurantcount={648} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <CuisinesCard image={european} name="European" resurantcount={562} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <CuisinesCard image={italian} name="Italian" resurantcount={267} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <CuisinesCard image={japanese} name="Japanese" resurantcount={94} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <CuisinesCard image={mediterranean} name="Mediterranean" resurantcount={94} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <CuisinesCard image={northindian} name="North Indian" resurantcount={267} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <CuisinesCard image={panasian} name="Pan Asian" resurantcount={562} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <CuisinesCard image={southindian} name="South Indian" resurantcount={648} />
            </div>
          </div>
        </section>

        <section className="p-4 py-2@md">
          <h2 className="txt-cap mb-0">Popular restaurants in {"city"}</h2>
          <hr className="clr-primary w-3 mt-7px mb-1rem o-100" style={{ height: "3px" }} />
          <div className="grid has-gap-lg">
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} name="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} name="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={true} name="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} name="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
          </div>
        </section>

        <section className="p-4 py-2@md">
          <h2 className="txt-cap mb-0">Newly added resturants in {"city"}</h2>
          <hr className="clr-primary w-3 mt-7px mb-1rem o-100" style={{ height: "3px" }} />
          <div className="grid has-gap-lg">
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} name="Ceciches Ceciches" image="https://source.unsplash.com/512x383/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} name="Ceciches Ceciches" image="https://source.unsplash.com/512x383/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} name="Ceciches Ceciches" image="https://source.unsplash.com/512x383/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} name="Ceciches Ceciches" image="https://source.unsplash.com/512x383/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
          </div>
        </section>

        <section className="p-4 py-4@md bg-primary clr-white">
          <h2 className="txt-center txt-cap">Why Book a Restaurant With Foochyn</h2>
          <div className="grid has-gap-lg txt-center">
            <div className="column p-2 w-6@lg w-12@sm w-24">
              <div className="ri-search-eye-line ri-8x" />
              <h4 className="mb-6">Discover Restaurants</h4>
              <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem possimus reiciendis, sit dolorum alias expedita praesentium natus dolor</div>
            </div>
            <div className="column p-2 w-6@lg w-12@sm w-24">
              <div className="ri-feedback-line ri-8x" />
              <h4 className="mb-6">Restaurants Reviews</h4>
              <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem possimus reiciendis, sit dolorum alias expedita praesentium natus dolor</div>
            </div>
            <div className="column p-2 w-6@lg w-12@sm w-24">
              <div className="ri-calendar-check-line ri-8x" />
              <h4 className="mb-6">Quick Booking</h4>
              <div>Instant booking in 20 seconds!. amet consectetur adipisicing elit. Voluptatem possimus reiciendis, sit dolorum alias expedita praesentium natus</div>
            </div>
            <div className="column p-2 w-6@lg w-12@sm w-24">
              <div className="ri-refund-line ri-8x" />
              <h4 className="mb-6">Free Cancelation</h4>
              <div>Free cancellation always flexible always free. amet consectetur adipisicing elit. Voluptatem possimus reiciendis, sit dolorum alias expedita natus</div>
            </div>
          </div>
        </section>
      </>
    );
  }
}

export default Home;
