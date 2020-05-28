@extends ('layouts.front')

@section ('content')
<?php
    use \App\Http\Controllers\HomeController;
    $headerCategories = HomeController::headerCategories();
?>
<section class="category-banner--wrapper assign-left--transparent">
   <div class="container-fluid">
      <div class="row">
         <div class="owl-carousel category-slideshow owl-theme">
            <div class="item">
               <div class="slideshow-details--wrap">
                  <div class="message-rounded--wrap">
                     <h1>Bridging Your Customer <strong>Solutions</strong></h1>
                  </div>
                  <div class="slideshow-image--wrap">
                     <img class="slide-on--desktop owl-lazy" data-src="<?php echo url('/'); ?>/static/images/care-banner-01.png" alt="" title="">
                     <img class="slide-on--mobile owl-lazy" data-src="<?php echo url('/'); ?>/static/images/care-banner-01-mobile.png" alt="" title="">
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="slideshow-details--wrap">
                  <div class="message-rounded--wrap">
                     <h1>Bridging Your Customer <strong>Solutions</strong></h1>
                  </div>
                  <div class="slideshow-image--wrap">
                     <img class="slide-on--desktop owl-lazy" data-src="<?php echo url('/'); ?>/static/images/care-banner-01.png" alt="" title="">
                     <img class="slide-on--mobile owl-lazy" data-src="<?php echo url('/'); ?>/static/images/care-banner-01-mobile.png" alt="" title="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="support-search--wrapper">
    <div class="container-fluid">
       <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
             <div class="title-ui--wrap">
                <div class="title-text--middle">
                   <h2>Got a Complaint? Get Results</h2>
                </div>
                <div class="title-text--description">
                   <p>Learn about consumer issues, file a complaint or check your complaint status.</p>
                </div>
             </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <form>
                    <div class="support-search--form">
                        <div class="form-group col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                            <input type="text" class="form-control" id="ticket_no" placeholder="Search complaint number...">
                        </div>
                        <div class="form-group col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <button type="submit" id="search_complaint" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="support-search--results">
               <div class="form-group col-md-12" id="enquiry-complaint-view">

               </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
             <div class="support-category--wrap">
                @foreach ($headerCategories as $headerCategory)
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                   <div class="support-category--thumbnail">
                      <div class="support-categry--image">
                         <div class="title">
                            <h3>{{$headerCategory->name}}</h3>
                         </div>
                         <img src="{{ asset('storage/category/'.$headerCategory->image) }}" alt="Furniture"/>
                      </div>
                      <div class="support-categry--action">
                         <a href="javascript:void(0)" class="btn btn-primary care-enquiry">File Complaint</a>
                      </div>
                   </div>
                </div>
                @endforeach
             </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
             <div class="support-description--text">
                <p>Massa sed elementum tempus egestas sed sed risus pretium quam vulputate dignissim suspendisse in est ante in nibh mauris cursus mattis molestie a iaculis at erat. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet non curabitur gravida arcu ac tortor.</p>
                <div class="collapse" id="collapseExample">
                  <div class="card card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                  </div>
                </div>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                   Know More
                </a>
             </div>
          </div>
       </div>
    </div>
 </section>

 <section class="support-form--care" id="care-enquiry">
    <div class="container-fluid">
       <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
             <div class="title-ui--wrap">
                <div class="title-text--middle">
                   <h2>For Any Other Query</h2>
                </div>
                <div class="title-text--description">
                   <p>Urna porttitor rhoncus dolor purus non enim praesent elementum facilisis leo.</p>
                </div>
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert" data-dismiss="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
             </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
             <div class="support-form--wrap">
                <form action="{{ route('enquiry.store') }}" id="care-form" method="POST">
                    @csrf
                    <input type="hidden" name="enquiry_type" value="Care">
                   <div class="form-row">
                      <div class="form-group col-md-6">
                         <label for="name">Name <span>*</span></label>
                         <input type="text" name="name" id="name" class="form-control" placeholder="First name" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="mobile_no">Mobile No. <span>*</span></label>
                        <input type="text" name="mobile_no" class="form-control" id="mobile_no" placeholder="Mobile No." required>
                     </div>
                      <div class="form-group col-md-12">
                         <label for="email">Message <span>*</span></label>
                         <textarea name="enquiry_message" class="form-control" id="message_care" rows="3" placeholder="Your Complaint" required></textarea>
                      </div>
                      <div class="form-group col-md-12">
                         <input type="submit" class="btn btn-primary"/>
                      </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </section>

 @endsection

 @section ('footer-script')
 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
<script>
    $( "#care-form" ).validate({
      rules: {
        name: {
          required: true
        },
        mobile_no: {
            required: true,
            minlength:10,
              maxlength:10,
              number: true
        },
        enquiry_message: {
            required: true
        }
      }
    });
</script>
 <script>
 jQuery(document).ready(function() {
    @if(Session::has('success'))
        $('html,body').animate({ scrollTop: $("#care-enquiry").offset().top},'slow');
    @endif
    $("a.care-enquiry").click(function() {
        $('html,body').animate({ scrollTop: $("#care-enquiry").offset().top},'slow');
        $('#name').focus();
    });

    $(document).on('click','#search_complaint',function(e){
        e.preventDefault();
        var ticket_no = $('#ticket_no').val();
        $('#enquiry-complaint-view').html('<div align="center" style="font-size:20px;">Fetching your complaint status.</div>');
        $.ajax({
            type:'POST',
            url:"{{ route('enquiry.complaintSearch') }}",
            data:{ticket_no:ticket_no},
            success:function(data){
                $('#enquiry-complaint-view').html(data);
            }
        });
    });
 });
</script>

@endsection
