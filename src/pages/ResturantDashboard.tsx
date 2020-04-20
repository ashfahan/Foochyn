import React, { useState, useEffect } from "react";
import { DatePicker, Tabs } from "antd";
import moment from "moment";

export default function ResturantDashboard() {
  const [view, setView] = useState<"Reserve" | "Floor" | "List" | "Grid" | "Timeline" | "Guests" | "Reports" | "Support" | "Settings">("List");

  useEffect(() => {
    var menutriggers = document.getElementsByClassName("menu-trigger");
    Object.keys(menutriggers).forEach(function (k) {
      menutriggers[k].onclick = function (e) {
        e.target.classList.toggle("active");
      };
    });
  }, [view]);

  return (
    <>
      <section className="grid justify-between bg-primary lyt-header is-collapse clr-white">
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
      </section>

      <div className="grid" style={{ flex: "1" }}>
        <div style={{ flex: "none", width: "5rem" }} className="column lyt-sidebar p-0 bg-dark clr-white menu txt-center">
          <button className="menu-item py-10 px-0" onClick={() => setView("Reserve")}>
            <i className="icon is-lg ri-add-circle-fill" />
            <div className="txt-upper">Reserve</div>
          </button>
          <button className="menu-item py-10 px-0" onClick={() => setView("Floor")}>
            <i className="icon is-lg ri-function-fill" />
            <div className="txt-upper">Floor</div>
          </button>
          <button className="menu-item py-10 px-0" onClick={() => setView("List")}>
            <i className="icon is-lg ri-file-list-fill" />
            <div className="txt-upper">List</div>
          </button>
          <button className="menu-item py-10 px-0" onClick={() => setView("Grid")}>
            <i className="icon is-lg ri-grid-fill" />
            <div className="txt-upper">Grid</div>
          </button>
          <button className="menu-item py-10 px-0" onClick={() => setView("Timeline")}>
            <i className="icon is-lg ri-calendar-todo-fill" />
            <div className="txt-upper">Timeline</div>
          </button>
          <button className="menu-item py-10 px-0" onClick={() => setView("Guests")}>
            <i className="icon is-lg ri-user-3-line" />
            <div className="txt-upper">Guests</div>
          </button>
          <button className="menu-item py-10 px-0" onClick={() => setView("Reports")}>
            <i className="icon is-lg ri-file-list-3-fill" />
            <div className="txt-upper">Reports</div>
          </button>
          <button className="menu-item py-10 px-0" onClick={() => setView("Support")}>
            <i className="icon is-lg ri-headphone-fill" />
            <div className="txt-upper">Support</div>
          </button>
          <button className="menu-item py-10 px-0" onClick={() => setView("Settings")}>
            <i className="icon is-lg ri-settings-fill" />
            <div className="txt-upper">Settings</div>
          </button>
        </div>
        <div className="column p-0">
          {view === "Reserve" && <Reserve />}
          {view === "Floor" && <Floor />}
          {view === "List" && <List />}
          {view === "Grid" && <Reserve />}
          {view === "Timeline" && <Reserve />}
          {view === "Guests" && <Reserve />}
          {view === "Reports" && <Reserve />}
          {view === "Support" && <Reserve />}
          {view === "Settings" && <Reserve />}
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
                  <input onFocus={() => setSearchOption(false)} type="search" className="input is-min bg-hide is-box py-7px" />
                </label>
                <button className="btn is-box is-out border-none border-left border-bottom" onClick={() => setSearchOption(!searchOption)}>
                  <i className="after-hide icon ri-2x ri-filter-3-line" />
                </button>
                <div className={`SEARCHOPTIONS overflow-auto bg-white absolute top-100 right-0 left-0 ${searchOption ? "show" : ""}`}>
                  <div className="border-bottom py-7px">
                    <h3 className="px-1rem">Sort By</h3>
                    <div className="px-1rem">
                      <button className={`btn is-pill mt-7px mr-7px ${sort == "reservationtimeASC" || sort == "reservationtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort == "reservationtimeASC" ? "reservationtimeDEC" : "reservationtimeASC")}>
                        <i className={`icon is-lg ri-arrow-${sort == "reservationtimeASC" ? "up" : "down"}-s-fill`} /> Reservation time
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${sort == "createdtimeASC" || sort == "createdtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort == "createdtimeASC" ? "createdtimeDEC" : "createdtimeASC")}>
                        <i className={`icon is-lg ri-arrow-${sort == "createdtimeASC" ? "up" : "down"}-s-fill`} /> Created time
                      </button>
                    </div>
                  </div>

                  <div className="py-7px">
                    <h3 className="px-1rem">Filter By</h3>
                    <div className="menu border-bottom is-unstyle">
                      <button className="menu-item menu-trigger py-1rem">Status</button>
                      <div className="pb-1rem px-1rem">
                        <button className={`btn is-pill mt-7px mr-7px ${status == "notconfirmed" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "notconfirmed" ? null : "notconfirmed")}>
                          Not confirmed
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status == "noanswer" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "noanswer" ? null : "noanswer")}>
                          No answer
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status == "confirmed" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "confirmed" ? null : "confirmed")}>
                          Confirmed
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status == "denied" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "denied" ? null : "denied")}>
                          Denied
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status == "canceled" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "canceled" ? null : "canceled")}>
                          Canceled
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status == "noshow" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "noshow" ? null : "noshow")}>
                          No show
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status == "arrived" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "arrived" ? null : "arrived")}>
                          Arrived
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status == "late" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "late" ? null : "late")}>
                          Late
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status == "checkdropped" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "checkdropped" ? null : "checkdropped")}>
                          Check dropped
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${status == "finished" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "finished" ? null : "finished")}>
                          Finished
                        </button>
                      </div>
                    </div>

                    <div className="menu border-bottom is-unstyle">
                      <button className="menu-item menu-trigger py-1rem">Reservation type</button>
                      <div className="pb-1rem px-1rem">
                        <button className={`btn is-pill mt-7px mr-7px ${reservationtype == "online" ? "is-sld" : "is-out"}`} onClick={() => setReservationtype(reservationtype == "online" ? null : "online")}>
                          Online
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${reservationtype == "in-house" ? "is-sld" : "is-out"}`} onClick={() => setReservationtype(reservationtype == "in-house" ? null : "in-house")}>
                          in-house
                        </button>
                      </div>
                    </div>

                    <div className="menu border-bottom is-unstyle">
                      <button className="menu-item menu-trigger py-1rem">Rooms</button>
                      <div className="pb-1rem px-1rem">
                        <button className={`btn is-pill mt-7px mr-7px ${room == "Room 1" ? "is-sld" : "is-out"}`} onClick={() => setRoom(room == "Room 1" ? null : "Room 1")}>
                          Room 1
                        </button>
                        <button className={`btn is-pill mt-7px mr-7px ${room == "Room 2" ? "is-sld" : "is-out"}`} onClick={() => setRoom(room == "Room 2" ? null : "Room 2")}>
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
        <section className="grid align-stretch lyt-header border-top-none border-bottom is-collapse px-0">
          <div className="column w-8 p-0">
            <div className="group relative h-100">
              <label className="control has-icon-left w-21">
                <i className="icon is-lg is-left ri-search-2-line" />
                <input onFocus={() => setSearchOption(false)} type="search" className="input is-min bg-hide is-box py-7px" />
              </label>
              <button className="btn is-box is-out border-none border-left border-right py-0" onClick={() => setSearchOption(!searchOption)}>
                <i className="after-hide icon ri-2x ri-filter-3-line" />
              </button>

              <div className={`SEARCHOPTIONS overflow-auto bg-white absolute top-100 right-0 shadow left-0 ${searchOption ? "show" : ""}`}>
                <div className="border-bottom py-7px">
                  <h3 className="px-1rem">Sort By</h3>
                  <div className="px-1rem">
                    <button className={`btn is-pill mt-7px mr-7px ${sort == "reservationtimeASC" || sort == "reservationtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort == "reservationtimeASC" ? "reservationtimeDEC" : "reservationtimeASC")}>
                      <i className={`icon is-lg ri-arrow-${sort == "reservationtimeASC" ? "up" : "down"}-s-fill`} /> Reservation time
                    </button>
                    <button className={`btn is-pill mt-7px mr-7px ${sort == "createdtimeASC" || sort == "createdtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort == "createdtimeASC" ? "createdtimeDEC" : "createdtimeASC")}>
                      <i className={`icon is-lg ri-arrow-${sort == "createdtimeASC" ? "up" : "down"}-s-fill`} /> Created time
                    </button>
                  </div>
                </div>

                <div className="py-7px">
                  <h3 className="px-1rem">Filter By</h3>
                  <div className="menu border-bottom is-unstyle">
                    <button className="menu-item menu-trigger py-1rem">Status</button>
                    <div className="pb-1rem px-1rem">
                      <button className={`btn is-pill mt-7px mr-7px ${status == "notconfirmed" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "notconfirmed" ? null : "notconfirmed")}>
                        Not confirmed
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status == "noanswer" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "noanswer" ? null : "noanswer")}>
                        No answer
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status == "confirmed" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "confirmed" ? null : "confirmed")}>
                        Confirmed
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status == "denied" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "denied" ? null : "denied")}>
                        Denied
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status == "canceled" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "canceled" ? null : "canceled")}>
                        Canceled
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status == "noshow" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "noshow" ? null : "noshow")}>
                        No show
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status == "arrived" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "arrived" ? null : "arrived")}>
                        Arrived
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status == "late" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "late" ? null : "late")}>
                        Late
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status == "checkdropped" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "checkdropped" ? null : "checkdropped")}>
                        Check dropped
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${status == "finished" ? "is-sld" : "is-out"}`} onClick={() => setStatus(status == "finished" ? null : "finished")}>
                        Finished
                      </button>
                    </div>
                  </div>

                  <div className="menu border-bottom is-unstyle">
                    <button className="menu-item menu-trigger py-1rem">Reservation type</button>
                    <div className="pb-1rem px-1rem">
                      <button className={`btn is-pill mt-7px mr-7px ${reservationtype == "online" ? "is-sld" : "is-out"}`} onClick={() => setReservationtype(reservationtype == "online" ? null : "online")}>
                        Online
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${reservationtype == "in-house" ? "is-sld" : "is-out"}`} onClick={() => setReservationtype(reservationtype == "in-house" ? null : "in-house")}>
                        in-house
                      </button>
                    </div>
                  </div>

                  <div className="menu border-bottom is-unstyle">
                    <button className="menu-item menu-trigger py-1rem">Rooms</button>
                    <div className="pb-1rem px-1rem">
                      <button className={`btn is-pill mt-7px mr-7px ${room == "Room 1" ? "is-sld" : "is-out"}`} onClick={() => setRoom(room == "Room 1" ? null : "Room 1")}>
                        Room 1
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${room == "Room 2" ? "is-sld" : "is-out"}`} onClick={() => setRoom(room == "Room 2" ? null : "Room 2")}>
                        Room 2
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="column p-0 flex align-middle">
            <button className={`btn is-pill mr-7px ${sort == "reservationtimeASC" || sort == "reservationtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort == "reservationtimeASC" ? "reservationtimeDEC" : "reservationtimeASC")}>
              <i className={`icon is-lg ri-arrow-${sort == "reservationtimeASC" ? "up" : "down"}-s-fill`} /> Reservation time
            </button>
            <button className={`btn is-pill mr-7px ${sort == "createdtimeASC" || sort == "createdtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort == "createdtimeASC" ? "createdtimeDEC" : "createdtimeASC")}>
              <i className={`icon is-lg ri-arrow-${sort == "createdtimeASC" ? "up" : "down"}-s-fill`} /> Created time
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
