<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="description" content="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum perspiciatis rem praesentium eaque mollitia minima corporis fugit accusantium voluptas ducimus vero itaque voluptatibus maiores laboriosam, dolor id esse. Est, odit?" />
        <title>FOoChyn</title>
        <link type="image/png" href="images/favicon.png" rel="icon" />
        <link href="index.html" rel="canonical" />
    </head>

    <body>
        <?php include 'header.php';?>

        <section class="pt-8 pb-6 img-bg txt-center clr-white Quicksand" style="background-image: linear-gradient(to bottom, hsla(0, 0%, 0%, 0.5), #000000d9), url('./images/index/background.jpg');">
            <h1>Explore <span>Chakwal</span></h1>
            <div>Let's uncover the best places to eat, drink and shop nearest to you</div>
            <div class="bg-white-25 mx-auto w-15 p-1rem my-4 flex">
                <div class="group flex-grow mr-1rem">
                    <label class="control w-16 has-icon-left">
                        <input class="input is-dark p-7px border-none" type="text" style="padding-left: 4.5em !important" placeholder="E.g: Food, Service, Barber, Hotel" />
                        <div class="icon is-left font-bold o-100" style="left:1.6em !important">What</div>
                    </label>
                    <label class="control has-icon-left border-left">
                        <select class="input choices clr-disabled is-dark p-7px border-none" style="padding-left: 4.5em !important">
                            <option value="" hidden>City</option>
                            <optgroup class="clr-body" label="City 1">
                                <option>Area 1</option>
                                <option>Area 2</option>
                                <option>Area 3</option>
                                <option>Area 4</option>
                                <option>Area 5</option>
                            </optgroup>

                            <optgroup class="clr-body" label="City 2">
                                <option>Area 6</option>
                                <option>Area 7</option>
                                <option>Area 8</option>
                                <option>Area 9</option>
                                <option>Area 10</option>
                                <option>Area 11</option>
                            </optgroup>
                        </select>

                        <div class="clr-body icon is-left font-bold o-100" style="left:1.6em !important">Where</div>
                    </label>
                </div>
                <button class="btn is-sld is-primary flex px-2 font-bold"><i class="icon ri-search-line mr-6"></i>Search</button>
            </div>
            <div class="flex justify-center">
                <div class="mr-1rem">
                    <div>Just looking around ? Let us suggest you</div>
                    <div>Something hot & happeining !</div>
                </div>
                <div>
                    <img src="./images/banner-arrow.png" />
                </div>
            </div>
        </section>

        <section class="p-2 pt-6 grid has-gap-lg txt-center container">
            <div class="column">
                <div class="relative border p-4 pt-10">
                    <div class="absolute top-0 left-50 flex" style="transform: translate(-50%,-50%);">
                        <div class="border is-circle icon bg-primary clr-white" style="padding: 1.25rem;"><i class="ri-home-5-line"></i></div>
                        <div class="border is-circle icon bg-primary ri-2x clr-white mx--6" style="padding: 1.75rem;"><i class="ri-home-5-line"></i></div>
                        <div class="border is-circle icon bg-primary clr-white z--10" style="padding: 1.25rem;"><i class="ri-home-5-line"></i></div>
                    </div>
                    <h3 class="clr-primary">Find the best places to eat</h3>
                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas molestiae error eos</div>
                </div>
            </div>
            <div class="column">
                <div class="relative border p-4 pt-10">
                    <div class="absolute top-0 left-50 flex" style="transform: translate(-50%,-50%);">
                        <div class="border is-circle icon bg-primary clr-white" style="padding: 1.25rem;"><i class="ri-home-5-line"></i></div>
                        <div class="border is-circle icon bg-primary ri-2x clr-white mx--6" style="padding: 1.75rem;"><i class="ri-home-5-line"></i></div>
                        <div class="border is-circle icon bg-primary clr-white z--10" style="padding: 1.25rem;"><i class="ri-home-5-line"></i></div>
                    </div>
                    <h3 class="clr-primary">See the latest reviews</h3>
                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas molestiae error eos</div>
                </div>
            </div>
            <div class="column">
                <div class="relative border p-4 pt-10">
                    <div class="absolute top-0 left-50 flex" style="transform: translate(-50%,-50%);">
                        <div class="border is-circle icon bg-primary clr-white" style="padding: 1.25rem;"><i class="ri-home-5-line"></i></div>
                        <div class="border is-circle icon bg-primary ri-2x clr-white mx--6" style="padding: 1.75rem;"><i class="ri-home-5-line"></i></div>
                        <div class="border is-circle icon bg-primary clr-white z--10" style="padding: 1.25rem;"><i class="ri-home-5-line"></i></div>
                    </div>
                    <h3 class="clr-primary">Reserve a table</h3>
                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas molestiae error eos</div>
                </div>
            </div>
        </section>

        <section class="p-2 container">
            <div class="flex">
                <h5>Newly added resturants in <span>Chakwal</span></h5>
                <span class="mx-7px">|</span>
                <a href="#">See all</a>
            </div>
            <div class="grid has-gap-lg">
                <div class="column w-6">
                    <div class="bg-white p-7px">
                        <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/4.webp');">
                            <i class="absolute clr-body ri-heart-fill ri-2x" style="right: 1rem;"></i>
                            <i class="absolute clr-white ri-heart-line ri-2x" style="right: 1rem;"></i>
                        </div>
                        <h5 class="my-7px">Ceciches Ceciches</h5>
                        <div class="clr-disabled">South Padre Island, TX</div>
                        <div class="clr-disabled"><span>1000-5000</span> PKR Approx for 2 Person | <span>Barbecue, Chinese , Fase Food , North Indian</span></div>
                        <div class="flex align-middle">
                            <ul class="list is-inline mb-0 clr-valid">
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-line icon is-lg"></li>
                            </ul>
                            <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                        </div>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="bg-white p-7px">
                        <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/3.webp');">
                            <i class="absolute clr-body ri-heart-fill ri-2x" style="right: 1rem;"></i>
                            <i class="absolute clr-white ri-heart-line ri-2x" style="right: 1rem;"></i>
                        </div>
                        <h5 class="my-7px">Ceciches Ceciches</h5>
                        <div class="clr-disabled">South Padre Island, TX</div>
                        <div class="clr-disabled"><span>1000-5000</span> PKR Approx for 2 Person | <span>Barbecue, Chinese , Fase Food , North Indian</span></div>
                        <div class="flex align-middle">
                            <ul class="list is-inline mb-0 clr-valid">
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-line icon is-lg"></li>
                            </ul>
                            <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                        </div>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="bg-white p-7px">
                        <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/2.webp');">
                            <i class="absolute clr-body ri-heart-fill ri-2x" style="right: 1rem;"></i>
                            <i class="absolute clr-white ri-heart-line ri-2x" style="right: 1rem;"></i>
                        </div>
                        <h5 class="my-7px">Ceciches Ceciches</h5>
                        <div class="clr-disabled">South Padre Island, TX</div>
                        <div class="clr-disabled"><span>1000-5000</span> PKR Approx for 2 Person | <span>Barbecue, Chinese , Fase Food , North Indian</span></div>
                        <div class="flex align-middle">
                            <ul class="list is-inline mb-0 clr-valid">
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-line icon is-lg"></li>
                            </ul>
                            <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                        </div>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="bg-white p-7px">
                        <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                            <i class="absolute clr-body ri-heart-fill ri-2x" style="right: 1rem;"></i>
                            <i class="absolute clr-white ri-heart-line ri-2x" style="right: 1rem;"></i>
                        </div>
                        <h5 class="my-7px">Ceciches Ceciches</h5>
                        <div class="clr-disabled">South Padre Island, TX</div>
                        <div class="clr-disabled"><span>1000-5000</span> PKR Approx for 2 Person | <span>Barbecue, Chinese , Fase Food , North Indian</span></div>
                        <div class="flex align-middle">
                            <ul class="list is-inline mb-0 clr-valid">
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-line icon is-lg"></li>
                            </ul>
                            <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-2 container">
            <div class="flex">
                <h5>Popular cuisines in <span>Chakwal</span></h5>
                <span class="mx-7px">|</span>
                <a href="#">See all</a>
            </div>
            <div class="grid has-gap-lg">
                <div class="column w-6">
                    <div class="bg-orange clr-white grid p-6 is-round overflow-hidden relative card-zoom align-middle">
                        <div class="w-6"><img class="img" src="./images/foodtype/casual-eclectic.webp" /></div>
                        <div class="w-18">
                            <div>South Indian</div>
                            <div>648 Restaurants</div>
                        </div>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="bg-volcano clr-white grid p-6 is-round overflow-hidden relative card-zoom align-middle">
                        <div class="w-6"><img class="img" src="./images/foodtype/chinese.webp" /></div>
                        <div class="w-18">
                            <div>North Indian</div>
                            <div>562 Restaurants</div>
                        </div>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="bg-primary clr-white grid p-6 is-round overflow-hidden relative card-zoom align-middle">
                        <div class="w-6"><img class="img" src="./images/foodtype/european.webp" /></div>
                        <div class="w-18">
                            <div>Chinese</div>
                            <div>267 Restaurants</div>
                        </div>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="bg-valid clr-white grid p-6 is-round overflow-hidden relative card-zoom align-middle">
                        <div class="w-6"><img class="img" src="./images/foodtype/italian.webp" /></div>
                        <div class="w-18">
                            <div>Italian</div>
                            <div>94 Restaurants</div>
                        </div>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="bg-vividvoilet clr-white grid p-6 is-round overflow-hidden relative card-zoom align-middle">
                        <div class="w-6"><img class="img" src="./images/foodtype/japanese.webp" /></div>
                        <div class="w-18">
                            <div>European</div>
                            <div>52 Restaurants</div>
                        </div>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="bg-info clr-white grid p-6 is-round overflow-hidden relative card-zoom align-middle">
                        <div class="w-6"><img class="img" src="./images/foodtype/northindian.webp" /></div>
                        <div class="w-18">
                            <div>Pan Asian</div>
                            <div>39 Restaurants</div>
                        </div>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="bg-vividvoilet clr-white grid p-6 is-round overflow-hidden relative card-zoom align-middle">
                        <div class="w-6"><img class="img" src="./images/foodtype/pan-asian.webp" /></div>
                        <div class="w-18">
                            <div>Japanese</div>
                            <div>18 Restaurants</div>
                        </div>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="bg-orange clr-white grid p-6 is-round overflow-hidden relative card-zoom align-middle">
                        <div class="w-6"><img class="img" src="./images/foodtype/south-indian.webp" /></div>
                        <div class="w-18">
                            <div>Casual Eclectic</div>
                            <div>9 Restaurants</div>
                        </div>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-2 container">
            <div class="flex">
                <h5>Popular resturants in <span>Chakwal</span></h5>
                <span class="mx-7px">|</span>
                <a href="#">See all</a>
            </div>
            <div class="grid has-gap-lg">
                <div class="column w-6">
                    <div class="bg-white p-7px">
                        <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/1.webp');">
                            <i class="absolute clr-body ri-heart-fill ri-2x" style="right: 1rem;"></i>
                            <i class="absolute clr-white ri-heart-line ri-2x" style="right: 1rem;"></i>
                        </div>
                        <h5 class="my-7px">Ceciches Ceciches</h5>
                        <div class="clr-disabled">South Padre Island, TX</div>
                        <div class="clr-disabled"><span>1000-5000</span> PKR Approx for 2 Person | <span>Barbecue, Chinese , Fase Food , North Indian</span></div>
                        <div class="flex align-middle">
                            <ul class="list is-inline mb-0 clr-valid">
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-line icon is-lg"></li>
                            </ul>
                            <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                        </div>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="bg-white p-7px">
                        <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/2.webp');">
                            <i class="absolute clr-body ri-heart-fill ri-2x" style="right: 1rem;"></i>
                            <i class="absolute clr-white ri-heart-line ri-2x" style="right: 1rem;"></i>
                        </div>
                        <h5 class="my-7px">Ceciches Ceciches</h5>
                        <div class="clr-disabled">South Padre Island, TX</div>
                        <div class="clr-disabled"><span>1000-5000</span> PKR Approx for 2 Person | <span>Barbecue, Chinese , Fase Food , North Indian</span></div>
                        <div class="flex align-middle">
                            <ul class="list is-inline mb-0 clr-valid">
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-line icon is-lg"></li>
                            </ul>
                            <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                        </div>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="bg-white p-7px">
                        <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/3.webp');">
                            <i class="absolute clr-body ri-heart-fill ri-2x" style="right: 1rem;"></i>
                            <i class="absolute clr-white ri-heart-line ri-2x" style="right: 1rem;"></i>
                        </div>
                        <h5 class="my-7px">Ceciches Ceciches</h5>
                        <div class="clr-disabled">South Padre Island, TX</div>
                        <div class="clr-disabled"><span>1000-5000</span> PKR Approx for 2 Person | <span>Barbecue, Chinese , Fase Food , North Indian</span></div>
                        <div class="flex align-middle">
                            <ul class="list is-inline mb-0 clr-valid">
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-line icon is-lg"></li>
                            </ul>
                            <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                        </div>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="bg-white p-7px">
                        <div class="img-bg is-round-sm txt-right relative" style="min-height:200px; background-image: url('./images/resturant/4.webp');">
                            <i class="absolute clr-body ri-heart-fill ri-2x" style="right: 1rem;"></i>
                            <i class="absolute clr-white ri-heart-line ri-2x" style="right: 1rem;"></i>
                        </div>
                        <h5 class="my-7px">Ceciches Ceciches</h5>
                        <div class="clr-disabled">South Padre Island, TX</div>
                        <div class="clr-disabled"><span>1000-5000</span> PKR Approx for 2 Person | <span>Barbecue, Chinese , Fase Food , North Indian</span></div>
                        <div class="flex align-middle">
                            <ul class="list is-inline mb-0 clr-valid">
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-fill icon is-lg"></li>
                                <li class="txt-baseline mr-0 ri-star-line icon is-lg"></li>
                            </ul>
                            <div class="ml-7px inline txt-baseline clr-disabled">500 reviews</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-2 container">
            <div class="flex">
                <h5>Popular location in <span>Chakwal</span></h5>
                <span class="mx-7px">|</span>
                <a href="#">See all</a>
            </div>
            <div class="grid has-gap-lg">
                <div class="column w-6">
                    <div class="img-bg clr-white txt-center p-6 is-round overflow-hidden relative card-zoom align-middle" style="background-image: linear-gradient(to bottom, hsla(0, 0%, 0%, 0.5), #000000d9), url('./images/resturant/1.webp');">
                        <h5>South Indian</h5>
                        <div>648 Restaurants</div>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="img-bg clr-white txt-center p-6 is-round overflow-hidden relative card-zoom align-middle" style="background-image: linear-gradient(to bottom, hsla(0, 0%, 0%, 0.5), #000000d9), url('./images/resturant/2.webp');">
                        <h5>North Indian</h5>
                        <div>562 Restaurants</div>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="img-bg clr-white txt-center p-6 is-round overflow-hidden relative card-zoom align-middle" style="background-image: linear-gradient(to bottom, hsla(0, 0%, 0%, 0.5), #000000d9), url('./images/resturant/3.webp');">
                        <h5>Chinese</h5>
                        <div>267 Restaurants</div>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
                <div class="column w-6">
                    <div class="img-bg clr-white txt-center p-6 is-round overflow-hidden relative card-zoom align-middle" style="background-image: linear-gradient(to bottom, hsla(0, 0%, 0%, 0.5), #000000d9), url('./images/resturant/4.webp');">
                        <h5>Italian</h5>
                        <div>94 Restaurants</div>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="p-2 container">
            <div class="flex">
                <h5>Featured Areas in <span>Chakwal</span></h5>
                <span class="mx-7px">|</span>
                <a href="#">See all</a>
            </div>
            <div class="grid has-gap-lg">
                <div class="column w-8">
                    <div class="relative img-bg bg-dark clr-white flex is-y align-middle justify-center" style="padding: 70px;background-image: linear-gradient(to bottom, hsla(0, 0%, 0%, 0.4), hsla(0, 0%, 0%,  0.4)), url('./images/location/1.jpg');">
                        <h5>Islamabad</h5>
                        <h6 class="font-normal">11,818 restaurants</h6>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
                <div class="column w-8">
                    <div class="relative img-bg bg-dark clr-white flex is-y align-middle justify-center" style="padding: 70px;background-image: linear-gradient(to bottom, hsla(0, 0%, 0%, 0.4), hsla(0, 0%, 0%,  0.4)), url('./images/location/2.jpg');">
                        <h5>Karachi</h5>
                        <h6 class="font-normal">4,167 restaurants</h6>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
                <div class="column w-8">
                    <div class="relative img-bg bg-dark clr-white flex is-y align-middle justify-center" style="padding: 70px;background-image: linear-gradient(to bottom, hsla(0, 0%, 0%, 0.4), hsla(0, 0%, 0%,  0.4)), url('./images/location/3.jpg');">
                        <h5>Lahore</h5>
                        <h6 class="font-normal">3,058 restaurants</h6>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
                <div class="column w-8">
                    <div class="relative img-bg bg-dark clr-white flex is-y align-middle justify-center" style="padding: 70px;background-image: linear-gradient(to bottom, hsla(0, 0%, 0%, 0.4), hsla(0, 0%, 0%,  0.4)), url('./images/location/4.jpg');">
                        <h5>Rawalpindi</h5>
                        <h6 class="font-normal">2,356 restaurants</h6>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
                <div class="column w-8">
                    <div class="relative img-bg bg-dark clr-white flex is-y align-middle justify-center" style="padding: 70px;background-image: linear-gradient(to bottom, hsla(0, 0%, 0%, 0.4), hsla(0, 0%, 0%,  0.4)), url('./images/location/5.jpg');">
                        <h5>Peshawar</h5>
                        <h6 class="font-normal">1,910 restaurants</h6>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
                <div class="column w-8">
                    <div class="relative img-bg bg-dark clr-white flex is-y align-middle justify-center" style="padding: 70px;background-image: linear-gradient(to bottom, hsla(0, 0%, 0%, 0.4), hsla(0, 0%, 0%,  0.4)), url('./images/location/6.jpg');">
                        <h5>Multan</h5>
                        <h6 class="font-normal">860 restaurants</h6>
                        <a class="absolute top-0 left-0 right-0 bottom-0 z-100" href="#"></a>
                    </div>
                </div>
            </div>
        </section> -->

        <?php include 'footer.php';?>
    </body>

</html>