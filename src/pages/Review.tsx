import React, { useState } from "react";
import { Steps, message, Rate, DatePicker, TimePicker, Select } from "antd";
import moment from "moment";
import UploadFile from "../components/UploadFile";
import { LoadingOutlined } from "@ant-design/icons";

interface props {
  resturant: {
    logo?: "";
    name: string;
    address: string[];
    cuisines: string[];
  };
}

Review.defaultProps = {
  resturant: {
    logo: "https://source.unsplash.com/512x512/?logo",
    name: "Restaurant Name",
    address: ["South Padre Island", "TX"],
    cuisines: ["Chinese", "Italian", "Japanese"],
  },
};

export default function Review(props: props) {
  const [date, SetDate]: [Date, Function] = useState(moment(moment.now()).subtract(1, "hour").toDate());
  const [step, SetStep]: [number, Function] = useState(0);

  function submit() {
    message.success("Processing complete!");
  }

  function formatArray(value: any[] = [], separator = " • ") {
    let result = "";
    for (let index = 0; index < value.length - 1; index++) result = result + value[index] + separator;
    return result + value[value.length - 1];
  }

  return (
    <main className="container py-4">
      <Steps current={step}>
        <Steps.Step title="Review" icon={step === 0 ? <LoadingOutlined /> : <i className="icon after-hide ri-file-edit-line" />} />
        <Steps.Step title="Rate" icon={step === 1 ? <LoadingOutlined /> : <i className="icon after-hide ri-star-half-line" />} />
        <Steps.Step title="Extra" icon={step === 2 ? <LoadingOutlined /> : <i className="icon after-hide ri-add-circle-line" />} />
        <Steps.Step title="Summary" icon={step == 3 ? <LoadingOutlined /> : <i className="icon after-hide ri-file-list-2-line" />} />
      </Steps>
      <div className="py-1rem">
        {step === 0 && (
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
        {step === 1 && (
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
        {step === 2 && (
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
                    let _date = e?.toDate() || date;
                    console.log(_date, typeof _date);
                    SetDate(_date);
                  }}
                  placeholder="Date"
                  allowClear={false}
                  defaultValue={moment(date)}
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
                    let _date = date;
                    _date.setHours(e?.toDate().getHours() || 0);
                    _date.setMinutes(e?.toDate().getMinutes() || 0);
                    console.log(_date, typeof _date);
                    SetDate(_date);
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
        {step === 3 && (
          <>
            <section className="grid">
              <div className="column w-logo">
                <img src={props.resturant.logo} className="img is-round" alt="" />
              </div>
              <div className="column w-20">
                <h1 className="clr-black mb-7px">{props.resturant.name}</h1>
                <div className="is-lg">{formatArray(props.resturant.cuisines)}</div>
                <div className="is-lg">{formatArray(props.resturant.address, ", ")}</div>
              </div>
            </section>
          </>
        )}
      </div>
      <div className="txt-right">
        {step > 0 && (
          <button className="btn is-out is-primary mr-7px" onClick={() => SetStep(step - 1)}>
            Previous
          </button>
        )}
        {step < 3 && (
          <button className="btn is-sld is-primary" onClick={() => SetStep(step + 1)}>
            Next
          </button>
        )}
        {step === 3 && (
          <button className="btn is-sld is-primary" onClick={() => submit()}>
            Done
          </button>
        )}
      </div>
    </main>
  );
}
