@extends ('layouts.front')

@section ('content')

    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/share/jssocials.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/share/jssocials-theme-flat.css" />

    <section class="hero-slideshow--wrapper">
      <div class="container-fluid">
         <div class="row">
            <div class="owl-carousel hero-slideshow owl-theme">
               <div class="item">
                  <div class="slideshow-details--wrap">
                     <div class="slideshow-image--wrap">
                        <a href="http://13.127.186.154/products/Furnitures">
                           <img class="slide-on--desktop owl-lazy" data-src="<?php echo url('/'); ?>/static/images/vaibhav-slideshow-01.jpg" alt="" title="">
                           <img class="slide-on--mobile owl-lazy" data-src="<?php echo url('/'); ?>/static/images/vaibhav-slideshow-01.jpg" alt="" title="">
                        </a>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="slideshow-details--wrap">
                     <div class="slideshow-image--wrap">
                        <a href="http://13.127.186.154/products/Furnitures">
                           <img class="slide-on--desktop owl-lazy" data-src="<?php echo url('/'); ?>/static/images/vaibhav-slideshow-02.jpg" alt="" title="">
                           <img class="slide-on--mobile owl-lazy" data-src="<?php echo url('/'); ?>/static/images/vaibhav-slideshow-02.jpg" alt="" title="">
                        </a>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="slideshow-details--wrap">
                     <div class="slideshow-image--wrap">
                        <a href="http://13.127.186.154/products/Furnitures">
                           <img class="slide-on--desktop owl-lazy" data-src="<?php echo url('/'); ?>/static/images/vaibhav-slideshow-03.jpg" alt="" title="">
                           <img class="slide-on--mobile owl-lazy" data-src="<?php echo url('/'); ?>/static/images/vaibhav-slideshow-03.jpg" alt="" title="">
                        </a>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="slideshow-details--wrap">
                     <div class="slideshow-image--wrap">
                        <a href="http://13.127.186.154/products/Furnitures">
                           <img class="slide-on--desktop owl-lazy" data-src="<?php echo url('/'); ?>/static/images/vaibhav-slideshow-04.jpg" alt="" title="">
                           <img class="slide-on--mobile owl-lazy" data-src="<?php echo url('/'); ?>/static/images/vaibhav-slideshow-04.jpg" alt="" title="">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </section>

    <!-- Need to move into css file -->
    <style>
    span.checked {
      color: #F9B536;
    }
    </style>
    <!-- Need to move into css file -->
    @if ($furnitureProduct1 && $furnitureProduct2 && $furnitureProduct3 && $furnitureProduct4)
    <section class="category-ui--one">
      <div class="container-fluid">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="title-ui--wrap">
               <!-- <div class="title-text--up">
                  <h4>Want to Shop?</h4>
               </div> -->
               <div class="title-text--middle">
                  <h2>Furniture</h2>
               </div>
               <div class="title-text--action">
                  <a href="http://13.127.186.154/products/Furnitures" target="_blank">View All</a>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div id="owl-category--one" class="category-blocks--ui owl-carousel">
               <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-4">
                  <div class="category-block--wrap green-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',[$furnitureProduct1->category->slug,$furnitureProduct1->subcategory->slug,$furnitureProduct1->slug]) }}">{{ $furnitureProduct1->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount"> ({{ $furnitureProduct1->discount }}% Off)</li>
                              <li class="old-price"> Rs. {{ round($furnitureProduct1->regular_price, 0) }}</li>
                              <li class="new-price"> Rs. {{ round($furnitureProduct1->sale_price, 0) }}</li>
                           </ul>
                        </div>
                        <div style="direction:ltr;">
                            <?php
                                $stars = 0;
                                if ($furnitureProduct1->avgRating != null)
                                {
                                    $stars = $furnitureProduct1->avgRating->rating;
                                }
                                for ($i=1; $i <= 5 ; $i++) {
                                    if ($i<=$stars) $checked = "checked";
                                    else $checked = "";
                                    echo '<span class="fa fa-star '.$checked.'" style="margin-right: 8px"></span>';
                                }
                            ?>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" class="query_product_id" name="product_id" value="{{$furnitureProduct1->id}}">
                                        {{-- <button type="submit">Buy Now</button> --}}
                                    </form>
                                    <button type="button" class="open-enquery-modal" product_id="{{$furnitureProduct1->id}}" category_slug="{{$furnitureProduct1->subCategory->category->slug}}" enquiry_type="furniture">Enquire Now</button>
                                </li>
                              <li><a href="{{route('products.product-detail',[$furnitureProduct1->category->slug,$furnitureProduct1->subcategory->slug,$furnitureProduct1->slug])}}">Explore</a></li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--share">
                             <a class="share-this" data-toggle="collapse" href="#share-social-furniture-0" role="button" aria-expanded="false" aria-controls="share-social-furniture-0">
                               <i class="fa fa-share-alt" aria-hidden="true"></i> Share
                            </a>
                            <div class="collapse" id="share-social-furniture-0">
                              <div class="card card-body">
                                  <div id="FurnitureShare0"></div>
                              </div>
                            </div>
                         </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$furnitureProduct1->product_image_primary->image) }}" alt="{{ $furnitureProduct1->name }}" title="{{ $furnitureProduct1->name }}"/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-8">
                  <div class="category-block--wrap peach-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',[$furnitureProduct2->category->slug,$furnitureProduct2->subcategory->slug,$furnitureProduct2->slug]) }}">{{ $furnitureProduct2->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">({{ $furnitureProduct2->discount }}% Off)</li>
                              <li class="old-price">Rs. {{ round($furnitureProduct2->regular_price, 0) }}</li>
                              <li class="new-price">Rs. {{ round($furnitureProduct2->sale_price, 0) }}</li>
                           </ul>
                        </div>
                        <div style="direction:ltr;">
                            <?php
                                $stars = 0;
                                if ($furnitureProduct2->avgRating != null)
                                {
                                    $stars = $furnitureProduct2->avgRating->rating;
                                }
                                for ($i=1; $i <= 5 ; $i++) {
                                    if ($i<=$stars) $checked = "checked";
                                    else $checked = "";
                                    echo '<span class="fa fa-star '.$checked.'" style="margin-right: 8px"></span>';
                                }
                            ?>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$furnitureProduct2->id}}">
                                        {{-- <button type="submit">Buy Now</button> --}}
                                    </form>
                                    <button type="button" class="open-enquery-modal" product_id="{{$furnitureProduct2->id}}" category_slug="{{$furnitureProduct2->subCategory->category->slug}}" enquiry_type="furniture">Enquire Now</button>
                                </li>
                              <li><a href="{{route('products.product-detail',[$furnitureProduct2->category->slug,$furnitureProduct2->subcategory->slug,$furnitureProduct2->slug])}}">Explore</a></li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--share">
                             <a class="share-this" data-toggle="collapse" href="#share-social-furniture-1" role="button" aria-expanded="false" aria-controls="share-social-furniture-1">
                               <i class="fa fa-share-alt" aria-hidden="true"></i> Share
                            </a>
                            <div class="collapse" id="share-social-furniture-1">
                              <div class="card card-body">
                                  <div id="FurnitureShare1"></div>
                              </div>
                            </div>
                         </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$furnitureProduct2->product_image_primary->image) }}" alt="{{ $furnitureProduct2->name }}" title="{{ $furnitureProduct2->name }}"/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                  <div class="category-block--wrap blue-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',[$furnitureProduct3->category->slug,$furnitureProduct3->subcategory->slug,$furnitureProduct3->slug]) }}">{{ $furnitureProduct3->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">({{ $furnitureProduct3->discount }}% Off)</li>
                              <li class="old-price">Rs. {{ round($furnitureProduct3->regular_price, 0) }}</li>
                              <li class="new-price">Rs. {{ round($furnitureProduct3->sale_price, 0) }}</li>
                           </ul>
                        </div>
                        <div style="direction:ltr;">
                            <?php
                                $stars = 0;
                                if ($furnitureProduct3->avgRating != null)
                                {
                                    $stars = $furnitureProduct3->avgRating->rating;
                                }
                                for ($i=1; $i <= 5 ; $i++) {
                                    if ($i<=$stars) $checked = "checked";
                                    else $checked = "";
                                    echo '<span class="fa fa-star '.$checked.'" style="margin-right: 8px"></span>';
                                }
                            ?>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$furnitureProduct3->id}}">
                                        {{-- <button type="submit">Buy Now</button> --}}
                                    </form>
                                    <button type="button" class="open-enquery-modal" product_id="{{$furnitureProduct3->id}}" category_slug="{{$furnitureProduct3->subCategory->category->slug}}" enquiry_type="furniture">Enquire Now</button>
                                </li>
                              <li><a href="{{route('products.product-detail',[$furnitureProduct3->category->slug,$furnitureProduct3->subcategory->slug,$furnitureProduct3->slug])}}">Explore</a></li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--share">
                             <a class="share-this" data-toggle="collapse" href="#share-social-furniture-2" role="button" aria-expanded="false" aria-controls="share-social-furniture-2">
                               <i class="fa fa-share-alt" aria-hidden="true"></i> Share
                            </a>
                            <div class="collapse" id="share-social-furniture-2">
                              <div class="card card-body">
                                  <div id="FurnitureShare2"></div>
                              </div>
                            </div>
                         </div>
                     </div>
                     <div class="ecommerce-item--image">
                       <img src="{{ asset('storage/product/'.$furnitureProduct3->product_image_primary->image) }}" alt="{{ $furnitureProduct3->name }}" title="{{ $furnitureProduct3->name }}"/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                  <div class="category-block--wrap pink-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',[$furnitureProduct4->category->slug,$furnitureProduct4->subcategory->slug,$furnitureProduct4->slug]) }}">{{ $furnitureProduct4->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">({{ $furnitureProduct4->discount }}% Off)</li>
                              <li class="old-price">Rs. {{ round($furnitureProduct4->regular_price, 0) }}</li>
                              <li class="new-price">Rs. {{ round($furnitureProduct4->sale_price, 0) }}</li>
                           </ul>
                        </div>
                        <div style="direction:ltr;">
                            <?php
                                $stars = 0;
                                if ($furnitureProduct4->avgRating != null)
                                {
                                    $stars = $furnitureProduct4->avgRating->rating;
                                }
                                for ($i=1; $i <= 5 ; $i++) {
                                    if ($i<=$stars) $checked = "checked";
                                    else $checked = "";
                                    echo '<span class="fa fa-star '.$checked.'" style="margin-right: 8px"></span>';
                                }
                            ?>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$furnitureProduct4->id}}">
                                        {{-- <button type="submit">Buy Now</button> --}}
                                    </form>
                                    <button type="button" class="open-enquery-modal" product_id="{{$furnitureProduct4->id}}" category_slug="{{$furnitureProduct4->subCategory->category->slug}}" enquiry_type="furniture">Enquire Now</button>
                                </li>
                              <li><a href="{{route('products.product-detail',[$furnitureProduct4->category->slug,$furnitureProduct4->subcategory->slug,$furnitureProduct4->slug])}}">Explore</a></li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--share">
                             <a class="share-this" data-toggle="collapse" href="#share-social-furniture-3" role="button" aria-expanded="false" aria-controls="share-social-furniture-3">
                               <i class="fa fa-share-alt" aria-hidden="true"></i> Share
                            </a>
                            <div class="collapse" id="share-social-furniture-3">
                              <div class="card card-body">
                                  <div id="FurnitureShare3"></div>
                              </div>
                            </div>
                         </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$furnitureProduct4->product_image_primary->image) }}" alt="{{ $furnitureProduct4->name }}" title="{{ $furnitureProduct4->name }}"/>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </section>
    @endif

    @if ($consumablesProduct)
    <section class="highlighted-single--wrapper">
      <div class="container-fluid">
         <div class="single-excerpt--grid">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               <div class="title-ui--wrap">
                  <div class="title-text--middle">
                     <h2>Consumables</h2>
                  </div>
                  <div class="title-text--action">
                     <a href="{{route('products.list',['consumable',$consumablesProduct->subCategory->slug])}}">View All</a>
                  </div>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               <div class="highlighted-single--grids">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                     <div class="single-product--carousel">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                           <div id="big" class="owl-carousel owl-theme">
                             @foreach ($consumablesProduct->productImages as $item)
                              <div class="item">
                                  <img src="{{ asset('storage/product/'.$item->image) }}" alt="{{$consumablesProduct->name}}"/>
                              </div>
                              @endforeach
                           </div>
                           <div id="thumbs" class="thumb-carousel owl-carousel owl-theme">
                              @foreach ($consumablesProduct->productImages as $item)
                              <div class="item">
                                 <img src="{{ asset('storage/product/'.$item->image) }}" alt="{{$consumablesProduct->name}}"/>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                     <div class="single-product--properties">
                        <div class="ecommerce-item--details">
                           <div class="ecommerce-item--name">
                              <h3>
                                  <a href="{{ route('products.product-detail',[$consumablesProduct->category->slug,$consumablesProduct->subcategory->slug,$consumablesProduct->slug]) }}">
                                      {{ $consumablesProduct->name }} <span>- {{ $consumablesProduct->subCategory->name }}</span>
                                  </a>
                              </h3>
                           </div>
                           <div class="ecommerce-item--excerpt">
                               <?php echo $consumablesProduct->short_description; ?>
                           </div>
                           <div class="ecommerce-item--price">
                              <ul>
                                 <li class="new-price">Rs. {{ round($consumablesProduct->sale_price, 0) }}</li>
                                 <li class="old-price">Rs. {{ round($consumablesProduct->regular_price, 0) }}</li>
                                 <li class="discount">({{ $consumablesProduct->discount }}% Off)</li>
                              </ul>
                           </div>
                           <div style="direction:ltr;">
                                  <?php
                                      $stars = 0;
                                      if ($consumablesProduct->avgRating != null)
                                      {
                                          $stars = $consumablesProduct->avgRating->rating;
                                      }
                                      for ($i=1; $i <= 5 ; $i++) {
                                          if ($i<=$stars) $checked = "checked";
                                          else $checked = "";
                                          echo '<span class="fa fa-star '.$checked.'" style="margin-right: 8px"></span>';
                                      }
                                  ?>
                              </div>
                           <div class="ecommerce-item--buttons">
                              <ul>
                                  <li>
                                      <form action="{{ route('addTocart') }}" method="POST">
                                          @csrf
                                          <input type="hidden" name="product_id" value="{{$consumablesProduct->id}}">
                                          {{-- <button type="submit">Buy Now</button> --}}
                                      </form>
                                      <button type="button" class="open-enquery-modal" product_id="{{$consumablesProduct->id}}"  category_slug="{{$consumablesProduct->subCategory->category->slug}}" enquiry_type="consumable">Enquire Now</button>
                                  </li>
                                 <li><a href="{{route('products.product-detail',[$consumablesProduct->category->slug,$consumablesProduct->subcategory->slug,$consumablesProduct->slug])}}">Explore</a></li>
                              </ul>
                           </div>
                           <div class="ecommerce-item--share">
                               <a class="share-this" data-toggle="collapse" href="#share-social-consumable" role="button" aria-expanded="false" aria-controls="share-social-consumable">
                                 <i class="fa fa-share-alt" aria-hidden="true"></i> Share
                              </a>
                              <div class="collapse" id="share-social-consumable">
                                <div class="card card-body">
                                    <div id="ConsumablesShare"></div>
                                </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </section>
    @endif

    @if ($electricalsProduct1 && $electricalsProduct2 && $electricalsProduct3 && $electricalsProduct4)
    <section class="category-ui--two">
      <div class="container-fluid">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="title-ui--wrap">
               <!-- <div class="title-text--up">
                  <h4>Want to Shop?</h4>
               </div> -->
               <div class="title-text--middle">
                  <h2>Electricals</h2>
               </div>
               <div class="title-text--action">
                  <a href="{{route('products.list',['electrical',$electricalsProduct1->subCategory->slug])}}">View All</a>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div id="owl-category--two" class="category-blocks--ui owl-carousel">
               <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-8">
                  <div class="category-block--wrap peach-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',[$electricalsProduct1->category->slug,$electricalsProduct1->subcategory->slug,$electricalsProduct1->slug]) }}">{{ $electricalsProduct1->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">({{ $electricalsProduct1->discount }}% Off)</li>
                              <li class="old-price">Rs. {{ round($electricalsProduct1->regular_price, 0) }} </li>
                              <li class="new-price">Rs. {{ round($electricalsProduct1->sale_price, 0) }}</li>
                           </ul>
                        </div>
                        <div style="direction:ltr;">
                            <?php
                                $stars = 0;
                                if ($electricalsProduct1->avgRating != null)
                                {
                                    $stars = $electricalsProduct1->avgRating->rating;
                                }
                                for ($i=1; $i <= 5 ; $i++) {
                                    if ($i<=$stars) $checked = "checked";
                                    else $checked = "";
                                    echo '<span class="fa fa-star '.$checked.'" style="margin-right: 8px"></span>';
                                }
                            ?>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$electricalsProduct1->id}}">
                                        {{-- <button type="submit">Buy Now</button> --}}
                                    </form>
                                    <button type="button" class="open-enquery-modal" product_id="{{$electricalsProduct1->id}}" category_slug="{{$electricalsProduct1->subCategory->category->slug}}" enquiry_type="electrical">Enquire Now</button>
                                </li>
                              <li><a href="{{route('products.product-detail',[$electricalsProduct1->category->slug,$electricalsProduct1->subcategory->slug,$electricalsProduct1->slug])}}">Explore</a></li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--share">
                             <a class="share-this" data-toggle="collapse" href="#share-social-electrical-0" role="button" aria-expanded="false" aria-controls="share-social-electrical-0">
                               <i class="fa fa-share-alt" aria-hidden="true"></i> Share
                            </a>
                            <div class="collapse" id="share-social-electrical-0">
                              <div class="card card-body">
                                  <div id="ElectricalsShare0"></div>
                              </div>
                            </div>
                         </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$electricalsProduct1->product_image_primary->image) }}" alt="{{ $electricalsProduct1->name }}" title="{{ $electricalsProduct1->name }}"/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-4">
                  <div class="category-block--wrap green-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',[$electricalsProduct2->category->slug,$electricalsProduct2->subcategory->slug,$electricalsProduct2->slug]) }}">{{ $electricalsProduct2->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="new-price">Rs. {{ round($electricalsProduct2->sale_price, 0) }}</li>
                              <li class="old-price">Rs. {{ round($electricalsProduct2->regular_price, 0) }} </li>
                              <li class="discount">({{ $electricalsProduct2->discount }}% Off)</li>
                           </ul>
                        </div>
                        <div style="direction:ltr;">
                            <?php
                                $stars = 0;
                                if ($electricalsProduct2->avgRating != null)
                                {
                                    $stars = $electricalsProduct2->avgRating->rating;
                                }
                                for ($i=1; $i <= 5 ; $i++) {
                                    if ($i<=$stars) $checked = "checked";
                                    else $checked = "";
                                    echo '<span class="fa fa-star '.$checked.'" style="margin-right: 8px"></span>';
                                }
                            ?>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$electricalsProduct2->id}}">
                                        {{-- <button type="submit">Buy Now</button> --}}
                                    </form>
                                    <button type="button" class="open-enquery-modal" product_id="{{$electricalsProduct2->id}}" category_slug="{{$electricalsProduct2->subCategory->category->slug}}" enquiry_type="electrical">Enquire Now</button>
                                </li>
                              <li><a href="{{route('products.product-detail',[$electricalsProduct2->category->slug,$electricalsProduct2->subcategory->slug,$electricalsProduct2->slug])}}">Explore</a></li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--share">
                             <a class="share-this" data-toggle="collapse" href="#share-social-electrical-1" role="button" aria-expanded="false" aria-controls="share-social-electrical-1">
                               <i class="fa fa-share-alt" aria-hidden="true"></i> Share
                            </a>
                            <div class="collapse" id="share-social-electrical-1">
                              <div class="card card-body">
                                  <div id="ElectricalsShare1"></div>
                              </div>
                            </div>
                         </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$electricalsProduct2->product_image_primary->image) }}" alt="{{ $electricalsProduct2->name }}" title="{{ $electricalsProduct2->name }}"/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                  <div class="category-block--wrap pink-ui">
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$electricalsProduct3->product_image_primary->image) }}" alt="{{ $electricalsProduct3->name }}" title="{{ $electricalsProduct3->name }}"/>
                     </div>
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',[$electricalsProduct3->category->slug,$electricalsProduct3->subcategory->slug,$electricalsProduct3->slug]) }}">{{ $electricalsProduct3->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">({{ $electricalsProduct3->discount }}% Off)</li>
                              <li class="old-price">Rs. {{ round($electricalsProduct3->regular_price, 0) }}</li>
                              <li class="new-price">Rs. {{ round($electricalsProduct3->sale_price, 0) }}</li>
                           </ul>
                        </div>
                        <div style="direction:ltr;">
                            <?php
                                $stars = 0;
                                if ($electricalsProduct2->avgRating != null)
                                {
                                    $stars = $electricalsProduct2->avgRating->rating;
                                }
                                for ($i=1; $i <= 5 ; $i++) {
                                    if ($i<=$stars) $checked = "checked";
                                    else $checked = "";
                                    echo '<span class="fa fa-star '.$checked.'" style="margin-right: 8px"></span>';
                                }
                            ?>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$electricalsProduct3->id}}">
                                        {{-- <button type="submit">Buy Now</button> --}}
                                    </form>
                                    <button type="button" class="open-enquery-modal" product_id="{{$electricalsProduct3->id}}" category_slug="{{$electricalsProduct3->subCategory->category->slug}}" enquiry_type="electrical">Enquire Now</button>
                                </li>
                              <li><a href="{{route('products.product-detail',[$electricalsProduct3->category->slug,$electricalsProduct3->subcategory->slug,$electricalsProduct3->slug])}}">Explore</a></li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--share">
                             <a class="share-this" data-toggle="collapse" href="#share-social-electrical-2" role="button" aria-expanded="false" aria-controls="share-social-electrical-2">
                               <i class="fa fa-share-alt" aria-hidden="true"></i> Share
                            </a>
                            <div class="collapse" id="share-social-electrical-2">
                              <div class="card card-body">
                                  <div id="ElectricalsShare2"></div>
                              </div>
                            </div>
                         </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                  <div class="category-block--wrap blue-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',[$electricalsProduct4->category->slug,$electricalsProduct4->subcategory->slug,$electricalsProduct4->slug]) }}">{{ $electricalsProduct4->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="new-price">Rs. {{ round($electricalsProduct4->sale_price, 0) }}</li>
                              <li class="old-price">Rs. {{ round($electricalsProduct4->regular_price, 0) }}</li>
                              <li class="discount">({{ $electricalsProduct4->discount }}% Off)</li>
                           </ul>
                        </div>
                        <div style="direction:ltr;">
                            <?php
                                $stars = 0;
                                if ($electricalsProduct4->avgRating != null)
                                {
                                    $stars = $electricalsProduct4->avgRating->rating;
                                }
                                for ($i=1; $i <= 5 ; $i++) {
                                    if ($i<=$stars) $checked = "checked";
                                    else $checked = "";
                                    echo '<span class="fa fa-star '.$checked.'" style="margin-right: 8px"></span>';
                                }
                            ?>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$electricalsProduct4->id}}">
                                        {{-- <button type="submit">Buy Now</button> --}}
                                    </form>
                                    <button type="button" class="open-enquery-modal" product_id="{{$electricalsProduct4->id}}" category_slug="{{$electricalsProduct4->subCategory->category->slug}}" enquiry_type="electrical">Enquire Now</button>
                                </li>
                              <li><a href="{{route('products.product-detail',[$electricalsProduct4->category->slug,$electricalsProduct4->subcategory->slug,$electricalsProduct4->slug])}}">Explore</a></li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--share">
                             <a class="share-this" data-toggle="collapse" href="#share-social-electrical-3" role="button" aria-expanded="false" aria-controls="share-social-electrical-3">
                               <i class="fa fa-share-alt" aria-hidden="true"></i> Share
                            </a>
                            <div class="collapse" id="share-social-electrical-3">
                              <div class="card card-body">
                                  <div id="ElectricalsShare3"></div>
                              </div>
                            </div>
                         </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$electricalsProduct4->product_image_primary->image) }}" alt="{{ $electricalsProduct4->name }}" title="{{ $electricalsProduct4->name }}"/>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </section>
    @endif

    <section class="store-ui--wrapper">
      <div class="container-fluid">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="title-ui--wrap">
               <div class="title-text--middle">
                  <h2>View our store</h2>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="store-gallery--wrap">
               <div class="store-ui--column">
                  <div class="store-video--ui">
                     <img src="<?php echo url('/'); ?>/static/images/store-video.png" alt=""/>
                     <div class="video-icon">
                        <button type="button" class="btn" data-toggle="modal" data-target="#video-store">
                           <img src="<?php echo url('/'); ?>/static/images/video-icon.png" alt="Video Icon"/>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="store-ui--column">
                  <div class="store-gallery--ui">
                     <div class="gallery-image--one">
                        <img src="<?php echo url('/'); ?>/static/images/gallery-image-01.png" alt=""/>
                        <div class="gallery-icon">
                           <button type="button" class="btn" data-toggle="modal" data-target="#gallery-one">
                              <img src="<?php echo url('/'); ?>/static/images/gallery-icon.png" alt="Video Icon"/>
                           </button>
                        </div>
                     </div>
                     <div class="gallery-image--two">
                        <img src="<?php echo url('/'); ?>/static/images/gallery-image-02.png" alt=""/>
                        <div class="gallery-icon">
                           <button type="button" class="btn" data-toggle="modal" data-target="#gallery-two">
                              <img src="<?php echo url('/'); ?>/static/images/gallery-icon.png" alt="Video Icon"/>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Modal for Loading Iframe -->
         <div class="modal fade" id="video-store" tabindex="-1" role="dialog" aria-labelledby="video-storeLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
                  <iframe width="100%" src="https://www.youtube.com/embed/0ZiplfiwCQo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
             </div>
           </div>
         </div>

         <!-- Modal for Gallery One -->
         <div class="modal fade" id="gallery-one" tabindex="-1" role="dialog" aria-labelledby="video-storeLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
                  <div class="card-columns">
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x600" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x400" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x900" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x700" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x500" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x700" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x500" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x1000" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x400" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x600" alt="Card image top">
                     </div>
                 </div>
               </div>
             </div>
           </div>
         </div>

         <!-- Modal for Gallery Two -->
         <div class="modal fade" id="gallery-two" tabindex="-1" role="dialog" aria-labelledby="video-storeLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
                  <div class="card-columns">
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x600" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x400" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x900" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x700" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x500" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x700" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x500" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x1000" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x400" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x600" alt="Card image top">
                     </div>
                 </div>
               </div>
             </div>
           </div>
         </div>

         <!-- Modal for Gallery Three -->
         <div class="modal fade" id="gallery-three" tabindex="-1" role="dialog" aria-labelledby="video-storeLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
                  <div class="card-columns">
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x600" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x400" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x900" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x700" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x500" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x700" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x500" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x1000" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x400" alt="Card image top">
                     </div>
                     <div class="card">
                         <img class="card-img-top" src="https://source.unsplash.com/random/800x600" alt="Card image top">
                     </div>
                 </div>
               </div>
             </div>
           </div>
         </div>

      </div>
    </section>

    <section class="verticals-ui--wrapper mobile-specific">
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
               <div class="verticals-ui--column">
                  <div class="verticals-details--wrap">
                        <a class="verticals-brand--wrap heighlight-box" data-toggle="modal" data-target="#xpress-modal">
                           <img src="<?php echo url('/'); ?>/static/images/vaibhav-xpress-logo.png" alt=""/>
                        </a>
                        <a class="verticals-brand--wrap" data-toggle="modal" data-target="#care-modal">
                           <img src="<?php echo url('/'); ?>/static/images/vaibhav-care-logo.png" alt=""/>
                        </a>
                        <a class="verticals-brand--wrap" data-toggle="modal" data-target="#plus-modal">
                           <img src="<?php echo url('/'); ?>/static/images/vaibhav-plus-logo.png" alt=""/>
                        </a>
                        <a class="verticals-brand--wrap" data-toggle="modal" data-target="#academy-modal">
                           <img src="<?php echo url('/'); ?>/static/images/vaibhav-academy-logo.png" alt=""/>
                        </a>
                  </div>
               </div>
            </div>
            <!-- Open Xpress -->
            <div class="modal fade" id="xpress-modal" tabindex="-1" role="dialog" aria-labelledby="xpress-modallabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="verticals-single--details">
                        <div class="verticals-single--logo">
                           <img src="<?php echo url('/'); ?>/static/images/vaibhav-xpress-logo.png" alt=""/>
                           <p>Home Delivery Platform</p>
                        </div>
                        <div class="verticals-single--features">
                           <ul>
                              <li>Aliquet enim tortor at auctor urna nunc id cursus metus aliquam.</li>
                              <li>Massa vitae tortor condimentum lacinia quis vel eros donec ac odio.</li>
                              <li>Arcu non sodales neque sodales ut etiam sit amet nisl purus.</li>
                           </ul>
                           <a href="{{ route('enquiry.xpress') }}" target="_blank">Visit Now</a>
                        </div>
                     </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Open Care -->
            <div class="modal fade" id="care-modal" tabindex="-1" role="dialog" aria-labelledby="care-modallabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <div class="verticals-single--details">
                        <div class="verticals-single--logo">
                           <img src="<?php echo url('/'); ?>/static/images/vaibhav-care-logo.png" alt=""/>
                           <p>Repairs & Restoration Services</p>
                        </div>
                        <div class="verticals-single--features">
                           <ul>
                              <li>Aliquet enim tortor at auctor urna nunc id cursus metus aliquam.</li>
                              <li>Massa vitae tortor condimentum lacinia quis vel eros donec ac odio.</li>
                              <li>Arcu non sodales neque sodales ut etiam sit amet nisl purus.</li>
                           </ul>
                           <a href="{{ route('enquiry.care') }}" target="_blank">Visit Now</a>
                        </div>
                     </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Open Plus -->
            <div class="modal fade" id="plus-modal" tabindex="-1" role="dialog" aria-labelledby="plus-modallabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <div class="verticals-single--details">
                        <div class="verticals-single--logo">
                           <img src="<?php echo url('/'); ?>/static/images/vaibhav-plus-logo.png" alt=""/>
                           <p>B2B Destribution Platform</p>
                        </div>
                        <div class="verticals-single--features">
                           <ul>
                              <li>Aliquet enim tortor at auctor urna nunc id cursus metus aliquam.</li>
                              <li>Massa vitae tortor condimentum lacinia quis vel eros donec ac odio.</li>
                              <li>Arcu non sodales neque sodales ut etiam sit amet nisl purus.</li>
                           </ul>
                           <a href="{{ route('enquiry.care') }}" target="_blank">Visit Now</a>
                        </div>
                     </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Open Academy -->
            <div class="modal fade" id="academy-modal" tabindex="-1" role="dialog" aria-labelledby="academy-modallabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <div class="verticals-single--details">
                        <div class="verticals-single--logo">
                           <img src="<?php echo url('/'); ?>/static/images/vaibhav-academy-logo.png" alt=""/>
                           <p>For Professional Skill Training</p>
                        </div>
                        <div class="verticals-single--features">
                           <ul>
                              <li>Aliquet enim tortor at auctor urna nunc id cursus metus aliquam.</li>
                              <li>Massa vitae tortor condimentum lacinia quis vel eros donec ac odio.</li>
                              <li>Arcu non sodales neque sodales ut etiam sit amet nisl purus.</li>
                           </ul>
                           <a href="{{ route('event.academy') }}" target="_blank">Visit Now</a>
                        </div>
                     </div>
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
               <div class="verticals-ui--column">
                  <div class="verticals-details--wrap nav nav-tabs nav-fill" id="nav-tab">
                        <a class="verticals-brand--wrap nav-link active" id="nav-xpress-tab" data-toggle="tab" href="#nav-xpress" role="tab" aria-controls="nav-xpress" aria-selected="true">
                           <img src="<?php echo url('/'); ?>/static/images/vaibhav-xpress-logo.png" alt=""/>
                        </a>
                        <a class="verticals-brand--wrap nav-link heighlight-box" id="nav-care-tab" data-toggle="tab" href="#nav-care" role="tab" aria-controls="nav-care" aria-selected="false">
                           <img src="<?php echo url('/'); ?>/static/images/vaibhav-care-logo.png" alt=""/>
                        </a>
                        <a class="verticals-brand--wrap nav-link" id="nav-plus-tab" data-toggle="tab" href="#nav-plus" role="tab" aria-controls="nav-plus" aria-selected="false">
                           <img src="<?php echo url('/'); ?>/static/images/vaibhav-plus-logo.png" alt=""/>
                        </a>
                        <a class="verticals-brand--wrap nav-link" id="nav-academy-tab" data-toggle="tab" href="#nav-academy" role="tab" aria-controls="nav-academy" aria-selected="false">
                           <img src="<?php echo url('/'); ?>/static/images/vaibhav-academy-logo.png" alt=""/>
                        </a>
                  </div>
               </div>
               <div class="verticals-ui--column">
                  <div class="verticals-single--wrap tab-content" id="nav-tabContent">
                     <!-- One -->
                     <div class="tab-pane fade show active" id="nav-xpress" role="tabpanel" aria-labelledby="nav-xpress-tab">
                        <div class="verticals-single--details">
                           <div class="verticals-single--logo">
                              <img src="<?php echo url('/'); ?>/static/images/vaibhav-xpress-logo.png" alt=""/>
                              <p>Home Delivery Platform</p>
                           </div>
                           <div class="verticals-single--features">
                              <ul>
                                 <li>Aliquet enim tortor at auctor urna nunc id cursus metus aliquam.</li>
                                 <li>Massa vitae tortor condimentum lacinia quis vel eros donec ac odio.</li>
                                 <li>Arcu non sodales neque sodales ut etiam sit amet nisl purus.</li>
                              </ul>
                              <a href="{{ route('enquiry.xpress') }}" target="_blank">Visit Now</a>
                           </div>
                        </div>
                     </div>
                     <!-- Two -->
                     <div class="tab-pane fade" id="nav-care" role="tabpanel" aria-labelledby="nav-care-tab">
                        <div class="verticals-single--details">
                           <div class="verticals-single--logo">
                              <img src="<?php echo url('/'); ?>/static/images/vaibhav-care-logo.png" alt=""/>
                              <p>Repairs & Restoration Services</p>
                           </div>
                           <div class="verticals-single--features">
                              <ul>
                                 <li>Aliquet enim tortor at auctor urna nunc id cursus metus aliquam.</li>
                                 <li>Massa vitae tortor condimentum lacinia quis vel eros donec ac odio.</li>
                                 <li>Arcu non sodales neque sodales ut etiam sit amet nisl purus.</li>
                              </ul>
                              <a href="{{ route('enquiry.care') }}" target="_blank">Visit Now</a>
                           </div>
                        </div>
                     </div>
                     <!-- Three -->
                     <div class="tab-pane fade" id="nav-plus" role="tabpanel" aria-labelledby="nav-plus-tab">
                        <div class="verticals-single--details">
                           <div class="verticals-single--logo">
                              <img src="<?php echo url('/'); ?>/static/images/vaibhav-plus-logo.png" alt=""/>
                              <p>B2B Destribution Platform</p>
                           </div>
                           <div class="verticals-single--features">
                              <ul>
                                 <li>Aliquet enim tortor at auctor urna nunc id cursus metus aliquam.</li>
                                 <li>Massa vitae tortor condimentum lacinia quis vel eros donec ac odio.</li>
                                 <li>Arcu non sodales neque sodales ut etiam sit amet nisl purus.</li>
                              </ul>
                              <a href="{{ route('enquiry.plus') }}" target="_blank">Visit Now</a>
                           </div>
                        </div>
                     </div>
                     <!-- Four -->
                     <div class="tab-pane fade" id="nav-academy" role="tabpanel" aria-labelledby="nav-academy-tab">
                        <div class="verticals-single--details">
                           <div class="verticals-single--logo">
                              <img src="<?php echo url('/'); ?>/static/images/vaibhav-academy-logo.png" alt=""/>
                              <p>For Professional Skill Training</p>
                           </div>
                           <div class="verticals-single--features">
                              <ul>
                                 <li>Aliquet enim tortor at auctor urna nunc id cursus metus aliquam.</li>
                                 <li>Massa vitae tortor condimentum lacinia quis vel eros donec ac odio.</li>
                                 <li>Arcu non sodales neque sodales ut etiam sit amet nisl purus.</li>
                              </ul>
                              <a href="{{ route('event.academy') }}" target="_blank">Visit Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </section>

    @if($brands)
    <section class="thumbnails-ui--two">
      <div class="container-fluid">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="title-ui--wrap">
               <div class="title-text--middle">
                  <h2>Our Channel Partners</h2>
               </div>
               <div class="title-text--action">
               <a href="{{ route('brand.list')}}">View All</a>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="owl-carousel partner-slideshow owl-theme">
               <!-- Slide 01 -->
               @foreach ($brands as $brand)
                    <?php
                        $brnad_short_descriptions = preg_split('/\r\n|[\r\n]/', $brand->short_description);
                    ?>
                    <div class="item">
                        <div class="thumbnail-block--wrap">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                <div class="thumbnail-brand--ui">
                                <div class="thumbnail-brand--logo">
                                    <img class="owl-lazy" data-src="{{ asset('storage/brand/'.$brand->logo) }}" alt="{{ $brand->name }}" title="{{ $brand->name }}"/>
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 hide--this">
                                <div class="thumbnail-properties--ui">
                                <div class="thumbnail-properties--list">
                                    <?php echo $brand->short_description; ?>
                                    {{-- <ul>
                                        @foreach ($brnad_short_descriptions as $brnad_short_description)
                                        <li>{{ $brnad_short_description }}</li>
                                        @endforeach
                                    </ul> --}}
                                    <a href="{{route('brand.detail',$brand->name)}}" class="button">View Detail</a>
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 hide-thumbnail--this">
                                <div class="thumbnail-product--image">
                                    <img src="{{ asset('storage/brand/'.$brand->image) }}" alt="{{ $brand->name }}" title="{{ $brand->name }}"/>
                                </div>
                            </div>
                        </div>
                    </div>
               @endforeach
            </div>
         </div>
      </div>
    </section>
    @endif
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
                     <img src="<?php echo url('/'); ?>/static/images/facebook.jpg" alt=""/>
                  </div>
                  <div class="follow-image--block">
                     <img src="<?php echo url('/'); ?>/static/images/instagram.jpg" alt=""/>
                  </div>
                  <div class="follow-image--block">
                     <img src="<?php echo url('/'); ?>/static/images/pinterest.jpg" alt=""/>
                  </div>
                  <div class="follow-image--block">
                     <img src="<?php echo url('/'); ?>/static/images/youtube.jpg" alt=""/>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </section>

@endsection


@section ('footer-script')
    <script src="<?php echo url('/'); ?>/share/jssocials.js"></script>
    <script>
        @if ($consumablesProduct)
            $("#ConsumablesShare").jsSocials({
                url: "<?php echo url('/'); ?>/<?php echo $consumablesProduct->category->slug.'/'.$consumablesProduct->subCategory->slug.'/'.$consumablesProduct->slug; ?>",
                text: "<?php echo $consumablesProduct->name; ?>",
                showLabel: false,
                showCount: "inside",
                shares: ["email", "twitter", "facebook", "whatsapp"]
            });
        @endif
        @if ($furnitureProduct1 && $furnitureProduct2 && $furnitureProduct3 && $furnitureProduct4)
            $("#FurnitureShare0").jsSocials({
                url: "<?php echo url('/'); ?>/<?php echo $furnitureProduct1->category->slug.'/'.$furnitureProduct1->subCategory->slug.'/'.$furnitureProduct1->slug; ?>",
                text: "<?php echo $furnitureProduct1->name; ?>",
                showLabel: false,
                showCount: "inside",
                shares: ["email", "twitter", "facebook", "whatsapp"]
            });

            $("#FurnitureShare1").jsSocials({
                url: "<?php echo url('/'); ?>/<?php echo $furnitureProduct2->category->slug.'/'.$furnitureProduct2->subCategory->slug.'/'.$furnitureProduct2->slug; ?>",
                text: "<?php echo $furnitureProduct2->name; ?>",
                showLabel: false,
                showCount: "inside",
                shares: ["email", "twitter", "facebook", "whatsapp"]
            });

            $("#FurnitureShare2").jsSocials({
                url: "<?php echo url('/'); ?>/<?php echo $furnitureProduct3->category->slug.'/'.$furnitureProduct3->subCategory->slug.'/'.$furnitureProduct3->slug; ?>",
                text: "<?php echo $furnitureProduct3->name; ?>",
                showLabel: false,
                showCount: "inside",
                shares: ["email", "twitter", "facebook", "whatsapp"]
            });

            $("#FurnitureShare3").jsSocials({
                url: "<?php echo url('/'); ?>/<?php echo $furnitureProduct4->category->slug.'/'.$furnitureProduct4->subCategory->slug.'/'.$furnitureProduct4->slug; ?>",
                text: "<?php echo $furnitureProduct4->name; ?>",
                showLabel: false,
                showCount: "inside",
                shares: ["email", "twitter", "facebook", "whatsapp"]
            });
            @endif
            @if ($electricalsProduct1 && $electricalsProduct2 && $electricalsProduct3 && $electricalsProduct4)
            $("#ElectricalsShare0").jsSocials({
                url: "<?php echo url('/'); ?>/<?php echo $electricalsProduct1->category->slug.'/'.$electricalsProduct1->subCategory->slug.'/'.$electricalsProduct1->slug; ?>",
                text: "<?php echo $electricalsProduct1->name; ?>",
                showLabel: false,
                showCount: "inside",
                shares: ["email", "twitter", "facebook", "whatsapp"]
            });

            $("#ElectricalsShare1").jsSocials({
                url: "<?php echo url('/'); ?>/<?php echo $electricalsProduct2->category->slug.'/'.$electricalsProduct2->subCategory->slug.'/'.$electricalsProduct2->slug; ?>",
                text: "<?php echo $electricalsProduct2->name; ?>",
                showLabel: false,
                showCount: "inside",
                shares: ["email", "twitter", "facebook", "whatsapp"]
            });

            $("#ElectricalsShare2").jsSocials({
                url: "<?php echo url('/'); ?>/<?php echo $electricalsProduct3->category->slug.'/'.$electricalsProduct3->subCategory->slug.'/'.$electricalsProduct3->slug; ?>",
                text: "<?php echo $electricalsProduct3->name; ?>",
                showLabel: false,
                showCount: "inside",
                shares: ["email", "twitter", "facebook", "whatsapp"]
            });

            $("#ElectricalsShare3").jsSocials({
                url: "<?php echo url('/'); ?>/<?php echo $electricalsProduct4->category->slug.'/'.$electricalsProduct4->subCategory->slug.'/'.$electricalsProduct4->slug; ?>",
                text: "<?php echo $electricalsProduct4->name; ?>",
                showLabel: false,
                showCount: "inside",
                shares: ["email", "twitter", "facebook", "whatsapp"]
            });
            @endif
    </script>
@endsection
