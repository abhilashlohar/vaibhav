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
        .ui-category {
          font-weight: bold;
          padding: .2em .0em;
          margin: .8em 0 .2em;
          line-height: 1.5;
        }
        /* .typeahead .tt-dropdown-menu {
            max-height: 150px;
            overflow-y: auto;
        } */
        #ui-id-1{
            z-index: 1000;
        }
        .ecommerce-menu--item .dropDownMenu form button {
            padding: 11px 12px;
            display: inline-block;
            font-size: 14px;
            line-height: 23px;
            font-weight: 500;
            color: #2e2e2e;
            text-transform: uppercase;
            letter-spacing: 0.03em;
            background-color: transparent;
            width: 100%;
            text-align: left;
        }
        .ecommerce-menu--item .dropDownMenu form
        {
            border: none;
        }

        </style>
      @yield ('header-style')
      <title>{{$page_title}}</title>
      <link rel="shortcut icon" href="<?php echo url('/'); ?>/static/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo url('/'); ?>/static/images/favicon.ico" type="image/x-icon">
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
               <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
               <div class="col-5 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                  <div class="logo-wrap">
                     <a href="<?php echo url('/'); ?>"><img src="<?php echo url('/'); ?>/static/images/logo.png" alt="" title=""/></a>
                  </div>
               </div>
               <div class="col-4 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                  <div class="ecommerce-menu--wrap">
                  	<div class="ecommerce-menu--item">
                        <ul class="navbar-nav">
                           <li class="nav-item item-dropdown">
                              <ul class="dropDownMenu">
                                 <li>
                                    <a href="javascript:void(0)">
                                       <span class="desktop-text">Account</span>
                                       <span class="mobile-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    </a>
                                    <ul>
                                       <li><a href="{{ route('users.profile') }}">My Profile</a></li>
                                       <li><a href="{{ route('orders.list') }}">Order History</a></li>
                                       @if (auth()->user())
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submmit">Log Out</button>
                                            </form>
                                        </li>
                                       @else
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                       @endif
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
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
                              <form id="search-form">
                                    <input type="text" name="search" class="typeahead" placeholder="Your search term...">
                                    <button type="submit" id="search-submit" value="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                 </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="ecommerce-menu--item">
                        <a href="{{ route('cart') }}" class="cart-notify">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="count">{{$cartItem}}</span></a>
                    </div>
                  </div>
               </div>
               <div class="col-3 col-sm-4 col-md-12 col-lg-12 col-xl-12">
                  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item">
                              <a class="nav-link" href="{{ route('home') }}">Home </a>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Stores
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <div class="dropdown-item--wrap">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                       <div class="tab-pane well active in active" id="category-01">
                                          <div class="menu-tab--grids">
                                             <!-- Tab Items -->
                                             @foreach ($headerCategories as $headerCategory)
                                             <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                                <div class="menu-tab--item">
                                                   <a href="{{route('products.category-list',[$headerCategory->slug])}}">
                                                      <img src="{{ asset('storage/category/'.$headerCategory->image) }}" alt=""/>
                                                      <h5>{{$headerCategory->name}}</h5>
                                                   </a>
                                                </div>
                                             </div>
                                             @endforeach
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="nav-item">
                            <a class="nav-link" href="{{route('enquiry.care')}}">Care</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('enquiry.xpress')}}">Xpress</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('event.academy')}}">Academy</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('enquiry.plus')}}">Plus</a>
                          </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>

   @yield ('content')
   <!-- Modal for Add To Query -->
   <div class="modal fade" id="add-query" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product To Your Query</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form id="queryForm" name="queryForm">
            <div class="modal-body">
                <p style="display:none; color:#000;" id="enquiry-result" class="alert alert-success" role="alert"></p>
                <p style="display:none; color:#000;" id="enquiry-error" class="alert alert-danger" role="alert">Please Fill all input.</p>
                <div class="form-group">
                    <label for="query-name">Name *</label>
                    <input type="text" class="form-control" id="query-name" aria-describedby="name" placeholder="Enter Name" required="required">
                </div>
                <div class="form-group">
                    <label for="query-email">Email address *</label>
                    <input type="email" class="form-control" id="query-email" name="query_email" aria-describedby="emailHelp" placeholder="Enter email" required="required">
                </div>
                <div class="form-group">
                    <label for="query-mobile">Mobile No. *</label>
                    <input type="text" class="form-control" id="query-mobile" aria-describedby="mobile" placeholder="Enter Mobile No." required="required">
                </div>
                <div class="form-group">
                    <label for="message-for-query">Message *</label>
                    <textarea class="form-control" id="query-message" rows="3" required="required"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger queryToEnquiry">Send Enquiry</button>
            </div>
        </form>
    </div>
    </div>
</div>
   <footer class="footer-wrapper">
      <div class="container-fluid">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 padding-0">
            <div class="footer-grid--wrap">
               <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                  <div class="footer-about--wrap">
                     <div class="footer-title--wrap">
                        <h3>About the brand</h3>
                     </div>
                     <div class="footer-about--text">
                        <p>Et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna eget est lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                     </div>
                  </div>
               </div>
               <div class="col-5 col-sm-6 col-md-6 col-lg-2 col-xl-2">
                  <div class="footer-about--wrap">
                     <div class="footer-title--wrap">
                        <h3>Our Stores</h3>
                     </div>
                     <div class="footer-links--wrap">
                        <ul>
                            @foreach ($headerCategories as $headerCategory)
                                <li>
                                    <a href="{{route('products.category-list',[$headerCategory->slug])}}">
                                        {{$headerCategory->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-7 col-sm-6 col-md-6 col-lg-2 col-xl-2">
                  <div class="footer-about--wrap">
                     <div class="footer-title--wrap">
                        <h3>About Us</h3>
                     </div>
                     <div class="footer-links--wrap">
                        <ul>
                           <li><a href="{{url('/journal') }}">Journal</a></li>
                           <li><a href="{{url('/faqs') }}">FAQs</a></li>
                           <li><a href="{{route('blogs.list') }}">Blog</a></li>
                           <li><a href="{{url('/contact-us') }}">Contact</a></li>
                           <li><a href="{{url('/terms-and-conditions') }}">Terms & Conditions</a></li>
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
               <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                  <div class="footer-about--wrap">
                     <div class="footer-title--wrap">
                        <h3>Newsletter</h3>
                     </div>
                     <div class="footer-subscribe--wrap">
                        <p>Subscribe to receive updates, access to exclusive deals and more.</p>

                        <p style="display:none; color:#000;" id="subscribe-message" class="alert alert-success" role="alert"></p>
                        <form method="get" id="enquiry_subscribe" action="#">
                           <input style="color:#fff" type="email" id="subscribe_email" name="email" placeholder="Enter your email address">
                           <input type="submit" name="submit" class="addToEnquiry" value="SUBSCRIBE">
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-copyright--wrap">
            	2019@Vaibhavstores - All rights reserved - <a href="#">Terms & Coonditions</a>
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
   <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
    <script>
        $( "#search-form" ).validate({
            rules: {
                search: {
                    required: !0
                }
            }
        });
        $( "#enquiry_subscribe" ).validate({
            rules: {
                email: {
                    required: !0
                }
            }
        });
        $( "#queryForm" ).validate({
            rules: {
                query_email: {
                    required: !0
                }
            }
        });

    </script>
   <script>
        $( function() {
            $( "#search-submit" ).on('click',function(e){
                e.preventDefault();

                var url = '{{ route("products.search", ":id") }}';
                var search = $('.typeahead').val();
                if(search != '')
                {
                    url = url.replace(':id', search);
                    window.location.href = url;
                }

            });
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
                    if ( item.category ) {
                            li.addClass("ui-category");
                    }
                    });
                }
            });
            $( ".typeahead" ).catcomplete({
                    delay: 0,
                source: function (query, process) {
                    var url = '{{ route("advanceSearch", ":id") }}';
                    url = url.replace(':id', query.term);
                    jQuery.ajax({
                        url : url,
                        type : 'get',
                        dataType : 'json',
                        success : function(data) {
                            return process(data);
                        }
                    });
                },
                select: function(e, ui) {
                    window.location.href = ui.item.url;
                }
            });

            $( ".typeaheadblog" ).catcomplete({
                    delay: 0,
                source: function (query, process) {
                    var url = '{{ route("advanceBlogSearch", ":id") }}';
                    url = url.replace(':id', query.term);
                    jQuery.ajax({
                        url : url,
                        type : 'get',
                        dataType : 'json',
                        success : function(data) {
                            return process(data);
                        }
                    });
                },
                select: function(e, ui) {
                    window.location.href = ui.item.url;
                }
            });
        });

        jQuery(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click','.addToEnquiry',function(e){
                e.preventDefault();
                var email = $('#subscribe_email').val();
                if(email != "")
                {
                    $('.addToEnquiry').attr('disabled', true);
                    $('.addToEnquiry').attr('value','Subscribing...');
                    $.ajax({
                        type:'POST',
                        url:"{{ route('enquiry.store') }}",
                        data:{email:email, enquiry_type:'Subscribe Email'},
                        success:function(data){
                            $('.addToEnquiry').attr('disabled', false);
                            $('.addToEnquiry').attr('value','SUBSCRIBE');
                            $('#subscribe_email').val('');
                            $('#subscribe-message').show();
                            setTimeout(function(){ $('#subscribe-message').hide(); }, 5000);
                            $('#subscribe-message').html(data);
                        }
                    });
                }

            });

            var query_product_id = 0;
            $(document).on('click', '.open-enquery-modal', function(e){
                $('#enquiry-result').hide();
                $('#enquiry-error').hide();
                $('#add-query').modal({
                    show: true
                });
                query_product_id = $(this).attr('product_id');
            });

            $(document).on('click','.queryToEnquiry',function(e){
                e.preventDefault();

                var product_id = query_product_id;
                var name = $('#query-name').val();
                var email = $('#query-email').val();
                var mobile_no = $('#query-mobile').val();
                var enquiry_message = $('#query-message').val();
                if(name != "" && email != "" && mobile_no != "" && enquiry_message != "")
                {
                    $('.queryToEnquiry').attr('disabled', true);
                    $('.queryToEnquiry').text('Sending...');
                    $.ajax({
                        type:'POST',
                        url:"{{ route('enquiry.store') }}",
                        data:{product_id:product_id, name:name, email:email, mobile_no:mobile_no, enquiry_message:enquiry_message, enquiry_type:'Product Enquiry'},
                        success:function(data){
                            $('#enquiry-error').hide();
                            $('#enquiry-result').show();
                            $('.queryToEnquiry').attr('disabled', false);
                            $('.queryToEnquiry').text('Send Enquiry');
                            setTimeout(function(){ $('#enquiry-result').hide(); }, 5000);
                            $('#enquiry-result').html(data);
                            $("#queryForm").trigger("reset");
                            $('#add-query').animate({ scrollTop:180},'slow');
                        }
                    });
                }
                else
                {
                    $('#enquiry-error').show();
                    setTimeout(function(){ $('#enquiry-error').hide(); }, 5000);
                    $('#add-query').animate({ scrollTop:180},'slow');
                }
            });
        });
    </script>
  </body>
</html>
