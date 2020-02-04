<!DOCTYPE html>
<html lang="en">

  <head>
    <meta id="customViewPort" name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <link type="image/png" href="images/favicon.png" rel="icon">
    <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <title>Foochyn</title>
    <meta name="description" content="description">
    <link href="./index.html" rel="canonical">
    <link href="./scss/temp/fluid.css" rel="stylesheet">
    <link href="./scss/temp/fluid-component.css" rel="stylesheet">
    <link href="./vendors/remixicon/remixicon.css" rel="stylesheet">
    <link href="./scss/temp/base.css" rel="stylesheet">
  </head>

  <body>
    <header class="lyt-header shadow-sm bg-white txt-center border-top-none">
      <div class="w-4 border-right pr-7px">
        <a href="index.html"> <img class="img w-17" src="./images/logo.svg" alt="EazyDiner"> </a>
      </div>
      <div class="w-4 pr-7px">
        <select class="input w-16 is-unstyle">
          <option>Please Select</option>
          <optgroup label="Asia">
            <option>City 1</option>
            <option>City 2</option>
            <option>City 3</option>
            <option>City 4</option>
            <option>City 5</option>
          </optgroup>

          <optgroup label="Europe">
            <option>City 6</option>
            <option>City 7</option>
            <option>City 8</option>
            <option>City 9</option>
            <option>City 10</option>
            <option>City 11</option>
          </optgroup>
        </select>
      </div>
      <div class="w-8 pr-7px"></div>
      <a class="txt-decor-none font-bold border-right clr-error w-4 pr-7px" href="#"><i class="ri-phone-line icon mr-7px"></i>786 100 4444</a>

      <div class="w-4 flex justify-between align-middle pl-7px">
        <a class="btn" href="#">Help</a>
        <a class="btn" href="#">Login</a>
        <a class="btn is-sld is-primary font-bold" href="#">Sign Up</a>
      </div>
    </header>

    <main class="py-8 lyt-main bg-white">
      <section class="container grid">
        <div class="column is-lg">
          <h1>Stand out in search results</h1>
          <div class="mb-1rem">Through Promoted Results you can:</div>
          <ul class="list">
            <li class="flex mb-1rem">
              <div><i class="clr-primary icon is-lg mr-1rem ri-check-double-line"></i></div>
              <div><b>Drive more bookings.</b> Show up in a promoted spot in search results when an undecided diner is searching for a restaurant to book.</div>
            </li>
            <li class="flex mb-1rem">
              <div><i class="clr-primary icon is-lg mr-1rem ri-check-double-line"></i></div>
              <div><b>Be in control.</b> Select which days and shifts you want extra visibility. We’ll only promote your restaurant during those periods. Pause campaigns or launch a last-minute campaign directly from the iOS owner app.</div>
            </li>
            <li class="flex mb-1rem">
              <div><i class="clr-primary icon is-lg mr-1rem ri-check-double-line"></i></div>
              <div><b>Target the diners you want.</b> Choose those who book last minute to first-time diners who have never dined with you.</div>
            </li>
            <li class="flex mb-1rem">
              <div><i class="clr-primary icon is-lg mr-1rem ri-check-double-line"></i></div>
              <div><b>Invest in results.</b> We’ll only charge for seated diners, never for impressions or clicks. It’s that simple.</div>
            </li>
          </ul>
        </div>
        <form class="column grid is-y">
          <input class="input column my-7px" name="firstname" type="text" required placeholder="First Name*">
          <input class="input column my-7px" name="lastname" type="text" required placeholder="Last Name*">
          <input class="input column my-7px" name="email" type="email" required placeholder="Email address*">
          <input class="input column my-7px" name="phone" type="tel" required placeholder="Phone Number*">
          <input class="input column my-7px" name="restaurant" type="text" required placeholder="Resturant Name*">
          <div class="txt-center"><button class="btn is-sld is-primary is-lg font-bold is-pill px-10">Contact Us</button></div>
        </form>
      </section>
    </main>

    <footer class="bg-dark p-2 clr-white grid txt-center">
      <div class="column w-8">
        <h3>Diners</h3>
        <div>Join more than 440,000 diners</div>
        <div>who discover new restaurants with Foochyn</div>
        <div class="mt-1rem"><button class="btn is-sld is-light is-lg">Learn More</button></div>
      </div>
      <div class="column w-8">
        <h3>Restaurants</h3>
        <div>Join more than 1,300 resturants</div>
        <div>who promote their restaurant with Foochyn</div>
        <div class="mt-1rem"><button class="btn is-sld is-light is-lg">Learn More</button></div>
      </div>
      <div class="column w-8">
        <h3>Follow Us</h3>
        <div>Join more than 180,000 fans</div>
        <div>who rave absolute Foochyn on social</div>
        <div class="mt-1rem">
          <a class="clr-white" href="#"><i class="icon title is-sm ri-facebook-box-line"></i></a>
          <a class="clr-white" href="#"><i class="icon title is-sm ri-instagram-line"></i></a>
        </div>
      </div>
      <div class=" column w-15 mx-auto mt-2 mb-7px flex justify-between">
        <a class="clr-white" href="#">About us</a>
        <a class="clr-white" href="#">FAQ</a>
        <a class="clr-white" href="#">Contact US</a>
        <a class="clr-white" href="#">Partner With us</a>
        <a class="clr-white" href="#">Terms & Conditions</a>
        <a class="clr-white" href="#">Privacy Policy</a>
        <a class="clr-white" href="#">Restaurateurs</a>
      </div>
      <div class="border-bottom w-24"></div>
      <div class="container column w-24">© First Table (Australia) Pty Ltd 2014 - 2020. All rights reserved. The First Table logo and name are trademarks of First Table Limited.</div>
    </footer>
  </body>
  <script src="./js/base.js"></script>

</html>