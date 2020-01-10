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
            <img src="{{ asset('storage/product/'.$orderRow->product->product_image_primary->image) }}">
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>{{$orderRow->quantity}}</th>
                            <th>{{$orderRow->price}}</th>
                            <th>{{$orderRow->amount}}</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
