@extends ('layouts.front')

@section ('content')

<!-- Need to move into css file -->
    <style>
    span.checked {
      color: #F9B536;
    }
    </style>
    <!-- Need to move into css file -->

  <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/share/jssocials.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/share/jssocials-theme-flat.css" />

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
                        <img class="slide-on--desktop owl-lazy" data-src="{{ asset('storage/category/'.$category->banner_image_desktop) }}" alt="{{$category->name}}" title="{{$category->name}}">
                        <img class="slide-on--mobile owl-lazy" data-src="{{ asset('storage/category/'.$category->banner_image_mobile) }}" alt="{{$category->name}}" title="{{$category->name}}">
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
                        <img class="slide-on--desktop owl-lazy" data-src="{{ asset('storage/category/'.$category->banner_image_desktop) }}" alt="{{$category->name}}" title="{{$category->name}}">
                        <img class="slide-on--mobile owl-lazy" data-src="{{ asset('storage/category/'.$category->banner_image_mobile) }}" alt="{{$category->name}}" title="{{$category->name}}">
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
   <?php $index = 1; ?>
   <section class="single-excerpt--wrapper">
    <div class="container-fluid">
        @foreach($products as $product)
       <div class="leaf-title--wrap">
          <a href="{{ route('products.product-detail',$product->slug) }}" data-tooltip="View Details">
               {{$product->name}} - <span>{{$product->subCategory->name}}</span>
           </a>
       </div>
       <div class="single-excerpt--grid">
          <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
             <div class="single-product--carousel">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ordering-thumbs">
                  <div id="thumbs-{{$index}}" class="thumb-carousel owl-carousel owl-theme">
                        @foreach ($product->productImages as $item)
                        <div class="item">
                            <img src="{{ asset('storage/product/'.$item->image) }}" alt="{{$product->name}}"/>
                        </div>
                        @endforeach
                   </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
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
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ordering-thumbs">
             <div class="single-product--properties">
                <div class="ecommerce-item--details">
                    <form action="{{ route('addTocart') }}" method="POST">
                        @csrf
                        <div class="ecommerce-item--name">
                            <h3>
                                <a href="{{ route('products.product-detail',$product->slug) }}">
                                    {{$product->name}} - <span>{{$product->subCategory->name}}</span>
                                </a>
                            </h3>
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
                        <div class="ecommerce-item--buttons">
                            <ul>
                                <li>
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <button type="submit">Add To Cart</button>
                                </li>
                                <li><button type="button" class="open-enquery-modal" product_id="{{$product->id}}">Enquire Now</button></li>
                            </ul>
                        </div>
                        <div class="ecommerce-item--share">
                             <a class="share-this" data-toggle="collapse" href="#share-social_{{$product->id}}" role="button" aria-expanded="false" aria-controls="share-social_{{$product->id}}">
                               <i class="fa fa-share-alt" aria-hidden="true"></i> Share
                            </a>
                            <div class="collapse" id="share-social_{{$product->id}}">
                              <div class="card card-body">
                                  <div id="share_{{$product->id}}"></div>
                              </div>
                            </div>
                         </div>
                    </form>
                </div>
             </div>
          </div>
       </div>
       @endforeach
    </div>
</section>

@endsection

@section ('footer-script')
<script src="<?php echo url('/'); ?>/share/jssocials.js"></script>
<script>
    @foreach($products as $product)
        $("#share_{{$product->id}}").jsSocials({
            url: "<?php echo url('/'); ?>/product/<?php echo $product->slug; ?>",
            text: "<?php echo $product->name; ?>",
            showLabel: false,
            showCount: "inside",
            shares: ["twitter", "facebook", "whatsapp"]
        });
    @endforeach
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endsection

