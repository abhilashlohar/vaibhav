@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('user-rights.update', $admin->id) }}" method="POST" enctype="multipart/form-data" class="kt-form">
            @csrf
            @method('PUT')
            <div class="accordion accordion-solid accordion-panel accordion-toggle-svg" id="accordionExample8">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <div class="card-title" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Category
                        </div>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample8">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="1" {{ $admin->userrights->contains(1) ? 'checked' : '' }}> List
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="2" {{ $admin->userrights->contains(2) ? 'checked' : '' }}> Create
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="3" {{ $admin->userrights->contains(3) ? 'checked' : '' }}> Edit
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="4" {{ $admin->userrights->contains(4) ? 'checked' : '' }}> Delete
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <div class="card-title collapsed" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Sub Category
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample8">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="5"> List
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="6"> Create
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="7"> Edit
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="8"> Delete
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="center" style="text-align:center;"><br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-secondary" href="{{ route('user-rights.index') }}">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection

