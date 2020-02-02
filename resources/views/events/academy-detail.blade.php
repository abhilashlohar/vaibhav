@extends ('layouts.front')

@section ('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form  action="{{ route('event.academyBuy', $event->id) }}" method="POST"  class="kt-form" id="checkout-form" name="razorpayform">
    @csrf
    <button class="btn btn-dark rounded-pill py-2 btn-block" id="do-payment" type="button">Buy Now</button>
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature"  id="razorpay_signature">
</form>

@endsection

@section ('footer-script')
<script src="<?php echo url('/'); ?>/static/js/jquery.zoom.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

    // Checkout details as a json
    var options = <?php echo $json?>;

    /**
     * The entire list of Checkout fields is available at
     * https://docs.razorpay.com/docs/checkout-form#checkout-fields
     */
    options.handler = function (response){
        document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
        document.getElementById('razorpay_signature').value = response.razorpay_signature;
        document.razorpayform.submit();
    };

    // Boolean whether to show image inside a white frame. (default: true)
    options.theme.image_padding = false;

    options.modal = {
        ondismiss: function() {
            console.log("This code runs when the popup is closed");
        },
        // Boolean indicating whether pressing escape key
        // should close the checkout form. (default: true)
        escape: true,
        // Boolean indicating whether clicking translucent blank
        // space outside checkout form should close the form. (default: false)
        backdropclose: false
    };

    var rzp = new Razorpay(options);

    $(document).on('click', '#do-payment', function(){
        rzp.open();
        e.preventDefault();
    });


</script>
@endsection
