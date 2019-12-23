@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                    <span class="float-left">{{ __('Modules') }}</span>
                    <a class="float-right" href="{{ route('modules.create') }}">Add New</a>
                </div>

                <div class="card-body">

                   <table class="table table-sm tblborder">
                        <tr>
                            <th>Name</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($modules as $module)
                        <tr>
                            <td>{{ $module->name }}</td>
                            <td>
                                <form action="{{ route('modules.destroy',$module->id) }}" method="POST">

                                    <a href="{{route('modules.edit', $module->id)}}" title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-clean btn-icon btn-icon-md" type="submit"><i class="la la-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $modules->links() !!}

                </div>
            </div>

    </div>
</div>

@endsection
