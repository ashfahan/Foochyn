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
                        <fieldset class="column flex-grow rating">
                            <span class="mr-4 txt-super font-bold bg-primary p-7px clr-white triangle-left float-right">Click to rate</span><input type="radio" id="star5" name="rating" value="5"><label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="overallrating_4half" name="overallrating" value="4 and a half"><label class="half" for="overallrating_4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="overallrating_4" name="overallrating" value="4"><label class="full" for="overallrating_4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="overallrating_3half" name="overallrating" value="3 and a half"><label class="half" for="overallrating_3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="overallrating_3" name="overallrating" value="3"><label class="full" for="overallrating_3" title="Meh - 3 stars"></label>
                            <input type="radio" id="overallrating_2half" name="overallrating" value="2 and a half"><label class="half" for="overallrating_2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="overallrating_2" name="overallrating" value="2"><label class="full" for="overallrating_2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="overallrating_1half" name="overallrating" value="1 and a half"><label class="half" for="overallrating_1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="overallrating_1" name="overallrating" value="1"><label class="full" for="overallrating_1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="overallrating_half" name="overallrating" value="half"><label class="half" for="overallrating_half" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
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
                    <select class="input choices">
                        <option value="" hidden selected>Select one</option>
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
                    <select class="input choices">
                        <option value="" hidden selected>Select one</option>
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
                        <fieldset class="column flex-grow rating">
                            <span class="mr-4 txt-super font-bold bg-primary p-7px clr-white triangle-left float-right">Click to rate</span><input type="radio" id="star5" name="rating" value="5"><label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="service_4half" name="Service" value="4 and a half"><label class="half" for="service_4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="service_4" name="Service" value="4"><label class="full" for="service_4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="service_3half" name="Service" value="3 and a half"><label class="half" for="service_3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="service_3" name="Service" value="3"><label class="full" for="service_3" title="Meh - 3 stars"></label>
                            <input type="radio" id="service_2half" name="Service" value="2 and a half"><label class="half" for="service_2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="service_2" name="Service" value="2"><label class="full" for="service_2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="service_1half" name="Service" value="1 and a half"><label class="half" for="service_1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="service_1" name="Service" value="1"><label class="full" for="service_1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="service_half" name="Service" value="half"><label class="half" for="service_half" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <div class="grid align-middle pl-1rem my-1rem">
                        <div class="column">Food</div>
                        <fieldset class="column flex-grow rating">
                            <span class="mr-4 txt-super font-bold bg-primary p-7px clr-white triangle-left float-right">Click to rate</span><input type="radio" id="star5" name="rating" value="5"><label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="food_4half" name="food" value="4 and a half"><label class="half" for="food_4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="food_4" name="food" value="4"><label class="full" for="food_4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="food_3half" name="food" value="3 and a half"><label class="half" for="food_3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="food_3" name="food" value="3"><label class="full" for="food_3" title="Meh - 3 stars"></label>
                            <input type="radio" id="food_2half" name="food" value="2 and a half"><label class="half" for="food_2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="food_2" name="food" value="2"><label class="full" for="food_2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="food_1half" name="food" value="1 and a half"><label class="half" for="food_1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="food_1" name="food" value="1"><label class="full" for="food_1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="food_half" name="food" value="half"><label class="half" for="food_half" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <div class="grid align-middle pl-1rem my-1rem">
                        <div class="column">Value</div>
                        <fieldset class="column flex-grow rating">
                            <span class="mr-4 txt-super font-bold bg-primary p-7px clr-white triangle-left float-right">Click to rate</span><input type="radio" id="star5" name="rating" value="5"><label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="value_4half" name="value" value="4 and a half"><label class="half" for="value_4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="value_4" name="value" value="4"><label class="full" for="value_4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="value_3half" name="value" value="3 and a half"><label class="half" for="value_3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="value_3" name="value" value="3"><label class="full" for="value_3" title="Meh - 3 stars"></label>
                            <input type="radio" id="value_2half" name="value" value="2 and a half"><label class="half" for="value_2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="value_2" name="value" value="2"><label class="full" for="value_2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="value_1half" name="value" value="1 and a half"><label class="half" for="value_1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="value_1" name="value" value="1"><label class="full" for="value_1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="value_half" name="value" value="half"><label class="half" for="value_half" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
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