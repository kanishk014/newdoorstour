<?php
  require_once 'templatedata.php';
  $res = $_GET['id'];
  //echo "<script>console.log('" . json_encode($res) . "')</script>";
  //$query = "Select * FROM facility WHERE id = $res";
  $query1 = "Select * FROM pg WHERE id = $res";
  //$result = mysqli_query($conn, $query);
  $result1 = mysqli_query($conn, $query1);
  while($row = mysqli_fetch_assoc($result1)){
    echo "<script>console.log('" . json_encode($row) . "')</script>";
    $location = $row['location'];
    $address = $row['address'];
    $bhk = $row['bhk'];
    $area = $row['area'];
    $price = $row['price'];
    $link = $row['link'];
    $status = $row['status'];
    $propertyType = $row['propertyType'];
    $yearBuilt = $row['yearBuilt'];
    $stories = $row['stories'];
    $roomsCount = $row['roomsCount'];
    $parkingSpaces = $row['parkingSpaces'];
    $info = $row['info'];
    $extraInfo = $row['extraInfo'];
    $Internet = $row['Internet'];
    $Garage = $row['Garage'];
    $airConditioning = $row['airConditioning'];
    $dishWasher = $row['Dishwasher'];
    $Disposal = $row['Disposal'];
    $Balcony =$row['Balcony'];
    $Gym = $row['Gym'];
    $Playroom = $row['Playroom'];
    $Bar = $row['Bar'];
    $agentName = $row['agentName'];
    $agentEmail = $row['agentEmail'];
    $agentContact = $row['agentContact'];
    $distance_school = $row['School'];
    $distance_hospital = $row['Hospital'];
    $distance_metro = $row['Metro'];
    $distance_shoopingMall = $row['ShoppingMall'];
    $distance_busStop = $row['Bus Stand'];
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YNNC95NX7R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YNNC95NX7R');
</script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,700,900"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/photoswipe.css" />
    <link rel="stylesheet" href="css/default-skin/default-skin.css" />
    <link rel="stylesheet" href="css/styled354.css?sadswq" />

    <title>DoorsTour</title>
  </head>
  <body>
  <div class="pxp-header fixed-top pxp-animate pxp-no-bg">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-5 col-md-2">
            <a href="index.html" class="pxp-logo text-decoration-none"
              ><img src="images/logo.png" height="35" width="175" alt="logo"
            /></a>
          </div>
          <div class="col-2 col-md-8 text-center">
            <ul class="pxp-nav list-inline">
              <!-- <li class="list-inline-item">
                    <a href="#">Home</a>
                    <ul class="pxp-nav-sub rounded-lg">
                      <li><a href="index-2.html">Version 1</a></li>
                      <li><a href="index-3.html">Version 2</a></li>
                      <li><a href="index-4.html">Version 3</a></li>
                    </ul>
                  </li> -->
              <li class="list-inline-item">
                <a href="#">Properties</a>
                <ul class="pxp-nav-sub rounded-lg">
                  <li><a href="properties.php">Buy</a></li>
                  <li><a href="rent.php">Rent</a></li>
                  <li>
                    <a href="pg.php">PG</a>
                  </li>
                </ul>
              </li>
              <li class="list-inline-item">
                <a href="#">Feel 360</a>
                <ul class="pxp-nav-sub rounded-lg">
                  <li><a href="gyms.html">Gyms</a></li>
                  <li><a href="restaurants.html">Restaurants</a></li>
                  <li>
                    <a href="co-working.html">Co-working Spaces</a>
                  </li>
                  <li><a href="hotels.html">Hotels</a></li>
                </ul>
              </li>
              <li class="list-inline-item pxp-is-last">
                <a href="services.html">Services</a>
              </li>
              <li class="list-inline-item">
                <a href="blog.php">Blog</a>
                
              </li>
              <li class="list-inline-item pxp-is-last">
                <a href="about.html">About Us</a>
              </li>

              <li class="list-inline-item pxp-is-last">
                <a href="contact.html">Contact Us</a>
              </li>
              <li class="list-inline-item">
                <div class="pxp-user-btns">
                  <a href="submit-property.html"
                    ><button
                      class="pxp-user-btns"
                      style="
                        background-color: #2eca6a;
                        padding: 5px 10px 5px 10px;
                        border: none;
                        color: white;
                        border-radius: 5px;
                      "
                    >
                      Post Property
                    </button></a
                  >
                </div>
              </li>
              <li class="list-inline-item pxp-has-btns">
                <div class="pxp-user-btns">
                  <a href="#" class="pxp-user-btns-signup pxp-signup-trigger"
                    >Sign Up</a
                  >
                  <a href="#" class="pxp-user-btns-login pxp-signin-trigger"
                    >Sign In</a
                  >
                </div>
              </li>
            </ul>
          </div>
          <div class="col-5 col-md-2 text-right">
            <a href="javascript:void(0);" class="pxp-header-nav-trigger"
              ><span class="fa fa-bars"></span
            ></a>
            <a
              href="javascript:void(0);"
              class="pxp-header-user pxp-signin-trigger"
              ><span class="fa fa-user-o"></span
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <div class="pxp-content">
      <div class="pxp-single-property-top pxp-content-wrapper mt-100">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-5">
              <h2 class="pxp-sp-top-title">Beautiful House in <?php echo $location; ?></h2>
              <p class="pxp-sp-top-address pxp-text-light">
                <?php echo $address ?>
              </p>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="pxp-sp-top-btns mt-2 mt-md-0">
                <a href="#" class="pxp-sp-top-btn"
                  ><span class="fa fa-star"></span> Save</a
                >
                <div class="dropdown">
                  <a
                    class="pxp-sp-top-btn"
                    href="#"
                    role="button"
                    id="dropdownMenuLink"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <span class="fa fa-share-alt"></span> Share
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="dropdownMenuLink"
                  >
                    <a class="dropdown-item" href="#"
                      ><span class="fa fa-facebook"></span> Facebook</a
                    >
                    <a class="dropdown-item" href="#"
                      ><span class="fa fa-twitter"></span> Twitter</a
                    >
                    <a class="dropdown-item" href="#"
                      ><span class="fa fa-pinterest"></span> Pinterest</a
                    >
                    <a class="dropdown-item" href="#"
                      ><span class="fa fa-linkedin"></span> LinkedIn</a
                    >
                  </div>
                </div>
              </div>
              <div class="clearfix d-block d-xl-none"></div>
              <div class="pxp-sp-top-feat mt-3 mt-md-0">
                <div><?php echo $bhk ?>  <span>BHK</span></div>

                <div><?php echo $area ?>  <span>Sq.Ft.</span></div>
              </div>
              <div class="pxp-sp-top-price mt-3 mt-md-0 fa fa-rupee">&nbsp; <?php echo $price ?>Cr</div>
            </div>
          </div>
        </div>
      </div>


      <div class="pxp-single-property-gallery-container mt-4 mt-md-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <iframe
                style="min-height: 100vh;"
                class="d-block w-100"
                frameborder="0"
                allowfullscreen
                src="<?php echo $link ?>">//https://kanishk014.github.io/clakk/
              </iframe>
            </div>
            <div class="carousel-item">
              <img src="images/properties/prop-7-1-big.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/properties/prop-7-2-big.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </div>
        </div>
        </div>
        <!-- <div
          class="pxp-single-property-gallery"
          itemscope
          itemtype="http://schema.org/ImageGallery"
        >
          <figure
            itemprop="associatedMedia"
            itemscope
            itemtype="http://schema.org/ImageObject"
            class="pxp-sp-gallery-main-img"
          >
            <a
              href="images/properties/prop-7-1-big.jpg"
              itemprop="contentUrl"
              data-size="1920x1280"
              class="pxp-cover"
              style="background-image: url(images/properties/prop-7-1-big.jpg)"
            ></a>
            <a href="#"
              ><iframe
                style="max-width: 100%"
                width="1920"
                height="1280"
                frameborder="0"
                allowfullscreen
                src="https://kanishk014.github.io/vrweb/"
              ></iframe
            ></a>
            <figcaption itemprop="caption description">
              Image caption
            </figcaption>
          </figure>
          <figure
            itemprop="associatedMedia"
            itemscope
            itemtype="http://schema.org/ImageObject"
          >
            <a
              href="images/properties/prop-7-2-big.jpg"
              itemprop="contentUrl"
              data-size="1920x1459"
              class="pxp-cover"
              style="
                background-image: url(images/properties/prop-7-2-gallery.jpg);
              "
            ></a>
            <figcaption itemprop="caption description">
              Image caption
            </figcaption>
          </figure>
          <figure
            itemprop="associatedMedia"
            itemscope
            itemtype="http://schema.org/ImageObject"
          >
            <a
              href="images/properties/prop-7-3-big.jpg"
              itemprop="contentUrl"
              data-size="1920x2560"
              class="pxp-cover"
              style="
                background-image: url(images/properties/prop-7-3-gallery.jpg);
              "
            ></a>
            <figcaption itemprop="caption description">
              Image caption
            </figcaption>
          </figure>
          <figure
            itemprop="associatedMedia"
            itemscope
            itemtype="http://schema.org/ImageObject"
          >
            <a
              href="images/properties/prop-2-3-big.jpg"
              itemprop="contentUrl"
              data-size="1920x1280"
              class="pxp-cover"
              style="
                background-image: url(images/properties/prop-2-3-gallery.jpg);
              "
            ></a>
            <figcaption itemprop="caption description">
              Image caption
            </figcaption>
          </figure>
          <figure
            itemprop="associatedMedia"
            itemscope
            itemtype="http://schema.org/ImageObject"
          >
            <a
              href="images/properties/prop-1-3-big.jpg"
              itemprop="contentUrl"
              data-size="1920x1280"
              class="pxp-cover"
              style="
                background-image: url(images/properties/prop-1-3-gallery.jpg);
              "
            ></a>
            <figcaption itemprop="caption description">
              Image caption
            </figcaption>
          </figure>
        </div>
        <a href="#" class="pxp-sp-gallery-btn">View Photos</a>
        <div class="clearfix"></div> -->
      </div>

      <div class="container mt-100">
        <div class="row">
          <div class="col-lg-8">
            <div class="pxp-single-property-section">
              <h3>Key Details</h3>
              <div class="row mt-3 mt-md-4">
                <div class="col-sm-6">
                  <div class="pxp-sp-key-details-item">
                    <div class="pxp-sp-kd-item-label text-uppercase">
                      Status
                    </div>
                    <div class="pxp-sp-kd-item-value"><?php echo $status ?></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="pxp-sp-key-details-item">
                    <div class="pxp-sp-kd-item-label text-uppercase">
                      Property Type
                    </div>
                    <div class="pxp-sp-kd-item-value"><?php echo $propertyType ?></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="pxp-sp-key-details-item">
                    <div class="pxp-sp-kd-item-label text-uppercase">
                      Year Built
                    </div>
                    <div class="pxp-sp-kd-item-value"><?php echo $yearBuilt ?></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="pxp-sp-key-details-item">
                    <div class="pxp-sp-kd-item-label text-uppercase">
                      Stories
                    </div>
                    <div class="pxp-sp-kd-item-value"><?php echo $stories ?></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="pxp-sp-key-details-item">
                    <div class="pxp-sp-kd-item-label text-uppercase">
                      Room Count
                    </div>
                    <div class="pxp-sp-kd-item-value"><?php echo $roomsCount ?></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="pxp-sp-key-details-item">
                    <div class="pxp-sp-kd-item-label text-uppercase">
                      Parking Spaces
                    </div>
                    <div class="pxp-sp-kd-item-value"><?php echo $parkingSpaces ?></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="pxp-single-property-section mt-4 mt-md-5">
              <h3>Overview</h3>
              <div class="mt-3 mt-md-4">
                <p>
                  <?php echo $info ?>
                  <span class="pxp-dots">...</span>
                  <span class="pxp-dots-more">
                    <?php echo $extraInfo ?>
                  </span>
                </p>
                <a href="#" class="pxp-sp-more text-uppercase"
                  ><span class="pxp-sp-more-1"
                    >Continue Reading
                    <span class="fa fa-angle-down"></span></span
                  ><span class="pxp-sp-more-2"
                    >Show Less <span class="fa fa-angle-up"></span></span
                ></a>
              </div>
            </div>

            <div class="pxp-single-property-section mt-4 mt-md-5">
              <h3>Amenities</h3>
              <div class="row mt-3 mt-md-4">
                <?php
                  if ($Internet) {
                    ?>
                    <div class="col-sm-6 col-lg-4">
                      <div class="pxp-sp-amenities-item">
                        <span class="fa fa-wifi"></span> Internet
                      </div>
                    </div>
                    <?php
                  }
                ?>
                <?php
                  if ($Garage) {
                    ?>
                    <div class="col-sm-6 col-lg-4">
                      <div class="pxp-sp-amenities-item">
                        <span class="fa fa-car"></span> Garage
                      </div>
                    </div>
                    <?php
                  }
                ?>
                <?php
                  if ($airConditioning) {
                    ?>
                    <div class="col-sm-6 col-lg-4">
                      <div class="pxp-sp-amenities-item">
                        <span class="fa fa-sun-o"></span> Air Conditioning
                      </div>
                    </div>
                    <?php
                  }
                ?>
                <?php
                  if ($dishWasher) {
                    ?>
                    <div class="col-sm-6 col-lg-4">
                      <div class="pxp-sp-amenities-item">
                        <span class="fa fa-bullseye"></span> Dishwasher
                      </div>
                    </div>
                    <?php
                  }
                ?>
                <?php
                  if ($Disposal) {
                    ?>
                    <div class="col-sm-6 col-lg-4">
                      <div class="pxp-sp-amenities-item">
                        <span class="fa fa-recycle"></span> Disposal
                      </div>
                    </div>
                    <?php
                  }
                ?>
                <?php
                  if ($Balcony) {
                    ?>
                    <div class="col-sm-6 col-lg-4">
                      <div class="pxp-sp-amenities-item">
                        <span class="fa fa-clone"></span> Balcony
                      </div>
                    </div>
                    <?php
                  }
                ?>
                <?php
                  if ($Gym) {
                    ?>
                    <div class="col-sm-6 col-lg-4">
                      <div class="pxp-sp-amenities-item">
                        <span class="fa fa-futbol-o"></span> Gym
                      </div>
                    </div>
                    <?php
                  }
                ?>
                <?php
                  if ($Playroom) {
                    ?>
                    <div class="col-sm-6 col-lg-4">
                      <div class="pxp-sp-amenities-item">
                        <span class="fa fa-smile-o"></span> Playroom
                      </div>
                    </div>
                    <?php
                  }
                ?>
                <?php
                  if ($Bar) {
                    ?>
                    <div class="col-sm-6 col-lg-4">
                      <div class="pxp-sp-amenities-item">
                        <span class="fa fa-glass"></span> Bar
                      </div>
                    </div>
                    <?php
                  }
                ?>
              </div>
            </div>

            <div class="pxp-single-property-section mt-4 mt-md-5">
              <h3>Explore the Area</h3>
              <div class="pxp-sp-pois-nav mt-3 mt-md-4">
                <div class="pxp-sp-pois-nav-transportation text-uppercase">
                  Transportation
                </div>
                <div class="pxp-sp-pois-nav-restaurants text-uppercase">
                  Restaurants
                </div>
                <div class="pxp-sp-pois-nav-shopping text-uppercase">
                  Shopping
                </div>
                <div class="pxp-sp-pois-nav-cafes text-uppercase">
                  Cafes & Bars
                </div>
                <div class="pxp-sp-pois-nav-arts text-uppercase">
                  Arts & Entertainment
                </div>
                <div class="pxp-sp-pois-nav-fitness text-uppercase">
                  Fitness
                </div>
              </div>
              <div id="pxp-sp-map" class="mt-3">

              </div>
            </div>

            <div class="pxp-single-property-section mt-4 mt-md-5">
              <h3>Payment Calculator</h3>
              <div class="pxp-calculator-view mt-3 mt-md-4">
                <div class="row">
                  <div class="col-sm-12 col-lg-4 align-self-center">
                    <div class="pxp-calculator-chart-container">
                      <canvas id="pxp-calculator-chart"></canvas>
                      <div class="pxp-calculator-chart-result">
                        <div class="pxp-calculator-chart-result-sum">
                          ₹11,277
                        </div>
                        <div class="pxp-calculator-chart-result-label">
                          per month
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-sm-12 col-lg-8 align-self-center mt-3 mt-lg-0"
                  >
                    <div class="pxp-calculator-data">
                      <div class="row justify-content-between">
                        <div class="col-8">
                          <div class="pxp-calculator-data-label">
                            <span class="fa fa-minus"></span>Principal and
                            Interest
                          </div>
                        </div>
                        <div class="col-4 text-right">
                          <div
                            class="pxp-calculator-data-sum"
                            id="pxp-calculator-data-pi"
                          ></div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="pxp-calculator-data">
                      <div class="row justify-content-between">
                        <div class="col-8">
                          <div class="pxp-calculator-data-label">
                            <span class="fa fa-minus"></span>Property Taxes
                          </div>
                        </div>
                        <div class="col-4 text-right">
                          <div
                            class="pxp-calculator-data-sum"
                            id="pxp-calculator-data-pt"
                          ></div>
                        </div>
                      </div>
                    </div>
                    <div class="pxp-calculator-data">
                      <div class="row justify-content-between">
                        <div class="col-8">
                          <div class="pxp-calculator-data-label">
                            <span class="fa fa-minus"></span>HOA Dues
                          </div>
                        </div>
                        <div class="col-4 text-right">
                          <div
                            class="pxp-calculator-data-sum"
                            id="pxp-calculator-data-hd"
                          ></div>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
              <div class="pxp-calculator-form mt-3 mt-md-4">
                <input
                  type="hidden"
                  id="pxp-calculator-form-property-taxes"
                  value="0"
                />
                <input
                  type="hidden"
                  id="pxp-calculator-form-hoa-dues"
                  value="0"
                />

                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                      <label for="pxp-calculator-form-term">Term</label>
                      <select
                        class="custom-select"
                        id="pxp-calculator-form-term"
                      >
                        <option value="30">30 Years Fixed</option>
                        <option value="20">20 Years Fixed</option>
                        <option value="15">15 Years Fixed</option>
                        <option value="10">10 Years Fixed</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                      <label for="pxp-calculator-form-interest">Interest</label>
                      <input
                        type="text"
                        class="form-control pxp-form-control-transform"
                        id="pxp-calculator-form-interest"
                        data-type="percent"
                        value="4.45%"
                      />
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                      <label for="pxp-calculator-form-price">Home Price</label>
                      <input
                        type="text"
                        class="form-control pxp-form-control-transform"
                        id="pxp-calculator-form-price"
                        data-type="currency"
                        value="₹5,198,000"
                      />
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="row">
                      <div class="col-7 col-sm-7 col-md-8">
                        <div class="form-group">
                          <label for="pxp-calculator-form-down-price"
                            >Down Payment</label
                          >
                          <input
                            type="text"
                            class="form-control pxp-form-control-transform"
                            id="pxp-calculator-form-down-price"
                            data-type="currency"
                            value="₹519,800"
                          />
                        </div>
                      </div>
                      <div class="col-5 col-sm-5 col-md-4">
                        <div class="form-group">
                          <label for="pxp-calculator-form-down-percentage"
                            >&nbsp;</label
                          >
                          <input
                            type="text"
                            class="form-control pxp-form-control-transform"
                            id="pxp-calculator-form-down-percentage"
                            data-type="percent"
                            value="10%"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="pxp-single-property-section mt-4 mt-md-5">
              <h3>Nearby Facilities</h3>
              <!-- <ul class="nav nav-tabs pxp-nav-tabs mt-3 mt-md-4">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    href="#elementary"
                    data-toggle="tab"
                    >Elementary</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#middle" data-toggle="tab"
                    >Middle</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#high" data-toggle="tab">High</a>
                </li>
              </ul> -->
              <div class="tab-content mt-3">
                <div class="tab-pane active" id="elementary" role="tabpanel">
                  <table class="table table-responsive pxp-table">
                    <thead>
                      <tr>
                        <th scope="col">Place</th>
                        <th scope="col">Kms</th>
                        <!-- <th scope="col">Grades</th>
                        <th scope="col">Rating</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>School</td>
                        <td><?php echo $distance_school ?></td>
                        <!-- <td>9-11</td>
                        <td>
                          5/5<span class="pxp-school-rating"
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                          ></span>
                        </td> -->
                      </tr>
                      <tr>
                        <td>Metro</td>
                        <td><?php echo $distance_metro ?></td>
                        <!-- <td>9-11</td> -->
                        <!-- <td>
                          5/5<span class="pxp-school-rating"
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                          ></span>
                        </td> -->
                      </tr>
                      <tr>
                        <td>Hospital</td>
                        <td><?php echo $distance_hospital ?></td>
                        <!-- <td>9-11</td> -->
                        <!-- <td>
                          5/5<span class="pxp-school-rating"
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                          ></span>
                        </td> -->
                      </tr>
                      <tr>
                        <td>Shopping Mall</td>
                        <td><?php echo $distance_shoopingMall ?></td>
                        <!-- <td>9-11</td> -->
                        <!-- <td>
                          5/5<span class="pxp-school-rating"
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                          ></span>
                        </td> -->
                      </tr>
                      <tr>
                        <td>Bus Stand</td>
                        <td><?php echo $distance_busStop ?></td>
                        <!-- <td>9-11</td> -->
                        <!-- <td>
                          5/5<span class="pxp-school-rating"
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                          ></span>
                        </td> -->
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="middle" role="tabpanel">
                  <table class="table table-responsive pxp-table">
                    <thead>
                      <tr>
                        <th scope="col">School</th>
                        <th scope="col">Type</th>
                        <th scope="col">Grades</th>
                        <th scope="col">Rating</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Harvest Collegiate High School</td>
                        <td>Public</td>
                        <td>9-11</td>
                        <td>
                          5/5<span class="pxp-school-rating"
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                          ></span>
                        </td>
                      </tr>
                      <tr>
                        <td>Harvest Collegiate High School</td>
                        <td>Public</td>
                        <td>9-11</td>
                        <td>
                          5/5<span class="pxp-school-rating"
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                          ></span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="high" role="tabpanel">
                  <table class="table table-responsive pxp-table">
                    <thead>
                      <tr>
                        <th scope="col">School</th>
                        <th scope="col">Type</th>
                        <th scope="col">Grades</th>
                        <th scope="col">Rating</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Harvest Collegiate High School</td>
                        <td>Public</td>
                        <td>9-11</td>
                        <td>
                          5/5<span class="pxp-school-rating"
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                          ></span>
                        </td>
                      </tr>
                      <tr>
                        <td>Harvest Collegiate High School</td>
                        <td>Public</td>
                        <td>9-11</td>
                        <td>
                          5/5<span class="pxp-school-rating"
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                            ><span class="fa fa-star"></span
                          ></span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div
              class="pxp-single-property-section pxp-sp-agent-section mt-4 mt-md-5 mt-lg-0"
            >
              <h3>Listed By</h3>
              <div class="pxp-sp-agent mt-3 mt-md-4">
                <a
                  href="single-agent.html"
                  class="pxp-sp-agent-fig pxp-cover rounded-lg"
                  style="
                    background-image: url(images/agent-4.jpg);
                    background-position: top center;
                  "
                ></a>
                <div class="pxp-sp-agent-info">
                  <div class="pxp-sp-agent-info-name">
                    <a href="single-agent.html"><?php echo $agentName ?></a>
                  </div>
                  <div class="pxp-sp-agent-info-rating">
                    <span class="fa fa-star"></span
                    ><span class="fa fa-star"></span
                    ><span class="fa fa-star"></span
                    ><span class="fa fa-star"></span
                    ><span class="fa fa-star"></span>
                  </div>
                  <div class="pxp-sp-agent-info-email">
                    <a href="#">
                      <?php echo $agentEmail ?>
                    </a>
                  </div>
                  <div class="pxp-sp-agent-info-phone">
                    <span class="fa fa-phone"></span> <?php echo $agentContact ?>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="pxp-sp-agent-btns mt-3 mt-md-4">
                  <a
                    href="#pxp-contact-agent"
                    class="pxp-sp-agent-btn-main"
                    data-toggle="modal"
                    data-target="#pxp-contact-agent"
                    ><span class="fa fa-envelope-o"></span> Contact Agent</a
                  >
                  <a
                    href="#pxp-contact-agent"
                    class="pxp-sp-agent-btn"
                    data-toggle="modal"
                    data-target="#pxp-contact-agent"
                    ><span class="fa fa-calendar-check-o"></span> Request
                    Tour</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <div class="pxp-footer pt-100 pb-100 mt-100">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-4">
            <div class="pxp-footer-logo">DoorsTour</div>
            <div class="pxp-footer-address mt-2">
              <p>
                Launched in 2020, DoorsTour is India's fastest growing online
                Property marketplace to buy, sell, and rent residential and
                commercial properties. Experience every property in 360 view,
                DoorsTour is the most preferred real estate portal in India by
                various independent surveys.
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-lg-8">
            <div class="row">
              <div class="col-sm-12 col-md-4">
                <h4 class="pxp-footer-header mt-4 mt-lg-0">Company</h4>
                <ul class="list-unstyled pxp-footer-links mt-2">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="agents.html">Agents</a></li>
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="#">Sitemap</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-sm-12 col-md-4">
                <h4 class="pxp-footer-header mt-4 mt-lg-0">Actions</h4>
                <ul class="list-unstyled pxp-footer-links mt-2">
                  <li><a href="properties.php">Buy Properties</a></li>
                  <li><a href="rent.php">Rent Properties</a></li>
                  <li><a href="submit-property.html">Sell Properties</a></li>
                </ul>
              </div>
              <div class="col-sm-12 col-md-4">
                <h4 class="pxp-footer-header mt-4 mt-lg-0">Explore</h4>
                <ul class="list-unstyled pxp-footer-links mt-2">
                  <li><a href="rent.php">Homes for Rent</a></li>
                  <li><a href="rent.php">Apartments for Rent</a></li>
                  <li><a href="properties.php">Homes for Sale</a></li>
                  <li><a href="properties.php">Apartments for Sale</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row pxp-footer-social mt-2">
      <div class="col-md-12" style="text-align: center">
        <a href="https://www.instagram.com/doorstourindia/"><span class="fa fa-instagram"></span></a>
        <a href="https://www.facebook.com/doorstourindia/"><span class="fa fa-facebook-square"></span></a>
        <a href="https://twitter.com/doorstour1?s=08"><span class="fa fa-twitter"></span></a>
        <a href="https://www.linkedin.com/company/doorstour/"><span class="fa fa-linkedin"></span></a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12" style="text-align: center">
        <div class="pxp-footer-bottom mt-2">
          <div>
            <a href="termsncond.html">Terms & Conditions</a> and
            <a href="privacypolicy.html">Privacy Policy</a>
          </div>
          <div class="pxp-footer-copyright">
            &copy; DoorsTour All Rights Reserved. 2021
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      id="pxp-signin-modal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="pxpSigninModal"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5 class="modal-title" id="pxpSigninModal">Welcome back!</h5>
            <form class="mt-4">
              <div class="form-group">
                <label for="pxp-signin-email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="pxp-signin-email"
                  placeholder="Enter your email address"
                />
              </div>
              <div class="form-group">
                <label for="pxp-signin-pass">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="pxp-signin-pass"
                  placeholder="Enter your password"
                />
              </div>
              <div class="form-group">
                <a href="#" class="pxp-agent-contact-modal-btn">Sign In</a>
              </div>
              <div class="form-group mt-4 text-center pxp-modal-small">
                <a href="#" class="pxp-modal-link">Forgot password</a>
              </div>
              <div class="text-center pxp-modal-small">
                New to DoorsTour?
                <a
                  href="javascript:void(0);"
                  class="pxp-modal-link pxp-signup-trigger"
                  >Create an account</a
                >
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      id="pxp-signup-modal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="pxpSignupModal"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5 class="modal-title" id="pxpSignupModal">Create an account</h5>
            <form class="mt-4">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="pxp-signup-firstname">First Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="pxp-signup-firstname"
                      placeholder="Enter first name"
                    />
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="pxp-signup-lastname">Last Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="pxp-signup-lastname"
                      placeholder="Enter last name"
                    />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="pxp-signup-email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="pxp-signup-email"
                  placeholder="Enter your email address"
                />
              </div>
              <div class="form-group">
                <label for="pxp-signup-pass">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="pxp-signup-pass"
                  placeholder="Create a password"
                />
              </div>
              <div class="form-group">
                <a href="#" class="pxp-agent-contact-modal-btn">Sign Up</a>
              </div>
              <div class="text-center mt-4 pxp-modal-small">
                Already have an account?
                <a
                  href="javascript:void(0);"
                  class="pxp-modal-link pxp-signin-trigger"
                  >Sign in</a
                >
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYV9SV-9ZfSiFtqnPqd3UjdSgfX8VcQ8M&amp;libraries=geometry&amp;libraries=places"></script>
    <script src="js/photoswipe.min.js"></script>
    <script src="js/photoswipe-ui-default.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/infobox.js"></script>
    <script src="js/single-map.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/main5732.js?asdasd12"></script>
  </body>
</html>
