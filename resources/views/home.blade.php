@extends ('layouts.front')

@section ('content')

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
               <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-4">
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
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$furnitureProducts[0]->id}}">
                                        <button type="submit">Buy Now</button>
                                    </form>
                                </li>
                              {{-- <li><a href="#" target="_blank">Explore</a></li> --}}
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$furnitureProducts[0]->product_image_primary->image) }}" alt="{{ $furnitureProducts[0]->name }}" title="{{ $furnitureProducts[0]->name }}"/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
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
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$furnitureProducts[1]->id}}">
                                        <button type="submit">Buy Now</button>
                                    </form>
                                </li>
                              {{-- <li><a href="#" target="_blank">Explore</a></li> --}}
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$furnitureProducts[1]->product_image_primary->image) }}" alt="{{ $furnitureProducts[1]->name }}" title="{{ $furnitureProducts[1]->name }}"/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
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
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$furnitureProducts[2]->id}}">
                                        <button type="submit">Buy Now</button>
                                    </form>
                                </li>
                              {{-- <li><a href="#" target="_blank">Explore</a></li> --}}
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                       <img src="{{ asset('storage/product/'.$furnitureProducts[2]->product_image_primary->image) }}" alt="{{ $furnitureProducts[2]->name }}" title="{{ $furnitureProducts[2]->name }}"/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
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
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$furnitureProducts[3]->id}}">
                                        <button type="submit">Buy Now</button>
                                    </form>
                                </li>
                              {{-- <li><a href="#" target="_blank">Explore</a></li> --}}
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">
               <div class="single-product--carousel">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                     <div id="thumbs" class="owl-carousel owl-theme">
                        @foreach ($consumablesProduct->productImages as $item)
                        <div class="item">
                            <img src="{{ asset('storage/product/'.$item->image) }}" alt="{{$consumablesProduct->name}}"/>
                        </div>
                        @endforeach
                     </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
               <div class="single-product--properties">
                  <div class="ecommerce-item--details">
                     <div class="ecommerce-item--name">
                        <h3><a href="{{ route('products.product-detail',$consumablesProduct->slug) }}">{{ $consumablesProduct->name }}</a></h3>
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
                     <!-- <div class="ecommerce-item--rating">
                        <div class="rate" data-rate-value=5></div>
                     </div> -->
                     <div class="ecommerce-item--buttons">
                        <ul>
                            <li>
                                <form action="{{ route('addTocart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$consumablesProduct->id}}">
                                    <button type="submit">Buy Now</button>
                                </form>
                            </li>
                           {{-- <li><a href="#" target="_blank">Explore</a></li> --}}
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
               <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
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
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$electricalsProducts[0]->id}}">
                                        <button type="submit">Buy Now</button>
                                    </form>
                                </li>
                              {{-- <li><a href="#" target="_blank">Explore</a></li> --}}
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$electricalsProducts[0]->product_image_primary->image) }}" alt="{{ $electricalsProducts[0]->name }}" title="{{ $electricalsProducts[0]->name }}"/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <div class="category-block--wrap green-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',$electricalsProducts[1]->slug) }}">{{ $electricalsProducts[1]->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="discount">({{ $electricalsProducts[1]->discount }}% Off)</li>
                              <li class="old-price">Rs. {{ $electricalsProducts[1]->regular_price }} </li>
                              <li class="new-price">Rs. {{ $electricalsProducts[1]->sale_price }}</li>
                           </ul>
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
                              {{-- <li><a href="#" target="_blank">Explore</a></li> --}}
                           </ul>
                        </div>
                     </div>
                     <div class="ecommerce-item--image">
                        <img src="{{ asset('storage/product/'.$electricalsProducts[1]->product_image_primary->image) }}" alt="{{ $electricalsProducts[1]->name }}" title="{{ $electricalsProducts[1]->name }}"/>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
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
                        <div class="ecommerce-item--buttons">
                           <ul>
                                <li>
                                    <form action="{{ route('addTocart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$electricalsProducts[2]->id}}">
                                        <button type="submit">Buy Now</button>
                                    </form>
                                </li>
                              {{-- <li><a href="#" target="_blank">Explore</a></li> --}}
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                  <div class="category-block--wrap blue-ui">
                     <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                           <h3><a href="{{ route('products.product-detail',$electricalsProducts[3]->slug) }}">{{ $electricalsProducts[3]->name }}</a></h3>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                             <li class="discount">({{ $electricalsProducts[3]->discount }}% Off)</li>
                              <li class="old-price">Rs. {{ $electricalsProducts[3]->regular_price }}</li>
                              <li class="new-price">Rs. {{ $electricalsProducts[3]->sale_price }}</li>
                           </ul>
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
                              {{-- <li><a href="#" target="_blank">Explore</a></li> --}}
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
               <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                  <div class="store-video--ui">
                     <a href="#">
                        <img src="<?php echo url('/'); ?>/static/images/store-video.png" alt=""/>
                        <div class="video-icon"><img src="<?php echo url('/'); ?>/static/images/video-icon.png" alt="Video Icon"/></div>
                     </a>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
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
               <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
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
               <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                  <div class="verticals-single--wrap">
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 padding-0">
               <div class="follow-action--wrap">
                  <a href="{{ route('products.search','viewAll') }}" class="btn">View Products</a>
               </div>
            </div>
         </div>
      </div>
   </section>

@endsection
