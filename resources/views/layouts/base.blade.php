<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link rel="stylesheet" href="{{asset('asset/style.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css"/>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

      @livewireStyles
    <title>Find Anything</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-custom_nav">
        <div class="container-fluid">
          <a class="navbar-brand logo" href="#"><img class="logo2" src="{{asset('asset/image/2.png')}}" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
              </li>
              
            </ul>

            <span class="navbar-text">
            @if(Route::has('login'))
                    @auth
                    <div class="dropdown">
                          <a class="dropdown-toggle log_in_link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-user drop_username" style="font-size:25px;"><span class="drop_username">{{Auth::user()->name}}</span> </i>
                          </a>

                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item drop_log_link" href="{{ url('/user/profile') }}">Profile</a></li>
                            <li><a class="dropdown-item drop_log_link" href="{{route('user.Shop')}}">My Shop</a></li>
                            <li>
                              <a class="dropdown-item drop_log_link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                              <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                              </form>
                            </li>
          
                          </ul>
                        </div>
                    
                      
                    @else
                      <a href="{{route('login')}}" class="log_reg fw-bold">Log in</a>
                      <a href="{{route('register')}}" class="log_reg fw-bold">Register</a>
                  @endif
                  @endif
            </span>
            
          </div>
        </div>
      </nav>





    {{$slot}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.js"></script>
  

    <script>
      const glide = document.querySelector(".glide");
      if (glide)
        new Glide(glide, {
          type: "carousel",
          startAt: 0,
          perView: 1,
          hoverpause: true,
          gap: 0,
          autoplay: 4000,
          animationDuration: 800,
          animationTimingFunc: "linear",
        }).mount();
    </script>

    @livewireScripts
</body>
</html>