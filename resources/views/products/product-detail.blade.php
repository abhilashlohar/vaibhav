@extends ('layouts.front')

@section ('header-style')
<style>
    body.product-detail{
        position: relative;
    }
</style>
@endsection

@section ('content')
<section class="single-excerpt--wrapper">
    <div class="container-fluid">
       <div class="single-excerpt--grid">
          <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
             <div class="single-product--carousel">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                   <div id="thumbs" class="owl-carousel owl-theme">
                        @foreach ($product->productImages as $item)
                        <div class="item">
                            <img src="{{ asset('storage/product/'.$item->image) }}" alt="{{$product->name}}"/>
                        </div>
                        @endforeach
                   </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                   <div id="big" class="owl-carousel owl-theme">
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
                            <h3>{{$product->name}}</h3>
                        </div>
                        <div class="ecommerce-item--excerpt">
                            <p>{{$product->short_description}}</p>
                        </div>
                        <div class="ecommerce-item--sku">
                            <p>Product Code: {{$product->product_code}}</p>
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
                            <div class="rate" data-rate-value=5></div>
                        </div>
                        <div class="ecommerce-item--buttons">
                            <ul>
                                <li>
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <button type="submit">Add To Cart</button>
                                </li>
                                <li><a href="#" target="_blank">Explore</a></li>
                            </ul>
                        </div>
                        <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</div>
                    </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

 <section class="single-description--wrapper">
    <div class="container-fluid">
       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="title-ui--wrap">
             <div class="title-text--middle">
                <h2>Product Description</h2>
             </div>
          </div>
       </div>
       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="single-description--text">
             <p><?php echo $product->short_description; ?></p>
             <div class="collapse" id="collapseExample">
               <div class="card card-body">
                <?php echo $product->description; ?>
               </div>
             </div>
             <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Read More
             </a>
          </div>
       </div>
    </div>
 </section>
@if (count($related_products)>0)
 <section class="recommended-product--wrapper">
    <div class="container-fluid">
       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="title-ui--wrap">
             <div class="title-text--middle">
                <h2>People Also Viewed</h2>
             </div>
          </div>
       </div>
       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="recommended-carousel--wrap">
             <div class="owl-carousel recommended-items owl-theme">
                @foreach ($related_products as $product)
                <div class="item">
                   <div class="item-excerpt--wrap">
                      <div class="item-excerpt--image">
                        <img src="{{ asset('storage/product/'.$product->product_image_primary->image) }}" alt="{{$product->name}}"/>
                        <div class="item-excerpt--action">
                            <a href="{{route('products.product-detail',$product->slug)}}" class="addToCart">Add To Cart</a>
                            <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</div>
                        </div>
                      </div>
                      <div class="item-excerpt--details">
                         <div class="item-excerpt--meta">
                            <div class="title"><h4><a href="#" target="_blank">{{$product->short_description}}</a></h4></div>
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
                            <div class="rate" data-rate-value=5></div>
                         </div>
                      </div>
                   </div>
                </div>
                @endforeach
             </div>
          </div>
       </div>
    </div>
</section>
@endif
@endsection



@section ('footer-script')
<script src="<?php echo url('/'); ?>/static/js/jquery.zoom.min.js"></script>
@endsection
