@extends ('layouts.front')

@section ('header-style')
<style>
    body.product-list{
        position: relative;
    }
</style>
@endsection

@section ('content')




   <section class="items-archive--wrapper">
      <div class="container-fluid">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="item-archive--list">
                @foreach ($products as $product)
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
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
   </section>

@endsection

{{-- @section ('footer-script')
    <script type="text/javascript">
        jQuery(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click','.addToCart',function(e){
                e.preventDefault();
                var product_id = $(this).attr('href');
                $.ajax({
                type:'POST',
                url:"{{ route('addTocart') }}",
                data:{product_id:product_id},
                success:function(data){
                    console.log(data);
                },
                complete: function (data) {
                    $.ajax({
                        type:'get',
                        url:"{{ route('getCookie') }}",
                        success:function(data){
                            console.log(data);
                        }
                    });
                }
                });
            });
        });
    </script>
@endsection --}}

