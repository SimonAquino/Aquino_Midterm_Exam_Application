<!DOCTYPE html>
<html>
<head>
    <title>Anime Movie Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f9;
        }
        h1 {
            color: #333;
        }
        .product-list {
            list-style: none;
            padding: 0;
        }
        .product-item {
            background: #fff;
            margin: 10px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 50%;
            text-align: left;
        }
        .product-item h2 {
            color: #007bff;
            margin: 0;
        }
        .product-item p {
            color: #555;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Anime Movie Products</h1>
    <ul class="product-list">
        @foreach($products as $product)
            <li class="product-item">
                <h2>{{ $product['title'] }}</h2>
                <p>Genre: {{ $product['genre'] }}</p>
                <p>Price: ${{ number_format($product['price'], 2) }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
