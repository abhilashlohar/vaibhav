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
            <label>Name: </label><span>{{ $user->name }}</span>
            <br>
            <label>Email: </label><span>{{ $user->email }}</span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            Change password form will be here.
        </div>
    </div>

</div>
@endsection