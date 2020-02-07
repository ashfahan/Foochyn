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
        <link href="./scss/temp/fluid.css" rel="stylesheet">
        <link href="./scss/temp/base.css" rel="stylesheet">
        <link href="./fonts/Quicksand/fonts.css" rel="stylesheet">
        <link href="./vendors/remixicon/remixicon.css" rel="stylesheet">
    </head>

    <body>
        <header class="lyt-header shadow-sm bg-white txt-center border-top-none">
            <div class="w-4 border-right pr-7px">
                <a href="index.html"> <img class="img w-17" src="./images/logo.svg" alt="EazyDiner" /> </a>
            </div>
            <div class="w-4 pr-7px">
                <select class="input w-16 is-unstyle">
                    <option hidden="">Please Select</option>
                    <optgroup label="Asia">
                        <option selected="">City 1</option>
                        <option>City 2</option>
                        <option>City 3</option>
                        <option>City 4</option>
                        <option>City 5</option>
                    </optgroup>

                    <optgroup label="Europe">
                        <option>City 6</option>
                        <option>City 7</option>
                        <option>City 8</option>
                        <option>City 9</option>
                        <option>City 10</option>
                        <option>City 11</option>
                    </optgroup>
                </select>
            </div>
            <div class="w-8 pr-7px">
            </div>
            <a href="#" class="txt-decor-none font-bold border-right clr-error w-4 pr-7px"><i class="ri-phone-line icon mr-7px"></i>786 100 4444</a>

            <div class="w-4 flex justify-between align-middle pl-7px">
                <a class="btn" href="#">Help</a>
                <a class="btn" href="#">Login</a>
                <a class="btn is-sld is-primary font-bold" href="#">Sign Up</a>
            </div>
        </header>

        <section class="grid align-middle" style="min-height: 90vh;">
            <div class="w-8 off-4">
                <h1 class="column clr-primary">Sign Up for FooChyn</h1>
                <h4 class="column">Connect with great local businesses</h4>
                <div class="column">By continuing, you agree to FooChyn’s <a href="#">Terms of Service</a> and acknowledge FooChyn’s <a href="#">Privacy Policy</a></div>
                <form class="grid">
                    <div class="column w-12"><input class="input" type="text" placeholder="First Name"></div>
                    <div class="column w-12"><input class="input" type="text" placeholder="Last Name"></div>
                    <div class="column w-24"><input class="input" type="email" placeholder="Email"></div>
                    <div class="column w-24"><input class="input" type="password" placeholder="Password"></div>
                    <div class="column w-24"><input class="input" type="number" placeholder="Zip Code"></div>
                    <h6 class="column w-24">Birtday <span class="clr-disabled">optional</span></h6>
                    <div class="column w-24"><input class="input" type="date" placeholder="Zip Code"></div>
                    <div class="column w-24">You also understand that FooChyn may send marketing emails about FooChyn’s products, services, and local events. You can unsubscribe at any time</div>
                    <button class="column mt-1rem btn is-sld is-lg is-primary">Sign Up</button>
                </form>
            </div>
            <div class="off-2 w-8">
                <img src="./images/signup/side.png" alt="">
            </div>
        </section>
    </body>

</html>