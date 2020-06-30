@extends ('layouts.front')

@section ('content')

   <section class="brand-details--wrapper">
    <div class="container-fluid">
       <div class="brand-details--grid">
          <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
             <div class="brand-details--items">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                  <div class="brand-logo--wrap">
                     <img src="{{ asset('storage/brand/'.$brand->logo) }}" alt="{{$brand->name}}"/>
                   </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                     <div class="owl-carousel brand-single--slideshow owl-theme">
                        <div class="item">
                           <img src="{{ asset('storage/brand/'.$brand->image) }}" alt="{{$brand->name}}"/>
                        </div>
                        <div class="item">
                           <img src="{{ asset('storage/brand/'.$brand->image) }}" alt="{{$brand->name}}"/>
                        </div>
                      </div>
                  </div>
             </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
             <div class="brand-details--properties">
                <div class="ecommerce-item--details">
                     <div class="ecommerce-item--name">
                         <h3>{{$brand->name}}</h3>
                     </div>
                     <div class="ecommerce-item--excerpt">
                         <?php echo $brand->short_description; ?>
                     </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-12 col-sm-12 col-md-12">
        <div class="brand-details--properties">
           <div class="">
                <div class="ecommerce-item--excerpt">
                    <?php echo $brand->description; ?>
                </div>
           </div>
        </div>
     </div>
    </div>
</section>
@endsection
