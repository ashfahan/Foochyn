import React, { useState } from "react";

export default function AdminDashboard() {
  const [view, setView] = useState<"AllUser" | "VerifiedUser" | "NonVerifiedUser" | "BannedUser" | "AllRestaurants" | "VerifiedRestaurants" | "NonVerifiedRestaurants" | "BannedRestaurants">("AllUser");

  return (
    <>
      <div className="grid" style={{ flex: "1" }}>
        <div style={{ flex: "none", width: "20rem" }} className="column lyt-sidebar px-0 py-1rem bg-dark clr-white menu is-primary">
          <div className="menu">
            <button className="menu-trigger menu-item py-7px active" onClick={(e) => (e.target as Element).classList.toggle("active")}>
              <i className="icon is-lg ri-team-fill" />
              User Management
            </button>

            <div className="menu ml-0">
              <button style={{ paddingLeft: "3em" }} className={`ml-0 menu-item py-7px ${view === "AllUser" ? "focus" : ""}`} onClick={() => setView("AllUser")}>
                <i className="icon is-lg ri-team-fill" />
                All User
              </button>
              <button style={{ paddingLeft: "3em" }} className={`ml-0 menu-item py-7px ${view === "VerifiedUser" ? "focus" : ""}`} onClick={() => setView("VerifiedUser")}>
                <i className="icon is-lg ri-team-fill" />
                Verified User
              </button>
              <button style={{ paddingLeft: "3em" }} className={`ml-0 menu-item py-7px ${view === "NonVerifiedUser" ? "focus" : ""}`} onClick={() => setView("NonVerifiedUser")}>
                <i className="icon is-lg ri-team-fill" />
                Non Verified User
              </button>
              <button style={{ paddingLeft: "3em" }} className={`ml-0 menu-item py-7px ${view === "BannedUser" ? "focus" : ""}`} onClick={() => setView("BannedUser")}>
                <i className="icon is-lg ri-team-fill" />
                Banned User
              </button>
            </div>
          </div>

          <div className="menu">
            <button className="menu-trigger menu-item py-7px" onClick={(e) => (e.target as Element).classList.toggle("active")}>
              <i className="icon is-lg ri-team-fill" />
              Restaurant Management
            </button>

            <div className="menu ml-0">
              <button style={{ paddingLeft: "3em" }} className={`ml-0 menu-item py-7px ${view === "AllRestaurants" ? "focus" : ""}`} onClick={() => setView("AllRestaurants")}>
                <i className="icon is-lg ri-add-circle-fill" />
                All Restaurants
              </button>
              <button style={{ paddingLeft: "3em" }} className={`ml-0 menu-item py-7px ${view === "VerifiedRestaurants" ? "focus" : ""}`} onClick={() => setView("VerifiedRestaurants")}>
                <i className="icon is-lg ri-add-circle-fill" />
                Verified Restaurants
              </button>
              <button style={{ paddingLeft: "3em" }} className={`ml-0 menu-item py-7px ${view === "NonVerifiedRestaurants" ? "focus" : ""}`} onClick={() => setView("NonVerifiedRestaurants")}>
                <i className="icon is-lg ri-add-circle-fill" />
                Non Verified Restaurants
              </button>
              <button style={{ paddingLeft: "3em" }} className={`ml-0 menu-item py-7px ${view === "BannedRestaurants" ? "focus" : ""}`} onClick={() => setView("BannedRestaurants")}>
                <i className="icon is-lg ri-add-circle-fill" />
                Banned Restaurants
              </button>
            </div>
          </div>
        </div>
        <div className="column p-2">
          {view === "AllUser" && <AllUser />}
          {view === "VerifiedUser" && <VerifiedUser />}
          {view === "NonVerifiedUser" && <NonVerifiedUser />}
          {view === "BannedUser" && <BannedUser />}
          {view === "AllRestaurants" && <AllRestaurants />}
          {view === "VerifiedRestaurants" && <VerifiedRestaurants />}
          {view === "NonVerifiedRestaurants" && <NonVerifiedRestaurants />}
          {view === "BannedRestaurants" && <BannedRestaurants />}
        </div>
      </div>
    </>
  );
}

function AllUser() {
  return (
    <>
      <h1 className="border-bottom pb-1rem">All User</h1>

      <div className="flex justify-between align-middle pb-1rem border-bottom">
        <h5 className="mb-0">User List</h5>
        <div className="flex align-middle">
          <input type="search" className="input mr-7px" />
          <button className="btn is-out is-primary is-circle">
            <i className="icon ri-search-line" />
          </button>
        </div>
      </div>
      <div className="has-table-responsive">
        <table className="table is-striped mt-1rem">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>User Name</th>
              <th>Phone</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </>
  );
}

function VerifiedUser() {
  return (
    <>
      <h1 className="border-bottom pb-1rem">Verified User</h1>

      <div className="flex justify-between align-middle pb-1rem border-bottom">
        <h5 className="mb-0">User List</h5>
        <div className="flex align-middle">
          <input type="search" className="input mr-7px" />
          <button className="btn is-out is-primary is-circle">
            <i className="icon ri-search-line" />
          </button>
        </div>
      </div>
      <div className="has-table-responsive">
        <table className="table is-striped mt-1rem">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>User Name</th>
              <th>Phone</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </>
  );
}

function NonVerifiedUser() {
  return (
    <>
      <h1 className="border-bottom pb-1rem">Non Verified User</h1>

      <div className="flex justify-between align-middle pb-1rem border-bottom">
        <h5 className="mb-0">User List</h5>
        <div className="flex align-middle">
          <input type="search" className="input mr-7px" />
          <button className="btn is-out is-primary is-circle">
            <i className="icon ri-search-line" />
          </button>
        </div>
      </div>
      <div className="has-table-responsive">
        <table className="table is-striped mt-1rem">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>User Name</th>
              <th>Phone</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </>
  );
}

function BannedUser() {
  return (
    <>
      <h1 className="border-bottom pb-1rem">Banned User</h1>

      <div className="flex justify-between align-middle pb-1rem border-bottom">
        <h5 className="mb-0">User List</h5>
        <div className="flex align-middle">
          <input type="search" className="input mr-7px" />
          <button className="btn is-out is-primary is-circle">
            <i className="icon ri-search-line" />
          </button>
        </div>
      </div>
      <div className="has-table-responsive">
        <table className="table is-striped mt-1rem">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>User Name</th>
              <th>Phone</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </>
  );
}

function AllRestaurants() {
  return (
    <>
      <h1 className="border-bottom pb-1rem">All Restaurants</h1>

      <div className="flex justify-between align-middle pb-1rem border-bottom">
        <h5 className="mb-0">User List</h5>
        <div className="flex align-middle">
          <input type="search" className="input mr-7px" />
          <button className="btn is-out is-primary is-circle">
            <i className="icon ri-search-line" />
          </button>
        </div>
      </div>
      <div className="has-table-responsive">
        <table className="table is-striped mt-1rem">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>User Name</th>
              <th>Phone</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </>
  );
}

function VerifiedRestaurants() {
  return (
    <>
      <h1 className="border-bottom pb-1rem">Verified Restaurants</h1>

      <div className="flex justify-between align-middle pb-1rem border-bottom">
        <h5 className="mb-0">User List</h5>
        <div className="flex align-middle">
          <input type="search" className="input mr-7px" />
          <button className="btn is-out is-primary is-circle">
            <i className="icon ri-search-line" />
          </button>
        </div>
      </div>
      <div className="has-table-responsive">
        <table className="table is-striped mt-1rem">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>User Name</th>
              <th>Phone</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </>
  );
}

function NonVerifiedRestaurants() {
  return (
    <>
      <h1 className="border-bottom pb-1rem">NonVerified Restaurants</h1>

      <div className="flex justify-between align-middle pb-1rem border-bottom">
        <h5 className="mb-0">User List</h5>
        <div className="flex align-middle">
          <input type="search" className="input mr-7px" />
          <button className="btn is-out is-primary is-circle">
            <i className="icon ri-search-line" />
          </button>
        </div>
      </div>
      <div className="has-table-responsive">
        <table className="table is-striped mt-1rem">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>User Name</th>
              <th>Phone</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </>
  );
}

function BannedRestaurants() {
  return (
    <>
      <h1 className="border-bottom pb-1rem">Banned Restaurants</h1>

      <div className="flex justify-between align-middle pb-1rem border-bottom">
        <h5 className="mb-0">User List</h5>
        <div className="flex align-middle">
          <input type="search" className="input mr-7px" />
          <button className="btn is-out is-primary is-circle">
            <i className="icon ri-search-line" />
          </button>
        </div>
      </div>
      <div className="has-table-responsive">
        <table className="table is-striped mt-1rem">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>User Name</th>
              <th>Phone</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
            <tr>
              <td>xyz</td>
              <td>Email@mail.com</td>
              <td>MYusername</td>
              <td>5646468768465</td>
              <td>
                <button className="btn is-out is-primary">View</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </>
  );
}
