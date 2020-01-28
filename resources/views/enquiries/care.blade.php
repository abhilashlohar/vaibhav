@extends ('layouts.front')

@section ('content')

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
             <div class="support-search--form">
                <div class="form-group col-md-10">
                   <input type="search" class="form-control" id="search" placeholder="Search term...">
                </div>
                <div class="form-group col-md-2">
                   <input type="submit" class="btn btn-primary"/>
                </div>
             </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
             <div class="support-category--wrap">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                   <div class="support-category--thumbnail">
                      <div class="support-categry--image">
                         <div class="title">
                            <h3>Furniture</h3>
                         </div>
                         <img src="{{ asset('') }}img/furniture-sofa.png" alt=""/>
                      </div>
                      <div class="support-categry--action">
                         <a href="#" class="btn btn-primary">File Complaint</a>
                      </div>
                   </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                   <div class="support-category--thumbnail">
                      <div class="support-categry--image">
                         <div class="title">
                            <h3>Furniture</h3>
                         </div>
                         <img src="{{ asset('') }}img/furniture-sofa.png" alt=""/>
                      </div>
                      <div class="support-categry--action">
                         <a href="#" class="btn btn-primary">File Complaint</a>
                      </div>
                   </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                   <div class="support-category--thumbnail">
                      <div class="support-categry--image">
                         <div class="title">
                            <h3>Furniture</h3>
                         </div>
                         <img src="{{ asset('') }}img/furniture-sofa.png" alt=""/>
                      </div>
                      <div class="support-categry--action">
                         <a href="#" class="btn btn-primary">File Complaint</a>
                      </div>
                   </div>
                </div>
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

 <section class="support-form--care">
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
             </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
             <div class="support-form--wrap">
                <form action="{{ route('enquiry.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="enquiry_type" value="Care">
                   <div class="form-row">
                      <div class="form-group col-md-6">
                         <label for="name">Name</label>
                         <input type="text" name="name" class="form-control" placeholder="First name">
                      </div>
                      <div class="form-group col-md-6">
                         <label for="email">Email</label>
                         <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                      </div>
                      <div class="form-group col-md-12">
                         <label for="email">Message</label>
                         <textarea name="enquiry_message" class="form-control" id="message_care" rows="3"></textarea>
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
