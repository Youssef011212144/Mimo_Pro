<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User Name</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->order_number }}</td>
                    <td>{{ $users[$order->user_id]->name }}</td>
                    <td>{{ $users[$order->user_id]->phone }}</td>
                    <td>
                        <form action="{{ route('viewOrderItems', $order->id) }}" method="GET">
                            <button type="submit">View</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    
    


    





</body>
</html>