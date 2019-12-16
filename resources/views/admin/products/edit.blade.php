@extends ('layouts.backend')

@section ('content')

<div class="row">
    <div class="col-md-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Edit Product
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data" class="kt-form">
            @csrf
            @method('PUT')
                <div class="kt-portlet__body">

                    <div class="form-group">
                        <label for="title">Name *</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $product->name }}" required  autofocus style="font-size: 16px;">

                        @error('product')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" id="slug" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ $Blog->slug }}">

                        @error('slug')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> --}}



                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="excerpt">Short Description</label>
                                <textarea class="form-control resize-none" id="short_description" name="short_description" rows="3" ></textarea>
                            </div>
                        </div>

                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <label for="content">Description</label>
                            <div class="summernote" name="description"></div>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label class="col-form-label col-lg-2 col-sm-12">Publish Status</label>
                        <div class="col-lg-9 col-md-10 col-sm-12">
                            <input name="is_published" data-switch="true" type="checkbox" checked="checked" data-on-text="Publish" data-handle-width="70" data-off-text="Draft" data-on-color="brand" >
                        </div>
                    </div>

                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-secondary" href="{{ route('products.index') }}">Cancel</a>
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
<script src="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/js/pages/crud/forms/editors/summernote.js" type="text/javascript"></script>
<script src="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/js/pages/crud/forms/widgets/bootstrap-switch.js" type="text/javascript"></script>
@endsection
