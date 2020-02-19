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
        <main class="lyt-main">
          <form>
            <div class="bg-white shadow border p-2 is-round grid">
              <div class="column control block w-24 py-2 txt-right">
                <button class="btn is-sld is-valid is-pill">Update</button>
              </div>

              <label class="column control block w-12 py-2">
                <span>Username</span>
                <input value="admin" class="input mt-1rem" type="text" />
              </label>

              <label class="column control block w-12 py-2">
                <span>Password</span>
                <input class="input mt-1rem" type="password" />
              </label>
            </div>
          </form>
        </main>
      </div>
    </div>

    <?php include '../footer.php';?>
  </body>

</html>