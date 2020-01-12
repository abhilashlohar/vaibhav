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

@if(Session::has('success'))
    <div class="alert alert-success" role="alert" data-dismiss="alert">
        <strong>SUCCESS! &nbsp;</strong> {{ Session::get('success') }}
    </div>
@endif

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
                            <th>Order Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{$order->order_no}}</td>
                                <td>{{$order->order_date}}</td>
                                <td>{{$order->order_amount}}</td>
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
