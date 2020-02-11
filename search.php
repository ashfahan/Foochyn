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
        <link href="./fonts/Quicksand/fonts.css" rel="stylesheet">
        <link rel="stylesheet" href="./vendors/remixicon/remixicon.css">
        <link href="./vendors/remixicon/remixicon.css" rel="stylesheet">
        <style>
            .more::after {
                content: none;
            }

            .more.active {
                display: none;
            }
        </style>
    </head>

    <body>
        <?php include 'header.php';?>

        <section class="py-2 txt-center">
            <img src="./images/Ad1.jpg" alt="">
        </section>

        <section class="py-2 container grid">
            <div class="column w-5">
                <form class="bg-white p-1rem is-round italic" nosubmit>
                    <div class="menu">
                        <button class="btn is-unstyle is-block txt-left py-7px">Date And Meal Period</button>
                        <input type="date" class="input" value="2020-01-08">
                        <select class="input my-7px">
                            <option>Midnight</option>
                            <option>Breakfast</option>
                            <option>Lunch</option>
                            <option>High Tea</option>
                            <option>Dinner</option>
                        </select> </div>

                    <div class="menu">
                        <button class="menu-trigger active btn is-unstyle is-block py-7px">DEAL TYPE</button>
                        <div>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Prime Exclusive</span> </label>
                        </div>
                    </div>
                    <div class="menu">
                        <button class="menu-trigger active btn is-unstyle is-block py-7px">DISCOUNTED</button>
                        <div>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Prepaid Deals</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">15% Discount</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">25% Discount</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">20% Discount</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">10% Discount</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Mindblowing 50% Discount</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Free Beverages</span></label>
                            <button class="menu-trigger btn is-unstyle is-block clr-primary more">+9 more</button>
                            <div>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Free Cocktail or Mocktail</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">30% Discount</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Free Dessert</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Happy Hours</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Free Glass of Wine</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Free Appetizer</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Free Beer</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Other Offers</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">40% Discount</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Extra 200 EazyPoints </span> </label>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <button class="menu-trigger btn is-unstyle is-block py-7px active">CUISINES</button>
                        <div>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">North Indian</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Chinese</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Modern Indian</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Italian</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Cafe</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Pan Asian</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">South Indian</span></label>
                            <button class="menu-trigger btn is-unstyle is-block clr-primary more">+11 more</button>
                            <div>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Fast Food</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Finger Food</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Fusion</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Indian</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Mughlai</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">European</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Lebanese</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Greek</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Bengali</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Gujarati</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Goan</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Multicuisine</span></label>
                            </div>
                        </div>
                    </div>

                    <div class="menu">
                        <button class="menu-trigger btn is-unstyle is-block py-7px">CATEGORIES</button>
                        <div>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Casual Dining</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Luxury Dining</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Hotel Dining</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Bar/Pub</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Sweet Shop</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Cafe/Bakery</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Delivery Only</span></label>
                            <button class="menu-trigger btn is-unstyle is-block clr-primary more">+1 more</button>
                            <div>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Takeaway</span></label>
                                <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Other</span></label>
                            </div>
                        </div>
                    </div>

                    <div class="menu">
                        <button class="menu-trigger btn is-unstyle is-block py-7px">MEAL TYPES</button>
                        <div>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Set Menu</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">A`la carte</span></label>
                            <label class="control w-24 my-2"> <input class="checkbox" type="checkbox"> <span class="label">Buffet</span></label>
                        </div>
                    </div>

                </form>
            </div>
            <div class="column w-19">
                <div class="flex justify-between align-middle mb-7px">
                    <h5>Book Best Restaurants in Powai</h5>
                    <div class="input px-1rem py-0 inline-flex align-middle w-auto event-none">
                        <span class="clr-disabled">Sort By </span>
                        <select class="input is-unstyle w-auto event-auto">
                            <option>Popularity</option>
                            <option>Critic Rating</option>
                            <option>Cost Low to High</option>
                            <option>Cost High to Low</option>
                        </select>
                    </div>
                </div>

                <section class="grid">
                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>

                    <div class="column w-8">
                        <div class="bg-white p-7px">
                            <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                                <i style="right: 1rem;" class="absolute clr-body ri-heart-fill ri-2x"></i>
                                <i style="right: 1rem;" class="absolute clr-white ri-heart-line ri-2x"></i>
                            </div>
                            <h5 class="my-7px">Ceciches Ceciches</h5>
                            <div class="flex align-middle">
                                <ul class="list is-inline mb-0">
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-fill icon is-lg"></li>
                                    <li class="mr-0 ri-star-line icon is-lg"></li>
                                </ul>
                                <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                            </div>
                            <div class="clr-disabled">South Padre Island, TX</div>
                        </div>
                    </div>
                </section>

                <div class="flex justify-center mt-1rem">
                    <button class="btn is-out bg-white is-primary inline-flex"><span class="icon is-lg"><i class="ri-arrow-left-s-fill"></i></span></button>
                    <div class="group mx-7px">
                        <button class="btn is-out bg-white is-primary">1</button>
                        <button class="btn is-out bg-white is-primary">2</button>
                        <button class="btn is-out bg-white is-primary">3</button>
                        <button class="btn is-out bg-white is-primary">4</button>
                        <button class="btn is-out bg-white is-primary">5</button>
                        <button class="btn is-out bg-white is-primary">6</button>
                        <button class="btn is-out bg-white is-primary">7</button>
                        <button class="btn is-out bg-white is-primary">8</button>
                        <button class="btn is-out bg-white is-primary">9</button>
                        <button class="btn is-out bg-white is-primary">10</button>
                    </div>
                    <button class="btn is-out bg-white is-primary inline-flex"><span class="icon is-lg"><i class="ri-arrow-right-s-fill"></i></span></button>
                </div>

            </div>
        </section>

        <?php include 'footer.php';?>
    </body>
    <script src="./js/base.js"></script>

</html>