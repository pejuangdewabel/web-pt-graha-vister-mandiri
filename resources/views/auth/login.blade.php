<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Halaman Login</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ url('backend/css/feather.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ url('backend/css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ url('backend/css/app-light.css') }}" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{ url('backend/css/app-dark.css') }}" id="darkTheme">    
    
  </head>
  <body class="dark">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <form action="{{ route('post-login') }}" method="POST" class="col-lg-3 col-md-4 col-10 mx-auto text-center" enctype="multipart/form-data">
          @csrf  
          <h1 class="mb-3">Halaman <strong class="login">Login</strong></h1>
          <h3 class="mb-3">PT GRAHA VISTER MANDIRI</h3>
          <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="Masukkan Email" name="email" required>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control form-control-lg" placeholder="Masukkan Password" name="password" required="">
          </div>
          <div class="checkbox mb-2">
            
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Silahkan Masuk</button>
          <a class="btn btn-lg btn-danger btn-block" href="{{ route('home') }}">Kembali Ke Home</a>
          <p class="mt-3 mb-3 text-muted">© 2021</p>
        </form>
      </div>
    </div>
    <script src="{{ url('backend/js/jquery.min.js') }}"></script>
    <script src="{{ url('backend/js/popper.min.js') }}"></script>
    <script src="{{ url('backend/js/moment.min.js') }}"></script>
    <script src="{{ url('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('backend/js/simplebar.min.js') }}"></script>
    <script src='{{ url('backend/>js/daterangepicker.js') }}'></script>
    <script src='{{ url('backend/js/jquery.stickOnScroll.js') }}'></script>
    <script src="{{ url('backend/js/tinycolor-min.js') }}"></script>
    <script src="{{ url('backend/js/config.js') }}"></script>
    <script src="{{ url('backend/js/apps.js') }}"></script>
  </body>
</html>
</body>
</html>