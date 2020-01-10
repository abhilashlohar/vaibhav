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
            <label>Name: </label><span>{{ $user->name }}</span>
            <br>
            <label>Email: </label><span>{{ $user->email }}</span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            Change password form will be here.
        </div>
        <div class="col-md-12">
            <form id="change-password-form" action="{{ route('users.changePassword',$user->id) }}" method="POST">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Reset Password </label>
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Confirm Password </label>
                        <input type="password" id="password_confirm" name="password_confirm" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

@section ('footer-script')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
<script>
    $( "#change-password-form" ).validate({
        rules: {
            password: {
                required: !0
            },
            password_confirm: {
                required: !0,
                equalTo: "#password"
            }
        }
    });
</script>
@endsection
