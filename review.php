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

        <main class="container lyt-main grid has-gap-lg my-2">
            <div class="column w-15">
                <section class="grid align-middle">
                    <div class="column w-auto">
                        <div class="img-bg border" style="height: 150px;width: 150px;background-image: url('./images/resturant/Poolside/1.webp');"></div>
                    </div>
                    <div class="column">
                        <h5>Grapevine Cafe & Coffeehouse</h5>
                        <div>100 E Swordfish St, South Padre Island, TX 78597-6975</div>
                    </div>
                </section>
                <section class="my-4">
                    <h5> Your first-hand experiences really help other travelers. Thanks! </h5>
                    <hr>
                    <div class="flex align-middle justify-between">
                        <h6 class="column">Your overall rating of this restaurant</h6>
                        <div class="column flex align-middle justify-end">
                            <div class="mr-7px ri-star-line ri-2x"></div>
                            <div class="mr-7px ri-star-line ri-2x"></div>
                            <div class="mr-7px ri-star-line ri-2x"></div>
                            <div class="mr-7px ri-star-line ri-2x"></div>
                            <div class="mr-7px ri-star-line ri-2x"></div>
                            <div class="mr-4 txt-super font-bold bg-primary p-7px clr-white triangle-left">Click to rate</div>
                        </div>
                </section>
                <section class="my-4">
                    <h6>Title of your review</h6>
                    <input type="text" placeholder="Summarize your visit or highlight an interesting detail" class="input">
                </section>
                <section class="my-4">
                    <h6>Your review</h6>
                    <textarea class="input" rows="5"></textarea>
                </section>
                <section class="my-4">
                    <h6>What sort of visit was this?</h6>
                    <ul class="list is-inline">
                        <li><label class="control"><input type="radio" class="radio" name="visitt_type"> <span class="label">Couples</span></label></li>
                        <li><label class="control"><input type="radio" class="radio" name="visitt_type"> <span class="label">Family</span></label></li>
                        <li><label class="control"><input type="radio" class="radio" name="visitt_type"> <span class="label">Friends</span></label></li>
                        <li><label class="control"><input type="radio" class="radio" name="visitt_type"> <span class="label">Business</span></label></li>
                        <li><label class="control"><input type="radio" class="radio" name="visitt_type"> <span class="label">Solo</span></label></li>
                    </ul>
                </section>
                <section class="my-4">
                    <h6>When did you visit?</h6>
                    <select class="input CHOICES">
                        <option hidden selected>Select one</option>
                        <option value="Breakfast">Breakfast</option>
                        <option value="Brunch">Brunch</option>
                        <option value="Lunch">Lunch</option>
                        <option value="Dinner">Dinner</option>
                        <option value="Dessert">Dessert</option>
                        <option value="Coffee or tea">Coffee or tea</option>
                        <option value="Snacks">Snacks</option>
                        <option value="Drinks">Drinks</option>
                        <option value="Late night food">Late night food</option>
                        <option value="Other">Other</option>
                    </select>
                </section>
                <section class="my-4">
                    <h6>When did you visit?</h6>
                    <select class="input CHOICES">
                        <option hidden selected>Select one</option>
                        <option name="trip_date_month_year" value="1,2020">January 2020</option>
                        <option name="trip_date_month_year" value="2,2020">February 2020</option>
                        <option name="trip_date_month_year" value="3,2020">March 2020</option>
                        <option name="trip_date_month_year" value="4,2020">April 2020</option>
                        <option name="trip_date_month_year" value="5,2020">May 2020</option>
                        <option name="trip_date_month_year" value="6,2020">June 2020</option>
                        <option name="trip_date_month_year" value="7,2020">July 2020</option>
                        <option name="trip_date_month_year" value="8,2020">August 2020</option>
                        <option name="trip_date_month_year" value="9,2020">September 2020</option>
                        <option name="trip_date_month_year" value="10,2020">October 2020</option>
                        <option name="trip_date_month_year" value="11,2020">November 2020</option>
                        <option name="trip_date_month_year" value="12,2020">December 2020</option>
                    </select>
                </section>
                <section class="my-4">
                    <h6>Could you say a little more about it? (optional)</h6>
                    <hr>
                    <div class="grid pl-1rem">
                        <div class="column">Does this restaurant primarily serve <span class="font-bold clr-primary">Healthy</span> cuisine?</div>
                        <ul class="list is-inline column">
                            <li><label class="control"><input type="radio" class="radio" name="Healthy"> <span class="label">Yes</span></label></li>
                            <li><label class="control"><input type="radio" class="radio" name="Healthy"> <span class="label">No</span></label></li>
                            <li><label class="control"><input type="radio" class="radio" name="Healthy"> <span class="label">Not Sure</span></label></li>
                        </ul>
                    </div>
                    <div class="grid pl-1rem">
                        <div class="column">Is this restaurant <span class="font-bold clr-primary">family-friendly</span>?</div>
                        <ul class="list is-inline column">
                            <li><label class="control"><input type="radio" class="radio" name="family_friendly"> <span class="label">Yes</span></label></li>
                            <li><label class="control"><input type="radio" class="radio" name="family_friendly"> <span class="label">No</span></label></li>
                            <li><label class="control"><input type="radio" class="radio" name="family_friendly"> <span class="label">Not Sure</span></label></li>
                        </ul>
                    </div>
                    <div class="grid pl-1rem">
                        <div class="column">Is this restaurant good for <span class="font-bold clr-primary">local cuisine</span>?</div>
                        <ul class="list is-inline column">
                            <li><label class="control"><input type="radio" class="radio" name="local_cuisine"> <span class="label">Yes</span></label></li>
                            <li><label class="control"><input type="radio" class="radio" name="local_cuisine"> <span class="label">No</span></label></li>
                            <li><label class="control"><input type="radio" class="radio" name="local_cuisine"> <span class="label">Not Sure</span></label></li>
                        </ul>
                    </div>
                    <div class="grid pl-1rem">
                        <div class="column">Does this restaurant offer table service?</div>
                        <ul class="list is-inline column">
                            <li><label class="control"><input type="radio" class="radio" name="table_service"> <span class="label">Yes</span></label></li>
                            <li><label class="control"><input type="radio" class="radio" name="table_service"> <span class="label">No</span></label></li>
                            <li><label class="control"><input type="radio" class="radio" name="table_service"> <span class="label">Not Sure</span></label></li>
                        </ul>
                    </div>
                    <div class="grid pl-1rem">
                        <div class="column">Does this restaurant have <span class="font-bold clr-primary">tables with seating</span>?</div>
                        <ul class="list is-inline column">
                            <li><label class="control"><input type="radio" class="radio" name="tables_with_seating"> <span class="label">Yes</span></label></li>
                            <li><label class="control"><input type="radio" class="radio" name="tables_with_seating"> <span class="label">No</span></label></li>
                            <li><label class="control"><input type="radio" class="radio" name="tables_with_seating"> <span class="label">Not Sure</span></label></li>
                        </ul>
                    </div>
                    <div class="grid pl-1rem">
                        <div class="column">Does this restaurant have a <span class="font-bold clr-primary">TV</span>?</div>
                        <ul class="list is-inline column">
                            <li><label class="control"><input type="radio" class="radio" name="TV"> <span class="label">Yes</span></label></li>
                            <li><label class="control"><input type="radio" class="radio" name="TV"> <span class="label">No</span></label></li>
                            <li><label class="control"><input type="radio" class="radio" name="TV"> <span class="label">Not Sure</span></label></li>
                        </ul>
                    </div>
                </section>
                <section class="my-4">
                    <h6>Click to select a rating</h6>
                    <hr>
                    <div class="grid align-middle pl-1rem my-1rem">
                        <div class="column">Service</div>
                        <div class="flex align-middle">
                            <div><i class="ri-star-line ri-2x"></i></div>
                            <div><i class="ri-star-line ri-2x"></i></div>
                            <div><i class="ri-star-line ri-2x"></i></div>
                            <div><i class="ri-star-line ri-2x"></i></div>
                            <div><i class="ri-star-line ri-2x"></i></div>
                        </div>
                        <div class="font-bold bg-primary p-7px clr-white triangle-left">Click to rate</div>
                    </div>
                    <div class="grid align-middle pl-1rem my-1rem">
                        <div class="column">Food</div>
                        <div class="flex align-middle">
                            <div><i class="ri-star-line ri-2x"></i></div>
                            <div><i class="ri-star-line ri-2x"></i></div>
                            <div><i class="ri-star-line ri-2x"></i></div>
                            <div><i class="ri-star-line ri-2x"></i></div>
                            <div><i class="ri-star-line ri-2x"></i></div>
                        </div>
                        <div class="font-bold bg-primary p-7px clr-white triangle-left">Click to rate</div>
                    </div>
                    <div class="grid align-middle pl-1rem my-1rem">
                        <div class="column">Value</div>
                        <div class="flex align-middle">
                            <div><i class="ri-star-line ri-2x"></i></div>
                            <div><i class="ri-star-line ri-2x"></i></div>
                            <div><i class="ri-star-line ri-2x"></i></div>
                            <div><i class="ri-star-line ri-2x"></i></div>
                            <div><i class="ri-star-line ri-2x"></i></div>
                        </div>
                        <div class="font-bold bg-primary p-7px clr-white triangle-left">Click to rate</div>
                    </div>
                </section>
                <section class="my-4">
                    <h6>How expensive is this restaurant?</h6>
                    <ul class="list is-inline">
                        <li><label class="control"><input type="radio" class="radio" name="visitt_type"> <span class="label">Cheap Eats</span></label></li>
                        <li><label class="control"><input type="radio" class="radio" name="visitt_type"> <span class="label">Mid-range</span></label></li>
                        <li><label class="control"><input type="radio" class="radio" name="visitt_type"> <span class="label">Fine Dining</span></label></li>
                    </ul>
                </section>
                <section class="my-4">
                    <h6>What dish or dishes do you recommend?</h6>
                    <input type="text" placeholder="Summarize your visit or highlight an interesting detail" class="input">
                </section>
                <section class="my-4">
                    <h5>Do you have photos to share? (optional)</h5>
                    <hr>
                    <div></div>
                    <label class="control">
                        <input class="file" type="file" name="" id="">
                        <button class="btn is-sld is-primary font-bold">Add A Photo</button>
                    </label>
                </section>
                <section>
                    <h6>Submit your review</h6>
                    <label class="control flex align-baseline">
                        <input type="checkbox" class="checkbox">
                        <span class="label"></span>
                        <span>I certify that this review is based on my own experience and is my genuine opinion of this restaurant, and that I have no personal or business relationship with this establishment, and have not been offered any incentive or payment originating from the establishment to write this review. I understand that Tripadvisor has a zero-tolerance policy on fake reviews.</span>
                    </label>
                </section>
                <button class="btn is-sld is-primary font-bold mt-4">Submit your review</button>
            </div>
            <div class="column">
                <h5>Recent reviews of this restaurant</h5>
                <blockquote class="blockquote my-1rem">
                    <div class="grid align-middle">
                        <div class="column w-4"><img class="img is-circle" src="./images/profile.jpg" alt=""></div>
                        <div class="column">
                            <div class="font-bold">adsa</div>
                            <div class="flex align-middle">
                                <div class="ri-star-line"></div>
                                <div class="ri-star-line"></div>
                                <div class="ri-star-line"></div>
                                <div class="ri-star-line"></div>
                                <div class="ri-star-line"></div>
                            </div>
                        </div>
                    </div>
                    <div>We love your restaurant..eat there every time my family and I go. So, I took my coworkers with me and everyone was impressed. The food is</div>
                </blockquote>
                <blockquote class="blockquote my-1rem">
                    <div class="grid align-middle">
                        <div class="column w-4"><img class="img is-circle" src="./images/profile.jpg" alt=""></div>
                        <div class="column">
                            <div class="font-bold">adsa</div>
                            <div class="flex align-middle">
                                <div class="ri-star-line"></div>
                                <div class="ri-star-line"></div>
                                <div class="ri-star-line"></div>
                                <div class="ri-star-line"></div>
                                <div class="ri-star-line"></div>
                            </div>
                        </div>
                    </div>
                    <div>We love your restaurant..eat there every time my family and I go. So, I took my coworkers with me and everyone was impressed. The food is</div>
                </blockquote>
                <blockquote class="blockquote my-1rem">
                    <div class="grid align-middle">
                        <div class="column w-4"><img class="img is-circle" src="./images/profile.jpg" alt=""></div>
                        <div class="column">
                            <div class="font-bold">adsa</div>
                            <div class="flex align-middle">
                                <div class="ri-star-line"></div>
                                <div class="ri-star-line"></div>
                                <div class="ri-star-line"></div>
                                <div class="ri-star-line"></div>
                                <div class="ri-star-line"></div>
                            </div>
                        </div>
                    </div>
                    <div>We love your restaurant..eat there every time my family and I go. So, I took my coworkers with me and everyone was impressed. The food is</div>
                </blockquote>
            </div>
        </main>

        <?php include 'footer.php';?>

    </body>

</html>