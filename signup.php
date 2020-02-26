<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="format-detection" content="telephone=no">
        <meta name="description" content="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum perspiciatis rem praesentium eaque mollitia minima corporis fugit accusantium voluptas ducimus vero itaque voluptatibus maiores laboriosam, dolor id esse. Est, odit?">
        <title>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum perspiciatis rem praesentium eaque mollitia minima corporis fugit accusantium voluptas ducimus vero itaque voluptatibus maiores laboriosam, dolor id esse. Est, odit?</title>
        <link type="image/png" href="images/favicon.png" rel="icon">
        <link href="index.html" rel="canonical">
    </head>

    <body>
        <?php include 'header.php';?>

        <section class="grid align-middle" style="min-height: 90vh;">
            <div class="w-8 off-4">
                <h1 class="column clr-primary">Sign Up for FOoChyn</h1>
                <h4 class="column">Connect with great local businesses</h4>
                <div class="column">By continuing, you agree to FOoChyn’s <a href="#">Terms of Service</a> and acknowledge FOoChyn’s <a href="#">Privacy Policy</a></div>
                <form class="grid">
                    <div class="column w-12"><input class="input" type="text" placeholder="First Name"></div>
                    <div class="column w-12"><input class="input" type="text" placeholder="Last Name"></div>
                    <div class="column w-24"><input class="input" type="tel" placeholder="Phone Number"></div>
                    <div class="column w-24"><input class="input" type="password" placeholder="Password"></div>
                    <div class="column w-24">
                        <select class="input choices">
                            <option value="">Location</option>
                            <optgroup label="City 1">
                                <option>Area 1</option>
                                <option>Area 2</option>
                                <option>Area 3</option>
                                <option>Area 4</option>
                                <option>Area 5</option>
                            </optgroup>

                            <optgroup label="City 2">
                                <option>Area 6</option>
                                <option>Area 7</option>
                                <option>Area 8</option>
                                <option>Area 9</option>
                                <option>Area 10</option>
                                <option>Area 11</option>
                            </optgroup>
                        </select>
                    </div>
                    <h6 class="column w-24">Birtday <span class="clr-disabled">optional</span></h6>
                    <div class="column w-24"><input class="input" type="date" placeholder="Zip Code"></div>
                    <div class="column w-24">You also understand that FOoChyn may send marketing emails about FOoChyn’s products, services, and local events. You can unsubscribe at any time</div>
                    <button class="column mt-1rem btn is-sld is-lg is-primary">Sign Up</button>
                </form>
            </div>
            <div class="off-2 w-8">
                <img src="./images/signup/side.png" alt="">
            </div>
        </section>

        <script src="./vendors/jquery-3.4.1.min.js"></script>
        <script src="./vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="./vendors/choices/public/assets/scripts/choices.js"></script>
        <script src="./js/base.js"></script>
        <script src="./js/MULTISTEPFORM.js"></script>
    </body>

</html>