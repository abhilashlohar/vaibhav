@extends ('layouts.front')


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
                                <li><a href="#" type="button" data-toggle="modal" data-target="#add-query">Add To Query</a></li>
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

<!-- Modal for Add To Query -->
<div class="modal fade" id="add-query" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product To Your Query</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form>
            <div class="form-group">
               <label for="query-email">Email address</label>
               <input type="email" class="form-control" id="query-email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
               <label for="message-for-query">Message</label>
               <textarea class="form-control" id="message-for-query" rows="3"></textarea>
            </div>
            <div class="form-group">
               <input type="submit" class="btn btn-primary" value="Submit" />
            </div>
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

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
             <div class="collapse" id="more-description">
               <div class="card card-body">
                <?php echo $product->description; ?>
               </div>
             </div>
             <a class="btn btn-primary" data-toggle="collapse" href="#more-description" role="button" aria-expanded="false" aria-controls="more-description">
                Read More
             </a>
          </div>
       </div>
    </div>
 </section>

<section class="review-rating--wrapper">
   <div class="container-fluid">
      <div class="rating-numbers--wrap">
         <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
            <div class="rating-block">
               <div class="ecommerce-item--rating">
                  <div class="rate" data-rate-value=5></div>
               </div>
               <h2>4.3 <small>/ 5</small></h2>
               <p>Based on 658 Ratings</p>
            </div>
         </div>
         <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="rating-breakdown--wrap">
               <div class="pull-left">
                  <div class="pull-left" style="width:35px; line-height:1;">
                     <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
                  </div>
                  <div class="pull-left" style="width:180px;">
                     <div class="progress" style="height:9px; margin:8px 0;">
                       <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                        <span class="sr-only">80% Complete (danger)</span>
                       </div>
                     </div>
                  </div>
                  <div class="pull-right" style="margin-left:10px;">1</div>
               </div>
               <div class="pull-left">
                  <div class="pull-left" style="width:35px; line-height:1;">
                     <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
                  </div>
                  <div class="pull-left" style="width:180px;">
                     <div class="progress" style="height:9px; margin:8px 0;">
                       <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                        <span class="sr-only">80% Complete (danger)</span>
                       </div>
                     </div>
                  </div>
                  <div class="pull-right" style="margin-left:10px;">1</div>
               </div>
               <div class="pull-left">
                  <div class="pull-left" style="width:35px; line-height:1;">
                     <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
                  </div>
                  <div class="pull-left" style="width:180px;">
                     <div class="progress" style="height:9px; margin:8px 0;">
                       <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                        <span class="sr-only">80% Complete (danger)</span>
                       </div>
                     </div>
                  </div>
                  <div class="pull-right" style="margin-left:10px;">0</div>
               </div>
               <div class="pull-left">
                  <div class="pull-left" style="width:35px; line-height:1;">
                     <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
                  </div>
                  <div class="pull-left" style="width:180px;">
                     <div class="progress" style="height:9px; margin:8px 0;">
                       <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                        <span class="sr-only">80% Complete (danger)</span>
                       </div>
                     </div>
                  </div>
                  <div class="pull-right" style="margin-left:10px;">0</div>
               </div>
               <div class="pull-left">
                  <div class="pull-left" style="width:35px; line-height:1;">
                     <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
                  </div>
                  <div class="pull-left" style="width:180px;">
                     <div class="progress" style="height:9px; margin:8px 0;">
                       <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                        <span class="sr-only">80% Complete (danger)</span>
                       </div>
                     </div>
                  </div>
                  <div class="pull-right" style="margin-left:10px;">0</div>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
            <div class="rate-item--wrap">
               <div class="ecommerce-item--rating">
                  <div class="rate" data-rate-value=0></div>
               </div>
               <h3>Rate it</h3>
               <a href="#">Have you purchased this item?</a>
            </div>
         </div>
      </div>
      @if ($totalReviews > 0)
        <div class="review-details--wrap">
            <h3>Customer review <span>
                @if ($totalReviews > 5)
                    Showing 1 - 5 out of {{$totalReviews}}
                @endif
            </span></h3>
            <div class="review-single--wrap">
                <h4>{{$product->name}}</h4>
                @foreach ($productReviews as $review)
                    <div class="review-meta--wrap">
                        <div class="ecommerce-item--rating">
                            <div class="rate" data-rate-value="{{$review->rating}}"></div>
                        </div>
                        <div class="name">{{$review->user->name}}</div>
                        <div class="date">{{date('Y-m-d',strtotime($review->created_at))}}</div>
                    </div>
                    <div class="review-text--wrap">
                        <p>{{$review->review}}</p>
                    </div>
                @endforeach
            </div>
        </div>
      @endif

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
                            <a href="{{route('products.product-detail',$product->slug)}}" class="addToCart">View Details</a>
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
