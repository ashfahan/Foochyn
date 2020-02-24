<!DOCTYPE html>
<html lang="en">

  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0" />
    <link type="image/png" href="images/favicon.png" rel="icon" />
    <meta name="format-detection" content="telephone=no" />
    <meta charset="utf-8" />
    <title>FOoChyn</title>
    <meta name="description" content="description" />
    <link href="../index.html" rel="canonical" />
    <link href="../scss/temp/addresturant.css" rel="stylesheet" />
  </head>

  <body>

    <div class="grid has-gap-0">
      <div class="column w-5">
        <?php include './sidebar.php';?>
      </div>

      <div class="column">
        <?php include './header.php';?>

        <div class="px-2">
          <ol class="breadcrumb column w-24 w-20@sm my-7px">
            <h2 class="breadcrumb-item mb-0" data-separator="/">Dashboard</h2>
            <li class="breadcrumb-item" data-separator="/" aria-current="page">Add Restaurant</li>
          </ol>

          <main class="lyt-main mb-1rem grid">
            <div class="column w-12">
              <fieldset class="my-1rem bg-white is-round shadow p-4 w-24">
                <div class="flex justify-between">
                  <div>
                    <h5>General information</h5>
                    <div>General information of restaurant</div>
                  </div>
                </div>

                <div class="grid">
                  <label class="column control w-12 py-2"><span class="font-bold">Restaurant Name</span><input placeholder="Restaurant" class="input mt-1rem" type="text" /></label>
                  <label class="column control w-12 py-2"><span class="font-bold">Restaurant Email</span><input placeholder="email@Restaurant.com" class="input mt-1rem" type="email" /></label>
                  <label class="column control w-12 py-2"><span class="font-bold">Restaurant Phone</span><input placeholder="+44 (0) 20 3310 2000" class="input mt-1rem" type="tel" /></label>
                  <label class="column control w-12 py-2"><span class="font-bold">Job Title in Restaurant</span><input placeholder="Manager" class="input mt-1rem" type="text" /></label>
                  <div class="column w-24 font-bold">Address</div>
                  <div class="column w-12"> <textarea class="input mt-1rem" style="resize: none" rows="3"></textarea> </div>
                  <div class="column control w-12 "><img src="../images/dummy_map.jpg" alt="" class="mt-1rem img"></div>
                  <div class="column control w-12">
                    <div class="mb-1rem font-bold">Restaurant Images</div>
                    <input class="file" id="Images" type="file"><label class="label btn is-sld is-primary" for="Images">Upload Images</label>
                    <div class="is-sm mt-1rem">Supported image format: .jpeg, .jpg, .png . Can Select Multiple Images</div>
                  </div>

                </div>

              </fieldset>

              <fieldset class="my-1rem bg-white is-round shadow p-4 w-24">
                <div class="flex justify-between">
                  <div>
                    <h5>Table</h5>
                    <div>Table Setup in the restaurant</div>
                  </div>
                </div>

                <div class="my-1rem has-table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Table Name</th>
                        <th>Table Shape</th>
                        <th>Table Type</th>
                        <th>Capacity</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Table 2</td>
                        <td>Circle</td>
                        <td>Good</td>
                        <td>4</td>
                        <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>Table 2</td>
                        <td>Circle</td>
                        <td>Good</td>
                        <td>4</td>
                        <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>Table 2</td>
                        <td>Circle</td>
                        <td>Good</td>
                        <td>4</td>
                        <td><a href="#"><i class="icon ri-pencil-line"></i> Edit</a><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="my-1rem">
                  <h5>Add Table</h5>
                  <div class="grid has-gap-sm">
                    <div class="column w-12">
                      <input class="input" placeholder="Table Name" />
                    </div>
                    <div class="column w-12">
                      <input type="number" class="input" placeholder="Capacity" />
                    </div>
                    <div class="column w-12">
                      <select class="choices">
                        <option>Table Shape</option>
                        <option>Xyz</option>
                      </select>
                    </div>
                    <div class="column w-12">
                      <select class="choices">
                        <option>Table Type</option>
                        <option>Xyz</option>
                      </select>
                    </div>
                    <div class="column w-24">
                      <button class="btn is-block is-sld is-primary">Add</button>
                    </div>
                    </24>
                  </div>

              </fieldset>

              <fieldset class="my-1rem bg-white is-round shadow p-4 w-24">
                <div class="flex justify-between">
                  <div>
                    <h5>Features</h5>
                    <div>What features and amenities does this restaurant have?</div>
                  </div>
                </div>

                <div class="grid">
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Reservations</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Delivery</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Takeout</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Seating</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Outdoor Seating</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Free Wifi</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Television</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Parking Available</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Private Dining</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Cash Only</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Accepts Credit Cards</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Digital Payments</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Serves Alcohol</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Full Bar</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Wine and Beer</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Buffet</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Highchairs Available</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Wheelchair Accessible</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Dog Friendly</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Playgrounds</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">BYOB</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Beach</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Drive Thru</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Jazz Bar</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Waterfront</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Live Music</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Table Service</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Non-smoking restaurants</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Family style</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Sports bars</span></label>
                </div>
              </fieldset>

            </div>
            <div class="column w-12">
              <fieldset class="my-1rem bg-white is-round shadow p-4 w-24">
                <div class="flex justify-between">
                  <div>
                    <h5>Open hours</h5>
                    <div>Restaurant is open hours</div>
                  </div>
                </div>

                <div class="grid align-middle OPENHOURS">
                  <div class="column w-8">Monday</div>
                  <input class="checkbox w-1" type="checkbox" />
                  <span class="w-3">Closed</span>
                  <div class="column w-6">
                    <select class="input choices">
                      <option>12:15 am</option>
                      <option>12:30 am</option>
                      <option>12:45 am</option>
                      <option>01:00 am</option>
                      <option>01:15 am</option>
                      <option>01:30 am</option>
                      <option>01:45 am</option>
                      <option>02:00 am</option>
                      <option>02:15 am</option>
                      <option>02:30 am</option>
                      <option>02:45 am</option>
                      <option>03:00 am</option>
                      <option>03:15 am</option>
                      <option>03:30 am</option>
                      <option>03:45 am</option>
                      <option>04:00 am</option>
                      <option>04:15 am</option>
                      <option>04:30 am</option>
                      <option>04:45 am</option>
                      <option>05:00 am</option>
                      <option>05:15 am</option>
                      <option>05:30 am</option>
                      <option>05:45 am</option>
                      <option>06:00 am</option>
                      <option>06:15 am</option>
                      <option>06:30 am</option>
                      <option>06:45 am</option>
                      <option>07:00 am</option>
                      <option>07:15 am</option>
                      <option>07:30 am</option>
                      <option>07:45 am</option>
                      <option>08:00 am</option>
                      <option>08:15 am</option>
                      <option>08:30 am</option>
                      <option>08:45 am</option>
                      <option>09:00 am</option>
                      <option>09:15 am</option>
                      <option>09:30 am</option>
                      <option>09:45 am</option>
                      <option>10:00 am</option>
                      <option>10:15 am</option>
                      <option>10:30 am</option>
                      <option>10:45 am</option>
                      <option>11:00 am</option>
                      <option>11:15 am</option>
                      <option>11:30 am</option>
                      <option>11:45 am</option>
                      <option>12:00 pm</option>
                      <option>12:15 pm</option>
                      <option>12:30 pm</option>
                      <option>12:45 pm</option>
                      <option>01:00 pm</option>
                      <option>01:15 pm</option>
                      <option>01:30 pm</option>
                      <option>01:45 pm</option>
                      <option>02:00 pm</option>
                      <option>02:15 pm</option>
                      <option>02:30 pm</option>
                      <option>02:45 pm</option>
                      <option>03:00 pm</option>
                      <option>03:15 pm</option>
                      <option>03:30 pm</option>
                      <option>03:45 pm</option>
                      <option>04:00 pm</option>
                      <option>04:15 pm</option>
                      <option>04:30 pm</option>
                      <option>04:45 pm</option>
                      <option>05:00 pm</option>
                      <option>05:15 pm</option>
                      <option>05:30 pm</option>
                      <option>05:45 pm</option>
                      <option>06:00 pm</option>
                      <option>06:15 pm</option>
                      <option>06:30 pm</option>
                      <option>06:45 pm</option>
                      <option>07:00 pm</option>
                      <option>07:15 pm</option>
                      <option>07:30 pm</option>
                      <option>07:45 pm</option>
                      <option>08:00 pm</option>
                      <option>08:15 pm</option>
                      <option>08:30 pm</option>
                      <option>08:45 pm</option>
                      <option>09:00 pm</option>
                      <option>09:15 pm</option>
                      <option>09:30 pm</option>
                      <option>09:45 pm</option>
                      <option>10:00 pm</option>
                      <option>10:15 pm</option>
                      <option>10:30 pm</option>
                      <option>10:45 pm</option>
                      <option>11:00 pm</option>
                      <option>11:15 pm</option>
                      <option>11:30 pm</option>
                      <option>11:45 pm</option>
                      <option>12:00 am</option>
                    </select>
                  </div>
                  <div class="column w-6">
                    <select class="input choices">
                      <option>12:15 am</option>
                      <option>12:30 am</option>
                      <option>12:45 am</option>
                      <option>01:00 am</option>
                      <option>01:15 am</option>
                      <option>01:30 am</option>
                      <option>01:45 am</option>
                      <option>02:00 am</option>
                      <option>02:15 am</option>
                      <option>02:30 am</option>
                      <option>02:45 am</option>
                      <option>03:00 am</option>
                      <option>03:15 am</option>
                      <option>03:30 am</option>
                      <option>03:45 am</option>
                      <option>04:00 am</option>
                      <option>04:15 am</option>
                      <option>04:30 am</option>
                      <option>04:45 am</option>
                      <option>05:00 am</option>
                      <option>05:15 am</option>
                      <option>05:30 am</option>
                      <option>05:45 am</option>
                      <option>06:00 am</option>
                      <option>06:15 am</option>
                      <option>06:30 am</option>
                      <option>06:45 am</option>
                      <option>07:00 am</option>
                      <option>07:15 am</option>
                      <option>07:30 am</option>
                      <option>07:45 am</option>
                      <option>08:00 am</option>
                      <option>08:15 am</option>
                      <option>08:30 am</option>
                      <option>08:45 am</option>
                      <option>09:00 am</option>
                      <option>09:15 am</option>
                      <option>09:30 am</option>
                      <option>09:45 am</option>
                      <option>10:00 am</option>
                      <option>10:15 am</option>
                      <option>10:30 am</option>
                      <option>10:45 am</option>
                      <option>11:00 am</option>
                      <option>11:15 am</option>
                      <option>11:30 am</option>
                      <option>11:45 am</option>
                      <option>12:00 pm</option>
                      <option>12:15 pm</option>
                      <option>12:30 pm</option>
                      <option>12:45 pm</option>
                      <option>01:00 pm</option>
                      <option>01:15 pm</option>
                      <option>01:30 pm</option>
                      <option>01:45 pm</option>
                      <option>02:00 pm</option>
                      <option>02:15 pm</option>
                      <option>02:30 pm</option>
                      <option>02:45 pm</option>
                      <option>03:00 pm</option>
                      <option>03:15 pm</option>
                      <option>03:30 pm</option>
                      <option>03:45 pm</option>
                      <option>04:00 pm</option>
                      <option>04:15 pm</option>
                      <option>04:30 pm</option>
                      <option>04:45 pm</option>
                      <option>05:00 pm</option>
                      <option>05:15 pm</option>
                      <option>05:30 pm</option>
                      <option>05:45 pm</option>
                      <option>06:00 pm</option>
                      <option>06:15 pm</option>
                      <option>06:30 pm</option>
                      <option>06:45 pm</option>
                      <option>07:00 pm</option>
                      <option>07:15 pm</option>
                      <option>07:30 pm</option>
                      <option>07:45 pm</option>
                      <option>08:00 pm</option>
                      <option>08:15 pm</option>
                      <option>08:30 pm</option>
                      <option>08:45 pm</option>
                      <option>09:00 pm</option>
                      <option>09:15 pm</option>
                      <option>09:30 pm</option>
                      <option>09:45 pm</option>
                      <option>10:00 pm</option>
                      <option>10:15 pm</option>
                      <option>10:30 pm</option>
                      <option>10:45 pm</option>
                      <option>11:00 pm</option>
                      <option>11:15 pm</option>
                      <option>11:30 pm</option>
                      <option>11:45 pm</option>
                      <option>12:00 am</option>
                    </select>
                  </div>
                </div>

                <div class="grid align-middle OPENHOURS">
                  <div class="column w-8">Tuesday</div>
                  <input class="checkbox w-1" type="checkbox" />
                  <span class="w-3">Closed</span>
                  <div class="column w-6">
                    <select class="input choices">
                      <option>12:15 am</option>
                      <option>12:30 am</option>
                      <option>12:45 am</option>
                      <option>01:00 am</option>
                      <option>01:15 am</option>
                      <option>01:30 am</option>
                      <option>01:45 am</option>
                      <option>02:00 am</option>
                      <option>02:15 am</option>
                      <option>02:30 am</option>
                      <option>02:45 am</option>
                      <option>03:00 am</option>
                      <option>03:15 am</option>
                      <option>03:30 am</option>
                      <option>03:45 am</option>
                      <option>04:00 am</option>
                      <option>04:15 am</option>
                      <option>04:30 am</option>
                      <option>04:45 am</option>
                      <option>05:00 am</option>
                      <option>05:15 am</option>
                      <option>05:30 am</option>
                      <option>05:45 am</option>
                      <option>06:00 am</option>
                      <option>06:15 am</option>
                      <option>06:30 am</option>
                      <option>06:45 am</option>
                      <option>07:00 am</option>
                      <option>07:15 am</option>
                      <option>07:30 am</option>
                      <option>07:45 am</option>
                      <option>08:00 am</option>
                      <option>08:15 am</option>
                      <option>08:30 am</option>
                      <option>08:45 am</option>
                      <option>09:00 am</option>
                      <option>09:15 am</option>
                      <option>09:30 am</option>
                      <option>09:45 am</option>
                      <option>10:00 am</option>
                      <option>10:15 am</option>
                      <option>10:30 am</option>
                      <option>10:45 am</option>
                      <option>11:00 am</option>
                      <option>11:15 am</option>
                      <option>11:30 am</option>
                      <option>11:45 am</option>
                      <option>12:00 pm</option>
                      <option>12:15 pm</option>
                      <option>12:30 pm</option>
                      <option>12:45 pm</option>
                      <option>01:00 pm</option>
                      <option>01:15 pm</option>
                      <option>01:30 pm</option>
                      <option>01:45 pm</option>
                      <option>02:00 pm</option>
                      <option>02:15 pm</option>
                      <option>02:30 pm</option>
                      <option>02:45 pm</option>
                      <option>03:00 pm</option>
                      <option>03:15 pm</option>
                      <option>03:30 pm</option>
                      <option>03:45 pm</option>
                      <option>04:00 pm</option>
                      <option>04:15 pm</option>
                      <option>04:30 pm</option>
                      <option>04:45 pm</option>
                      <option>05:00 pm</option>
                      <option>05:15 pm</option>
                      <option>05:30 pm</option>
                      <option>05:45 pm</option>
                      <option>06:00 pm</option>
                      <option>06:15 pm</option>
                      <option>06:30 pm</option>
                      <option>06:45 pm</option>
                      <option>07:00 pm</option>
                      <option>07:15 pm</option>
                      <option>07:30 pm</option>
                      <option>07:45 pm</option>
                      <option>08:00 pm</option>
                      <option>08:15 pm</option>
                      <option>08:30 pm</option>
                      <option>08:45 pm</option>
                      <option>09:00 pm</option>
                      <option>09:15 pm</option>
                      <option>09:30 pm</option>
                      <option>09:45 pm</option>
                      <option>10:00 pm</option>
                      <option>10:15 pm</option>
                      <option>10:30 pm</option>
                      <option>10:45 pm</option>
                      <option>11:00 pm</option>
                      <option>11:15 pm</option>
                      <option>11:30 pm</option>
                      <option>11:45 pm</option>
                      <option>12:00 am</option>
                    </select>
                  </div>
                  <div class="column w-6">
                    <select class="input choices">
                      <option>12:15 am</option>
                      <option>12:30 am</option>
                      <option>12:45 am</option>
                      <option>01:00 am</option>
                      <option>01:15 am</option>
                      <option>01:30 am</option>
                      <option>01:45 am</option>
                      <option>02:00 am</option>
                      <option>02:15 am</option>
                      <option>02:30 am</option>
                      <option>02:45 am</option>
                      <option>03:00 am</option>
                      <option>03:15 am</option>
                      <option>03:30 am</option>
                      <option>03:45 am</option>
                      <option>04:00 am</option>
                      <option>04:15 am</option>
                      <option>04:30 am</option>
                      <option>04:45 am</option>
                      <option>05:00 am</option>
                      <option>05:15 am</option>
                      <option>05:30 am</option>
                      <option>05:45 am</option>
                      <option>06:00 am</option>
                      <option>06:15 am</option>
                      <option>06:30 am</option>
                      <option>06:45 am</option>
                      <option>07:00 am</option>
                      <option>07:15 am</option>
                      <option>07:30 am</option>
                      <option>07:45 am</option>
                      <option>08:00 am</option>
                      <option>08:15 am</option>
                      <option>08:30 am</option>
                      <option>08:45 am</option>
                      <option>09:00 am</option>
                      <option>09:15 am</option>
                      <option>09:30 am</option>
                      <option>09:45 am</option>
                      <option>10:00 am</option>
                      <option>10:15 am</option>
                      <option>10:30 am</option>
                      <option>10:45 am</option>
                      <option>11:00 am</option>
                      <option>11:15 am</option>
                      <option>11:30 am</option>
                      <option>11:45 am</option>
                      <option>12:00 pm</option>
                      <option>12:15 pm</option>
                      <option>12:30 pm</option>
                      <option>12:45 pm</option>
                      <option>01:00 pm</option>
                      <option>01:15 pm</option>
                      <option>01:30 pm</option>
                      <option>01:45 pm</option>
                      <option>02:00 pm</option>
                      <option>02:15 pm</option>
                      <option>02:30 pm</option>
                      <option>02:45 pm</option>
                      <option>03:00 pm</option>
                      <option>03:15 pm</option>
                      <option>03:30 pm</option>
                      <option>03:45 pm</option>
                      <option>04:00 pm</option>
                      <option>04:15 pm</option>
                      <option>04:30 pm</option>
                      <option>04:45 pm</option>
                      <option>05:00 pm</option>
                      <option>05:15 pm</option>
                      <option>05:30 pm</option>
                      <option>05:45 pm</option>
                      <option>06:00 pm</option>
                      <option>06:15 pm</option>
                      <option>06:30 pm</option>
                      <option>06:45 pm</option>
                      <option>07:00 pm</option>
                      <option>07:15 pm</option>
                      <option>07:30 pm</option>
                      <option>07:45 pm</option>
                      <option>08:00 pm</option>
                      <option>08:15 pm</option>
                      <option>08:30 pm</option>
                      <option>08:45 pm</option>
                      <option>09:00 pm</option>
                      <option>09:15 pm</option>
                      <option>09:30 pm</option>
                      <option>09:45 pm</option>
                      <option>10:00 pm</option>
                      <option>10:15 pm</option>
                      <option>10:30 pm</option>
                      <option>10:45 pm</option>
                      <option>11:00 pm</option>
                      <option>11:15 pm</option>
                      <option>11:30 pm</option>
                      <option>11:45 pm</option>
                      <option>12:00 am</option>
                    </select>
                  </div>
                </div>

                <div class="grid align-middle OPENHOURS">
                  <div class="column w-8">Wednessday</div>
                  <input class="checkbox w-1" type="checkbox" />
                  <span class="w-3">Closed</span>
                  <div class="column w-6">
                    <select class="input choices">
                      <option>12:15 am</option>
                      <option>12:30 am</option>
                      <option>12:45 am</option>
                      <option>01:00 am</option>
                      <option>01:15 am</option>
                      <option>01:30 am</option>
                      <option>01:45 am</option>
                      <option>02:00 am</option>
                      <option>02:15 am</option>
                      <option>02:30 am</option>
                      <option>02:45 am</option>
                      <option>03:00 am</option>
                      <option>03:15 am</option>
                      <option>03:30 am</option>
                      <option>03:45 am</option>
                      <option>04:00 am</option>
                      <option>04:15 am</option>
                      <option>04:30 am</option>
                      <option>04:45 am</option>
                      <option>05:00 am</option>
                      <option>05:15 am</option>
                      <option>05:30 am</option>
                      <option>05:45 am</option>
                      <option>06:00 am</option>
                      <option>06:15 am</option>
                      <option>06:30 am</option>
                      <option>06:45 am</option>
                      <option>07:00 am</option>
                      <option>07:15 am</option>
                      <option>07:30 am</option>
                      <option>07:45 am</option>
                      <option>08:00 am</option>
                      <option>08:15 am</option>
                      <option>08:30 am</option>
                      <option>08:45 am</option>
                      <option>09:00 am</option>
                      <option>09:15 am</option>
                      <option>09:30 am</option>
                      <option>09:45 am</option>
                      <option>10:00 am</option>
                      <option>10:15 am</option>
                      <option>10:30 am</option>
                      <option>10:45 am</option>
                      <option>11:00 am</option>
                      <option>11:15 am</option>
                      <option>11:30 am</option>
                      <option>11:45 am</option>
                      <option>12:00 pm</option>
                      <option>12:15 pm</option>
                      <option>12:30 pm</option>
                      <option>12:45 pm</option>
                      <option>01:00 pm</option>
                      <option>01:15 pm</option>
                      <option>01:30 pm</option>
                      <option>01:45 pm</option>
                      <option>02:00 pm</option>
                      <option>02:15 pm</option>
                      <option>02:30 pm</option>
                      <option>02:45 pm</option>
                      <option>03:00 pm</option>
                      <option>03:15 pm</option>
                      <option>03:30 pm</option>
                      <option>03:45 pm</option>
                      <option>04:00 pm</option>
                      <option>04:15 pm</option>
                      <option>04:30 pm</option>
                      <option>04:45 pm</option>
                      <option>05:00 pm</option>
                      <option>05:15 pm</option>
                      <option>05:30 pm</option>
                      <option>05:45 pm</option>
                      <option>06:00 pm</option>
                      <option>06:15 pm</option>
                      <option>06:30 pm</option>
                      <option>06:45 pm</option>
                      <option>07:00 pm</option>
                      <option>07:15 pm</option>
                      <option>07:30 pm</option>
                      <option>07:45 pm</option>
                      <option>08:00 pm</option>
                      <option>08:15 pm</option>
                      <option>08:30 pm</option>
                      <option>08:45 pm</option>
                      <option>09:00 pm</option>
                      <option>09:15 pm</option>
                      <option>09:30 pm</option>
                      <option>09:45 pm</option>
                      <option>10:00 pm</option>
                      <option>10:15 pm</option>
                      <option>10:30 pm</option>
                      <option>10:45 pm</option>
                      <option>11:00 pm</option>
                      <option>11:15 pm</option>
                      <option>11:30 pm</option>
                      <option>11:45 pm</option>
                      <option>12:00 am</option>
                    </select>
                  </div>
                  <div class="column w-6">
                    <select class="input choices">
                      <option>12:15 am</option>
                      <option>12:30 am</option>
                      <option>12:45 am</option>
                      <option>01:00 am</option>
                      <option>01:15 am</option>
                      <option>01:30 am</option>
                      <option>01:45 am</option>
                      <option>02:00 am</option>
                      <option>02:15 am</option>
                      <option>02:30 am</option>
                      <option>02:45 am</option>
                      <option>03:00 am</option>
                      <option>03:15 am</option>
                      <option>03:30 am</option>
                      <option>03:45 am</option>
                      <option>04:00 am</option>
                      <option>04:15 am</option>
                      <option>04:30 am</option>
                      <option>04:45 am</option>
                      <option>05:00 am</option>
                      <option>05:15 am</option>
                      <option>05:30 am</option>
                      <option>05:45 am</option>
                      <option>06:00 am</option>
                      <option>06:15 am</option>
                      <option>06:30 am</option>
                      <option>06:45 am</option>
                      <option>07:00 am</option>
                      <option>07:15 am</option>
                      <option>07:30 am</option>
                      <option>07:45 am</option>
                      <option>08:00 am</option>
                      <option>08:15 am</option>
                      <option>08:30 am</option>
                      <option>08:45 am</option>
                      <option>09:00 am</option>
                      <option>09:15 am</option>
                      <option>09:30 am</option>
                      <option>09:45 am</option>
                      <option>10:00 am</option>
                      <option>10:15 am</option>
                      <option>10:30 am</option>
                      <option>10:45 am</option>
                      <option>11:00 am</option>
                      <option>11:15 am</option>
                      <option>11:30 am</option>
                      <option>11:45 am</option>
                      <option>12:00 pm</option>
                      <option>12:15 pm</option>
                      <option>12:30 pm</option>
                      <option>12:45 pm</option>
                      <option>01:00 pm</option>
                      <option>01:15 pm</option>
                      <option>01:30 pm</option>
                      <option>01:45 pm</option>
                      <option>02:00 pm</option>
                      <option>02:15 pm</option>
                      <option>02:30 pm</option>
                      <option>02:45 pm</option>
                      <option>03:00 pm</option>
                      <option>03:15 pm</option>
                      <option>03:30 pm</option>
                      <option>03:45 pm</option>
                      <option>04:00 pm</option>
                      <option>04:15 pm</option>
                      <option>04:30 pm</option>
                      <option>04:45 pm</option>
                      <option>05:00 pm</option>
                      <option>05:15 pm</option>
                      <option>05:30 pm</option>
                      <option>05:45 pm</option>
                      <option>06:00 pm</option>
                      <option>06:15 pm</option>
                      <option>06:30 pm</option>
                      <option>06:45 pm</option>
                      <option>07:00 pm</option>
                      <option>07:15 pm</option>
                      <option>07:30 pm</option>
                      <option>07:45 pm</option>
                      <option>08:00 pm</option>
                      <option>08:15 pm</option>
                      <option>08:30 pm</option>
                      <option>08:45 pm</option>
                      <option>09:00 pm</option>
                      <option>09:15 pm</option>
                      <option>09:30 pm</option>
                      <option>09:45 pm</option>
                      <option>10:00 pm</option>
                      <option>10:15 pm</option>
                      <option>10:30 pm</option>
                      <option>10:45 pm</option>
                      <option>11:00 pm</option>
                      <option>11:15 pm</option>
                      <option>11:30 pm</option>
                      <option>11:45 pm</option>
                      <option>12:00 am</option>
                    </select>
                  </div>
                </div>

                <div class="grid align-middle OPENHOURS">
                  <div class="column w-8">Thursday</div>
                  <input class="checkbox w-1" type="checkbox" />
                  <span class="w-3">Closed</span>
                  <div class="column w-6">
                    <select class="input choices">
                      <option>12:15 am</option>
                      <option>12:30 am</option>
                      <option>12:45 am</option>
                      <option>01:00 am</option>
                      <option>01:15 am</option>
                      <option>01:30 am</option>
                      <option>01:45 am</option>
                      <option>02:00 am</option>
                      <option>02:15 am</option>
                      <option>02:30 am</option>
                      <option>02:45 am</option>
                      <option>03:00 am</option>
                      <option>03:15 am</option>
                      <option>03:30 am</option>
                      <option>03:45 am</option>
                      <option>04:00 am</option>
                      <option>04:15 am</option>
                      <option>04:30 am</option>
                      <option>04:45 am</option>
                      <option>05:00 am</option>
                      <option>05:15 am</option>
                      <option>05:30 am</option>
                      <option>05:45 am</option>
                      <option>06:00 am</option>
                      <option>06:15 am</option>
                      <option>06:30 am</option>
                      <option>06:45 am</option>
                      <option>07:00 am</option>
                      <option>07:15 am</option>
                      <option>07:30 am</option>
                      <option>07:45 am</option>
                      <option>08:00 am</option>
                      <option>08:15 am</option>
                      <option>08:30 am</option>
                      <option>08:45 am</option>
                      <option>09:00 am</option>
                      <option>09:15 am</option>
                      <option>09:30 am</option>
                      <option>09:45 am</option>
                      <option>10:00 am</option>
                      <option>10:15 am</option>
                      <option>10:30 am</option>
                      <option>10:45 am</option>
                      <option>11:00 am</option>
                      <option>11:15 am</option>
                      <option>11:30 am</option>
                      <option>11:45 am</option>
                      <option>12:00 pm</option>
                      <option>12:15 pm</option>
                      <option>12:30 pm</option>
                      <option>12:45 pm</option>
                      <option>01:00 pm</option>
                      <option>01:15 pm</option>
                      <option>01:30 pm</option>
                      <option>01:45 pm</option>
                      <option>02:00 pm</option>
                      <option>02:15 pm</option>
                      <option>02:30 pm</option>
                      <option>02:45 pm</option>
                      <option>03:00 pm</option>
                      <option>03:15 pm</option>
                      <option>03:30 pm</option>
                      <option>03:45 pm</option>
                      <option>04:00 pm</option>
                      <option>04:15 pm</option>
                      <option>04:30 pm</option>
                      <option>04:45 pm</option>
                      <option>05:00 pm</option>
                      <option>05:15 pm</option>
                      <option>05:30 pm</option>
                      <option>05:45 pm</option>
                      <option>06:00 pm</option>
                      <option>06:15 pm</option>
                      <option>06:30 pm</option>
                      <option>06:45 pm</option>
                      <option>07:00 pm</option>
                      <option>07:15 pm</option>
                      <option>07:30 pm</option>
                      <option>07:45 pm</option>
                      <option>08:00 pm</option>
                      <option>08:15 pm</option>
                      <option>08:30 pm</option>
                      <option>08:45 pm</option>
                      <option>09:00 pm</option>
                      <option>09:15 pm</option>
                      <option>09:30 pm</option>
                      <option>09:45 pm</option>
                      <option>10:00 pm</option>
                      <option>10:15 pm</option>
                      <option>10:30 pm</option>
                      <option>10:45 pm</option>
                      <option>11:00 pm</option>
                      <option>11:15 pm</option>
                      <option>11:30 pm</option>
                      <option>11:45 pm</option>
                      <option>12:00 am</option>
                    </select>
                  </div>
                  <div class="column w-6">
                    <select class="input choices">
                      <option>12:15 am</option>
                      <option>12:30 am</option>
                      <option>12:45 am</option>
                      <option>01:00 am</option>
                      <option>01:15 am</option>
                      <option>01:30 am</option>
                      <option>01:45 am</option>
                      <option>02:00 am</option>
                      <option>02:15 am</option>
                      <option>02:30 am</option>
                      <option>02:45 am</option>
                      <option>03:00 am</option>
                      <option>03:15 am</option>
                      <option>03:30 am</option>
                      <option>03:45 am</option>
                      <option>04:00 am</option>
                      <option>04:15 am</option>
                      <option>04:30 am</option>
                      <option>04:45 am</option>
                      <option>05:00 am</option>
                      <option>05:15 am</option>
                      <option>05:30 am</option>
                      <option>05:45 am</option>
                      <option>06:00 am</option>
                      <option>06:15 am</option>
                      <option>06:30 am</option>
                      <option>06:45 am</option>
                      <option>07:00 am</option>
                      <option>07:15 am</option>
                      <option>07:30 am</option>
                      <option>07:45 am</option>
                      <option>08:00 am</option>
                      <option>08:15 am</option>
                      <option>08:30 am</option>
                      <option>08:45 am</option>
                      <option>09:00 am</option>
                      <option>09:15 am</option>
                      <option>09:30 am</option>
                      <option>09:45 am</option>
                      <option>10:00 am</option>
                      <option>10:15 am</option>
                      <option>10:30 am</option>
                      <option>10:45 am</option>
                      <option>11:00 am</option>
                      <option>11:15 am</option>
                      <option>11:30 am</option>
                      <option>11:45 am</option>
                      <option>12:00 pm</option>
                      <option>12:15 pm</option>
                      <option>12:30 pm</option>
                      <option>12:45 pm</option>
                      <option>01:00 pm</option>
                      <option>01:15 pm</option>
                      <option>01:30 pm</option>
                      <option>01:45 pm</option>
                      <option>02:00 pm</option>
                      <option>02:15 pm</option>
                      <option>02:30 pm</option>
                      <option>02:45 pm</option>
                      <option>03:00 pm</option>
                      <option>03:15 pm</option>
                      <option>03:30 pm</option>
                      <option>03:45 pm</option>
                      <option>04:00 pm</option>
                      <option>04:15 pm</option>
                      <option>04:30 pm</option>
                      <option>04:45 pm</option>
                      <option>05:00 pm</option>
                      <option>05:15 pm</option>
                      <option>05:30 pm</option>
                      <option>05:45 pm</option>
                      <option>06:00 pm</option>
                      <option>06:15 pm</option>
                      <option>06:30 pm</option>
                      <option>06:45 pm</option>
                      <option>07:00 pm</option>
                      <option>07:15 pm</option>
                      <option>07:30 pm</option>
                      <option>07:45 pm</option>
                      <option>08:00 pm</option>
                      <option>08:15 pm</option>
                      <option>08:30 pm</option>
                      <option>08:45 pm</option>
                      <option>09:00 pm</option>
                      <option>09:15 pm</option>
                      <option>09:30 pm</option>
                      <option>09:45 pm</option>
                      <option>10:00 pm</option>
                      <option>10:15 pm</option>
                      <option>10:30 pm</option>
                      <option>10:45 pm</option>
                      <option>11:00 pm</option>
                      <option>11:15 pm</option>
                      <option>11:30 pm</option>
                      <option>11:45 pm</option>
                      <option>12:00 am</option>
                    </select>
                  </div>
                </div>

                <div class="grid align-middle OPENHOURS">
                  <div class="column w-8">Friday</div>
                  <input class="checkbox w-1" type="checkbox" />
                  <span class="w-3">Closed</span>
                  <div class="column w-6">
                    <select class="input choices">
                      <option>12:15 am</option>
                      <option>12:30 am</option>
                      <option>12:45 am</option>
                      <option>01:00 am</option>
                      <option>01:15 am</option>
                      <option>01:30 am</option>
                      <option>01:45 am</option>
                      <option>02:00 am</option>
                      <option>02:15 am</option>
                      <option>02:30 am</option>
                      <option>02:45 am</option>
                      <option>03:00 am</option>
                      <option>03:15 am</option>
                      <option>03:30 am</option>
                      <option>03:45 am</option>
                      <option>04:00 am</option>
                      <option>04:15 am</option>
                      <option>04:30 am</option>
                      <option>04:45 am</option>
                      <option>05:00 am</option>
                      <option>05:15 am</option>
                      <option>05:30 am</option>
                      <option>05:45 am</option>
                      <option>06:00 am</option>
                      <option>06:15 am</option>
                      <option>06:30 am</option>
                      <option>06:45 am</option>
                      <option>07:00 am</option>
                      <option>07:15 am</option>
                      <option>07:30 am</option>
                      <option>07:45 am</option>
                      <option>08:00 am</option>
                      <option>08:15 am</option>
                      <option>08:30 am</option>
                      <option>08:45 am</option>
                      <option>09:00 am</option>
                      <option>09:15 am</option>
                      <option>09:30 am</option>
                      <option>09:45 am</option>
                      <option>10:00 am</option>
                      <option>10:15 am</option>
                      <option>10:30 am</option>
                      <option>10:45 am</option>
                      <option>11:00 am</option>
                      <option>11:15 am</option>
                      <option>11:30 am</option>
                      <option>11:45 am</option>
                      <option>12:00 pm</option>
                      <option>12:15 pm</option>
                      <option>12:30 pm</option>
                      <option>12:45 pm</option>
                      <option>01:00 pm</option>
                      <option>01:15 pm</option>
                      <option>01:30 pm</option>
                      <option>01:45 pm</option>
                      <option>02:00 pm</option>
                      <option>02:15 pm</option>
                      <option>02:30 pm</option>
                      <option>02:45 pm</option>
                      <option>03:00 pm</option>
                      <option>03:15 pm</option>
                      <option>03:30 pm</option>
                      <option>03:45 pm</option>
                      <option>04:00 pm</option>
                      <option>04:15 pm</option>
                      <option>04:30 pm</option>
                      <option>04:45 pm</option>
                      <option>05:00 pm</option>
                      <option>05:15 pm</option>
                      <option>05:30 pm</option>
                      <option>05:45 pm</option>
                      <option>06:00 pm</option>
                      <option>06:15 pm</option>
                      <option>06:30 pm</option>
                      <option>06:45 pm</option>
                      <option>07:00 pm</option>
                      <option>07:15 pm</option>
                      <option>07:30 pm</option>
                      <option>07:45 pm</option>
                      <option>08:00 pm</option>
                      <option>08:15 pm</option>
                      <option>08:30 pm</option>
                      <option>08:45 pm</option>
                      <option>09:00 pm</option>
                      <option>09:15 pm</option>
                      <option>09:30 pm</option>
                      <option>09:45 pm</option>
                      <option>10:00 pm</option>
                      <option>10:15 pm</option>
                      <option>10:30 pm</option>
                      <option>10:45 pm</option>
                      <option>11:00 pm</option>
                      <option>11:15 pm</option>
                      <option>11:30 pm</option>
                      <option>11:45 pm</option>
                      <option>12:00 am</option>
                    </select>
                  </div>
                  <div class="column w-6">
                    <select class="input choices">
                      <option>12:15 am</option>
                      <option>12:30 am</option>
                      <option>12:45 am</option>
                      <option>01:00 am</option>
                      <option>01:15 am</option>
                      <option>01:30 am</option>
                      <option>01:45 am</option>
                      <option>02:00 am</option>
                      <option>02:15 am</option>
                      <option>02:30 am</option>
                      <option>02:45 am</option>
                      <option>03:00 am</option>
                      <option>03:15 am</option>
                      <option>03:30 am</option>
                      <option>03:45 am</option>
                      <option>04:00 am</option>
                      <option>04:15 am</option>
                      <option>04:30 am</option>
                      <option>04:45 am</option>
                      <option>05:00 am</option>
                      <option>05:15 am</option>
                      <option>05:30 am</option>
                      <option>05:45 am</option>
                      <option>06:00 am</option>
                      <option>06:15 am</option>
                      <option>06:30 am</option>
                      <option>06:45 am</option>
                      <option>07:00 am</option>
                      <option>07:15 am</option>
                      <option>07:30 am</option>
                      <option>07:45 am</option>
                      <option>08:00 am</option>
                      <option>08:15 am</option>
                      <option>08:30 am</option>
                      <option>08:45 am</option>
                      <option>09:00 am</option>
                      <option>09:15 am</option>
                      <option>09:30 am</option>
                      <option>09:45 am</option>
                      <option>10:00 am</option>
                      <option>10:15 am</option>
                      <option>10:30 am</option>
                      <option>10:45 am</option>
                      <option>11:00 am</option>
                      <option>11:15 am</option>
                      <option>11:30 am</option>
                      <option>11:45 am</option>
                      <option>12:00 pm</option>
                      <option>12:15 pm</option>
                      <option>12:30 pm</option>
                      <option>12:45 pm</option>
                      <option>01:00 pm</option>
                      <option>01:15 pm</option>
                      <option>01:30 pm</option>
                      <option>01:45 pm</option>
                      <option>02:00 pm</option>
                      <option>02:15 pm</option>
                      <option>02:30 pm</option>
                      <option>02:45 pm</option>
                      <option>03:00 pm</option>
                      <option>03:15 pm</option>
                      <option>03:30 pm</option>
                      <option>03:45 pm</option>
                      <option>04:00 pm</option>
                      <option>04:15 pm</option>
                      <option>04:30 pm</option>
                      <option>04:45 pm</option>
                      <option>05:00 pm</option>
                      <option>05:15 pm</option>
                      <option>05:30 pm</option>
                      <option>05:45 pm</option>
                      <option>06:00 pm</option>
                      <option>06:15 pm</option>
                      <option>06:30 pm</option>
                      <option>06:45 pm</option>
                      <option>07:00 pm</option>
                      <option>07:15 pm</option>
                      <option>07:30 pm</option>
                      <option>07:45 pm</option>
                      <option>08:00 pm</option>
                      <option>08:15 pm</option>
                      <option>08:30 pm</option>
                      <option>08:45 pm</option>
                      <option>09:00 pm</option>
                      <option>09:15 pm</option>
                      <option>09:30 pm</option>
                      <option>09:45 pm</option>
                      <option>10:00 pm</option>
                      <option>10:15 pm</option>
                      <option>10:30 pm</option>
                      <option>10:45 pm</option>
                      <option>11:00 pm</option>
                      <option>11:15 pm</option>
                      <option>11:30 pm</option>
                      <option>11:45 pm</option>
                      <option>12:00 am</option>
                    </select>
                  </div>
                </div>

                <div class="grid align-middle OPENHOURS">
                  <div class="column w-8">Saturday</div>
                  <input class="checkbox w-1" type="checkbox" />
                  <span class="w-3">Closed</span>
                  <div class="column w-6">
                    <select class="input choices">
                      <option>12:15 am</option>
                      <option>12:30 am</option>
                      <option>12:45 am</option>
                      <option>01:00 am</option>
                      <option>01:15 am</option>
                      <option>01:30 am</option>
                      <option>01:45 am</option>
                      <option>02:00 am</option>
                      <option>02:15 am</option>
                      <option>02:30 am</option>
                      <option>02:45 am</option>
                      <option>03:00 am</option>
                      <option>03:15 am</option>
                      <option>03:30 am</option>
                      <option>03:45 am</option>
                      <option>04:00 am</option>
                      <option>04:15 am</option>
                      <option>04:30 am</option>
                      <option>04:45 am</option>
                      <option>05:00 am</option>
                      <option>05:15 am</option>
                      <option>05:30 am</option>
                      <option>05:45 am</option>
                      <option>06:00 am</option>
                      <option>06:15 am</option>
                      <option>06:30 am</option>
                      <option>06:45 am</option>
                      <option>07:00 am</option>
                      <option>07:15 am</option>
                      <option>07:30 am</option>
                      <option>07:45 am</option>
                      <option>08:00 am</option>
                      <option>08:15 am</option>
                      <option>08:30 am</option>
                      <option>08:45 am</option>
                      <option>09:00 am</option>
                      <option>09:15 am</option>
                      <option>09:30 am</option>
                      <option>09:45 am</option>
                      <option>10:00 am</option>
                      <option>10:15 am</option>
                      <option>10:30 am</option>
                      <option>10:45 am</option>
                      <option>11:00 am</option>
                      <option>11:15 am</option>
                      <option>11:30 am</option>
                      <option>11:45 am</option>
                      <option>12:00 pm</option>
                      <option>12:15 pm</option>
                      <option>12:30 pm</option>
                      <option>12:45 pm</option>
                      <option>01:00 pm</option>
                      <option>01:15 pm</option>
                      <option>01:30 pm</option>
                      <option>01:45 pm</option>
                      <option>02:00 pm</option>
                      <option>02:15 pm</option>
                      <option>02:30 pm</option>
                      <option>02:45 pm</option>
                      <option>03:00 pm</option>
                      <option>03:15 pm</option>
                      <option>03:30 pm</option>
                      <option>03:45 pm</option>
                      <option>04:00 pm</option>
                      <option>04:15 pm</option>
                      <option>04:30 pm</option>
                      <option>04:45 pm</option>
                      <option>05:00 pm</option>
                      <option>05:15 pm</option>
                      <option>05:30 pm</option>
                      <option>05:45 pm</option>
                      <option>06:00 pm</option>
                      <option>06:15 pm</option>
                      <option>06:30 pm</option>
                      <option>06:45 pm</option>
                      <option>07:00 pm</option>
                      <option>07:15 pm</option>
                      <option>07:30 pm</option>
                      <option>07:45 pm</option>
                      <option>08:00 pm</option>
                      <option>08:15 pm</option>
                      <option>08:30 pm</option>
                      <option>08:45 pm</option>
                      <option>09:00 pm</option>
                      <option>09:15 pm</option>
                      <option>09:30 pm</option>
                      <option>09:45 pm</option>
                      <option>10:00 pm</option>
                      <option>10:15 pm</option>
                      <option>10:30 pm</option>
                      <option>10:45 pm</option>
                      <option>11:00 pm</option>
                      <option>11:15 pm</option>
                      <option>11:30 pm</option>
                      <option>11:45 pm</option>
                      <option>12:00 am</option>
                    </select>
                  </div>
                  <div class="column w-6">
                    <select class="input choices">
                      <option>12:15 am</option>
                      <option>12:30 am</option>
                      <option>12:45 am</option>
                      <option>01:00 am</option>
                      <option>01:15 am</option>
                      <option>01:30 am</option>
                      <option>01:45 am</option>
                      <option>02:00 am</option>
                      <option>02:15 am</option>
                      <option>02:30 am</option>
                      <option>02:45 am</option>
                      <option>03:00 am</option>
                      <option>03:15 am</option>
                      <option>03:30 am</option>
                      <option>03:45 am</option>
                      <option>04:00 am</option>
                      <option>04:15 am</option>
                      <option>04:30 am</option>
                      <option>04:45 am</option>
                      <option>05:00 am</option>
                      <option>05:15 am</option>
                      <option>05:30 am</option>
                      <option>05:45 am</option>
                      <option>06:00 am</option>
                      <option>06:15 am</option>
                      <option>06:30 am</option>
                      <option>06:45 am</option>
                      <option>07:00 am</option>
                      <option>07:15 am</option>
                      <option>07:30 am</option>
                      <option>07:45 am</option>
                      <option>08:00 am</option>
                      <option>08:15 am</option>
                      <option>08:30 am</option>
                      <option>08:45 am</option>
                      <option>09:00 am</option>
                      <option>09:15 am</option>
                      <option>09:30 am</option>
                      <option>09:45 am</option>
                      <option>10:00 am</option>
                      <option>10:15 am</option>
                      <option>10:30 am</option>
                      <option>10:45 am</option>
                      <option>11:00 am</option>
                      <option>11:15 am</option>
                      <option>11:30 am</option>
                      <option>11:45 am</option>
                      <option>12:00 pm</option>
                      <option>12:15 pm</option>
                      <option>12:30 pm</option>
                      <option>12:45 pm</option>
                      <option>01:00 pm</option>
                      <option>01:15 pm</option>
                      <option>01:30 pm</option>
                      <option>01:45 pm</option>
                      <option>02:00 pm</option>
                      <option>02:15 pm</option>
                      <option>02:30 pm</option>
                      <option>02:45 pm</option>
                      <option>03:00 pm</option>
                      <option>03:15 pm</option>
                      <option>03:30 pm</option>
                      <option>03:45 pm</option>
                      <option>04:00 pm</option>
                      <option>04:15 pm</option>
                      <option>04:30 pm</option>
                      <option>04:45 pm</option>
                      <option>05:00 pm</option>
                      <option>05:15 pm</option>
                      <option>05:30 pm</option>
                      <option>05:45 pm</option>
                      <option>06:00 pm</option>
                      <option>06:15 pm</option>
                      <option>06:30 pm</option>
                      <option>06:45 pm</option>
                      <option>07:00 pm</option>
                      <option>07:15 pm</option>
                      <option>07:30 pm</option>
                      <option>07:45 pm</option>
                      <option>08:00 pm</option>
                      <option>08:15 pm</option>
                      <option>08:30 pm</option>
                      <option>08:45 pm</option>
                      <option>09:00 pm</option>
                      <option>09:15 pm</option>
                      <option>09:30 pm</option>
                      <option>09:45 pm</option>
                      <option>10:00 pm</option>
                      <option>10:15 pm</option>
                      <option>10:30 pm</option>
                      <option>10:45 pm</option>
                      <option>11:00 pm</option>
                      <option>11:15 pm</option>
                      <option>11:30 pm</option>
                      <option>11:45 pm</option>
                      <option>12:00 am</option>
                    </select>
                  </div>
                </div>
                <div class="grid align-middle OPENHOURS">
                  <div class="column w-8">Sunday</div>
                  <input class="checkbox w-1" type="checkbox" />
                  <span class="w-3">Closed</span>
                  <div class="column w-6">
                    <select class="input choices">
                      <option>12:15 am</option>
                      <option>12:30 am</option>
                      <option>12:45 am</option>
                      <option>01:00 am</option>
                      <option>01:15 am</option>
                      <option>01:30 am</option>
                      <option>01:45 am</option>
                      <option>02:00 am</option>
                      <option>02:15 am</option>
                      <option>02:30 am</option>
                      <option>02:45 am</option>
                      <option>03:00 am</option>
                      <option>03:15 am</option>
                      <option>03:30 am</option>
                      <option>03:45 am</option>
                      <option>04:00 am</option>
                      <option>04:15 am</option>
                      <option>04:30 am</option>
                      <option>04:45 am</option>
                      <option>05:00 am</option>
                      <option>05:15 am</option>
                      <option>05:30 am</option>
                      <option>05:45 am</option>
                      <option>06:00 am</option>
                      <option>06:15 am</option>
                      <option>06:30 am</option>
                      <option>06:45 am</option>
                      <option>07:00 am</option>
                      <option>07:15 am</option>
                      <option>07:30 am</option>
                      <option>07:45 am</option>
                      <option>08:00 am</option>
                      <option>08:15 am</option>
                      <option>08:30 am</option>
                      <option>08:45 am</option>
                      <option>09:00 am</option>
                      <option>09:15 am</option>
                      <option>09:30 am</option>
                      <option>09:45 am</option>
                      <option>10:00 am</option>
                      <option>10:15 am</option>
                      <option>10:30 am</option>
                      <option>10:45 am</option>
                      <option>11:00 am</option>
                      <option>11:15 am</option>
                      <option>11:30 am</option>
                      <option>11:45 am</option>
                      <option>12:00 pm</option>
                      <option>12:15 pm</option>
                      <option>12:30 pm</option>
                      <option>12:45 pm</option>
                      <option>01:00 pm</option>
                      <option>01:15 pm</option>
                      <option>01:30 pm</option>
                      <option>01:45 pm</option>
                      <option>02:00 pm</option>
                      <option>02:15 pm</option>
                      <option>02:30 pm</option>
                      <option>02:45 pm</option>
                      <option>03:00 pm</option>
                      <option>03:15 pm</option>
                      <option>03:30 pm</option>
                      <option>03:45 pm</option>
                      <option>04:00 pm</option>
                      <option>04:15 pm</option>
                      <option>04:30 pm</option>
                      <option>04:45 pm</option>
                      <option>05:00 pm</option>
                      <option>05:15 pm</option>
                      <option>05:30 pm</option>
                      <option>05:45 pm</option>
                      <option>06:00 pm</option>
                      <option>06:15 pm</option>
                      <option>06:30 pm</option>
                      <option>06:45 pm</option>
                      <option>07:00 pm</option>
                      <option>07:15 pm</option>
                      <option>07:30 pm</option>
                      <option>07:45 pm</option>
                      <option>08:00 pm</option>
                      <option>08:15 pm</option>
                      <option>08:30 pm</option>
                      <option>08:45 pm</option>
                      <option>09:00 pm</option>
                      <option>09:15 pm</option>
                      <option>09:30 pm</option>
                      <option>09:45 pm</option>
                      <option>10:00 pm</option>
                      <option>10:15 pm</option>
                      <option>10:30 pm</option>
                      <option>10:45 pm</option>
                      <option>11:00 pm</option>
                      <option>11:15 pm</option>
                      <option>11:30 pm</option>
                      <option>11:45 pm</option>
                      <option>12:00 am</option>
                    </select>
                  </div>
                  <div class="column w-6">
                    <select class="input choices">
                      <option>12:15 am</option>
                      <option>12:30 am</option>
                      <option>12:45 am</option>
                      <option>01:00 am</option>
                      <option>01:15 am</option>
                      <option>01:30 am</option>
                      <option>01:45 am</option>
                      <option>02:00 am</option>
                      <option>02:15 am</option>
                      <option>02:30 am</option>
                      <option>02:45 am</option>
                      <option>03:00 am</option>
                      <option>03:15 am</option>
                      <option>03:30 am</option>
                      <option>03:45 am</option>
                      <option>04:00 am</option>
                      <option>04:15 am</option>
                      <option>04:30 am</option>
                      <option>04:45 am</option>
                      <option>05:00 am</option>
                      <option>05:15 am</option>
                      <option>05:30 am</option>
                      <option>05:45 am</option>
                      <option>06:00 am</option>
                      <option>06:15 am</option>
                      <option>06:30 am</option>
                      <option>06:45 am</option>
                      <option>07:00 am</option>
                      <option>07:15 am</option>
                      <option>07:30 am</option>
                      <option>07:45 am</option>
                      <option>08:00 am</option>
                      <option>08:15 am</option>
                      <option>08:30 am</option>
                      <option>08:45 am</option>
                      <option>09:00 am</option>
                      <option>09:15 am</option>
                      <option>09:30 am</option>
                      <option>09:45 am</option>
                      <option>10:00 am</option>
                      <option>10:15 am</option>
                      <option>10:30 am</option>
                      <option>10:45 am</option>
                      <option>11:00 am</option>
                      <option>11:15 am</option>
                      <option>11:30 am</option>
                      <option>11:45 am</option>
                      <option>12:00 pm</option>
                      <option>12:15 pm</option>
                      <option>12:30 pm</option>
                      <option>12:45 pm</option>
                      <option>01:00 pm</option>
                      <option>01:15 pm</option>
                      <option>01:30 pm</option>
                      <option>01:45 pm</option>
                      <option>02:00 pm</option>
                      <option>02:15 pm</option>
                      <option>02:30 pm</option>
                      <option>02:45 pm</option>
                      <option>03:00 pm</option>
                      <option>03:15 pm</option>
                      <option>03:30 pm</option>
                      <option>03:45 pm</option>
                      <option>04:00 pm</option>
                      <option>04:15 pm</option>
                      <option>04:30 pm</option>
                      <option>04:45 pm</option>
                      <option>05:00 pm</option>
                      <option>05:15 pm</option>
                      <option>05:30 pm</option>
                      <option>05:45 pm</option>
                      <option>06:00 pm</option>
                      <option>06:15 pm</option>
                      <option>06:30 pm</option>
                      <option>06:45 pm</option>
                      <option>07:00 pm</option>
                      <option>07:15 pm</option>
                      <option>07:30 pm</option>
                      <option>07:45 pm</option>
                      <option>08:00 pm</option>
                      <option>08:15 pm</option>
                      <option>08:30 pm</option>
                      <option>08:45 pm</option>
                      <option>09:00 pm</option>
                      <option>09:15 pm</option>
                      <option>09:30 pm</option>
                      <option>09:45 pm</option>
                      <option>10:00 pm</option>
                      <option>10:15 pm</option>
                      <option>10:30 pm</option>
                      <option>10:45 pm</option>
                      <option>11:00 pm</option>
                      <option>11:15 pm</option>
                      <option>11:30 pm</option>
                      <option>11:45 pm</option>
                      <option>12:00 am</option>
                    </select>
                  </div>
                </div>
              </fieldset>

              <fieldset class="my-1rem bg-white is-round shadow p-4 w-24">
                <div class="flex justify-between">
                  <div>
                    <h5>Menu</h5>
                    <div>What kind of Foods restaurant serve</div>
                  </div>
                </div>

                <div class="grid">
                  <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label block">Breakfast</span></label>
                  <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label block">Brunch</span></label>
                  <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label block">Lunch</span></label>
                  <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label block">Dinner</span></label>
                  <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label block">Drinks</span></label>
                  <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label block">Late Night</span></label>
                </div>

                <div class="column control w-24">
                  <div class="mb-1rem font-bold">Menu Images</div>
                  <input class="file" id="Images" type="file"><label class="label btn is-sld is-primary" for="Images">Upload Images</label>
                  <div class="is-sm mt-1rem">Supported image format: .jpeg, .jpg, .png . Can Select Multiple Images</div>
                </div>

                <div class="menu is-primary my-7px">
                  <button type="button" class="menu-trigger menu-item bg-primary clr-white font-bolder">Pick Cuisine Categories</button>
                  <div class="grid">
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">African</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Albanian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Algerian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">American</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Apulian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Arabic</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Argentinean</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Armenian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Asian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Assyrian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Australian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Austrian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Azerbaijani</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Bahamian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Balti</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Bangladeshi</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Bar</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Barbecue</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Beer restaurants</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Beijing cuisine</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Belgian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Brazilian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Brew Pub</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">British</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Burmese</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Cafe</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Cajun & Creole</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Calabrian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Cambodian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Campania</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Canadian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Caribbean</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Catalan</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Caucasian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Central American</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Central Asian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Central European</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Central-Italian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Chilean</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Chinese</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Colombian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Contemporary</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Costa Rican</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Croatian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Cuban</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Czech</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Danish</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Deli</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Diner</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Dining bars</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Dutch</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Eastern European</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Ecuadorean</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Egyptian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Emilian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Ethiopian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">European</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Fast Food</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Filipino</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">French</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Fruit parlours</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Fujian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Fusion</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Gastropub</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Georgian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">German</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Greek</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Grill</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Guatemalan</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Hawaiian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Healthy</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Hokkaido cuisine</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Hungarian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Indian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Indonesian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">International</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Irish</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Israeli</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Italian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Jamaican</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Japanese</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Japanese Fusion</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Japanese sweets parlour</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Kaiseki</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Kappo</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Korean</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Kyoto cuisine</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Kyushu cuisine</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Latin</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Latvian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Lazio</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Lebanese</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Ligurian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Lombard</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Malaysian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Medicinal foods</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Mediterranean</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Mexican</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Middle Eastern</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Mongolian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Moroccan</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Native American</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Neapolitan</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Nepali</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">New Zealand</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Nigerian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Northern-Italian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Norwegian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Pakistani</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Persian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Peruvian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Pizza</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Polish</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Polynesian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Portuguese</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Pub</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Puerto Rican</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Romagna</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Romana</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Romanian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Russian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Salvadoran</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Sardinian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Scandinavian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Scottish</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Seafood</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Shojin</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Sicilian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Singaporean</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Slovenian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Soups</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">South American</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Southern-Italian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Southwestern</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Spanish</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Sri Lankan</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Steakhouse</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Street Food</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Sushi</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Swedish</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Swiss</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Taiwanese</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Thai</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Tibetan</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Tunisian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Turkish</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Tuscan</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Ukrainian</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Uzbek</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Venezuelan</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Vietnamese</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Welsh</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Wine Bar</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Xinjiang</span></label>
                    <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Yunnan</span></label>
                  </div>
                </div>

                <div class="menu is-primary my-7px">
                  <button type="button" class="menu-trigger menu-item bg-primary clr-white font-bolder">Pick Dishes</button>
                  <div class="grid">
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Acai Bowls</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Adobo</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Agnolotti</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Akashiyaki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Alfredo</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Aligot</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Amatriciana sauce</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Anago</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Anchovies</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Andouille</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Andouillettes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Angler</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Antipasti</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Apple pie</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Arancini</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Arrosticini</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Arroz Negro</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Arroz brut</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Arroz caldoso</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Arroz del senyoret</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Arròs a banda</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Artichoke Chips</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Artichoke Salad</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Assam Fish Head Curry</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">BLT</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Baba Ghanoush</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Baby Back Ribs</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bacalao al Pil-Pil</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Baccala</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Baccala mantecato</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bacon Sandwich</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bagels</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Baguette</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Baingan Bharta</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bak Chor Mee</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bak Kut Teh</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Baked Ziti</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bananas Foster</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bangers And Mash</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Banoffee pies</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Barbecue</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bass</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Beef</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Beef Bourguignon</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Beef Cheeks</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Beef on Weck</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Beefsteak Florentine style</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Beignets</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bento (Lunch Box)</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bibimbap</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bigoli</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Biscuits and gravy</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Blood Sausages</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bolognese</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Botifarra</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bottarga</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bouchée à la reine</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bouillabaisse</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bourrides</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Brandade</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bread Pudding</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Breakfast Burrito</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Breakfast Sandwich</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Broccoli rabe</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Brudet</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bruschette</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Bubble Tea</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Buffalo mozzarella</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Burger</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Burrata Salad</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Burrito</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Burrito Bowl</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Buta-don</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cacio e pepe</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cakes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Calamares</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Calamari</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Caldeirada</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">California Roll</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">California Style Pizza</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Callos</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Canarian Wrinkly Potatoes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cannelloni</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cannoli</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Caponata</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Caprese Salads</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Carbonade flamande</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Carbonara</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Carcamusa</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Carciofi alla Romana</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Carciofi alla giudia</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Carrot Cake</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cashew Chicken</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cassata</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cassoulet</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Castilian Soup</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Catfish</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Caviar</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cazon</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cecina</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cecina Salad</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cervelles de canut</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cesar Salad</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Ceviche</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Champon noodles</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chanko-Nabe</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cheese fondue</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cheeseburger</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cheesecake</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cheesecakes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cheesesteak</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chianina</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chicago Dog</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chicharrón</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chicken Alfredo</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chicken And Waffles</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chicken Croquettes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chicken Kabobs</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chicken Kiev</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chicken Paella</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chicken Parmesan</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chicken Sandwich</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chicken Wings</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chicken dishes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chicken fried steak</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chicken in Maroilles sauce</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chili</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chili Crab</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chilli Chicken</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chinese buns</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chinese rice porridge</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chipirones</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chiritori-Nabe, Tecchyan-Nabe</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chistorra</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chocolate molten cake</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chocolate mousse</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chocolates</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chopitos</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Choucroute Royale</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Choucroute garnie</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chow Mein</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Chowder</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Churrasco</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Churros and Porras</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cioppino</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Clam Chowder</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Clams</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Club Sandwich</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cobb Salad</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Coccoli</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cochifrito</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cocido</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cockle</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cococha</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cod</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cod Carpaccio</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cod Croquettes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cod fritters</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Coda alla vaccinara</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cold noodles</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Confit</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Coq au Vin</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Coquinas</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Coratella</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Corn dogs</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Corned Beef</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Corvina</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cotoletta</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Coulant</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Couscous</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Crab</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Crab Cake</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Crab Legs</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Crab Rangoon</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Crab Soup</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Crawfish</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Crema Catalana</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Creme Brulee</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Creme Brulee</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Crepes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Crisp</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Crispy Pata</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Croque Madame</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Croque Monsieur</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Croquettes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Crostini</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Crostino</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cuban Sandwich</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cucumber Salad</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cupcakes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cured Meat Croquettes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Curry</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Curry udon</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Custard Bun</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cuttlefish</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Cuttlefish Croquettes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Dauphiné raviolis</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Deep dish pizza</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Dim Sum</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Dinuguan</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Dojo</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Donburi (Rice Bowl)</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Doner Kebab</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Donuts</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Duck</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Duck Confit</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Duck Magret</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Dumplings</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Eclairs</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Eggplant</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Eggplant with honey</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Eggs Benedict</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">El Cachopo</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Entrecote</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Escalivada</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Escalope</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Escargot</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Etouffee</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">European-style curry</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fajitas</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Falafel</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Farinata</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fattoush</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fava Beans</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fettuccine Alfredo</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Ficelle Picarde</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fideua</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Filet Mignon</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fish</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fish & Chips</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fish Sandwich</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fish Soup</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fish Taco</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Flamenquín</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Flammekueche</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Floating island</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Focaccia</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Foie gras</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fondue</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">French Dip</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">French Fries</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">French Toast</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">French onion soup</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fried Anchovies</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fried Artichokes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fried Clams</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fried Cod</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fried Hake</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fried cheese</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fried octopus</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fried pickles</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fried rice</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fried shrimp</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Frito Mallorquín</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fritto misto</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Frog Legs</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Frog's legs</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Frozen Yogurt</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Fugu (Blow Fish)</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Galettes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Garlic</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Garlic Prawns</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Gazpacho</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Gefilte Fish</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Gelato</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Genghis Khan</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Gianduja</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Giant broad beans</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Gilt-head bream</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Gnocchi alla sorrentina</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Gnocco fritto</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Goat Fish Cake</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Goat cheese</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Goat cheese salad</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Grand Marnier soufflé</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Green Chili</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Green Curry</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Green Mojo</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Grilled Sole</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Grilled cheese</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Grilled giblets</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Grilled pork</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Grouper Sandwich</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Guanciale</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Gumbo</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Gyoza</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Gyros</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Gyu-don</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Gyutan</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Haddock</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Hake</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Halibut</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Halloumi</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Ham Croquettes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Hamburger steaks</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Hamburgers</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Hanger steak</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Hashed beef rice</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Hazelnut</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Hiroshima style okonomiyaki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Hoagie</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Hokkien Mee</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Hopia</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Horse meat</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Horumon</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Hot Chocolate</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Hot Dog</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Hot Pot</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Hoto</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Huevos Rotos</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Hummus</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Ice Cream</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Indian curry</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Italian Beef</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Italian Meatballs</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Izakaya</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Jambalaya</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Jambonneau</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Japanese Curry</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Japanese sweets</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Juice & Smoothies</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Kabobs</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Kaiten Sushi (Conveyor belt sushi)</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Kale Salad</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Kamameshi</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Karaage fried chicken</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Kare kare</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Katsu-don</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Key lime pie</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">King Prawn Shrimps</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">King Scallops</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Kiritanpo</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Kobe Beef</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Korean Fried Chicken</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Kueh Pie Tee</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Kung Pao Chicken</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Kushiage (Fried Skewers)</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Kushiyaki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Lacon</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Laksa</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Lamb</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Lamb Shoulder</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Lamb chops</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Lasagne</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Lechon</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Lemon tart</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Les œufs en meurette</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Lettuce Wraps</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Little Necks</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Liver terrines</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Lobster</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Lobster Roll</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Lobster rice</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Lumpia</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Lyonnaise salad</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Mac and cheese</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Macaronades</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Macarons</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Macaroons</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Manchego</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Mandarin Duck</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Margherita Pizza</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Matzo Ball Soup</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Mazamorra</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Meat Cakes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Meat Paella</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Meatballs</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Meatloaf</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Meringue</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Milanese risotto</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Mille-feuilles</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Minestrone</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Miso ramen</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Mixed Kebabs</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Mixed Paella</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Mizutaki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Monjya yaki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Mortadella</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Motsu-Nabe</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Moules-frites</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Moussaka</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Muffaletta</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Mugitoro</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Mushroom Croquettes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Mussels</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Nabe (Japanese Hot Pot)</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Nachos</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Neapolitan pizza</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">New York Style Pizza</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Noodle</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Norway Lobsters</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Obanzai</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Octopus</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Oden</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Offal</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Okinawa soba</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Okonomiyaki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Okonomiyaki & Takoyaki (Flour Dish)</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Olivier Salad</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Omelette</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Omurice</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Orecchiette</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Ortigas</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Osso Buco</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Ossobuco</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Oxitail</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Oxtail Croquettes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Oyako-don</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Oyster</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Paccheri</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pad Thai</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Padron Peppers</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Paella</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Paella Valenciana</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pancakes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Paninis</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pansoti</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Panzanella</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Panzerotti</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pappa al pomodoro</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Parfait</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Paris-Brest</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pasta</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pastrami Sandwich</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Patatas Bravas</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Patatas Revolconas</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Peking Duck</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Penny buns</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Peposo</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Percebe</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Perogies</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pescado Frito</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pesto</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Petits Farcis</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Philly Cheesesteak</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pho</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Piadina</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pici</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pimento Cheese</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pintxos</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Piquillo pepper</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Plateau de fruits de mer</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Po' Boys</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Poke Bowls</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Polbo a Feira</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Polenta</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pollock</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Porchetta</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pork</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pork Cheeks</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pork Loin</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pork Roll</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pork Shabu Shabu</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pork Tenderloin</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Porterhouse Steak</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pot-au-feu</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Poutine</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Praline Torte</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Prawn Paste Chicken</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Prawn Salad</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Prawns</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pretzel</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Profiteroles</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Prosciutto</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Puchero Croquettes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pulled Pork Sandwich</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Pulut Hitam</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Puntarelle</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Quahogs</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Quail</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Quail Eggs</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Quenelle</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Queso</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Quiche</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Raclette</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Ragu</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Ramen</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Razor Clams</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Red Beans and Rice</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Red Curry</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Reuben sandwich</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Rib Steak</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Ribollita</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Ribs</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Rice pudding</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Risotto</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Roast Beef</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Roast Chicken</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Robatayaki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Roe</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Roman pizza</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Roquefort</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Rum Baba</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Ryotei</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Salad</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Salad Nicoise</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Salmon</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Salmon Salad</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Salmorejo</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Salt ramen</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Saltimbocca</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Samgyeopsal</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Samgyetang</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sandwiches</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sanuki udon</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sarladaises potatoes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sashimi</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sauerkraut / Choucroute</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sauerkraut from the sea</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Savoyarde fondue</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sbrisolona</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Scallops</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Schnitzel</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Scialatelli</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Scrapple</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Seafood Croquettes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Seafood Paella</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Seafood Platters</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Seafood rice bowls</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Secreto Iberico</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Shabu Shabu</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Shaved ice</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Shawarma</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Shellfish</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Shiacciatta</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Shrimp</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Shrimp Salad</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Shrimp and Grits</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sinigang</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sirloin Steak</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sirloin Steak with whisky</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sisig</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Skate Wing</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Smoked Salmon</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Smoked Sardines</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Snails</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Soba</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Soft serve ice cream</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sole Meunière</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Soup Dumplings</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Soup curry</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Souvlaki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Soy sauce ramen</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Spaghetti alla chitarra</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Spaghetti with Clams</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Spätzle</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Squash blossom</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Squid Ink Pasta</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Steak Frites</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Steak Sandwich</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Steak Tartare</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Steamers</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Stews</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Stockfish Octopus</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Stracciatella</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Strozzapreti</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Stuffed Onions</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Stuffed aubergines</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Suckling Pig</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sukiyaki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sukiyaki & Shabu Shabu</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sumibiyaki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Supplis</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Suppon</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Surf And Turf</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sweets</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Sword noodles</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Swordfish</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">T-Bone Steak</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Taco rice</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tacos</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tagliatelle</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Taglierini</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Taiyaki, Oobanyaki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Takoyaki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tandoori Chicken</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tantanmen noodles</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tapas</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tarte Tatin</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tarte tropézienne</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tartufo</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tataki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tater tots</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tempura</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Ten-don</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Teppanyaki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Thai suki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tikka Masala</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tilapia</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tiramisu</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Toasts</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tomato Bread</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tombet</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tonkatsu</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tonkotsu ramen</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Torte</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tortelli</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tortellini</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tortelloni</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tortilla de Camarones</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tortillas</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tostones</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Toulouse sausage</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tres Leches</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tripe</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Trofie</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tsukemen</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tuna</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tuna Melt</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Tuna Sandwich</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Turkey Burger</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Turkey Sandwich</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Udon</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Udon & Soba (Wheat & Buckwheat Noodle)</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Udon suki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Unagi</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Unagi & Dojo (Eel & Soil)</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Uramaki</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Veal Kidneys</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Vegetable Paella</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Vegetable dishes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Veggie Burger</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Veggie Burrito</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Vignarola</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Vitello tonnato</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Waffle Fries</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Waffles</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Waffles & Crepes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Welsh rarebit</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Western sweets</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Wild boar</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Wings</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Yakiniku (Japanese BBQ)</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Yakitori (Grilled Skewers)</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Yellow Curry</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Yoshoku (Japanese Style Western Food)</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Yu Sheng</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Yuba</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Zabaione</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">Zamburinas</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">buckwheat crepes</span></label>
                    <label class="control column w-8"><input type="checkbox" class="checkbox"><span class="label block">chestnut_soup</span></label>
                  </div>
                </div>

              </fieldset>

              <fieldset class="my-1rem bg-white is-round shadow p-4 w-24">
                <div class="flex justify-between">
                  <div>
                    <h5>Type</h5>
                    <div>What is this restaurant good for?</div>
                  </div>
                </div>

                <div class="grid">
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Kids</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Business meetings</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Large groups</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Romantic</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Bar scene</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Special occasions</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Scenic view</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Local cuisine</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Hidden Gems</span></label>
                  <label class="control column w-12"><input type="checkbox" class="checkbox"><span class="label block">Hot New Restaurants</span></label>
                </div>
              </fieldset>

              <fieldset class="my-1rem bg-white is-round shadow p-4 w-24">
                <div class="flex justify-between">
                  <div>
                    <h5>Reference</h5>
                    <div>Referenced by someone?</div>
                  </div>
                </div>
                <input type="text" class="input mt-1rem" placeholder="Enter their Reference ID">
              </fieldset>

              <fieldset class="my-1rem bg-white is-round shadow p-4 w-24">
                <div class="flex justify-between">
                  <div>
                    <h5>Price</h5>
                    <div>How expensive is this restaurant?</div>
                  </div>
                </div>
                <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label block">Cheap Eats - quick serve or self-service <span class="italic">(100-1000 PKR for 2 people)</span></span></label>
                <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label block">Mid-range - casual, table service <span class="italic">(1000-5000 PKR for 2 people)</span></span></label>
                <label class="control column w-24"><input type="checkbox" class="checkbox"><span class="label block">Fine Dining - More formal or dressy <span class="italic">(5000-10000 PKR for 2 people)</span></span></label>
              </fieldset>

            </div>
            <div class="column w-24">
              <fieldset class="my-1rem bg-white is-round shadow p-4 w-24">
                <h5>Review</h5>
                <div>Review of restaurant</div>

                <div class="my-1rem has-table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>User Name</th>
                        <th>Review</th>
                        <th>Review Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>AlexanderTyler</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>7/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>AmanyaraRestaurant</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>6/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>AwadhPatel</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>6/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>BaonecciRistorante</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>6/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>ChristinAdkins</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>7/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>CK Restaurant</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>6/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>DipakLadumor</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td></td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>divyladumor</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>10/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>eleaelea</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>6/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>GaryJones</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>Active</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>Great HouseRestaurant</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>6/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>HAVEN Riverfront Restaurant and Bar</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>6/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>LeucaRestaurant</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>6/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>Limewood Restaurant</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>6/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>MukeshAhir</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>10/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>NewRestaurant</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>12/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>NiraliPatel</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>10/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>Northwest PointResort Restaurant</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>6/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>OtherMama</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>7/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>ParmarParmar</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>14/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>ParmarParmar</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td></td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>ParmarParmar</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td></td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>PQRASD</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>10/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>pqrxyz</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>10/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>RonakParmar</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>14/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>RonakParmar</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>14/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>RonakParmar</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td></td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>RonakParmar</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td></td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>RonakParmar</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td></td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>RonakParmar</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td></td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>RonakParmar</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>13/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>RonakParmar</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>Active</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>RonakParmar</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>14/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>SandboxRestaurant</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>6/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>scvsscvs</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>Active</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>SharkRestaurant</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>12/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>ShreeMehfil</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>12/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>sureshladumor</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>12/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>Table Restaurant</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td></td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>The DeckRestaurant</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>6/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>umeshladumor</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td></td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>UmeshLadumor</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>7/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>Waterbar</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>6/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>YasGohil</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>7/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                      <tr>
                        <td>Zest at Wymara ResortRestaurant</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>6/2/2020</td>
                        <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </fieldset>
            </div>
          </main>
        </div>
      </div>
    </div>

    <?php include './footer.php';?>
  </body>

</html>