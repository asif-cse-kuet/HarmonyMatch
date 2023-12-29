<section>
    <h1>List of Products</h1>

    <form method="GET" action="{{ route('products.search') }}">
        <label for="selectedOption">Select Category:</label>
        <select name="selectedOption" id="selectedOption">
            <option value="">All Categories</option>
            <option value="Electronics">Electronics</option>
            <option value="Clothing">Clothing</option>
            <!-- Add more options as needed -->
        </select>
        <button type="submit">Search</button>
    </form>

    @isset($products)
    <ul>
        @foreach ($products as $product)
        <li>
            ID: {{ $product->id }} - Name: {{ $product->name }} - Price: {{ $product->price }}
        </li>
        @endforeach
    </ul>
    @else
    <p>No products found</p>
    @endisset
</section>