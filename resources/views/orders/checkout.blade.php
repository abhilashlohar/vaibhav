@extends ('layouts.front')

@section ('header-style')
<style>
    body.checkout{
        position: relative;
    }
</style>
@endsection

@section ('content')
<form  action="{{ route('saveCheckout') }}" method="POST" class="needs-validation" novalidate>
@csrf
<section class="shopping-address--wrapper">
    <div class="container-fluid">
       <div class="shopping-address--grids">
          <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
             <div class="organize-address--wrap">
                <div class="billing-address--block">
                   

                        <h4 class="mb-3">Billing Address</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Name*</label>
                                    <input type="text" class="form-control" id="bill_name" name="bill_name" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid name is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="mobileno">Mobile No.*</label>
                                    <input type="text" class="form-control" id="bill_mobile" name="bill_mobile" placeholder="" required>
                                     <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                     </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label for="address">Address*</label>
                                    <input type="text" class="form-control" id="bill_address" name="bill_address" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter your billing address.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="pincode">Pincode*</label>
                                    <input type="text" class="form-control" id="bill_pincode" name="bill_pincode" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter your pincode.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="city">City*</label>
                                    <input type="text" class="form-control" id="bill_city" name="bill_city" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter your city.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="state">State*</label>
                                    <input type="text" class="form-control" id="bill_state" name="bill_state" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter your state.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="landmark">Landmark</label>
                                    <input type="text" class="form-control" id="bill_landmark" name="bill_landmark" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter your landmark.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <br/>
                        <h4 class="my-3">Shipping Address</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Name*</label>
                                    <input type="text" class="form-control" id="ship_name" name="ship_name" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid name is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="mobileno">Mobile No.*</label>
                                    <input type="text" class="form-control" id="ship_mobile" name="ship_mobile" placeholder="" required>
                                     <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                     </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label for="address">Address*</label>
                                    <input type="text" class="form-control" id="ship_address" name="ship_address" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter your billing address.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="pincode">Pincode*</label>
                                    <input type="text" class="form-control" id="ship_pincode" name="ship_pincode" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter your pincode.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="city">City*</label>
                                    <input type="text" class="form-control" id="ship_city" name="ship_city" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter your city.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="state">State*</label>
                                    <input type="text" class="form-control" id="ship_state" name="ship_state" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter your state.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="landmark">Landmark</label>
                                    <input type="text" class="form-control" id="ship_landmark" name="ship_landmark" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter your landmark.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <hr class="mb-4">
                      
                        
                </div>
             </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
             <div class="shopping-cart--values">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                   <div class="p-4">
                      <ul class="list-unstyled mb-4">
                         <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total Items</strong><strong>{{ $totalItems }}</strong></li>
                         <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>0.00</strong></li>
                         <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>0.00</strong></li>
                         <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Total</strong>
                            <h5 class="font-weight-bold">{{ $totalAmount }}</h5>
                         </li>
                         <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Payment Options</strong>
                            <label><input type="radio" name="payment_mode" value="online"> Online</label>
                            <label><input type="radio" name="payment_mode" value="cod" checked="checked"> COD</label>
                         </li>
                      </ul>
                      <button class="btn btn-dark rounded-pill py-2 btn-block" type="submit">Proceed to Checkout</button>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

</form>
@endsection

{{--
<form action="{{ route('saveCheckout') }}" method="POST">
@csrf
    <div>
        <h3>Billing Address</h3>
        name: <input type="text" name="bill_name" required>
        <br>
        mobile no: <input type="text" name="bill_mobile" required>
        <br>
        Address: <input type="text" name="bill_address" required>
        <br>
        PINcode: <input type="text" name="bill_pincode" required>
        <br>
        Landmark: <input type="text" name="bill_landmark" required>
        <br>
        State: <input type="text" name="bill_state" required>
    </div>

    <div>
        <h3>Shipping Address</h3>
        <label><input type="checkbox" name="same_as_billing" value="1">Same as billing address</label>
        <br>
        name: <input type="text" name="ship_name" required>
        <br>
        mobile no: <input type="text" name="ship_mobile" required>
        <br>
        Address: <input type="text" name="ship_address" required>
        <br>
        PINcode: <input type="text" name="ship_pincode" required>
        <br>
        Landmark: <input type="text" name="ship_landmark" required>
        <br>
        State: <input type="text" name="ship_state" required>
    </div>


    <div>
        <p>Total Items: {{ $totalItems }}</p>
        <p>Order Amount: {{ $totalAmount }}</p>

        <label>Payment Options</label>
        <label><input type="radio" name="payment_mode" value="online"> Online</label>
        <label><input type="radio" name="payment_mode" value="cod"> COD</label>
        <button type="submit">Place Order</button>
    </div>
</form>

 --}}
