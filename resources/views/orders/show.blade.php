@extends('layouts.front')
 
@section('content')
<div class="container">
    <table>
        <tr>
            <td><a href="{{ route('users.profile') }}">My Profile</a></td>
            <td><a href="{{ route('orders.list') }}">My Orders</a></td>
        </tr>
    </table>


    <div class="row">
        <div class="col-md-6">
            Order detial
        </div>
    </div>

</div>
@endsection