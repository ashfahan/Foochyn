<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="description" content="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum perspiciatis rem praesentium eaque mollitia minima corporis fugit accusantium voluptas ducimus vero itaque voluptatibus maiores laboriosam, dolor id esse. Est, odit?" />
        <title>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum perspiciatis rem praesentium eaque mollitia minima corporis fugit accusantium voluptas ducimus vero itaque voluptatibus maiores laboriosam, dolor id esse. Est, odit?</title>
        <link type="image/png" href="images/favicon.png" rel="icon" />
        <link href="index.html" rel="canonical" />
        <link href="./scss/temp/fluid.css" rel="stylesheet" />
        <link href="./scss/temp/base.css" rel="stylesheet" />
        <link href="./fonts/Quicksand/fonts.css" rel="stylesheet" />
        <link href="./vendors/remixicon/remixicon.css" rel="stylesheet" />
        <style>
            section {
                box-shadow: 1px 1px 3px 0 rgba(0, 0, 0, 0.075);
            }
        </style>
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

        <main class="container  my-4">
            <section class="p-2 txt-center bg-primary clr-white">
                <h1 class="title is-sm">Popular Cuisines in Mumbai</h1>
                <div>Check out our exclusive Popular Cuisines of Mumbai</div>
            </section>

            <section class="my-4 grid has-gap-lg shadow-none">
                <div class="column w-12">
                    <div class="bg-white is-round grid p-4 pl-0 h-100 align-middle card-hover">
                        <div class="column w-10"><img class="img" src="./images/foodtype/northindian.webp " alt=""></div>
                        <div class="column">
                            <h2 class="mb-0">North Indian</h2>
                            <h5 class="font-normal">3065 restaurants</h5>
                            <p>North Indian cuisine relies heavily on lentils, curries and flatbreads. Though vegetarian dishes are celebrated here, meat and poultry is also favoured.</p>
                            <a href="#">North Indian Restaurants near me</a>
                        </div>
                    </div>
                </div>

                <div class="column w-12">
                    <div class="bg-white is-round grid p-4 pl-0 h-100 align-middle card-hover">
                        <div class="column w-10"><img class="img" src="./images/foodtype/chinese.webp " alt=""></div>
                        <div class="column">
                            <h2 class="mb-0">Chinese</h2>
                            <h5 class="font-normal">1280 restaurants</h5>
                            <p>One of the most popular foreign cuisines in India, Chinese cuisine doesn’t really need an introduction. Be it a Soup or Noodles or any main course dish, the cuisine has been succesful in winning everyones heart.</p>
                            <a href="#">Chinese Restaurants near me</a>
                        </div>
                    </div>
                </div>

                <div class="column w-12">
                    <div class="bg-white is-round grid p-4 pl-0 h-100 align-middle card-hover">
                        <div class="column w-10"><img class="img" src="./images/foodtype/south-indian.webp " alt=""></div>
                        <div class="column">
                            <h2 class="mb-0">South Indian</h2>
                            <h5 class="font-normal">290 restaurants</h5>
                            <p>The cuisine of South India is flavoured by the generous use of curry leaves, tamarind, coconut, vegetables and seafood. It is light yet delicious.</p>
                            <a href="#">South Indian Restaurants near me</a>
                        </div>
                    </div>
                </div>

                <div class="column w-12">
                    <div class="bg-white is-round grid p-4 pl-0 h-100 align-middle card-hover">
                        <div class="column w-10"><img class="img" src="./images/foodtype/italian.webp " alt=""></div>
                        <div class="column">
                            <h2 class="mb-0">Italian</h2>
                            <h5 class="font-normal">279 restaurants</h5>
                            <p>Italian cuisine is the celebration of earthy food of Italy, popularizing iconic dishes like, pasta, pizza, tiramisu, risotto all over the world.</p>
                            <a href="#">Italian Restaurants near me</a>
                        </div>
                    </div>
                </div>

                <div class="column w-12">
                    <div class="bg-white is-round grid p-4 pl-0 h-100 align-middle card-hover">
                        <div class="column w-10"><img class="img" src="./images/foodtype/european.webp " alt=""></div>
                        <div class="column">
                            <h2 class="mb-0">European</h2>
                            <h5 class="font-normal">229 restaurants</h5>
                            <p>European cuisine or Western cuisine covers the cuisine of Europe and encompasses several countries. The cuisine offers a lot of variety and diversity.</p>
                            <a href="#">European Restaurants near me</a>
                        </div>
                    </div>
                </div>

                <div class="column w-12">
                    <div class="bg-white is-round grid p-4 pl-0 h-100 align-middle card-hover">
                        <div class="column w-10"><img class="img" src="./images/foodtype/pan-asian.webp " alt=""></div>
                        <div class="column">
                            <h2 class="mb-0">Pan Asian</h2>
                            <h5 class="font-normal">221 restaurants</h5>
                            <p>Pan Asian is a tag given to the vast ranging cuisines originating from greater continent of Asia including Chinese, Japanese, Thai, Vietnamese and Korean.</p>
                            <a href="#">Pan Asian Restaurants near me</a>
                        </div>
                    </div>
                </div>

                <div class="column w-12">
                    <div class="bg-white is-round grid p-4 pl-0 h-100 align-middle card-hover">
                        <div class="column w-10"><img class="img" src="./images/foodtype/casual-eclectic.webp " alt=""></div>
                        <div class="column">
                            <h2 class="mb-0">Casual Eclectic</h2>
                            <h5 class="font-normal">61 restaurants</h5>
                            <p>The term casual eclectic belongs to no particular cuisine but is used to define food in general that is served in casual cafes or bistros.</p>
                            <a href="#">Casual Eclectic Restaurants near me</a>
                        </div>
                    </div>
                </div>

                <div class="column w-12">
                    <div class="bg-white is-round grid p-4 pl-0 h-100 align-middle card-hover">
                        <div class="column w-10"><img class="img" src="./images/foodtype/mediterranean.webp " alt=""></div>
                        <div class="column">
                            <h2 class="mb-0">Mediterranean</h2>
                            <h5 class="font-normal">49 restaurants</h5>
                            <p>Mediterranean cuisine follows the cooking of Mediterranean Basin region primarily focusing on Southern Europe. Staples are olive oil, bread, pasta, wine.</p>
                            <a href="#">Mediterranean Restaurants near me</a>
                        </div>
                    </div>
                </div>

                <div class="column w-12">
                    <div class="bg-white is-round grid p-4 pl-0 h-100 align-middle card-hover">
                        <div class="column w-10"><img class="img" src="./images/foodtype/japanese.webp " alt=""></div>
                        <div class="column">
                            <h2 class="mb-0">Japanese</h2>
                            <h5 class="font-normal">31 restaurants</h5>
                            <p>Japanese cuisine encompasses the traditional food of Japan, featuring dishes like miso soup, sushi, sashimi, udon noodles and tempura.</p>
                            <a href="#">Japanese Restaurants near me</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="p-2 my-4 txt-center bg-primary clr-white">
                <h1>All Cuisines in Mumbai</h1>
                <div>Check out our exclusive Popular Cuisines of Mumbai</div>
            </section>

            <section class="my-4 grid has-gap-lg shadow-none">
                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">North Indian</h2>
                        <h5 class="font-normal">3065 restaurants</h5>
                        <p>North Indian cuisine relies heavily on lentils, curries and flatbreads. Though vegetarian dishes are celebrated here, meat and poultry is also favoured.</p>
                        <a href="#">North Indian Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Fast Food</h2>
                        <h5 class="font-normal">1804 restaurants</h5>
                        <p>Fast food often refers to the calorie ridden American food like burgers, pizzas and fries. It is quick to make and is high in fat.</p>
                        <a href="#">Fast Food Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Chinese</h2>
                        <h5 class="font-normal">1280 restaurants</h5>
                        <p>One of the most popular foreign cuisines in India, Chinese cuisine doesn’t really need an introduction. Be it a Soup or Noodles or any main course dish, the cuisine has been succesful in winning everyones heart.</p>
                        <a href="#">Chinese Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Multicuisine</h2>
                        <h5 class="font-normal">1111 restaurants</h5>
                        <p>Multicuisine is a type of restaurant that houses various kinds of cuisines on one menu. A diner can feast on several global cuisines under one roof.</p>
                        <a href="#">Multicuisine Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Bakery</h2>
                        <h5 class="font-normal">885 restaurants</h5>
                        <p>The fresh crossiants, pastries, puffs and breads are a delight to everyones taste buds. Devour in these fresh goodies which are a perfect for any time of the day</p>
                        <a href="#">Bakery Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Cafe</h2>
                        <h5 class="font-normal">863 restaurants</h5>
                        <p>Coffee and a great view. These cafes are the perfect place to get lost admist beautiful interiors, soothing music and great food.</p>
                        <a href="#">Cafe Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Ice Cream</h2>
                        <h5 class="font-normal">562 restaurants</h5>
                        <p>By combining cream, sugar and natural flavourings, one get this delicious world famous cold dessert – ice cream. It can be made in several flavours.</p>
                        <a href="#">Ice Cream Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Desserts</h2>
                        <h5 class="font-normal">319 restaurants</h5>
                        <p>Desserts is a wide section that includes all the sweet dishes from all over the world. They can be made from dairy or fruits or nuts or flours.</p>
                        <a href="#">Desserts Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Pizza</h2>
                        <h5 class="font-normal">302 restaurants</h5>
                        <p>Pizza is a traditional Italian delicacy now famous all over the world. It is basically yeast-treated flatbread topped with marinara sauce and other toppings.</p>
                        <a href="#">Pizza Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">South Indian</h2>
                        <h5 class="font-normal">290 restaurants</h5>
                        <p>The cuisine of South India is flavoured by the generous use of curry leaves, tamarind, coconut, vegetables and seafood. It is light yet delicious.</p>
                        <a href="#">South Indian Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Mughlai</h2>
                        <h5 class="font-normal">290 restaurants</h5>
                        <p>Mughlai cuisine is a gift of Mughal era which bought forth iconic dishes like, kebab, qorma, rezala, Mughlai paratha and nargisi kofta.</p>
                        <a href="#">Mughlai Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Italian</h2>
                        <h5 class="font-normal">279 restaurants</h5>
                        <p>Italian cuisine is the celebration of earthy food of Italy, popularizing iconic dishes like, pasta, pizza, tiramisu, risotto all over the world.</p>
                        <a href="#">Italian Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Mithai</h2>
                        <h5 class="font-normal">278 restaurants</h5>
                        <p>Mithai is the Hindi name for Indian sweets and are often made out of milk and dry fruits. No Indian festival is complete without mithai.</p>
                        <a href="#">Mithai Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Street Food</h2>
                        <h5 class="font-normal">244 restaurants</h5>
                        <p>Street food is the term applied to the assorted quick-to-prepare dishes generally available at the roadside food stalls. It is both cheap and delicious.</p>
                        <a href="#">Street Food Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Cocktail Menu</h2>
                        <h5 class="font-normal">232 restaurants</h5>
                        <p>Cocktail menu is a term used to define the food menu served in a bar. The portion of food is kept bite-sized and is usually dominated by appetizers.</p>
                        <a href="#">Cocktail Menu Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">European</h2>
                        <h5 class="font-normal">229 restaurants</h5>
                        <p>European cuisine or Western cuisine covers the cuisine of Europe and encompasses several countries. The cuisine offers a lot of variety and diversity.</p>
                        <a href="#">European Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Pan Asian</h2>
                        <h5 class="font-normal">221 restaurants</h5>
                        <p>Pan Asian is a tag given to the vast ranging cuisines originating from greater continent of Asia including Chinese, Japanese, Thai, Vietnamese and Korean.</p>
                        <a href="#">Pan Asian Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Regional Indian</h2>
                        <h5 class="font-normal">178 restaurants</h5>
                        <p>Regional Indian food is a plethora of various cuisines derived from several different states of India. Each region has its own cuisine, some tangy some sweet.</p>
                        <a href="#">Regional Indian Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Finger Food</h2>
                        <h5 class="font-normal">137 restaurants</h5>
                        <p>Finger food is a term used in reference to bite-sized starters easy to eat with your fingers. It is generally served in parties or bars.</p>
                        <a href="#">Finger Food Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Maharashtrian</h2>
                        <h5 class="font-normal">121 restaurants</h5>
                        <p>Maharashtrian or Marathi cuisine is the regional fare of people of Maharashtra in India. Grains, vegetables and lentils form the staple of the region.</p>
                        <a href="#">Maharashtrian Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Biryani</h2>
                        <h5 class="font-normal">119 restaurants</h5>
                        <p>Traditionally, A South Asian Mixed Rice Dish, Biryani is one of the most famous main course dishes in North India. A major part of Awadhi cuisine, A traditional Biryani is made using Spices, Rice and Meat.</p>
                        <a href="#">Biryani Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Seafood</h2>
                        <h5 class="font-normal">92 restaurants</h5>
                        <p>Seafood is a versatile ingredient and could be made in various styles. From curries to fried to grilled to steamed, seafood can be enjoyed in several forms.</p>
                        <a href="#">Seafood Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">American</h2>
                        <h5 class="font-normal">89 restaurants</h5>
                        <p>American Cuisine or the cuisine of united states is one of the most popular cuisines around the globe. Be it the burgers or the fries or the cheesy and delectable mac and cheese, there is nothing really that the americans have gone wrong with.</p>
                        <a href="#">American Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Beverages</h2>
                        <h5 class="font-normal">73 restaurants</h5>
                        <p>A thirst quencher which not only plays the role of satisying thirst but is also a delight to the tastebuds. Beverages are made in various methods using different ingredients.</p>
                        <a href="#">Beverages Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Indian</h2>
                        <h5 class="font-normal">65 restaurants</h5>
                        <p>Indian food brings out the spicy vibrant side of people of India through its array of curries, rice dishes, flatbreads and sweets.</p>
                        <a href="#">Indian Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Lebanese</h2>
                        <h5 class="font-normal">64 restaurants</h5>
                        <p>Lebanese cuisine is native to Middle East and carries staples like, poultry, grains, dairy and vegetables. Chickpeas is consumed liberally.</p>
                        <a href="#">Lebanese Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Chaat</h2>
                        <h5 class="font-normal">64 restaurants</h5>
                        <p>Chaat is a term describing savoury mouth-watering snacks generally served as appetizers at road-side trucks or food carts in India.</p>
                        <a href="#">Chaat Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Casual Eclectic</h2>
                        <h5 class="font-normal">61 restaurants</h5>
                        <p>The term casual eclectic belongs to no particular cuisine but is used to define food in general that is served in casual cafes or bistros.</p>
                        <a href="#">Casual Eclectic Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Mexican</h2>
                        <h5 class="font-normal">59 restaurants</h5>
                        <p>Mexican cuisine is the mix of Mesoamerican cooking with European and strong imprints of Spanish cooking. Staples are corn, beans, avocado and tomatoes.</p>
                        <a href="#">Mexican Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Mediterranean</h2>
                        <h5 class="font-normal">49 restaurants</h5>
                        <p>Mediterranean cuisine follows the cooking of Mediterranean Basin region primarily focusing on Southern Europe. Staples are olive oil, bread, pasta, wine.</p>
                        <a href="#">Mediterranean Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Healthy Food</h2>
                        <h5 class="font-normal">44 restaurants</h5>
                        <p>Any food that is rich in nutrients but low in fat is counted as healthy food. Nuts, fruits, vegetables, grains, chicken breast, lamb are few calorie-savers.</p>
                        <a href="#">Healthy Food Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Modern Indian</h2>
                        <h5 class="font-normal">43 restaurants</h5>
                        <p>Modern Indian cuisine is the branch of traditional Indian food but contemporary. Traditional dishes are prepared and served with modern techniques.</p>
                        <a href="#">Modern Indian Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">All Day Dining</h2>
                        <h5 class="font-normal">42 restaurants</h5>
                        <p>All Day Dining is the way to describe any fine dining restaurant that remains open 24X7 and caters to its diners all day long.</p>
                        <a href="#">All Day Dining Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Burgers</h2>
                        <h5 class="font-normal">39 restaurants</h5>
                        <p>Tagged generally as ‘dude food’, burgers are gateway to foodie paradise. It is nothing more than a juicy meat patty, usually beef, accompanied with cheese and toppings placed between a sliced bun.</p>
                        <a href="#">Burgers Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Thai</h2>
                        <h5 class="font-normal">34 restaurants</h5>
                        <p>Thai food is all about balance of flavours. The dishes has a strong aromatic quality with a spicy edge, working beautifully with well-composed ingredients.</p>
                        <a href="#">Thai Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Japanese</h2>
                        <h5 class="font-normal">31 restaurants</h5>
                        <p>Japanese cuisine encompasses the traditional food of Japan, featuring dishes like miso soup, sushi, sashimi, udon noodles and tempura.</p>
                        <a href="#">Japanese Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Parsi</h2>
                        <h5 class="font-normal">23 restaurants</h5>
                        <p>Parsi cuisine is an interesting mix of hot and sweet. It is the traditional cuisine of Parsis of India and Pakistan.</p>
                        <a href="#">Parsi Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Drinks Only</h2>
                        <h5 class="font-normal">21 restaurants</h5>
                        <p>Drinks are categorized into two sections, alcoholic and non-alcoholic. There are plenty of beverages on offer in the world from wine to juices to coffee to champagne.</p>
                        <a href="#">Drinks Only Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Fusion</h2>
                        <h5 class="font-normal">18 restaurants</h5>
                        <p>Fusion cuisine is a cuisine that combines elements of two different cuisines on one plate. This style is not limited to any particular cuisine.</p>
                        <a href="#">Fusion Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Tibetan</h2>
                        <h5 class="font-normal">16 restaurants</h5>
                        <p>A majority of Tibetan cuisine relies on dairy, meat and grain. The natives love their share of soups and stews enriched by mutton and noodles.</p>
                        <a href="#">Tibetan Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Bengali</h2>
                        <h5 class="font-normal">15 restaurants</h5>
                        <p>Rich and Distinct, the cuisine of west bengal more popularily known as Bengali Food is majorly dominated by two staple ingredients locally known as Maach (Fish) and Bhaat (Rice). Bengali Cuisine is majorly a combination of Subtle and Fiery Flavours.</p>
                        <a href="#">Bengali Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Healthy</h2>
                        <h5 class="font-normal">14 restaurants</h5>
                        <p>Healthy foods are low in calorie and rich in nutrients. Vegetables, fruits, eggs, lamb, nuts, chicken breast, seeds, fish and seafood are calorie-conscious.</p>
                        <a href="#">Healthy Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Goan</h2>
                        <h5 class="font-normal">13 restaurants</h5>
                        <p>Influenced by its Portuguese invasion, Goan cuisine of Goa in India, has a special preference for spices, chilli, cashewnuts, meat and seafood.</p>
                        <a href="#">Goan Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">French</h2>
                        <h5 class="font-normal">13 restaurants</h5>
                        <p>French cuisine is where fine dining originated. The nation is big on dairy, breads, wine, meat and cheeses. Desserts are another of their love.</p>
                        <a href="#">French Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Spanish</h2>
                        <h5 class="font-normal">12 restaurants</h5>
                        <p>Spanish cuisine is a complex fare which is influenced by the country’s history and geography. Meat and seafood is much favoured here.</p>
                        <a href="#">Spanish Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Greek</h2>
                        <h5 class="font-normal">11 restaurants</h5>
                        <p>Greek cuisine is a Mediterranean cuisine and relies heavily on local produce of olive oil, fish, vegetables, grains and meat.</p>
                        <a href="#">Greek Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Gujarati</h2>
                        <h5 class="font-normal">11 restaurants</h5>
                        <p>Gujarati cuisine is the regional food of Indian state, Gujarat. Gram flour and vegetables are the staple here and dishes carries a sweet note.</p>
                        <a href="#">Gujarati Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Tex-Mex</h2>
                        <h5 class="font-normal">9 restaurants</h5>
                        <p>Tex-Mex cuisine is a fusion cuisine made by combining the traditional fare of Texas and Mexico. Chili con carne, nachos and fajitas are much admired.</p>
                        <a href="#">Tex-Mex Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">African</h2>
                        <h5 class="font-normal">9 restaurants</h5>
                        <p>African Cuisine is one of the most diverse cusines which is a fine combination of locally available fruits, cereal grains and vegetables, as well as milk and meat products. Not only the ingredients but the cooking techniqus and style of prepration differ and are full of variations without making it lose its authenticity.</p>
                        <a href="#">African Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Barbeque</h2>
                        <h5 class="font-normal">8 restaurants</h5>
                        <p>Barbeque or as generally called BBQ is both a cooking style and an apparatus. Barbequing is cooking marinated meat over low indirect heat slowly.</p>
                        <a href="#">Barbeque Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Juices</h2>
                        <h5 class="font-normal">7 restaurants</h5>
                        <p>Juices can be made of either fruits or vegetables and is a great way to keep the calories in check while giving the body an instant nutrition boost.</p>
                        <a href="#">Juices Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Turkish</h2>
                        <h5 class="font-normal">7 restaurants</h5>
                        <p>Turkish cuisine varies across the country influenced by regional elements. This rich vibrant cuisine is largely based on dairy, meats and vegetables.</p>
                        <a href="#">Turkish Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">British</h2>
                        <h5 class="font-normal">7 restaurants</h5>
                        <p>A traditional local cuisine, British Cuisine is mainly associated with the cooking practices of United Kingdom. Associated with Full Breakfast, Fish and Chips, Christmas dinners the cuisine decipts the Socttish culture quite well</p>
                        <a href="#">British Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Momos</h2>
                        <h5 class="font-normal">6 restaurants</h5>
                        <p>Momos is a street name for dumplings and is a type of South Asian delicacy native to Tibet, Nepal, Bhutan and Sikkim. It is a favourite Indian roadside snack.</p>
                        <a href="#">Momos Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Kerala</h2>
                        <h5 class="font-normal">6 restaurants</h5>
                        <p>Kerala is a lush green state of Southern India with a diet influenced by its geography. Lots of coconut, seafood and tamarind is used in its cooking.</p>
                        <a href="#">Kerala Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Milkshakes</h2>
                        <h5 class="font-normal">6 restaurants</h5>
                        <p>Milkshake is a cold sweet beverage usually made from milk, ice cream/iced milk and flavourings like chocolate, caramel, fruit syrup or butterscotch.</p>
                        <a href="#">Milkshakes Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Indian Coastal Cuisine</h2>
                        <h5 class="font-normal">5 restaurants</h5>
                        <p>Regional cuisines around Indian coastal belt is known as Indian Coastal Cuisine. This cuisine is brimming with delectable seafood derived from the sea.</p>
                        <a href="#">Indian Coastal Cuisine Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Moroccan</h2>
                        <h5 class="font-normal">5 restaurants</h5>
                        <p>Moroccan cuisine is the traditional food of people of Morocco and is touched by several cultures. Meat, cous cous, olive oil and bread are the staple here.</p>
                        <a href="#">Moroccan Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Sandwiches</h2>
                        <h5 class="font-normal">5 restaurants</h5>
                        <p>Sandwich is a great American dish created out of layers of meat or veggies placed between toasted bread. It can be diversified with numerous fillings.</p>
                        <a href="#">Sandwiches Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Burmese</h2>
                        <h5 class="font-normal">5 restaurants</h5>
                        <p>Burmese Cuisine is essentially the cuisine of Myanmar. Influenced by Chinese, Indian and Thai food, the food is mildly spicy. It includes a variety of Salads, rice noodles etc. Burmese Cuisine also is charaterized by the use of Coconut in the dishes.</p>
                        <a href="#">Burmese Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Tapas</h2>
                        <h5 class="font-normal">5 restaurants</h5>
                        <p>Tapas in Spanish cuisine is an appetizer that is served either hot or cold. In Spain tapas has progressed into an entire elegant cuisine.</p>
                        <a href="#">Tapas Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Iranian</h2>
                        <h5 class="font-normal">5 restaurants</h5>
                        <p>Iranian cuisine or famously known as Persian cuisine, is a rich affluent fare dominated by rice, meat, vegetables and nuts.</p>
                        <a href="#">Iranian Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Middle Eastern</h2>
                        <h5 class="font-normal">5 restaurants</h5>
                        <p>Middle Eastern cuisine is the cuisine of various countries and people of Middle East. Some popular delicacies are kebabs, tagine, dolma and baklava.</p>
                        <a href="#">Middle Eastern Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Coffee and Tea</h2>
                        <h5 class="font-normal">4 restaurants</h5>
                        <p>Coffee and Tea are the two most popularly consumed beverages in our country. People can be easily classified as tea or coffee lovers, and each of these beverages has great variations in itself as well.</p>
                        <a href="#">Coffee and Tea Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Awadhi</h2>
                        <h5 class="font-normal">4 restaurants</h5>
                        <p>A part of Indian Cuisine, Awadhi Cuisine is native to the city of Lucknow. Famous dishes include Biryani, Kebabs and Curries. These are delectable and prepared in many variations.</p>
                        <a href="#">Awadhi Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">South American</h2>
                        <h5 class="font-normal">4 restaurants</h5>
                        <p>South American cuisine is characterized by Native American, African, Spanish, Italian, Portuguese and Indian-South Asian cultures.</p>
                        <a href="#">South American Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Korean</h2>
                        <h5 class="font-normal">4 restaurants</h5>
                        <p>Korean cuisine has evolved a lot over the centuries and is largely based on meat, rice and vegetables. Kimchi is served as a side with every dish.</p>
                        <a href="#">Korean Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Portuguese</h2>
                        <h5 class="font-normal">4 restaurants</h5>
                        <p>Portuguese food has strong Mediterranean influences and is well-versed with succulent seafood. Spices are an important ingredient of the cuisine.</p>
                        <a href="#">Portuguese Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Egyptian</h2>
                        <h5 class="font-normal">4 restaurants</h5>
                        <p>Egyptian cuisine is greatly attached to the ground due to its rich produce of legume and vegetables. What you will find eaten widely is ful medames, kushari, shawarma kebab, ta’miya and baklava.</p>
                        <a href="#">Egyptian Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Rajasthani</h2>
                        <h5 class="font-normal">4 restaurants</h5>
                        <p>Rajasthani food is the traditional regional cuisine of Rajasthan in India. Their food is robust with spices and full of intense flavours.</p>
                        <a href="#">Rajasthani Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Arabian</h2>
                        <h5 class="font-normal">4 restaurants</h5>
                        <p>A gamut of regional cuisines, Arabian Cuisine resemble the culture of Arabs very well. Influenced greatly by Lebanese cuisine, Arabaian Cuisine still differs from Lebanese Cuisine in certain ways. The use of whole grains is in prominent and a important ingredient of the Cuisine.</p>
                        <a href="#">Arabian Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Lucknowi</h2>
                        <h5 class="font-normal">3 restaurants</h5>
                        <p>Lucknowi or better known as Awadhi cuisine is the cuisine native to city of Lucknow in India. The food is of royal origins suited to pacify the Nawabs.</p>
                        <a href="#">Lucknowi Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Sushi</h2>
                        <h5 class="font-normal">3 restaurants</h5>
                        <p>Sushi is a popular Japanese preparation created by combining vinegared rice with other varied ingredients like seafood, vegetables and fruits.</p>
                        <a href="#">Sushi Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Confectionery</h2>
                        <h5 class="font-normal">3 restaurants</h5>
                        <p>Confectionery is the name given to the wide spectrum of sweets categorising as baker’s confectionery or sugar confections.</p>
                        <a href="#">Confectionery Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">German</h2>
                        <h5 class="font-normal">3 restaurants</h5>
                        <p>Cuisine of Germany ranges from region to region giving special preference to meat, fish and vegetables. Beer originated here and is a popular drink.</p>
                        <a href="#">German Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Sindhi</h2>
                        <h5 class="font-normal">2 restaurants</h5>
                        <p>Sindhi refers to the native cuisine of the Sindhi people from Sindh, Pakistan. The daily food in most Sindhi households consists of wheat-based flat-bread (phulka) and rice accompanied by two dishes, one gravy and one dry.</p>
                        <a href="#">Sindhi Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Peruvian</h2>
                        <h5 class="font-normal">2 restaurants</h5>
                        <p>We owe Peruvian cuisine to its Inca population and influences of Europe, West Africa and Asia, which has shaped this interesting cuisine. Ceviche is the most well-known Peruvian dish.</p>
                        <a href="#">Peruvian Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">oriental</h2>
                        <h5 class="font-normal">2 restaurants</h5>
                        <p>Oriental cuisine refers to the cooking from Far East regions, even Southeast Asian region. The cuisine is well-known all over the world.</p>
                        <a href="#">oriental Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Pasta</h2>
                        <h5 class="font-normal">2 restaurants</h5>
                        <p>Little flour, eggs and water combines to form the staple food of Italy. Pasta is eaten with a sauce or even just tossed in olive oil and garlic.</p>
                        <a href="#">Pasta Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Kababs</h2>
                        <h5 class="font-normal">2 restaurants</h5>
                        <p>Kabab is India’s favourite appetizer. It is minced meat appetizer blended with spices and then given a shape of a patty or a tube, to be grilled to perfection.</p>
                        <a href="#">Kababs Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Latin American</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>The Latin American cuisine covers a lot of base and is influenced by a variety of cultures. Its diversity varies from country to country familiarizing dishes like, tortillas, tamales, tacos, pupusas and arepas.</p>
                        <a href="#">Latin American Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Pakistani</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Pakistani cuisine is influenced by South Asian and Central Asian cuisines as well as Mughlai fare. Biryani, kebab and nihari is their staple.</p>
                        <a href="#">Pakistani Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Sizzlers</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Sizzler is a fun wholesome dish served on a hot iron platter which lets out a sizzling sound upon serving. It is a teppanyaki-inspired dish popular in US.</p>
                        <a href="#">Sizzlers Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Kashmiri</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Kashmiri cuisine is the regional food of the people of Kashmir in Northern India. Rice along with meat is the staple diet of the natives.</p>
                        <a href="#">Kashmiri Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Assamese</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Assamese Cuisine is indeed a heaven for Non Vegetarian lovers. Centered around the main ingredient which is Rice followed by Fish, the delicacies are flavourful and a must try for those who like their food mildly spicy.</p>
                        <a href="#">Assamese Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Chettinad</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Made from the ground Masalas, Chettinad Cuisine is the cusiene of Tamil Nadu. Named after a region of Tamil Nadu, the cusiene is believed to be one of the spiciest cuisienes in India oing to the use of Pepper and local spices.</p>
                        <a href="#">Chettinad Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Hyderabadi</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Hyderabadi cuisine or also known as Deccani cuisine is native to Hyderabad in India. It is princely rich legacy of Nizams of Hyderabad.</p>
                        <a href="#">Hyderabadi Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Australian</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Meat and seafood plays an integral part of Australia’s gastronomy. Counted as top dining destinations in the world, Australian cuisine is known to invent pavlova, vegemite and ANZAC biscuits.</p>
                        <a href="#">Australian Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">North Eastern</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Each state of North East has something delectable to offer and presents one with an eclectic mix of pork, bamboo and rice based dishes.</p>
                        <a href="#">North Eastern Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Persian</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Persian cuisine is another name for Iranian cuisine. This complex vibrant cuisine is basically made of meat, vegetables and nuts. Kebab is a well-known dish.</p>
                        <a href="#">Persian Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Andhra</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Also known as Telgu Cuisine, Andhra Cuisine is Tangy. Owing to the Red Chillis produced in abundance in the area, the food is quite spicy and hot. Both Vegetarian and Non Vegetarian dishes are made in varience here.</p>
                        <a href="#">Andhra Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Sri Lankan</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Sri Lankan cuisine is not meant for everyone because of the love for spices the country shares. Rice and curry is the Sri Lankan staple and seafood is evident everywhere. Coconut and fish dominates the cuisine.</p>
                        <a href="#">Sri Lankan Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Chicken</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Chicken has to be one of the most used and beloved ingredient all over the world. This protein is versatile and can be cooked in hundreds of ways.</p>
                        <a href="#">Chicken Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Vietnamese</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Vietnamese cuisine is one of the healthiest cuisines in the world, due to its fresh ingredients and liberal use of herbs plus vegetables.</p>
                        <a href="#">Vietnamese Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Afghani</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>To survive Afghanistan’s harsh climate Afghani food is fatty and carries staples like rice, grains, mutton and yoghurt. Kabuli Palaw is their national dish.</p>
                        <a href="#">Afghani Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Western</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Western food is a term associated with cuisines of Europe and any other Western country. Anything between pasta and steak is counted as Western dish.</p>
                        <a href="#">Western Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Malaysian</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Malaysian food is steeped in coconut milk, pandan leaves, aromatics and peanuts. This cuisine believes in flavour balance achieved with careful precision.</p>
                        <a href="#">Malaysian Restaurants near me</a>
                    </div>
                </div>

                <div class="column w-6">
                    <div class="bg-white is-round p-6 h-100 card-hover">
                        <h2 class="mb-0">Indonesian</h2>
                        <h5 class="font-normal">1 restaurants</h5>
                        <p>Indonesian cuisine is vast and wonderfully vibrant influenced by different cultures. Nasi Goreng is the most well-known Indonesian dish.</p>
                        <a href="#">Indonesian Restaurants near me</a>
                    </div>
                </div>

            </section>

        </main>

        <footer class="bg-dark p-2 clr-white grid txt-center">
            <div class="column w-8">
                <h3>Diners</h3>
                <div>Join more than 440,000 diners</div>
                <div>who discover new restaurants with Foochyn</div>
                <div class="mt-1rem"> <button class="btn is-sld is-light is-lg">Learn More</button> </div>
            </div>
            <div class="column w-8">
                <h3>Restaurants</h3>
                <div>Join more than 1,300 resturants</div>
                <div>who promote their restaurant with Foochyn</div>
                <div class="mt-1rem"> <button class="btn is-sld is-light is-lg">Learn More</button> </div>
            </div>
            <div class="column w-8">
                <h3>Follow Us</h3>
                <div>Join more than 180,000 fans</div>
                <div>who rave absolute Foochyn on social</div>
                <div class="mt-1rem">
                    <a href="#" class="clr-white"><i class="icon title is-sm ri-facebook-box-line"></i></a>
                    <a href="#" class="clr-white"><i class="icon title is-sm ri-instagram-line"></i></a>
                </div>
            </div>
            <div class=" column w-15 mx-auto mt-2 mb-7px flex justify-between">
                <a href="#" class="clr-white">About us</a>
                <a href="#" class="clr-white">FAQ</a>
                <a href="#" class="clr-white">Contact US</a>
                <a href="#" class="clr-white">Partner With us</a>
                <a href="#" class="clr-white">Terms & Conditions</a>
                <a href="#" class="clr-white">Privacy Policy</a>
                <a href="#" class="clr-white">Restaurateurs</a>
            </div>
            <div class="border-bottom w-24"></div>
            <div class=column w-24"> © First Table (Australia) Pty Ltd 2014 - 2020. All rights reserved. The First Table logo and name are trademarks of First Table Limited. </div>
        </footer>
    </body>
    <script src="./js/base.js"></script>

</html>