<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link href="<?php echo url('/'); ?>/static/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo url('/'); ?>/static/css/owl-carousel.css" rel="stylesheet">
      <link href="<?php echo url('/'); ?>/static/css/font-awesome.css" rel="stylesheet">
      <link href="<?php echo url('/'); ?>/static/css/owl.theme.default.css" rel="stylesheet">
      <link href="<?php echo url('/'); ?>/static/css/primary-style.css" rel="stylesheet">
      <title>Vaibhav - A Unit of 28 South Ventures</title>
    </head>
  <body>

   <header class="header-wrapper">
      <div class="container">
         <div class="row">
            <div class="header-bar--top">
               <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                  &nbsp;
               </div>
               <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                  <div class="logo-wrap">
                     <img src="<?php echo url('/'); ?>/static/images/logo.png" alt="" title=""/>
                  </div>
               </div>
               <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                  <div class="ecommerce-menu--wrap">
                     <div class="ecommerce-menu--item">
                        <button type="button" class="btn search" data-toggle="modal" data-target="#search">
                           <span class="desktop-text">Search</span>
                           <span class="mobile-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="searchLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="searchLabel">What are you searching for?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                 <form action="" method="post">
                                    <input type="text" name="search" placeholder="Your search term...">
                                    <button type="submit" value="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                 </form>
                              </div>
                            </div>
                          </div>
                        </div>
                     </div>
                     <div class="ecommerce-menu--item">
                     <div class="item-dropdown">
                        <ul class="dropDownMenu">
                           <li><a href="#">
                                 <span class="desktop-text">Account</span>
                                 <span class="mobile-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                              </a>
                              <ul>
                                 <li><a href="http://html-tuts.com/?p=9961">Your Orders</a></li>
                                 <li><a href="http://html-tuts.com/?p=9961">Wishlist</a></li>
                                 <li><a href="http://html-tuts.com/?p=9961">Logout</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="ecommerce-menu--item">
                     <a href="#" class="cart-notify">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="count">(0)</span></a>
                  </div>
                  </div>
               </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                  <ul class="navbar-nav">
                     <li class="nav-item active">
                       <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="#">Stores</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="#">Care</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="#">Xpress</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="#">Academy</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="#">Plus</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
   </header>

   <section class="hero-slideshow--wrapper">
      <div class="container-fluid">
         <div class="row">
            <div class="owl-carousel hero-slideshow owl-theme">
               <div class="item">
                  <div class="slideshow-details--wrap">
                     <div class="slideshow-image--wrap">
                        <img class="slide-on--desktop" src="<?php echo url('/'); ?>/static/images/slideshow-01.png" alt="" title="">
                        <img class="slide-on--mobile" src="<?php echo url('/'); ?>/static/images/slideshow-01-mobile.png" alt="" title="">
                     </div>
                     <div class="message-rounded--wrap">
                        <h1>A one stop store for your <br/><span>Spa & Salon needs.</span></h1>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="slideshow-details--wrap">
                     <div class="slideshow-image--wrap">
                        <img class="slide-on--desktop" src="<?php echo url('/'); ?>/static/images/slideshow-01.png" alt="" title="">
                        <img class="slide-on--mobile" src="<?php echo url('/'); ?>/static/images/slideshow-01-mobile.png" alt="" title="">
                     </div>
                     <div class="message-rounded--wrap">
                        <h1>A one stop store for your <br/><span>Spa & Salon needs.</span></h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- <section class="category-ui--one">
      <div class="container-fluid">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="title-ui--wrap">
               <div class="title-text--up">
                  <h4>Want to Shop?</h4>
               </div>
               <div class="title-text--middle">
                  <h2>Furniture</h2>
               </div>
               <div class="title-text--action">
                  <a href="" target="_blank">View All</a>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="category-blocks--ui">
               <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <div class="category-block--wrap green-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3>Styling Chair</h3>
                        </div>
                        <div class="ecommerce-item--sku">
                           <p>Product Code: ###</p>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">(46% Off)</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="new-price">Rs. 2637</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                              <li><button type="submit" value="">Buy Now</button></li>
                              <li><a href="#" target="_blank">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="<?php echo url('/'); ?>/static/images/furniture-chair.png" alt="" title=""/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                  <div class="category-block--wrap peach-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3>Styling Chair</h3>
                        </div>
                        <div class="ecommerce-item--sku">
                           <p>Product Code: ###</p>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">(46% Off)</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="new-price">Rs. 2637</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                              <li><button type="submit" value="">Buy Now</button></li>
                              <li><a href="#" target="_blank">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="<?php echo url('/'); ?>/static/images/furniture-sofa.png" alt="" title=""/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                  <div class="category-block--wrap blue-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3>Styling Chair</h3>
                        </div>
                        <div class="ecommerce-item--sku">
                           <p>Product Code: ###</p>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">(46% Off)</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="new-price">Rs. 2637</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                              <li><button type="submit" value="">Buy Now</button></li>
                              <li><a href="#" target="_blank">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="<?php echo url('/'); ?>/static/images/furniture-modern-sofa.png" alt="" title=""/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                  <div class="category-block--wrap pink-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3>Styling Chair</h3>
                        </div>
                        <div class="ecommerce-item--sku">
                           <p>Product Code: ###</p>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">(46% Off)</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="new-price">Rs. 2637</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                              <li><button type="submit" value="">Buy Now</button></li>
                              <li><a href="#" target="_blank">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="<?php echo url('/'); ?>/static/images/furniture-chair-red.png" alt="" title=""/>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="category-ui--two">
      <div class="container-fluid">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="title-ui--wrap">
               <div class="title-text--up">
                  <h4>Want to Shop?</h4>
               </div>
               <div class="title-text--middle">
                  <h2>Electricals</h2>
               </div>
               <div class="title-text--action">
                  <a href="" target="_blank">View All</a>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="category-blocks--ui">
               <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                  <div class="category-block--wrap peach-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3>Trimmers</h3>
                        </div>
                        <div class="ecommerce-item--sku">
                           <p>Product Code: ###</p>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">(46% Off)</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="new-price">Rs. 2637</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                              <li><button type="submit" value="">Buy Now</button></li>
                              <li><a href="#" target="_blank">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="<?php echo url('/'); ?>/static/images/electricals-trimmers.png" alt="" title=""/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <div class="category-block--wrap green-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3>Styling Chair</h3>
                        </div>
                        <div class="ecommerce-item--sku">
                           <p>Product Code: ###</p>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">(46% Off)</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="new-price">Rs. 2637</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                              <li><button type="submit" value="">Buy Now</button></li>
                              <li><a href="#" target="_blank">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="<?php echo url('/'); ?>/static/images/electricals-hair-dryer.png" alt="" title=""/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                  <div class="category-block--wrap pink-ui">
                     <div class="ecommerce-item--image">
                        <img src="<?php echo url('/'); ?>/static/images/electricals-facial-steamer.png" alt="" title=""/>
                     </div>
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3>Facial Steamer</h3>
                        </div>
                        <div class="ecommerce-item--sku">
                           <p>Product Code: ###</p>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">(46% Off)</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="new-price">Rs. 2637</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                              <li><button type="submit" value="">Buy Now</button></li>
                              <li><a href="#" target="_blank">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                  <div class="category-block--wrap blue-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3>Styling Chair</h3>
                        </div>
                        <div class="ecommerce-item--sku">
                           <p>Product Code: ###</p>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">(46% Off)</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="new-price">Rs. 2637</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                              <li><button type="submit" value="">Buy Now</button></li>
                              <li><a href="#" target="_blank">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="<?php echo url('/'); ?>/static/images/electicals-steamer.png" alt="" title=""/>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="store-ui--wrapper">
      <div class="container-fluid">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="title-ui--wrap">
               <div class="title-text--middle">
                  <h2>Visit our store</h2>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="store-gallery--wrap">
               <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                  <div class="store-video--ui">
                     <img src="<?php echo url('/'); ?>/static/images/store-video.png" alt=""/>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                  <div class="store-gallery--ui">
                     <div class="gallery-image--one">
                        <img src="<?php echo url('/'); ?>/static/images/gallery-image-01.png" alt=""/>
                     </div>
                     <div class="gallery-image--two">
                        <img src="<?php echo url('/'); ?>/static/images/gallery-image-02.png" alt=""/>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="verticals-ui--wrapper">
      <div class="container-fluid">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="title-ui--wrap">
               <div class="title-text--middle">
                  <h2>Business Verticals</h2>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="verticals-block--wrap">
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                  <div class="verticals-details--wrap">
                     <div class="verticals-brand--wrap">
                        <img src="<?php echo url('/'); ?>/static/images/vaibhav-xpress-logo.png" alt=""/>
                     </div>
                     <div class="verticals-brand--wrap">
                        <img src="<?php echo url('/'); ?>/static/images/vaibhav-care-logo.png" alt=""/>
                     </div>
                     <div class="verticals-brand--wrap">
                        <img src="<?php echo url('/'); ?>/static/images/vaibhav-plus-logo.png" alt=""/>
                     </div>
                     <div class="verticals-brand--wrap">
                        <img src="<?php echo url('/'); ?>/static/images/vaibhav-academy-logo.png" alt=""/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                  <div class="verticals-single--wrap">
                     <div class="verticals-single--logo">
                        <img src="<?php echo url('/'); ?>/static/images/vaibhav-xpress-logo.png" alt=""/>
                     </div>
                     <div class="verticals-single--features">
                        <ul>
                           <li>Aliquet enim tortor at auctor urna nunc id cursus metus aliquam.</li>
                           <li>Massa vitae tortor condimentum lacinia quis vel eros donec ac odio.</li>
                           <li>Arcu non sodales neque sodales ut etiam sit amet nisl purus.</li>
                        </ul>
                        <a href="#" target="_blank">Visit Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="thumbnails-ui--two">
      <div class="container-fluid">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="title-ui--wrap">
               <div class="title-text--middle">
                  <h2>Our Channel Partners</h2>
               </div>
               <div class="title-text--action">
                  <a href="" target="_blank">View All</a>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="thumbnail-block--wrap">
               <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <div class="thumbnail-slider--one">
                     <div class="owl-carousel partners-slider--one owl-theme">
                        <div class="item">
                           <img src="<?php echo url('/'); ?>/static/images/product-image-01.png" alt=""/>
                        </div>
                        <div class="item">
                           <img src="<?php echo url('/'); ?>/static/images/product-image-01.png" alt=""/>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <div class="thumbnail-brand--ui">
                     <div class="thumbnail-brand--logo">
                        <img src="<?php echo url('/'); ?>/static/images/dm-skincare-logo.png" alt=""/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <div class="thumbnail-slider--two">
                     <div class="owl-carousel partners-slider--two owl-theme">
                        <div class="item">
                           <img src="<?php echo url('/'); ?>/static/images/product-image-01.png" alt=""/>
                        </div>
                        <div class="item">
                           <img src="<?php echo url('/'); ?>/static/images/product-image-01.png" alt=""/>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="follow-ui--wrapper">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               <div class="title-ui--wrap">
                  <div class="title-text--up">
                     <h4>@Vaibhavindia</h4>
                  </div>
                  <div class="title-text--middle">
                     <h2>Follow Us</h2>
                  </div>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 padding-0">
               <div class="follow-images--wrap">
                  <div class="follow-image--block">
                     <img src="<?php echo url('/'); ?>/static/images/social-image-03.png" alt=""/>
                  </div>
                  <div class="follow-image--block">
                     <img src="<?php echo url('/'); ?>/static/images/social-image-01.png" alt=""/>
                  </div>
                  <div class="follow-image--block">
                     <img src="<?php echo url('/'); ?>/static/images/social-image-02.png" alt=""/>
                  </div>
                  <div class="follow-image--block">
                     <img src="<?php echo url('/'); ?>/static/images/social-image-03.png" alt=""/>
                  </div>
                  <div class="follow-image--block">
                     <img src="<?php echo url('/'); ?>/static/images/social-image-02.png" alt=""/>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->

   <footer class="footer-wrapper">
      <div class="container-fluid">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 padding-0">
            <div class="footer-grid--wrap">
               <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                  <div class="footer-about--wrap">
                     <div class="footer-title--wrap">
                        <h3>About the brand</h3>
                     </div>
                     <div class="footer-about--text">
                        <p>Et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna eget est lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                  <div class="footer-about--wrap">
                     <div class="footer-title--wrap">
                        <h3>Our Products</h3>
                     </div>
                     <div class="footer-links--wrap">
                        <ul>
                           <li><a href="#" target="_blank">Face</a></li>
                           <li><a href="#" target="_blank">Body</a></li>
                           <li><a href="#" target="_blank">Makeup</a></li>
                           <li><a href="#" target="_blank">Brands</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                  <div class="footer-about--wrap">
                     <div class="footer-title--wrap">
                        <h3>About Us</h3>
                     </div>
                     <div class="footer-links--wrap">
                        <ul>
                           <li><a href="#" target="_blank">Journal</a></li>
                           <li><a href="#" target="_blank">Faq</a></li>
                           <li><a href="#" target="_blank">Contact</a></li>
                           <li><a href="#" target="_blank">Terms & Conditions</a></li>
                        </ul>
                     </div>
                     <div class="footer-social--wrap">
                        <ul>
                           <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                  <div class="footer-about--wrap">
                     <div class="footer-title--wrap">
                        <h3>Newsletter</h3>
                     </div>
                     <div class="footer-subscribe--wrap">
                        <p>Subscribe to receive updates, access to exclusive deals and more.</p>
                        <form method="post" action="">
                           <input type="email" name="email" placeholder="Enter your email address">
                           <input type="submit" name="submit" value="SUBSCRIBE">
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>

   <!-- Javascript -->
   <script src="<?php echo url('/'); ?>/static/js/jquery-3.4.1.min.js"></script>
   <script src="<?php echo url('/'); ?>/static/js/bootstrap.min.js"></script>
   <script src="<?php echo url('/'); ?>/static/js/owl.carousel.js"></script>
   <script src="<?php echo url('/'); ?>/static/js/rater.js"></script>
   <script src="<?php echo url('/'); ?>/static/js/custom.js"></script>
  </body>
</html>
