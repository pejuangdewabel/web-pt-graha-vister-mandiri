<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <img src="{{ url('image/logo.jpg') }}" alt="">
      </div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block text-success">
        <ul>
          <li class="active"><a href="{{ route('home') }}"><strong>Home</strong></a></li>
          <li><a href="{{ route('about') }}">Tentang</a></li>
          <li><a href="{{ route('dijual') }}">Properti Dijual</a></li>
          <li><a href="{{ route('disewakan') }}">Properti Disewakan</a></li>          
        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{ route('login') }}" class="get-started-btn bg-success">Login</a>

    </div>
</header><!-- End Header -->