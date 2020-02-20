<!DOCTYPE html>
<html lang="en">

  <head>
    <meta id="customViewPort" name="viewport" content="width=device-width,initial-scale=1,user-scalable=0" />
    <link type="image/png" href="images/favicon.png" rel="icon" />
    <meta name="format-detection" content="telephone=no" />
    <meta charset="utf-8" />
    <title>FOoChyn</title>
    <meta name="description" content="description" />
    <link href="../index.html" rel="canonical" />
  </head>

  <body>
    <?php include 'header.php';?>

    <main class="py-8 lyt-main bg-white">
      <section class="container grid has-gap-lg">
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
        <form class="column has-gap-lg">
          <h5>Personal data</h5>
          <div class="grid has-gap-lg">
            <div class="column w-24"><input class="input" type="text" required placeholder="Name and Last Name" /></div>
            <div class="column w-24"><input class="input" type="tel" required placeholder="Phone Number" /></div>
          </div>

          <h5 class="mt-1rem">Resturant data</h5>
          <div class="grid has-gap-lg">
            <div class="column w-24"><input class="input" type="text" required placeholder="Restaurant Name" /></div>
            <div class="column w-24">
              <select class="input CHOICES" required>
                <option value selected hidden>Which of the following best describe this resturant?</option>
                <option>in the process of opening a new resturant</option>
                <option>My resturant doesnt take reservations</option>
                <option>My resturant only takes phone take reservations</option>
                <option>My resturant currently have a reservation system</option>
              </select>
            </div>
            <div class="column w-24">
              <select class="input CHOICES" required>
                <option value selected hidden>Number of Location</option>
                <option>Number of Location 1</option>
                <option>Number of Location 2-5</option>
                <option>Number of Location 5-10</option>
                <option>Number of Location 11-25</option>
                <option>Number of Location 25+</option>
              </select>
            </div>
            <div class="column w-24">
              <select class="input CHOICES" required>
                <option value selected hidden>Which of the following best describe your role at this resturant?</option>
                <option>I Am Owner</option>
                <option>I Am Chef</option>
                <option>I Am Director of Operations</option>
                <option>I Am General Manager</option>
                <option>I Am Manager</option>
                <option>I Am Other</option>
              </select>
            </div>
            <div class="column w-24"><input class="input" type="text" required placeholder="Address" /></div>
            <div class="column w-12"><input class="input" type="text" required placeholder="City" /></div>
            <div class="column w-12">
              <select class="input CHOICES" required>
                <option value selected hidden="">Location</option>
                <option>Area 1</option>
                <option>Area 2</option>
                <option>Area 3</option>
              </select>
            </div>
          </div>

          <div class="mt-1rem font-bold">I am not a robot</div>
          <div class="column w-12"><input class="input" type="text" required placeholder="Human verify: 3+1=?" /></div>

          <div class="txt-center"><button class="btn is-sld is-primary font-bold mt-1rem">Submit</button></div>
        </form>
      </section>
    </main>

    <?php include './footer.php';?>
  </body>
  <script src="../js/base.js"></script>

</html>