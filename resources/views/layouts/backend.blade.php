<!DOCTYPE html>
<html lang="en" >
<!-- begin::Head -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->

    @yield ('header-css')

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/css/skins/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/css/skins/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Skins -->

    <link rel="shortcut icon" href="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/media/logos/favicon.ico" />

    <!-- Hotjar Tracking Code for keenthemes.com -->
    <!-- <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1070954,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script> -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script> -->
    <!-- <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-37564768-1');
    </script>   -->
</head>
<!-- end::Head -->

<!-- begin::Body -->
<body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading"  >

<!-- begin:: Page -->

    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
        <div class="kt-header-mobile__logo">
            <a href="../../../index.html">
                <img alt="Logo" src="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/media/logos/logo-light.png"/>
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>

            <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
        </div>
    </div>
    <!-- end:: Header Mobile -->

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <!-- begin:: Aside -->

            <!-- Uncomment this to display the close button of the panel
            <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
            -->

            <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
                <!-- begin:: Aside -->
                <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
                    <div class="kt-aside__brand-logo">
                        <a href="../../../index.html">
                            <img alt="Logo" src="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/media/logos/logo-light.png"/>
                        </a>
                    </div>

                    <div class="kt-aside__brand-tools">
                        <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"/>
                                <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                                <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                            </g>
                            </svg>
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"/>
                                <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"/>
                                <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                            </g>
                            </svg>
                        </span>
                        </button>
                        <!--
                        <button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
                        -->
                    </div>
                </div>
                <!-- end:: Aside -->

                <!-- begin:: Aside Menu -->
                <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                    <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1"data-ktmenu-dropdown-timeout="500">

                        <ul class="kt-menu__nav ">
                            <li class="kt-menu__item " aria-haspopup="true">
                                <a href="{{ route('Admin.dashboard') }}" class="kt-menu__link ">
                                    <span class="kt-menu__link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                            <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
                                            <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
                                        </g>
                                    </svg>
                                    </span>
                                    <span class="kt-menu__link-text">Dashboard</span>
                                </a>
                            </li>
                            @if (in_array('CategoryController@index',Session::get('userrightPages')))
                                <li class="kt-menu__item " aria-haspopup="true">
                                    <a href="{{ route('categories.index') }}" class="kt-menu__link ">
                                        <span class="kt-menu__link-icon">
                                            <i class="fa fa-list"></i>
                                        </span>
                                        <span class="kt-menu__link-text">Category</span>
                                    </a>
                                </li>
                            @endif
                            @if (in_array('SubCategoryController@index',Session::get('userrightPages')))
                                <li class="kt-menu__item " aria-haspopup="true">
                                    <a href="{{ route('sub-categories.index') }}" class="kt-menu__link ">
                                        <span class="kt-menu__link-icon">
                                            <i class="fa fa-clipboard-list"></i>
                                        </span>
                                        <span class="kt-menu__link-text">Sub Category</span>
                                    </a>
                                </li>
                            @endif
                            @if (in_array('ProductController@index',Session::get('userrightPages')))
                                <li class="kt-menu__item " aria-haspopup="true">
                                    <a href="{{ route('products.index') }}" class="kt-menu__link ">
                                        <span class="kt-menu__link-icon">
                                            <i class="fa fa-clipboard-list"></i>
                                        </span>
                                        <span class="kt-menu__link-text">Product</span>
                                    </a>
                                </li>
                            @endif
                            @if (in_array('EnquiryController@index',Session::get('userrightPages')))
                                <li class="kt-menu__item " aria-haspopup="true">
                                    <a href="{{ route('enquiries.index') }}" class="kt-menu__link ">
                                        <span class="kt-menu__link-icon">
                                            <i class="fa fa-clipboard-list"></i>
                                        </span>
                                        <span class="kt-menu__link-text">Enquiry</span>
                                    </a>
                                </li>
                            @endif
                            @if (in_array('AdminController@index',Session::get('userrightPages')))
                                <li class="kt-menu__item " aria-haspopup="true">
                                    <a href="{{ route('users.index') }}" class="kt-menu__link ">
                                        <span class="kt-menu__link-icon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <span class="kt-menu__link-text">Users</span>
                                    </a>
                                </li>
                            @endif
                            @if (in_array('BlogController@index',Session::get('userrightPages')))
                                <li class="kt-menu__item " aria-haspopup="true">
                                    <a href="{{ route('blogs.index') }}" class="kt-menu__link ">
                                        <span class="kt-menu__link-icon">
                                            <i class="fa fa-book"></i>
                                        </span>
                                        <span class="kt-menu__link-text">Blogs</span>
                                    </a>
                                </li>
                            @endif
                            @if (in_array('BlogCategoryController@index',Session::get('userrightPages')))
                                <li class="kt-menu__item " aria-haspopup="true">
                                    <a href="{{ route('blog-categories.index') }}" class="kt-menu__link ">
                                        <span class="kt-menu__link-icon">
                                            <i class="fa fa-book"></i>
                                        </span>
                                        <span class="kt-menu__link-text">Blog Category</span>
                                    </a>
                                </li>
                            @endif

                            @if (in_array('EventController@index',Session::get('userrightPages')))
                                <li class="kt-menu__item " aria-haspopup="true">
                                    <a href="{{ route('events.index') }}" class="kt-menu__link ">
                                        <span class="kt-menu__link-icon">
                                            <i class="fa fa-guitar"></i>
                                        </span>
                                        <span class="kt-menu__link-text">Event</span>
                                    </a>
                                </li>
                            @endif

                            <li class="kt-menu__item " aria-haspopup="true">
                                <a href="{{ route('redirections.index') }}" class="kt-menu__link ">
                                    <span class="kt-menu__link-icon">
                                        <i class="fa fa-book"></i>
                                    </span>
                                    <span class="kt-menu__link-text">Redirection Rules</span>
                                </a>
                            </li>

                            <li class="kt-menu__item " aria-haspopup="true">
                                <a href="{{ route('customer.index') }}" class="kt-menu__link ">
                                    <span class="kt-menu__link-icon">
                                        <i class="fa fa-book"></i>
                                    </span>
                                    <span class="kt-menu__link-text">Customer</span>
                                </a>
                            </li>

                        </ul>


                    </div>
                </div>
                <!-- end:: Aside Menu -->
            </div>
            <!-- end:: Aside -->

            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <!-- begin:: Header -->
                <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " >

                    <!-- begin:: Header Menu -->
                    <!-- Uncomment this to display the close button of the panel
                    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                    -->

                    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default "  >
                        </div>
                    </div>
                    <!-- end:: Header Menu -->

                    <!-- begin:: Header Topbar -->
                    <div class="kt-header__topbar">


                        <!--begin: User Bar -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                                <div class="kt-header__topbar-user">
                                    <span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                                    <span class="kt-header__topbar-username kt-hidden-mobile">{{ explode(' ', Session::get('admin_name'))[0] }}</span>
                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                    <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">{{ strtoupper(Session::get('admin_name')[0]) }}</span>
                                </div>
                            </div>

                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-md">
                                <!--begin: Head -->
                                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/media/misc/bg-1.jpg)">
                                    <div class="kt-user-card__avatar">
                                        <img class="kt-hidden" alt="Pic" src="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/media/users/300_25.jpg" />
                                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                        <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">{{ strtoupper(Session::get('admin_name')[0]) }}</span>
                                    </div>
                                    <div class="kt-user-card__name">
                                        Welcome <br> {{ Session::get('admin_name') }}!
                                    </div>
                                </div>
                                <!--end: Head -->

                                <!--begin: Navigation -->
                                <div class="kt-notification">

                                    <div class="kt-notification__custom kt-space-between">
                                        <a href="{{ route('admin.changepassword') }}" class="btn btn-label btn-label-brand btn-sm btn-bold">Change Password</a>
                                        <a href="{{ route('AdminLogout') }}" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
                                    </div>
                                </div>
                                <!--end: Navigation -->
                            </div>
                        </div>
                        <!--end: User Bar -->
                    </div>
                    <!-- end:: Header Topbar -->
                </div>
                <!-- end:: Header -->

                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!-- begin:: Subheader -->
                    <div class="kt-subheader   kt-grid__item" id="kt_subheader"></div>
                    <!-- end:: Subheader -->

                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                    @yield ('content')
                    </div>
                    <!-- end:: Content -->
                </div>

                <!-- begin:: Footer -->
                <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-footer__copyright">
                            {{ config('app.footer_text') }}
                        </div>
                    </div>
                </div>
                <!-- end:: Footer -->
            </div>
        </div>
    </div>

<!-- end:: Page -->

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>
<!-- end::Scrolltop -->



<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
    "colors": {
        "state": {
            "brand": "#5d78ff",
            "dark": "#282a3c",
            "light": "#ffffff",
            "primary": "#5867dd",
            "success": "#34bfa3",
            "info": "#36a3f7",
            "warning": "#ffb822",
            "danger": "#fd3995"
        },
        "base": {
            "label": [
                "#c5cbe3",
                "#a1a8c3",
                "#3d4465",
                "#3e4466"
            ],
            "shape": [
                "#f0f3ff",
                "#d9dffa",
                "#afb4d4",
                "#646c9a"
            ]
        }
    }
};
</script>
<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
   <script src="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
   <script src="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/js/scripts.bundle.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->
@yield ('footer-script')

</body>
<!-- end::Body -->
</html>
