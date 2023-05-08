 <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <!-- <img src="assets/img/logo1.png" title="Your Store" alt="Your Store" class="img-responsive"> -->
        {{-- <h1>Señor Churro<span></span></h1> --}}
        <img src="{{asset('assets/front/img/home.png')}}">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('front.home')}}">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#offers">Offers</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#staff">staff</a></li>
          <li><a href="#gallery">Gallery</a></li>
          {{-- <li><a href="#Branches">Branches</a></li> --}}
          <li><a href="#contact">Contact</a></li>

        @guest
            <li><a class="" href="{{route('login')}}"> Login</a>
        @else
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a href="#" class="dropdown-item">Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> logout</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
                    </li>
                </ul>
            </div>
        @endguest





{{--
        @guest
            <li class="dropdown"><a href="{{route('login')}}"> Log in<i class="bi bi-chevron-down dropdown-indicator"></i></a>
       @else
        <ul>
                <li><a href="testimonal.html" class="dropdown-item" onclick="event.preventDefault(); document.getEementByID('logout-form').submit();">logout</a></li>
                <li><a href="#">Profile</a></li>
                <form id="logout-form"action="{{route('logout')}}" method="POST">
                  @csrf
                 </form>
            </ul>
        </li>
        @endguest --}}



    {{-- <a href="#" class="nav-link dropbown-toggle" data-toggle="dropdown">{{Auth::user()->name}}</a> --}}

            <!-- <div i class="bi bi-cart"></i></div> -->
        </ul>
        {{-- <div class="bi bi-cart"><a href="#cart"></a></div> --}}
      </nav><!-- .navbar -->
 <!--<a class="btn-register" href="register.html">register</a> -->
 {{-- <a class="btn-Login" href="{{route('login')}}">Log in</a> --}}
      <a class="btn-Login" href="">cart</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>





    </div>
  </header><!-- End Header -->
