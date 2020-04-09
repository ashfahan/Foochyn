import React, { Component } from "react";
import "../scss/dashboard.scss";
import { Empty, List, DatePicker, Avatar } from "antd";
import Review, { props as ReviewProps } from "../components/Review";
import UploadImage from "../components/UploadImage";
import moment from "moment";
import RestaurantCard from "../components/RestaurantCard";

interface props {
  user: {
    image?: string;
    fullName: string;
    email: string;
    phoneNumber: number;
    dob: Date;
    address: string[];
  };
  favorite?: {
    link: string;
    name: string;
    image: string;
    address: string[];
    pricerange: number[];
    reviews: number;
    rating: number;
    cuisines: string[];
  }[];
  reviews?: ReviewProps[];
}
interface state {
  view: "Setting" | "Reviews" | "Favorite" | "Been There" | "Achivement" | "Recently viewed Restaurant";
}

class Dashboard extends Component<props, state> {
  static defaultProps: props = {
    user: {
      image: "https://api.adorable.io/avatars/285/xyz.png",
      fullName: "Mike Edward",
      email: "mail@mail.com",
      phoneNumber: 12345,
      dob: new Date(Date.now()),
      address: ["South Padre Island", "TX"],
    },
    favorite: [
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
    reviews: [
      { uid: 1, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 2, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 3, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 4, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 5, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 6, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 7, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 8, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 9, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 10, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 11, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 12, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 13, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 14, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 15, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 16, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 17, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 18, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 19, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 20, resturantName: "Resturant XYZ", user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
    ],
  };

  constructor(props) {
    super(props);
    this.state = {
      view: "Setting",
    };
  }

  render() {
    return (
      <>
        <section className="pb-7px px-2 clr-white grid align-bottom has-gap-lg container is-round img-bg" style={{ backgroundImage: "linear-gradient(to bottom, hsla(0, 0%, 0%, 0.3), hsla(0, 0%, 0%, 0.75)), url(https://source.unsplash.com/512x384/?plant)" }}>
          <div className="column w-auto">
            <button className="btn image p-2 bg-white is-circle">
              <img className="img is-circle" src={this.props.user.image} alt="profile" />
              <div className="is-circle absolute top-0 left-0 right-0 bottom-0" style={{ background: "linear-gradient(to bottom, hsla(0, 0%, 0%, 0.0) 65%, hsla(0, 0%, 0%, 0.4))" }}></div>
              <div className="icon clr-white ri-image-add-fill" />
            </button>
          </div>

          <div className="column">
            <h3 className="mb-0">{this.props.user.fullName}</h3>
            <div className="mb-7px">
              <i className="icon ri-map-pin-2-fill"></i>
              <span>{this.formatArray(this.props.user.address, ", ")}</span>
            </div>
            <div className="group event-none">
              <button className="btn is-sld is-primary">05 Foodie</button>
              <button className="btn is-sld is-light inline-flex">(150 Pints To level up)</button>
            </div>
          </div>

          <div className="column flex align-bottom justify-end txt-center">
            <div className="px-1rem border-right">
              <h2 className="mb-0">142</h2>
              <div>Reviews</div>
            </div>
            <div className="px-1rem border-right">
              <h2 className="mb-0">201</h2>
              <div>Photos</div>
            </div>
            <div className="pl-1rem">
              <h2 className="mb-0">3.2k</h2>
              <div>Follower</div>
            </div>
          </div>
        </section>

        <section className="grid has-gap-lg container px-0">
          <div className="column w-6 pl-0">
            <section className="bg-white is-round border border-light shadow-sm py-1rem mb-1rem">
              <div className="menu-item event-none clr-disabled">
                <span className="is-sm txt-upper">Profile</span>
              </div>
              <div className="menu is-primary">
                <button onClick={() => this.setState({ view: "Setting" })} className={`menu-item ${this.state.view === "Setting" ? "active" : ""}`}>
                  Setting
                </button>
                <button onClick={() => this.setState({ view: "Reviews" })} className={`menu-item ${this.state.view === "Reviews" ? "active" : ""}`}>
                  Reviews
                </button>
                <button onClick={() => this.setState({ view: "Favorite" })} className={`menu-item ${this.state.view === "Favorite" ? "active" : ""}`}>
                  Favorite
                </button>
                <button onClick={() => this.setState({ view: "Been There" })} className={`menu-item ${this.state.view === "Been There" ? "active" : ""}`}>
                  Been There
                </button>
                <button onClick={() => this.setState({ view: "Achivement" })} className={`menu-item ${this.state.view === "Achivement" ? "active" : ""}`}>
                  Achivement
                </button>
                <button onClick={() => this.setState({ view: "Recently viewed Restaurant" })} className={`menu-item ${this.state.view === "Recently viewed Restaurant" ? "active" : ""}`}>
                  Recently viewed Restaurant
                </button>
              </div>
            </section>

            <section className="bg-white is-round border border-light shadow-sm py-1rem my-1rem">
              <div className="menu-item event-none clr-disabled">
                <span className="is-sm txt-upper">Online Ordering</span>
              </div>
              <div className="menu is-primary">
                <button className="menu-item">Favorite Food</button>
                <button className="menu-item">Order History</button>
              </div>
            </section>

            <section className="bg-white is-round border border-light shadow-sm py-1rem mt-1rem">
              <div className="menu-item event-none clr-disabled">
                <span className="is-sm txt-upper">Payments & Subscription</span>
              </div>
              <div className="menu is-primary">
                <button className="menu-item">Zomanto Credit</button>
                <button className="menu-item">Manage Cards</button>
                <button className="menu-item">Manage Wallets</button>
              </div>
            </section>
          </div>
          <div className="column pr-0">
            <section className="bg-white is-round border border-light shadow-sm p-1rem h-min-100 flex justify-center">
              {this.state.view === "Setting" ? (
                <div className="w-24">
                  <div className="grid align-middle has-gap-lg">
                    <div className="column w-5 txt-right">
                      <Avatar size={64} src={this.props.user.image} children={this.props.user.fullName.charAt(0)} />
                    </div>
                    <div className="column w-19">
                      <UploadImage accept=".jpeg,.jpg,.png" filelimit={1} name="file" action="https://www.mocky.io/v2/5cc8019d300000980a055e76">
                        <button className="btn is-sld is-primary">
                          <i className="icon ri-upload-2-line"></i> Click to Upload
                        </button>
                      </UploadImage>
                      <div className="is-sm">Supported image format: jpeg, jpg, png</div>
                    </div>
                  </div>
                  <div className="grid align-middle has-gap-lg">
                    <div className="column w-5 txt-right">Name</div>
                    <div className="column w-19">
                      <input type="text" className="input" defaultValue={this.props.user.fullName} />
                    </div>
                  </div>
                  <div className="grid align-middle has-gap-lg">
                    <div className="column w-5 txt-right">Email</div>
                    <div className="column w-19">
                      <input type="email" className="input" defaultValue={this.props.user.email} />
                    </div>
                  </div>
                  <div className="grid align-middle has-gap-lg">
                    <div className="column w-5 txt-right">Phone</div>
                    <div className="column w-19">
                      <input type="tel" className="input" defaultValue={this.props.user.phoneNumber} />
                    </div>
                  </div>
                  <div className="grid align-middle has-gap-lg">
                    <div className="column w-5 txt-right">Address</div>
                    <div className="column w-19">
                      <textarea className="input" rows={3} defaultValue={this.props.user.address}></textarea>
                    </div>
                  </div>
                  <div className="grid align-middle has-gap-lg">
                    <div className="column w-5 txt-right">Date Of Birth</div>
                    <div className="column w-19">
                      <DatePicker suffixIcon={<i className="clr-body icon ri-arrow-down-s-fill" />} placeholder="Date" allowClear={false} defaultValue={moment(new Date(this.props.user.dob))} size="large" className="input is-round-sm<sm" format="D/M/YYYY" />
                    </div>
                  </div>
                </div>
              ) : null}

              {this.state.view === "Reviews" ? (
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
                  renderItem={(item) => <Review resturantName={item.resturantName} user={{ name: item.user.name, image: item.user.image, address: item.user.address }} canEdit={true} uid={item.uid} rating={item.rating} ratingDate={item.ratingDate} review={item.review} />}
                />
              ) : null}

              {this.state.view === "Favorite" ? (
                <List
                  itemLayout="vertical"
                  size="large"
                  pagination={{
                    onChange: (page) => {
                      console.log(page);
                    },
                    pageSize: 6,
                  }}
                  dataSource={this.props.favorite}
                  renderItem={(item) => <RestaurantCard address={item.address} cuisines={item.cuisines} favorite={true} image={item.image} link={item.link} name={item.name} pricerange={item.pricerange} rating={item.rating} reviews={item.reviews} display="inline-block" />}
                />
              ) : null}

              {this.state.view === "Achivement" ? <Empty className="align-self-middle" description="COMING SOON" image={<i className="ri-7x ri-compass-3-line" />} /> : null}
            </section>
          </div>
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

export default Dashboard;
