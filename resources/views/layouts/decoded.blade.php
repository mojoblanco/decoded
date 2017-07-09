<!DOCTYPE html>
<html lang="en">
<head>
  <title>Decoded</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="John mojoblanco Olawale"

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Poppins:400,600,700%7CMerriweather:400,400i,700%7CPinyon+Script' rel='stylesheet'>

  <link rel="stylesheet" href="{{ asset('css/site.css') }}">

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body class="relative" data-spy="scroll" data-offset="60" data-target=".navbar">
    
  <div class="main-wrapper oh">

    <header class="nav-type-1 transparent fixed-on-mobile">

      <nav class="navbar navbar-static-top">
        <div class="navigation">
          <div class="container-fluid semi-fluid relative">

            <div class="row">

              <div class="navbar-header">
                <!-- Logo -->
                <div class="logo-container">
                  <div class="logo-wrap">
                    <a href="i{{ route('home') }}">
                      {{-- <img class="logo" src="img/logo_light.png" alt="logo">
                      <img class="logo-dark" src="img/logo_dark.png" alt="logo"> --}}
                      Decoded
                    </a>
                  </div>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div> <!-- end navbar-header -->



            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
    </header>

    <div class="content-wrapper oh">

        @yield('content')

      <!-- Footer Type-2 -->
      <footer class="footer footer-type-2 bg-dark">
        <div class="container">
          <div class="footer-widgets">
            <div class="row">

              <div class="col-md-4 col-md-offset-4">
                <div class="footer-logo local-scroll text-center mb-50 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s">
                  <img class="logo" src="img/logo_light.png" alt="logo">
                </div>

                <div class="footer-socials">
                  <div class="social-icons dark rounded text-center">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="bottom-footer">
            <div class="copyright text-center">
              <span>
                &copy; {{ date('Y') }} Decoded
              </span>
            </div>
          </div>
        </div> <!-- end container -->
      </footer> <!-- end footer -->


      <div id="back-to-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
      </div>

    </div> <!-- end content wrapper -->
  </div> <!-- end main wrapper -->

  <script src="{{ asset('js/site.js') }}"></script>

</body>
</html>
