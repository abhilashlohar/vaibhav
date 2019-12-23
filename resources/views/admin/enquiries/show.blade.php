@extends ('layouts.backend')

@section ('content')

<div class="row">
    <div class="col-md-12">

        <!--begin:: Widgets/Support Tickets -->
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        {{ $Enquiry->subject }}
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="kt-widget3">
                    @foreach ($Enquiry->EnquiryDetails as $EnquiryRow)
                    <div class="kt-widget3__item">
                        <div class="kt-widget3__header">
                            <span class="kt-media kt-media--sm kt-media--success kt-media--circle kt-margin-r-5 kt-margin-t-5">
                                <span>{{ ($EnquiryRow->User) ? strtoupper($EnquiryRow->User->name[0]) : strtoupper($EnquiryRow->Admin->name[0]) }} </span>
                            </span>
                            <div class="kt-widget3__info">
                                <a href="#" class="kt-widget3__username">
                                {{ ($EnquiryRow->User) ? $EnquiryRow->User->name : $EnquiryRow->Admin->name }}   
                                </a><br> 
                                <span class="kt-widget3__time" title="{{ formatDate($EnquiryRow->created_at, 'timeAslo') }}">
                                {{ humanTiming($EnquiryRow->created_at) }} 
                                </span>      
                            </div>
                            <span class="kt-widget3__status kt-font-brand"></span> 
                        </div>
                        <div class="kt-widget3__body">
                            {{ $EnquiryRow->message }}  
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--end:: Widgets/Support Tickets -->

    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="kt-portlet">
            <form action="{{ route('enquiries.reply') }}" method="POST" class="kt-form">
            @csrf
                <div class="kt-portlet__body">
                    
                    <input type="hidden" name="enquiry_id" value="{{ $Enquiry->id }}">

                    <div class="form-group form-group-last">
                        <label for="exampleTextarea">Reply</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>

@endsection

