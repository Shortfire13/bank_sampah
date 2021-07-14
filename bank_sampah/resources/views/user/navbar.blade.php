  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{route('index')}}">CallTrash</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class=""><a href="{{route('riwayat')}}">Riwayat</a></li>
          <li class=""><a href="{{route('index')}}">Home</a></li>
          <li><a href="{{route('register')}}">Register</a></li>
          <li class="get-started"><a href="{{route('login')}}">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
