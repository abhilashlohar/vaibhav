<!-- <form action="{{ route('AdminLogin') }}" method="POST" enctype="multipart/form-data">
@csrf
    <input type="text" name="email">
    <input type="password" name="password">
    <button type="submit">SUBMIT</button>
</form> -->

@extends ('layouts.backendlogin')

@section ('content')
<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
            <!--begin::Aside-->
            <div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside" style="background-image: url(../../../../../themes/metronic/theme/default/demo1/dist/assets/media/bg/bg-4.jpg);">
                <div class="kt-grid__item">
                    <a href="#" class="kt-login__logo">
                        <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/logos/logo-4.png">
                    </a>
                </div>
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
                    <div class="kt-grid__item kt-grid__item--middle">
                        <h3 class="kt-login__title">Welcome to {{ config('app.name') }} Admin Panel !</h3>
                        <h4 class="kt-login__subtitle">Here you can manage you site.</h4>
                    </div>
                </div>
                <div class="kt-grid__item">
                    <div class="kt-login__info">
                        <div class="kt-login__copyright">
                            {{ config('app.footer_text') }}
                        </div>
                    </div>
                </div>
            </div>
            <!--begin::Aside-->

            <!--begin::Content-->
            <div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">

                <!--begin::Body-->
                <div class="kt-login__body">

                    <!--begin::Signin-->
                    <div class="kt-login__form">
                        <div class="kt-login__title">
                            <h3>Sign In</h3>
                        </div>

                        <!--begin::Form-->
                        <form action="{{ route('AdminLogin') }}" class="kt-form" method="POST" novalidate="novalidate" id="kt_login_form">
                        @csrf
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Username" name="email" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="Password" name="password"  autocomplete="off">
                            </div>
                            <!--begin::Action-->
                            <div class="kt-login__actions">
                                <button type="submit"  class="btn btn-primary btn-elevate kt-login__btn-primary">Sign In</button>
                            </div>
                            <!--end::Action-->
                        </form>
                        <!--end::Form-->

                    </div>
                    <!--end::Signin-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Content-->
        </div>
    </div>
</div>
<!-- end:: Page -->
@endsection