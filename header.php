<link href="./scss/temp/fluid.css" rel="stylesheet" />
<link href="./scss/temp/base.css" rel="stylesheet" />
<link href="./fonts/Quicksand/fonts.css" rel="stylesheet" />
<link href="./fonts/OpenSans/fonts.css" rel="stylesheet" />
<link href="./vendors/remixicon/remixicon.css" rel="stylesheet" />
<link href="./vendors/slick/slick.css" rel="stylesheet" />
<link href="./vendors/slick/slick-theme.css" rel="stylesheet" />
<link href="./vendors/choices/public/assets/styles/choices.css" rel="stylesheet" />

<header class="lyt-header shadow-sm bg-white txt-center grid border-top-none">
  <div class="column w-4 txt-center border-right pr-7px">
    <a href="."> <img class="img w-17" src="./images/logo.svg" alt="EazyDiner" /> </a>
  </div>
  <a class="off-12 txt-decor-none font-bold border-right clr-primary w-4 pr-7px" href="#"><i class="ri-phone-line icon mr-7px"></i>786 100 4444</a>

  <div class="column w-4 flex justify-between align-middle pl-7px">
    <a class="btn" href="#">Help</a>
    <button class="btn" id="login_open">Login</button>
    <a class="btn is-sld is-primary font-bold" href="#">Sign Up</a>
  </div>
</header>

<section id="login_popup" class="hidden fixed z-top top-0 right-0 bottom-0 left-0 bg-black-75 flex align-middle justify-center">
  <div class="relative bg-white shadow p-2 is-round-sm">
    <button id="login_close" class="btn absolute top-0 right-0 p-0 ri-close-circle-line bg-white is-circle ri-2x" style="transform: translate(50%,-50%);"></button>
    <h5>Please sign in</h5>
    <input class="input my-7px" type="email" placeholder="Email" />
    <input class="input my-7px" type="password" placeholder="Password" />
    <div class="txt-right my-7px"><a href="#">Forget Password ?</a></div>
    <button class="btn is-sld is-primary is-block">Sign In</button>
  </div>
</section>