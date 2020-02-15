@extends ('layouts.front')

@section ('content')

<?php $index = 1; ?>
   <section class="single-excerpt--wrapper">
    <div class="container-fluid">
        @foreach($brands as $brand)
       <div class="single-excerpt--grid">
          <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
             <div class="single-product--carousel">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ordering-thumbs">
                  <div id="thumbs-{{$index++}}" class="thumb-carousel owl-carousel owl-theme">

                        <div class="item">
                            <img src="{{ asset('storage/brand/'.$brand->logo) }}" alt="{{$brand->name}}"/>
                        </div>

                   </div>

                </div>
                <div class="">
                    <a href="{{route('brand.detail',$brand->id)}}"> View</a>
                    </div>
             </div>
          </div>
       </div>
       @endforeach
    </div>
</section>
@endsection
