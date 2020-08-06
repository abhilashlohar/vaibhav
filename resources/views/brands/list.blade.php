@extends ('layouts.front')

@section ('content')

<?php $index = 1; ?>
   <section class="brand-listing--wrapper">
       <div class="container-fluid">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
             <div class="title-ui--wrap">
                <div class="title-text--middle">
                   <h2>Our Trusted Brands</h2>
                </div>
                <div class="title-text--description">
                   <p>Learn about consumer issues, file a complaint or check your complaint status.</p>
                </div>
             </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
             <div class="brand-listing--grid">
               @foreach($brands as $brand)
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                  <div class="brand-thumbnail--wrap">
                     <div class="brand-listing--image">
                        <img src="{{ asset('storage/brand/'.$brand->logo) }}" alt="{{$brand->name}}"/>
                     </div>
                     <div class="brand-thumbnail--action">
                        <a href="{{route('brand.detail',$brand->name)}}"> View</a>
                     </div>
                  </div>
                </div>
                @endforeach
             </div>
         </div>
       </div>
   </section>
@endsection
