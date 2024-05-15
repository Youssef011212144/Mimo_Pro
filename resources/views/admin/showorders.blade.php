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
    <style>
        .btn-custom {
    background-color:#191c24;
    color: inherit;
}
    
    </style>
    
</head>
<body>
    @include('admin.siderbar')
    
    @include('admin.navbar')
    
    
    <div style="padding:100px;" align="center">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <th scope="row">{{ $order->order_number }}</th>
                    <td>{{ $users[$order->user_id]->name }}</td>
                    <td>{{ $users[$order->user_id]->phone }}</td>
                    <td>
                        <form action="{{ route('viewOrderItems', $order->id) }}" method="GET">
                            <button type="submit" class="btn btn-sm btn-custom">View</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    @include('admin.js')
    
    
    


    





</body>
</html>