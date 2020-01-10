@extends('layouts.front')

@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <table>
        <tr>
            <td><a href="{{ route('users.profile') }}">My Profile</a></td>
            <td><a href="{{ route('orders.list') }}">My Orders</a></td>
        </tr>
    </table>


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Order No.</th>
                            <th>Order Date</th>
                            <th>Order Amount</th>
                            <th>Payment Mode</th>
                            <th>Payment Status</th>
                            <th>Bill Name</th>
                            <th>Bill Mobile No.</th>
                            <th>Bill Address</th>
                            <th>Bill Pincode</th>
                            <th>Bill Landmark</th>
                            <th>Bill State</th>
                            <th>Ship Name</th>
                            <th>Ship Mobile No.</th>
                            <th>Ship Address</th>
                            <th>Ship Pincode</th>
                            <th>Ship Landmark</th>
                            <th>Ship State</th>
                            <th>Order Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{$order->order_no}}</td>
                                <td>{{$order->order_date}}</td>
                                <td>{{$order->order_amount}}</td>
                                <td>{{$order->payment_mode}}</td>
                                <td>{{$order->payment_status}}</td>
                                <td>{{$order->bill_name}}</td>
                                <td>{{$order->bill_mobile}}</td>
                                <td>{{$order->bill_address}}</td>
                                <td>{{$order->bill_pincode}}</td>
                                <td>{{$order->bill_landmark}}</td>
                                <td>{{$order->bill_state}}</td>
                                <td>{{$order->ship_name}}</td>
                                <td>{{$order->ship_mobile}}</td>
                                <td>{{$order->ship_address}}</td>
                                <td>{{$order->ship_pincode}}</td>
                                <td>{{$order->ship_landmark}}</td>
                                <td>{{$order->ship_state}}</td>
                                <td><a href="{{ route('orders.show',[$order->id]) }}">Order Details</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
