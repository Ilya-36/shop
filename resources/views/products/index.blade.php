<h1>Products</h1>
<ul>
    @foreach($products as $product)
        <li>
            {{ $product->name }} - ${{ $product->price }}
            <form method="post" action="{{ route('cart.add', $product->id) }}">
                @csrf
                <button type="submit">Add to Cart</button>
            </form>
        </li>
    @endforeach
</ul>
