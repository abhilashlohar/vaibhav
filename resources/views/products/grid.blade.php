@extends ('layouts.front')

@section ('header-style')
<style>
    body.product-list{
        position: relative;
    }
</style>
<!-- Need to move into css file -->
    <style>
    span.checked {
      color: #F9B536;
    }
    </style>
    <!-- Need to move into css file -->
@endsection

@section ('content')

   <section class="category-banner--wrapper">
      <div class="container-fluid">
         <div class="row">
            <div class="owl-carousel category-slideshow owl-theme">
               <div class="item">
                  <div class="slideshow-details--wrap">
                     <div class="slideshow-image--wrap">
                        <img class="slide-on--desktop owl-lazy" data-src="{{ asset('storage/category/'.$category->banner_image_desktop) }}" alt="{{$category->name}}" title="{{$category->name}}">
                        <img class="slide-on--mobile owl-lazy" data-src="{{ asset('storage/category/'.$category->banner_image_mobile) }}" alt="{{$category->name}}" title="{{$category->name}}">
                     </div>
                     <div class="message-rounded--wrap">
                        <h1>The <span>style statement</span> of<br/> your home</h1>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="slideshow-details--wrap">
                     <div class="slideshow-image--wrap">
                        <img class="slide-on--desktop owl-lazy" data-src="{{ asset('storage/category/'.$category->banner_image_desktop) }}" alt="{{$category->name}}" title="{{$category->name}}">
                        <img class="slide-on--mobile owl-lazy" data-src="{{ asset('storage/category/'.$category->banner_image_mobile) }}" alt="{{$category->name}}" title="{{$category->name}}">
                     </div>
                     <div class="message-rounded--wrap">
                        <h1>The <span>style statement</span> of<br/> your home</h1>
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
                     @foreach ($category->subcategory_available_orderBy as $subcategory)
                     <a href="{{route('products.list', [$category->slug,$subcategory->slug])}}" style="text-decoration:none;">
                        <div class="item">
                           <div class="slideshow-details--wrap">
                              <div class="slideshow-details--image">
                                 <img class="owl-lazy" data-src="{{ asset('storage/subcategory/'.$subcategory->image) }}" alt="{{$subcategory->name}}"/>
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

   <section class="items-archive--wrapper">
      <div class="container-fluid">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="item-archive--title">
               <h3>{{$subCategoryData->name}} - <span>{{$subCategoryData->short_description}}</span></h3>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="item-archive--list">
                @foreach ($products as $product)
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="item-excerpt--wrap">
                        <div class="item-excerpt--image">
                            <img src="{{ asset('storage/product/'.$product->product_image_primary->image) }}" alt="{{$product->name}}"/>
                            <div class="item-excerpt--action">
                                <a href="{{route('products.product-detail',$product->slug)}}" class="addToCart">View Details</a>
                            </div>
                        </div>
                        <div class="item-excerpt--details">
                            <div class="item-excerpt--meta">
                                <div class="title"><h4><a href="#" target="_blank">{{$product->name}}</a></h4></div>
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
                            <div style="direction:ltr;">
                                <?php
                                    $stars = 0;
                                    if ($product->avgRating != null)
                                    {
                                        $stars = $product->avgRating->rating;
                                    }
                                    for ($i=1; $i <= 5 ; $i++) {
                                        if ($i<=$stars) $checked = "checked";
                                        else $checked = "";
                                        echo '<span class="fa fa-star '.$checked.'" style="margin-right: 8px;font-size: 14px;"></span>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
         </div>
      </div>
   </section>

@endsection
