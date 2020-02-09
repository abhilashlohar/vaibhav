@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Search Enquiry
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper"></div>
                </div>
            </div>
            <form id="event-form" method="get" class="kt-form">
                <div class="kt-portlet__body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ticket_no">Ticket No.</label>
                            <input type="text" placeholder="Ticket No." id="ticket_no" name="ticket_no" value="{{$request->ticket_no}}" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ticket_no">Customer Name</label>
                                <input type="text" placeholder="Customer Name" id="name" name="name" value="{{$request->name}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ticket_no">Status</label>
                                <select class="form-control" name="status"  value="{{$request->status}}">
                                    <option value="">---Select Status---</option>
                                    <option value="open" {{($request->status=='pending')?'selected':''}}>Open</option>
                                    <option value="closed" {{($request->status=='closed')?'selected':''}}>Closed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ticket_no" class="text-center" style="display:block;">Action</label>
                                <button  type="submit" class="btn btn-primary form-control">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
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
                            <th>Customer</th>
                            <th>Subject</th>
                            <th>Opened</th>
                            <th>Status</th>
                        </tr>
                        @foreach ($enquiries as $enquiry)
                        <tr>
                            <td class="align-middle">
                                <a href="{{ route('enquiries.show', $enquiry->id) }}"> #{{ $enquiry->ticket_no }}</a>
                            </td>
                            <td class="align-middle">{{ $enquiry->name }}</td>
                            <td class="align-middle">{{ $enquiry->subject }}</td>
                            <td><?php echo humanTiming($enquiry->updated_at); ?></td>
                            <td>
                                @if ($enquiry->status=='pending')
                                    <span class="kt-badge kt-badge--danger kt-badge--dot"></span>
                                    <span class="kt-font-bold kt-font-danger">Open</span>
                                @else
                                    <span class="kt-badge kt-badge--success kt-badge--dot"></span>
                                    <span class="kt-font-bold kt-font-success">Closed</span>
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
