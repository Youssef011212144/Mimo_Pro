<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="asset('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap')" rel="stylesheet">

    <title>video </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">



    <link rel="stylesheet" href="{{ asset('dossiervideo/fontawesome/css/all.min.css') }}"> 
    <link rel="stylesheet" href="{{asset('dossiervideo/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dossiervideo/css/templatemo-video-catalog.css') }}">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap') }}" rel="stylesheet">
     <!-- Additional CSS Files -->
     <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/templatemo-sixteen.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
 
    <style>
      /* Custom styling for the WhatsApp icon */
      .tm-bg-green {
          background-color: #25D366; /* WhatsApp green color */
          padding: 10px;
          border-radius: 5px;
          display: inline-block;
      }

      .tm-share-button {
          text-decoration: none;
          color: white; /* Text color for the WhatsApp icon */
      }
  </style>



  </head>
  <body>
    @include('user.header')
    <div class="tm-page-wrap mx-auto">
     
        <div class="tm-welcome-container tm-fixed-header tm-fixed-header-1">
          <div class="text-center">
            <p class="pt-5 px-3 tm-welcome-text tm-welcome-text-2 mb-1 text-white mx-auto">Background image can be fixed. Content will simply slide over.</p>                	
          </div>                
              </div>
  
        <!-- Header image -->
              <div id="tm-fixed-header-bg"></div> 
      </div>
  
      <!-- Page content -->
      <div class="container-fluid">
        <div class="mx-auto tm-content-container">
          <main>
            <div class="row mb-5 pb-4">
              <div class="col-12">
                <!-- Video player 1422x800 -->
                <video width="1422" height="800" controls autoplay>
                  <source src="video/wheat-field.mp4" type="video/mp4">							  
                Your browser does not support the video tag.
                </video>
              </div>
            </div>
            <div class="row mb-5 pb-5">
              <div class="col-xl-8 col-lg-7">
                <!-- Video description -->
                <div class="tm-video-description-box">
                  <h2 class="mb-5 tm-video-title">Mauris dapibus urna nec ipsum posuere</h2>
                  <p class="mb-4">Cras dictum pretium est, et imperdiet ex. Fusce vitae vestibulum ipsum. Maecenas ultricies ipsum a urna ullamcorper, id interdum est blandit. Vivamus sit amet justo sed erat iaculis consequat. Nulla suscipit posuere lectus ut venenatis. Proin sed orci eget tellus euismod vulputate eu eu arcu.</p>
                  <p class="mb-4">Etiam a bibendum lorem. Curabitur ac bibendum odio. Vivamus euismod dui mauris, ut tincidunt mi congue quis. Phasellus luctus orci dolor, a luctus massa tincidunt vitae. Integer sit amet odio id libero tincidunt dignissim in eget arcu.</p>
                  <p class="mb-4">Aliquam tristique ut magna sit amet tincidunt. Sed tempor tellus nulla, molestie luctus lectus tincidunt id. Cras euismod leo a urna placerat, vel blandit turpis fermentum.</p>	
                </div>							
              </div>
              <div class="col-xl-4 col-lg-5">
                <!-- Share box -->
                <div class="tm-bg-gray tm-share-box">
                  <h6 class="tm-share-box-title mb-4">Share this video</h6>
                  <div class="mb-5 d-flex">
                  </a>
                    <a href="" class="tm-bg-white tm-share-button"><i class="fab fa-facebook"></i></a>
                    <a href="" class="tm-bg-white tm-share-button"><i class="fab fa-twitter"></i></a>
                    <a href="" class="tm-bg-white tm-share-button"><i class="fab fa-pinterest"></i></a>
                
                    <a href="https://wa.me/1234567890" class="tm-bg-green tm-share-button" target="_blank">
                      <i class="fab fa-whatsapp"></i>
                  </a>
                  
                    



                  </div>
                  <p class="mb-4">Author: <a href="https://templatemo.com" class="tm-text-link">TemplateMo</a></p>
                  <button class="btn btn-primary tm-likes-box" data-csrf="{{ csrf_token() }}">
                    <i class="fas fa-heart mr-3 tm-liked-icon"></i>
                    <i class="far fa-heart mr-3 tm-not-liked-icon"></i>
                    <span id="tm-likes-count">0 likes</span>
                </button>
                
                  
                  <div>
                    <button class="btn btn-primary p-0 tm-btn-animate tm-btn-download tm-icon-download"><span>Download Video</span></button>	
                  </div>								
                </div>
              </div>
            </div>
            <div class="row pt-4 pb-5">
              <div class="col-12">
                <h2 class="mb-5 tm-text-primary">Related Videos for You</h2>
                <div class="row tm-catalog-item-list">
                  @foreach($data as $product)
                              <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                                  <div class="position-relative tm-thumbnail-container">
                                      <img src="dossiervideo/img/tn-01.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                      <a href="/productimage/{{ $product->video }}" class="position-absolute tm-img-overlay">
                                          <i class="fas fa-play tm-overlay-icon"></i>
                                      </a>
                                  </div>    
                                  <div class="p-3 tm-catalog-item-description">
                                      <h3 class="tm-text-gray text-center tm-catalog-item-title">{{ $product->title }}</h3>		                                
                                  </div>
                              </div> @endforeach
                              <div  class="d-flex justify-content-center">
  {!! $data->links() !!}
</div>
                        
            </div>
          </main>
  
          <!-- Subscribe form and footer links -->
                  <div class="row mt-5 pt-3">
                      <div class="col-xl-6 col-lg-12 mb-4">
                          <div class="tm-bg-gray p-5 h-100">
                              <h3 class="tm-text-primary mb-3">Do you want to get our latest updates?</h3>
                              <p class="mb-5">Please subscribe our newsletter for upcoming new videos and latest information about our
                                  work. Thank you.</p>
                              <form action="" method="GET" class="tm-subscribe-form">
                                  <input type="text" name="email" placeholder="Your Email..." required>
                                  <button type="submit" class="btn rounded-0 btn-primary tm-btn-small">Subscribe</button>
                              </form>
                          </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                          <div class="p-5 tm-bg-gray">
                              <h3 class="tm-text-primary mb-4">Quick Links</h3>
                              <ul class="list-unstyled tm-footer-links">
                                  <li><a href="#">Duis bibendum</a></li>
                                  <li><a href="#">Purus non dignissim</a></li>
                                  <li><a href="#">Sapien metus gravida</a></li>
                                  <li><a href="#">Eget consequat</a></li>
                                  <li><a href="#">Praesent eu pulvinar</a></li>
                              </ul>    
                          </div>                        
                      </div>
                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                          <div class="p-5 tm-bg-gray h-100">
                              <h3 class="tm-text-primary mb-4">Our Pages</h3>
                              <ul class="list-unstyled tm-footer-links">
                                  <li><a href="#">Our Videos</a></li>
                                  <li><a href="#">License Terms</a></li>
                                  <li><a href="#">About Us</a></li>
                                  <li><a href="#">Contact</a></li>
                                  <li><a href="#">Privacy Policies</a></li>
                              </ul>
                          </div>                        
                      </div>
                  </div> <!-- row -->
  
                  <footer class="row pt-5">
                      <div class="col-12">
                          <p class="text-right">Copyright 2020 The Video Catalog Company 
                          
                          - Designed by <a href="https://templatemo.com" rel="nofollow" target="_parent">TemplateMo</a></p>
                      </div>
                  </footer>
        </div> <!-- .tm-content-container -->
      </div>
    </div>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Additional Scripts -->
    <script src="{{asset('assets/js/custom.js') }}"></script>
    <script src="{{asset('assets/js/owl.js')  }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  
    <script src="{{asset('dossiervideo/js/jquery-3.4.1.min.js')}}"></script>
      <script src="{{ asset('dossiervideo/js/bootstrap.min.js') }}"></script>
      <script>
        $(document).ready(function() {
            // Retrieve the like count from localStorage or set it to 0
            var likeCount = parseInt(localStorage.getItem('likeCount')) || 0;
    
            // Display the initial like count
            $('#tm-likes-count').html(likeCount + ' likes');
    
            $('.tm-likes-box').click(function(e) {
                e.preventDefault();
    
                // Get the CSRF token from the data attribute
                var csrfToken = $(this).data('csrf');
    
                $(this).toggleClass('tm-liked');
    
                // Update the like count based on the button state
                if ($(this).hasClass('tm-liked')) {
                    likeCount++;
                } else {
                    likeCount = Math.max(0, likeCount - 1); // Ensure the count does not go below 0
                }
    
                // Update the displayed like count
                $('#tm-likes-count').html(likeCount + ' likes');
    
                // Store the updated like count in localStorage
                localStorage.setItem('likeCount', likeCount);
    
                // Make an AJAX request to update the like count on the server
                $.ajax({
                    type: 'POST',
                    url: '/update-like-count', // Replace with your Laravel route
                    data: { _token: csrfToken, likeCount: likeCount },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
  </body>
  </html>


