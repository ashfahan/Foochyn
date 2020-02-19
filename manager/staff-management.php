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
        <main class="lyt-main">
          <form>
            <div class="bg-white shadow border p-2 is-round has-table-responsive">
              <h5>Table Management</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th tabindex="0" colspan="1" rowspan="1">Staff Name</th>
                    <th tabindex="0" colspan="1" rowspan="1">Waiter</th>
                    <th tabindex="0" colspan="1" rowspan="1">Restaurant Name</th>
                    <th tabindex="0" colspan="1" rowspan="1">Country</th>
                    <th colspan="1" rowspan="1">Edit/Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Yg</td>
                    <td>Waiter</td>
                    <td>Havmour</td>
                    <td>India</td>
                    <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>Yash</td>
                    <td>Waiter</td>
                    <td>The Lion</td>
                    <td>India</td>
                    <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>yaa</td>
                    <td>Waiter</td>
                    <td>Great House</td>
                    <td>Australia</td>
                    <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>ww1</td>
                    <td>Waiter</td>
                    <td>Great House</td>
                    <td>Australia</td>
                    <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>waiter_6</td>
                    <td>Waiter</td>
                    <td>Elea</td>
                    <td>India</td>
                    <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>waiter_6</td>
                    <td>Waiter</td>
                    <td>HAVEN Riverfront Restaurant and Bar</td>
                    <td>India</td>
                    <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>waiter_6</td>
                    <td>Waiter</td>
                    <td>Zest at Wymara Resort</td>
                    <td>India</td>
                    <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>waiter_6</td>
                    <td>Waiter</td>
                    <td>Leuca</td>
                    <td>India</td>
                    <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>waiter_6</td>
                    <td>Waiter</td>
                    <td>Baonecci Ristorante</td>
                    <td>United States</td>
                    <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                  </tr>
                  <tr>
                    <td>waiter_6</td>
                    <td>Waiter</td>
                    <td>Great House</td>
                    <td>Australia</td>
                    <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
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

</html>