@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('user-rights.store') }}" method="POST" enctype="multipart/form-data" class="kt-form">
            @csrf
            <div class="form-group">
                {{-- <label for="name">User *</label>
                <select name="admin_id" id="admin_id" class="form-control @error('admin_id') is-invalid @enderror" required>
                    <option value="">---Select user---</option>
                    @foreach ($admins as $admin)
                        <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                    @endforeach
                </select>

                @error('admin_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> --}}
            <div class="accordion accordion-solid accordion-panel accordion-toggle-svg" id="accordionExample8">
                <div class="card">
                    <div class="card-header" id="headingOne8">
                        <div class="card-title" data-toggle="collapse" data-target="#collapseOne8" aria-expanded="true" aria-controls="collapseOne8">
                            Category
                        </div>
                    </div>
                    <div id="collapseOne8" class="collapse show" aria-labelledby="headingOne8" data-parent="#accordionExample8">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="1"> List
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="2"> Create
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="3"> Edit
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="modules[]" value="4"> Delete
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
                    <div class="card-header" id="headingTwo8">
                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo8" aria-expanded="true" aria-controls="collapseTwo8">
                            Sub Category

                        </div>
                    </div>
                    <div id="collapseTwo8" class="collapse show" aria-labelledby="headingTwo8" data-parent="#accordionExample8">
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

@section ('footer-script')

<script src="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/js/pages/crud/file-upload/ktavatar.js" type="text/javascript"></script>
<script type="text/javascript">
    var KTFormWidgets = function() {
    var e;
    return {
        init: function() {
            ! function() {
                $("#admin_id").select2({
                    placeholder: "Select user"
                }), $("#admin_id").on("select2:change", function() {
                    e.element($(this))
                });
            }()
        }
    }
}();
jQuery(document).ready(function() {
    KTFormWidgets.init()
});
</script>

@endsection
