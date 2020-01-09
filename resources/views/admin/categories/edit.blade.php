@extends ('layouts.backend')

@section ('content')

<div class="row">
    <div class="col-md-6">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Update Category
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form action="{{ route('categories.update',$category->id) }}" method="POST" enctype="multipart/form-data" class="kt-form">
            @csrf
            @method('PUT')
                <div class="kt-portlet__body">

                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" id="name" name="name" placeholder="Category Name" class="form-control @error('name') is-invalid @enderror" value="{{ $category->name }}" required  autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug *</label>
                        <input type="text" id="slug" name="slug" placeholder="Category Slug" class="form-control @error('slug') is-invalid @enderror" value="{{ $category->slug }}" required >
                        <span class="form-text text-muted">Not enter space inside slug.</span>
                        @error('slug')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="sequence">Sequence *</label>
                        <input type="text" id="sequence" name="sequence" placeholder="Category Sequence" class="form-control @error('sequence') is-invalid @enderror" value="{{ $category->sequence }}" required >

                        @error('sequence')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row @error('image_add') is-invalid @enderror">
                            <label class="col-xl-3 col-lg-3 col-form-label">Category Image</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                    <div class="kt-avatar__holder" style="background-image: url('{{ asset('storage/category/'.$category->image) }}')"></div>
                                    <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen"></i>
                                        <input type="file" name="image_add" accept=".png, .jpg, .jpeg">
                                    </label>
                                    <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                        <i class="fa fa-times"></i>
                                    </span>
                                </div>
                                <span class="form-text text-muted">Allowed file types:  png, jpg, jpeg.</span>
                            </div>
                        </div>
                        @error('image_add')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="sequence">Template Type *</label><br><br>
                        <input name="template_type" id="template_type"  data-switch="true" type="checkbox" data-handle-width="70" data-on-text="List" data-off-text="Grid" data-on-color="brand" @if($category->template_type=='list') checked="checked" @endif >
                    </div>

                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-secondary" href="{{ route('categories.index') }}">Cancel</a>
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
@endsection
