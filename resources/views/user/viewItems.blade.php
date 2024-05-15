<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Order Number: {{ $order->order_number }}</h2>
<p>Name: {{ $order->user->name }}</p>
<p>Phone: {{ $order->user->phone }}</p>
<h3>Order Items:</h3>
<ul>
    @foreach($orderItems as $item)
        <li>
            Product: {{ $item->product_title }},
            Quantity: {{ $item->quantity }},
            Price: {{ $item->price }}
        </li>
    @endforeach
</ul>

</body>
</html>