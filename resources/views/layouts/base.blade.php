<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.css')}}" />
  <link rel="stylesheet" href="{{asset('asset/styles2.css')}}">
  <link rel="stylesheet" href="{{asset('asset/res.css')}}">

  @livewireStyles
  <title>Find Anything</title>
</head>

<body>


  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="#">
          <span>
            Find Anything
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                About Us
              </a>
            </li>

            @if(Route::has('login'))
            @auth


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user"><span class="nav-user">{{Auth::user()->name}}</span> </i>
              </a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ url('/user/profile') }}">Profile</a></li>
                <li><a class="dropdown-item" href="{{route('user.Shop')}}">My Shop</a></li>
                @if(Auth::user()->utype === 'ADM')
                <li><a class="dropdown-item" href="{{route('admin.dasboard')}}">Admin Panel</a></li>
                @endif
                <li>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                  <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                  </form>
                </li>
              </ul>
        </div>

        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">
            Login
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">
            Register
          </a>
        </li>
        @endif
        @endif

        </ul>

      </nav>
    </header>
    <!-- end header section -->

    <!-- slider section -->

    {{$slot}}
    <!-- end shop section -->


    <!-- info section -->

    <section class="info_section  layout_padding2-top">
      <div class="social_container">
        <div class="social_box">
          <a href="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-youtube" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <div class="info_container ">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <h6>
                ABOUT US
              </h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
                consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
              </p>
            </div>
            <div class="col-md-6 col-lg-4">
              <h6>
                NEED HELP
              </h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
                consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
              </p>
            </div>
            <div class="col-md-6 col-lg-4">
              <h6>
                CONTACT US
              </h6>
              <div class="info_link-box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span> Dhaka, Bangladesh </span>
                </a>
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>+880123456789</span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span> findanything.info@gmail.com</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer section -->
      <footer class=" footer_section">
        <div class="container">
          <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="#">FindAnything</a>
          </p>
        </div>
      </footer>
      <!-- footer section -->

    </section>

    <!-- end info section -->







    <script src="{{asset('asset/js/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('asset/js/js/bootstrap.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="{{asset('asset/js/js/custom.js')}}"></script>





    <script>

    </script>

    @livewireScripts
</body>

</html>