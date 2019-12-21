@extends('layouts.backend')
 
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Enquiry
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper"></div>      
                </div>
            </div>
            <div class="kt-portlet__body" style="padding: 0;">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Ticket</th>
                            <th>Subject</th>
                            <th>Status</th>
                        </tr>
                        @foreach ($enquiries as $enquiry)
                        <tr>
                            <td class="align-middle">#{{ $enquiry->ticket_no }}</td>
                            <td class="align-middle">{{ $enquiry->subject }}</td>
                            <td><?php echo humanTiming($enquiry->updated_at); ?></td>
                            <td>
                                @if ($enquiry->status=='open')
                                    <span class="kt-badge  kt-badge--info kt-badge--inline kt-badge--pill">Open</span>
                                @else
                                    <span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Closed</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="p-3 ">
                    {!! $enquiries->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection