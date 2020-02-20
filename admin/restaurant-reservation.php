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

    <div class="grid has-gap-0">
      <div class="column w-6">
        <?php include 'sidebar.php';?>
      </div>

      <div class="column">
        <?php include 'header.php';?>

        <div class="px-2">
          <ol class="breadcrumb column w-24 w-20@sm mt-1rem">
            <h2 class="breadcrumb-item mb-0" data-separator="/">Dashboard</h2>
            <li class="breadcrumb-item" data-separator="/" aria-current="page">Add Restaurant</li>
          </ol>

        <main class="lyt-main">
          <form class="bg-white shadow border p-2 is-round">
            <div class="grid">
              <div class="column w-12">
                <div>Restaurant Name:</div>
                <select class="input">
                  <option selected hidden> Select Restaurant Name</option>
                  <option>Amanyara</option>
                  <option>Apna Panjab</option>
                  <option>Arabian Knife</option>
                  <option>Awadh</option>
                  <option>Baonecci Ristorante</option>
                  <option>Chez Bruce</option>
                  <option>CK Restaurant</option>
                  <option>Elea</option>
                  <option>evening post</option>
                  <option>Gormoh Restaurant</option>
                  <option>Great House</option>
                  <option>HAVEN Riverfront Restaurant and Bar</option>
                  <option>Havmour</option>
                  <option>Honest</option>
                  <option>Jassi De Parathe</option>
                  <option>Jay Ambe 12121</option>
                  <option>Kilis Kitchen</option>
                  <option>Kuro - The Asian Bistro</option>
                  <option>Leuca</option>
                  <option>Limewood Bar &amp; Restaurant</option>
                  <option>Magic Chicken</option>
                  <option>Mirch Masala</option>
                  <option>Northwest Point Resort</option>
                  <option>Other Mama</option>
                  <option>Pizza Plus</option>
                  <option>Pizza point</option>
                  <option>Sandbox</option>
                  <option>Sankalp</option>
                  <option>Sankalp</option>
                  <option>Sasuji Dining Hall</option>
                  <option>Shark Restaurant</option>
                  <option>Shree Mehfil</option>
                  <option>Table 34</option>
                  <option>test</option>
                  <option>The Deck</option>
                  <option>The Green House</option>
                  <option>The Green House</option>
                  <option>The Green House</option>
                  <option>The Ledbury</option>
                  <option>The Ledbury</option>
                  <option>The Ledbury</option>
                  <option>The Lion</option>
                  <option>The Raj Thaal and Restaurant</option>
                  <option>Waterbar</option>
                  <option>Zest at Wymara Resort</option>
                </select>
              </div>
              <div class="column w-12">
                <div>Zip Code</div>
                <input required class="input" type="text">
              </div>
              <div class="column w-12">
                <div>Number of people</div>
                <input required class="input" type="text">
              </div>
              <div class="column w-12">
                <div>Name of Customer:</div>
                <select required="required">
                  <option hidden selected>-- Select Customer Name --</option>
                  <option>Paras vanakdi</option>
                  <option>paras patel</option>
                  <option>harsukh shah</option>
                  <option>anil gupta</option>
                  <option>Ashish Patel</option>
                  <option>vijay mishra</option>
                  <option>saurabh gopani</option>
                  <option>yashgohil</option>
                  <option>YashGohil</option>
                  <option>ChrishBolt</option>
                  <option>JohnSmith</option>
                  <option>RonakParmar</option>
                  <option>Umesh Ladumor</option>
                  <option>SamirDeraiya</option>
                  <option>paras vankadi</option>
                  <option>priyank patel</option>
                  <option>SamirDeraiya</option>
                  <option>ronak </option>
                  <option>alexsmith</option>
                  <option>Alex</option>
                  <option>UmeshLadumor</option>
                  <option>samderaiya</option>
                  <option>samderaiya</option>
                  <option>samderaiya</option>
                  <option>samderaiya</option>
                  <option>samderaiya</option>
                  <option>peterwalker</option>
                  <option>ronak </option>
                  <option>byyhyhy </option>
                  <option>Umesh Ladumor</option>
                  <option>yashgohil</option>
                  <option>Umesh Ladumor</option>
                  <option>JohnSmith</option>
                  <option>Umesh Ladumor</option>
                  <option>vuvubjbj </option>
                  <option>Yash Gohil</option>
                  <option>uh </option>
                  <option>uh </option>
                  <option>Paras vanakdi</option>
                  <option>f </option>
                  <option>Paras vanakdi</option>
                  <option>Yash Gohil</option>
                  <option>Yash Gohil</option>
                  <option>parag </option>
                  <option>paras patel</option>
                  <option>dhrit</option>
                  <option>Chirag</option>
                  <option>Paras vanakdi</option>
                  <option>dhrit</option>
                  <option>vijay mishra</option>
                  <option>dhrittt</option>
                  <option>khh </option>
                  <option>harsukh shah</option>
                  <option>Ashoka</option>
                  <option>Chirag</option>
                  <option>Manish</option>
                  <option>Abu</option>
                  <option>dhhrriitt</option>
                  <option>helly </option>
                  <option>dhrit</option>
                  <option>dhrittt</option>
                  <option>ronakparmar</option>
                  <option>Ronak Parmar</option>
                  <option>harsukh shah</option>
                  <option>SaddamVohara</option>
                  <option>ronakparmar</option>
                  <option>teased</option>
                  <option>sever</option>
                  <option>ferf </option>
                  <option>the</option>
                  <option>ronakk </option>
                  <option>www </option>
                  <option>Ray Colon</option>
                  <option>hgj </option>
                  <option>tarnish</option>
                  <option>tarnish</option>
                  <option>tarnish</option>
                  <option>joenuc</option>
                  <option>srarh</option>
                  <option>srect</option>
                  <option>anil gupta</option>
                  <option>Radu </option>
                  <option>dhritt </option>
                  <option>dhriiittt </option>
                </select>
              </div>
              <div class="column w-12">
                <div>Source Type:</div>
                <select required="required">
                  <option>-- Select source type --</option>
                  <option>app</option>
                  <option>phone</option>
                  <option>walk_ins</option>
                  <option>website</option>
                </select>
              </div>
              <div class="column w-12">
                <div>Booking Date</div>
                <div class="group">
                  <input class="input" type="date">
                </div>
              </div>
              <div class="column w-12">
                <div>Booking Time Slot</div>
                <div class="group">
                  <select class="input" required="required">
                    <option value="? undefined:undefined ?"></option>
                  </select>
                </div>
              </div>
              <div class="column w-24">
                <hr>
              </div>
              <div class="column w-12"> <button type="submit" class="btn is-out is-primary">Seat Now</button> </div>
              <div class="column w-12 txt-right"> <button type="submit" class="btn is-sld is-primary">Book Now</button> </div>
            </div>
          </form>
        </main>
      </div>
    </div>

    <?php include './footer.php';?>
  </body>
  <script src="../js/base.js"></script>
  <script src="../vendors/jquery-3.4.1.min.js"></script>

</html>