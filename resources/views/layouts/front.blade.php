<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Bootstrap CSS -->
      <link href="<?php echo url('/'); ?>/static/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo url('/'); ?>/static/css/owl-carousel.css" rel="stylesheet">
      <link href="<?php echo url('/'); ?>/static/css/font-awesome.css" rel="stylesheet">
      <link href="<?php echo url('/'); ?>/static/css/owl.theme.default.css" rel="stylesheet">
      <link href="<?php echo url('/'); ?>/static/css/primary-style.css" rel="stylesheet">
      <title>{{$page_title}}</title>
    </head>
<body class="{{$body_class}}">

   <header class="header-wrapper">
      <div class="container">
         <div class="row">
            <div class="header-bar--top">
               <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                  <div class="currency-wrap">
                     <div class="item-dropdown">
                        <ul class="dropDownMenu">
                           <li><a href="#">INR</a>
                              <ul>
                                 <li><a href="http://html-tuts.com/?p=9961">USD</a></li>
                                 <li><a href="http://html-tuts.com/?p=9961">Euro</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                  <div class="logo-wrap">
                     <img src="<?php echo url('/'); ?>/static/images/logo.png" alt="" title=""/>
                  </div>
               </div>
               <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                  <div class="ecommerce-menu--wrap">
                     <div class="ecommerce-menu--item">
                        <button type="button" class="btn" data-toggle="modal" data-target="#search">
                           Search
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
                           <li><a href="#">Account</a>
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
                     <a href="#" class="cart-notify">Cart <span class="count">(0)</span></a>
                  </div>
                  </div>
               </div>
            </div>
            <div class="navigation--wrap">
               <ul>
                  <li><a href="#" class="active">Home</a></li>
                  <li><a href="#">Stores</a></li>
                  <li><a href="#">Care</a></li>
                  <li><a href="#">Xpress</a></li>
                  <li><a href="#">Academy</a></li>
                  <li><a href="#">Plus</a></li>
               </ul>
            </div>
         </div>
      </div>
   </header>
    @yield ('content')
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
     @yield ('footer-script')
    </body>
  </html>
