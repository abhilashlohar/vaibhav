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
                                                    <input type="checkbox" class="dependent" name="modules[]" value="14" {{ $admin->userrights->contains(14) ? 'checked' : '' }}> Create/Edit
                                                    <span></span>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="15" {{ $admin->userrights->contains(15) ? 'checked' : '' }}>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="16" {{ $admin->userrights->contains(16) ? 'checked' : '' }}>
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
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <div class="card-title collapsed" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            User
                        </div>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample8">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="20" {{ $admin->userrights->contains(20) ? 'checked' : '' }}> List
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" class="dependent" name="modules[]" value="21" {{ $admin->userrights->contains(21) ? 'checked' : '' }}> Create
                                                    <span></span>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="22" {{ $admin->userrights->contains(22) ? 'checked' : '' }}>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" class="dependent" name="modules[]" value="23" {{ $admin->userrights->contains(23) ? 'checked' : '' }}> Edit
                                                    <span></span>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="24" {{ $admin->userrights->contains(24) ? 'checked' : '' }}>
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
                    <div class="card-header" id="headingFive">
                        <div class="card-title collapsed" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                            Blog Category
                        </div>
                    </div>
                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample8">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="25" {{ $admin->userrights->contains(25) ? 'checked' : '' }}> List
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" class="dependent" name="modules[]" value="26" {{ $admin->userrights->contains(26) ? 'checked' : '' }}> Create
                                                    <span></span>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="27" {{ $admin->userrights->contains(27) ? 'checked' : '' }}>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" class="dependent" name="modules[]" value="28" {{ $admin->userrights->contains(28) ? 'checked' : '' }}> Edit
                                                    <span></span>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="29" {{ $admin->userrights->contains(29) ? 'checked' : '' }}>
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
                    <div class="card-header" id="headingSeEight">
                        <div class="card-title collapsed" data-target="#collapseSeEight" aria-expanded="true" aria-controls="collapseSeEight">
                            Blog
                        </div>
                    </div>
                    <div id="collapseSeEight" class="collapse show" aria-labelledby="headingSeEight" data-parent="#accordionExample8">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="30" {{ $admin->userrights->contains(30) ? 'checked' : '' }}> List
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" class="dependent" name="modules[]" value="31" {{ $admin->userrights->contains(31) ? 'checked' : '' }}> Create/Edit
                                                    <span></span>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="32" {{ $admin->userrights->contains(32) ? 'checked' : '' }}>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="33" {{ $admin->userrights->contains(33) ? 'checked' : '' }}>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="34" {{ $admin->userrights->contains(34) ? 'checked' : '' }}>
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
                    <div class="card-header" id="headingEight">
                        <div class="card-title collapsed" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                            Enquiry
                        </div>
                    </div>
                    <div id="collapseEight" class="collapse show" aria-labelledby="headingEight" data-parent="#accordionExample8">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" class="dependent" name="modules[]" value="35" {{ $admin->userrights->contains(35) ? 'checked' : '' }}> List/View
                                                    <span></span>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="36" {{ $admin->userrights->contains(36) ? 'checked' : '' }}>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="37" {{ $admin->userrights->contains(37) ? 'checked' : '' }}> Reply
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
                    <div class="card-header" id="headingNine">
                        <div class="card-title collapsed" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                            User Rights
                        </div>
                    </div>
                    <div id="collapseNine" class="collapse show" aria-labelledby="headingNine" data-parent="#accordionExample8">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" class="dependent" name="modules[]" value="38" {{ $admin->userrights->contains(38) ? 'checked' : '' }}> Create/Edit
                                                    <span></span>
                                                    <input type="checkbox" class="dependent" name="modules[]" value="39" {{ $admin->userrights->contains(39) ? 'checked' : '' }}>
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
                <a class="btn btn-secondary" href="{{ route('users.index') }}">Cancel</a>
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

