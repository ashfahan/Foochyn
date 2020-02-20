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
      <div class="column w-5">
        <?php include 'sidebar.php';?>
      </div>

      <div class="column">
        <?php include 'header.php';?>

        <div class="px-2">
          <ol class="breadcrumb column w-24 w-20@sm my-7px">
            <h2 class="breadcrumb-item mb-0" data-separator="/">Dashboard</h2>
            <li class="breadcrumb-item" data-separator="/" aria-current="page">Add Restaurant</li>
          </ol>

        <main class="lyt-main">
          <form class="bg-white shadow border p-2 is-round">
            <h5>Restaurants Owners</h5>
            <div class="has-table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Alexander</td>
                    <td>Tyler</td>
                    <td>Wandsworth, London, UK</td>
                    <td>ronak4@mailinator.com</td>
                    <td>+91-9685741230</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>Amanyara</td>
                    <td>Restaurant</td>
                    <td>Calabasas, CA, USA</td>
                    <td>amanyara@mailinator.com</td>
                    <td>9856321408</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>Awadh</td>
                    <td>Patel</td>
                    <td>A/5, 8th Floor, Safal Profitaire, Nr. Ramada Hotel, Corporate Road, Prahalad Nagar, Prahlad Nagar, Ahmedabad, Gujarat 380015, India</td>
                    <td>awadh@mailinator.com</td>
                    <td>(646) 861-3241</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>Baonecci</td>
                    <td>Ristorante</td>
                    <td>SFO, Domestic Terminals Arrivals Level, San Francisco, CA 94128, USA</td>
                    <td>Baonecci@mailinator.com</td>
                    <td>(415) 989-1806</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>Christin</td>
                    <td>Adkins</td>
                    <td>Notting Hill, London, UK</td>
                    <td>ronak3@mailinator.com</td>
                    <td>9865745210</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>CK</td>
                    <td> Restaurant</td>
                    <td>1544 Webster St, Oakland, CA 94612, USA</td>
                    <td>ck@mailinator.com</td>
                    <td>510 239-4142</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>Dipak</td>
                    <td>Ladumor</td>
                    <td>Sola Rd, Sola, Ahmedabad, Gujarat 380060, India</td>
                    <td>dipak@mailiantor.com</td>
                    <td>98745632154</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>divy</td>
                    <td>ladumor</td>
                    <td>Paras Nagar, Memnagar, Ahmedabad, Gujarat 380063, India</td>
                    <td>divy@mailinator.com</td>
                    <td>9874563215</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>elea</td>
                    <td>elea</td>
                    <td>Jodhpur Char Rasta, Suryapooja Block B, Satellite, Ahmedabad, Gujarat 380015, India</td>
                    <td>elea@mailinator.com</td>
                    <td>(212) 369-9800</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>Gary</td>
                    <td>Jones</td>
                    <td>Bodakdev, Ahmedabad, Gujarat, India</td>
                    <td>garyjone@mailinator.com</td>
                    <td>9878564585</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                </tbody>
              </table>
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