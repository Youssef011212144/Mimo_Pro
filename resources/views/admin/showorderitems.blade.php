<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
    
</head>
<body>
    
    
    
    
    
    <div style="padding:100px;" align="center">
        <h2>Order Number: {{ $order->order_number }}</h2>
<p>Name: {{ $order->user->name }}</p>
<p>Phone: {{ $order->user->phone }}</p>
<h3>Order Items:</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"> Product</th>
                    <th scope="col">QUANTITY</th>
                    <th scope="col">PRICE</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orderItems as $item)
                <tr>
                    <td>{{ $item->product_title }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price }}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    @include('admin.js')
</body>
</html>
