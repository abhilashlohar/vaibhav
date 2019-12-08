@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="float-left">{{ __('Enquiry') }}</span>
                </div>

                <div class="card-body">

                   <table class="table table-sm tblborder">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Company</th>
                            <th>Description</th>
                        </tr>
                        @foreach ($enquiries as $enquiry)
                        <tr>
                            <td>{{ $enquiry->name }}</td>
                            <td>{{ $enquiry->email }}</td>
                            <td>{{ $enquiry->company }}</td>
                            <td>{{ $enquiry->description }}</td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $enquiries->links() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
