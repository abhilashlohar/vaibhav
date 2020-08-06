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
                         <h3>KEY PRODUCTS</h3>
                     </div>
                     <div class="ecommerce-item--excerpt">
                        <?php echo $brand->short_description; ?>
                        <button type="button" class="brand-enquiry open-enquery-modal" product_id="" category_slug="{{$brand->name}}" enquiry_type="brand">Book Demo</button>
                     </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-12 col-sm-12 col-md-12" style="padding: 30px 45px;">
            <div class="title-ui--wrap" style="justify-content: flex-start; align-items: flex-start;">
               <div class="title-text--middle">
                  <h2 style="text-align: left;">Brand Profile</h2>
               </div>
            </div>
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
