@include('header.topbar')
 <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Murtaki <span>SQ</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ ($active === "home")?'active':'' }} " href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="
            ">News</a></li>
          <li><a class="nav-link scrollto" href="#services">Category</a></li>
           <li><a class="nav-link scrollto {{ ($active === "about")?'active':'' }} scrollto" href="/about">About me</a></li>
           @auth
            <li class="dropdown"><a href="#"><span><strong>{{ auth()->user()->name }}</strong></span></a>
            <ul>
              <li><a href="/dashboard">Dashboard</a></li>
              <li>
                <a href="">
                <form action="/logout" method="post">
                    @csrf
                    <button style="text-" class="border-0 bg-white fw-bold">Logout</button>
                </form>
                </a>
              </li>
            </ul>
          </li>
          @else
          <li><a class="nav-link scrollto {{ $active === "login" }}" href="/login">Login</a></li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
