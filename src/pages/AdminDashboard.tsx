import React, { useState } from "react";

export default function AdminDashboard() {
  const [view, setView] = useState<"AllUser" | "VerifiedUser" | "NonVerifiedUser" | "BannedUser" | "AllRestaurant" | "VerifiedRestaurant" | "NonVerifiedRestaurant" | "BannedRestaurant" |"Restaurant"| "AccountSetting" | "AllCuisine" | "AddCuisine">("AddCuisine");

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
              <button style={{ paddingLeft: "3em" }} className={`ml-0 menu-item py-7px ${view === "AllRestaurant" ? "focus" : ""}`} onClick={() => setView("AllRestaurant")}>
                <i className="icon is-lg ri-add-circle-fill" />
                All Restaurant
              </button>
              <button style={{ paddingLeft: "3em" }} className={`ml-0 menu-item py-7px ${view === "VerifiedRestaurant" ? "focus" : ""}`} onClick={() => setView("VerifiedRestaurant")}>
                <i className="icon is-lg ri-add-circle-fill" />
                Verified Restaurant
              </button>
              <button style={{ paddingLeft: "3em" }} className={`ml-0 menu-item py-7px ${view === "NonVerifiedRestaurant" ? "focus" : ""}`} onClick={() => setView("NonVerifiedRestaurant")}>
                <i className="icon is-lg ri-add-circle-fill" />
                Non Verified Restaurant
              </button>
              <button style={{ paddingLeft: "3em" }} className={`ml-0 menu-item py-7px ${view === "BannedRestaurant" ? "focus" : ""}`} onClick={() => setView("BannedRestaurant")}>
                <i className="icon is-lg ri-add-circle-fill" />
                Banned Restaurant
              </button>
            </div>
          </div>

          <div className="menu">
            <button className="menu-trigger menu-item py-7px" onClick={(e) => (e.target as Element).classList.toggle("active")}>
              <i className="icon is-lg ri-team-fill" />
              Cuisine Management
            </button>

            <div className="menu ml-0">
              <button style={{ paddingLeft: "3em" }} className={`ml-0 menu-item py-7px ${view === "AllCuisine" ? "focus" : ""}`} onClick={() => setView("AllCuisine")}>
                <i className="icon is-lg ri-add-circle-fill" />
                All Cuisine
              </button>
              <button style={{ paddingLeft: "3em" }} className={`ml-0 menu-item py-7px ${view === "AddCuisine" ? "focus" : ""}`} onClick={() => setView("AddCuisine")}>
                <i className="icon is-lg ri-add-circle-fill" />
                Add Cuisine
              </button>
            </div>
          </div>

          <button className={`ml-0 menu-item py-7px ${view === "VerifiedRestaurant" ? "focus" : ""}`} onClick={() => setView("AccountSetting")}>
            <i className="icon is-lg ri-settings-line" />
            Account Setting
          </button>
        </div>
        <div className="column p-2">
          {view === "AllUser" && <AllUser />}
          {view === "VerifiedUser" && <VerifiedUser />}
          {view === "NonVerifiedUser" && <NonVerifiedUser />}
          {view === "BannedUser" && <BannedUser />}
          {view === "AllRestaurant" && <AllRestaurant />}
          {view === "VerifiedRestaurant" && <VerifiedRestaurant />}
          {view === "NonVerifiedRestaurant" && <NonVerifiedRestaurant />}
          {view === "BannedRestaurant" && <BannedRestaurant />}
          {view === "AccountSetting" && <AccountSetting />}
          {view === "AllCuisine" && <AllCuisine />}
          {view === "AddCuisine" && <AddCuisine />}
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

function AllRestaurant() {
  return (
    <>
      <h1 className="border-bottom pb-1rem">All Restaurant</h1>

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

function VerifiedRestaurant() {
  return (
    <>
      <h1 className="border-bottom pb-1rem">Verified Restaurant</h1>

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

function NonVerifiedRestaurant() {
  return (
    <>
      <h1 className="border-bottom pb-1rem">NonVerified Restaurant</h1>

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

function BannedRestaurant() {
  return (
    <>
      <h1 className="border-bottom pb-1rem">Banned Restaurant</h1>

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

function AccountSetting() {
  return (
    <>
      <h1 className="border-bottom pb-1rem">Accont Setting</h1>
      <div className="grid">
        <label className="column control block w-13 py-2">
          <span>Username</span>
          <input value="admin" className="input mt-1rem" type="text" />
        </label>

        <label className="column control block w-13">
          <span>Old Password</span>
          <input className="input" type="password" />
        </label>
        <label className="column control block w-13">
          <span>New Password</span>
          <input className="input" type="password" />
        </label>
        <label className="column control block w-13">
          <span>Confirm Password</span>
          <input className="input" type="password" />
        </label>
        <div className="column control block w-24 py-2 txt-right">
          <button className="btn is-sld is-valid is-pill">Update</button>
        </div>
      </div>
    </>
  );
}

function AllCuisine() {
  return (
    <>
      <h1 className="border-bottom pb-1rem">All Cuisine</h1>
      <div>
        <h5>All Cuisine</h5>
        <table className="table">
          <thead>
            <th>Cuisine</th>
            <th>Description</th>
            <th>Action</th>
          </thead>
          <tbody>
            <tr>
              <td>Acai Bowls</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, similique hic cum laborum saepe adipisci.</td>
              <td>
                <a className="ml-1rem" href="#">
                  <i className="icon ri-delete-bin-2-line"></i> Remove
                </a>
              </td>
            </tr>
            <tr>
              <td>Adobo</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, similique hic cum laborum saepe adipisci.</td>
              <td>
                <a className="ml-1rem" href="#">
                  <i className="icon ri-delete-bin-2-line"></i> Remove
                </a>
              </td>
            </tr>
            <tr>
              <td>Agnolotti</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, similique hic cum laborum saepe adipisci.</td>
              <td>
                <a className="ml-1rem" href="#">
                  <i className="icon ri-delete-bin-2-line"></i> Remove
                </a>
              </td>
            </tr>
            <tr>
              <td>Akashiyaki</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, similique hic cum laborum saepe adipisci.</td>
              <td>
                <a className="ml-1rem" href="#">
                  <i className="icon ri-delete-bin-2-line"></i> Remove
                </a>
              </td>
            </tr>
            <tr>
              <td>Alfredo</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, similique hic cum laborum saepe adipisci.</td>
              <td>
                <a className="ml-1rem" href="#">
                  <i className="icon ri-delete-bin-2-line"></i> Remove
                </a>
              </td>
            </tr>
            <tr>
              <td>Aligot</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, similique hic cum laborum saepe adipisci.</td>
              <td>
                <a className="ml-1rem" href="#">
                  <i className="icon ri-delete-bin-2-line"></i> Remove
                </a>
              </td>
            </tr>
            <tr>
              <td>Amatriciana sauce</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, similique hic cum laborum saepe adipisci.</td>
              <td>
                <a className="ml-1rem" href="#">
                  <i className="icon ri-delete-bin-2-line"></i> Remove
                </a>
              </td>
            </tr>
            <tr>
              <td>Anago</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, similique hic cum laborum saepe adipisci.</td>
              <td>
                <a className="ml-1rem" href="#">
                  <i className="icon ri-delete-bin-2-line"></i> Remove
                </a>
              </td>
            </tr>
            <tr>
              <td>Anchovies</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, similique hic cum laborum saepe adipisci.</td>
              <td>
                <a className="ml-1rem" href="#">
                  <i className="icon ri-delete-bin-2-line"></i> Remove
                </a>
              </td>
            </tr>
            <tr>
              <td>Andouille</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, similique hic cum laborum saepe adipisci.</td>
              <td>
                <a className="ml-1rem" href="#">
                  <i className="icon ri-delete-bin-2-line"></i> Remove
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </>
  );
}

function AddCuisine() {
  return (
    <>
      <h1 className="border-bottom pb-1rem">Add Cuisine</h1>
      <form className="mb-4 grid align-middle">
        <div className="column">
          <input type="text" className="input" placeholder="Cuisine name" />
        </div>
        <button type="submit" className="btn is-sld is-primary">
          Add
        </button>
      </form>
    </>
  );
}
