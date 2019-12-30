<div>
    <h3>Billing Address</h3>
    name: <input type="text" name="name">
    <br>
    mobile no: <input type="text" name="mobile">
    <br>
    Address: <input type="text" name="address">
    <br>
    PINcode: <input type="text" name="pincode">
    <br>
    Landmark: <input type="text" name="landmark">
    <br>
    State: <input type="text" name="state">
</div>

<div>
    <h3>Shipping Address</h3>
    <label><input type="checkbox" name="same_as_billing">Same as billing address</label>
    <br>
    name: <input type="text" name="name">
    <br>
    mobile no: <input type="text" name="mobile">
    <br>
    Address: <input type="text" name="address">
    <br>
    PINcode: <input type="text" name="pincode">
    <br>
    Landmark: <input type="text" name="landmark">
    <br>
    State: <input type="text" name="state">
</div>


<div>
    <p>Total Items: {{ $totalItems }}</p>
    <p>Order Amount: {{ $totalAmount }}</p>

    <label>Payment Options</label>
    <label><input type="radio" name="Payment_mode"> Online</label>
    <label><input type="radio" name="Payment_mode"> COD</label>
    <button type="button">Place Order</button>
</div>