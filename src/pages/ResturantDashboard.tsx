import React, { useState, useEffect } from "react";
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
  const [seated, setSeated] = useState<boolean>(false);
  const [upcoming, setUpcoming] = useState<boolean>(false);
  const [reservation, setReservation] = useState<boolean>(false);
  const [shift, setShift] = useState<boolean>(false);

  return (
    <>
      <div className="grid h-100">
        <div className="column bg-white p-0" style={{ flex: "none", width: "400px" }}>
          <Tabs defaultActiveKey="1" className="expand">
            <Tabs.TabPane tab="Reservations" key="1" style={{ height: 200 }}>
              <div className="group">
                <label className="control has-icon-left test w-21">
                  <i className="icon is-lg is-left ri-search-2-line"></i>
                  <input type="search" className="input is-min bg-hide is-box py-7px" />
                </label>
                <button className="btn is-box is-out border-none border-left border-bottom">
                  <i className="after-hide icon ri-2x ri-filter-3-line"></i>
                </button>
              </div>
              <div className="p-7px">
                <label className="control pr-7px pt-7px">
                  <input type="checkbox" className="checkbox" checked={seated} onChange={(e) => setSeated(e.target.checked)} />
                  <span className={`btn ${seated ? "is-sld" : "is-out"} is-pill`}>Seated</span>
                </label>
                <label className="control pr-7px pt-7px">
                  <input type="checkbox" className="checkbox" checked={upcoming} onChange={(e) => setUpcoming(e.target.checked)} />
                  <span className={`btn ${upcoming ? "is-sld" : "is-out"} is-pill`}>Upcoming</span>
                </label>
                <label className="control pr-7px pt-7px">
                  <input type="checkbox" className="checkbox" checked={reservation} onChange={(e) => setReservation(e.target.checked)} />
                  <span className={`btn ${reservation ? "is-sld" : "is-out"} is-pill`}>Reservation time</span>
                </label>
                <label className="control pr-7px pt-7px">
                  <input type="checkbox" className="checkbox" checked={shift} onChange={(e) => setShift(e.target.checked)} />
                  <span className={`btn ${shift ? "is-sld" : "is-out"} is-pill`}>Shift</span>
                </label>
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
