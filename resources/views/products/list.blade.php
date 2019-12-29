@extends ('layouts.front')

@section ('content')

   <section class="category-banner--wrapper">
      <div class="container-fluid">
         <div class="row">
            <div class="owl-carousel category-slideshow owl-theme">
               <div class="item">
                  <div class="slideshow-details--wrap">
                     <div class="slideshow-image--wrap">
                        <img class="slide-on--desktop" src="<?php echo url('/'); ?>/static/images/furniture-banner-01.png" alt="" title="">
                        <img class="slide-on--mobile" src="<?php echo url('/'); ?>/static/images/furniture-banner-01-mobile.png" alt="" title="">
                     </div>
                     <div class="message-rounded--wrap">
                        <h1>The <span>style statement</span> of<br/> your home</h1>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="slideshow-details--wrap">
                     <div class="slideshow-image--wrap">
                        <img class="slide-on--desktop" src="<?php echo url('/'); ?>/static/images/furniture-banner-01.png" alt="" title="">
                        <img class="slide-on--mobile" src="<?php echo url('/'); ?>/static/images/furniture-banner-01-mobile.png" alt="" title="">
                     </div>
                     <div class="message-rounded--wrap">
                        <h1>The style statement of your home</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="quick-message--ui">
      <div class="container">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 padding-0">
               <div class="quick-message--wrap">
                  <p>- Prices are inclusive of all taxes -</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="category-slideshow--wrapper">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               <div class="breadcrumb-wrap">
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
                     </ol>
                  </nav>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               <div class="title-ui--wrap">
                  <div class="title-text--middle">
                     <h2>{{$category->name}}</h2>
                  </div>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               <div class="category-carousel--wrap">
                  <div class="owl-carousel category-inner owl-theme">
                     @foreach ($subCategories as $subcategory)
                     <a href="{{route('products.list', [$category->slug,$subcategory->slug])}}" style="text-decoration:none;">
                        <div class="item">
                           <div class="slideshow-details--wrap">
                              <div class="slideshow-details--image">
                                 <img src="{{ asset('storage/subcategory/'.$subcategory->image) }}" alt="{{$subcategory->name}}"/>
                              </div>
                              <div class="slideshow-details--title">
                                 <h4>{{$subcategory->name}} -<span>{{$subcategory->short_description}}</span></h4>
                              </div>
                           </div>
                        </div>
                     </a>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="items-archive--wrapper">
      <div class="container-fluid">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="item-archive--title">
               <h3>Beds - <span>Lorem Ipsum</span></h3>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="item-archive--list">
               <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                  <div class="item-excerpt--wrap bg-pattern">
                     <div class="item-excerpt--image">
                        <img src="<?php echo url('/'); ?>/static/images/product-thumbnail-01.png" alt=""/>
                        <div class="item-excerpt--action">
                           <a href="#">Add To Cart</a>
                           <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</div>
                        </div>
                     </div>
                     <div class="item-excerpt--details">
                        <div class="item-excerpt--meta">
                           <div class="title"><h4><a href="#" target="_blank">XYZ product by Abc</a></h4></div>
                           <div class="code">Code: ###</div>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="new-price">Rs. 2637</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="discount">(46% Off)</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                  <div class="item-excerpt--wrap">
                     <div class="item-excerpt--image">
                        <img src="<?php echo url('/'); ?>/static/images/product-thumbnail-01.png" alt=""/>
                        <div class="item-excerpt--action">
                           <a href="#">Add To Cart</a>
                           <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</div>
                        </div>
                     </div>
                     <div class="item-excerpt--details">
                        <div class="item-excerpt--meta">
                           <div class="title"><h4><a href="#" target="_blank">XYZ product by Abc</a></h4></div>
                           <div class="code">Code: ###</div>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="new-price">Rs. 2637</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="discount">(46% Off)</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                  <div class="item-excerpt--wrap">
                     <div class="item-excerpt--image">
                        <img src="<?php echo url('/'); ?>/static/images/product-thumbnail-01.png" alt=""/>
                        <div class="item-excerpt--action">
                           <a href="#">Add To Cart</a>
                           <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</div>
                        </div>
                     </div>
                     <div class="item-excerpt--details">
                        <div class="item-excerpt--meta">
                           <div class="title"><h4><a href="#" target="_blank">XYZ product by Abc</a></h4></div>
                           <div class="code">Code: ###</div>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="new-price">Rs. 2637</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="discount">(46% Off)</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                  <div class="item-excerpt--wrap">
                     <div class="item-excerpt--image">
                        <img src="<?php echo url('/'); ?>/static/images/product-thumbnail-01.png" alt=""/>
                        <div class="item-excerpt--action">
                           <a href="#">Add To Cart</a>
                           <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</div>
                        </div>
                     </div>
                     <div class="item-excerpt--details">
                        <div class="item-excerpt--meta">
                           <div class="title"><h4><a href="#" target="_blank">XYZ product by Abc</a></h4></div>
                           <div class="code">Code: ###</div>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="new-price">Rs. 2637</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="discount">(46% Off)</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                  <div class="item-excerpt--wrap">
                     <div class="item-excerpt--image">
                        <img src="<?php echo url('/'); ?>/static/images/product-thumbnail-01.png" alt=""/>
                        <div class="item-excerpt--action">
                           <a href="#">Add To Cart</a>
                           <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</div>
                        </div>
                     </div>
                     <div class="item-excerpt--details">
                        <div class="item-excerpt--meta">
                           <div class="title"><h4><a href="#" target="_blank">XYZ product by Abc</a></h4></div>
                           <div class="code">Code: ###</div>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="new-price">Rs. 2637</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="discount">(46% Off)</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                  <div class="item-excerpt--wrap">
                     <div class="item-excerpt--image">
                        <img src="<?php echo url('/'); ?>/static/images/product-thumbnail-01.png" alt=""/>
                        <div class="item-excerpt--action">
                           <a href="#">Add To Cart</a>
                           <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</div>
                        </div>
                     </div>
                     <div class="item-excerpt--details">
                        <div class="item-excerpt--meta">
                           <div class="title"><h4><a href="#" target="_blank">XYZ product by Abc</a></h4></div>
                           <div class="code">Code: ###</div>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="new-price">Rs. 2637</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="discount">(46% Off)</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                  <div class="item-excerpt--wrap">
                     <div class="item-excerpt--image">
                        <img src="<?php echo url('/'); ?>/static/images/product-thumbnail-01.png" alt=""/>
                        <div class="item-excerpt--action">
                           <a href="#">Add To Cart</a>
                           <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</div>
                        </div>
                     </div>
                     <div class="item-excerpt--details">
                        <div class="item-excerpt--meta">
                           <div class="title"><h4><a href="#" target="_blank">XYZ product by Abc</a></h4></div>
                           <div class="code">Code: ###</div>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="new-price">Rs. 2637</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="discount">(46% Off)</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                  <div class="item-excerpt--wrap">
                     <div class="item-excerpt--image">
                        <img src="<?php echo url('/'); ?>/static/images/product-thumbnail-01.png" alt=""/>
                        <div class="item-excerpt--action">
                           <a href="#">Add To Cart</a>
                           <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</div>
                        </div>
                     </div>
                     <div class="item-excerpt--details">
                        <div class="item-excerpt--meta">
                           <div class="title"><h4><a href="#" target="_blank">XYZ product by Abc</a></h4></div>
                           <div class="code">Code: ###</div>
                        </div>
                        <div class="ecommerce-item--price">
                           <ul>
                              <li class="new-price">Rs. 2637</li>
                              <li class="old-price">Rs. 4885</li>
                              <li class="discount">(46% Off)</li>
                           </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                           <div class="rate" data-rate-value=5></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

@endsection

   