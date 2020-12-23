<?php
/*************************************************************************************************************/
/******************************Carousal***********************************************************************/
/*************************************************************************************************************/
  require_once 'templatedata2.php';
  $stmt = $conn->prepare("SELECT * FROM template2 ORDER BY id DESC LIMIT 4");
  $stmt->execute();
  $array = [];
  $array1 = [];
  $array2 = [];
  $array3 = [];
  $array8 = [];
  foreach ($stmt->get_result() as $row)
  {
      $array[] = $row['id'];
      $array1[] = $row['detail'];
      $array2[] = $row['detailCategory'];
      $array3[] = $row['detailSummary'];
      $array8[] = $row['photo1'];
  }
  echo "<script>console.log('" . json_encode($array) . "')</script>";
  echo "<script>console.log('" . json_encode($array1) . "')</script>";
  echo "<script>console.log('" . json_encode($array2) . "')</script>";
  echo "<script>console.log('" . json_encode($array3) . "')</script>";
  echo "<script>console.log('" . json_encode($array8) . "')</script>";
/*************************************************************************************************************/
/*************************************cards*******************************************************************/
/*************************************************************************************************************/
  $stmt = $conn->prepare("SELECT * FROM template2");
  $stmt->execute();
  $array4 = [];
  $array5 = [];
  $array6 = [];
  $array7 = [];
  foreach ($stmt->get_result() as $row)
  {
      $array4[] = $row['id'];
      $array5[] = $row['detail'];
      $array6[] = $row['detailCategory'];
      $array7[] = $row['detailDate'];
      $array9[] = $row['img1'];
  }
  echo "<script>console.log('" . json_encode($array4) . "')</script>";
  echo "<script>console.log('" . json_encode($array5) . "')</script>";
  echo "<script>console.log('" . json_encode($array6) . "')</script>";
  echo "<script>console.log('" . json_encode($array7) . "')</script>";
/*************************************************************************************************************/
/*************************************************************************************************************/
/*************************************************************************************************************/
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
    <link rel="stylesheet" href="css/stylecd0a.css?pas" />


    <script>
        function blog_post(blog_id){
            localStorage['id123'] = blog_id;
            localStorage.setItem("id12345", blog_id);
        }
    </script>

    <title>DoorsTour</title>
  </head>
  <body onload="dynamic_post_change()">
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
                  <li><a href="properties.php">Rent</a></li>
                  <li>
                    <a href="properties.php">PG</a>
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

    <div class="pxp-content">
      <div class="pxp-blog-posts pxp-content-wrapper mt-100">
        <div class="container">
          <h1 class="pxp-page-header">Latest Articles</h1>
          <p class="pxp-text-light">
            Read our latest articles on real estate, architecture, interior
            design, and more
          </p>

          <div class="pxp-blog-posts-carousel-1 mt-4 mt-md-5">
            <div
              id="pxp-blog-posts-carousel-1-img"
              class="carousel slide pxp-blog-posts-carousel-1-img"
              data-ride="carousel"
              data-pause="false"
              data-interval="false"
            >
              <div class="carousel-inner">
                <div class="carousel-item active" data-slide="0">
                  <div
                    class="pxp-hero-bg pxp-cover"
                    style="
                      background-image: url(<?php echo $array8[0] ?>);
                      background-position: 50% 50%;
                    "
                  ></div>
                </div>
                <div class="carousel-item" data-slide="1">
                  <div
                    class="pxp-hero-bg pxp-cover"
                    style="
                      background-image: url(<?php echo $array8[1] ?>);
                      background-position: 50% 50%;
                    "
                  ></div>
                </div>
                <div class="carousel-item" data-slide="2">
                  <div
                    class="pxp-hero-bg pxp-cover"
                    style="
                      background-image: url(<?php echo $array8[2] ?>);
                      background-position: 50% 50%;
                    "
                  ></div>
                </div>
                <div class="carousel-item" data-slide="3">
                  <div
                    class="pxp-hero-bg pxp-cover"
                    style="
                      background-image: url(<?php echo $array8[3] ?>);
                      background-position: 50% 50%;
                    "
                  ></div>
                </div>
              </div>
            </div>

            <div class="pxp-carousel-controls">
              <a
                class="pxp-carousel-control-prev"
                role="button"
                data-slide="prev"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="32.414"
                  height="20.828"
                  viewBox="0 0 32.414 20.828"
                >
                  <g
                    id="Group_30"
                    data-name="Group 30"
                    transform="translate(-1845.086 -1586.086)"
                  >
                    <line
                      id="Line_2"
                      data-name="Line 2"
                      x1="30"
                      transform="translate(1846.5 1596.5)"
                      fill="none"
                      stroke="#333"
                      stroke-linecap="round"
                      stroke-width="2"
                    ></line>
                    <line
                      id="Line_3"
                      data-name="Line 3"
                      x1="9"
                      y2="9"
                      transform="translate(1846.5 1587.5)"
                      fill="none"
                      stroke="#333"
                      stroke-linecap="round"
                      stroke-width="2"
                    ></line>
                    <line
                      id="Line_4"
                      data-name="Line 4"
                      x1="9"
                      y1="9"
                      transform="translate(1846.5 1596.5)"
                      fill="none"
                      stroke="#333"
                      stroke-linecap="round"
                      stroke-width="2"
                    ></line>
                  </g>
                </svg>
              </a>
              <a
                class="pxp-carousel-control-next"
                role="button"
                data-slide="next"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="32.414"
                  height="20.828"
                  viewBox="0 0 32.414 20.828"
                >
                  <g
                    id="Symbol_1_1"
                    data-name="Symbol 1 – 1"
                    transform="translate(-1847.5 -1589.086)"
                  >
                    <line
                      id="Line_5"
                      data-name="Line 2"
                      x2="30"
                      transform="translate(1848.5 1599.5)"
                      fill="none"
                      stroke="#333"
                      stroke-linecap="round"
                      stroke-width="2"
                    ></line>
                    <line
                      id="Line_6"
                      data-name="Line 3"
                      x2="9"
                      y2="9"
                      transform="translate(1869.5 1590.5)"
                      fill="none"
                      stroke="#333"
                      stroke-linecap="round"
                      stroke-width="2"
                    ></line>
                    <line
                      id="Line_7"
                      data-name="Line 4"
                      y1="9"
                      x2="9"
                      transform="translate(1869.5 1599.5)"
                      fill="none"
                      stroke="#333"
                      stroke-linecap="round"
                      stroke-width="2"
                    ></line>
                  </g>
                </svg>
              </a>
            </div>

            <div class="pxp-blog-posts-carousel-1-caption-container">
              <div
                id="pxp-blog-posts-carousel-1-caption"
                class="carousel slide pxp-blog-posts-carousel-1-caption"
                data-ride="carousel"
                data-pause="false"
                data-interval="false"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active" data-slide="0">
                    <div class="pxp-blog-posts-carousel-1-caption-category">
                      <?php echo $array1[0] ?>
                    </div>
                    <div class="pxp-blog-posts-carousel-1-caption-title">
                      <?php echo $array2[0] ?>
                    </div>
                    <div class="pxp-blog-posts-carousel-1-caption-summary">
                      <?php echo $array3[0] ?>
                    </div>
                    <a
                      href="my-post-temp.php?id=<?php echo $array[0] ?>" target="_blank" id="id-0" onclick="blog_post(this.id)"
                      class="pxp-primary-cta text-uppercase mt-3 mt-md-4 pxp-animate"
                      >Read Article
                    </a>
                  </div>
                  <div class="carousel-item" data-slide="1">
                    <div class="pxp-blog-posts-carousel-1-caption-category">
                      <?php echo $array1[1] ?>
                    </div>
                    <div class="pxp-blog-posts-carousel-1-caption-title">
                      <?php echo $array2[1] ?>
                    </div>
                    <div class="pxp-blog-posts-carousel-1-caption-summary">
                      <?php echo $array3[1] ?>
                    </div>
                    <a
                      href="my-post-temp.php?id=<?php echo $array[1] ?>" target="_blank" id="id-1" onclick="blog_post(this.id)"
                      class="pxp-primary-cta text-uppercase mt-3 mt-md-4 pxp-animate"
                      >Read Article</a
                    >
                  </div>
                  <div class="carousel-item" data-slide="2">
                    <div class="pxp-blog-posts-carousel-1-caption-category">
                      <?php echo $array1[2] ?>
                    </div>
                    <div class="pxp-blog-posts-carousel-1-caption-title">
                      <?php echo $array2[2] ?>
                    </div>
                    <div class="pxp-blog-posts-carousel-1-caption-summary">
                      <?php echo $array3[2] ?>
                    </div>
                    <a
                      href="my-post-temp.php?id=<?php echo $array[2] ?>" target="_blank" id="id-2" onclick="blog_post(this.id)"
                      class="pxp-primary-cta text-uppercase mt-3 mt-md-4 pxp-animate"
                      >Read Article</a
                    >
                  </div>
                  <div class="carousel-item" data-slide="3">
                    <div class="pxp-blog-posts-carousel-1-caption-category">
                      <?php echo $array1[3] ?>
                    </div>
                    <div class="pxp-blog-posts-carousel-1-caption-title">
                      <?php echo $array2[3] ?>
                    </div>
                    <div class="pxp-blog-posts-carousel-1-caption-summary">
                      <?php echo $array3[3] ?>
                    </div>
                    <a
                      href="my-post-temp.php?id=<?php echo $array[3] ?>" target="_blank" id="id-3" onclick="blog_post(this.id)"
                      class="pxp-primary-cta text-uppercase mt-3 mt-md-4 pxp-animate"
                      >Read Article</a
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="pxp-blog-posts-carousel-1-badge">Featured</div>
          </div>

          <div class="row mt-200">
            <div class="col-sm-12 col-lg-9">
              <div class="row">
                <div class="col-sm-12 col-md-6">
        <!---->      <a href="my-post-temp.php?id=<?php echo $array4[0] ?>" target="_blank" class="pxp-posts-1-item" id="id-0" onclick="blog_post(this.id)" >
                    <div class="pxp-posts-1-item-fig-container">
                      <div
                        class="pxp-posts-1-item-fig pxp-cover"
                        style="background-image: url(<?php echo $array9[0] ?>)"
                      ></div>
                    </div>
                    <div class="pxp-posts-1-item-details">
                      <div class="pxp-posts-1-item-details-category" id="header-type">
                        <?php echo $array5[0] ?>
                      </div>
                      <div class="pxp-posts-1-item-details-title">
                        <?php echo $array6[0] ?>
                      </div>
                      <div class="pxp-posts-1-item-details-date mt-2">
                        <?php echo $array7[0] ?>
                      </div>
                      <div class="pxp-posts-1-item-cta text-uppercase">
                        Read Article
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-12 col-md-6">
                  <a href="my-post-temp.php?id=<?php echo $array4[1] ?>" target="_blank" class="pxp-posts-1-item" id="id-1" onclick="blog_post(this.id)" >
                    <div class="pxp-posts-1-item-fig-container">
                      <div
                        class="pxp-posts-1-item-fig pxp-cover"
                        style="background-image: url(<?php echo $array9[1] ?>)"
                      ></div>
                    </div>
                    <div class="pxp-posts-1-item-details">
                      <div class="pxp-posts-1-item-details-category">
                        <?php echo $array5[1] ?>
                      </div>
                      <div class="pxp-posts-1-item-details-title">
                        <?php echo $array6[1] ?>
                      </div>
                      <div class="pxp-posts-1-item-details-date mt-2">
                        <?php echo $array7[1] ?>
                      </div>
                      <div class="pxp-posts-1-item-cta text-uppercase">
                        Read Article
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-12 col-md-6">
                  <a href="my-post-temp.php?id=<?php echo $array4[2] ?>" target="_blank" class="pxp-posts-1-item" id="id-2" onclick="blog_post(this.id)" >
                    <div class="pxp-posts-1-item-fig-container">
                      <div
                        class="pxp-posts-1-item-fig pxp-cover"
                        style="background-image: url(images/post-3.jpg)"
                      ></div>
                    </div>
                    <div class="pxp-posts-1-item-details">
                      <div class="pxp-posts-1-item-details-category">
                        <?php echo $array5[2] ?>
                      </div>
                      <div class="pxp-posts-1-item-details-title">
                        <?php echo $array6[2] ?>
                      </div>
                      <div class="pxp-posts-1-item-details-date mt-2">
                        <?php echo $array7[2] ?>
                      </div>
                      <div class="pxp-posts-1-item-cta text-uppercase">
                        Read Article
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-12 col-md-6">
                  <a href="my-post-temp.php?id=<?php echo $array4[3] ?>" target="_blank" class="pxp-posts-1-item" id="id-3" onclick="blog_post(this.id)" >
                    <div class="pxp-posts-1-item-fig-container">
                      <div
                        class="pxp-posts-1-item-fig pxp-cover"
                        style="background-image: url(images/post-4.jpg)"
                      ></div>
                    </div>
                    <div class="pxp-posts-1-item-details">
                      <div class="pxp-posts-1-item-details-category">
                        <?php echo $array5[3] ?>
                      </div>
                      <div class="pxp-posts-1-item-details-title">
                        <?php echo $array6[3] ?>
                      </div>
                      <div class="pxp-posts-1-item-details-date mt-2">
                        <?php echo $array7[3] ?>
                      </div>
                      <div class="pxp-posts-1-item-cta text-uppercase">
                        Read Article
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-12 col-md-6">
                  <a href="my-post-temp.php?id=<?php echo $array4[4] ?>" target="_blank" class="pxp-posts-1-item" id="id-4" onclick="blog_post(this.id)" >
                    <div class="pxp-posts-1-item-fig-container">
                      <div
                        class="pxp-posts-1-item-fig pxp-cover"
                        style="background-image: url(images/post-5.jpg)"
                      ></div>
                    </div>
                    <div class="pxp-posts-1-item-details">
                      <div class="pxp-posts-1-item-details-category">
                        <?php echo $array5[4] ?>
                      </div>
                      <div class="pxp-posts-1-item-details-title">
                        <?php echo $array6[4] ?>
                      </div>
                      <div class="pxp-posts-1-item-details-date mt-2">
                        <?php echo $array7[4] ?>
                      </div>
                      <div class="pxp-posts-1-item-cta text-uppercase">
                        Read Article
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-12 col-md-6">
                  <a href="my-post-temp.php?id=<?php echo $array4[5] ?>" target="_blank" class="pxp-posts-1-item" id="id-5" onclick="blog_post(this.id)" >
                    <div class="pxp-posts-1-item-fig-container">
                      <div
                        class="pxp-posts-1-item-fig pxp-cover"
                        style="background-image: url(images/post-6.jpg)"
                      ></div>
                    </div>
                    <div class="pxp-posts-1-item-details">
                      <div class="pxp-posts-1-item-details-category">
                        <?php echo $array5[5] ?>
                      </div>
                      <div class="pxp-posts-1-item-details-title">
                        <?php echo $array6[5] ?>
                      </div>
                      <div class="pxp-posts-1-item-details-date mt-2">
                        <?php echo $array7[5] ?>
                      </div>
                      <div class="pxp-posts-1-item-cta text-uppercase">
                        Read Article
                      </div>
                    </div>
                  </a>
                </div>
                <!----------------YOU CAN ADD MORE ARTICLES LIKE ABOVE HERE ...........-->
                <!-- <div class="col-sm-12 col-md-6">
                    <a href="single-post.html" class="pxp-posts-1-item" onclick="blog_post(this.id)" id="id-5">
                      <div class="pxp-posts-1-item-fig-container">
                        <div
                          class="pxp-posts-1-item-fig pxp-cover"
                          style="background-image: url(images/post-6.jpg)"
                        ></div>
                      </div>
                      <div class="pxp-posts-1-item-details">
                        <div class="pxp-posts-1-item-details-category">
                          Interior Design
                        </div>
                        <div class="pxp-posts-1-item-details-title">
                          Stylish Modern Ranch Exuding a Welcoming Feel
                        </div>
                        <div class="pxp-posts-1-item-details-date mt-2">
                          April 9, 2019
                        </div>
                        <div class="pxp-posts-1-item-cta text-uppercase">
                          Read Article
                        </div>
                      </div>
                    </a>
                  </div> -->
                  <!---------------------END ARTICLES COUNT HERE .......................------------------>
              </div>


              <ul class="pagination pxp-paginantion mt-3 mt-md-4">
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
            <div class="col-sm-12 col-lg-3 mt-4 mt-md-5 mt-lg-0">
              <div class="pxp-blog-posts-side-section">
                <h3>Search Articles</h3>
                <div class="mt-3 mt-md-4">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control pxp-is-address"
                      placeholder="Search"
                    />
                    <span class="fa fa-search"></span>
                  </div>
                </div>
              </div>

              <div class="pxp-blog-posts-side-section mt-4 mt-md-5">
                <h3>Categories</h3>
                <ul
                  class="pxp-blog-posts-side-v-list list-unstyled mt-3 mt-md-4"
                >
                  <li><a href="#">Fashion (3)</a></li>
                  <li><a href="#">Lifestyle (2)</a></li>
                  <li><a href="#">Personal (2)</a></li>
                  <li><a href="#">Stories (2)</a></li>
                  <li><a href="#">Travel (4)</a></li>
                </ul>
              </div>

              <div class="pxp-blog-posts-side-section mt-4 mt-md-5">
                <h3>Tags</h3>
                <div class="pxp-blog-posts-side-tags mt-3 mt-md-4">
                  <a href="#">Premium (10)</a>
                  <a href="#">Interior (12)</a>
                  <a href="#">Stories (6)</a>
                  <a href="#">Fashion (2)</a>
                  <a href="#">Architecture (8)</a>
                  <a href="#">Lifestyle (5)</a>
                  <a href="#">Travel (10)</a>
                  <a href="#">Personal (11)</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="pxp-full pxp-cover pt-100 pb-100 mt-100"
      style="background-image: url(images/newsletter-1-fig.jpg)"
    >
      <div class="container">
        <h2 class="pxp-section-h2">Stay Up to Date</h2>
        <p class="pxp-text-light">
          Subscribe to our newsletter to receive our weekly feed
        </p>
        <div class="row mt-4 mt-md-5">
          <div class="col-xs-12 col-sm-6">
            <form
              action="http://pixelprime.co/themes/resideo/light/blog.php"
              class="pxp-newsletter-1-form"
            >
              <input
                type="text"
                class="form-control"
                placeholder="Enter your email..."
              />
              <a
                href="#"
                class="pxp-primary-cta text-uppercase pxp-animate mt-3 mt-md-4"
                >Subscribe
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>

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
                  <li><a href="properties.php">Rent Properties</a></li>
                  <li><a href="submit-property.html">Sell Properties</a></li>
                </ul>
              </div>
              <div class="col-sm-12 col-md-4">
                <h4 class="pxp-footer-header mt-4 mt-lg-0">Explore</h4>
                <ul class="list-unstyled pxp-footer-links mt-2">
                  <li><a href="properties.php">Homes for Rent</a></li>
                  <li><a href="properties.php">Apartments for Rent</a></li>
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
            &copy; DoorsTour All Rights Reserved. 2020
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
    <script src="js/maine363.js?asder"></script>
  </body>
</html>
