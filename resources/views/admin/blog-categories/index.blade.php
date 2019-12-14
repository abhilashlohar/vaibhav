@extends('layouts.backend')
 
@section('content')
<div class="row">
    <div class="col-md-8">

        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Blog-Categories
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            <a href="{{ route('blog-categories.create') }}" class="btn btn-brand btn-sm btn-elevate btn-icon-sm">
                                <i class="la la-plus"></i> New
                            </a>
                        </div>  
                    </div>      
                </div>
            </div>
            <div class="kt-portlet__body" style="padding: 0;">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($blogCategories as $blogCategory)
                        <tr>
                            <td class="align-middle">{{ $blogCategory->name }}</td>
                            <td class="align-middle">
                                <a href="{{ route('blog-categories.edit', $blogCategory->id) }}" title="Edit blog-category" class="btn btn-sm btn-clean btn-icon btn-icon-md">  
                                    <i class="la la-edit"></i>                     
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="p-3 ">
                    {!! $blogCategories->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection