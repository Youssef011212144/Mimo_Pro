!-- cart.view.blade.php -->
@extends('layouts.app')  <!-- Assuming you have a layout file -->

@section('content')
    <h2>Shopping Cart</h2>

    @if(count($cartItems) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        <td>{{ $item->product->title }}</td>
                        <td>{{ $item->product->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p>Total: ${{ $total }}</p>

        <!-- Add a checkout or purchase button as needed -->
        <form action="{{ route('checkout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Checkout</button>
        </form>

    @else
        <p>Your cart is empty.</p>
    @endif

@endsection