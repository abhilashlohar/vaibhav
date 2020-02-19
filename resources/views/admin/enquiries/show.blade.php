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
                    <div class="kt-widget3__item">
                        <div class="kt-widget3__header">
                            <span class="kt-media kt-media--sm kt-media--success kt-media--circle kt-margin-r-5 kt-margin-t-5">
                                {{ $Enquiry->name }}
                            </span>
                            <div class="kt-widget3__info">
                                <span class="kt-widget3__time" title="{{ formatDate($Enquiry->created_at, 'timeAslo') }}">
                                {{ humanTiming($Enquiry->created_at) }}
                                </span>
                            </div>
                            <span class="kt-widget3__status kt-font-brand"></span>
                        </div>
                        <div class="kt-widget3__body">
                            {{ $Enquiry->message }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

