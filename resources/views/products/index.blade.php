<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
@foreach ($CityBikes as $citybike)
    <h2>{{ $citybike->CB_name }}</h2>
    <p>{{ $citybike->CB_price }}</p>
    <p>{{ $citybike->CB_color }}</p>
    <form action="{{ route('cart.add', ['type' => 'bike', 'id' => $citybike->CB_ProdNo]) }}" method="post">
        @csrf
        <button type="submit">Add to Cart</button>
    </form>
@endforeach
@foreach ($RoadBikes as $roadbike)
    <h2>{{ $roadbike->RB_name }}</h2>
    <p>{{ $roadbike->RB_price }}</p>
    <p>{{ $roadbike->RB_color }}</p>
    <form action="{{ route('cart.add', ['type' => 'bike', 'id' => $roadbike->RB_ProdNo]) }}" method="post">
        @csrf
        <button type="submit">Add to Cart</button>
    </form>
@endforeach
<a href="{{ route('cart.show') }}">View Cart</a>

</body>
</html>
