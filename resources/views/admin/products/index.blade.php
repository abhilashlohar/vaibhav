@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-md-8">

        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Products
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            @if (in_array('ProductController@create',Session::get('userrightPages')))
                            <a href="{{ route('products.create') }}" class="btn btn-brand btn-sm btn-elevate btn-icon-sm">
                                <i class="la la-plus"></i> New
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body" style="padding: 0;">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category['name'] }}</td>
                            <td>{{ $product->subCategory['name'] }}</td>
                            <td>{{($product->is_published)?'Published':'Draft'}}</td>
                            <td class="align-middle">
                                @if (in_array('ProductController@edit',Session::get('userrightPages')))
                                <a href="{{ route('products.edit', $product->id) }}" title="Edit product" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                    <i class="la la-edit"></i>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="p-3 ">
                    {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
