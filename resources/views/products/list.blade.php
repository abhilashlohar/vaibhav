@extends ('layouts.front')

@section ('content')

   <section class="category-banner--wrapper assign-text--left">
      <div class="container-fluid">
         <div class="row">
            <div class="owl-carousel category-slideshow owl-theme">
               <div class="item">
                  <div class="slideshow-details--wrap">
                     <div class="message-rounded--wrap">
                        <h1>Top International Brands</span><br/> <span class="uppercase-span">UPTO</span> <br/><span class="percentage-span">20%</span> <span class="offer-span">OFF</span><br/> <span class="categories-span">Skin Ceuticals | Glossier | Drunk Elephan & more...</span></h1>
                        <div class="slideshow-details--action">
                           <a href="#">Shop Now</a>
                        </div>
                     </div>
                     <div class="slideshow-image--wrap">
                        <img class="slide-on--desktop" src="<?php echo url('/'); ?>/static/images/consumables-banner-01.png" alt="" title="">
                        <img class="slide-on--mobile" src="<?php echo url('/'); ?>/static/images/consumables-banner-01-mobile.png" alt="" title="">
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="slideshow-details--wrap">
                     <div class="message-rounded--wrap">
                        <h1>Top International Brands</span><br/> <span class="uppercase-span">UPTO</span> <br/><span class="percentage-span">20%</span> <span class="offer-span">OFF</span><br/> <span class="categories-span">Skin Ceuticals | Glossier | Drunk Elephan & more...</span></h1>
                        <div class="slideshow-details--action">
                           <a href="#">Shop Now</a>
                        </div>
                     </div>
                     <div class="slideshow-image--wrap">
                        <img class="slide-on--desktop" src="<?php echo url('/'); ?>/static/images/consumables-banner-01.png" alt="" title="">
                        <img class="slide-on--mobile" src="<?php echo url('/'); ?>/static/images/consumables-banner-01-mobile.png" alt="" title="">
                     </div>
                  </div>
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
                     @foreach ($category->subcategory_available_orderBy as $subcategory)
                     <a href="{{route('products.list', [$category->slug,$subcategory->slug])}}" style="text-decoration:none;">
                        <div class="item">
                           <div class="slideshow-details--wrap">
                              <div class="slideshow-details--image">
                                 <img src="{{ asset('storage/subcategory/'.$subcategory->image) }}" alt="{{$subcategory->name}}"/>
                              </div>
                              <div class="slideshow-details--title">
                                 <h4 class="{{($subcategory->slug == $subCategoryData->slug) ? 'active' : ''}}">{{$subcategory->name}} -<span>{{$subcategory->short_description}}</span></h4>
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
   <?php $index = 1; ?>
   <section class="single-excerpt--wrapper">
    <div class="container-fluid">
        @foreach($products as $product)
       <div class="single-excerpt--grid">
          <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
             <div class="single-product--carousel">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div id="thumbs-{{$index}}" class="thumb-carousel owl-carousel owl-theme">
                        @foreach ($product->productImages as $item)
                        <div class="item">
                            <img src="{{ asset('storage/product/'.$item->image) }}" alt="{{$product->name}}"/>
                        </div>
                        @endforeach
                   </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div id="big-{{$index++}}" class="owl-carousel owl-theme">
                        @foreach ($product->productImages as $item)
                        <div class="item zoom zoomin">
                            <img src="{{ asset('storage/product/'.$item->image) }}" alt="{{$product->name}}"/>
                        </div>
                        @endforeach
                   </div>
                </div>
             </div>
          </div>
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
             <div class="single-product--properties">
                <div class="ecommerce-item--details">
                    <form action="{{ route('addTocart') }}" method="POST">
                        @csrf
                        <div class="ecommerce-item--name">
                            <h3>{{$product->name}} - {{$product->subCategory->name}}</h3>
                        </div>
                        <div class="ecommerce-item--excerpt">
                            <p>{{$product->short_description}}</p>
                        </div>
                        <div class="ecommerce-item--price">
                            <ul>
                                <?php
                                    $whole = floor($product->sale_price);
                                    $fraction = $product->sale_price - $whole;
                                ?>
                                <li class="new-price">Rs. {{ ($fraction > 0) ? $product->sale_price : $whole}}</li>
                                <?php
                                    $whole = floor($product->regular_price);
                                    $fraction = $product->regular_price - $whole;
                                ?>
                                <li class="old-price">Rs. {{ ($fraction > 0) ? $product->regular_price : $whole}}</li>
                                <li class="discount">({{$product->discount}}% Off)</li>
                                </ul>
                        </div>
                        <div class="ecommerce-item--rating">
                            @if ($product->avgRating != null)
                                <div class="rate" data-rate-value={{$product->avgRating->rating}}></div>
                             @else
                                <div class="rate" data-rate-value=0></div>
                             @endif
                        </div>
                        <div class="ecommerce-item--buttons">
                            <ul>
                                <li>
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <button type="submit">Add To Cart</button>
                                </li>
                                {{-- <li><a href="#" target="_blank">Explore</a></li> --}}
                            </ul>
                        </div>
                        <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</div>
                    </form>
                </div>
             </div>
          </div>
       </div>
       @endforeach
    </div>
</section>

@endsection



