@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Search Customer Order
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
                                <label>Customer Name</label>
                                <input type="text" placeholder="Customer Name" id="name" name="name" value="{{$request->name}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label  class="text-center" style="display:block;">Action</label>
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
                        Order
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
                            <th>Order No.</th>
                            <th>Order Date</th>
                            <th>Order Amount</th>
                            <th>Order Details</th>
                        </tr>
                        @foreach ($orders as $order)
                               <tr>
                                   <td>{{$order->order_no}}</td>
                                   <td>{{$order->order_date}}</td>
                                   <td>{{$order->order_amount}}</td>
                                   <td><a href="{{ route('customer.orderDetail',$order->id) }}">Order Details</a></td>
                               </tr>
                           @endforeach
                    </table>
                </div>
                <div class="p-3 ">
                    {!! $orders->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
