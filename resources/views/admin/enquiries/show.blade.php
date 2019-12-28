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
                <div class="kt-portlet__head-label">
                    <a class="btn btn-secondary" style="float:right" href="{{ route('enquiries.index') }}">Back</a>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="kt-widget3">
                    @foreach ($Enquiry->EnquiryDetails as $EnquiryRow)
                    <div class="kt-widget3__item">
                        <div class="kt-widget3__header">
                            <span class="kt-media kt-media--sm kt-media--success kt-media--circle kt-margin-r-5 kt-margin-t-5">
                                <span>{{ ($EnquiryRow->User) ? strtoupper($EnquiryRow->User->name[0]) : strtoupper($EnquiryRow->Admin->name[0]) }}</span>
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
@if($Enquiry->status == 'closed')
<div class="row">
    <div class="col-md-12">
        <div class="kt-portlet">
            <div class="kt-portlet__body">
                <div class="kt-widget3__body">
                    <label style="font-weight:500; color:#595d6e">Closed By:- </label>{{ $Enquiry->admin->name }}
                </div>
                <div class="kt-widget3__body">
                    <label style="font-weight:500; color:#595d6e">Closed Date:- </label>{{ date('d-m-Y', strtotime($Enquiry->closed_at)) }}
                </div>
                <div class="kt-widget3__body">
                    <label style="font-weight:500; color:#595d6e">Closed Reason:- </label>{{ $Enquiry->closed_reason }}
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if (in_array('EnquiryController@reply',Session::get('userrightPages')) && ($Enquiry->status == 'open'))
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
                        <button class="btn btn-success" data-toggle="modal" data-target="#kt_modal" type="button">Close Ticket</button>
                        <a class="btn btn-secondary" href="{{ route('enquiries.index') }}">Cancel</a>
                    </div>
                </div>
            </form>
            <div class="modal fade" id="kt_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ route('enquiries.update',$Enquiry->id) }}" method="POST" enctype="multipart/form-data" class="kt-form">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Close Ticket</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group form-group-last">
                                    <label for="exampleTextarea">Closed Reason</label>
                                    <textarea class="form-control" id="closed_reason" name="closed_reason" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Close Ticket</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection

