@extends('layouts.backend')
 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                    <span class="float-left">{{ __('Permission') }}</span>
                    <a class="float-right" href="{{ route('permissions.create') }}">Add New</a>
                </div>

                <div class="card-body">

                   <table class="table table-sm tblborder">
                        <tr>
                            <th>Title</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->title }}</td>
                            <td>
                                <form action="{{ route('permissions.destroy',$permission->id) }}" method="POST">
                   
                                    <a href="{{route('permissions.edit', $permission->id)}}" title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a> 
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-clean btn-icon btn-icon-md" type="submit"><i class="la la-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $permissions->links() !!}

                </div>
            </div>

    </div>
</div>

@endsection