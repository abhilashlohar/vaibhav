@extends ('layouts.backend')

@section ('content')

<div class="row">
    <div class="col-md-8">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Update Brand
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form action="{{ route('brands.update',$brand->id) }}" method="POST" enctype="multipart/form-data" class="kt-form">
            @csrf
            @method('PUT')
                <div class="kt-portlet__body">
                    <div class="kt-portlet__body">

                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" placeholder="Brand Name" class="form-control @error('name') is-invalid @enderror" value="{{ $brand->name }}" required  autofocus>
    
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                        <div class="form-group">
                            <label for="short-description">Short Description *</label>
                            <textarea class="form-control @error('short_description') is-invalid @enderror" id="short_description" name="short_description" rows="4" required>{{ $brand->short_description }}</textarea>
                            @error('short_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="description">Description *</label>
                                <textarea class="summernote" id="description" name="description" required>{{ $brand->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="banner-image-mobile">Logo *</label>
                                    <input type="file" name="logo_add" accept="png, jpg, jpeg"  class="form-control @error('logo_add') is-invalid @enderror">
                                    <span class="form-text text-muted">Allowed file types:  png, jpg, jpeg.</span>
                                    @error('logo_add')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <div class="kt-avatar kt-avatar--outline" id="logo_add">
                                        <div class="kt-avatar__holder" style="background-image: url('{{ asset('storage/brand/'.$brand->logo) }}')"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="banner-image-desktop">Image *</label>
                                    <input type="file" name="image_add" accept="png, jpg, jpeg"  class="form-control @error('image_add') is-invalid @enderror">
                                    <span class="form-text text-muted">Allowed file types:  png, jpg, jpeg.</span>
    
                                    @error('image_add')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <div class="kt-avatar kt-avatar--outline" id="image_add">
                                        <div class="kt-avatar__holder" style="background-image: url('{{ asset('storage/brand/'.$brand->image) }}')"></div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
    
                        <div class="form-group">
                            <label for="sequence">Show On Home Page *</label><br><br>
                            <input name="show_on_home_page" id="show_on_home_page"  data-switch="true" type="checkbox" data-handle-width="70" data-on-text="Yes" data-off-text="No" data-on-color="brand" @if($brand->show_on_home_page==1) checked="checked" @endif>
                        </div>
    
                    </div>

                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-secondary" href="{{ route('brands.index') }}">Cancel</a>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>

@endsection

@section ('footer-script')
<script src="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/js/pages/crud/file-upload/ktavatar.js" type="text/javascript"></script>
<script src="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/js/pages/crud/forms/widgets/bootstrap-switch.js" type="text/javascript"></script>
<script type="text/javascript">
    "use strict";
    var KTSummernoteDemo={
        init:function(){


            $(".summernote").summernote({
                height:300
            })
        }
    };
    var KTFormControls= {
        init:function() {
            $("#brand-form").validate({
                rules: {
                    name: {
                        required: !0
                    },
                    short_description: {
                        required: !0
                    },
                    description: {
                        required: !0
                    }

                }
                , errorPlacement:function(e, r) {
                    var i=r.closest(".input-group");
                    i.length?i.after(e.addClass("invalid-feedback")): r.after(e.addClass("invalid-feedback"))
                }
                , invalidHandler:function(e, r) {
                    $("#kt_form_1_msg").removeClass("kt--hide").show(), KTUtil.scrollTop()
                }

            })
        }
    };
    jQuery(document).ready(function(){
        KTSummernoteDemo.init()
        KTFormControls.init()
        });
</script>
@endsection
