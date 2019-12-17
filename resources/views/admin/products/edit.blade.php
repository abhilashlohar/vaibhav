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

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $product->name }}" required  autofocus style="font-size: 16px;">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select id="category_id" name="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
                                    <option value="">--Select--</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ ( ($product->category_id)? $product->category_id : old('category_id') ==  $category->id) ? 'selected' : '' }}> {{ $category->name }} </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="sub_category_id">Sub Category</label>
                                <select id="sub_category_id" name="sub_category_id" class="form-control @error('sub_category_id') is-invalid @enderror" required>
                                    <option value="">--Select--</option>
                                    @foreach ($subCategories as $subCategory)
                                    <option value="{{ $subCategory->id }}"
                                        {{ (($product->sub_category_id)? $product->sub_category_id : old('sub_category_id') ==  $subCategory->id) ? 'selected' : '' }}> {{ $subCategory->name }} </option>
                                    @endforeach
                                </select>
                                @error('sub_category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="short_description">Short Description</label>
                                <textarea class="form-control resize-none  @error('short_description') is-invalid @enderror" id="short_description" name="short_description" rows="3" >{{ ($product->short_description)?$product->short_description : old('short_description') }}</textarea>
                                @error('short_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="content">Description</label>
                            <div class="form-group">
                                <div class="summernote" name="description"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="sku">SKU *</label>
                                <input type="text" id="sku" name="sku" class="form-control @error('sku') is-invalid @enderror" value="{{ ($product->sku)? $product->sku : old('sku') }}" required>

                                @error('sku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="stock_quantity">Stock Quantity *</label>
                                <input type="text" id="stock_quantity" name="stock_quantity" class="form-control @error('stock_quantity') is-invalid @enderror" value="{{ ($product->stock_quantity)? $product->stock_quantity : old('stock_quantity') }}" required>

                                @error('stock_quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="attribute_type">Attribute Type *</label>
                                <select id="attribute_type" name="attribute_type" class="custom-select form-control @error('attribute_type') is-invalid @enderror" required>
                                    <option value="">--Select Attribute--</option>
                                    <option value="Consumable"
                                        {{ ( ($product->attribute_type)? $product->attribute_type : old('attribute_type') ==  'Consumable') ? 'selected' : '' }}> Consumable </option>
                                </select>
                                @error('attribute_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="product_tags">Product Tags *</label>
                                <input id="product_tags" placeholder='type...' id="product_tags" name="product_tags" class=" @error('product_tags') is-invalid @enderror" value="{{ ($product->product_tags)? $product->product_tags : old('product_tags') }}" required>
                                @error('product_tags')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="regular_price">Regular Price *</label>
                                <input type="text" id="regular_price" name="regular_price" class="form-control @error('regular_price') is-invalid @enderror" value="{{ ($product->regular_price)? $product->regular_price : old('regular_price') }}" required>

                                @error('regular_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="sale_price">Sale Price *</label>
                                <input type="text" id="sale_price" name="sale_price" class="form-control @error('sale_price') is-invalid @enderror" value="{{ ($product->sale_price)? $product->sale_price : old('sale_price') }}" required>

                                @error('sale_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="sequence">Sequence *</label>
                                <input type="text" id="sequence" name="sequence" class="form-control @error('sequence') is-invalid @enderror" value="{{ ($product->sequence)? $product->sequence : old('sequence') }}" required>

                                @error('sequence')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="related_products">Related Products</label>
                                <select id="related_products" multiple name="related_products" class="form-control @error('related_products') is-invalid @enderror" required>
                                    <option value="">--Select--</option>
                                    @foreach ($relatedProducts as $relatedProduct)
                                    <option value="{{ $relatedProduct->id }}"
                                        {{ ( ($product->related_products)? $product->related_products : old('related_products') ==  $relatedProduct->id) ? 'selected' : '' }}> {{ $relatedProduct->name }} </option>
                                    @endforeach
                                </select>
                                @error('related_products')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="is_published">Publish Status</label>
                                    <br>
                                    <div class="kt-radio-inline">
                                        <label class="kt-checkbox kt-checkbox--state-success">
                                            <input type="checkbox"  name="is_published" value="1"> &nbsp
                                            <span></span>
                                        </label>
                                    </div>
                                    {{-- <input name="is_published"  data-switch="true" type="checkbox" checked="checked" data-on-text="Publish" data-handle-width="70" data-off-text="Draft" data-on-color="brand" value="1" > --}}
                            </div>
                        </div>
                    </div>
                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="product_image_repeater">
                                <div class="form-group form-group-last row" id="product_image_repeater">
                                    <label  class="col-lg-2 col-form-label">Product Image:</label>
                                    <div data-repeater-list="" class="col-lg-10">
                                        <div class="col-md-12 col-form-label row align-items-center">
                                            <div class="col-md-6">
                                                <label>Image</label>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Primary</label>
                                            </div>
                                            <div class="col-md-4">

                                            </div>

                                        </div>
                                        <div data-repeater-item class="form-group row align-items-center">
                                            <div class="col-md-6">
                                                <div class="kt-form__group--inline">
                                                    <div class="kt-form__control">
                                                        <div class="kt-avatar kt-avatar--outline product_image" id="kt_user_avatar_1">
                                                            <div class="kt-avatar__holder" style="background-image: url('{{ asset('storage/category/'.$category->image) }}')"></div>
                                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                                <i class="fa fa-pen"></i>
                                                                <input type="file"  accept=".png, .jpg, .jpeg">
                                                            </label>
                                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                                <i class="fa fa-times"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-md-none kt-margin-b-10"></div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="kt-form__group--inline">
                                                    <div class="kt-radio-inline">
                                                        <label class="kt-radio kt-radio--state-success">
                                                            <input type="radio"> &nbsp
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="javascript:;" data-repeater-delete="" class="btn-sm btn btn-label-danger btn-bold">
                                                    <i class="la la-trash-o"></i>
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="form-group form-group-last row">
                                    <label class="col-lg-2 col-form-label"></label>
                                    <div class="col-lg-4">
                                        <a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-sm btn-label-brand">
                                            <i class="la la-plus"></i> Add
                                        </a>
                                    </div>
                                </div>
                            </div>
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

<script src="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/js/pages/crud/forms/editors/summernote.js" type="text/javascript"></script>
<script src="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/js/pages/crud/forms/widgets/bootstrap-switch.js" type="text/javascript"></script>

<script type="text/javascript">
    var KTAvatarDemo = {
        init: function() {
            new KTAvatar("product_image")
        }
    };
    KTUtil.ready(function() {
        KTAvatarDemo.init()
    });

    var KTFormWidgets = function() {
    var e;
    return {
        init: function() {
            ! function() {
                $("#category_id").select2({
                    placeholder: "Select a category"
                }), $("#category_id").on("select2:change", function() {
                    e.element($(this))
                });

                $("#sub_category_id").select2({
                    placeholder: "Select a subcategory"
                }), $("#sub_category_id").on("select2:change", function() {
                    e.element($(this))
                });

                $("#related_products").select2({
                    placeholder: "Select a related product"
                }), $("#related_products").on("select2:change", function() {
                    e.element($(this))
                });
            }()
        }
    }
}();

var KTTagify = {
    init: function() {
        var e, a;
        ! function() {
            var e = document.getElementById("product_tags"),
                a = new Tagify(e, {
                    whitelist: [],
                    blacklist: []
                });

        }()
    }
};

var KTFormRepeater = {
    init: function() {
        $("#product_image_repeater").repeater({
            initEmpty: !1,
            defaultValues: {
                "text-input": "foo"
            },
            show: function() {
                $(this).slideDown();
            },
            hide: function(e) {
                $(this).slideUp(e)
            }
        })
    }
};



jQuery(document).ready(function() {
    KTFormWidgets.init();
    KTTagify.init();
    KTFormRepeater.init();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $( "#category_id" ).on( "change", function() {
        var category_id = $(this).val();
        console.log(category_id);
        $.ajax({
           type:'POST',
           url:"{{ route('subcategorylist') }}",
           data:{category_id:category_id},
           success:function(data){
                console.log(data);
                $( "#sub_category_id" ).html(data).select2({
                    placeholder: "Select a subcategory"
                });
           }
        });
    });
});
</script>
@endsection
