@extends ('layouts.front')


@section ('content')
<section class="category-banner--wrapper assign-right--transparent">
    <div class="container-fluid">
        <div class="row">
        <div class="owl-carousel category-slideshow owl-theme">
            <div class="item">
                <div class="slideshow-details--wrap">
                    <div class="slideshow-image--wrap">
                    <img class="slide-on--desktop" src="<?php echo url('/'); ?>/static/images/blog-banner-image-01.png" alt="" title="">
                    <img class="slide-on--mobile" src="<?php echo url('/'); ?>/static/images/academy-banner-01-mobile.png" alt="" title="">
                    </div>
                    <div class="message-rounded--wrap">
                    <h1>Lorem ipsum doler sit lorem ipsum</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slideshow-details--wrap">
                    <div class="slideshow-image--wrap">
                    <img class="slide-on--desktop" src="<?php echo url('/'); ?>/static/images/blog-banner-image-01.png" alt="" title="">
                    <img class="slide-on--mobile" src="<?php echo url('/'); ?>/static/images/academy-banner-01-mobile.png" alt="" title="">
                    </div>
                    <div class="message-rounded--wrap">
                    <h1>Lorem ipsum doler sit lorem ipsum</h1>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<section class="blog-details--wrapper">
    <div class="container-fluid">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="breadcrumb-wrap">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ol>
            </nav>
        </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="blog-details--grid">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                <div class="blog-content--wrap">
                    <div class="blog-heading--text">
                    <h2>{{ $blog->title }}</h2>
                    </div>
                    <div class="blog-meta--wrap">
                    <div class="date">
                        <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        {{ date('F d Y', strtotime($blog->created_at)) }}
                    </div>
                    <div class="share">
                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                        Share
                    </div>
                    </div>
                    <div class="blog-featured--wrap">
                    @if ($blog->featured_image)
                    <img src="{{ asset('storage/blog/'.$blog->id.'/'.$blog->featured_image) }}" alt="{{$blog->title}}"/>
                    @endif
                    </div>
                    <div class="blog-reader--wrap">
                        <?php echo $blog->content; ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <div class="blog-sidebar--wrap">
                    <div class="sidebar-search">
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search for the blog">
                    </div>
                    </div>
                    <div class="sidebar-post--recommended">
                    <div class="sidebar-item--title">
                        <h3>Recent Post</h3>
                    </div>
                    <div class="sidebar-post--item">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="recommended-post--image">
                                <img src="<?php echo url('/'); ?>/static/images/blog-thumbnail-01.png" alt=""/>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                            <div class="recommended-post--excerpt">
                                <h5>Lorem ipsum dolor sit amet ipsum amet ipsum dolor</h5>
                                <div class="date">
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                February 12 2020
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-post--item">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="recommended-post--image">
                                <img src="<?php echo url('/'); ?>/static/images/blog-thumbnail-01.png" alt=""/>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                            <div class="recommended-post--excerpt">
                                <h5>Lorem ipsum dolor sit amet ipsum amet ipsum dolor</h5>
                                <div class="date">
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                February 12 2020
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-post--item">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="recommended-post--image">
                                <img src="<?php echo url('/'); ?>/static/images/blog-thumbnail-01.png" alt=""/>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                            <div class="recommended-post--excerpt">
                                <h5>Lorem ipsum dolor sit amet ipsum amet ipsum dolor</h5>
                                <div class="date">
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                February 12 2020
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-post--item">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="recommended-post--image">
                                <img src="<?php echo url('/'); ?>/static/images/blog-thumbnail-01.png" alt=""/>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                            <div class="recommended-post--excerpt">
                                <h5>Lorem ipsum dolor sit amet ipsum amet ipsum dolor</h5>
                                <div class="date">
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                February 12 2020
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="sidebar-item--categories">
                    <div class="sidebar-item--title">
                        <h3>Recent Post</h3>
                    </div>
                    <div class="sidebar-category--item">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="recommended-category--image">
                                <img src="<?php echo url('/'); ?>/static/images/blog-thumbnail-01.png" alt=""/>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="recommended-category--excerpt">
                                <h3>Electricals</h3>
                                <div class="date">
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                February 12 2020
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-category--item">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="recommended-category--image">
                                <img src="<?php echo url('/'); ?>/static/images/blog-thumbnail-01.png" alt=""/>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="recommended-category--excerpt">
                                <h3>Electricals</h3>
                                <div class="date">
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                February 12 2020
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-category--item">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="recommended-category--image">
                                <img src="<?php echo url('/'); ?>/static/images/blog-thumbnail-01.png" alt=""/>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="recommended-category--excerpt">
                                <h3>Electricals</h3>
                                <div class="date">
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                February 12 2020
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="sidebar-promotion--image">
                    <img src="<?php echo url('/'); ?>/static/images/promotion-banner-01.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection