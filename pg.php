<?php
  require_once 'templatedata.php';
  $stmt = $conn->prepare("SELECT * FROM pg");
  $stmt->execute();
  $array = [];
  $array1 = [];
  $array2 = [];
  $array3 = [];
  $array4 = [];
  foreach ($stmt->get_result() as $row)
  {
      $array[] = $row['id'];
      $array1[] = $row['location'];
      $array2[] = $row['price'];
      $array3[] = $row['bhk'];
      $array4[] = $row['area'];
  }
  echo "<script>console.log('" . json_encode($array) . "')</script>";
  echo "<script>console.log('" . json_encode($array1) . "')</script>";
  echo "<script>console.log('" . json_encode($array2) . "')</script>";
  echo "<script>console.log('" . json_encode($array3) . "')</script>";
  echo "<script>console.log('" . json_encode($array4) . "')</script>";
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
    <link rel="stylesheet" href="css/style0f71.css?asdsdd" />

    <title>PGs - DoorsTour</title>
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
    <div class="pxp-content pxp-full-height">
      <div class="pxp-map-side pxp-map-right pxp-half">
        <!-- <div id="results-map"></div>
        <a href="javascript:void(0);" class="pxp-list-toggle"
          ><span class="fa fa-list"></span
        ></a> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.9368337595397!2d77.09949231462741!3d28.691536082394524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d040810ed1a23%3A0x639c9986bead9013!2sPragati%20Apartments!5e0!3m2!1sen!2sin!4v1603525268584!5m2!1sen!2sin" width="750" height="750" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="pxp-content-side pxp-content-left pxp-half">
        <div class="pxp-content-side-wrapper">
          <div class="d-flex">
            <div class="pxp-content-side-search-form">
              <div class="row pxp-content-side-search-form-row">
                <div
                  class="col-5 col-sm-5 col-md-4 col-lg-3 pxp-content-side-search-form-col"
                >
                  <select class="custom-select" id="pxp-p-search-status">
                    <option value="buy" selected="selected">Buy</option>
                    <option value="rent">Rent</option>
                    <option value="pg">PG</option>
                  </select>
                </div>
                <div
                  class="col-7 col-sm-7 col-md-8 col-lg-9 pxp-content-side-search-form-col"
                >
                  <input
                    type="text"
                    class="form-control pxp-is-address"
                    placeholder="Search by City, Neighborhood, or Address"
                    id="pxp-p-search-address"
                  />
                  <span class="fa fa-search"></span>
                </div>
              </div>
            </div>
            <div class="d-flex">
              <a role="button" class="pxp-adv-toggle"
                ><span class="fa fa-sliders"></span
              ></a>
            </div>
          </div>
          <div class="pxp-content-side-search-form-adv mb-3">
            <div class="row pxp-content-side-search-form-row">
              <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                <div class="form-group">
                  <label for="pxp-p-filter-price-min">Price</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Min"
                    id="pxp-p-filter-price-min"
                  />
                </div>
              </div>
              <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                <div class="form-group">
                  <label
                    for="pxp-p-filter-price-max"
                    class="d-none d-sm-inline-block"
                    >&nbsp;</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Max"
                    id="pxp-p-filter-price-max"
                  />
                </div>
              </div>
              <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                <div class="form-group">
                  <label for="pxp-p-filter-beds">Beds</label>
                  <select class="custom-select" id="pxp-p-filter-beds">
                    <option value="" selected="selected">Any</option>
                    <option value="">Studio</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5+</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                <div class="form-group">
                  <label for="pxp-p-filter-baths">Baths</label>
                  <select class="custom-select" id="pxp-p-filter-baths">
                    <option value="" selected="selected">Any</option>
                    <option value="">1+</option>
                    <option value="">1.5+</option>
                    <option value="">2+</option>
                    <option value="">3+</option>
                    <option value="">4+</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                <div class="form-group">
                  <label for="pxp-p-filter-type">Type</label>
                  <select class="custom-select" id="pxp-p-filter-type">
                    <option value="">Select type</option>
                    <option value="">Apartment</option>
                    <option value="">House</option>
                    <option value="">Townhome</option>
                    <option value="">Multi-Family</option>
                    <option value="">Land</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                <div class="form-group">
                  <label for="pxp-p-filter-size-min">Size (sq ft)</label>
                  <input
                    type="text"
                    class="form-control"
                    id="pxp-p-filter-size-min"
                    placeholder="Min"
                  />
                </div>
              </div>
              <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                <div class="form-group">
                  <label
                    for="pxp-p-filter-size-max"
                    class="d-none d-sm-inline-block"
                    >&nbsp;</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="pxp-p-filter-size-max"
                    placeholder="Max"
                  />
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="mb-2">Amenities</label>
              <div class="row pxp-content-side-search-form-row">
                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                  <div class="form-group">
                    <div class="checkbox custom-checkbox">
                      <label
                        ><input type="checkbox" value="1" /><span
                          class="fa fa-check"
                        ></span>
                        Internet</label
                      >
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                  <div class="form-group">
                    <div class="checkbox custom-checkbox">
                      <label
                        ><input type="checkbox" value="1" /><span
                          class="fa fa-check"
                        ></span>
                        Garage</label
                      >
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                  <div class="form-group">
                    <div class="checkbox custom-checkbox">
                      <label
                        ><input type="checkbox" value="1" /><span
                          class="fa fa-check"
                        ></span>
                        Air Conditioning</label
                      >
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                  <div class="form-group">
                    <div class="checkbox custom-checkbox">
                      <label
                        ><input type="checkbox" value="1" /><span
                          class="fa fa-check"
                        ></span>
                        Dishwasher</label
                      >
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                  <div class="form-group">
                    <div class="checkbox custom-checkbox">
                      <label
                        ><input type="checkbox" value="1" /><span
                          class="fa fa-check"
                        ></span>
                        Disposal</label
                      >
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                  <div class="form-group">
                    <div class="checkbox custom-checkbox">
                      <label
                        ><input type="checkbox" value="1" /><span
                          class="fa fa-check"
                        ></span>
                        Balcony</label
                      >
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                  <div class="form-group">
                    <div class="checkbox custom-checkbox">
                      <label
                        ><input type="checkbox" value="1" /><span
                          class="fa fa-check"
                        ></span>
                        Gym</label
                      >
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                  <div class="form-group">
                    <div class="checkbox custom-checkbox">
                      <label
                        ><input type="checkbox" value="1" /><span
                          class="fa fa-check"
                        ></span>
                        Playroom</label
                      >
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                  <div class="form-group">
                    <div class="checkbox custom-checkbox">
                      <label
                        ><input type="checkbox" value="1" /><span
                          class="fa fa-check"
                        ></span>
                        Bar</label
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <a href="#" class="pxp-filter-btn">Apply Filters</a>
          </div>
          <div class="row pb-4">
            <div class="col-sm-6">
              <h2 class="pxp-content-side-h2">1,684 Results</h2>
            </div>
            <div class="col-sm-6">
              <div class="pxp-sort-form form-inline float-right">
                <div class="form-group">
                  <select class="custom-select" id="pxp-sort-results">
                    <option value="" selected="selected">Default Sort</option>
                    <option value="">Price (Lo-Hi)</option>
                    <option value="">Price (Hi-Lo)</option>
                    <option value="">Beds</option>
                    <option value="">Baths</option>
                    <option value="">Size</option>
                  </select>
                </div>
                <div class="form-group d-flex">
                  <a role="button" class="pxp-map-toggle"
                    ><span class="fa fa-map-o"></span
                  ></a>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12 col-md-6 col-xxxl-4">
              <a
                href="single-pg.php?id=<?php echo $array[0]; ?>"
                class="pxp-results-card-1 rounded-lg"
                data-prop="1"
              >
                <div
                  id="card-carousel-1"
                  class="carousel slide"
                  data-ride="carousel"
                  data-interval="false"
                >
                  <div class="carousel-inner">
                    <div
                      class="carousel-item active"
                      style="
                        background-image: url(images/properties/prop-1-1-gallery.jpg);
                      "
                    ></div>
                    <div
                      class="carousel-item"
                      style="
                        background-image: url(images/properties/prop-1-2-gallery.jpg);
                      "
                    ></div>
                    <div
                      class="carousel-item"
                      style="
                        background-image: url(images/properties/prop-1-3-gallery.jpg);
                      "
                    ></div>
                  </div>
                  <span
                    class="carousel-control-prev"
                    data-href="#card-carousel-1"
                    data-slide="prev"
                  >
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                  </span>
                  <span
                    class="carousel-control-next"
                    data-href="#card-carousel-1"
                    data-slide="next"
                  >
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                  </span>
                </div>
                <div class="pxp-results-card-1-gradient"></div>
                <div class="pxp-results-card-1-details">
                  <div class="pxp-results-card-1-details-title">
                    Chic Apartment in <?php echo $array1[0]; ?>
                  </div>
                  <div class="pxp-results-card-1-details-price">₹ <?php echo $array2[0]; ?> Cr.</div>
                </div>
                <div class="pxp-results-card-1-features">
                  <span><?php echo $array3[0] ?> BD <span>|</span> 2 BA <span>|</span> <?php echo $array4[0] ?> SF</span>
                </div>
                <div class="pxp-results-card-1-save">
                  <span class="fa fa-star-o"></span>
                </div>
              </a>
            </div>
            <div class="col-sm-12 col-md-6 col-xxxl-4">
              <a
                href="single-pg.php?id=<?php echo $array[1]; ?>"
                class="pxp-results-card-1 rounded-lg"
                data-prop="2"
              >
                <div
                  id="card-carousel-2"
                  class="carousel slide"
                  data-ride="carousel"
                  data-interval="false"
                >
                  <div class="carousel-inner">
                    <div
                      class="carousel-item active"
                      style="
                        background-image: url(images/properties/prop-2-1-gallery.jpg);
                      "
                    ></div>
                    <div
                      class="carousel-item"
                      style="
                        background-image: url(images/properties/prop-2-2-gallery.jpg);
                      "
                    ></div>
                    <div
                      class="carousel-item"
                      style="
                        background-image: url(images/properties/prop-2-3-gallery.jpg);
                      "
                    ></div>
                  </div>
                  <span
                    class="carousel-control-prev"
                    data-href="#card-carousel-2"
                    data-slide="prev"
                  >
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                  </span>
                  <span
                    class="carousel-control-next"
                    data-href="#card-carousel-2"
                    data-slide="next"
                  >
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                  </span>
                </div>
                <div class="pxp-results-card-1-gradient"></div>
                <div class="pxp-results-card-1-details">
                  <div class="pxp-results-card-1-details-title">
                    Colorful Little Apartment in <?php echo $array1[1] ?>
                  </div>
                  <div class="pxp-results-card-1-details-price">₹ <?php echo $array2[1] ?> Cr.</div>
                </div>
                <div class="pxp-results-card-1-features">
                  <span><?php echo $array3[1] ?> BD <span>|</span> 1 BA <span>|</span> <?php echo $array4[1] ?> SF</span>
                </div>
                <div class="pxp-results-card-1-save">
                  <span class="fa fa-star-o"></span>
                </div>
              </a>
            </div>
            <div class="col-sm-12 col-md-6 col-xxxl-4">
              <a
                href="single-pg.php?id=<?php echo $array[2]; ?>"
                class="pxp-results-card-1 rounded-lg"
                data-prop="3"
              >
                <div
                  id="card-carousel-3"
                  class="carousel slide"
                  data-ride="carousel"
                  data-interval="false"
                >
                  <div class="carousel-inner">
                    <div
                      class="carousel-item active"
                      style="
                        background-image: url(images/properties/prop-3-1-gallery.jpg);
                      "
                    ></div>
                    <div
                      class="carousel-item"
                      style="
                        background-image: url(images/properties/prop-3-2-gallery.jpg);
                      "
                    ></div>
                    <div
                      class="carousel-item"
                      style="
                        background-image: url(images/properties/prop-3-3-gallery.jpg);
                      "
                    ></div>
                  </div>
                  <span
                    class="carousel-control-prev"
                    data-href="#card-carousel-3"
                    data-slide="prev"
                  >
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                  </span>
                  <span
                    class="carousel-control-next"
                    data-href="#card-carousel-3"
                    data-slide="next"
                  >
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                  </span>
                </div>
                <div class="pxp-results-card-1-gradient"></div>
                <div class="pxp-results-card-1-details">
                  <div class="pxp-results-card-1-details-title">
                    Cozy Bedroom Apartment in <?php echo $array1[2] ?>
                  </div>
                  <div class="pxp-results-card-1-details-price">₹ <?php echo $array2[2] ?> Cr</div>
                </div>
                <div class="pxp-results-card-1-features">
                  <span><?php echo $array3[2] ?> BD <span>|</span> 2 BA <span>|</span> <?php echo $array4[2] ?> SF</span>
                </div>
                <div class="pxp-results-card-1-save">
                  <span class="fa fa-star-o"></span>
                </div>
              </a>
            </div>
            <div class="col-sm-12 col-md-6 col-xxxl-4">
              <a
                href="single-pg.php?id=<?php echo $array[3]; ?>"
                class="pxp-results-card-1 rounded-lg"
                data-prop="4"
              >
                <div
                  id="card-carousel-4"
                  class="carousel slide"
                  data-ride="carousel"
                  data-interval="false"
                >
                  <div class="carousel-inner">
                    <div
                      class="carousel-item active"
                      style="
                        background-image: url(images/properties/prop-7-1-gallery.jpg);
                      "
                    ></div>
                    <div
                      class="carousel-item"
                      style="
                        background-image: url(images/properties/prop-7-2-gallery.jpg);
                      "
                    ></div>
                    <div
                      class="carousel-item"
                      style="
                        background-image: url(images/properties/prop-7-3-gallery.jpg);
                      "
                    ></div>
                  </div>
                  <span
                    class="carousel-control-prev"
                    data-href="#card-carousel-4"
                    data-slide="prev"
                  >
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                  </span>
                  <span
                    class="carousel-control-next"
                    data-href="#card-carousel-4"
                    data-slide="next"
                  >
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                  </span>
                </div>
                <div class="pxp-results-card-1-gradient"></div>
                <div class="pxp-results-card-1-details">
                  <div class="pxp-results-card-1-details-title">
                    Beautiful House in <?php echo $array1[3] ?>
                  </div>
                  <div class="pxp-results-card-1-details-price">₹ <?php echo $array2[3]; ?> Cr</div>
                </div>
                <div class="pxp-results-card-1-features">
                  <span
                    ><?php echo $array3[3]; ?> BD <span>|</span> 4.5 BA <span>|</span> <?php echo $array4[3]; ?> SF</span
                  >
                </div>
                <div class="pxp-results-card-1-save">
                  <span class="fa fa-star-o"></span>
                </div>
              </a>
            </div>
            <div class="col-sm-12 col-md-6 col-xxxl-4">
              <a
                href="single-pg.php?id=<?php echo $array[4]; ?>"
                class="pxp-results-card-1 rounded-lg"
                data-prop="5"
              >
                <div
                  id="card-carousel-5"
                  class="carousel slide"
                  data-ride="carousel"
                  data-interval="false"
                >
                  <div class="carousel-inner">
                    <div
                      class="carousel-item active"
                      style="
                        background-image: url(images/properties/prop-8-1-gallery.jpg);
                      "
                    ></div>
                    <div
                      class="carousel-item"
                      style="
                        background-image: url(images/properties/prop-8-2-gallery.jpg);
                      "
                    ></div>
                    <div
                      class="carousel-item"
                      style="
                        background-image: url(images/properties/prop-8-3-gallery.jpg);
                      "
                    ></div>
                  </div>
                  <span
                    class="carousel-control-prev"
                    data-href="#card-carousel-5"
                    data-slide="prev"
                  >
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                  </span>
                  <span
                    class="carousel-control-next"
                    data-href="#card-carousel-5"
                    data-slide="next"
                  >
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                  </span>
                </div>
                <div class="pxp-results-card-1-gradient"></div>
                <div class="pxp-results-card-1-details">
                  <div class="pxp-results-card-1-details-title">
                    Modern Residence in <?php echo $array1[4] ?>
                  </div>
                  <div class="pxp-results-card-1-details-price">₹ <?php echo $array2[4]; ?> Cr. </div>
                </div>
                <div class="pxp-results-card-1-features">
                  <span
                    ><?php echo $array3[4]; ?> BD <span>|</span> 1.5 BA <span>|</span> <?php echo $array4[4]; ?> SF</span
                  >
                </div>
                <div class="pxp-results-card-1-save">
                  <span class="fa fa-star-o"></span>
                </div>
              </a>
            </div>
            <div class="col-sm-12 col-md-6 col-xxxl-4">
              <a
                href="single-pg.php?id=<?php echo $array[5]; ?>"
                class="pxp-results-card-1 rounded-lg"
                data-prop="6"
              >
                <div
                  id="card-carousel-6"
                  class="carousel slide"
                  data-ride="carousel"
                  data-interval="false"
                >
                  <div class="carousel-inner">
                    <div
                      class="carousel-item active"
                      style="
                        background-image: url(images/properties/prop-9-1-gallery.jpg);
                      "
                    ></div>
                    <div
                      class="carousel-item"
                      style="
                        background-image: url(images/properties/prop-9-2-gallery.jpg);
                      "
                    ></div>
                    <div
                      class="carousel-item"
                      style="
                        background-image: url(images/properties/prop-9-3-gallery.jpg);
                      "
                    ></div>
                  </div>
                  <span
                    class="carousel-control-prev"
                    data-href="#card-carousel-6"
                    data-slide="prev"
                  >
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                  </span>
                  <span
                    class="carousel-control-next"
                    data-href="#card-carousel-6"
                    data-slide="next"
                  >
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                  </span>
                </div>
                <div class="pxp-results-card-1-gradient"></div>
                <div class="pxp-results-card-1-details">
                  <div class="pxp-results-card-1-details-title">
                    Luxury Mansion in <?php echo $array1[5] ?>
                  </div>
                  <div class="pxp-results-card-1-details-price">₹ <?php echo $array2[5]; ?> Cr.</div>
                </div>
                <div class="pxp-results-card-1-features">
                  <span><?php echo $array3[5]; ?> BD <span>|</span> 5 BA <span>|</span> <?php echo $array4[5]; ?> SF</span>
                </div>
                <div class="pxp-results-card-1-save">
                  <span class="fa fa-star-o"></span>
                </div>
              </a>
            </div>
          </div>

          <ul class="pagination pxp-paginantion mt-2 mt-md-4">
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#"
                >Next <span class="fa fa-angle-right"></span
              ></a>
            </li>
          </ul>
        </div>
        <div class="pxp-footer pxp-content-side-wrapper">
          <div class="pxp-footer-bottom">
            <div class="pxp-footer-copyright">
              &copy; DoorsTour All Rights Reserved. 2021
            </div>
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
    <script src="js/markerclusterer.js"></script>
    <script src="js/maine2a5.js?asdsd"></script>
    <script src="js/mapee61.js?asldksjd"></script>
  </body>
</html>
