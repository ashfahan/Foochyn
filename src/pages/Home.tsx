import React, { Component } from "react";
import TitleBg from "../images/home-title-bg.jpg";
import { Carousel, Select, DatePicker, TimePicker } from "antd";
import moment from "moment";

import ResturantCard from "../components/ResturantCard";
import LocationCard from "../components/LocationCard";
import "../scss/home.scss";

class Home extends Component {
  NextArrow(props) {
    return <div className={`${props.className}`} style={{ ...props.style }} onClick={props.onClick} />;
  }
  PrevArrow(props) {
    return <div className={`${props.className}`} style={{ ...props.style }} onClick={props.onClick} />;
  }

  render() {
    return (
      <div>
        <section className="clr-white flex justify-center align-middle h-min-75vh bg-img" style={{ backgroundImage: `linear-gradient(to bottom, hsla(0, 0%, 0%, 0.3), hsla(0, 0%, 0%, 0.5)), url(${TitleBg})` }}>
          <div className="w-min-75vw p-10">
            <h1 className="txt-center txt-cap">Find your table for any occasion</h1>
            <div className="group">
              <DatePicker placeholder="Date" defaultValue={moment(moment.now())} className="input" format="D/M/YYYY" />
              <TimePicker placeholder="Time" defaultValue={moment(moment.now()).add(1, "hour")} className="input" format="h:mm a" minuteStep={30} />
              <Select bordered={false} suffixIcon={<i className="clr-body is-lg icon ri-user-line" />} className="input p-0" showSearch defaultValue="2">
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
              <Select bordered={false} suffixIcon={<i className="clr-body is-lg icon ri-map-pin-line" />} className="input p-0" showSearch placeholder="Place">
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
              <button className="btn is-sld is-primary">Search Table</button>
            </div>
          </div>
        </section>

        <section className="py-6 px-4 py-4@md">
          <h2 className="txt-cap mb-0">Popular Offer in {"city"}</h2>
          <hr className="clr-primary w-3 mt-7px mb-2 o-100" style={{ height: "3px" }} />
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

        <section className="py-6 px-4 py-4@md">
          <h2 className="txt-cap mb-0">Featured restaurants in {"city"}</h2>
          <hr className="clr-primary w-3 mt-7px mb-2 o-100" style={{ height: "3px" }} />
          <div className="grid has-gap-lg">
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={true} title="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
          </div>
        </section>

        <section className="py-6 px-4 py-4@md">
          <h2 className="txt-cap mb-0">Popular Areas in {"city"}</h2>
          <hr className="clr-primary w-3 mt-7px mb-2 o-100" style={{ height: "3px" }} />
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

        <section className="py-6 px-4 py-4@md">
          <h2 className="txt-cap mb-0">Popular Cuisines</h2>
          <hr className="clr-primary w-3 mt-7px mb-2 o-100" style={{ height: "3px" }} />
          <div className="grid has-gap-lg">
            <div className="column w-6@lg w-12@sm w-24">
              <div className="grid align-middle img-bg bg-primary clr-white p-4 is-round" style={{ backgroundImage: 'linear-gradient(to bottom, hsla(0, 0%, 0%, 0.75), hsla(0, 0%, 0%, 0.75)), url("https://source.unsplash.com/512x384/?South,Indian,food")' }}>
                <div className="column w-7">
                  <i className="icon ri-restaurant-2-line ri-4x" />
                </div>
                <div className="column">
                  <h5>South Indian</h5>
                  <div>648 Restaurants</div>
                </div>
              </div>
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <div className="grid align-middle img-bg bg-primary clr-white p-4 is-round" style={{ backgroundImage: 'linear-gradient(to bottom, hsla(0, 0%, 0%, 0.75), hsla(0, 0%, 0%, 0.75)), url("https://source.unsplash.com/512x384/?North,Indian,food")' }}>
                <div className="column w-7">
                  <i className="icon ri-restaurant-2-line ri-4x" />
                </div>
                <div className="column">
                  <h5>North Indian</h5>
                  <div>562 Restaurants</div>
                </div>
              </div>
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <div className="grid align-middle img-bg bg-primary clr-white p-4 is-round" style={{ backgroundImage: 'linear-gradient(to bottom, hsla(0, 0%, 0%, 0.75), hsla(0, 0%, 0%, 0.75)), url("https://source.unsplash.com/512x384/?Chinese,food")' }}>
                <div className="column w-7">
                  <i className="icon ri-restaurant-2-line ri-4x" />
                </div>
                <div className="column">
                  <h5>Chinese</h5>
                  <div>267 Restaurants</div>
                </div>
              </div>
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <div className="grid align-middle img-bg bg-primary clr-white p-4 is-round" style={{ backgroundImage: 'linear-gradient(to bottom, hsla(0, 0%, 0%, 0.75), hsla(0, 0%, 0%, 0.75)), url("https://source.unsplash.com/512x384/?italian,food")' }}>
                <div className="column w-7">
                  <i className="icon ri-restaurant-2-line ri-4x" />
                </div>
                <div className="column">
                  <h5>italian</h5>
                  <div>94 Restaurants</div>
                </div>
              </div>
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <div className="grid align-middle img-bg bg-primary clr-white p-4 is-round" style={{ backgroundImage: 'linear-gradient(to bottom, hsla(0, 0%, 0%, 0.75), hsla(0, 0%, 0%, 0.75)), url("https://source.unsplash.com/512x384/?italian,food")' }}>
                <div className="column w-7">
                  <i className="icon ri-restaurant-2-line ri-4x" />
                </div>
                <div className="column">
                  <h5>italian</h5>
                  <div>94 Restaurants</div>
                </div>
              </div>
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <div className="grid align-middle img-bg bg-primary clr-white p-4 is-round" style={{ backgroundImage: 'linear-gradient(to bottom, hsla(0, 0%, 0%, 0.75), hsla(0, 0%, 0%, 0.75)), url("https://source.unsplash.com/512x384/?Chinese,food")' }}>
                <div className="column w-7">
                  <i className="icon ri-restaurant-2-line ri-4x" />
                </div>
                <div className="column">
                  <h5>Chinese</h5>
                  <div>267 Restaurants</div>
                </div>
              </div>
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <div className="grid align-middle img-bg bg-primary clr-white p-4 is-round" style={{ backgroundImage: 'linear-gradient(to bottom, hsla(0, 0%, 0%, 0.75), hsla(0, 0%, 0%, 0.75)), url("https://source.unsplash.com/512x384/?North,Indian,food")' }}>
                <div className="column w-7">
                  <i className="icon ri-restaurant-2-line ri-4x" />
                </div>
                <div className="column">
                  <h5>North Indian</h5>
                  <div>562 Restaurants</div>
                </div>
              </div>
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <div className="grid align-middle img-bg bg-primary clr-white p-4 is-round" style={{ backgroundImage: 'linear-gradient(to bottom, hsla(0, 0%, 0%, 0.75), hsla(0, 0%, 0%, 0.75)), url("https://source.unsplash.com/512x384/?South,Indian,food")' }}>
                <div className="column w-7">
                  <i className="icon ri-restaurant-2-line ri-4x" />
                </div>
                <div className="column">
                  <h5>South Indian</h5>
                  <div>648 Restaurants</div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section className="py-6 px-4 py-4@md">
          <h2 className="txt-cap mb-0">Popular restaurants in {"city"}</h2>
          <hr className="clr-primary w-3 mt-7px mb-2 o-100" style={{ height: "3px" }} />
          <div className="grid has-gap-lg">
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={true} title="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
          </div>
        </section>

        <section className="py-6 px-4 py-4@md">
          <h2 className="txt-cap mb-0">Newly added resturants in {"city"}</h2>
          <hr className="clr-primary w-3 mt-7px mb-2 o-100" style={{ height: "3px" }} />
          <div className="grid has-gap-lg">
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x383/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x383/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x383/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard link="#" favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x383/?food,resturant" location={["South Padre Island", "TX"]} pricerange={[1000, 5000]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
          </div>
        </section>

        <section className="py-6 px-4 py-4@md bg-primary clr-white">
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
      </div>
    );
  }
}

export default Home;
