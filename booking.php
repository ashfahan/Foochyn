<!DOCTYPE html>
<html lang="en">

  <head>
    <meta id="customViewPort" name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <link type="image/png" href="images/favicon.png" rel="icon">
    <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <title>FOoChyn</title>
    <meta name="description" content="description">
    <link href="../index.html" rel="canonical">
  </head>

  <body>
    <?php include 'header.php';?>

    <main class="lyt-main mb-1rem">
      <form class="container grid">
        <div class="column">
          <section class="my-1rem bg-white is-round p-4 grid has-gap-lg">
            <h5 class="column w-24">Additional Information</h5>
            <div class="column w-12">
              <select class="input choices">
                <option selected hidden value=""> Select Table</option>
                <option>Table 1 (Circle) Capacity 2</option>
                <option>Table 2 (Square) Capacity 4</option>
                <option>Table 3 (Rectangle) Capacity 8</option>
                <option>Table 4 (Circle) Capacity 16</option>
              </select>
            </div>

          </section>

          <section class="my-1rem bg-white is-round p-4 grid has-gap-lg">
            <h5 class="column w-24">Continue as Guest</h5>
            <div class="column w-12"><input class="input" type="text" placeholder="Full Name"></div>
            <div class="column w-12"><input class="input" type="tel" placeholder="Mobile Number"></div>
            <div class="column w-12"><input class="input" type="text" placeholder="Email"></div>
            <div class="column w-12"><input class="input" type="text" placeholder="Sepecial request"></div>
            <label class="column control w-24"><input class="checkbox" type="checkbox"><span class="label">Register with eazydiner</span> </label>
            <a class="column w-24" href="#">Already have an account? Log In</a>
          </section>
          <section class="my-1rem bg-white is-round p-4">
            <h5>Got a Promocode</h5>
            <div class="my-1rem group">
              <input class="input" type="text" placeholder="Have a code specially meant for you?">
              <button class="btn is-sld">Apply</button>
            </div>
            <label class="control"><input class="checkbox" type="checkbox"> <span class="label block"><span class="font-bold">Enable Whatsapp Permissions</span> to receive updates about booking confirmation, latest offers and other alerts.</span></label>
            <div class="my-1rem txt-center">By clicking on the BOOK button you agree to the <a href="#">terms & conditions</a>.</div>
            <button class="btn is-sld is-primary is-block">Book</button>
          </section>
        </div>
        <div class="column w-8">
          <section class="my-1rem bg-white is-round overflow-hidden">
            <div class="p-4">
              <div class="flex justify-between align-middle">
                <h5 class="mb-0">Booking Summary</h5>
                <button class="btn"><i class="icon ri-edit-2-line"></i> Edit</button>
              </div>
              <hr>
              <div class="font-bold">Resturant Name</div>
              <div class="clr-disabled">Resturant Address</div>
              <hr>
              <div class="grid">
                <div class="column">
                  <div class="clr-disabled">Date</div>
                  <div>24 Feb, Mon</div>
                </div>
                <div class="column">
                  <div class="clr-disabled">Time</div>
                  <div>11:00 PM</div>
                </div>
                <div class="column">
                  <div class="clr-disabled">Guests</div>
                  <div>2</div>
                </div>
              </div>
            </div>
            <div style="background-color: #fafafa;" class="p-4">
              <div class="py-7px px-1rem bg-white border border-valid clr-valid is-pill inline-block"> DEAL </div>
              <h6 class="my-1rem">1+1 on Food</h6>
              <h5 class="clr-disabled">TERMS AND CONDITIONS</h5>
              <ul class="clr-disabled">
                <li>Cannot be clubbed with any other deal.</li>
                <li>Prior reservation is mandatory to avail this deal.</li>
                <li>Deals might not be applicable on festive days, special occasions (e.g. valentine’s day or holi) and national holidays.</li>
              </ul>
            </div>
          </section>
        </div>
      </form>
    </main>

    <?php include 'footer.php';?>
  </body>

</html>