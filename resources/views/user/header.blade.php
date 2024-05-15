<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{ url('testlogin') }}"><h2>Artizano <em> Pro</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/')}}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{ route('showvideopage') }}">Our Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contactus') }}">Contact Us</a>
            </li>
            <li class="nav-item">
              @if(Route::has('login'))
              @auth
              <a class="nav-link" href="{{ url('showcart') }}"><i class="fas fa-shopping-cart"></i>Cart[{{$count}}]
              

              </a>
              @endif
              @endauth
            </li>
            <li class="nav-item">
              @auth
                  <div class="btn-group">
                      <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ Auth::user()->name }}
                      </button>
                      <div class="dropdown-menu">
                          
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              Logout
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </div>
              @else
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}" style="margin-left:-50px;">Login</a></li>
                  @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">Register</a></li>
                  @endif
              @endauth
          </li>
          
          
          </ul>
          
        </div>
      </div>
    </nav>
  </header>