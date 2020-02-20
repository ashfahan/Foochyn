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
          <ol class="breadcrumb column w-24 w-20@sm mt-1rem">
            <h2 class="breadcrumb-item mb-0" data-separator="/">Dashboard</h2>
            <li class="breadcrumb-item" data-separator="/" aria-current="page">Add Restaurant</li>
          </ol>

        <main class="lyt-main">
          <form>
            <div class="bg-white shadow border p-2 is-round">
              <h5>Joined Restaurants</h5>
              <table class="table">
                <th>Name</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
                <tr>
                  <td><a href="#">xyz</a></td>
                  <td>date</td>
                  <td>Pending</td>
                  <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                </tr>
                <tr>
                  <td><a href="#">xyz</a></td>
                  <td>date</td>
                  <td>Pending</td>
                  <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                </tr>
                <tr>
                  <td><a href="#">xyz</a></td>
                  <td>date</td>
                  <td>Pending</td>
                  <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                </tr>
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