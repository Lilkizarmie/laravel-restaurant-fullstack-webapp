@extends('layouts.main')

@section('main-container')

    <!-- dynamic content -->
    <div id="sb-dynamic-content" class="sb-transition-fade">

      <!-- banner -->
      <section class="sb-banner sb-banner-xs sb-banner-color">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- main title -->
              <div class="sb-main-title-frame">
                <div class="sb-main-title">
                  <h1 class="sb-h2">Online shop</h1>
                  <ul class="sb-breadcrumbs">
                    <li><a href="home-1.html">Home</a></li>
                    <li><a href="shop-1.html">Shop</a></li>
                    <li><a href="#.">Product</a></li>
                  </ul>
                </div>
              </div>
              <!-- main title end -->
            </div>
          </div>
        </div>
      </section>
      <!-- banner end -->

      <!-- product -->
      <section class="sb-p-90-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="sb-gallery-item sb-gallery-square sb-mb-90">
                <img src="img/menu/4.jpg" alt="photo">
                <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                <!-- button -->
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                  <span class="sb-icon">
                    <img src="img/ui/icons/zoom.svg" alt="icon">
                  </span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="col-lg-6">
              <div class="sb-product-description sb-mb-90">
                <div class="sb-price-frame sb-mb-30">
                  <h3>Saumon Gravlax</h3>
                  <div class="sb-price"><sub>$</sub> 19</div>
                </div>
                <ul class="sb-stars sb-mb-25">
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><span>(4 ratings)</span></li>
                </ul>
                <p class="sb-text sb-mb-30"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="sb-features-item sb-features-item-sm sb-mb-30">
                      <div class="sb-number">01</div>
                      <div class="sb-feature-text">
                        <h4 class="sb-mb-15">Add to the cart and place an order</h4>
                        <p class="sb-text sb-text-sm">Porro comirton pera nemo veniam</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="sb-features-item sb-features-item-sm sb-mb-30">
                      <div class="sb-number">02</div>
                      <div class="sb-feature-text">
                        <h4 class="sb-mb-15">Enter your phone number and address</h4>
                        <p class="sb-text sb-text-sm">Eligendi adipisci numquam.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="sb-features-item sb-features-item-sm sb-mb-30">
                      <div class="sb-number">03</div>
                      <div class="sb-feature-text">
                        <h4 class="sb-mb-15">Enjoy your favorite food at home!</h4>
                        <p class="sb-text sb-text-sm">Nnecessitatibus praesentium</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="sb-buttons-frame">
                  <div class="sb-input-number-frame">
                    <div class="sb-input-number-btn sb-sub">-</div>
                    <input type="number" value="1" min="1" max="10">
                    <div class="sb-input-number-btn sb-add">+</div>
                  </div>
                  <!-- button -->
                  <a href="#." class="sb-btn sb-atc">
                    <span class="sb-icon">
                      <img src="img/ui/icons/cart.svg" alt="icon">
                    </span>
                    <span class="sb-add-to-cart-text">Add to cart</span>
                    <span class="sb-added-text">Added</span>
                  </a>
                  <!-- button end -->
                </div>
              </div>
            </div>
          </div>
          <!-- filter -->
          <div class="sb-filter">
            <a href="#." data-filter=".sb-ingredients-tab" class="sb-filter-link sb-active">Ingredients</a>
            <a href="#." data-filter=".sb-details-tab" class="sb-filter-link">Product details</a>
            <a href="#." data-filter=".sb-reviews-tab" class="sb-filter-link">Reviews</a>
          </div>
          <!-- filter end -->
          <div class="sb-masonry-grid sb-tabs">
            <div class="sb-grid-sizer"></div>
            <div class="sb-grid-item sb-ingredients-tab">
              <div class="sb-tab">
                <ul class="sb-list">
                  <li><b>Numquam</b><span>1 pack</span></li>
                  <li><b>Cupiditate</b><span>150g</span></li>
                  <li><b>Adipisicing</b><span>500g</span></li>
                  <li><b>Dolorem obcaecati</b><span>3 Teaspoon</span></li>
                  <li><b>Porro</b><span>2 pack</span></li>
                  <li><b>Facilis</b><span>1kg</span></li>
                  <li><b>Goluptatem</b><span>1 Teaspoon</span></li>
                  <li><b>Vel fuga</b><span>300g</span></li>
                </ul>
              </div>
            </div>
            <div class="sb-grid-item sb-details-tab" style="position: absolute">
              <div class="sb-tab">
                <p class="sb-text sb-mb-15">Facilis ratione veritatis asperiores doloremque molestiae delectus iure officia earum dolores sit fugiat, repellendus, neque laboriosam optio culpa quibusdam, magnam totam quos. Mollitia dolorem, culpa,
                  dignissimos
                  quas et voluptates architecto in sit totam, quae animi ratione adipisci nulla ab quasi perferendis quo pariatur dolor magnam inventore. Sequi nisi ex excepturi non harum, asperiores laboriosam ipsum voluptate doloribus incidunt nam
                  eveniet similique unde esse voluptatem minus necessitatibus eaque temporibus quaerat accusantium amet deserunt. Iste, facilis? Illo tenetur, libero, non dicta asperiores quisquam voluptas natus aperiam, at perspiciatis repellat
                  voluptate. Autem non reprehenderit, perferendis.</p>
                <div class="sb-text">Consectetur adipisicing elit. Delectus quibusdam repellendus nesciunt cumque fugit numquam adipisci voluptatum quam, sapiente doloribus ut eaque natus laudantium alias illum quos maiores, quia perferendis.</div>
              </div>
            </div>
            <div class="sb-grid-item sb-reviews-tab" style="position: absolute">
              <div class="sb-tab">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="sb-review-card sb-mb-60">
                      <div class="sb-review-header sb-mb-15">
                        <h4 class="sb-mb-10">Very tasty</h4>
                        <ul class="sb-stars">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                        </ul>
                      </div>
                      <p class="sb-text sb-mb-15">Inventore possimus laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                        tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                      <div class="sb-author-frame">
                        <div class="sb-avatar-frame">
                          <img src="img/faces/1.jpg" alt="Guest">
                        </div>
                        <h4>Emma Newman</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="sb-review-card sb-mb-60">
                      <div class="sb-review-header sb-mb-15">
                        <h4 class="sb-mb-10">I have lunch here every day</h4>
                        <ul class="sb-stars">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                        </ul>
                      </div>
                      <p class="sb-text sb-mb-15">Tempora ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit Reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                      <div class="sb-author-frame">
                        <div class="sb-avatar-frame">
                          <img src="img/faces/2.jpg" alt="Guest">
                        </div>
                        <h4>Paul Trueman</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- product end -->

      <!-- short menu -->
      <section class="sb-short-menu sb-p-0-90">
        <div class="sb-bg-2">
          <div></div>
        </div>
        <div class="container">
          <div class="sb-group-title sb-mb-30">
            <div class="sb-left sb-mb-30">
              <h2 class="sb-cate-title sb-mb-30">It is usually bought together with this product</h2>
              <p class="sb-text">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
            </div>
            <div class="sb-right sb-mb-30">
              <!-- slider navigation -->
              <div class="sb-slider-nav">
                <div class="sb-prev-btn sb-short-menu-prev"><i class="fas fa-arrow-left"></i></div>
                <div class="sb-next-btn sb-short-menu-next"><i class="fas fa-arrow-right"></i></div>
              </div>
              <!-- slider navigation end -->
            </div>
          </div>
          <div class="swiper-container sb-short-menu-slider-4i">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="shop-list-1.html" class="sb-cover-frame">
                    <img src="img/menu/1.jpg" alt="product">
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="shop-list-1.html">Chevrefrit au miel</a></h4>
                    <div class="sb-price"><sub>$</sub> 14</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="shop-list-1.html" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="shop-list-1.html" class="sb-cover-frame">
                    <img src="img/menu/2.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="shop-list-1.html">Saumon Gravlax</a></h4>
                    <div class="sb-price"><sub>$</sub> 9</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="shop-list-1.html" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="shop-list-1.html" class="sb-cover-frame">
                    <img src="img/menu/3.jpg" alt="product">
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="shop-list-1.html">Stracciatella</a></h4>
                    <div class="sb-price"><sub>$</sub> 9</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="shop-list-1.html" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="shop-list-1.html" class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="shop-list-1.html">Croustillant de poisson</a></h4>
                    <div class="sb-price"><sub>$</sub> 4</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="shop-list-1.html" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="shop-list-1.html" class="sb-cover-frame">
                    <img src="img/menu/5.jpg" alt="product">
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="shop-list-1.html">Carpaccio de daurade</a></h4>
                    <div class="sb-price"><sub>$</sub> 6</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="shop-list-1.html" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-menu-item">
                  <a href="shop-list-1.html" class="sb-cover-frame">
                    <img src="img/menu/6.jpg" alt="product">
                  </a>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title"><a href="shop-list-1.html">Chevrefrit au miel</a></h4>
                    <div class="sb-price"><sub>$</sub> 14</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  </div>
                  <div class="sb-card-buttons-frame">
                    <!-- button -->
                    <a href="shop-list-1.html" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="#." class="sb-btn sb-atc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/cart.svg" alt="icon">
                      </span>
                      <span class="sb-add-to-cart-text">Add to cart</span>
                      <span class="sb-added-text">Added</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- short menu end -->

      <!-- call to action -->
      <section class="sb-call-to-action">
        <div class="sb-bg-3"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="sb-cta-text">
                <h2 class="sb-h1 sb-mb-15">Free delivery service.</h2>
                <p class="sb-text sb-mb-30">*Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
                <!-- button -->
                <a href="shop-1.html" class="sb-btn">
                  <span class="sb-icon">
                    <img src="img/ui/icons/cart.svg" alt="icon">
                  </span>
                  <span>Order delivery</span>
                </a>
                <!-- button end -->
                <!-- button -->
                <a href="menu-1.html" class="sb-btn sb-btn-2 sb-btn-gray">
                  <span class="sb-icon">
                    <img src="img/ui/icons/menu.svg" alt="icon">
                  </span>
                  <span>Menu</span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="col-lg-6">
              <div class="sb-illustration-8">
                <img src="img/illustrations/delivery.png" alt="reserved" class="sb-reserved">
                <div class="sb-cirkle-1"></div>
                <div class="sb-cirkle-2"></div>
                <div class="sb-cirkle-3"></div>
                <div class="sb-cirkle-4"></div>
                <div class="sb-cirkle-5"></div>
                <img src="img/illustrations/2.svg" alt="icon" class="sb-pik-2">
                <img src="img/illustrations/3.svg" alt="icon" class="sb-pik-3">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- call to action end -->

@endsection