<?php
  require_once 'templatedata2.php';
  $res = $_GET['id'];
  //echo "<script>console.log('" . json_encode($res) . "')</script>";
  //$query = "Select * FROM facility WHERE id = $res";
  $query1 = "Select * FROM template2 WHERE id = $res";
  //$result = mysqli_query($conn, $query);
  $result1 = mysqli_query($conn, $query1);
  while($row = mysqli_fetch_assoc($result1)){
    echo "<script>console.log('" . json_encode($row) . "')</script>";
    $date =$row['detailDate'];
    $detail =$row['detail'];
    $detailCategory =$row['detailCategory'];
    $photo1 =$row['photo1'];
    $P1 =$row['P1'];
    $P2 =$row['P2'];
    $video_img =$row['video_img'];
    $video_link =$row['video_link'];
    $P3 =$row['P3'];
    $P4 =$row['P4'];
    $P5 =$row['P5'];
    $quote =$row['quote'];
    $img1 =$row['img1'];
    $img2 =$row['img2'];
    $finalP =$row['finalP'];

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
    <link rel="stylesheet" href="css/stylef4b1.css?asdpo" />
    <!-- <script src="js/my-post-temp.js"></script> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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

<!---------------------------------------------------------------------------------------------------------------->

    <div class="pxp-content">
      <div class="pxp-blog-posts pxp-content-wrapper mt-100">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-7">
              <div class="pxp-blog-post-category">
                <span id="day_time"><?php echo $date ?></span><span id="header_type"><?php echo $detail ?></span>
              </div>
              <h1 class="pxp-page-header" id="header_part">
                  <?php echo $detailCategory ?>
              </h1>
            </div>
          </div>
        </div>

        <div class="pxp-blog-post-hero mt-4 mt-md-5">
          <div id="url_img"
            class="pxp-blog-post-hero-fig pxp-cover"
            style="background-image: url(<?php echo $photo1 ?>);
              background-position: 50% 50%;
            "
           >

        </div>
        </div>

        <div class="container mt-100">
          <div class="row">
            <div class="col-sm-12 col-lg-1">
              <div class="pxp-blog-post-share">
                <div class="pxp-blog-post-share-label">Share</div>
                <ul class="list-unstyled mt-3">
                  <li>
                    <a href="#"><span class="fa fa-facebook"></span></a>
                  </li>
                  <li>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                  </li>
                  <li>
                    <a href="#"><span class="fa fa-pinterest"></span></a>
                  </li>
                  <li>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-10">
              <div class="pxp-blog-post-block mt-4 mt-md-5 mt-lg-0">
                <h2>Have realistic expectations</h2>
                <div class="mt-3 mt-md-4">
                  <p class="pxp-first-letter" id="p1">
                    <?php echo $P1 ?>
                  </p>
                  <p id="p2">
                    <?php echo $P2; ?>
                  </p>
                </div>
              </div>

              <div class="pxp-blog-post-block pxp-full mt-4 mt-md-5">
                <a id="video_img"
                  href="javascript:void(0);"
                  class="pxp-blog-post-video pxp-cover"
                  style=" background-image: url(<?php echo $video_img ?>);
                    background-position: 50% 50%;
                  "
                ></a>
                <iframe id="video_youtube"
                  width="889"
                  height="500"
                  src="<?php echo $video_link ?>"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen
                  style="width: 100%; border: 0 none;"
                >

                <!-- background-image: url(images/hero-prop-12.jpg);
                https://www.youtube.com/embed/4Wee4LASqvE?start=23 -->

                </iframe>
              </div>

              <div class="pxp-blog-post-block mt-4 mt-md-5">
                <h2>Take the time to find the right fit</h2>
                <div class="mt-3 mt-md-4">
                  <p id="p3">
                    <?php echo $P3 ?>
                  </p>
                  <div class="pxp-blog-post-blockquote pxp-left" id="quote">
                    <?php echo $quote ?>
                  </div>
                  <p id="p4">
                    <?php echo $P4 ?>
                  </p>
                  <p id="p5">
                    <?php echo $P5 ?>
                  </p>
                </div>
              </div>

              <div class="pxp-blog-post-block pxp-full mt-4 mt-md-5">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <img id="img1"

                      alt=""
                      class="pxp-image-full mb-3"
                      src="<?php echo $img1 ?>"
                    />
                    <!--    src="images/hero-prop-3.jpg"
                              src="images/hero-prop-10.jpg"

                    -->
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <img id="img2"
                      alt=""
                      class="pxp-image-full mb-3"
                      src="<?php echo $img2 ?>"
                    />
                  </div>
                </div>
              </div>

              <div class="pxp-blog-post-block mt-4 mt-md-5">
                <h2>Final thoughts</h2>
                <div class="mt-3 mt-md-4">
                  <p id="final_para">
                    <?php echo $finalP ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container mt-100">
          <h2 class="pxp-section-h2">Related Articles</h2>
          <div class="row mt-4 mt-md-5">
            <div class="col-sm-12 col-md-6 col-lg-4">
              <a href="#" class="pxp-posts-1-item">
                <div class="pxp-posts-1-item-fig-container">
                  <div
                    class="pxp-posts-1-item-fig pxp-cover"
                    style="background-image: url(images/posts-1.jpg)"
                  ></div>
                </div>
                <div class="pxp-posts-1-item-details">
                  <div class="pxp-posts-1-item-details-category">
                    Interior Design
                  </div>
                  <div class="pxp-posts-1-item-details-title">
                    What to Expect When Working with an Interior Designer
                  </div>
                  <div class="pxp-posts-1-item-details-date mt-2">
                    April 9, 2019
                  </div>
                  <div class="pxp-posts-1-item-cta text-uppercase">
                    Read Article
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <a href="#" class="pxp-posts-1-item">
                <div class="pxp-posts-1-item-fig-container">
                  <div
                    class="pxp-posts-1-item-fig pxp-cover"
                    style="background-image: url(images/posts-2.jpg)"
                  ></div>
                </div>
                <div class="pxp-posts-1-item-details">
                  <div class="pxp-posts-1-item-details-category">
                    Architecture
                  </div>
                  <div class="pxp-posts-1-item-details-title">
                    Private Contemporary Home Balancing Openness
                  </div>
                  <div class="pxp-posts-1-item-details-date mt-2">
                    April 9, 2019
                  </div>
                  <div class="pxp-posts-1-item-cta text-uppercase">
                    Read Article
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <a href="#" class="pxp-posts-1-item">
                <div class="pxp-posts-1-item-fig-container">
                  <div
                    class="pxp-posts-1-item-fig pxp-cover"
                    style="background-image: url(images/posts-3.jpg)"
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
            </div>
          </div>
        </div>

        <div class="container mt-100">
          <div class="row">
            <div class="col-sm-12 col-lg-1"></div>
            <div class="col-sm-12 col-lg-10">
              <div class="pxp-blog-post-block">
                <div class="pxp-blog-post-comments">
                  <h4>Comments</h4>

                  <div class="mt-3 mt-md-4">
                    <div class="media">
                      <img src="images/customer-1.jpg" class="mr-3" alt="..." />
                      <div class="media-body">
                        <h5>Scott Goodwin</h5>
                        <div class="pxp-blog-post-comments-date">
                          April 9, 2019 at 2:33 pm
                        </div>
                        <p>
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel
                          metus scelerisque ante sollicitudin. Cras purus odio,
                          vestibulum in vulputate at, tempus viverra turpis.
                          Fusce condimentum nunc ac nisi vulputate fringilla.
                          Donec lacinia congue felis in faucibus.
                        </p>

                        <div class="media mt-2 mt-md-3">
                          <img
                            src="images/customer-3.jpg"
                            class="mr-3"
                            alt="..."
                          />
                          <div class="media-body">
                            <h5>Alayna Becker</h5>
                            <div class="pxp-blog-post-comments-date">
                              April 9, 2019 at 2:33 pm
                            </div>
                            <p>
                              Cras sit amet nibh libero, in gravida nulla. Nulla
                              vel metus scelerisque ante sollicitudin. Cras
                              purus odio, vestibulum in vulputate at, tempus
                              viverra turpis. Fusce condimentum nunc ac nisi
                              vulputate fringilla. Donec lacinia congue felis in
                              faucibus.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="media mt-2 mt-md-3">
                      <img src="images/customer-4.jpg" class="mr-3" alt="..." />
                      <div class="media-body">
                        <h5>Erika Tillman</h5>
                        <div class="pxp-blog-post-comments-date">
                          April 9, 2019 at 2:33 pm
                        </div>
                        <p>
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel
                          metus scelerisque ante sollicitudin. Cras purus odio,
                          vestibulum in vulputate at, tempus viverra turpis.
                          Fusce condimentum nunc ac nisi vulputate fringilla.
                          Donec lacinia congue felis in faucibus.
                        </p>
                      </div>
                    </div>
                    <div class="comment_listing"></div>
                  </div>

                  <h4 class="mt-4 mt-md-5">Leave a comment</h4>
                  <form
                    class="pxp-blog-post-comments-form mt-3 mt-md-4"
                    method="post"
                    id="frm-comment"
                  >
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                          <label for="pxp-blog-post-comments-name">You Name</label>
                          <input
                            type="text"
                            class="form-control name"
                            id="pxp-blog-post-comments-name"
                            placeholder="Enter your full name"
                          />
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                          <label for="pxp-blog-post-comments-email">Your Email</label>
                          <input
                            type="text"
                            class="form-control email"
                            id="pxp-blog-post-comments-email"
                            placeholder="Enter your email address"
                            required="true"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="pxp-blog-post-comments-reply"
                        >Leave a Reply</label
                      >
                      <textarea
                        class="form-control comment"
                        id="pxp-blog-post-comments-reply"
                        rows="6"
                        placeholder="Write your comment here..."
                      ></textarea>
                    </div>
                    <a href="javascript:void(0)" class="pxp-blog-post-comments-form-btn btn-submit" id="submitButton">
                      Post Comment
                    </a>
                    <!-- <input type="button" class="pxp-blog-post-comments-form-btn btn-submit" id="submitButton" value="Comment" /> -->
                    <div class="clearfix"></div>

                  </form>
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
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main04f0.js?sadok"></script>
    <script type="text/javascript">
          function listComments(){
            $.ajax({
              url:'comment_list.php',
              success:function(res){
                console.log(name);
                $('.comment_listing').html(res);
              }
            })
          }
          $(function(){
            listComments();
            setInterval(function(){
              listComments();
            },5000);
            $('.btn-submit').click(function(){
              var name = $('.name').val();
              var email = $('.email').val();
              var comment = $('.comment').val();
              console.log(email);
              $.ajax({
                url:'save_comment.php',
                data:'name='+name+'&email='+email+'&comment='+comment,
                type:'post',
                success:function()
                {
                  alert("Your comment has been posted");
                  listComments();
                }
              })
            })
          })
    </script>
  </body>
</html>
