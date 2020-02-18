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
    <link rel="stylesheet" href="../vendors/remixicon/remixicon.css">
    <link href="../scss/temp/fluid.css" rel="stylesheet" />
    <link href="../scss/temp/fluid-component.css" rel="stylesheet" />
    <link href="../scss/temp/addresturant.css" rel="stylesheet" />
  </head>

  <body>
    <?php include 'header.php';?>

    <div class="container">
      <ol class="breadcrumb column w-24 w-20@sm mt-1rem">
        <h2 class="breadcrumb-item mb-0" data-separator="/">Dashboard</h2>
        <li class="breadcrumb-item" data-separator="/" aria-current="page">Add Restaurant</li>
      </ol>
    </div>

    <div class="grid has-gap-lg container my-1rem">
      <div class="column w-6">
        <?php include 'sidebar.php';?>
      </div>

      <div class="column">
      <main class="lyt-main bg-white is-round shadow p-2 w-24">
          <h4>Add User</h4>
          <form class="grid">
            <div class="column w-12"><input type="text" class="input" placeholder="Username"></div>
            <div class="column w-12"><input type="text" class="input" placeholder="Password"></div>
          </form>
        </main>
      </div>
    </div>

    <?php include 'footer.php';?>
  </body>
  <script src="../vendors/jquery-3.4.1.min.js"></script>
  <script src="../vendors/jquery-ui/jquery-ui.min.js"></script>
  <script src="../js/base.js"></script>
  <script src="../js/MULTISTEPFORM.js"></script>

</html>