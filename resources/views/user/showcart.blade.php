<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    

    


    <title>Mimoza Peinture </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">

<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <style>
      .col-md-12 {
    display: flex;
    justify-content: center; /* Horizontally center-align */
    align-items: center; /* Vertically center-align */
    height: 100%; /* Ensures full height of parent container */
    .col-md-12 {
    text-align: center; /* Horizontally center-align */
}

}

    </style>

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    @include('user.header')
    
    <div style="padding:100px;" align="center">
        
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col"># ProdUCT iD</th>
                    <th scope="col">Product_title</th>
                    <th scope="col">QUANTITY</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                      $total = 0; // Initialize total outside of the loop
                  @endphp
                  @foreach($cart as $carts)
                  
                  <tr>
                      <th scope="row">{{ $carts->id }}</th>
                      <td>{{ $carts->product_title }}</td>
                      <td>{{ $carts->quantity }}</td>
                      <td>{{ $carts->price }}</td>
                      @php
                          $subtotal = $carts->quantity * $carts->price; // Calculate subtotal for this item
                          $total += $subtotal; // Add subtotal to total
                      @endphp
                      <td style="padding:20px"><a class="btn btn-danger" href="{{ route('deleteproductfromcart', $carts->id) }}">Delete</a></td>
                  </tr>
                  @endforeach
              </tbody>
              </table>
              <form action="{{ route('placeorder') }}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-primary">Commande</button>
              </form>
              
              
              
            
        </div>
        <div class="col-md-12">
          <span id="total-price"><h5 >Price Total = {{ $total }}</span> <!-- Display total --></h5>
      </div>
        </div>
             
    @include('user.scripts')
    </body>