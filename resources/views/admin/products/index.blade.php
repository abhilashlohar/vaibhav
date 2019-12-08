@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="float-left">{{ __('Product') }}</span>
                    <a class="float-right" href="{{ route('products.create') }}">New</a>
                </div>

                <div class="card-body">

                   <table class="table table-sm tblborder">
                        <tr>
                            <th>Name</th>
                            <th>Category Name</th>
                            <th>Sub Category Name</th>
                            <th>Image</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->subCategory->name }}</td>
                            <td>
                                <img src="{{ asset('uploads/'.$product->image_path) }}" width="100" height="100">
                            </td>
                            <td>
                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                    <a class="btn btn-sm btn-light" href="{{route('products.edit',$product->id)}}">
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
                    {!! $products->links() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
