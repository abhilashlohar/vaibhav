@extends('layouts.front')

@section('content')
<<<<<<< HEAD
<section class="user-order--wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <table class="profile-tab--menu">
                    <tr>
                        <td><a href="{{ route('users.profile') }}">My Profile</a></td>
                    </tr>
                    <tr>
                        <td><a href="{{ route('orders.list') }}">My Orders</a></td>
                    </tr>
=======
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
>>>>>>> 71275771edc9e8b1090aeb90881891f455664c26
                </table>
            </div>
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
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
</section>
@endsection
