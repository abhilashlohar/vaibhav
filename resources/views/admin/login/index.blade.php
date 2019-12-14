@extends('layouts.backend')
 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                    <span class="float-left">{{ __('User Create') }}</span>
                    <a class="float-right" href="{{ route('users.create') }}">Add New</a>
                </div>

                <div class="card-body">

                   <table class="table table-sm tblborder">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Permission</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->permission }}</td>
                            
                            <td>
                                <form action="{{ route('users.destroy',$admin->id) }}" method="POST">
                   
                                    <a href="{{route('users.edit', $admin->id)}}" title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a> 
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-clean btn-icon btn-icon-md" type="submit"><i class="la la-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $admins->links() !!}

                </div>
            </div>

    </div>
</div>

@endsection