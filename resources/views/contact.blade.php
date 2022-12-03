<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#51A346">
  <!-- favicon  -->
  <link rel="shortcut icon" href="img/ui/favicon.png" type="image/x-icon">
  <!-- font awesome css -->
  <link rel="stylesheet" href="css/plugins/font-awesome.min.css">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
  <!-- swiper css -->
  <link rel="stylesheet" href="css/plugins/swiper.min.css">
  <!-- datepicker css -->
  <link rel="stylesheet" href="css/plugins/datepicker.css">
  <!-- mapbox css -->
  <link href="css/plugins/mapbox-style.css" rel='stylesheet'>
  <!-- fancybox css -->
  <link rel="stylesheet" href="css/plugins/fancybox.min.css">
  <!-- starbelly css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- page title -->
  <title>Cheffemi</title>
</head>

<body>
  <!-- app wrapper -->
  <div class="sb-app">
    <!-- preloader -->
    <div class="sb-preloader">
      <div class="sb-preloader-bg"></div>
      <div class="sb-preloader-body">
        <div class="sb-loading">
          <div class="sb-percent"><span class="sb-preloader-number" data-count="101">00</span><span>%</span></div>
        </div>
        <div class="sb-loading-bar">
          <div class="sb-bar"></div>
        </div>
      </div>
    </div>
    <!-- preloader end -->
    <!-- click effect -->
    <div class="sb-click-effect"></div>
    <!-- loader -->
    <div class="sb-load"></div>
    <!-- top bar -->
    <div class="sb-top-bar-frame">
      <div class="sb-top-bar-bg"></div>
      <div class="container">
        <div class="sb-top-bar">
          <a href="home-1.html" class="sb-logo-frame">
            <!-- logo img -->
            <img src="img/ui/logo.png" alt="Starbelly">
          </a>
          <!-- menu -->
          <div class="sb-right-side">
            <nav id="sb-dynamic-menu" class="sb-menu-transition">
              <ul class="sb-navigation">
                <li class="sb-has-children">
                  <a href="index.html">Home</a>
                </li>
                <li class="sb-has-children">
                  <a href="about.html">About</a>
                </li>
                <li class="sb-has-children">
                  <a href="gallery.html">Gallery</a>
                </li>
                <li class="sb-has-children">
                  <a href="shop.html">Shop</a>
                  <ul>
                    <li class="sb-has-children"><a href="menu.html">Menu</a></li>
                  </ul>
                </li>
                <li class="sb-has-children">
                  <a href="blog.html">Blog</a>
                </li>
                <li class="sb-active sb-has-children">
                  <a href="contact.html">Contact</a>
                </li>
              </ul>
            </nav>
            <div class="sb-buttons-frame">
              <!-- button -->
              <div class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0 sb-btn-cart">
                <span class="sb-icon">
                  <img src="img/ui/icons/cart.svg" alt="icon">
                </span>
                <i class="sb-cart-number">5</i>
              </div>
              <!-- button end -->
              <!-- menu btn -->
              <div class="sb-menu-btn"><span></span></div>
              <!-- info btn -->
              <div class="sb-info-btn"><span></span></div>
            </div>
          </div>
        </div>
      </div>
      <!-- info bar -->
      <div class="sb-info-bar">
        <div class="sb-infobar-content">
          <div class="sb-ib-title-frame sb-mb-30">
            <h4>Contact</h4><i class="fas fa-arrow-down"></i>
          </div>
          <ul class="sb-list sb-mb-30">
            <li><b>Address:</b><span>Montréal, 1510 Rue Sauvé</span></li>
            <li><b>Working hours:</b><span>09:00 - 23:00</span></li>
            <li><b>Phone:</b><span>+02 (044) 756-X6-52</span></li>
            <li><b>Email:</b><span>starbelly@mail.com</span></li>
          </ul>
          <div class="sb-ib-title-frame sb-mb-30">
            <h4>Instagram</h4><i class="fas fa-arrow-down"></i>
          </div>
          <ul class="sb-instagram sb-mb-30">
            <li><a href="#."><img src="img/instagram/1.jpg" alt="instagram"></a></li>
            <li><a href="#."><img src="img/instagram/2.jpg" alt="instagram"></a></li>
            <li><a href="#."><img src="img/instagram/3.jpg" alt="instagram"></a></li>
            <li><a href="#."><img src="img/instagram/4.jpg" alt="instagram"></a></li>
            <li><a href="#."><img src="img/instagram/5.jpg" alt="instagram"></a></li>
            <li><a href="#."><img src="img/instagram/6.jpg" alt="instagram"></a></li>
          </ul>
          <hr>
          <div class="sb-ib-title-frame sb-mb-30">
            <h4>Latest publications</h4><i class="fas fa-arrow-down"></i>
          </div>
          <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
            <div class="sb-cover-frame">
              <img src="img/blog/1.jpg" alt="cover">
            </div>
            <div class="sb-blog-card-descr">
              <h5 class="sb-mb-5">Simple Homemade Tomato Soup</h5>
              <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero optio, sed expedita.</p>
            </div>
          </a>
          <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
            <div class="sb-cover-frame">
              <img src="img/blog/2.jpg" alt="cover">
            </div>
            <div class="sb-blog-card-descr">
              <h5 class="sb-mb-5">Thai Coconut Soup with Tofu and Rice</h5>
              <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero optio, sed expedita.</p>
            </div>
          </a>
          <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
            <div class="sb-cover-frame">
              <img src="img/blog/3.jpg" alt="cover">
            </div>
            <div class="sb-blog-card-descr">
              <h5 class="sb-mb-5">21 Things You Should Absolutely Be Buying at ALDI</h5>
              <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero optio, sed expedita.</p>
            </div>
          </a>
        </div>
        <div class="sb-info-bar-footer">
          <ul class="sb-social">
            <li><a href="#."><i class="fab fa-twitter"></i></a></li>
            <li><a href="#."><i class="fab fa-instagram"></i></a></li>
            <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#."><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- info bar end -->
      <!-- minicart -->
      <div class="sb-minicart">
        <div class="sb-minicart-content">
          <div class="sb-ib-title-frame sb-mb-30">
            <h4>Your order.</h4><i class="fas fa-arrow-down"></i>
          </div>
          <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="img/menu/4.jpg" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Saumon Gravlax</h4>
              <div class="sb-price"><sub>$</sub> 9</div>
            </div>
          </a>
          <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="img/menu/1.jpg" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Chevrefrit au miel</h4>
              <div class="sb-price"><sub>$</sub> 14</div>
            </div>
          </a>
          <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="img/menu/2.jpg" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Croustillant de poisson</h4>
              <div class="sb-price"><sub>$</sub> 4</div>
            </div>
          </a>
          <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="img/menu/3.jpg" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Stracciatella</h4>
              <div class="sb-price"><sub>$</sub> 11</div>
            </div>
          </a>
          <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="img/menu/5.jpg" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Carpaccio de daurade</h4>
              <div class="sb-price"><sub>$</sub> 19</div>
            </div>
          </a>
        </div>
        <div class="sb-minicart-footer">
          <!-- button -->
          <a href="cart.html" class="sb-btn sb-btn-gray sb-btn-text">
            <span>View order</span>
          </a>
          <!-- button end -->
          <!-- button -->
          <a href="checkout.html" class="sb-btn sb-btn-text">
            <span>Checkout</span>
          </a>
          <!-- button end -->
        </div>
      </div>
      <!-- minicart end -->
    </div>
    <!-- top bar end -->

    <!-- dynamic content -->
    <div id="sb-dynamic-content" class="sb-transition-fade">

      <!-- banner -->
      <section class="sb-banner sb-banner-color">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <!-- main title -->
              <div class="sb-main-title-frame">
                <div class="sb-main-title">
                  <span class="sb-suptitle sb-mb-30">Contact</span>
                  <h1 class="sb-mb-30">Get in <span>Touch with Starbelly</span></h1>
                  <p class="sb-text sb-text-lg sb-mb-30">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
                  <ul class="sb-breadcrumbs">
                    <li><a href="home-1.html">Home</a></li>
                    <li><a href="menu-1.html">Contact</a></li>
                  </ul>
                </div>
              </div>
              <!-- main title end -->
            </div>
            <div class="col-lg-5">
              <div class="sb-contact-form-frame">
                <div class="sb-illustration-9">
                  <img src="img/illustrations/envelope-1.png" alt="envelope" class="sb-envelope-1">
                  <img src="img/illustrations/envelope-2.png" alt="envelope" class="sb-envelope-2">
                  <div class="sb-cirkle-1"></div>
                  <div class="sb-cirkle-2"></div>
                  <div class="sb-cirkle-3"></div>
                </div>
                <div class="sb-form-content">
                  <div class="sb-main-content">
                    <h3 class="sb-mb-30">Send Message</h3>
                    <form id="form">
                      <div class="sb-group-input">
                        <input type="text" name="name" required>
                        <span class="sb-bar"></span>
                        <label>Name</label>
                      </div>
                      <div class="sb-group-input">
                        <input type="email" name="email" required>
                        <span class="sb-bar"></span>
                        <label>Email</label>
                      </div>
                      <div class="sb-group-input">
                        <textarea name="text" required></textarea>
                        <span class="sb-bar"></span>
                        <label>Message</label>
                      </div>
                      <p class="sb-text sb-text-xs sb-mb-30">*We promise not to disclose your <br>personal information to third parties.</p>
                      <!-- button -->
                      <button class="sb-btn sb-cf-submit sb-show-success">
                        <span class="sb-icon">
                          <img src="img/ui/icons/arrow.svg" alt="icon">
                        </span>
                        <span>Send</span>
                      </button>
                      <!-- button end -->
                    </form>
                  </div>
                  <div class="sb-success-result">
                    <img src="img/ui/success.jpg" alt="success" class="sb-mb-15">
                    <div class="sb-success-title sb-mb-15">Success!</div>
                    <p class="sb-text sb-mb-15">Your message has been sent <br>successfully</p>
                    <!-- button -->
                    <a href="home-1.html" class="sb-btn sb-btn-2">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow-2.svg" alt="icon">
                      </span>
                      <span>Back to home</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- banner end -->

      <!-- contact info -->
      <section class="sb-p-90-30">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">01</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Welcome</h3>
                  <p class="sb-text">Montréal, 1510 Rue Sauvé</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">02</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Call</h3>
                  <p class="sb-text">+02 (044) 756-X6-52</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">03</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Write</h3>
                  <p class="sb-text">starbelly@mail.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- contact info end -->

      <!-- map -->
      <div class="sb-map-frame">
        <div id="map" class="sb-map"></div>
        <div class="sb-lock"><i class="fas fa-lock"></i></div>
      </div>
      <!-- map end -->

      <!-- footer -->
      <footer>
        <div class="container">
          <div class="sb-footer-frame">
            <a href="home-1.html" class="sb-logo-frame">
              <!-- logo img -->
              <img src="img/ui/logo.png" alt="Starbelly">
            </a>
            <ul class="sb-social">
              <li><a href="#."><i class="fab fa-twitter"></i></a></li>
              <li><a href="#."><i class="fab fa-instagram"></i></a></li>
              <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#."><i class="fab fa-youtube"></i></a></li>
            </ul>
            <div class="sb-copy">&copy;2022 Cheffemi. All Rights Reserved.</div>
          </div>
        </div>
      </footer>
      <!-- footer end -->

    </div>
    <!-- dynamic content end -->

  </div>
  <!-- app wrapper end -->

  <!-- jquery js -->
  <script src="js/plugins/jquery.min.js"></script>
  <!-- smooth scroll js -->
  <script src="js/plugins/smooth-scroll.js"></script>
  <!-- swup js -->
  <script src="js/plugins/swup.min.js"></script>
  <!-- swiper js -->
  <script src="js/plugins/swiper.min.js"></script>
  <!-- datepicker js -->
  <script src="js/plugins/datepicker.js"></script>
  <!-- isotope js -->
  <script src="js/plugins/isotope.js"></script>
  <!-- sticky -->
  <script src="js/plugins/sticky.js"></script>
  <!-- mapbox js -->
  <script src="js/plugins/mapbox.min.js"></script>
  <!-- fancybox js -->
  <script src="js/plugins/fancybox.min.js"></script>
  <!-- starbelly js -->
  <script src="js/main.js"></script>

</body>

</html>
