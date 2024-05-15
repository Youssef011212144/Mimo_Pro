<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    

    <style>
      /* Hide the button by default */
.add-to-cart-btn {
    display: none;
}

/* Show the button when hovering over the product image */
.product-item:hover .add-to-cart-btn {
    display: block;
    
}
/* Hide the default arrows */
.quantity-input::-webkit-inner-spin-button,
.quantity-input::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Styling for the "+" and "-" buttons */
.quantity-input {
    appearance: textfield;
    -moz-appearance: textfield;
    width: 70px;
    text-align: center;
}

/* Styling for the "+" and "-" buttons */
.quantity-input:focus {
    outline: none;
    border: none;
}


    </style>


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
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
@include('user.product')

   

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>QUI SOMME NOUS</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
              <ul class="featured-list">
                <li><a href="#">Peintre en Bâtiment</a></li>
                <li><a href="#">Peinture Carrosseriet</a></li>
                <li><a href="#">Peinture décorative</a></li>
                <li><a href="#">Peinture industrielle</a></li>
                <li><!-- In your signup view -->
                  <a href="{{ route('google.login') }}" class="btn btn-google">Sign up with Google</a></li>
                <li><!-- navbar.blade.php -->
                  <a href="{{ route('viewCart') }}" class="btn btn-success">View Cart</a></li>
                    
                
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    // Add event listeners for each product's quantity input and buttons
    document.querySelectorAll('.product-item').forEach(function(product) {
        const quantityInput = product.querySelector('.quantity-input');
        const minusBtn = product.querySelector('.minus-btn');
        const plusBtn = product.querySelector('.plus-btn');
        
        // Decrement quantity
        minusBtn.addEventListener('click', function() {
            if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
            }
        });
        
        // Increment quantity
        plusBtn.addEventListener('click', function() {
            quantityInput.value = parseInt(quantityInput.value) + 1;
        });
        
        // Add click event listener to each product image
        product.querySelector('img').addEventListener('click', function() {
            // Toggle visibility of the add-to-cart form
            var addForm = product.querySelector('.add-to-cart-form');
            // Hide all forms
            document.querySelectorAll('.add-to-cart-form').forEach(function(form) {
                form.style.display = 'none';
            });
            // Show the form of the clicked product
            addForm.style.display = 'block';
        });
    });
});

  </script>
  <script >
    document.addEventListener('DOMContentLoaded', function() {
    // Add event listeners for each product's quantity input and buttons
    document.querySelectorAll('.product-item').forEach(function(product) {
        const quantityInput = product.querySelector('.quantity-input');
        const minusBtn = product.querySelector('.minus-btn');
        const plusBtn = product.querySelector('.plus-btn');

        // Function to update total price
        function updateTotalPrice() {
            let totalPrice = 0;
            document.querySelectorAll('.product-item').forEach(function(product) {
                const price = parseFloat(product.querySelector('.product-price').textContent.replace('$', ''));
                const quantity = parseInt(product.querySelector('.quantity-input').value);
                totalPrice += price * quantity;
            });
            document.getElementById('total-price').textContent = 'Total Price: $' + totalPrice.toFixed(2);
        }

        // Decrement quantity
        minusBtn.addEventListener('click', function() {
            if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
                updateTotalPrice();
            }
        });

        // Increment quantity
        plusBtn.addEventListener('click', function() {
            quantityInput.value = parseInt(quantityInput.value) + 1;
            updateTotalPrice();
        });

        // Add click event listener to each product image
        product.querySelector('img').addEventListener('click', function() {
            // Toggle visibility of the add-to-cart form
            var addForm = product.querySelector('.add-to-cart-form');
            // Hide all forms
            document.querySelectorAll('.add-to-cart-form').forEach(function(form) {
                form.style.display = 'none';
            });
            // Show the form of the clicked product
            addForm.style.display = 'block';
        });

        // Update total price initially
        updateTotalPrice();
    });
});

console.log('Price:', price)
            console.log('Quantity:', quantity)
    </script>
      
   
  
    @include('user.scripts')

    
  </body>

</html>
