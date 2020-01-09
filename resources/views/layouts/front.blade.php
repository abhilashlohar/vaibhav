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
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <style>
        .product {
          font-weight: bold;
          padding: .2em .4em;
          margin: .8em 0 .2em;
          line-height: 1.5;
        }
        #ui-id-1{
            z-index: 1000;
        }

        </style>
      @yield ('header-style')
      <title>{{$page_title}}</title>
    </head>
<body class="{{$body_class}}">
<?php
    use \App\Http\Controllers\HomeController;

    $cartItem = HomeController::cartItem();
    $headerCategories = HomeController::headerCategories();

    ?>

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
                        <a href="{{ route('users.profile') }}">
                           <span class="desktop-text">Account</span>
                           <span class="mobile-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </a>
                    	</div>
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
                                 <form action="#" method="get">
                                    <input type="text" name="search" class="typeahead" placeholder="Your search term...">
                                    <button type="submit" value="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                 </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="ecommerce-menu--item">
                        <a href="{{ route('cart') }}" class="cart-notify">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="count">({{$cartItem}})</span></a>
                    </div>
                    {{-- <div class="ecommerce-menu--item">
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submmit" class="btn btn-sm btn-kelu">Log Out</button>
                        </form>
                    </div> --}}
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
                       <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item item-dropdown">
                        <ul class="dropDownMenu">
                           <li>
                              <a class="nav-link" href="#">Stores</a>
                              <ul>
                                  @foreach ($headerCategories as $headerCategory)
                                    <li><a href="{{route('products.list',[$headerCategory->slug,$headerCategory->subCategoryFirst->slug])}}">{{$headerCategory->name}}</a></li>
                                  @endforeach
                              </ul>
                           </li>
                        </ul>
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
                           <li><a href="#" target="_blank">FAQ</a></li>
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
                        <form method="get" action="#">
                           <input type="email" name="email" placeholder="Enter your email address">
                           <input type="submit" name="submit" value="SUBSCRIBE">
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-copyright--wrap">
            	2020@Vaibhavstores - All rights reserved - <a href="#">Terms & Coonditions</a>
            </div>
         </div>
      </div>
   </footer>

   <!-- Javascript -->
   <script src="<?php echo url('/'); ?>/static/js/jquery-3.4.1.min.js"></script>
   <script src="<?php echo url('/'); ?>/static/js/bootstrap.min.js"></script>
   <script src="<?php echo url('/'); ?>/static/js/owl.carousel.js"></script>
   <script src="<?php echo url('/'); ?>/static/js/rater.js"></script>

   @yield ('footer-script')

   <script src="<?php echo url('/'); ?>/static/js/custom.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>
         $( function() {
    $.widget( "custom.catcomplete", $.ui.autocomplete, {
      _create: function() {
        this._super();
        this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
      },
      _renderMenu: function( ul, items ) {
        var that = this,
          currentCategory = "";
        $.each( items, function( index, item ) {
          var li;

          li = that._renderItemData( ul, item );
          if ( item.product ) {

                li.addClass("product");
            //li.attr( "aria-label", item.category + " : " + item.label );
          }
        });
      }
    });
    // var data = [
    //   { label: "anders", category: "" },
    //   { label: "andreas", category: "" },
    //   { label: "antal", category: "" },
    //   { label: "annhhx10", category: "Products" },
    //   { label: "annk K12", category: "Products" },
    //   { label: "annttop C13", category: "Products" },
    //   { label: "anders andersson", category: "People" },
    //   { label: "andreas andersson", category: "People" },
    //   { label: "andreas johnson", category: "People" }
    // ];

    $( ".typeahead" ).catcomplete({
            delay: 0,
           source: function (query, process) {
            jQuery.ajax({
                url : "{{route('advanceSearch',['+%QUERY+'])}}",
                type : 'GET',
                dataType : 'json',
                success : function(data) {
                    return process(data);
                }
            });
         }
    });
  } );
    $(document).ready(function(){
        // var bestPictures = new Bloodhound({
        // datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
        // queryTokenizer: Bloodhound.tokenizers.whitespace,
        // remote: {
        //     url: '{{route('advanceSearch',['+%QUERY+'])}}',
        //     wildcard: '%QUERY'
        // }
        // });

        // $('.typeahead').typeahead(null, {
        // name: 'name',
        // display: 'name',
        // limit: 10,
        // source: bestPictures,
        // templates: {
        //     header: '<h5 class="league-name">NBA Teams</h5>'
        // }
        // });
    });
    $(document).ready(function()
      {
         ///weather/searchCity/?q=%QUERY
    //      $('.typeahead').typeahead({
    //      hint: true,
    //      highlight: true,
    //      minLength: 1
    //   },
    //      {
    //      name: 'options',
    //      displayKey: 'value',
    //      source: function (query, process) {
    //         jQuery.ajax({
    //             url : "{{route('advanceSearch',['+%QUERY+'])}}",
    //             type : 'GET',
    //             dataType : 'json',
    //             success : function(data) {
    //                 // var matches = [];
    //                 // $.each(data, function(i, str) {
    //                 //     matches.push({ value: str });
    //                 // });
    //                 // console.log(matches);
    //                 return process(data);

    //                 //process(json);
    //             }
    //         });
    //      }
    //   });
});
    </script>
  </body>
</html>
