@extends ('layouts.backend')

@section ('content')

<div class="row">
    <div class="col-md-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Edit Blog
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form action="{{ route('blogs.update',$Blog->id) }}" method="POST" enctype="multipart/form-data" class="kt-form">
            @csrf
            @method('PUT')
                <div class="kt-portlet__body">

                    <div class="form-group">
                        <label for="title">Blog Title *</label>
                        <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $Blog->title }}" required  autofocus style="font-size: 16px;">

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" id="slug" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ $Blog->slug }}">

                        @error('slug')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="excerpt">Excerpt</label>
                                <textarea class="form-control" id="excerpt" name="excerpt" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="col-md-1"></div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="row @error('featured_image') is-invalid @enderror">
                                    <label class="col-xl-3 col-lg-3 col-form-label" for="featured_image">Featured Image</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                            <div class="kt-avatar__holder" style="background-image: url(<?php echo url('/'); ?>/img/no-image.png)"></div>
                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                <i class="fa fa-pen"></i>
                                                <input type="file" name="featured_image" accept=".png, .jpg, .jpeg" required="required">
                                            </label>
                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                <i class="fa fa-times"></i>
                                            </span>
                                        </div>
                                        <span class="form-text text-muted">Allowed file types:  png, jpg, jpeg.</span>
                                    </div>
                                </div>
                                @error('featured_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <label for="content">Blog Content</label>
                            <div class="summernote" name="content"></div>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label class="col-form-label col-lg-2 col-sm-12">Publish Status</label>
                        <div class="col-lg-9 col-md-10 col-sm-12">
                            <input name="status" data-switch="true" type="checkbox" checked="checked" data-on-text="Publish" data-handle-width="70" data-off-text="Draft" data-on-color="brand" >
                        </div>
                    </div>

                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-secondary" href="{{ route('blogs.index') }}">Cancel</a>
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
