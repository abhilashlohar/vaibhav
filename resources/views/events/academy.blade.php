@extends ('layouts.front')

@section ('content')

<section class="category-banner--wrapper assign-right--transparent">
      <div class="container-fluid">
         <div class="row">
            <div class="owl-carousel category-slideshow owl-theme">
               <div class="item">
                    <div class="slideshow-details--wrap">
                       <div class="slideshow-image--wrap">
                          <img class="slide-on--desktop" src="<?php echo url('/'); ?>/static/images/vaibhav-academy-slideshow-01.jpg" alt="" title="">
                          <img class="slide-on--mobile" src="<?php echo url('/'); ?>/static/images/vaibhav-academy-slideshow-01.jpg" alt="" title="">
                       </div>
                    </div>
                 </div>
                 <div class="item">
                    <div class="slideshow-details--wrap">
                       <div class="slideshow-image--wrap">
                          <img class="slide-on--desktop" src="<?php echo url('/'); ?>/static/images/vaibhav-academy-slideshow-02.jpg" alt="" title="">
                          <img class="slide-on--mobile" src="<?php echo url('/'); ?>/static/images/vaibhav-academy-slideshow-02.jpg" alt="" title="">
                       </div>
                    </div>
                 </div>
                 <div class="item">
                    <div class="slideshow-details--wrap">
                       <div class="slideshow-image--wrap">
                          <img class="slide-on--desktop" src="<?php echo url('/'); ?>/static/images/vaibhav-academy-slideshow-03.jpg" alt="" title="">
                          <img class="slide-on--mobile" src="<?php echo url('/'); ?>/static/images/vaibhav-academy-slideshow-03.jpg" alt="" title="">
                       </div>
                    </div>
                 </div>
            </div>
         </div>
      </div>
</section>

 <section class="academy-information--wrapper">
    <div class="container-fluid">
       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="breadcrumb-wrap">
             <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Academy</li>
                </ol>
             </nav>
          </div>
       </div>
       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="title-ui--wrap">
             <div class="title-text--middle">
                <h2>Academy</h2>
             </div>
             @if(Session::has('success'))
                <div class="alert alert-success" role="alert" data-dismiss="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
          </div>
       </div>
       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="academy-information--grid">
             <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="academy-information--image">
                   <img src="<?php echo url('/'); ?>/img/academy-information-image-01.png" alt=""/>
                </div>
             </div>
             <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="academy-information--text">
                   <p>Vaibhav Stores is a skill development initiative by us to help beauty professionals hone their skills & stay up to date with latest developments of our industry. You can enrol for workshops, seminars & training sessions led by expert beauty professionals. Its also an effective platform to network with other beauty professionals & build contacts.</p>
                   <a href="#" class="btn btn-primary">Read More</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

@if (count($recentEvents) > 0)
<section class="academy-carousel--wrapper">
    <div class="container-fluid">
       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="title-ui--wrap">
             <div class="title-text--up">
                <h3>Recent Event</h3>
             </div>
          </div>
       </div>
       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="academy-carousel--wrap">
             <div class="owl-carousel category-inner owl-theme">
                 @foreach ($recentEvents as $recentEvent)
                    <a href="{{route('event.academyDetails',$recentEvent->id)}}" style="text-decoration:none;">
                        <div class="item">
                            <div class="slideshow-details--wrap">
                                <div class="slideshow-details--image">
                                    <img src="{{ asset('storage/event/'.$recentEvent->id.'/'.$recentEvent->image) }}" alt="{{$recentEvent->name}}"/>
                                </div>
                                <div class="slideshow-details--title">
                                    <h4>{{$recentEvent->name}} -<span>{{date('M Y',strtotime($recentEvent->event_date))}}</span></h4>
                                </div>
                            </div>
                        </div>
                    </a>
                 @endforeach
             </div>
          </div>
       </div>
    </div>
 </section>
@endif

@if (count($upcomingEvents) > 0)
 <section class="academy-item--wrapper">
    <div class="container-fluid">
       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="academy-archive--title">
             <h3>Events</h3>
          </div>
       </div>
       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="academy-archive--list">
            @foreach ($upcomingEvents as $upcomingEvent)
             <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="academy-excerpt--wrap">
                   <div class="academy-excerpt--image">
                      <img src="{{ asset('storage/event/'.$upcomingEvent->id.'/'.$upcomingEvent->image) }}" alt="{{$upcomingEvent->name}}"/>
                      <div class="academy-excerpt--action">
                      <a href="{{route('event.academyDetails',$upcomingEvent->id)}}">View</a>
                      </div>
                   </div>
                   <div class="academy-excerpt--details">
                      <div class="date"><span>{{date('jS',strtotime($upcomingEvent->event_date))}}</span> {{date('M',strtotime($upcomingEvent->event_date))}}</div>
                      <div class="meta">
                        <h3>{{$upcomingEvent->name}}</h3>
                        <?php
                            $whole = floor($upcomingEvent->price);
                            $fraction = $upcomingEvent->price - $whole;
                        ?>
                        <p>Price: Rs. {{ ($fraction > 0) ? $upcomingEvent->price : $whole}}</p>
                      </div>
                   </div>
                </div>
             </div>
             @endforeach
          </div>
       </div>
    </div>
 </section>
 @endif

 @endsection
