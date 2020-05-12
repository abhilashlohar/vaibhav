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
@if ($template_type == 'grid')
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
                </div>
             </div>
             <div class="item">
                <div class="slideshow-details--wrap">
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
@elseif ($template_type == 'list')
    <section class="category-banner--wrapper assign-text--left">
        <div class="container-fluid">
        <div class="row">
            <div class="owl-carousel category-slideshow owl-theme">
                <div class="item">
                    <div class="slideshow-details--wrap">
                       <div class="slideshow-image--wrap">
                           <img class="slide-on--desktop owl-lazy" data-src="{{ asset('storage/category/'.$category->banner_image_desktop) }}" alt="{{$category->name}}" title="{{$category->name}}">
                           <img class="slide-on--mobile owl-lazy" data-src="{{ asset('storage/category/'.$category->banner_image_mobile) }}" alt="{{$category->name}}" title="{{$category->name}}">
                       </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slideshow-details--wrap">
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
@endif

   <section class="category-slideshow--wrapper">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               <div class="breadcrumb-wrap">
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
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
                    @foreach ($category->subcategory_available_orderBy as $subcategory)
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                            <a href="{{route('products.list', [$category->slug,$subcategory->slug])}}" style="text-decoration:none;">
                                <div class="item">
                                <div class="slideshow-details--wrap">
                                    <div class="slideshow-details--image">
                                        <img src="{{ asset('storage/subcategory/'.$subcategory->image) }}" alt="{{$subcategory->name}}"/>
                                    </div>
                                    <div class="slideshow-details--title">
                                        <h4>{{$subcategory->name}}</h4>
                                    </div>
                                </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
               </div>
            </div>
         </div>
      </div>
   </section>


@endsection
