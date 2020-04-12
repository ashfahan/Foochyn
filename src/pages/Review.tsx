import React, { useState } from "react";
import { Steps, message, Rate, DatePicker, TimePicker, Select } from "antd";
import moment from "moment";
import UploadFile from "../components/UploadFile";

interface props {
  image?: "";
  name: string;
  address: string[];
  cuisines: string[];
}

Review.defaultProps = {
  image: "https://source.unsplash.com/512x512/?logo",
  name: "Restaurant Name",
  address: ["South Padre Island", "TX"],
  cuisines: ["Chinese", "Italian", "Japanese"],
};

export default function Review() {
  const [date, setDate]: [Date, Function] = useState(new Date());
  const [step, setStep]: [number, Function] = useState(0);

  function submit() {
    message.success("Processing complete!");
  }

  return (
    <main className="container py-4">
      <Steps current={step}>
        <Steps.Step title="Review" icon={<i className="ri-file-edit-line" />} />
        <Steps.Step title="Rate" icon={<i className="ri-star-half-line" />} />
        <Steps.Step title="Extra" icon={<i className="ri-add-circle-line" />} />
        <Steps.Step title="Summary" icon={<i className="ri-file-list-2-line" />} />
      </Steps>
      <div className="py-1rem">
        {step === 0 && (
          <>
            <h2 className="txt-cap mb-0">Write Your Review</h2>
            <hr className="clr-primary w-2 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
            <textarea placeholder="Write your thought and ideas about this resturant" className="input" rows={8}></textarea>

            <h5 className="mt-2">Do you have any picture to share?</h5>
            <hr className="clr-primary w-2 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />
            <UploadFile accept=".jpeg,.jpg,.png" action="https://www.mocky.io/v2/5cc8019d300000980a055e76">
              <button className="btn is-sld is-primary font-bold">Add A picture</button>
            </UploadFile>
          </>
        )}
        {step === 1 && (
          <>
            <div className="flex justify-between">
              <h3 className="txt-cap mb-0">Rate your experience</h3>
              <div className="clr-disabled">Click to select a rating</div>
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
            <h3 className="txt-cap mb-0">Extra (Optional)</h3>
            <hr className="clr-primary w-2 mt-7px mb-1rem o-100" style={{ height: "3px", minWidth: "3rem" }} />

            <div className="grid align-middle">
              <div className="column w-12 mb-0">What sort of visit was this?</div>
              <ul className="column w-12 txt-right mb-0 list is-inline">
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="visitt_type" /> <span className="label">Couples</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="visitt_type" /> <span className="label">Family</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="visitt_type" /> <span className="label">Friends</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="visitt_type" /> <span className="label">Business</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="visitt_type" /> <span className="label">Solo</span>
                  </label>
                </li>
              </ul>
            </div>

            <div className="grid align-middle">
              <div className="column w-12 mb-0">When did you visit?</div>
              <div className="column w-12 txt-right mb-0">
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

            <h6 className="mt-1rem column">Could you say a little more about it?</h6>
            <div className="grid">
              <div className="column">
                Does this restaurant primarily serve <b className="clr-primary">Healthy</b> cuisine?
              </div>
              <ul className="list is-inline column txt-right">
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="Healthy" /> <span className="label">Yes</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="Healthy" /> <span className="label">No</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="Healthy" /> <span className="label">Not Sure</span>
                  </label>
                </li>
              </ul>
            </div>
            <div className="grid">
              <div className="column">
                Is this restaurant <b className="clr-primary">family-friendly</b>?
              </div>
              <ul className="list is-inline column txt-right">
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="family_friendly" /> <span className="label">Yes</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="family_friendly" /> <span className="label">No</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="family_friendly" /> <span className="label">Not Sure</span>
                  </label>
                </li>
              </ul>
            </div>
            <div className="grid">
              <div className="column">
                Is this restaurant good for <b className="clr-primary">local cuisine</b>?
              </div>
              <ul className="list is-inline column txt-right">
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="local_cuisine" /> <span className="label">Yes</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="local_cuisine" /> <span className="label">No</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="local_cuisine" /> <span className="label">Not Sure</span>
                  </label>
                </li>
              </ul>
            </div>
            <div className="grid">
              <div className="column">
                Does this restaurant offer <b className="clr-primary">table service</b>?
              </div>
              <ul className="list is-inline column txt-right">
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="table_service" /> <span className="label">Yes</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="table_service" /> <span className="label">No</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="table_service" /> <span className="label">Not Sure</span>
                  </label>
                </li>
              </ul>
            </div>
            <div className="grid">
              <div className="column">
                Does this restaurant have <b className="clr-primary">tables with seating</b>?
              </div>
              <ul className="list is-inline column txt-right">
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="tables_with_seating" /> <span className="label">Yes</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="tables_with_seating" /> <span className="label">No</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="tables_with_seating" /> <span className="label">Not Sure</span>
                  </label>
                </li>
              </ul>
            </div>
            <div className="grid">
              <div className="column">
                Does this restaurant have a <b className="clr-primary">TV</b>?
              </div>
              <ul className="list is-inline column txt-right">
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="TV" /> <span className="label">Yes</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="TV" /> <span className="label">No</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="TV" /> <span className="label">Not Sure</span>
                  </label>
                </li>
              </ul>
            </div>
            <div className="grid">
              <div className="column">
                How <b className="clr-primary">expensive</b> is this restaurant?
              </div>
              <ul className="list is-inline column txt-right">
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="Pricy" /> <span className="label">Cheap</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="Pricy" /> <span className="label">Fair</span>
                  </label>
                </li>
                <li>
                  <label className="control">
                    <input type="radio" className="radio is-primary" name="Pricy" /> <span className="label">Pricy</span>
                  </label>
                </li>
              </ul>
            </div>

            <h6>What dish or dishes do you recommend?</h6>

            <Select mode="multiple" style={{ width: "100%" }} placeholder="Please select">
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
          </>
        )}
      </div>
      <div className="txt-right">
        {step > 0 && (
          <button className="btn is-out is-primary mr-7px" onClick={() => setStep(step - 1)}>
            Previous
          </button>
        )}
        {step < 3 && (
          <button className="btn is-sld is-primary" onClick={() => setStep(step + 1)}>
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
