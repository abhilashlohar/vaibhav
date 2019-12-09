@extends ('layouts.backend')

@section ('content')

<div class="row">
    <div class="col-md-6">
        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Base Controls
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form class="kt-form">
                <div class="kt-portlet__body">
                    <div class="form-group form-group-last">
                        <div class="alert alert-secondary" role="alert">
                            <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                            <div class="alert-text">
                                The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                        <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Static:</label>
                        <p class="form-control-static">email@example.com</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1">Example select</label>
                        <select class="form-control" id="exampleSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect2">Example multiple select</label>
                        <select multiple="" class="form-control" id="exampleSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group form-group-last">
                        <label for="exampleTextarea">Example textarea</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="reset" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </form>
            <!--end::Form-->            
        </div>
        <!--end::Portlet-->

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Textual HTML5 Inputs
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form class="kt-form kt-form--label-right">
                <div class="kt-portlet__body">
                    <div class="form-group form-group-last">
                        <div class="alert alert-secondary" role="alert">
                            <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                            <div class="alert-text">
                                Here are examples of <code>.form-control</code> applied to each textual HTML5 input type:
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Text</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-2 col-form-label">Search</label>
                        <div class="col-10">
                            <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-email-input" class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-2 col-form-label">URL</label>
                        <div class="col-10">
                            <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                        <div class="col-10">
                            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-password-input" class="col-2 col-form-label">Password</label>
                        <div class="col-10">
                            <input class="form-control" type="password" value="hunter2" id="example-password-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-2 col-form-label">Number</label>
                        <div class="col-10">
                            <input class="form-control" type="number" value="42" id="example-number-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
                        <div class="col-10">
                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-2 col-form-label">Date</label>
                        <div class="col-10">
                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-month-input" class="col-2 col-form-label">Month</label>
                        <div class="col-10">
                            <input class="form-control" type="month" value="2011-08" id="example-month-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-week-input" class="col-2 col-form-label">Week</label>
                        <div class="col-10">
                            <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-time-input" class="col-2 col-form-label">Time</label>
                        <div class="col-10">
                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-color-input" class="col-2 col-form-label">Color</label>
                        <div class="col-10">
                            <input class="form-control" type="color" value="#563d7c" id="example-color-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-email-input" class="col-2 col-form-label">Range</label>
                        <div class="col-10">
                            <input class="form-control" type="range">
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-10">
                                <button type="reset" class="btn btn-success">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--end::Portlet-->
    </div>
</div>

@endsection