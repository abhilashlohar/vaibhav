<table>
    <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Amount</th>
    </tr>

    <?php $totalAmount = 0; ?>

    @foreach ($cartItems as $cartItem)
    <tr>
        <td>{{ $cartItem->product->name }}</td>
        <td>{{ $cartItem->quantity }}</td>
        <td>{{ $cartItem->product->sale_price }}</td>
        <td>{{ $cartItem->quantity*$cartItem->product->sale_price }}</td>

        <?php $totalAmount += $cartItem->quantity*$cartItem->product->sale_price; ?>

    </tr>
    @endforeach
    
    <tr>
        <th colspan="4" align="right">{{ $totalAmount }}</th>
    </tr>
</table>

<div>
    <p>Total items: <b>{{ count($cartItems) }}</b></p>
    <p>Total amount: <b>{{ $totalAmount }}</b></p>
    <a href="">CHECKOUT</a>
</div>