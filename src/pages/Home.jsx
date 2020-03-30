import React, { Component } from "react";
import TitleBg from "../images/home-title-bg.jpg";

import { Select, DatePicker, TimePicker } from "antd";

import ResturantCard from "../components/ResturantCard";
import LocationCard from "../components/LocationCard";
import "../scss/home.scss";

class Home extends Component {
  render() {
    return (
      <div>
        <section data-section="Find your table" className="clr-white flex justify-center align-middle h-min-75vh bg-img" style={{ backgroundImage: `linear-gradient(to bottom, hsla(0, 0%, 0%, 0.3), hsla(0, 0%, 0%, 0.5)), url(${TitleBg})` }}>
          <div className="w-min-75vw p-10">
            <h1 className="txt-center txt-cap">Find your table for any occasion</h1>
            <div className="group">
              <DatePicker placeholder="Date" className="input" format="DD/MM/YYYY" />
              <TimePicker placeholder="Time" className="input" use12Hours format="h:mm a" />
              <Select bordered={false} className="input p-0" showSearch placeholder="People">
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
              <Select bordered={false} className="input p-0" showSearch placeholder="Place">
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

        <section data-section="Find your table" className="py-6 px-4">
          <h2 className="txt-center txt-cap mb-4">Popular restaurants in {"city"}</h2>
          <div className="grid has-gap-lg">
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={["1000", "5000"]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={["1000", "5000"]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard favorite={true} title="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={["1000", "5000"]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x384/?food,resturant" location={["South Padre Island", "TX"]} pricerange={["1000", "5000"]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
          </div>
        </section>

        <section data-section="Find your table" className="py-6 px-4">
          <h2 className="txt-center txt-cap mb-4">Featured Areas in {"city"}</h2>
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

        <section data-section="Find your table" className="py-6 px-4">
          <h2 className="txt-center txt-cap mb-4">Newly added resturants in {"city"}</h2>
          <div className="grid has-gap-lg">
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x383/?food,resturant" location={["South Padre Island", "TX"]} pricerange={["1000", "5000"]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x383/?food,resturant" location={["South Padre Island", "TX"]} pricerange={["1000", "5000"]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x383/?food,resturant" location={["South Padre Island", "TX"]} pricerange={["1000", "5000"]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
            <div className="column w-6@lg w-12@sm w-24">
              <ResturantCard favorite={false} title="Ceciches Ceciches" image="https://source.unsplash.com/512x383/?food,resturant" location={["South Padre Island", "TX"]} pricerange={["1000", "5000"]} reviews={500} rating={2.5} cuisines={["Barbecue Chinese", "North Indian"]} />
            </div>
          </div>
        </section>

        <section data-section="Find your table" className="py-6 px-4">
          <h2 className="txt-center txt-cap mb-4">Our Partners</h2>
        </section>

        <section data-section="Find your table" className="py-6 px-4 bg-primary clr-white">
          <h2 className="txt-center txt-cap mb-0">Why Book a Restaurant With Foochyn</h2>
          <div className="grid has-gap-lg txt-center">
            <div className="column px-1rem w-6@lg w-12@sm w-24 my-2">
              <div className="ri-search-eye-line ri-10x"></div>
              <h4 className="mb-10">Discover Restaurants</h4>
              <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem possimus reiciendis, sit dolorum alias expedita praesentium natus dolor maxime accusantium optio id mollitia quia temporibus nemo eius vero, ratione minus! </div>
            </div>
            <div className="column px-1rem w-6@lg w-12@sm w-24 my-2">
              <div className="ri-feedback-line ri-10x"></div>
              <h4 className="mb-10">Restaurants Reviews</h4>
              <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem possimus reiciendis, sit dolorum alias expedita praesentium natus dolor maxime accusantium optio id mollitia quia temporibus nemo eius vero, ratione minus! </div>
            </div>
            <div className="column px-1rem w-6@lg w-12@sm w-24 my-2">
              <div className="ri-calendar-check-line ri-10x"></div>
              <h4 className="mb-10">Quick Booking</h4>
              <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem possimus reiciendis, sit dolorum alias expedita praesentium natus dolor maxime accusantium optio id mollitia quia temporibus nemo eius vero, ratione minus! </div>
            </div>
            <div className="column px-1rem w-6@lg w-12@sm w-24 my-2">
              <div className="ri-refund-line ri-10x"></div>
              <h4 className="mb-10">Free Cancelation</h4>
              <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem possimus reiciendis, sit dolorum alias expedita praesentium natus dolor maxime accusantium optio id mollitia quia temporibus nemo eius vero, ratione minus! </div>
            </div>
          </div>
        </section>
      </div>
    );
  }
}

export default Home;
