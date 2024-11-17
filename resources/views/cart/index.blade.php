<h1>Shopping Cart</h1>
<ul>
    @foreach($cartItems as $item)
        <li>
            {{ $item->product->name }} - ${{ $item->product->price }} x {{ $item->quantity }} = ${{ $item->product->price * $item->quantity }}
            <form method="post" action="{{ route('cart.remove', $item->product->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Remove</button>
            </form>
        </li>
    @endforeach
</ul>
<p>Total: ${{ $totalPrice }}</p>
<form method="post" action="{{ route('checkout') }}">
    @csrf
    <button type="submit">Checkout</button>
</form>
