<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadgets Store</title>
</head>
<body>
    <h1>Gadget Lists</h1>
    @foreach ($products as $product)
        <h2>{{ $product['name'] }}</h2>
        <h3>{{ $product['brand'] }}</h3>
        <p>{{ $product['description'] }}</p>
        <h3>{{ $product['price'] }}</h3>
    @endforeach
</body>
</html>
