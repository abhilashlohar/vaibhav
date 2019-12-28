@extends ('layouts.backend')

@section ('content')

<div class="row">
    <div class="col-md-6">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Update User
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form action="{{ route('admin.updatepassword') }}" method="POST" enctype="multipart/form-data" class="kt-form">
            @csrf
            @method('PUT')
                <div class="kt-portlet__body">
                    <div class="form-group">
                        <label for="name">Password </label>
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-secondary" href="{{ route('Admin.dashboard') }}">Cancel</a>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>

@endsection
