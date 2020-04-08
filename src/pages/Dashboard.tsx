import React, { Component } from "react";
import "../scss/dashboard.scss";
import { Empty, List } from "antd";
import Review, { props as ReviewProps } from "../components/Review";
import UploadImage from "../components/UploadImage";

interface props {
  user: {
    image?: string;
    fullName: string;
    email: string;
    phoneNumber: number;
    dob: string;
    address: string[];
  };
  reviews?: ReviewProps[];
}
interface state {
  view: "Setting" | "Dineline" | "Reviews" | "Favorite" | "Been There" | "Achivement" | "Recently viewed Restaurant";
}

class Dashboard extends Component<props, state> {
  static defaultProps: props = {
    user: {
      image: "https://api.adorable.io/avatars/285/xyz.png",
      fullName: "Mike Edward",
      email: "mail@mail.com",
      phoneNumber: 12345,
      dob: "01 01 0111",
      address: ["South Padre Island", "TX"],
    },
    reviews: [
      { uid: 1, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 2, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 3, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 4, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 5, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 6, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 7, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 8, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 9, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 10, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 11, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 12, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 13, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 14, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 15, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 16, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 17, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 18, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 19, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
      { uid: 20, user: { name: "Mike Edward", image: "https://api.adorable.io/avatars/285/xyz.png", address: "Location" }, rating: { overall: Math.trunc((Math.random() * 100) % 5), ambience: Math.trunc((Math.random() * 100) % 5), music: Math.trunc((Math.random() * 100) % 5), food: Math.trunc((Math.random() * 100) % 5), service: Math.trunc((Math.random() * 100) % 5) }, ratingDate: "25 Novembder 2018", review: "This all day dining place serves delectable buffets for breakfast, lunch and dinner apart from an À la carte menu which offers Indian and global cuisines. The seating arrangement is simple but well-spaced and the poolside view adds to the charm." },
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
              <img className="img is-circle" src="https://api.adorable.io/avatars/285/xyz.png" alt="profile" />
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
            <div className="bg-white is-round border py-1rem mb-1rem">
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
                <button onClick={() => this.setState({ view: "Dineline" })} className={`menu-item ${this.state.view === "Dineline" ? "active" : ""}`}>
                  Dineline
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
            </div>

            <div className="bg-white is-round border py-1rem my-1rem">
              <div className="menu-item event-none clr-disabled">
                <span className="is-sm txt-upper">Online Ordering</span>
              </div>
              <div className="menu is-primary">
                <button className="menu-item">Favorite Food</button>
                <button className="menu-item">Order History</button>
              </div>
            </div>

            <div className="bg-white is-round border py-1rem mt-1rem">
              <div className="menu-item event-none clr-disabled">
                <span className="is-sm txt-upper">Payments & Subscription</span>
              </div>
              <div className="menu is-primary">
                <button className="menu-item">Zomanto Credit</button>
                <button className="menu-item">Manage Cards</button>
                <button className="menu-item">Manage Wallets</button>
              </div>
            </div>
          </div>
          <div className="column pr-0">
            <div className="bg-white is-round border p-1rem h-min-100 flex justify-center">
              {this.state.view === "Setting" ? (
                <div className="w-24">
                  <div className="grid align-middle has-gap-lg">
                    <div className="column w-7 txt-right">
                      <img className="img is-circle w-9" src="https://api.adorable.io/avatars/285/xyz.png" alt="profile" />
                    </div>
                    <div className="column w-17">
                      <UploadImage accept=".jpeg,.jpg,.png" filelimit={1} name="file" action="https://www.mocky.io/v2/5cc8019d300000980a055e76">
                        <button className="btn is-sld is-primary">
                          <i className="icon ri-upload-2-line"></i> Click to Upload
                        </button>
                      </UploadImage>
                      <div className="is-sm mt-1rem">Supported image format: jpeg, jpg, png</div>
                    </div>
                  </div>
                  <div>asa</div>
                  <div>asa</div>
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
                  renderItem={(item) => <Review user={{ name: item.user.name, image: item.user.image, address: item.user.address }} canEdit={true} uid={item.uid} rating={item.rating} ratingDate={item.ratingDate} review={item.review} />}
                />
              ) : null}

              {this.state.view === "Dineline" ? <Empty className="align-self-middle" description="COMING SOON" image={<i className="ri-7x ri-compass-3-line" />} /> : null}
            </div>
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
