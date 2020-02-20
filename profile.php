<!DOCTYPE html>
<html lang="en">

  <head>
    <meta id="customViewPort" name="viewport" content="width=device-width,initial-scale=1,user-scalable=0" />
    <link type="image/png" href="images/favicon.png" rel="icon" />
    <meta name="format-detection" content="telephone=no" />
    <meta charset="utf-8" />
    <title>FOoChyn</title>
    <meta name="description" content="description" />
    <link href="./index.html" rel="canonical" />
    </head>

  <body>
    <?php include 'header.php';?>

    <div class="container">
      <ol class="breadcrumb column w-24 w-20@sm mt-1rem">
        <h2 class="breadcrumb-item mb-0" data-separator="/">Dashboard</h2>
        <li class="breadcrumb-item" data-separator="/" aria-current="page">Add Restaurant</li>
      </ol>
    </div>

    <div class="grid has-gap-lg container my-1rem">
      <div class="column w-6">
        <?php include 'sidebar.php';?>
      </div>

      <div class="column">
        <main class="lyt-main">
          <form>
            <div class="bg-white shadow border p-2 is-round grid has-gap-lg">
              <div class="column w-10 flex is-y align-middle justify-center">
                <div class="icon mx-1rem border border-wide border-secondary is-circle p-4 img-bg mb-6" style="font-size: 10rem;background-image: url('./images/profile.jpg');">
                  <svg class="icon z--10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M4 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H4zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"></path>
                  </svg>
                </div>

                <label class="btn is-sld is-primary control">
                  <span>Update Picture</span>
                  <input class="file" type="file" />
                </label>
              </div>
              <div class="column grid w-14">
                <div class="column control block w-24 py-2 txt-right">
                  <button class="btn is-sld is-valid is-pill">Update</button>
                </div>

                <label class="column control block w-12 py-2">
                  <span>Full Name</span>
                  <input class="input mt-1rem" type="text" />
                </label>

                <label class="column control block w-12 py-2">
                  <span>Email</span>
                  <input class="input mt-1rem" type="email" />
                </label>

                <label class="column control block w-12 py-2">
                  <span>Password</span>
                  <input class="input mt-1rem" type="password" />
                </label>

                <label class="column control block w-12 py-2">
                  <span>Phone</span>
                  <input class="input mt-1rem" type="tel" />
                </label>

                <label class="column control block w-24 py-2">
                  <span>Address</span>
                  <textarea class="input mt-1rem" style="resize: none" rows="3"></textarea>
                </label>

                <label class="column control block w-8 py-2">
                  <span>Nation</span>
                  <select class="input mt-1rem">
                    <option hidden="">Location</option>
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
                </label>

                <label class="column control w-8 py-2">
                  <span>Gender</span>
                  <select class="input mt-1rem">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                  </select>
                </label>
                <label class="column control w-8 py-2">
                  <span>Language</span>
                  <select class="input mt-1rem">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                  </select>
                </label>

                <label class="column w-8 control py-2">
                  <span>Date</span>
                  <select class="input mt-1rem">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                  </select>
                </label>
                <label class="column w-8 control py-2">
                  <span>Month</span>
                  <select class="input mt-1rem">
                    <option>Jan</option>
                    <option>Feb</option>
                    <option>Mar</option>
                    <option>Apr</option>
                    <option>May</option>
                    <option>Jun</option>
                    <option>Jul</option>
                    <option>Aug</option>
                    <option>Sep</option>
                    <option>Oct</option>
                    <option>Nov</option>
                    <option>Dec</option>
                  </select>
                </label>
                <label class="column w-8 control py-2">
                  <span>Year</span>
                  <select class="input mt-1rem">
                    <option>1950</option>
                    <option>1951</option>
                    <option>1952</option>
                    <option>1953</option>
                    <option>1954</option>
                    <option>1955</option>
                    <option>1956</option>
                    <option>1957</option>
                    <option>1958</option>
                    <option>1959</option>
                    <option>1960</option>
                    <option>1961</option>
                    <option>1962</option>
                    <option>1963</option>
                    <option>1964</option>
                    <option>1965</option>
                    <option>1966</option>
                    <option>1967</option>
                    <option>1968</option>
                    <option>1969</option>
                    <option>1970</option>
                    <option>1971</option>
                    <option>1972</option>
                    <option>1973</option>
                    <option>1974</option>
                    <option>1975</option>
                    <option>1976</option>
                    <option>1977</option>
                    <option>1978</option>
                    <option>1979</option>
                    <option>1980</option>
                    <option>1981</option>
                    <option>1982</option>
                    <option>1983</option>
                    <option>1984</option>
                    <option>1985</option>
                    <option>1986</option>
                    <option>1987</option>
                    <option>1988</option>
                    <option>1989</option>
                    <option>1990</option>
                    <option>1991</option>
                    <option>1992</option>
                    <option>1993</option>
                    <option>1994</option>
                    <option>1995</option>
                    <option>1996</option>
                    <option>1997</option>
                    <option>1998</option>
                    <option>1999</option>
                    <option>2000</option>
                    <option>2001</option>
                    <option>2002</option>
                    <option>2003</option>
                    <option>2004</option>
                    <option>2005</option>
                    <option>2006</option>
                    <option>2007</option>
                    <option>2008</option>
                    <option>2009</option>
                    <option>2010</option>
                    <option>2011</option>
                    <option>2012</option>
                    <option>2013</option>
                    <option>2014</option>
                    <option>2015</option>
                    <option>2016</option>
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                  </select>
                </label>

                <label class="column w-12 control py-2">
                  <span>Twitter</span>
                  <input class="input mt-1rem" type="text" />
                </label>
                <label class="column w-12 control py-2">
                  <span>Linkden</span>
                  <input class="input mt-1rem" type="text" />
                </label>
                <label class="column w-12 control py-2">
                  <span>Google</span>
                  <input class="input mt-1rem" type="text" />
                </label>
                <label class="column w-12 control py-2">
                  <span>Facebook</span>
                  <input class="input mt-1rem" type="text" />
                </label>
              </div>
            </div>
          </form>
        </main>
      </div>
    </div>

    <?php include 'footer.php';?>

  </body>

</html>