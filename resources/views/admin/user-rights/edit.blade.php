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
                                                    <input type="checkbox" class="dependent" name="modules[]" value="2" {{ $admin->userrights->contains(2) ? 'checked' : '' }}> Create
                                                    <span></span>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="3" {{ $admin->userrights->contains(3) ? 'checked' : '' }}>
                                                </label>

                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" class="dependent" name="modules[]" value="4" {{ $admin->userrights->contains(4) ? 'checked' : '' }}> Edit
                                                    <span></span>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="5" {{ $admin->userrights->contains(5) ? 'checked' : '' }}>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="6" {{ $admin->userrights->contains(6) ? 'checked' : '' }}> Delete
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
                                                    <input type="checkbox" name="modules[]" value="7" {{ $admin->userrights->contains(7) ? 'checked' : '' }}> List
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" class="dependent" name="modules[]" value="8" {{ $admin->userrights->contains(8) ? 'checked' : '' }}> Create
                                                    <span></span>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="9" {{ $admin->userrights->contains(9) ? 'checked' : '' }}>
                                                </label>

                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" class="dependent" name="modules[]" value="10" {{ $admin->userrights->contains(10) ? 'checked' : '' }}> Edit
                                                    <span></span>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="11" {{ $admin->userrights->contains(11) ? 'checked' : '' }}>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="12" {{ $admin->userrights->contains(12) ? 'checked' : '' }}> Delete
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
                    <div class="card-header" id="headingThree">
                        <div class="card-title collapsed" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Product
                        </div>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample8">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="13" {{ $admin->userrights->contains(13) ? 'checked' : '' }}> List
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" class="dependent" name="modules[]" value="14" {{ $admin->userrights->contains(14) ? 'checked' : '' }}> Create
                                                    <span></span>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="15" {{ $admin->userrights->contains(15) ? 'checked' : '' }}>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" class="dependent" name="modules[]" value="16" {{ $admin->userrights->contains(16) ? 'checked' : '' }}> Edit
                                                    <span></span>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="17" {{ $admin->userrights->contains(17) ? 'checked' : '' }}>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="18" {{ $admin->userrights->contains(18) ? 'checked' : '' }}> View
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="19" {{ $admin->userrights->contains(19) ? 'checked' : '' }}> Delete
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

@section('footer-script')
    <script>
        jQuery(document).ready(function() {
            $(document).on('click', '.dependent', function(){
                if($(this).prop("checked") == true){
                    $(this).closest('td').find('.dependent').prop("checked", true);
                }
                else if($(this).prop("checked") == false){
                    $(this).closest('td').find('.dependent').prop("checked", false);
                }
            });
        });
    </script>
@endsection

