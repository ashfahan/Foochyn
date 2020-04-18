import React, { useState } from "react";
import { DatePicker, Tabs } from "antd";
import moment from "moment";

export default function ResturantDashboard() {
  const [view, setView] = useState<"Reserve" | "Floor" | "List" | "Grid" | "Timefill" | "Guests" | "Reports" | "Support" | "Settings">("Reserve");

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
        <div style={{ flex: "none", width: "7rem" }} className="column lyt-sidebar p-0 bg-dark clr-white menu txt-center">
          <button className="menu-item py-10" onClick={() => setView("Reserve")}>
            <i className="icon is-lg ri-add-circle-fill" />
            <div>RESERVE</div>
          </button>
          <button className="menu-item py-10" onClick={() => setView("Floor")}>
            <i className="icon is-lg ri-function-fill" />
            <div>FLOOR</div>
          </button>
          <button className="menu-item py-10" onClick={() => setView("List")}>
            <i className="icon is-lg ri-file-list-fill" />
            <div>LIST</div>
          </button>
          <button className="menu-item py-10" onClick={() => setView("Grid")}>
            <i className="icon is-lg ri-grid-fill" />
            <div>GRID</div>
          </button>
          <button className="menu-item py-10" onClick={() => setView("Timefill")}>
            <i className="icon is-lg ri-calendar-todo-fill" />
            <div>TIMEfill</div>
          </button>
          <button className="menu-item py-10" onClick={() => setView("Guests")}>
            <i className="icon is-lg ri-user-3-line" />
            <div>GUESTS</div>
          </button>
          <button className="menu-item py-10" onClick={() => setView("Reports")}>
            <i className="icon is-lg ri-file-list-3-fill" />
            <div>REPORTS</div>
          </button>
          <button className="menu-item py-10" onClick={() => setView("Support")}>
            <i className="icon is-lg ri-headphone-fill" />
            <div>SUPPORT</div>
          </button>
          <button className="menu-item py-10" onClick={() => setView("Settings")}>
            <i className="icon is-lg ri-settings-fill" />
            <div>SETTINGS</div>
          </button>
        </div>
        <div className="column p-0">
          {view === "Reserve" && <Reserve />}
          {view === "Floor" && <Floor />}
          {view === "List" && <Reserve />}
          {view === "Grid" && <Reserve />}
          {view === "Timefill" && <Reserve />}
          {view === "Guests" && <Reserve />}
          {view === "Reports" && <Reserve />}
          {view === "Support" && <Reserve />}
          {view === "Settings" && <Reserve />}
        </div>
      </div>
    </>
  );
}

export function Reserve() {
  const [searchOption, setSearchOption] = useState<boolean>(false);

  const [status, setStatus] = useState<null | "notconfirmed" | "noanswer" | "confirmed" | "denied" | "canceled" | "noshow" | "arrived" | "late" | "checkdropped" | "finished">(null);
  const [reservationtype, setReservationtype] = useState<null | "online" | "in-house">(null);
  const [sort, setSort] = useState<"reservationtimeASC" | "reservationtimeDEC" | "createdtimeASC" | "createdtimeDEC">("reservationtimeDEC");

  return (
    <>
      <div className="grid h-100">
        <div className="column bg-white p-0" style={{ flex: "none", width: "400px" }}>
          <Tabs defaultActiveKey="1" className="expand h-100">
            <Tabs.TabPane tab="Reservations" key="1" style={{ height: 200 }}>
              <div className="group">
                <label className="control has-icon-left w-21">
                  <i className="icon is-lg is-left ri-search-2-line" />
                  <input onFocus={() => setSearchOption(false)} type="search" className="input is-min bg-hide is-box py-7px" />
                </label>
                <button className="btn is-box is-out border-none border-left border-bottom" onClick={() => setSearchOption(!searchOption)}>
                  <i className="after-hide icon ri-2x ri-filter-3-line" />
                </button>
              </div>
              <div className="relative bottom-0 left-0 right-0 top-0 flex justify-center h-100">
                <div className={`bg-white absolute top-0 left-0 ${!searchOption ? "hidden" : ""}`}>
                  <div className="p-7px">
                    <h3>Sort By</h3>
                    <button className={`btn is-pill mt-7px mr-7px ${sort == "reservationtimeASC" || sort == "reservationtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort == "reservationtimeASC" ? "reservationtimeDEC" : "reservationtimeASC")}>
                      <i className={`icon is-lg ri-arrow-${sort == "reservationtimeASC" ? "up" : "down"}-s-fill`} /> Reservation time
                    </button>
                    <button className={`btn is-pill mt-7px mr-7px ${sort == "createdtimeASC" || sort == "createdtimeDEC" ? "is-sld" : "is-out"}`} onClick={() => setSort(sort == "createdtimeASC" ? "createdtimeDEC" : "createdtimeASC")}>
                      <i className={`icon is-lg ri-arrow-${sort == "createdtimeASC" ? "up" : "down"}-s-fill`} /> Created time
                    </button>
                  </div>

                  <div className="p-7px">
                    <h3>Filter By</h3>
                    <div className="p-7px">
                      <h5 className="font-normal">Status</h5>
                      <div>
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

                    <div className="p-7px">
                      <h5 className="font-normal">Reservation type</h5>
                      <button className={`btn is-pill mt-7px mr-7px ${reservationtype == "online" ? "is-sld" : "is-out"}`} onClick={() => setReservationtype(reservationtype == "online" ? null : "online")}>
                        Online
                      </button>
                      <button className={`btn is-pill mt-7px mr-7px ${reservationtype == "in-house" ? "is-sld" : "is-out"}`} onClick={() => setReservationtype(reservationtype == "in-house" ? null : "in-house")}>
                        in-house
                      </button>
                    </div>
                  </div>
                </div>

                <div className="align-self-middle">No reservations</div>
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

export function Floor() {
  return (
    <>
      <div>Floor</div>
    </>
  );
}
