@extends ('layouts.backend')

@section ('content')

<div class="row">
    <div class="col-md-6 offset-md-3">
        
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-widget14">
                <div class="kt-widget14__header kt-margin-b-30">
                    <h3 class="kt-widget14__title">
                        Welcome to {{ config('app.name') }} Admin Panel !            
                    </h3>
                    <span class="kt-widget14__desc">
                        Here you can manage your store.
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection