<!DOCTYPE html>
<html lang="en">

  <head>
    <meta id="customViewPort" name="viewport" content="width=device-width,initial-scale=1,user-scalable=0" />
    <link type="image/png" href="images/favicon.png" rel="icon" />
    <meta name="format-detection" content="telephone=no" />
    <meta charset="utf-8" />
    <title>Foochyn</title>
    <meta name="description" content="description" />
    <link href="./index.html" rel="canonical" />
    <link href="./scss/temp/fluid.css" rel="stylesheet" />
    <link href="./scss/temp/fluid-component.css" rel="stylesheet" />
  </head>

  <body>
    <div class="grid has-gap-0">
      <aside class="column lyt-sidebar w-5 bg-dark clr-white h-min-100vh">
        <div class="p-1rem txt-center">
          <a href="./index.html"> <img src="./images/logo.svg" alt="EazyDiner" style="max-width: 145px" /> </a>
        </div>
        <div class="menu mt-10">
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
        </div>
      </aside>
      <div class="column">
        <header class="lyt-header border-top-none bg-dark clr-white justify-between">
          <div>
            <div class="control has-icon-left">
              <input class="input is-min bg-hide is-light" type="text" />
              <svg class="icon is-left is-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="left: 3%;">
                <path d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z"></path>
              </svg>
            </div>
          </div>

          <div class="txt-right flex">
            <div class="icon is-lg mx-1rem">
              <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 1l9.5 5.5v11L12 23l-9.5-5.5v-11L12 1zm0 2.311L4.5 7.653v8.694l7.5 4.342 7.5-4.342V7.653L12 3.311zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path>
              </svg>
            </div>
            <div class="icon is-lg mx-1rem">
              <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M5 18h14v-6.969C19 7.148 15.866 4 12 4s-7 3.148-7 7.031V18zm7-16c4.97 0 9 4.043 9 9.031V20H3v-8.969C3 6.043 7.03 2 12 2zM9.5 21h5a2.5 2.5 0 1 1-5 0z"></path>
              </svg>
            </div>
            <div class="icon mx-1rem border border-wide border-white is-circle p-4 img-bg" style="font-size: 3rem;background-image: url('./images/profile.jpg');">
              <svg class="icon z--10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M4 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H4zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"></path>
              </svg>
            </div>
          </div>
        </header>
        <main class="lyt-main p-2">
          <form>
            <div class="flex justify-between">
              <ol class="breadcrumb column w-24 w-20@sm">
                <h2 class="breadcrumb-item mb-0" data-separator="/">Dashboard</h2>
                <li class="breadcrumb-item" data-separator="/" aria-current="page">Pending Restaurant</li>
              </ol>
              <div>
                <button class="btn is-sld is-valid is-pill">Update</button>
              </div>
            </div>
            <div class="bg-white shadow border p-2 is-round">
              <h5>Restaurants</h5>
              <table class="table">
                <th>Name</th>
                <th>Date</th>
                <th>Status</th>
                <tr>
                  <td><a href="#">xyz</a></td>
                  <td>date</td>
                  <td>Pending</td>
                </tr>
                <tr>
                  <td><a href="#">xyz</a></td>
                  <td>date</td>
                  <td>Pending</td>
                </tr>
                <tr>
                  <td><a href="#">xyz</a></td>
                  <td>date</td>
                  <td>Pending</td>
                </tr>

              </table>
            </div>
          </form>
        </main>
      </div>
    </div>
  </body>
  <script src="./js/base.js"></script>
  <script src="./vendors/jquery-3.4.1.min.js"></script>
  <script>
    var Fooditems = []
    $.each($('.Fooditem'), (index, value) => {
      child = $(value).children();
      Fooditems.push({ name: child[0].innerHTML, price: child[1].innerHTML })
    })


    $("[name=Fooditems]").val(JSON.stringify(Fooditems));

    function addfooditem(element) {
      var foodname = $('input[name="FoodName"]');
      var foodprice = $('input[name="FoodPrice"]');
      if (foodname.val() && foodprice.val() && foodname.val() != "" && foodprice.val() != "") {
        Fooditems.push({ name: foodname.val(), price: foodprice.val() })
        $(".Fooditems").append(`<div class="column w-8"><div class="border p-6 is-round shadow-round flex justify-between Fooditem"><span>${foodname.val()}</span> <span>${foodprice.val()}$</span></div></div>`)
      } else {
        foodname.addClass("is-error")
        foodprice.addClass("is-error")
        setTimeout(() => {
          foodname.removeClass("is-error")
          foodprice.removeClass("is-error")
        }, 2000);
      }
    }

  </script>

</html>