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


    <h1>Social Icons</h1>
    <div id="share"></div>



    @if (isset($furnitureProducts) and count($furnitureProducts)>=4)
    <section class="category-ui--one">
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
                  <a href="{{route('products.list',['furniture',$furnitureProducts[0]->subCategory->slug])}}" target="_blank">View All</a>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div id="owl-category--one" class="category-blocks--ui owl-carousel">
               <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-4">
                  <div class="category-block--wrap green-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',$furnitureProducts[0]->slug) }}">{{ $furnitureProducts[0]->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount"> ({{ $furnitureProducts[0]->discount }}% Off)</li>
                              <li class="old-price"> Rs. {{ $furnitureProducts[0]->regular_price }}</li>
                              <li class="new-price"> Rs. {{ $furnitureProducts[0]->sale_price }}</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                          <div id="rater"></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$furnitureProducts[0]->id}}">
                                        <button type="submit">Buy Now</button>
                                    </form>
                                </li>
                              <li><a href="{{route('products.product-detail',$furnitureProducts[0]->slug)}}">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$furnitureProducts[0]->product_image_primary->image) }}" alt="{{ $furnitureProducts[0]->name }}" title="{{ $furnitureProducts[0]->name }}"/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-8">
                  <div class="category-block--wrap peach-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',$furnitureProducts[1]->slug) }}">{{ $furnitureProducts[1]->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">({{ $furnitureProducts[1]->discount }}% Off)</li>
                              <li class="old-price">Rs. {{ $furnitureProducts[1]->regular_price }}</li>
                              <li class="new-price">Rs. {{ $furnitureProducts[1]->sale_price }}</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$furnitureProducts[1]->id}}">
                                        <button type="submit">Buy Now</button>
                                    </form>
                                </li>
                              <li><a href="{{route('products.product-detail',$furnitureProducts[1]->slug)}}">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$furnitureProducts[1]->product_image_primary->image) }}" alt="{{ $furnitureProducts[1]->name }}" title="{{ $furnitureProducts[1]->name }}"/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                  <div class="category-block--wrap blue-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',$furnitureProducts[2]->slug) }}">{{ $furnitureProducts[2]->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">({{ $furnitureProducts[2]->discount }}% Off)</li>
                              <li class="old-price">Rs. {{ $furnitureProducts[2]->regular_price }}</li>
                              <li class="new-price">Rs. {{ $furnitureProducts[2]->sale_price }}</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$furnitureProducts[2]->id}}">
                                        <button type="submit">Buy Now</button>
                                    </form>
                                </li>
                              <li><a href="{{route('products.product-detail',$furnitureProducts[2]->slug)}}">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                       <img src="{{ asset('storage/product/'.$furnitureProducts[2]->product_image_primary->image) }}" alt="{{ $furnitureProducts[2]->name }}" title="{{ $furnitureProducts[2]->name }}"/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                  <div class="category-block--wrap pink-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',$furnitureProducts[3]->slug) }}">{{ $furnitureProducts[3]->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">({{ $furnitureProducts[3]->discount }}% Off)</li>
                              <li class="old-price">Rs. {{ $furnitureProducts[3]->regular_price }}</li>
                              <li class="new-price">Rs. {{ $furnitureProducts[3]->sale_price }}</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$furnitureProducts[3]->id}}">
                                        <button type="submit">Buy Now</button>
                                    </form>
                                </li>
                              <li><a href="{{route('products.product-detail',$furnitureProducts[3]->slug)}}">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$furnitureProducts[3]->product_image_primary->image) }}" alt="{{ $furnitureProducts[3]->name }}" title="{{ $furnitureProducts[3]->name }}"/>
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
               <div class="single-product--carousel">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ordering-thumbs">
                     <div id="thumbs" class="thumb-carousel owl-carousel owl-theme">
                        @foreach ($consumablesProduct->productImages as $item)
                        <div class="item">
                           <img src="{{ asset('storage/product/'.$item->image) }}" alt="{{$consumablesProduct->name}}"/>
                        </div>
                        @endforeach
                     </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ordering-thumbnail">
                     <div id="big" class="owl-carousel owl-theme">
                       @foreach ($consumablesProduct->productImages as $item)
                        <div class="item">
                            <img src="{{ asset('storage/product/'.$item->image) }}" alt="{{$consumablesProduct->name}}"/>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
               <div class="single-product--properties">
                  <div class="ecommerce-item--details">
                     <div class="ecommerce-item--name">
                        <h3><a href="{{ route('products.product-detail',$consumablesProduct->slug) }}">{{ $consumablesProduct->name }} <span>- {{ $consumablesProduct->subCategory->name }}</span></a></h3>
                     </div>
                     <div class="ecommerce-item--excerpt">
                        <p>{{ $consumablesProduct->short_description }}</p>
                     </div>
                     <div class="ecommerce-item--price">
                        <ul>
                           <li class="new-price">Rs. {{ $consumablesProduct->sale_price }}</li>
                           <li class="old-price">Rs. {{ $consumablesProduct->regular_price }}</li>
                           <li class="discount">({{ $consumablesProduct->discount }}% Off)</li>
                        </ul>
                     </div>
                     <div class="ecommerce-item--rating">
                        <div class="rate" data-rate-value=5></div>
                     </div>
                     <div class="ecommerce-item--buttons">
                        <ul>
                            <li>
                                <form action="{{ route('addTocart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$consumablesProduct->id}}">
                                    <button type="submit">Buy Now</button>
                                </form>
                            </li>
                           <li><a href="{{route('products.product-detail',$consumablesProduct->slug)}}">Explore</a></li>
                        </ul>
                     </div>
                     <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </section>
    @endif

    @if (isset($electricalsProducts) and count($electricalsProducts)>=4)
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
                  <a href="{{route('products.list',['electrical',$electricalsProducts[0]->subCategory->slug])}}">View All</a>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div id="owl-category--two" class="category-blocks--ui owl-carousel">
               <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-8">
                  <div class="category-block--wrap peach-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',$electricalsProducts[0]->slug) }}">{{ $electricalsProducts[0]->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">({{ $electricalsProducts[0]->discount }}% Off)</li>
                              <li class="old-price">Rs. {{ $electricalsProducts[0]->regular_price }} </li>
                              <li class="new-price">Rs. {{ $electricalsProducts[0]->sale_price }}</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$electricalsProducts[0]->id}}">
                                        <button type="submit">Buy Now</button>
                                    </form>
                                </li>
                              <li><a href="{{route('products.product-detail',$electricalsProducts[0]->slug)}}">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$electricalsProducts[0]->product_image_primary->image) }}" alt="{{ $electricalsProducts[0]->name }}" title="{{ $electricalsProducts[0]->name }}"/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-4">
                  <div class="category-block--wrap green-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',$electricalsProducts[1]->slug) }}">{{ $electricalsProducts[1]->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="new-price">Rs. {{ $electricalsProducts[1]->sale_price }}</li>
                              <li class="old-price">Rs. {{ $electricalsProducts[1]->regular_price }} </li>
                              <li class="discount">({{ $electricalsProducts[1]->discount }}% Off)</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$electricalsProducts[1]->id}}">
                                        <button type="submit">Buy Now</button>
                                    </form>
                                </li>
                              <li><a href="{{route('products.product-detail',$electricalsProducts[1]->slug)}}">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$electricalsProducts[1]->product_image_primary->image) }}" alt="{{ $electricalsProducts[1]->name }}" title="{{ $electricalsProducts[1]->name }}"/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                  <div class="category-block--wrap pink-ui">
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$electricalsProducts[2]->product_image_primary->image) }}" alt="{{ $electricalsProducts[2]->name }}" title="{{ $electricalsProducts[2]->name }}"/>
                     </div>
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',$electricalsProducts[2]->slug) }}">{{ $electricalsProducts[2]->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">({{ $electricalsProducts[2]->discount }}% Off)</li>
                              <li class="old-price">Rs. {{ $electricalsProducts[2]->regular_price }}</li>
                              <li class="new-price">Rs. {{ $electricalsProducts[2]->sale_price }}</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$electricalsProducts[2]->id}}">
                                        <button type="submit">Buy Now</button>
                                    </form>
                                </li>
                              <li><a href="{{route('products.product-detail',$electricalsProducts[2]->slug)}}">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                  <div class="category-block--wrap blue-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',$electricalsProducts[3]->slug) }}">{{ $electricalsProducts[3]->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="new-price">Rs. {{ $electricalsProducts[3]->sale_price }}</li>
                              <li class="old-price">Rs. {{ $electricalsProducts[3]->regular_price }}</li>
                              <li class="discount">({{ $electricalsProducts[3]->discount }}% Off)</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$electricalsProducts[3]->id}}">
                                        <button type="submit">Buy Now</button>
                                    </form>
                                </li>
                              <li><a href="{{route('products.product-detail',$electricalsProducts[3]->slug)}}">Explore</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$electricalsProducts[3]->product_image_primary->image) }}" alt="{{ $electricalsProducts[3]->name }}" title="{{ $electricalsProducts[3]->name }}"/>
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
                  <h2>Visit our store</h2>
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
                        <div class="store-action">
                           <a href="#" class="btn">Store Branding</a>
                        </div>
                     </div>
                     <div class="gallery-image--two">
                        <img src="<?php echo url('/'); ?>/static/images/gallery-image-02.png" alt=""/>
                        <div class="store-action">
                           <a href="#" class="btn">Store Opening</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="store-ui--column hide-this--desktop">
                  <div class="gallery-image--three">
                     <img src="<?php echo url('/'); ?>/static/images/gallery-image-03.png" alt=""/>
                     <div class="store-action">
                        <a href="#" class="btn">Store Opening</a>
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
                  <iframe width="90%" height="550" src="https://www.youtube.com/embed/0ZiplfiwCQo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                        <a class="verticals-brand--wrap" data-toggle="modal" data-target="#xpress-modal">
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
                           <img src="<?php echo url('/'); ?>/static/images/vaibhav-care-logo.png" alt=""/>
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
                        <a class="verticals-brand--wrap nav-link" id="nav-care-tab" data-toggle="tab" href="#nav-care" role="tab" aria-controls="nav-care" aria-selected="false">
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
                     <!-- Two -->
                     <div class="tab-pane fade" id="nav-care" role="tabpanel" aria-labelledby="nav-care-tab">
                        <div class="verticals-single--details">
                           <div class="verticals-single--logo">
                              <img src="<?php echo url('/'); ?>/static/images/vaibhav-care-logo.png" alt=""/>
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
                     <!-- Three -->
                     <div class="tab-pane fade" id="nav-plus" role="tabpanel" aria-labelledby="nav-plus-tab">
                        <div class="verticals-single--details">
                           <div class="verticals-single--logo">
                              <img src="<?php echo url('/'); ?>/static/images/vaibhav-plus-logo.png" alt=""/>
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
                     <!-- Four -->
                     <div class="tab-pane fade" id="nav-academy" role="tabpanel" aria-labelledby="nav-academy-tab">
                        <div class="verticals-single--details">
                           <div class="verticals-single--logo">
                              <img src="<?php echo url('/'); ?>/static/images/vaibhav-academy-logo.png" alt=""/>
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
            <div class="owl-carousel partner-slideshow owl-theme">
               <!-- Slide 01 -->
               <div class="item">
                  <div class="thumbnail-block--wrap">
                     <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="thumbnail-brand--ui">
                           <div class="thumbnail-brand--logo">
                              <img src="<?php echo url('/'); ?>/static/images/dm-skincare-logo.png" alt=""/>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 hide--this">
                        <div class="thumbnail-properties--ui">
                           <div class="thumbnail-properties--list">
                              <ul>
                                 <li>Exclusive South Indian Distributors</li>
                                 <li>Best Prices</li>
                                 <li>Complete Warranty</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 hide-thumbnail--this">
                        <div class="thumbnail-product--image">
                           <img src="<?php echo url('/'); ?>/static/images/product-image-01.png" alt=""/>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Slide 01 -->
               <div class="item">
                  <div class="thumbnail-block--wrap">
                     <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="thumbnail-brand--ui">
                           <div class="thumbnail-brand--logo">
                              <img src="<?php echo url('/'); ?>/static/images/dm-skincare-logo.png" alt=""/>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 hide--this">
                        <div class="thumbnail-properties--ui">
                           <div class="thumbnail-properties--list">
                              <ul>
                                 <li>Exclusive South Indian Distributors</li>
                                 <li>Best Prices</li>
                                 <li>Complete Warranty</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 hide-thumbnail--this">
                        <div class="thumbnail-product--image">
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 padding-0">
               <div class="follow-action--wrap">
                  <a href="{{ route('products.search','viewAll') }}" class="btn">View On Instagram</a>
               </div>
            </div>
         </div>
      </div>
    </section>

@endsection


@section ('footer-script')
    <script src="<?php echo url('/'); ?>/share/jssocials.js"></script>  
    <script>
        $("#share").jsSocials({
            url: "http://www.google.com",
            text: "Google Search Page",
            showLabel: false,
            showCount: "inside",
            shares: ["twitter", "facebook", "whatsapp"]
        });
    </script>
@endsection
