@extends('layouts.pdf')
<style>
    .col-md-6 {
        width:200px;
    }
    </style>
@section('content')
    <table width="100%">
        <tr>
            <td>
                <h4>Shipping Addresss</h4>
                <span>{{ $order->ship_name }}</span><br>
                <span>{{ $order->ship_mobile }}</span><br>
                <span>{{ $order->ship_address }}</span><br>
                <span>{{ $order->ship_pincode }}</span><br>
                <span>{{ $order->ship_landmark }}</span><br>
                <span>{{ $order->ship_state }}</span><br>
            </td>
            <td>
                <h4>Billing Address</h4>
                <span>{{ $order->bill_name }}</span><br>
                <span>{{ $order->bill_mobile }}</span><br>
                <span>{{ $order->bill_address }}</span><br>
                <span>{{ $order->bill_pincode }}</span><br>
                <span>{{ $order->bill_landmark }}</span><br>
                <span>{{ $order->bill_state }}</span><br>
            </td>
        </tr>
    </table>
<br>
<br>
<br>
    <table width="80%" border="1">
        <thead>
            <tr>
                <th align="left">Item</th>
                <th align="left">Quantity</th>
                <th align="left">Price</th>
                <th align="left">Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->OrderRows as $OrderRow)
            <tr>
                <td>{{$OrderRow->product->name}}</td>
                <td>{{$OrderRow->quantity}}</td>
                <td>{{$OrderRow->price}}</td>
                <td>{{$OrderRow->amount}}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3" align="center"> Total Amount</td>
                <td><b>{{$order->order_amount}}</b></td>
            </tr>
        </tbody>
    </table>
@endsection
