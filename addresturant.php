<!DOCTYPE html>
<html lang="en">

  <head>
    <meta id="customViewPort" name="viewport" content="width=device-width,initial-scale=1,user-scalable=0" />
    <link type="image/png" href="images/favicon.png" rel="icon" />
    <meta name="format-detection" content="telephone=no" />
    <meta charset="utf-8" />
    <title>FOoChyn</title>
    <meta name="description" content="description" />
    <link href="./index.html" rel="canonical" />
    <link rel="stylesheet" href="./vendors/remixicon/remixicon.css">
    <link href="./scss/temp/fluid.css" rel="stylesheet" />
    <link href="./scss/temp/fluid-component.css" rel="stylesheet" />
    <link href="./scss/temp/addresturant.css" rel="stylesheet" />
  </head>

  <body>
    <?php include 'adminheader.php';?>

    <div class="container">
      <ol class="breadcrumb column w-24 w-20@sm mt-1rem">
        <h2 class="breadcrumb-item mb-0" data-separator="/">Dashboard</h2>
        <li class="breadcrumb-item" data-separator="/" aria-current="page">Add Restaurant</li>
      </ol>
    </div>

    <div class="grid has-gap-lg container overflow-hidden">
      <div class="column w-6">
        <aside class="menu bg-white is-round border shadow">
          <button class="menu-item py-1rem">
            <svg class="icon is-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M2 3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H2.992A.993.993 0 0 1 2 20.007V3.993zM4 5v14h16V5H4zm2 2h6v6H6V7zm2 2v2h2V9H8zm-2 6h12v2H6v-2zm8-8h4v2h-4V7zm0 4h4v2h-4v-2z"></path>
            </svg>
            <span>Profile</span>
          </button>
          <button class="menu-item py-1rem">
            <svg class="icon is-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M22 21H2v-2h1V4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v5h2v10h1v2zm-5-2h2v-8h-6v8h2v-6h2v6zm0-10V5H5v14h6V9h6zM7 11h2v2H7v-2zm0 4h2v2H7v-2zm0-8h2v2H7V7z"></path>
            </svg>
            <span>Add Restaurant</span>
          </button>
          <button class="menu-item py-1rem">
            <svg class="icon is-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M3 19V5.7a1 1 0 0 1 .658-.94l9.671-3.516a.5.5 0 0 1 .671.47v4.953l6.316 2.105a1 1 0 0 1 .684.949V19h2v2H1v-2h2zm2 0h7V3.855L5 6.401V19zm14 0v-8.558l-5-1.667V19h5z"></path>
            </svg>
            <span>Joined Restaurants</span>
          </button>
          <button class="menu-item py-1rem">
            <svg class="icon is-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M21 20h2v2H1v-2h2V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v17zm-2 0V4H5v16h14zM8 11h3v2H8v-2zm0-4h3v2H8V7zm0 8h3v2H8v-2zm5 0h3v2h-3v-2zm0-4h3v2h-3v-2zm0-4h3v2h-3V7z"></path>
            </svg>
            <span>Pending Restaurants</span>
          </button>
          <button class="menu-item py-1rem">
            <svg class="icon is-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M12 4a8 8 0 0 0-8 8h3a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7C2 6.477 6.477 2 12 2s10 4.477 10 10v7a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h3a8 8 0 0 0-8-8zM4 14v5h3v-5H4zm13 0v5h3v-5h-3z"></path>
            </svg>
            <span>Support</span>
          </button>
          <button class="menu-item py-1rem">
            <svg class="icon is-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M19 22H5a3 3 0 0 1-3-3V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12h4v4a3 3 0 0 1-3 3zm-1-5v2a1 1 0 0 0 2 0v-2h-2zm-2 3V4H4v15a1 1 0 0 0 1 1h11zM6 7h8v2H6V7zm0 4h8v2H6v-2zm0 4h5v2H6v-2z"></path>
            </svg>
            <span>Sales Report</span>
          </button>
        </aside>
      </div>

      <div class="column">
        <main class="lyt-main">
          <form class="bg-white shadow border p-2 is-round">
            <section class="my-1rem">
              <h5>General information</h5>
              <div class="grid">
                <div class="column control w-12 py-2">
                  <div class="mb-1rem font-bold">Logo</div>
                  <input class="file" id="Logo" type="file"><label class="label btn is-sld is-primary" for="Logo">Upload Logo</label>
                  <div class="is-sm mt-1rem">Update your avatar manually, If the not set the default Gravatar will be the same as your login email/user account. Max Upload Size: 1MB,</div>
                </div>
                <div class="column control w-12 py-2">
                  <div class="mb-1rem font-bold">Cover</div>
                  <input class="file" id="Cover" type="file"><label class="label btn is-sld is-primary" for="Cover">Upload Cover</label>
                  <div class="is-sm mt-1rem">Update your cover image manually, If the not set the default cover image will be showing on your restaurant detail page. Max Upload Size: 1MB,</div>
                </div>
                <label class="column control w-12 py-2"><span class="font-bold">Restaurant Name *</span><input placeholder="Restaurant" class="input mt-1rem" type="text" /></label>
                <label class="column control w-12 py-2"><span class="font-bold">Restaurant Email</span><input placeholder="email@Restaurant.com" class="input mt-1rem" type="email" /></label>
                <label class="column control w-12 py-2"><span class="font-bold">Restaurant Phone</span><input placeholder="+44 (0) 20 3310 2000" class="input mt-1rem" type="tel" /></label>
                <label class="column control w-12 py-2"><span class="font-bold">Job Title in Restaurant</span><input placeholder="Manager" class="input mt-1rem" type="text" /></label>
                <label class="column control w-12 py-2"><span class="font-bold">Address</span><textarea class="input mt-1rem" style="resize: none" rows="3"></textarea></label>
                <label class="column control w-12 py-2"><img src="./images/dummy_map.jpg" alt="" class="img"></label>
              </div>

            </section>

            <section class="border-top py-2">
              <h5 class="mb-0">Open hours</h5>
              <div>Restaurant is open hours</div>

              <div class="grid align-middle openhours">
                <div class="column w-11">Monday</div>
                <input class="checkbox w-1" type="checkbox" />
                <span class="w-2">Closed</span>
                <div class="column w-5">
                  <select class="input">
                    <option>12:15 am</option>
                    <option>12:30 am</option>
                    <option>12:45 am</option>
                    <option>01:00 am</option>
                    <option>01:15 am</option>
                    <option>01:30 am</option>
                    <option>01:45 am</option>
                    <option>02:00 am</option>
                    <option>02:15 am</option>
                    <option>02:30 am</option>
                    <option>02:45 am</option>
                    <option>03:00 am</option>
                    <option>03:15 am</option>
                    <option>03:30 am</option>
                    <option>03:45 am</option>
                    <option>04:00 am</option>
                    <option>04:15 am</option>
                    <option>04:30 am</option>
                    <option>04:45 am</option>
                    <option>05:00 am</option>
                    <option>05:15 am</option>
                    <option>05:30 am</option>
                    <option>05:45 am</option>
                    <option>06:00 am</option>
                    <option>06:15 am</option>
                    <option>06:30 am</option>
                    <option>06:45 am</option>
                    <option>07:00 am</option>
                    <option>07:15 am</option>
                    <option>07:30 am</option>
                    <option>07:45 am</option>
                    <option>08:00 am</option>
                    <option>08:15 am</option>
                    <option>08:30 am</option>
                    <option>08:45 am</option>
                    <option>09:00 am</option>
                    <option>09:15 am</option>
                    <option>09:30 am</option>
                    <option>09:45 am</option>
                    <option>10:00 am</option>
                    <option>10:15 am</option>
                    <option>10:30 am</option>
                    <option>10:45 am</option>
                    <option>11:00 am</option>
                    <option>11:15 am</option>
                    <option>11:30 am</option>
                    <option>11:45 am</option>
                    <option>12:00 pm</option>
                    <option>12:15 pm</option>
                    <option>12:30 pm</option>
                    <option>12:45 pm</option>
                    <option>01:00 pm</option>
                    <option>01:15 pm</option>
                    <option>01:30 pm</option>
                    <option>01:45 pm</option>
                    <option>02:00 pm</option>
                    <option>02:15 pm</option>
                    <option>02:30 pm</option>
                    <option>02:45 pm</option>
                    <option>03:00 pm</option>
                    <option>03:15 pm</option>
                    <option>03:30 pm</option>
                    <option>03:45 pm</option>
                    <option>04:00 pm</option>
                    <option>04:15 pm</option>
                    <option>04:30 pm</option>
                    <option>04:45 pm</option>
                    <option>05:00 pm</option>
                    <option>05:15 pm</option>
                    <option>05:30 pm</option>
                    <option>05:45 pm</option>
                    <option>06:00 pm</option>
                    <option>06:15 pm</option>
                    <option>06:30 pm</option>
                    <option>06:45 pm</option>
                    <option>07:00 pm</option>
                    <option>07:15 pm</option>
                    <option>07:30 pm</option>
                    <option>07:45 pm</option>
                    <option>08:00 pm</option>
                    <option>08:15 pm</option>
                    <option>08:30 pm</option>
                    <option>08:45 pm</option>
                    <option>09:00 pm</option>
                    <option>09:15 pm</option>
                    <option>09:30 pm</option>
                    <option>09:45 pm</option>
                    <option>10:00 pm</option>
                    <option>10:15 pm</option>
                    <option>10:30 pm</option>
                    <option>10:45 pm</option>
                    <option>11:00 pm</option>
                    <option>11:15 pm</option>
                    <option>11:30 pm</option>
                    <option>11:45 pm</option>
                    <option>12:00 am</option>
                  </select>
                </div>
                <div class="column w-5">
                  <select class="input">
                    <option>12:15 am</option>
                    <option>12:30 am</option>
                    <option>12:45 am</option>
                    <option>01:00 am</option>
                    <option>01:15 am</option>
                    <option>01:30 am</option>
                    <option>01:45 am</option>
                    <option>02:00 am</option>
                    <option>02:15 am</option>
                    <option>02:30 am</option>
                    <option>02:45 am</option>
                    <option>03:00 am</option>
                    <option>03:15 am</option>
                    <option>03:30 am</option>
                    <option>03:45 am</option>
                    <option>04:00 am</option>
                    <option>04:15 am</option>
                    <option>04:30 am</option>
                    <option>04:45 am</option>
                    <option>05:00 am</option>
                    <option>05:15 am</option>
                    <option>05:30 am</option>
                    <option>05:45 am</option>
                    <option>06:00 am</option>
                    <option>06:15 am</option>
                    <option>06:30 am</option>
                    <option>06:45 am</option>
                    <option>07:00 am</option>
                    <option>07:15 am</option>
                    <option>07:30 am</option>
                    <option>07:45 am</option>
                    <option>08:00 am</option>
                    <option>08:15 am</option>
                    <option>08:30 am</option>
                    <option>08:45 am</option>
                    <option>09:00 am</option>
                    <option>09:15 am</option>
                    <option>09:30 am</option>
                    <option>09:45 am</option>
                    <option>10:00 am</option>
                    <option>10:15 am</option>
                    <option>10:30 am</option>
                    <option>10:45 am</option>
                    <option>11:00 am</option>
                    <option>11:15 am</option>
                    <option>11:30 am</option>
                    <option>11:45 am</option>
                    <option>12:00 pm</option>
                    <option>12:15 pm</option>
                    <option>12:30 pm</option>
                    <option>12:45 pm</option>
                    <option>01:00 pm</option>
                    <option>01:15 pm</option>
                    <option>01:30 pm</option>
                    <option>01:45 pm</option>
                    <option>02:00 pm</option>
                    <option>02:15 pm</option>
                    <option>02:30 pm</option>
                    <option>02:45 pm</option>
                    <option>03:00 pm</option>
                    <option>03:15 pm</option>
                    <option>03:30 pm</option>
                    <option>03:45 pm</option>
                    <option>04:00 pm</option>
                    <option>04:15 pm</option>
                    <option>04:30 pm</option>
                    <option>04:45 pm</option>
                    <option>05:00 pm</option>
                    <option>05:15 pm</option>
                    <option>05:30 pm</option>
                    <option>05:45 pm</option>
                    <option>06:00 pm</option>
                    <option>06:15 pm</option>
                    <option>06:30 pm</option>
                    <option>06:45 pm</option>
                    <option>07:00 pm</option>
                    <option>07:15 pm</option>
                    <option>07:30 pm</option>
                    <option>07:45 pm</option>
                    <option>08:00 pm</option>
                    <option>08:15 pm</option>
                    <option>08:30 pm</option>
                    <option>08:45 pm</option>
                    <option>09:00 pm</option>
                    <option>09:15 pm</option>
                    <option>09:30 pm</option>
                    <option>09:45 pm</option>
                    <option>10:00 pm</option>
                    <option>10:15 pm</option>
                    <option>10:30 pm</option>
                    <option>10:45 pm</option>
                    <option>11:00 pm</option>
                    <option>11:15 pm</option>
                    <option>11:30 pm</option>
                    <option>11:45 pm</option>
                    <option>12:00 am</option>
                  </select>
                </div>
              </div>

              <div class="grid align-middle openhours">
                <div class="column w-11">Tuesday</div>
                <input class="checkbox w-1" type="checkbox" />
                <span class="w-2">Closed</span>
                <div class="column w-5">
                  <select class="input">
                    <option>12:15 am</option>
                    <option>12:30 am</option>
                    <option>12:45 am</option>
                    <option>01:00 am</option>
                    <option>01:15 am</option>
                    <option>01:30 am</option>
                    <option>01:45 am</option>
                    <option>02:00 am</option>
                    <option>02:15 am</option>
                    <option>02:30 am</option>
                    <option>02:45 am</option>
                    <option>03:00 am</option>
                    <option>03:15 am</option>
                    <option>03:30 am</option>
                    <option>03:45 am</option>
                    <option>04:00 am</option>
                    <option>04:15 am</option>
                    <option>04:30 am</option>
                    <option>04:45 am</option>
                    <option>05:00 am</option>
                    <option>05:15 am</option>
                    <option>05:30 am</option>
                    <option>05:45 am</option>
                    <option>06:00 am</option>
                    <option>06:15 am</option>
                    <option>06:30 am</option>
                    <option>06:45 am</option>
                    <option>07:00 am</option>
                    <option>07:15 am</option>
                    <option>07:30 am</option>
                    <option>07:45 am</option>
                    <option>08:00 am</option>
                    <option>08:15 am</option>
                    <option>08:30 am</option>
                    <option>08:45 am</option>
                    <option>09:00 am</option>
                    <option>09:15 am</option>
                    <option>09:30 am</option>
                    <option>09:45 am</option>
                    <option>10:00 am</option>
                    <option>10:15 am</option>
                    <option>10:30 am</option>
                    <option>10:45 am</option>
                    <option>11:00 am</option>
                    <option>11:15 am</option>
                    <option>11:30 am</option>
                    <option>11:45 am</option>
                    <option>12:00 pm</option>
                    <option>12:15 pm</option>
                    <option>12:30 pm</option>
                    <option>12:45 pm</option>
                    <option>01:00 pm</option>
                    <option>01:15 pm</option>
                    <option>01:30 pm</option>
                    <option>01:45 pm</option>
                    <option>02:00 pm</option>
                    <option>02:15 pm</option>
                    <option>02:30 pm</option>
                    <option>02:45 pm</option>
                    <option>03:00 pm</option>
                    <option>03:15 pm</option>
                    <option>03:30 pm</option>
                    <option>03:45 pm</option>
                    <option>04:00 pm</option>
                    <option>04:15 pm</option>
                    <option>04:30 pm</option>
                    <option>04:45 pm</option>
                    <option>05:00 pm</option>
                    <option>05:15 pm</option>
                    <option>05:30 pm</option>
                    <option>05:45 pm</option>
                    <option>06:00 pm</option>
                    <option>06:15 pm</option>
                    <option>06:30 pm</option>
                    <option>06:45 pm</option>
                    <option>07:00 pm</option>
                    <option>07:15 pm</option>
                    <option>07:30 pm</option>
                    <option>07:45 pm</option>
                    <option>08:00 pm</option>
                    <option>08:15 pm</option>
                    <option>08:30 pm</option>
                    <option>08:45 pm</option>
                    <option>09:00 pm</option>
                    <option>09:15 pm</option>
                    <option>09:30 pm</option>
                    <option>09:45 pm</option>
                    <option>10:00 pm</option>
                    <option>10:15 pm</option>
                    <option>10:30 pm</option>
                    <option>10:45 pm</option>
                    <option>11:00 pm</option>
                    <option>11:15 pm</option>
                    <option>11:30 pm</option>
                    <option>11:45 pm</option>
                    <option>12:00 am</option>
                  </select>
                </div>
                <div class="column w-5">
                  <select class="input">
                    <option>12:15 am</option>
                    <option>12:30 am</option>
                    <option>12:45 am</option>
                    <option>01:00 am</option>
                    <option>01:15 am</option>
                    <option>01:30 am</option>
                    <option>01:45 am</option>
                    <option>02:00 am</option>
                    <option>02:15 am</option>
                    <option>02:30 am</option>
                    <option>02:45 am</option>
                    <option>03:00 am</option>
                    <option>03:15 am</option>
                    <option>03:30 am</option>
                    <option>03:45 am</option>
                    <option>04:00 am</option>
                    <option>04:15 am</option>
                    <option>04:30 am</option>
                    <option>04:45 am</option>
                    <option>05:00 am</option>
                    <option>05:15 am</option>
                    <option>05:30 am</option>
                    <option>05:45 am</option>
                    <option>06:00 am</option>
                    <option>06:15 am</option>
                    <option>06:30 am</option>
                    <option>06:45 am</option>
                    <option>07:00 am</option>
                    <option>07:15 am</option>
                    <option>07:30 am</option>
                    <option>07:45 am</option>
                    <option>08:00 am</option>
                    <option>08:15 am</option>
                    <option>08:30 am</option>
                    <option>08:45 am</option>
                    <option>09:00 am</option>
                    <option>09:15 am</option>
                    <option>09:30 am</option>
                    <option>09:45 am</option>
                    <option>10:00 am</option>
                    <option>10:15 am</option>
                    <option>10:30 am</option>
                    <option>10:45 am</option>
                    <option>11:00 am</option>
                    <option>11:15 am</option>
                    <option>11:30 am</option>
                    <option>11:45 am</option>
                    <option>12:00 pm</option>
                    <option>12:15 pm</option>
                    <option>12:30 pm</option>
                    <option>12:45 pm</option>
                    <option>01:00 pm</option>
                    <option>01:15 pm</option>
                    <option>01:30 pm</option>
                    <option>01:45 pm</option>
                    <option>02:00 pm</option>
                    <option>02:15 pm</option>
                    <option>02:30 pm</option>
                    <option>02:45 pm</option>
                    <option>03:00 pm</option>
                    <option>03:15 pm</option>
                    <option>03:30 pm</option>
                    <option>03:45 pm</option>
                    <option>04:00 pm</option>
                    <option>04:15 pm</option>
                    <option>04:30 pm</option>
                    <option>04:45 pm</option>
                    <option>05:00 pm</option>
                    <option>05:15 pm</option>
                    <option>05:30 pm</option>
                    <option>05:45 pm</option>
                    <option>06:00 pm</option>
                    <option>06:15 pm</option>
                    <option>06:30 pm</option>
                    <option>06:45 pm</option>
                    <option>07:00 pm</option>
                    <option>07:15 pm</option>
                    <option>07:30 pm</option>
                    <option>07:45 pm</option>
                    <option>08:00 pm</option>
                    <option>08:15 pm</option>
                    <option>08:30 pm</option>
                    <option>08:45 pm</option>
                    <option>09:00 pm</option>
                    <option>09:15 pm</option>
                    <option>09:30 pm</option>
                    <option>09:45 pm</option>
                    <option>10:00 pm</option>
                    <option>10:15 pm</option>
                    <option>10:30 pm</option>
                    <option>10:45 pm</option>
                    <option>11:00 pm</option>
                    <option>11:15 pm</option>
                    <option>11:30 pm</option>
                    <option>11:45 pm</option>
                    <option>12:00 am</option>
                  </select>
                </div>
              </div>

              <div class="grid align-middle openhours">
                <div class="column w-11">Wednessday</div>
                <input class="checkbox w-1" type="checkbox" />
                <span class="w-2">Closed</span>
                <div class="column w-5">
                  <select class="input">
                    <option>12:15 am</option>
                    <option>12:30 am</option>
                    <option>12:45 am</option>
                    <option>01:00 am</option>
                    <option>01:15 am</option>
                    <option>01:30 am</option>
                    <option>01:45 am</option>
                    <option>02:00 am</option>
                    <option>02:15 am</option>
                    <option>02:30 am</option>
                    <option>02:45 am</option>
                    <option>03:00 am</option>
                    <option>03:15 am</option>
                    <option>03:30 am</option>
                    <option>03:45 am</option>
                    <option>04:00 am</option>
                    <option>04:15 am</option>
                    <option>04:30 am</option>
                    <option>04:45 am</option>
                    <option>05:00 am</option>
                    <option>05:15 am</option>
                    <option>05:30 am</option>
                    <option>05:45 am</option>
                    <option>06:00 am</option>
                    <option>06:15 am</option>
                    <option>06:30 am</option>
                    <option>06:45 am</option>
                    <option>07:00 am</option>
                    <option>07:15 am</option>
                    <option>07:30 am</option>
                    <option>07:45 am</option>
                    <option>08:00 am</option>
                    <option>08:15 am</option>
                    <option>08:30 am</option>
                    <option>08:45 am</option>
                    <option>09:00 am</option>
                    <option>09:15 am</option>
                    <option>09:30 am</option>
                    <option>09:45 am</option>
                    <option>10:00 am</option>
                    <option>10:15 am</option>
                    <option>10:30 am</option>
                    <option>10:45 am</option>
                    <option>11:00 am</option>
                    <option>11:15 am</option>
                    <option>11:30 am</option>
                    <option>11:45 am</option>
                    <option>12:00 pm</option>
                    <option>12:15 pm</option>
                    <option>12:30 pm</option>
                    <option>12:45 pm</option>
                    <option>01:00 pm</option>
                    <option>01:15 pm</option>
                    <option>01:30 pm</option>
                    <option>01:45 pm</option>
                    <option>02:00 pm</option>
                    <option>02:15 pm</option>
                    <option>02:30 pm</option>
                    <option>02:45 pm</option>
                    <option>03:00 pm</option>
                    <option>03:15 pm</option>
                    <option>03:30 pm</option>
                    <option>03:45 pm</option>
                    <option>04:00 pm</option>
                    <option>04:15 pm</option>
                    <option>04:30 pm</option>
                    <option>04:45 pm</option>
                    <option>05:00 pm</option>
                    <option>05:15 pm</option>
                    <option>05:30 pm</option>
                    <option>05:45 pm</option>
                    <option>06:00 pm</option>
                    <option>06:15 pm</option>
                    <option>06:30 pm</option>
                    <option>06:45 pm</option>
                    <option>07:00 pm</option>
                    <option>07:15 pm</option>
                    <option>07:30 pm</option>
                    <option>07:45 pm</option>
                    <option>08:00 pm</option>
                    <option>08:15 pm</option>
                    <option>08:30 pm</option>
                    <option>08:45 pm</option>
                    <option>09:00 pm</option>
                    <option>09:15 pm</option>
                    <option>09:30 pm</option>
                    <option>09:45 pm</option>
                    <option>10:00 pm</option>
                    <option>10:15 pm</option>
                    <option>10:30 pm</option>
                    <option>10:45 pm</option>
                    <option>11:00 pm</option>
                    <option>11:15 pm</option>
                    <option>11:30 pm</option>
                    <option>11:45 pm</option>
                    <option>12:00 am</option>
                  </select>
                </div>
                <div class="column w-5">
                  <select class="input">
                    <option>12:15 am</option>
                    <option>12:30 am</option>
                    <option>12:45 am</option>
                    <option>01:00 am</option>
                    <option>01:15 am</option>
                    <option>01:30 am</option>
                    <option>01:45 am</option>
                    <option>02:00 am</option>
                    <option>02:15 am</option>
                    <option>02:30 am</option>
                    <option>02:45 am</option>
                    <option>03:00 am</option>
                    <option>03:15 am</option>
                    <option>03:30 am</option>
                    <option>03:45 am</option>
                    <option>04:00 am</option>
                    <option>04:15 am</option>
                    <option>04:30 am</option>
                    <option>04:45 am</option>
                    <option>05:00 am</option>
                    <option>05:15 am</option>
                    <option>05:30 am</option>
                    <option>05:45 am</option>
                    <option>06:00 am</option>
                    <option>06:15 am</option>
                    <option>06:30 am</option>
                    <option>06:45 am</option>
                    <option>07:00 am</option>
                    <option>07:15 am</option>
                    <option>07:30 am</option>
                    <option>07:45 am</option>
                    <option>08:00 am</option>
                    <option>08:15 am</option>
                    <option>08:30 am</option>
                    <option>08:45 am</option>
                    <option>09:00 am</option>
                    <option>09:15 am</option>
                    <option>09:30 am</option>
                    <option>09:45 am</option>
                    <option>10:00 am</option>
                    <option>10:15 am</option>
                    <option>10:30 am</option>
                    <option>10:45 am</option>
                    <option>11:00 am</option>
                    <option>11:15 am</option>
                    <option>11:30 am</option>
                    <option>11:45 am</option>
                    <option>12:00 pm</option>
                    <option>12:15 pm</option>
                    <option>12:30 pm</option>
                    <option>12:45 pm</option>
                    <option>01:00 pm</option>
                    <option>01:15 pm</option>
                    <option>01:30 pm</option>
                    <option>01:45 pm</option>
                    <option>02:00 pm</option>
                    <option>02:15 pm</option>
                    <option>02:30 pm</option>
                    <option>02:45 pm</option>
                    <option>03:00 pm</option>
                    <option>03:15 pm</option>
                    <option>03:30 pm</option>
                    <option>03:45 pm</option>
                    <option>04:00 pm</option>
                    <option>04:15 pm</option>
                    <option>04:30 pm</option>
                    <option>04:45 pm</option>
                    <option>05:00 pm</option>
                    <option>05:15 pm</option>
                    <option>05:30 pm</option>
                    <option>05:45 pm</option>
                    <option>06:00 pm</option>
                    <option>06:15 pm</option>
                    <option>06:30 pm</option>
                    <option>06:45 pm</option>
                    <option>07:00 pm</option>
                    <option>07:15 pm</option>
                    <option>07:30 pm</option>
                    <option>07:45 pm</option>
                    <option>08:00 pm</option>
                    <option>08:15 pm</option>
                    <option>08:30 pm</option>
                    <option>08:45 pm</option>
                    <option>09:00 pm</option>
                    <option>09:15 pm</option>
                    <option>09:30 pm</option>
                    <option>09:45 pm</option>
                    <option>10:00 pm</option>
                    <option>10:15 pm</option>
                    <option>10:30 pm</option>
                    <option>10:45 pm</option>
                    <option>11:00 pm</option>
                    <option>11:15 pm</option>
                    <option>11:30 pm</option>
                    <option>11:45 pm</option>
                    <option>12:00 am</option>
                  </select>
                </div>
              </div>

              <div class="grid align-middle openhours">
                <div class="column w-11">Thursday</div>
                <input class="checkbox w-1" type="checkbox" />
                <span class="w-2">Closed</span>
                <div class="column w-5">
                  <select class="input">
                    <option>12:15 am</option>
                    <option>12:30 am</option>
                    <option>12:45 am</option>
                    <option>01:00 am</option>
                    <option>01:15 am</option>
                    <option>01:30 am</option>
                    <option>01:45 am</option>
                    <option>02:00 am</option>
                    <option>02:15 am</option>
                    <option>02:30 am</option>
                    <option>02:45 am</option>
                    <option>03:00 am</option>
                    <option>03:15 am</option>
                    <option>03:30 am</option>
                    <option>03:45 am</option>
                    <option>04:00 am</option>
                    <option>04:15 am</option>
                    <option>04:30 am</option>
                    <option>04:45 am</option>
                    <option>05:00 am</option>
                    <option>05:15 am</option>
                    <option>05:30 am</option>
                    <option>05:45 am</option>
                    <option>06:00 am</option>
                    <option>06:15 am</option>
                    <option>06:30 am</option>
                    <option>06:45 am</option>
                    <option>07:00 am</option>
                    <option>07:15 am</option>
                    <option>07:30 am</option>
                    <option>07:45 am</option>
                    <option>08:00 am</option>
                    <option>08:15 am</option>
                    <option>08:30 am</option>
                    <option>08:45 am</option>
                    <option>09:00 am</option>
                    <option>09:15 am</option>
                    <option>09:30 am</option>
                    <option>09:45 am</option>
                    <option>10:00 am</option>
                    <option>10:15 am</option>
                    <option>10:30 am</option>
                    <option>10:45 am</option>
                    <option>11:00 am</option>
                    <option>11:15 am</option>
                    <option>11:30 am</option>
                    <option>11:45 am</option>
                    <option>12:00 pm</option>
                    <option>12:15 pm</option>
                    <option>12:30 pm</option>
                    <option>12:45 pm</option>
                    <option>01:00 pm</option>
                    <option>01:15 pm</option>
                    <option>01:30 pm</option>
                    <option>01:45 pm</option>
                    <option>02:00 pm</option>
                    <option>02:15 pm</option>
                    <option>02:30 pm</option>
                    <option>02:45 pm</option>
                    <option>03:00 pm</option>
                    <option>03:15 pm</option>
                    <option>03:30 pm</option>
                    <option>03:45 pm</option>
                    <option>04:00 pm</option>
                    <option>04:15 pm</option>
                    <option>04:30 pm</option>
                    <option>04:45 pm</option>
                    <option>05:00 pm</option>
                    <option>05:15 pm</option>
                    <option>05:30 pm</option>
                    <option>05:45 pm</option>
                    <option>06:00 pm</option>
                    <option>06:15 pm</option>
                    <option>06:30 pm</option>
                    <option>06:45 pm</option>
                    <option>07:00 pm</option>
                    <option>07:15 pm</option>
                    <option>07:30 pm</option>
                    <option>07:45 pm</option>
                    <option>08:00 pm</option>
                    <option>08:15 pm</option>
                    <option>08:30 pm</option>
                    <option>08:45 pm</option>
                    <option>09:00 pm</option>
                    <option>09:15 pm</option>
                    <option>09:30 pm</option>
                    <option>09:45 pm</option>
                    <option>10:00 pm</option>
                    <option>10:15 pm</option>
                    <option>10:30 pm</option>
                    <option>10:45 pm</option>
                    <option>11:00 pm</option>
                    <option>11:15 pm</option>
                    <option>11:30 pm</option>
                    <option>11:45 pm</option>
                    <option>12:00 am</option>
                  </select>
                </div>
                <div class="column w-5">
                  <select class="input">
                    <option>12:15 am</option>
                    <option>12:30 am</option>
                    <option>12:45 am</option>
                    <option>01:00 am</option>
                    <option>01:15 am</option>
                    <option>01:30 am</option>
                    <option>01:45 am</option>
                    <option>02:00 am</option>
                    <option>02:15 am</option>
                    <option>02:30 am</option>
                    <option>02:45 am</option>
                    <option>03:00 am</option>
                    <option>03:15 am</option>
                    <option>03:30 am</option>
                    <option>03:45 am</option>
                    <option>04:00 am</option>
                    <option>04:15 am</option>
                    <option>04:30 am</option>
                    <option>04:45 am</option>
                    <option>05:00 am</option>
                    <option>05:15 am</option>
                    <option>05:30 am</option>
                    <option>05:45 am</option>
                    <option>06:00 am</option>
                    <option>06:15 am</option>
                    <option>06:30 am</option>
                    <option>06:45 am</option>
                    <option>07:00 am</option>
                    <option>07:15 am</option>
                    <option>07:30 am</option>
                    <option>07:45 am</option>
                    <option>08:00 am</option>
                    <option>08:15 am</option>
                    <option>08:30 am</option>
                    <option>08:45 am</option>
                    <option>09:00 am</option>
                    <option>09:15 am</option>
                    <option>09:30 am</option>
                    <option>09:45 am</option>
                    <option>10:00 am</option>
                    <option>10:15 am</option>
                    <option>10:30 am</option>
                    <option>10:45 am</option>
                    <option>11:00 am</option>
                    <option>11:15 am</option>
                    <option>11:30 am</option>
                    <option>11:45 am</option>
                    <option>12:00 pm</option>
                    <option>12:15 pm</option>
                    <option>12:30 pm</option>
                    <option>12:45 pm</option>
                    <option>01:00 pm</option>
                    <option>01:15 pm</option>
                    <option>01:30 pm</option>
                    <option>01:45 pm</option>
                    <option>02:00 pm</option>
                    <option>02:15 pm</option>
                    <option>02:30 pm</option>
                    <option>02:45 pm</option>
                    <option>03:00 pm</option>
                    <option>03:15 pm</option>
                    <option>03:30 pm</option>
                    <option>03:45 pm</option>
                    <option>04:00 pm</option>
                    <option>04:15 pm</option>
                    <option>04:30 pm</option>
                    <option>04:45 pm</option>
                    <option>05:00 pm</option>
                    <option>05:15 pm</option>
                    <option>05:30 pm</option>
                    <option>05:45 pm</option>
                    <option>06:00 pm</option>
                    <option>06:15 pm</option>
                    <option>06:30 pm</option>
                    <option>06:45 pm</option>
                    <option>07:00 pm</option>
                    <option>07:15 pm</option>
                    <option>07:30 pm</option>
                    <option>07:45 pm</option>
                    <option>08:00 pm</option>
                    <option>08:15 pm</option>
                    <option>08:30 pm</option>
                    <option>08:45 pm</option>
                    <option>09:00 pm</option>
                    <option>09:15 pm</option>
                    <option>09:30 pm</option>
                    <option>09:45 pm</option>
                    <option>10:00 pm</option>
                    <option>10:15 pm</option>
                    <option>10:30 pm</option>
                    <option>10:45 pm</option>
                    <option>11:00 pm</option>
                    <option>11:15 pm</option>
                    <option>11:30 pm</option>
                    <option>11:45 pm</option>
                    <option>12:00 am</option>
                  </select>
                </div>
              </div>

              <div class="grid align-middle openhours">
                <div class="column w-11">Friday</div>
                <input class="checkbox w-1" type="checkbox" />
                <span class="w-2">Closed</span>
                <div class="column w-5">
                  <select class="input">
                    <option>12:15 am</option>
                    <option>12:30 am</option>
                    <option>12:45 am</option>
                    <option>01:00 am</option>
                    <option>01:15 am</option>
                    <option>01:30 am</option>
                    <option>01:45 am</option>
                    <option>02:00 am</option>
                    <option>02:15 am</option>
                    <option>02:30 am</option>
                    <option>02:45 am</option>
                    <option>03:00 am</option>
                    <option>03:15 am</option>
                    <option>03:30 am</option>
                    <option>03:45 am</option>
                    <option>04:00 am</option>
                    <option>04:15 am</option>
                    <option>04:30 am</option>
                    <option>04:45 am</option>
                    <option>05:00 am</option>
                    <option>05:15 am</option>
                    <option>05:30 am</option>
                    <option>05:45 am</option>
                    <option>06:00 am</option>
                    <option>06:15 am</option>
                    <option>06:30 am</option>
                    <option>06:45 am</option>
                    <option>07:00 am</option>
                    <option>07:15 am</option>
                    <option>07:30 am</option>
                    <option>07:45 am</option>
                    <option>08:00 am</option>
                    <option>08:15 am</option>
                    <option>08:30 am</option>
                    <option>08:45 am</option>
                    <option>09:00 am</option>
                    <option>09:15 am</option>
                    <option>09:30 am</option>
                    <option>09:45 am</option>
                    <option>10:00 am</option>
                    <option>10:15 am</option>
                    <option>10:30 am</option>
                    <option>10:45 am</option>
                    <option>11:00 am</option>
                    <option>11:15 am</option>
                    <option>11:30 am</option>
                    <option>11:45 am</option>
                    <option>12:00 pm</option>
                    <option>12:15 pm</option>
                    <option>12:30 pm</option>
                    <option>12:45 pm</option>
                    <option>01:00 pm</option>
                    <option>01:15 pm</option>
                    <option>01:30 pm</option>
                    <option>01:45 pm</option>
                    <option>02:00 pm</option>
                    <option>02:15 pm</option>
                    <option>02:30 pm</option>
                    <option>02:45 pm</option>
                    <option>03:00 pm</option>
                    <option>03:15 pm</option>
                    <option>03:30 pm</option>
                    <option>03:45 pm</option>
                    <option>04:00 pm</option>
                    <option>04:15 pm</option>
                    <option>04:30 pm</option>
                    <option>04:45 pm</option>
                    <option>05:00 pm</option>
                    <option>05:15 pm</option>
                    <option>05:30 pm</option>
                    <option>05:45 pm</option>
                    <option>06:00 pm</option>
                    <option>06:15 pm</option>
                    <option>06:30 pm</option>
                    <option>06:45 pm</option>
                    <option>07:00 pm</option>
                    <option>07:15 pm</option>
                    <option>07:30 pm</option>
                    <option>07:45 pm</option>
                    <option>08:00 pm</option>
                    <option>08:15 pm</option>
                    <option>08:30 pm</option>
                    <option>08:45 pm</option>
                    <option>09:00 pm</option>
                    <option>09:15 pm</option>
                    <option>09:30 pm</option>
                    <option>09:45 pm</option>
                    <option>10:00 pm</option>
                    <option>10:15 pm</option>
                    <option>10:30 pm</option>
                    <option>10:45 pm</option>
                    <option>11:00 pm</option>
                    <option>11:15 pm</option>
                    <option>11:30 pm</option>
                    <option>11:45 pm</option>
                    <option>12:00 am</option>
                  </select>
                </div>
                <div class="column w-5">
                  <select class="input">
                    <option>12:15 am</option>
                    <option>12:30 am</option>
                    <option>12:45 am</option>
                    <option>01:00 am</option>
                    <option>01:15 am</option>
                    <option>01:30 am</option>
                    <option>01:45 am</option>
                    <option>02:00 am</option>
                    <option>02:15 am</option>
                    <option>02:30 am</option>
                    <option>02:45 am</option>
                    <option>03:00 am</option>
                    <option>03:15 am</option>
                    <option>03:30 am</option>
                    <option>03:45 am</option>
                    <option>04:00 am</option>
                    <option>04:15 am</option>
                    <option>04:30 am</option>
                    <option>04:45 am</option>
                    <option>05:00 am</option>
                    <option>05:15 am</option>
                    <option>05:30 am</option>
                    <option>05:45 am</option>
                    <option>06:00 am</option>
                    <option>06:15 am</option>
                    <option>06:30 am</option>
                    <option>06:45 am</option>
                    <option>07:00 am</option>
                    <option>07:15 am</option>
                    <option>07:30 am</option>
                    <option>07:45 am</option>
                    <option>08:00 am</option>
                    <option>08:15 am</option>
                    <option>08:30 am</option>
                    <option>08:45 am</option>
                    <option>09:00 am</option>
                    <option>09:15 am</option>
                    <option>09:30 am</option>
                    <option>09:45 am</option>
                    <option>10:00 am</option>
                    <option>10:15 am</option>
                    <option>10:30 am</option>
                    <option>10:45 am</option>
                    <option>11:00 am</option>
                    <option>11:15 am</option>
                    <option>11:30 am</option>
                    <option>11:45 am</option>
                    <option>12:00 pm</option>
                    <option>12:15 pm</option>
                    <option>12:30 pm</option>
                    <option>12:45 pm</option>
                    <option>01:00 pm</option>
                    <option>01:15 pm</option>
                    <option>01:30 pm</option>
                    <option>01:45 pm</option>
                    <option>02:00 pm</option>
                    <option>02:15 pm</option>
                    <option>02:30 pm</option>
                    <option>02:45 pm</option>
                    <option>03:00 pm</option>
                    <option>03:15 pm</option>
                    <option>03:30 pm</option>
                    <option>03:45 pm</option>
                    <option>04:00 pm</option>
                    <option>04:15 pm</option>
                    <option>04:30 pm</option>
                    <option>04:45 pm</option>
                    <option>05:00 pm</option>
                    <option>05:15 pm</option>
                    <option>05:30 pm</option>
                    <option>05:45 pm</option>
                    <option>06:00 pm</option>
                    <option>06:15 pm</option>
                    <option>06:30 pm</option>
                    <option>06:45 pm</option>
                    <option>07:00 pm</option>
                    <option>07:15 pm</option>
                    <option>07:30 pm</option>
                    <option>07:45 pm</option>
                    <option>08:00 pm</option>
                    <option>08:15 pm</option>
                    <option>08:30 pm</option>
                    <option>08:45 pm</option>
                    <option>09:00 pm</option>
                    <option>09:15 pm</option>
                    <option>09:30 pm</option>
                    <option>09:45 pm</option>
                    <option>10:00 pm</option>
                    <option>10:15 pm</option>
                    <option>10:30 pm</option>
                    <option>10:45 pm</option>
                    <option>11:00 pm</option>
                    <option>11:15 pm</option>
                    <option>11:30 pm</option>
                    <option>11:45 pm</option>
                    <option>12:00 am</option>
                  </select>
                </div>
              </div>

              <div class="grid align-middle openhours">
                <div class="column w-11">Saturday</div>
                <input class="checkbox w-1" type="checkbox" />
                <span class="w-2">Closed</span>
                <div class="column w-5">
                  <select class="input">
                    <option>12:15 am</option>
                    <option>12:30 am</option>
                    <option>12:45 am</option>
                    <option>01:00 am</option>
                    <option>01:15 am</option>
                    <option>01:30 am</option>
                    <option>01:45 am</option>
                    <option>02:00 am</option>
                    <option>02:15 am</option>
                    <option>02:30 am</option>
                    <option>02:45 am</option>
                    <option>03:00 am</option>
                    <option>03:15 am</option>
                    <option>03:30 am</option>
                    <option>03:45 am</option>
                    <option>04:00 am</option>
                    <option>04:15 am</option>
                    <option>04:30 am</option>
                    <option>04:45 am</option>
                    <option>05:00 am</option>
                    <option>05:15 am</option>
                    <option>05:30 am</option>
                    <option>05:45 am</option>
                    <option>06:00 am</option>
                    <option>06:15 am</option>
                    <option>06:30 am</option>
                    <option>06:45 am</option>
                    <option>07:00 am</option>
                    <option>07:15 am</option>
                    <option>07:30 am</option>
                    <option>07:45 am</option>
                    <option>08:00 am</option>
                    <option>08:15 am</option>
                    <option>08:30 am</option>
                    <option>08:45 am</option>
                    <option>09:00 am</option>
                    <option>09:15 am</option>
                    <option>09:30 am</option>
                    <option>09:45 am</option>
                    <option>10:00 am</option>
                    <option>10:15 am</option>
                    <option>10:30 am</option>
                    <option>10:45 am</option>
                    <option>11:00 am</option>
                    <option>11:15 am</option>
                    <option>11:30 am</option>
                    <option>11:45 am</option>
                    <option>12:00 pm</option>
                    <option>12:15 pm</option>
                    <option>12:30 pm</option>
                    <option>12:45 pm</option>
                    <option>01:00 pm</option>
                    <option>01:15 pm</option>
                    <option>01:30 pm</option>
                    <option>01:45 pm</option>
                    <option>02:00 pm</option>
                    <option>02:15 pm</option>
                    <option>02:30 pm</option>
                    <option>02:45 pm</option>
                    <option>03:00 pm</option>
                    <option>03:15 pm</option>
                    <option>03:30 pm</option>
                    <option>03:45 pm</option>
                    <option>04:00 pm</option>
                    <option>04:15 pm</option>
                    <option>04:30 pm</option>
                    <option>04:45 pm</option>
                    <option>05:00 pm</option>
                    <option>05:15 pm</option>
                    <option>05:30 pm</option>
                    <option>05:45 pm</option>
                    <option>06:00 pm</option>
                    <option>06:15 pm</option>
                    <option>06:30 pm</option>
                    <option>06:45 pm</option>
                    <option>07:00 pm</option>
                    <option>07:15 pm</option>
                    <option>07:30 pm</option>
                    <option>07:45 pm</option>
                    <option>08:00 pm</option>
                    <option>08:15 pm</option>
                    <option>08:30 pm</option>
                    <option>08:45 pm</option>
                    <option>09:00 pm</option>
                    <option>09:15 pm</option>
                    <option>09:30 pm</option>
                    <option>09:45 pm</option>
                    <option>10:00 pm</option>
                    <option>10:15 pm</option>
                    <option>10:30 pm</option>
                    <option>10:45 pm</option>
                    <option>11:00 pm</option>
                    <option>11:15 pm</option>
                    <option>11:30 pm</option>
                    <option>11:45 pm</option>
                    <option>12:00 am</option>
                  </select>
                </div>
                <div class="column w-5">
                  <select class="input">
                    <option>12:15 am</option>
                    <option>12:30 am</option>
                    <option>12:45 am</option>
                    <option>01:00 am</option>
                    <option>01:15 am</option>
                    <option>01:30 am</option>
                    <option>01:45 am</option>
                    <option>02:00 am</option>
                    <option>02:15 am</option>
                    <option>02:30 am</option>
                    <option>02:45 am</option>
                    <option>03:00 am</option>
                    <option>03:15 am</option>
                    <option>03:30 am</option>
                    <option>03:45 am</option>
                    <option>04:00 am</option>
                    <option>04:15 am</option>
                    <option>04:30 am</option>
                    <option>04:45 am</option>
                    <option>05:00 am</option>
                    <option>05:15 am</option>
                    <option>05:30 am</option>
                    <option>05:45 am</option>
                    <option>06:00 am</option>
                    <option>06:15 am</option>
                    <option>06:30 am</option>
                    <option>06:45 am</option>
                    <option>07:00 am</option>
                    <option>07:15 am</option>
                    <option>07:30 am</option>
                    <option>07:45 am</option>
                    <option>08:00 am</option>
                    <option>08:15 am</option>
                    <option>08:30 am</option>
                    <option>08:45 am</option>
                    <option>09:00 am</option>
                    <option>09:15 am</option>
                    <option>09:30 am</option>
                    <option>09:45 am</option>
                    <option>10:00 am</option>
                    <option>10:15 am</option>
                    <option>10:30 am</option>
                    <option>10:45 am</option>
                    <option>11:00 am</option>
                    <option>11:15 am</option>
                    <option>11:30 am</option>
                    <option>11:45 am</option>
                    <option>12:00 pm</option>
                    <option>12:15 pm</option>
                    <option>12:30 pm</option>
                    <option>12:45 pm</option>
                    <option>01:00 pm</option>
                    <option>01:15 pm</option>
                    <option>01:30 pm</option>
                    <option>01:45 pm</option>
                    <option>02:00 pm</option>
                    <option>02:15 pm</option>
                    <option>02:30 pm</option>
                    <option>02:45 pm</option>
                    <option>03:00 pm</option>
                    <option>03:15 pm</option>
                    <option>03:30 pm</option>
                    <option>03:45 pm</option>
                    <option>04:00 pm</option>
                    <option>04:15 pm</option>
                    <option>04:30 pm</option>
                    <option>04:45 pm</option>
                    <option>05:00 pm</option>
                    <option>05:15 pm</option>
                    <option>05:30 pm</option>
                    <option>05:45 pm</option>
                    <option>06:00 pm</option>
                    <option>06:15 pm</option>
                    <option>06:30 pm</option>
                    <option>06:45 pm</option>
                    <option>07:00 pm</option>
                    <option>07:15 pm</option>
                    <option>07:30 pm</option>
                    <option>07:45 pm</option>
                    <option>08:00 pm</option>
                    <option>08:15 pm</option>
                    <option>08:30 pm</option>
                    <option>08:45 pm</option>
                    <option>09:00 pm</option>
                    <option>09:15 pm</option>
                    <option>09:30 pm</option>
                    <option>09:45 pm</option>
                    <option>10:00 pm</option>
                    <option>10:15 pm</option>
                    <option>10:30 pm</option>
                    <option>10:45 pm</option>
                    <option>11:00 pm</option>
                    <option>11:15 pm</option>
                    <option>11:30 pm</option>
                    <option>11:45 pm</option>
                    <option>12:00 am</option>
                  </select>
                </div>
              </div>
              <div class="grid align-middle openhours">
                <div class="column w-11">Sunday</div>
                <input class="checkbox w-1" type="checkbox" />
                <span class="w-2">Closed</span>
                <div class="column w-5">
                  <select class="input">
                    <option>12:15 am</option>
                    <option>12:30 am</option>
                    <option>12:45 am</option>
                    <option>01:00 am</option>
                    <option>01:15 am</option>
                    <option>01:30 am</option>
                    <option>01:45 am</option>
                    <option>02:00 am</option>
                    <option>02:15 am</option>
                    <option>02:30 am</option>
                    <option>02:45 am</option>
                    <option>03:00 am</option>
                    <option>03:15 am</option>
                    <option>03:30 am</option>
                    <option>03:45 am</option>
                    <option>04:00 am</option>
                    <option>04:15 am</option>
                    <option>04:30 am</option>
                    <option>04:45 am</option>
                    <option>05:00 am</option>
                    <option>05:15 am</option>
                    <option>05:30 am</option>
                    <option>05:45 am</option>
                    <option>06:00 am</option>
                    <option>06:15 am</option>
                    <option>06:30 am</option>
                    <option>06:45 am</option>
                    <option>07:00 am</option>
                    <option>07:15 am</option>
                    <option>07:30 am</option>
                    <option>07:45 am</option>
                    <option>08:00 am</option>
                    <option>08:15 am</option>
                    <option>08:30 am</option>
                    <option>08:45 am</option>
                    <option>09:00 am</option>
                    <option>09:15 am</option>
                    <option>09:30 am</option>
                    <option>09:45 am</option>
                    <option>10:00 am</option>
                    <option>10:15 am</option>
                    <option>10:30 am</option>
                    <option>10:45 am</option>
                    <option>11:00 am</option>
                    <option>11:15 am</option>
                    <option>11:30 am</option>
                    <option>11:45 am</option>
                    <option>12:00 pm</option>
                    <option>12:15 pm</option>
                    <option>12:30 pm</option>
                    <option>12:45 pm</option>
                    <option>01:00 pm</option>
                    <option>01:15 pm</option>
                    <option>01:30 pm</option>
                    <option>01:45 pm</option>
                    <option>02:00 pm</option>
                    <option>02:15 pm</option>
                    <option>02:30 pm</option>
                    <option>02:45 pm</option>
                    <option>03:00 pm</option>
                    <option>03:15 pm</option>
                    <option>03:30 pm</option>
                    <option>03:45 pm</option>
                    <option>04:00 pm</option>
                    <option>04:15 pm</option>
                    <option>04:30 pm</option>
                    <option>04:45 pm</option>
                    <option>05:00 pm</option>
                    <option>05:15 pm</option>
                    <option>05:30 pm</option>
                    <option>05:45 pm</option>
                    <option>06:00 pm</option>
                    <option>06:15 pm</option>
                    <option>06:30 pm</option>
                    <option>06:45 pm</option>
                    <option>07:00 pm</option>
                    <option>07:15 pm</option>
                    <option>07:30 pm</option>
                    <option>07:45 pm</option>
                    <option>08:00 pm</option>
                    <option>08:15 pm</option>
                    <option>08:30 pm</option>
                    <option>08:45 pm</option>
                    <option>09:00 pm</option>
                    <option>09:15 pm</option>
                    <option>09:30 pm</option>
                    <option>09:45 pm</option>
                    <option>10:00 pm</option>
                    <option>10:15 pm</option>
                    <option>10:30 pm</option>
                    <option>10:45 pm</option>
                    <option>11:00 pm</option>
                    <option>11:15 pm</option>
                    <option>11:30 pm</option>
                    <option>11:45 pm</option>
                    <option>12:00 am</option>
                  </select>
                </div>
                <div class="column w-5">
                  <select class="input">
                    <option>12:15 am</option>
                    <option>12:30 am</option>
                    <option>12:45 am</option>
                    <option>01:00 am</option>
                    <option>01:15 am</option>
                    <option>01:30 am</option>
                    <option>01:45 am</option>
                    <option>02:00 am</option>
                    <option>02:15 am</option>
                    <option>02:30 am</option>
                    <option>02:45 am</option>
                    <option>03:00 am</option>
                    <option>03:15 am</option>
                    <option>03:30 am</option>
                    <option>03:45 am</option>
                    <option>04:00 am</option>
                    <option>04:15 am</option>
                    <option>04:30 am</option>
                    <option>04:45 am</option>
                    <option>05:00 am</option>
                    <option>05:15 am</option>
                    <option>05:30 am</option>
                    <option>05:45 am</option>
                    <option>06:00 am</option>
                    <option>06:15 am</option>
                    <option>06:30 am</option>
                    <option>06:45 am</option>
                    <option>07:00 am</option>
                    <option>07:15 am</option>
                    <option>07:30 am</option>
                    <option>07:45 am</option>
                    <option>08:00 am</option>
                    <option>08:15 am</option>
                    <option>08:30 am</option>
                    <option>08:45 am</option>
                    <option>09:00 am</option>
                    <option>09:15 am</option>
                    <option>09:30 am</option>
                    <option>09:45 am</option>
                    <option>10:00 am</option>
                    <option>10:15 am</option>
                    <option>10:30 am</option>
                    <option>10:45 am</option>
                    <option>11:00 am</option>
                    <option>11:15 am</option>
                    <option>11:30 am</option>
                    <option>11:45 am</option>
                    <option>12:00 pm</option>
                    <option>12:15 pm</option>
                    <option>12:30 pm</option>
                    <option>12:45 pm</option>
                    <option>01:00 pm</option>
                    <option>01:15 pm</option>
                    <option>01:30 pm</option>
                    <option>01:45 pm</option>
                    <option>02:00 pm</option>
                    <option>02:15 pm</option>
                    <option>02:30 pm</option>
                    <option>02:45 pm</option>
                    <option>03:00 pm</option>
                    <option>03:15 pm</option>
                    <option>03:30 pm</option>
                    <option>03:45 pm</option>
                    <option>04:00 pm</option>
                    <option>04:15 pm</option>
                    <option>04:30 pm</option>
                    <option>04:45 pm</option>
                    <option>05:00 pm</option>
                    <option>05:15 pm</option>
                    <option>05:30 pm</option>
                    <option>05:45 pm</option>
                    <option>06:00 pm</option>
                    <option>06:15 pm</option>
                    <option>06:30 pm</option>
                    <option>06:45 pm</option>
                    <option>07:00 pm</option>
                    <option>07:15 pm</option>
                    <option>07:30 pm</option>
                    <option>07:45 pm</option>
                    <option>08:00 pm</option>
                    <option>08:15 pm</option>
                    <option>08:30 pm</option>
                    <option>08:45 pm</option>
                    <option>09:00 pm</option>
                    <option>09:15 pm</option>
                    <option>09:30 pm</option>
                    <option>09:45 pm</option>
                    <option>10:00 pm</option>
                    <option>10:15 pm</option>
                    <option>10:30 pm</option>
                    <option>10:45 pm</option>
                    <option>11:00 pm</option>
                    <option>11:15 pm</option>
                    <option>11:30 pm</option>
                    <option>11:45 pm</option>
                    <option>12:00 am</option>
                  </select>
                </div>
              </div>
            </section>

            <section class="border-top py-2">
              <h5 class="mb-0">Menu</h5>
              <div>Type of Food served at restaurant</div>

              <div class="menu my-7px">
                <button type="button" class="menu-trigger menu-item bg-primary clr-white font-bolder">Pick Cuisine Categories</button>
                <div class="grid">
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">African</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Albanian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Algerian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">American</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Apulian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Arabic</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Argentinean</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Armenian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Asian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Assyrian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Australian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Austrian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Azerbaijani</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Bahamian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Balti</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Bangladeshi</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Bar</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Barbecue</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Beer restaurants</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Beijing cuisine</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Belgian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Brazilian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Brew Pub</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">British</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Burmese</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Cafe</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Cajun & Creole</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Calabrian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Cambodian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Campania</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Canadian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Caribbean</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Catalan</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Caucasian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Central American</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Central Asian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Central European</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Central-Italian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Chilean</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Chinese</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Colombian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Contemporary</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Costa Rican</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Croatian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Cuban</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Czech</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Danish</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Deli</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Diner</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Dining bars</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Dutch</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Eastern European</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Ecuadorean</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Egyptian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Emilian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Ethiopian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">European</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Fast Food</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Filipino</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">French</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Fruit parlours</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Fujian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Fusion</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Gastropub</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Georgian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">German</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Greek</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Grill</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Guatemalan</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Hawaiian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Healthy</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Hokkaido cuisine</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Hungarian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Indian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Indonesian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">International</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Irish</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Israeli</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Italian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Jamaican</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Japanese</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Japanese Fusion</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Japanese sweets parlour</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Kaiseki</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Kappo</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Korean</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Kyoto cuisine</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Kyushu cuisine</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Latin</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Latvian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Lazio</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Lebanese</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Ligurian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Lombard</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Malaysian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Medicinal foods</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Mediterranean</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Mexican</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Middle Eastern</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Mongolian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Moroccan</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Native American</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Neapolitan</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Nepali</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">New Zealand</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Nigerian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Northern-Italian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Norwegian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Pakistani</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Persian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Peruvian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Pizza</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Polish</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Polynesian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Portuguese</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Pub</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Puerto Rican</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Romagna</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Romana</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Romanian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Russian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Salvadoran</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Sardinian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Scandinavian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Scottish</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Seafood</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Shojin</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Sicilian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Singaporean</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Slovenian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Soups</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">South American</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Southern-Italian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Southwestern</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Spanish</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Sri Lankan</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Steakhouse</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Street Food</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Sushi</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Swedish</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Swiss</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Taiwanese</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Thai</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Tibetan</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Tunisian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Turkish</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Tuscan</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Ukrainian</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Uzbek</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Venezuelan</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Vietnamese</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Welsh</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Wine Bar</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Xinjiang</span></label>
                  <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Yunnan</span></label>
                </div>
              </div>

              <div class="menu my-7px">
                <button type="button" class="menu-trigger menu-item bg-primary clr-white font-bolder">Pick Dishes</button>
                <div class="grid">
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Acai Bowls</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Adobo</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Agnolotti</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Akashiyaki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Alfredo</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Aligot</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Amatriciana sauce</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Anago</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Anchovies</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Andouille</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Andouillettes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Angler</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Antipasti</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Apple pie</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Arancini</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Arrosticini</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Arroz Negro</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Arroz brut</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Arroz caldoso</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Arroz del senyoret</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Arròs a banda</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Artichoke Chips</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Artichoke Salad</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Assam Fish Head Curry</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">BLT</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Baba Ghanoush</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Baby Back Ribs</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bacalao al Pil-Pil</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Baccala</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Baccala mantecato</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bacon Sandwich</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bagels</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Baguette</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Baingan Bharta</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bak Chor Mee</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bak Kut Teh</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Baked Ziti</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bananas Foster</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bangers And Mash</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Banoffee pies</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Barbecue</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bass</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Beef</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Beef Bourguignon</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Beef Cheeks</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Beef on Weck</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Beefsteak Florentine style</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Beignets</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bento (Lunch Box)</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bibimbap</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bigoli</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Biscuits and gravy</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Blood Sausages</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bolognese</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Botifarra</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bottarga</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bouchée à la reine</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bouillabaisse</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bourrides</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Brandade</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bread Pudding</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Breakfast Burrito</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Breakfast Sandwich</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Broccoli rabe</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Brudet</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bruschette</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Bubble Tea</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Buffalo mozzarella</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Burger</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Burrata Salad</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Burrito</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Burrito Bowl</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Buta-don</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cacio e pepe</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cakes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Calamares</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Calamari</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Caldeirada</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">California Roll</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">California Style Pizza</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Callos</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Canarian Wrinkly Potatoes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cannelloni</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cannoli</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Caponata</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Caprese Salads</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Carbonade flamande</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Carbonara</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Carcamusa</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Carciofi alla Romana</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Carciofi alla giudia</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Carrot Cake</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cashew Chicken</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cassata</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cassoulet</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Castilian Soup</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Catfish</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Caviar</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cazon</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cecina</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cecina Salad</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cervelles de canut</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cesar Salad</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Ceviche</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Champon noodles</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chanko-Nabe</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cheese fondue</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cheeseburger</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cheesecake</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cheesecakes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cheesesteak</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chianina</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chicago Dog</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chicharrón</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chicken Alfredo</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chicken And Waffles</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chicken Croquettes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chicken Kabobs</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chicken Kiev</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chicken Paella</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chicken Parmesan</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chicken Sandwich</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chicken Wings</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chicken dishes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chicken fried steak</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chicken in Maroilles sauce</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chili</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chili Crab</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chilli Chicken</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chinese buns</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chinese rice porridge</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chipirones</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chiritori-Nabe, Tecchyan-Nabe</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chistorra</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chocolate molten cake</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chocolate mousse</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chocolates</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chopitos</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Choucroute Royale</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Choucroute garnie</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chow Mein</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Chowder</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Churrasco</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Churros and Porras</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cioppino</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Clam Chowder</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Clams</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Club Sandwich</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cobb Salad</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Coccoli</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cochifrito</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cocido</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cockle</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cococha</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cod</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cod Carpaccio</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cod Croquettes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cod fritters</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Coda alla vaccinara</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cold noodles</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Confit</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Coq au Vin</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Coquinas</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Coratella</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Corn dogs</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Corned Beef</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Corvina</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cotoletta</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Coulant</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Couscous</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Crab</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Crab Cake</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Crab Legs</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Crab Rangoon</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Crab Soup</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Crawfish</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Crema Catalana</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Creme Brulee</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Creme Brulee</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Crepes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Crisp</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Crispy Pata</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Croque Madame</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Croque Monsieur</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Croquettes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Crostini</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Crostino</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cuban Sandwich</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cucumber Salad</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cupcakes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cured Meat Croquettes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Curry</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Curry udon</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Custard Bun</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cuttlefish</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Cuttlefish Croquettes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Dauphiné raviolis</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Deep dish pizza</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Dim Sum</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Dinuguan</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Dojo</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Donburi (Rice Bowl)</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Doner Kebab</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Donuts</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Duck</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Duck Confit</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Duck Magret</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Dumplings</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Eclairs</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Eggplant</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Eggplant with honey</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Eggs Benedict</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">El Cachopo</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Entrecote</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Escalivada</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Escalope</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Escargot</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Etouffee</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">European-style curry</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fajitas</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Falafel</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Farinata</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fattoush</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fava Beans</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fettuccine Alfredo</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Ficelle Picarde</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fideua</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Filet Mignon</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fish</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fish & Chips</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fish Sandwich</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fish Soup</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fish Taco</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Flamenquín</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Flammekueche</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Floating island</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Focaccia</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Foie gras</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fondue</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">French Dip</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">French Fries</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">French Toast</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">French onion soup</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fried Anchovies</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fried Artichokes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fried Clams</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fried Cod</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fried Hake</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fried cheese</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fried octopus</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fried pickles</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fried rice</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fried shrimp</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Frito Mallorquín</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fritto misto</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Frog Legs</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Frog's legs</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Frozen Yogurt</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Fugu (Blow Fish)</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Galettes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Garlic</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Garlic Prawns</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Gazpacho</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Gefilte Fish</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Gelato</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Genghis Khan</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Gianduja</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Giant broad beans</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Gilt-head bream</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Gnocchi alla sorrentina</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Gnocco fritto</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Goat Fish Cake</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Goat cheese</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Goat cheese salad</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Grand Marnier soufflé</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Green Chili</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Green Curry</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Green Mojo</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Grilled Sole</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Grilled cheese</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Grilled giblets</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Grilled pork</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Grouper Sandwich</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Guanciale</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Gumbo</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Gyoza</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Gyros</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Gyu-don</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Gyutan</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Haddock</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Hake</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Halibut</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Halloumi</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Ham Croquettes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Hamburger steaks</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Hamburgers</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Hanger steak</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Hashed beef rice</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Hazelnut</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Hiroshima style okonomiyaki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Hoagie</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Hokkien Mee</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Hopia</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Horse meat</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Horumon</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Hot Chocolate</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Hot Dog</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Hot Pot</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Hoto</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Huevos Rotos</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Hummus</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Ice Cream</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Indian curry</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Italian Beef</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Italian Meatballs</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Izakaya</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Jambalaya</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Jambonneau</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Japanese Curry</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Japanese sweets</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Juice & Smoothies</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Kabobs</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Kaiten Sushi (Conveyor belt sushi)</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Kale Salad</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Kamameshi</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Karaage fried chicken</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Kare kare</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Katsu-don</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Key lime pie</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">King Prawn Shrimps</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">King Scallops</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Kiritanpo</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Kobe Beef</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Korean Fried Chicken</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Kueh Pie Tee</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Kung Pao Chicken</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Kushiage (Fried Skewers)</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Kushiyaki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Lacon</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Laksa</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Lamb</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Lamb Shoulder</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Lamb chops</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Lasagne</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Lechon</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Lemon tart</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Les œufs en meurette</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Lettuce Wraps</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Little Necks</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Liver terrines</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Lobster</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Lobster Roll</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Lobster rice</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Lumpia</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Lyonnaise salad</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Mac and cheese</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Macaronades</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Macarons</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Macaroons</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Manchego</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Mandarin Duck</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Margherita Pizza</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Matzo Ball Soup</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Mazamorra</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Meat Cakes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Meat Paella</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Meatballs</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Meatloaf</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Meringue</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Milanese risotto</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Mille-feuilles</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Minestrone</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Miso ramen</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Mixed Kebabs</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Mixed Paella</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Mizutaki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Monjya yaki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Mortadella</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Motsu-Nabe</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Moules-frites</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Moussaka</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Muffaletta</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Mugitoro</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Mushroom Croquettes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Mussels</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Nabe (Japanese Hot Pot)</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Nachos</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Neapolitan pizza</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">New York Style Pizza</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Noodle</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Norway Lobsters</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Obanzai</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Octopus</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Oden</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Offal</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Okinawa soba</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Okonomiyaki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Okonomiyaki & Takoyaki (Flour Dish)</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Olivier Salad</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Omelette</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Omurice</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Orecchiette</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Ortigas</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Osso Buco</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Ossobuco</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Oxitail</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Oxtail Croquettes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Oyako-don</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Oyster</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Paccheri</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pad Thai</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Padron Peppers</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Paella</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Paella Valenciana</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pancakes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Paninis</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pansoti</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Panzanella</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Panzerotti</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pappa al pomodoro</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Parfait</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Paris-Brest</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pasta</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pastrami Sandwich</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Patatas Bravas</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Patatas Revolconas</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Peking Duck</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Penny buns</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Peposo</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Percebe</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Perogies</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pescado Frito</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pesto</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Petits Farcis</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Philly Cheesesteak</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pho</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Piadina</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pici</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pimento Cheese</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pintxos</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Piquillo pepper</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Plateau de fruits de mer</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Po' Boys</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Poke Bowls</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Polbo a Feira</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Polenta</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pollock</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Porchetta</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pork</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pork Cheeks</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pork Loin</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pork Roll</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pork Shabu Shabu</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pork Tenderloin</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Porterhouse Steak</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pot-au-feu</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Poutine</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Praline Torte</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Prawn Paste Chicken</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Prawn Salad</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Prawns</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pretzel</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Profiteroles</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Prosciutto</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Puchero Croquettes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pulled Pork Sandwich</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Pulut Hitam</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Puntarelle</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Quahogs</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Quail</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Quail Eggs</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Quenelle</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Queso</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Quiche</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Raclette</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Ragu</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Ramen</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Razor Clams</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Red Beans and Rice</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Red Curry</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Reuben sandwich</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Rib Steak</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Ribollita</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Ribs</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Rice pudding</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Risotto</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Roast Beef</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Roast Chicken</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Robatayaki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Roe</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Roman pizza</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Roquefort</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Rum Baba</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Ryotei</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Salad</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Salad Nicoise</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Salmon</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Salmon Salad</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Salmorejo</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Salt ramen</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Saltimbocca</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Samgyeopsal</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Samgyetang</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sandwiches</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sanuki udon</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sarladaises potatoes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sashimi</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sauerkraut / Choucroute</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sauerkraut from the sea</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Savoyarde fondue</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sbrisolona</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Scallops</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Schnitzel</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Scialatelli</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Scrapple</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Seafood Croquettes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Seafood Paella</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Seafood Platters</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Seafood rice bowls</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Secreto Iberico</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Shabu Shabu</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Shaved ice</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Shawarma</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Shellfish</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Shiacciatta</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Shrimp</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Shrimp Salad</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Shrimp and Grits</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sinigang</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sirloin Steak</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sirloin Steak with whisky</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sisig</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Skate Wing</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Smoked Salmon</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Smoked Sardines</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Snails</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Soba</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Soft serve ice cream</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sole Meunière</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Soup Dumplings</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Soup curry</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Souvlaki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Soy sauce ramen</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Spaghetti alla chitarra</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Spaghetti with Clams</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Spätzle</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Squash blossom</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Squid Ink Pasta</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Steak Frites</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Steak Sandwich</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Steak Tartare</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Steamers</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Stews</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Stockfish Octopus</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Stracciatella</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Strozzapreti</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Stuffed Onions</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Stuffed aubergines</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Suckling Pig</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sukiyaki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sukiyaki & Shabu Shabu</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sumibiyaki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Supplis</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Suppon</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Surf And Turf</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sweets</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Sword noodles</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Swordfish</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">T-Bone Steak</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Taco rice</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tacos</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tagliatelle</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Taglierini</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Taiyaki, Oobanyaki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Takoyaki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tandoori Chicken</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tantanmen noodles</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tapas</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tarte Tatin</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tarte tropézienne</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tartufo</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tataki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tater tots</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tempura</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Ten-don</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Teppanyaki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Thai suki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tikka Masala</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tilapia</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tiramisu</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Toasts</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tomato Bread</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tombet</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tonkatsu</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tonkotsu ramen</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Torte</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tortelli</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tortellini</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tortelloni</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tortilla de Camarones</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tortillas</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tostones</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Toulouse sausage</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tres Leches</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tripe</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Trofie</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tsukemen</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tuna</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tuna Melt</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Tuna Sandwich</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Turkey Burger</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Turkey Sandwich</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Udon</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Udon & Soba (Wheat & Buckwheat Noodle)</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Udon suki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Unagi</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Unagi & Dojo (Eel & Soil)</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Uramaki</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Veal Kidneys</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Vegetable Paella</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Vegetable dishes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Veggie Burger</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Veggie Burrito</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Vignarola</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Vitello tonnato</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Waffle Fries</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Waffles</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Waffles & Crepes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Welsh rarebit</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Western sweets</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Wild boar</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Wings</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Yakiniku (Japanese BBQ)</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Yakitori (Grilled Skewers)</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Yellow Curry</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Yoshoku (Japanese Style Western Food)</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Yu Sheng</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Yuba</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Zabaione</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">Zamburinas</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">buckwheat crepes</span></label>
                  <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label">chestnut_soup</span></label>
                </div>
              </div>

            </section>

            <section class="border-top py-2">
              <h5 class="mb-0">Features</h5>
              <div>What features and amenities does this restaurant have?</div>
              <div class="grid">
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Reservations</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Delivery</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Takeout</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Seating</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Outdoor Seating</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Free Wifi</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Television</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Parking Available</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Private Dining</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Cash Only</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Accepts Credit Cards</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Digital Payments</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Serves Alcohol</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Full Bar</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Wine and Beer</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Buffet</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Highchairs Available</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Wheelchair Accessible</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Dog Friendly</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Playgrounds</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">BYOB</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Beach</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Drive Thru</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Jazz Bar</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Waterfront</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Live Music</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Table Service</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Non-smoking restaurants</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Family style</span></label>
                <label class="control column w-6"><input type="checkbox" class="checkbox"><span class="label">Sports bars</span></label>
              </div>
            </section>

            <section class="border-top py-2">
              <h5 class="mb-0">Type</h5>
              <div>What is this restaurant good for?</div>
              <div class="grid">
                <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label">Kids</span></label>
                <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label">Business meetings</span></label>
                <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label">Large groups</span></label>
                <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label">Romantic</span></label>
                <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label">Bar scene</span></label>
                <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label">Special occasions</span></label>
                <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label">Scenic view</span></label>
                <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label">Local cuisine</span></label>
                <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label">Hidden Gems</span></label>
                <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label">Hot New Restaurants</span></label>
              </div>
            </section>

            <section class="border-top py-2">
              <h5 class="mb-0">Serve</h5>
              <div>What meals does this restaurant serve?</div>
              <div class="grid">
                <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label">Breakfast</span></label>
                <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label">Brunch</span></label>
                <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label">Lunch</span></label>
                <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label">Dinner</span></label>
                <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label">Drinks</span></label>
                <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label">Late Night</span></label>
              </div>
            </section>

            <section class="border-top py-2">
              <h5 class="mb-0">Price</h5>
              <div>How expensive is this restaurant?</div>
              <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label">Cheap Eats - quick serve or self-service</span></label>
              <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label">Mid-range - casual, table service</span></label>
              <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label">Fine Dining - More formal or dressy</span></label>
            </section>

            <div class="txt-right">
              <button class="btn is-sld is-valid is-pill">Submit</button>
            </div>
          </form>
        </main>
      </div>
    </div>

    <?php include 'footer.php';?>
  </body>
  <script src="./js/base.js"></script>
  <script src="./vendors/jquery-3.4.1.min.js"></script>

</html>