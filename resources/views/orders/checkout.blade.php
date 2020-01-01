
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

















