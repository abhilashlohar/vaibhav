@extends ('layouts.front')


@section ('content')

<div align="center">
    <br>
    <h3>Your order placed successfully.</h3>
    <br>
    <a href="{{ route('home') }}" class="btn btn-primary my-4">Continue Shopping</a>
    <br>
</div>

@endsection