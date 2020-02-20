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
          <form class="bg-white shadow border p-2 is-round">
            <div class="has-table-responsive">
              <h5>All Restaurants</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th>Owner Name</th>
                    <th>Restaurant Name</th>
                    <th>Restaurant Address</th>
                    <th>Cuisine</th>
                    <th>Opened Date</th>
                    <th>Price Max</th>
                    <th>Price Min</th>
                    <th>User Ratings</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>AlexanderTyler</td>
                    <td>Chez Bruce</td>
                    <td>Wandsworth, London, UK</td>
                    <td>American Chinese French </td>
                    <td>7/2/2020</td>
                    <td>500</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>AmanyaraRestaurant</td>
                    <td>Amanyara</td>
                    <td>Calabasas, CA, USA</td>
                    <td>Lebanese Mediterranean Spanish Turkish </td>
                    <td>6/2/2020</td>
                    <td>188</td>
                    <td>20</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>AwadhPatel</td>
                    <td>Awadh</td>
                    <td>A/5, 8th Floor, Safal Profitaire, Nr. Ramada Hotel, Corporate Road, Prahalad Nagar, Prahlad Nagar, Ahmedabad, Gujarat 380015, India</td>
                    <td>American Cajun Caribbean French Chinese </td>
                    <td>6/2/2020</td>
                    <td>357</td>
                    <td>20</td>
                    <td>0</td>
                    <td>Deleted</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>BaonecciRistorante</td>
                    <td>Baonecci Ristorante</td>
                    <td>SFO, Domestic Terminals Arrivals Level, San Francisco, CA 94128, USA</td>
                    <td>American Cajun Chinese Caribbean Greek German French Korean </td>
                    <td>6/2/2020</td>
                    <td>390</td>
                    <td>56</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>ChristinAdkins</td>
                    <td>The Ledbury</td>
                    <td>Notting Hill, London, UK</td>
                    <td>Chinese French Italian Japanese </td>
                    <td>7/2/2020</td>
                    <td>500</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>CK Restaurant</td>
                    <td>CK Restaurant</td>
                    <td>1544 Webster St, Oakland, CA 94612, USA</td>
                    <td>American Caribbean German Korean Lebanese Thai Turkish </td>
                    <td>6/2/2020</td>
                    <td>304</td>
                    <td>98</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>DipakLadumor</td>
                    <td>Pizza point</td>
                    <td>Sola Rd, Sola, Ahmedabad, Gujarat 380060, India</td>
                    <td></td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>divyladumor</td>
                    <td>Pizza Plus</td>
                    <td>Paras Nagar, Memnagar, Ahmedabad, Gujarat 380063, India</td>
                    <td></td>
                    <td>10/2/2020</td>
                    <td>500</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>eleaelea</td>
                    <td>Elea</td>
                    <td>Jodhpur Char Rasta, Suryapooja Block B, Satellite, Ahmedabad, Gujarat 380015, India</td>
                    <td>American French Chinese German Greek Japanese Indian Italian Korean </td>
                    <td>6/2/2020</td>
                    <td>500</td>
                    <td>0</td>
                    <td>4.25</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>GaryJones</td>
                    <td>Apna Panjab</td>
                    <td>Bodakdev, Ahmedabad, Gujarat, India</td>
                    <td>Indian </td>
                    <td>14/2/2020</td>
                    <td>366</td>
                    <td>81</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>Great HouseRestaurant</td>
                    <td>Great House</td>
                    <td>Australia</td>
                    <td>Greek Indian Italian Japanese </td>
                    <td>6/2/2020</td>
                    <td>188</td>
                    <td>21</td>
                    <td>4.125</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>HAVEN Riverfront Restaurant and Bar</td>
                    <td>HAVEN Riverfront Restaurant and Bar</td>
                    <td>Ramdev Nagar, Ahmedabad, Gujarat 380015, India</td>
                    <td>American Cajun Caribbean </td>
                    <td>6/2/2020</td>
                    <td>420</td>
                    <td>250</td>
                    <td>5</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>LeucaRestaurant</td>
                    <td>Leuca</td>
                    <td>Nehru Nagar, Ambawadi, Ahmedabad, Gujarat 380015, India</td>
                    <td>American Vietnamese Turkish Thai Spanish Soul Mediterranean Lebanese Korean Japanese Italian Indian </td>
                    <td>6/2/2020</td>
                    <td>203</td>
                    <td>42</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>Limewood Restaurant</td>
                    <td>Limewood Bar &amp; Restaurant</td>
                    <td>41 Tunnel Rd, Berkeley, CA 94705, USA</td>
                    <td>American Cajun Caribbean Chinese French Greek Indian Italian Korean </td>
                    <td>6/2/2020</td>
                    <td>330</td>
                    <td>90</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>MukeshAhir</td>
                    <td>The Green House</td>
                    <td>Old City, Lal Darwaja, Ahmedabad, Gujarat 380001, India</td>
                    <td>American Cajun Caribbean Greek Indian </td>
                    <td>10/2/2020</td>
                    <td>414</td>
                    <td>83</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>NewRestaurant</td>
                    <td>Jay Ambe 12121</td>
                    <td>Ahmedabad, Gujarat, India</td>
                    <td>American Cajun </td>
                    <td>12/2/2020</td>
                    <td>500</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>NiraliPatel</td>
                    <td>Honest</td>
                    <td>Prahlad Nagar, Ahmedabad, Gujarat 380015, India</td>
                    <td>American Cajun Caribbean Chinese French </td>
                    <td>10/2/2020</td>
                    <td>500</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>Northwest PointResort Restaurant</td>
                    <td>Northwest Point Resort</td>
                    <td>Surat, Gujarat, India</td>
                    <td>American Cajun Caribbean Chinese French </td>
                    <td>6/2/2020</td>
                    <td>500</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>OtherMama</td>
                    <td>Other Mama</td>
                    <td>Ahmedabad, Gujarat, India</td>
                    <td>American Cajun Caribbean </td>
                    <td>7/2/2020</td>
                    <td>362</td>
                    <td>44</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>ParmarParmar</td>
                    <td>The Raj Thaal and Restaurant</td>
                    <td>Bopal, Ahmedabad, Gujarat 380058, India</td>
                    <td>American Chinese Indian </td>
                    <td>14/2/2020</td>
                    <td>500</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>ParmarParmar</td>
                    <td>The Green House</td>
                    <td>Old City, Lal Darwaja, Ahmedabad, Gujarat 380001, India</td>
                    <td></td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Deactive</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>ParmarParmar</td>
                    <td>The Green House</td>
                    <td>Old City, Lal Darwaja, Ahmedabad, Gujarat 380001, India</td>
                    <td></td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Deactive</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>PQRASD</td>
                    <td>Havmour</td>
                    <td>Science City Rd, Science City, Bhuyang Dev, Sola, Ahmedabad, Gujarat, India</td>
                    <td>American Indian Japanese Italian Greek Chinese </td>
                    <td>10/2/2020</td>
                    <td>417</td>
                    <td>88</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>pqrxyz</td>
                    <td>Jassi De Parathe</td>
                    <td>Vastrapur Lake, Vastrapur, Ahmedabad, Gujarat 380052</td>
                    <td>American Cajun Chinese French German Greek Indian Italian Japanese Spanish Thai </td>
                    <td>10/2/2020</td>
                    <td>463</td>
                    <td>42</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>RonakParmar</td>
                    <td>Gormoh Restaurant</td>
                    <td>Sakar Bazzar, Kalupur, Ahmedabad, Gujarat 380002, India</td>
                    <td>American Chinese Indian </td>
                    <td>14/2/2020</td>
                    <td>500</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>RonakParmar</td>
                    <td>Kuro - The Asian Bistro</td>
                    <td>Sarkhej, Ahmedabad, Gujarat, India</td>
                    <td>American Chinese Indian </td>
                    <td>14/2/2020</td>
                    <td>500</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>RonakParmar</td>
                    <td>The Ledbury</td>
                    <td>Notting Hill, London, UK</td>
                    <td></td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>RonakParmar</td>
                    <td>Sankalp</td>
                    <td>Bodakdev, Ahmedabad, Gujarat 380054, India</td>
                    <td></td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Deactive</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>RonakParmar</td>
                    <td>Sankalp</td>
                    <td>Bodakdev, Ahmedabad, Gujarat 380054, India</td>
                    <td></td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Deactive</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>RonakParmar</td>
                    <td>The Ledbury</td>
                    <td>Ledbury Rd, Notting Hill, London W11, UK</td>
                    <td></td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Deleted</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>RonakParmar</td>
                    <td>Magic Chicken</td>
                    <td>Ahmedabad, Gujarat, India</td>
                    <td>American Indian Chinese </td>
                    <td>13/2/2020</td>
                    <td>500</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>RonakParmar</td>
                    <td>Mirch Masala</td>
                    <td>Navrangpura, Ahmedabad, Gujarat, India</td>
                    <td>Indian </td>
                    <td>14/2/2020</td>
                    <td>500</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>RonakParmar</td>
                    <td>Arabian Knife</td>
                    <td>ISRO Colony Rd, Nandanvan 1, Ahmedabad, Gujarat 380015, India</td>
                    <td>American Indian </td>
                    <td>14/2/2020</td>
                    <td>500</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>SandboxRestaurant</td>
                    <td>Sandbox</td>
                    <td>Ahmedabad, Gujarat, India</td>
                    <td>Cajun Caribbean Chinese French </td>
                    <td>6/2/2020</td>
                    <td>205</td>
                    <td>23</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>scvsscvs</td>
                    <td>test</td>
                    <td>Ahmedabad, Gujarat, India</td>
                    <td>American </td>
                    <td>12/2/2020</td>
                    <td>500</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>SharkRestaurant</td>
                    <td>Shark Restaurant</td>
                    <td>Ahmedabad, Gujarat, India</td>
                    <td>American Cajun </td>
                    <td>12/2/2020</td>
                    <td>345</td>
                    <td>104</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>ShreeMehfil</td>
                    <td>Shree Mehfil</td>
                    <td>Visharam Nagar, Ghatlodiya, Memnagar, Ahmedabad, Gujarat, India</td>
                    <td>American Cajun Indian Greek French </td>
                    <td>12/2/2020</td>
                    <td>429</td>
                    <td>100</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>sureshladumor</td>
                    <td>The Lion</td>
                    <td>D.L.B. Society, Amreli, Gujarat 365601, India</td>
                    <td>American Cajun Caribbean Chinese French Indian </td>
                    <td>12/2/2020</td>
                    <td>369</td>
                    <td>33</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>Table Restaurant</td>
                    <td>Table 34</td>
                    <td>Ahmedabad, Gujarat, India</td>
                    <td></td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Deactive</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>The DeckRestaurant</td>
                    <td>The Deck</td>
                    <td>Ahmedabad, Gujarat, India</td>
                    <td>Indian Italian Japanese Cajun Caribbean Soul </td>
                    <td>6/2/2020</td>
                    <td>331</td>
                    <td>3</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>umeshladumor</td>
                    <td>evening post</td>
                    <td>Naranpura Char Rasta, Naranpura, Ahmedabad, Gujarat 380013</td>
                    <td></td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>UmeshLadumor</td>
                    <td>Sasuji Dining Hall</td>
                    <td>Naranpura, Ahmedabad, Gujarat, India</td>
                    <td>American Cajun Caribbean Chinese French Greek German Indian Italian Japanese Korean </td>
                    <td>7/2/2020</td>
                    <td>343</td>
                    <td>40</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>Waterbar</td>
                    <td>Waterbar</td>
                    <td>399 The Embarcadero S, San Francisco, CA 94105, USA</td>
                    <td>American Chinese German Greek </td>
                    <td>6/2/2020</td>
                    <td>318</td>
                    <td>71</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>YasGohil</td>
                    <td>Kilis Kitchen</td>
                    <td>Kilis Kitchen, 4 Theberton StThe Angel, London N1 0QX, UK</td>
                    <td>German Italian Japanese Thai </td>
                    <td>7/2/2020</td>
                    <td>500</td>
                    <td>0</td>
                    <td>0</td>
                    <td>Active</td>
                    <td><a class="ml-1rem" href="#"><i class="icon ri-delete-bin-2-line"></i> Remove</a></td>
                    </tr>
                  <tr>
                    <td>Zest at Wymara ResortRestaurant</td>
                    <td>Zest at Wymara Resort</td>
                    <td>Sakar Bazzar, Kalupur, Ahmedabad, Gujarat 380002, India</td>
                    <td>Japanese Korean Mediterranean Lebanese </td>
                    <td>6/2/2020</td>
                    <td>239</td>
                    <td>13</td>
                    <td>4.625</td>
                    <td>Active</td>
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