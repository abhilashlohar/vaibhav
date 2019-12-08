@extends('layouts.dashboard')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span class="float-left">{{ __('Sub Category') }}</span>
                    <a class="float-right" href="{{ route('subcategories.create') }}">New</a>
                </div>

                <div class="card-body">

                   <table class="table table-sm tblborder">
                        <tr>
                            <th>Category</th>
                            <th>Name</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($subCategories as $subCategory)
                        <tr>
                            <td>{{ $subCategory->category->name }}</td>
                            <td>{{ $subCategory->name }}</td>
                            <td>
                                <form action="{{ route('subcategories.destroy',$subCategory->id) }}" method="POST">
                   
                                    <a class="btn btn-sm btn-light" href="{{route('subcategories.edit',$subCategory->id)}}">
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
                    {!! $subCategories->links() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection