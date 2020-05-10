import React, { useState } from "react";
import { DatePicker, Tabs, Select } from "antd";
import moment from "moment";

export default function ResturantDashboard() {
  const [view, setView] = useState<"Reserve" | "Floor" | "List" | "Grid" | "Timeline" | "Guests" | "Reports" | "Settings">("Settings");

  return (
    <>
      <section className="grid justify-between bg-primary lyt-header is-collapse clr-white">
        {view === "Settings" || view === "Guests" ? (
          <div className="column txt-center txt-upper">{view}</div>
        ) : (
          <>
            <div className="column w-8">
              <label className="control has-icon-left">
                <i className="icon is-left ri-search-2-line" />
                <input type="search" className="input is-min bg-hide is-light autoExpand" placeholder="Search" />
              </label>
            </div>
            <div className="column w-8 txt-center">
              <DatePicker dropdownClassName="center" suffixIcon={<i className="icon ri-arrow-down-s-fill" />} placeholder="Date" allowClear={false} defaultValue={moment(moment.now())} className="bg-hide input border-hide shadow-none clr-inherit txt-center w-auto" format="dddd,  D MMM YYYY" />
            </div>
            <div className="column w-8 flex align-middle justify-end">
              <button className="mr-1rem btn is-unstyle inline-flex align-middle">
                <i className="icon is-lg ri-check-line bg-white clr-primary is-circle mr-7px after-hide" style={{ padding: "10px" }} />
                Clear
              </button>
              <div>
                <button className="mr-1rem btn is-unstyle inline-flex align-middle">
                  <i className="icon is-lg ri-file-list-fill mr-7px" />
                  Notes
                </button>
              </div>
              <button className="mr-1rem btn is-unstyle inline-flex align-middle">
                <i className="icon is-lg ri-printer-fill mr-7px" />
                Print
              </button>
              <div>
                <button className="mr-1rem btn is-unstyle inline-flex align-middle">
                  <i className="icon is-lg ri-timer-2-fill mr-7px" />
                  Operating hours
                </button>
              </div>
            </div>
          </>
        )}
      </section>

      <div className="grid" style={{ flex: "1" }}>
        <div style={{ flex: "none", width: "5rem" }} className="column lyt-sidebar p-0 bg-dark clr-white menu txt-center">
          <button className={`menu-item py-10 px-0 ${view === "Reserve" ? "active" : ""}`} onClick={() => setView("Reserve")}>
            <i className="icon is-lg ri-add-circle-fill" />
            <div className="txt-upper">Reserve</div>
          </button>
          <button className={`menu-item py-10 px-0 ${view === "Floor" ? "active" : ""}`} onClick={() => setView("Floor")}>
            <i className="icon is-lg ri-function-fill" />
            <div className="txt-upper">Floor</div>
          </button>
          <button className={`menu-item py-10 px-0 ${view === "List" ? "active" : ""}`} onClick={() => setView("List")}>
            <i className="icon is-lg ri-file-list-fill" />
            <div className="txt-upper">List</div>
          </button>
          <button className={`menu-item py-10 px-0 ${view === "Grid" ? "active" : ""}`} onClick={() => setView("Grid")}>
            <i className="icon is-lg ri-grid-fill" />
            <div className="txt-upper">Grid</div>
          </button>
          <button className={`menu-item py-10 px-0 ${view === "Timeline" ? "active" : ""}`} onClick={() => setView("Timeline")}>
            <i className="icon is-lg ri-calendar-todo-fill" />
            <div className="txt-upper">Timeline</div>
          </button>
          <button className={`menu-item py-10 px-0 ${view === "Guests" ? "active" : ""}`} onClick={() => setView("Guests")}>
            <i className="icon is-lg ri-user-3-line" />
            <div className="txt-upper">Guests</div>
          </button>
          <button className={`menu-item py-10 px-0 ${view === "Reports" ? "active" : ""}`} onClick={() => setView("Reports")}>
            <i className="icon is-lg ri-file-list-3-fill" />
            <div className="txt-upper">Reports</div>
          </button>
          <button className={`menu-item py-10 px-0 ${view === "Settings" ? "active" : ""}`} onClick={() => setView("Settings")}>
            <i className="icon is-lg ri-settings-fill" />
            <div className="txt-upper">Settings</div>
          </button>
        </div>
        <div className="column p-0">
          {view === "Reserve" && <Reserve />}
          {view === "Floor" && <Floor />}
          {view === "List" && <List />}
          {view === "Grid" && <Grid />}
          {view === "Timeline" && <Timeline />}
          {view === "Guests" && <Guests />}
          {view === "Reports" && <Reports />}
          {view === "Settings" && <Settings />}
        </div>
      </div>
    </>
  );
}

function Reserve() {
  return (
    <>
      <div>Reserve</div>
    </>
  );
}

function Floor() {
  const [searchOption, setSearchOption] = useState<boolean>(false);

  const [status, setStatus] = useState<null | "notconfirmed" | "noanswer" | "confirmed" | "denied" | "canceled" | "noshow" | "arrived" | "late" | "checkdropped" | "finished">(null);
  const [reservationtype, setReservationtype] = useState<null | "online" | "in-house">(null);
  const [room, setRoom] = useState<null | string>(null);
  const [sort, setSort] = useState<"reservationtimeASC" | "reservationtimeDEC" | "createdtimeASC" | "createdtimeDEC">("reservationtimeDEC");

  return (
    <>
      <div className="grid h-100">
        <div className="column bg-white p-0" style={{ flex: "none", width: "400px" }}>
          <Tabs defaultActiveKey="1" className="expand h-100">
            <Tabs.TabPane tab="Reservations" key="1">
              <div className="group relative">
                <label className="control has-icon-left w-21">
                  <i className="icon is-lg is-left ri-search-2-line" />
                  <input onFocus={() => setSearchOption(false)} type="search" placeholder="Search" className="input is-min bg-hide is-box py-7px" />
                </label>
                <button className="btn is-box is-out border-none border-left border-bottom w-3 px-0" onClick={() => setSearchOption(!searchOption)}>
                  <i className="after-hide icon ri-2x ri-filter-3-line" />
                </button>
                <div className={`SEARCHOPTIONS overflow-auto bg-white absolute top-100 right-0 left-0 ${searchOption ? "show" : ""}`}>
                  <div className="border-bottom py-7px">
                    <h3 className="px-1rem">Sort By</h3>
                    <div className="px-1rem">
                      <button className={`btn is-pill mt-7px mr-7px ${sort === "reservationtimeASC" || sort === "reservationtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort === "reservationtimeASC" ? "reservationtimeDEC" : "reservationtimeASC")}>
                        <i className={`icon is-lg ri-arrow-${sort === "reservationtimeASC" ? "up" : "down"}-s-fill`} /> Reservation time
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${sort === "createdtimeASC" || sort === "createdtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort === "createdtimeASC" ? "createdtimeDEC" : "createdtimeASC")}>
                        <i className={`icon is-lg ri-arrow-${sort === "createdtimeASC" ? "up" : "down"}-s-fill`} /> Created time
                      </button>
                    </div>
                  </div>

                  <div className="py-7px">
                    <h3 className="px-1rem">Filter By</h3>
                    <div className="menu border-bottom is-unstyle">
                      <button className="menu-item menu-trigger py-1rem" onClick={(e) => (e.target as Element).classList.toggle("active")}>
                        Status
                      </button>
                      <div className="pb-1rem px-1rem">
                        <button className={`btn is-pill mt-7px mr-7px ${status === "notconfirmed" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "notconfirmed" ? null : "notconfirmed")}>
                          Not confirmed
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status === "noanswer" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "noanswer" ? null : "noanswer")}>
                          No answer
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status === "confirmed" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "confirmed" ? null : "confirmed")}>
                          Confirmed
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status === "denied" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "denied" ? null : "denied")}>
                          Denied
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status === "canceled" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "canceled" ? null : "canceled")}>
                          Canceled
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status === "noshow" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "noshow" ? null : "noshow")}>
                          No show
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status === "arrived" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "arrived" ? null : "arrived")}>
                          Arrived
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status === "late" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "late" ? null : "late")}>
                          Late
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status === "checkdropped" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "checkdropped" ? null : "checkdropped")}>
                          Check dropped
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status === "finished" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "finished" ? null : "finished")}>
                          Finished
                        </button>
                      </div>
                    </div>

                    <div className="menu border-bottom is-unstyle">
                      <button className="menu-item menu-trigger py-1rem" onClick={(e) => (e.target as Element).classList.toggle("active")}>
                        Reservation type
                      </button>
                      <div className="pb-1rem px-1rem">
                        <button className={`btn is-pill mt-7px mr-7px ${reservationtype === "online" ? "is-sld" : "is-out"}`} onClick={() => setReservationtype(reservationtype === "online" ? null : "online")}>
                          Online
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${reservationtype === "in-house" ? "is-sld" : "is-out"}`} onClick={() => setReservationtype(reservationtype === "in-house" ? null : "in-house")}>
                          in-house
                        </button>
                      </div>
                    </div>

                    <div className="menu border-bottom is-unstyle">
                      <button className="menu-item menu-trigger py-1rem" onClick={(e) => (e.target as Element).classList.toggle("active")}>
                        Rooms
                      </button>
                      <div className="pb-1rem px-1rem">
                        <button className={`btn is-pill mt-7px mr-7px ${room === "Room 1" ? "is-sld" : "is-out"}`} onClick={() => setRoom(room === "Room 1" ? null : "Room 1")}>
                          Room 1
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${room === "Room 2" ? "is-sld" : "is-out"}`} onClick={() => setRoom(room === "Room 2" ? null : "Room 2")}>
                          Room 2
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div className="flex">
                <div className="align-self-middle w-24 txt-center py-10">No Reservations</div>
              </div>
            </Tabs.TabPane>
            <Tabs.TabPane tab="Waitlist" key="2">
              Content of Tab Pane 2
            </Tabs.TabPane>
            <Tabs.TabPane tab="SERVERS" key="3">
              Content of Tab Pane 2
            </Tabs.TabPane>
          </Tabs>
        </div>
        <div className="column bg-light">asd</div>
      </div>
    </>
  );
}

function List() {
  const [searchOption, setSearchOption] = useState<boolean>(false);

  const [status, setStatus] = useState<null | "notconfirmed" | "noanswer" | "confirmed" | "denied" | "canceled" | "noshow" | "arrived" | "late" | "checkdropped" | "finished">(null);
  const [reservationtype, setReservationtype] = useState<null | "online" | "in-house">(null);
  const [sort, setSort] = useState<"reservationtimeASC" | "reservationtimeDEC" | "createdtimeASC" | "createdtimeDEC">("reservationtimeDEC");
  const [room, setRoom] = useState<null | string>(null);

  return (
    <>
      <div className="flex is-y h-100">
        <section className="grid lyt-header border-top-none border-bottom is-collapse px-0">
          <div className="column w-8 p-0 align-self-stretch">
            <div className="group relative h-100">
              <label className="control has-icon-left w-21">
                <i className="icon is-lg is-left ri-search-2-line" />
                <input onFocus={() => setSearchOption(false)} type="search" placeholder="Search" className="input is-min bg-hide is-box py-7px" />
              </label>
              <button className="btn is-box is-out border-none border-left border-right p-0 w-3" onClick={() => setSearchOption(!searchOption)}>
                <i className="after-hide icon ri-2x ri-filter-3-line" />
              </button>

              <div className={`SEARCHOPTIONS overflow-auto bg-white absolute top-100 right-0 shadow left-0 ${searchOption ? "show" : ""}`}>
                <div className="border-bottom py-7px">
                  <h3 className="px-1rem">Sort By</h3>
                  <div className="px-1rem">
                    <button className={`btn is-pill mt-7px mr-7px ${sort === "reservationtimeASC" || sort === "reservationtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort === "reservationtimeASC" ? "reservationtimeDEC" : "reservationtimeASC")}>
                      <i className={`icon is-lg ri-arrow-${sort === "reservationtimeASC" ? "up" : "down"}-s-fill`} /> Reservation time
                    </button>
                    <button className={`btn is-pill mt-7px mr-7px ${sort === "createdtimeASC" || sort === "createdtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort === "createdtimeASC" ? "createdtimeDEC" : "createdtimeASC")}>
                      <i className={`icon is-lg ri-arrow-${sort === "createdtimeASC" ? "up" : "down"}-s-fill`} /> Created time
                    </button>
                  </div>
                </div>

                <div className="py-7px">
                  <h3 className="px-1rem">Filter By</h3>
                  <div className="menu border-bottom is-unstyle">
                    <button className="menu-item menu-trigger py-1rem" onClick={(e) => (e.target as Element).classList.toggle("active")}>
                      Status
                    </button>
                    <div className="pb-1rem px-1rem">
                      <button className={`btn is-pill mt-7px mr-7px ${status === "notconfirmed" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "notconfirmed" ? null : "notconfirmed")}>
                        Not confirmed
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "noanswer" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "noanswer" ? null : "noanswer")}>
                        No answer
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "confirmed" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "confirmed" ? null : "confirmed")}>
                        Confirmed
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "denied" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "denied" ? null : "denied")}>
                        Denied
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "canceled" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "canceled" ? null : "canceled")}>
                        Canceled
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "noshow" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "noshow" ? null : "noshow")}>
                        No show
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "arrived" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "arrived" ? null : "arrived")}>
                        Arrived
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "late" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "late" ? null : "late")}>
                        Late
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "checkdropped" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "checkdropped" ? null : "checkdropped")}>
                        Check dropped
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "finished" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "finished" ? null : "finished")}>
                        Finished
                      </button>
                    </div>
                  </div>

                  <div className="menu border-bottom is-unstyle">
                    <button className="menu-item menu-trigger py-1rem" onClick={(e) => (e.target as Element).classList.toggle("active")}>
                      Reservation type
                    </button>
                    <div className="pb-1rem px-1rem">
                      <button className={`btn is-pill mt-7px mr-7px ${reservationtype === "online" ? "is-sld" : "is-out"}`} onClick={() => setReservationtype(reservationtype === "online" ? null : "online")}>
                        Online
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${reservationtype === "in-house" ? "is-sld" : "is-out"}`} onClick={() => setReservationtype(reservationtype === "in-house" ? null : "in-house")}>
                        in-house
                      </button>
                    </div>
                  </div>

                  <div className="menu border-bottom is-unstyle">
                    <button className="menu-item menu-trigger py-1rem" onClick={(e) => (e.target as Element).classList.toggle("active")}>
                      Rooms
                    </button>
                    <div className="pb-1rem px-1rem">
                      <button className={`btn is-pill mt-7px mr-7px ${room === "Room 1" ? "is-sld" : "is-out"}`} onClick={() => setRoom(room === "Room 1" ? null : "Room 1")}>
                        Room 1
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${room === "Room 2" ? "is-sld" : "is-out"}`} onClick={() => setRoom(room === "Room 2" ? null : "Room 2")}>
                        Room 2
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="column p-0 flex align-middle">
            <button className={`btn is-pill mr-7px ${sort === "reservationtimeASC" || sort === "reservationtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort === "reservationtimeASC" ? "reservationtimeDEC" : "reservationtimeASC")}>
              <i className={`icon is-lg ri-arrow-${sort === "reservationtimeASC" ? "up" : "down"}-s-fill`} /> Reservation time
            </button>
            <button className={`btn is-pill mr-7px ${sort === "createdtimeASC" || sort === "createdtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort === "createdtimeASC" ? "createdtimeDEC" : "createdtimeASC")}>
              <i className={`icon is-lg ri-arrow-${sort === "createdtimeASC" ? "up" : "down"}-s-fill`} /> Created time
            </button>
          </div>
        </section>

        <section className="bg-light h-100 flex">
          <div className="align-self-middle w-24 txt-center">No Reservations</div>
        </section>
      </div>
    </>
  );
}

function Grid() {
  const [searchOption, setSearchOption] = useState<boolean>(false);

  const [status, setStatus] = useState<null | "notconfirmed" | "noanswer" | "confirmed" | "denied" | "canceled" | "noshow" | "arrived" | "late" | "checkdropped" | "finished">(null);
  const [reservationtype, setReservationtype] = useState<null | "online" | "in-house">(null);
  const [sort, setSort] = useState<"reservationtimeASC" | "reservationtimeDEC" | "createdtimeASC" | "createdtimeDEC">("reservationtimeDEC");
  const [room, setRoom] = useState<null | string>(null);

  const hours = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23];
  const minutes = [0, 15, 30, 45];

  return (
    <>
      <div className="flex is-y h-100">
        <section className="grid lyt-header border-top-none border-bottom is-collapse px-0">
          <div className="column w-8 p-0 align-self-stretch">
            <div className="group relative h-100">
              <label className="control has-icon-left w-21">
                <i className="icon is-lg is-left ri-search-2-line" />
                <input onFocus={() => setSearchOption(false)} type="search" placeholder="Search" className="input is-min bg-hide is-box py-7px" />
              </label>
              <button className="btn is-box is-out border-none border-left border-right p-0 w-3" onClick={() => setSearchOption(!searchOption)}>
                <i className="after-hide icon ri-2x ri-filter-3-line" />
              </button>

              <div className={`SEARCHOPTIONS overflow-auto bg-white absolute top-100 right-0 shadow left-0 ${searchOption ? "show" : ""}`}>
                <div className="border-bottom py-7px">
                  <h3 className="px-1rem">Sort By</h3>
                  <div className="px-1rem">
                    <button className={`btn is-pill mt-7px mr-7px ${sort === "reservationtimeASC" || sort === "reservationtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort === "reservationtimeASC" ? "reservationtimeDEC" : "reservationtimeASC")}>
                      <i className={`icon is-lg ri-arrow-${sort === "reservationtimeASC" ? "up" : "down"}-s-fill`} /> Reservation time
                    </button>
                    <button className={`btn is-pill mt-7px mr-7px ${sort === "createdtimeASC" || sort === "createdtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort === "createdtimeASC" ? "createdtimeDEC" : "createdtimeASC")}>
                      <i className={`icon is-lg ri-arrow-${sort === "createdtimeASC" ? "up" : "down"}-s-fill`} /> Created time
                    </button>
                  </div>
                </div>

                <div className="py-7px">
                  <h3 className="px-1rem">Filter By</h3>
                  <div className="menu border-bottom is-unstyle">
                    <button className="menu-item menu-trigger py-1rem" onClick={(e) => (e.target as Element).classList.toggle("active")}>
                      Status
                    </button>
                    <div className="pb-1rem px-1rem">
                      <button className={`btn is-pill mt-7px mr-7px ${status === "notconfirmed" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "notconfirmed" ? null : "notconfirmed")}>
                        Not confirmed
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "noanswer" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "noanswer" ? null : "noanswer")}>
                        No answer
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "confirmed" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "confirmed" ? null : "confirmed")}>
                        Confirmed
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "denied" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "denied" ? null : "denied")}>
                        Denied
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "canceled" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "canceled" ? null : "canceled")}>
                        Canceled
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "noshow" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "noshow" ? null : "noshow")}>
                        No show
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "arrived" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "arrived" ? null : "arrived")}>
                        Arrived
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "late" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "late" ? null : "late")}>
                        Late
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "checkdropped" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "checkdropped" ? null : "checkdropped")}>
                        Check dropped
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status === "finished" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status === "finished" ? null : "finished")}>
                        Finished
                      </button>
                    </div>
                  </div>

                  <div className="menu border-bottom is-unstyle">
                    <button className="menu-item menu-trigger py-1rem" onClick={(e) => (e.target as Element).classList.toggle("active")}>
                      Reservation type
                    </button>
                    <div className="pb-1rem px-1rem">
                      <button className={`btn is-pill mt-7px mr-7px ${reservationtype === "online" ? "is-sld" : "is-out"}`} onClick={() => setReservationtype(reservationtype === "online" ? null : "online")}>
                        Online
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${reservationtype === "in-house" ? "is-sld" : "is-out"}`} onClick={() => setReservationtype(reservationtype === "in-house" ? null : "in-house")}>
                        in-house
                      </button>
                    </div>
                  </div>

                  <div className="menu border-bottom is-unstyle">
                    <button className="menu-item menu-trigger py-1rem" onClick={(e) => (e.target as Element).classList.toggle("active")}>
                      Rooms
                    </button>
                    <div className="pb-1rem px-1rem">
                      <button className={`btn is-pill mt-7px mr-7px ${room === "Room 1" ? "is-sld" : "is-out"}`} onClick={() => setRoom(room === "Room 1" ? null : "Room 1")}>
                        Room 1
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${room === "Room 2" ? "is-sld" : "is-out"}`} onClick={() => setRoom(room === "Room 2" ? null : "Room 2")}>
                        Room 2
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="column p-0 flex align-middle">
            <button className={`btn is-pill mr-7px ${sort === "reservationtimeASC" || sort === "reservationtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort === "reservationtimeASC" ? "reservationtimeDEC" : "reservationtimeASC")}>
              <i className={`icon is-lg ri-arrow-${sort === "reservationtimeASC" ? "up" : "down"}-s-fill`} /> Reservation time
            </button>
            <button className={`btn is-pill mr-7px ${sort === "createdtimeASC" || sort === "createdtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort === "createdtimeASC" ? "createdtimeDEC" : "createdtimeASC")}>
              <i className={`icon is-lg ri-arrow-${sort === "createdtimeASC" ? "up" : "down"}-s-fill`} /> Created time
            </button>
          </div>
        </section>

        <section className="h-100 flex has-table-responsive">
          <div className="menu w-24">
            <button className="btn is-block txt-left menu-trigger py-1rem is-box border-primary border-none border-bottom border-wide" onClick={(e) => (e.target as Element).classList.toggle("active")}>
              Shift 1
            </button>
            <div>
              <table className="table is-bordered has-sticky-scope" style={{ lineHeight: "2.7" }}>
                <tbody className="txt-center">
                  {hours.map((hour) => (
                    <tr>
                      <th scope="row" className="p-0 font-normal">
                        {moment(moment.now()).minute(0).add(hour, "hour").toDate().toLocaleString("en-US", { hour: "numeric", minute: "numeric", hour12: true })}
                      </th>
                      {minutes.map((minute) => (
                        <td className="font-normal border-bottom-primary p-0">
                          <div className="bg-primary-25">{moment(moment.now()).minute(minute).add(hour, "hour").toDate().toLocaleString("en-US", { hour: "numeric", minute: "numeric", hour12: true })}</div>
                          <div className="border-top border-bottom flex justify-between px-1rem">No Reservation</div>
                        </td>
                      ))}
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </div>
    </>
  );
}

function Timeline() {
  return (
    <>
      <div>Timeline</div>
    </>
  );
}

function Guests() {
  return (
    <>
      <div className="flex is-y h-100">
        <section className="grid lyt-header border-top-none border-bottom is-collapse px-0">
          <div className="column w-8 p-0 align-self-stretch">
            <div className="group relative h-100">
              <label className="control has-icon-left w-21">
                <i className="icon is-lg is-left ri-search-2-line" />
                <input type="search" placeholder="Search" className="input is-min bg-hide is-box py-7px" />
              </label>
            </div>
          </div>
        </section>

        <section className="h-100 flex">
          <div className="align-self-middle txt-center w-24">
            <div>Looks like you don’t have any guests yet,</div>
            <div>click below to add your first one!</div>
            <button className="mt-1rem btn is-sld is-primary is-lg txt-upper">ADD New Guest</button>
          </div>
        </section>
      </div>
    </>
  );
}

function Reports() {
  return (
    <>
      <div className="flex is-y h-100">
        <section className="grid lyt-header border-top-none border-bottom is-collapse px-0">
          <div className="column w-8 p-0 align-self-stretch">
            <div className="group relative h-100">
              <label className="control has-icon-left w-21">
                <i className="icon is-lg is-left ri-search-2-line" />
                <input type="search" placeholder="Search" className="input is-min bg-hide is-box py-7px" />
              </label>
            </div>
          </div>
          <div className="column w-8 txt-center txt-upper">Reports</div>
        </section>

        <section className="h-100 flex">
          <div className="align-self-middle txt-center w-24">No data to generate daily reports, please select another date.</div>
        </section>
      </div>
    </>
  );
}

function Settings() {
  const [name, setName] = useState<string>("Testing");
  const [email, setEmail] = useState<string>("testin@email.com");
  const [country, setCountry] = useState<string>("islamabad");
  const [showTimeconflicts, setShowTimeconflicts] = useState<boolean>(true);
  const [showTableconflicts, setShowTableconflicts] = useState<boolean>(true);
  const [showSuggestions, setShowSuggestions] = useState<boolean>(true);
  return (
    <>
      <div className="flex is-y h-100">
        <Tabs defaultActiveKey="1" className="center h-100">
          <Tabs.TabPane tab="RESTAURANT PROFILE" className="bg-light grid justify-center" key="1">
            <div className="column w-8">
              <label className="control w-24 my-1rem">
                <span>RESTAURANT NAME</span>
                <input onChange={(e) => setName(e.target.value)} defaultValue={name} type="text" className="input py-1rem" />
              </label>
              <label className="control w-24 my-1rem">
                <span>EMAIL</span>
                <input onChange={(e) => setEmail(e.target.value)} defaultValue={email} type="text" className="input py-1rem" />
              </label>
              <label className="control w-24 my-1rem">
                <span>Country</span>
                <Select onChange={(e) => setCountry(e)} bordered={false} defaultValue={country} suffixIcon={<i className="clr-body icon ri-arrow-down-s-fill" />} className="input py-1rem" showSearch placeholder="Country">
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
              </label>

              <div>
                <span>SHOW RESERVATION TIME CONFLICTS</span>
                <div>
                  <label className="control my-1rem">
                    <input onChange={(e) => setShowTimeconflicts(e.target.checked)} defaultChecked={showTimeconflicts ? true : false} name="showTimeconflicts" type="radio" className="radio" />
                    <span className="label">SHOW</span>
                  </label>
                  <label className="control my-1rem">
                    <input onChange={(e) => setShowTimeconflicts(e.target.checked)} defaultChecked={showTimeconflicts ? false : true} name="showTimeconflicts" type="radio" className="radio" />
                    <span className="label">HIDE</span>
                  </label>
                </div>
              </div>
              <div>
                <span>SHOW RESERVATION TABLE COVER CONFLICTS</span>
                <div>
                  <label className="control my-1rem">
                    <input onChange={(e) => setShowTableconflicts(e.target.checked)} defaultChecked={showTableconflicts ? true : false} name="showTableconflicts" type="radio" className="radio" />
                    <span className="label">SHOW</span>
                  </label>
                  <label className="control my-1rem">
                    <input onChange={(e) => setShowTableconflicts(e.target.checked)} defaultChecked={showTableconflicts ? false : true} name="showTableconflicts" type="radio" className="radio" />
                    <span className="label">HIDE</span>
                  </label>
                </div>
              </div>
              <div>
                <span>SHOW TABLE SUGGESTIONS</span>
                <div>
                  <label className="control my-1rem">
                    <input onChange={(e) => setShowSuggestions(e.target.checked)} defaultChecked={showSuggestions ? true : false} name="showSuggestions" type="radio" className="radio" />
                    <span className="label">SHOW</span>
                  </label>
                  <label className="control my-1rem">
                    <input onChange={(e) => setShowSuggestions(e.target.checked)} defaultChecked={showSuggestions ? false : true} name="showSuggestions" type="radio" className="radio" />
                    <span className="label">HIDE</span>
                  </label>
                </div>
              </div>
            </div>
          </Tabs.TabPane>
        </Tabs>
      </div>
    </>
  );
}
