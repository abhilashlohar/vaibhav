@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Categories
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            @if (in_array('CategoryController@create',Session::get('userrightPages')))
                                <a href="{{ route('categories.create') }}" class="btn btn-brand btn-sm btn-elevate btn-icon-sm">
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
                            <th>Slug</th>
                            <th class="text-center">Sequence</th>
                            <th>Image</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <?php $sr_no=1; ?>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td class="text-center">{{ $category->sequence }}</td>
                            <td>
                                <img src="{{ asset('storage/category/'.$category->image) }}" width="60" height="60">
                            </td>

                            <td class="text-center">
                                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                                    @if (in_array('CategoryController@edit',Session::get('userrightPages')))
                                        <a href="{{route('categories.edit', $category->id)}}" title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a>
                                    @endif
                                    @if (in_array('CategoryController@destroy',Session::get('userrightPages')))
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="modal" data-target="#kt_modal_{{$sr_no}}" type="button"><i class="la la-trash"></i></button>
                                        <div class="modal fade" id="kt_modal_{{$sr_no++}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to delete record?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="p-3 ">
                    {!! $categories->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
