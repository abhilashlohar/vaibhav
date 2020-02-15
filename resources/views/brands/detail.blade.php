@extends ('layouts.front')

@section ('content')

   <section class="single-excerpt--wrapper">
    <div class="container-fluid">
       <div class="single-excerpt--grid">
          <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
             <div class="single-product--carousel">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ordering-thumbs">
                  <div id="thumbs-1" class="thumb-carousel owl-carousel owl-theme">

                        <div class="item">
                            <img src="{{ asset('storage/brand/'.$brand->logo) }}" alt="{{$brand->name}}"/>
                        </div>
                   </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div id="big-1" class="owl-carousel owl-theme">
                        <div class="item zoom zoomin">
                            <img src="{{ asset('storage/brand/'.$brand->image) }}" alt="{{$brand->name}}"/>
                        </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ordering-thumbs">
             <div class="single-product--properties">
                <div class="ecommerce-item--details">
                        <div class="ecommerce-item--name">
                            <h3>{{$brand->name}}</h3>
                        </div>
                        <div class="ecommerce-item--excerpt">
                            <?php echo $brand->description; ?>
                        </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</section>
@endsection
