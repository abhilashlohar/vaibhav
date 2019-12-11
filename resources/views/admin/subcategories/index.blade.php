@extends('layouts.backend')
 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                    <span class="float-left">{{ __('Sub Category') }}</span>
                    <a class="float-right" href="{{ route('subcategories.create') }}">New</a>
                </div>

                <div class="card-body">

                   <table class="table table-sm tblborder">
                        <tr>
                            <th>Name</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($subcategories as $subcategory)
                        <tr>
                            <td>{{ $subcategory->name }}</td>
                            <td>
                                <form action="{{ route('subcategories.destroy',$subcategory->id) }}" method="POST">
                   
                                    <a class="btn btn-sm btn-light" href="{{route('subcategories.edit', $subcategory->id)}}">
                                      <i class="fas fa-edit"></i>
                                    </a>
                   
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-light" type="submit"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $subcategories->links() !!}

                </div>
            </div>

    </div>
</div>

@endsection