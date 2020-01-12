@extends('layouts.front')

@section('content')
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
        <div class="col-md-6">
            <h3>Shipping Address</h3>
            <span>{{ $order->ship_name }}</span><br>
            <span>{{ $order->ship_mobile }}</span><br>
            <span>{{ $order->ship_address }}</span><br>
            <span>{{ $order->ship_pincode }}</span><br>
            <span>{{ $order->ship_landmark }}</span><br>
            <span>{{ $order->ship_state }}</span><br>
        </div>
        <div class="col-md-6">
            <h3>Billing Address</h3>
            <span>{{ $order->bill_name }}</span><br>
            <span>{{ $order->bill_mobile }}</span><br>
            <span>{{ $order->bill_address }}</span><br>
            <span>{{ $order->bill_pincode }}</span><br>
            <span>{{ $order->bill_landmark }}</span><br>
            <span>{{ $order->bill_state }}</span><br>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->OrderRows as $OrderRow)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/product/'.$OrderRow->product->product_image_primary->image) }}" width="50px">
                            </td>
                            <td>{{$OrderRow->product->name}}</td>
                            <td>{{$OrderRow->quantity}}</td>
                            <td>{{$OrderRow->price}}</td>
                            <td>{{$OrderRow->amount}}</td>
                            <td><a href="{{ route('write-review',$OrderRow->product->id) }}">RATE & REVIEW PRODUCT</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
