<?php

session_start();
if (!isset($_SESSION['email'])){
  echo "You are logout";
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard | Your Account</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Price Slider Stylesheets -->
  <link rel="stylesheet" href="vendor/nouislider/nouislider.css">
  <!-- Google fonts - Playfair Display-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
  <!-- Google fonts - Poppins-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700">
  <!-- swiper-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
  <!-- Magnigic Popup-->
  <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.png">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body style="padding-top: 72px;">
  <header class="header">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand py-1" href="index.html"><img src="img/logo.svg" alt="Directory logo"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarExample2" aria-controls="navbarExample2" aria-expanded="false"
          aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarExample2">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active"><a class="nav-link" href="places-to-stay.html">Places to Stay <span
                  class="sr-only">(current)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="events.html">Events</a></li>
            <li class="nav-item"><a class="nav-link" href="things-to-do.html">Things to Do</a></li>
          </ul>

          <ul class="navbar-nav">
          
            <li class="nav-item dropdown ms-lg-3">
              <a id="userDropdownMenuLink" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"> 
              <i class="fa fa-user-circle user-icon"></i>  My Account</a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdownMenuLink">
                <a class="dropdown-item" href="dashboard.html">My Dashboard </a>
                <a class="dropdown-item" href="dashboard-reservations.html">My Reservations </a>
                <a class="dropdown-item" href="dashboard-notifications.html">Notifications </a>
                <a class="dropdown-item" href="dashboard-personal-info-billing.html">Personal Info &amp; Billing </a>
                <a class="dropdown-item" href="dashboard-login-security.html">Login &amp; Security </a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i
                    class="fas fa-sign-out-alt me-2 text-muted"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /Navbar -->
  </header>


  <section class="py-5">
    <div class="container">
      <!-- Breadcrumbs -->
      <ol class="breadcrumb ps-0  justify-content-start">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">My Dashboard </li>
      </ol>
      <h2 class="hero-heading mb-0" style="text-align:center">Welcome  <?php echo $_SESSION['email'];  ?></h2>
      <h1 class="hero-heading mb-0">My Dashboard</h1>
   
     
      <p class="text-muted mb-5">Manage your account and settings here.</p>
      <div class="row">
        <div class="col-6 col-md-3 mb-30px">
          <div class="card h-100 border-0 shadow hover-animate">
            <div class="card-body">
              <div class="icon-rounded bg-secondary-light mb-3">
                <svg class="svg-icon text-secondary w-2rem h-2rem">
                  <use xlink:href="#pay-by-card-1"> </use>
                </svg>
              </div>
              <h5 class="card-title mb-3"><a class="text-decoration-none text-dark stretched-link" href="dashboard-reservations.html">Reservations</a>
              </h5>
              <p class="text-muted card-text text-sm">Access my past and future reservations</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 mb-30px">
          <div class="card h-100 border-0 shadow hover-animate">
            <div class="card-body">
              <div class="icon-rounded bg-secondary-light mb-3">
                <svg class="svg-icon text-secondary w-2rem h-2rem">
                  <use xlink:href="#chat-app-1"> </use>
                </svg>
              </div>
              <h5 class="card-title mb-3"><a class="text-decoration-none text-dark stretched-link" href="dashboard-notifications.html">Notifications</a>
              </h5>
              <p class="text-muted card-text text-sm">Access my messages and notifications
              </p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 mb-30px">
          <div class="card h-100 border-0 shadow hover-animate">
            <div class="card-body">
              <div class="icon-rounded bg-secondary-light mb-3">
                <svg class="svg-icon text-secondary w-2rem h-2rem">
                  <use xlink:href="#identity-1"> </use>
                </svg>
              </div>
              <h5 class="card-title mb-3"><a class="text-decoration-none text-dark stretched-link"
                  href="dashboard-personal-info-billing.html">Personal Info &amp; Billing</a></h5>
              <p class="text-muted card-text text-sm">Edit personal details and billing information</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 mb-30px">
          <div class="card h-100 border-0 shadow hover-animate">
            <div class="card-body">
              <div class="icon-rounded bg-secondary-light mb-3">
                <svg class="svg-icon text-secondary w-2rem h-2rem">
                  <use xlink:href="#password-1"> </use>
                </svg>
              </div>
              <h5 class="card-title mb-3"><a class="text-decoration-none text-dark stretched-link"
                  href="dashboard-login-security.html">Login &amp; Security</a></h5>
              <p class="text-muted card-text text-sm">Update your password and secure your account</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  
  <!-- Footer-->
  <footer class="position-relative z-index-10 d-print-none">
    <div class="py-6 bg-gray-200 text-muted">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="fw-bold text-uppercase text-dark mb-3">
              <img src="img/logo.svg" alt="" class="navbar-brand py-1">
            </div>
            <p>Simplifying Group Travel</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-muted text-primary-hover" href="#" target="_blank"
                  title="twitter"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a class="text-muted text-primary-hover" href="#" target="_blank"
                  title="facebook"><i class="fab fa-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-muted text-primary-hover" href="#" target="_blank"
                  title="instagram"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a class="text-muted text-primary-hover" href="#" target="_blank"
                  title="pinterest"><i class="fab fa-pinterest"></i></a></li>
              <li class="list-inline-item"><a class="text-muted text-primary-hover" href="#" target="_blank"
                  title="vimeo"><i class="fab fa-vimeo"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
            <h6 class="text-uppercase text-dark mb-3">Quick Links</h6>
            <ul class="list-unstyled">
              <li><a class="text-muted" href="places-to-stay.html">Places to Stay</a></li>
              <li><a class="text-muted" href="events.html">Events</a></li>
              <li><a class="text-muted" href="things-to-do.html">Things to Do</a></li>
              <li><a class="text-muted" href="about.html">About Us</a></li>
              <li><a class="text-muted" href="contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
          </div>
          <div class="col-lg-4">
            <h6 class="text-uppercase text-dark mb-3">Subscribe</h6>
            <p class="mb-3"> Join our newsletter to stay up to date on exciting news and events.</p>
            <form action="#" id="newsletter-form">
              <div class="input-group mb-3">
                <input class="form-control bg-transparent border-dark border-end-0" type="email"
                  placeholder="Your Email Address" aria-label="Your Email Address">
                <button class="btn btn-outline-dark border-start-0" type="submit"> <i
                    class="fa fa-paper-plane text-lg"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright section of the footer-->
    <div class="py-4 fw-light bg-gray-800 text-gray-300">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-start">
            <p class="text-sm mb-md-0">&copy; 2021, Group Book. All rights reserved.
              <a class="" href="privacy-policy.html">&nbsp; Privacy Policy</a>
              <a class="" href="terms.html"> | Terms of Use</a>
            </p>
          </div>
  
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript files-->
  <script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite - 
    //   see more here 
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
    function injectSvgSprite(path) {

      var ajax = new XMLHttpRequest();
      ajax.open("GET", path, true);
      ajax.send();
      ajax.onload = function (e) {
        var div = document.createElement("div");
        div.className = 'd-none';
        div.innerHTML = ajax.responseText;
        document.body.insertBefore(div, document.body.childNodes[0]);
      }
    }
    // to avoid CORS issues when viewing using file:// protocol, using the demo URL for the SVG sprite
    // use your own URL in production, please :)
    // https://demo.bootstrapious.com/directory/1-0/icons/orion-svg-sprite.svg
    //- injectSvgSprite('${path}icons/orion-svg-sprite.svg'); 
    injectSvgSprite('https://demo.bootstrapious.com/directory/1-4/icons/orion-svg-sprite.svg');

  </script>
  <!-- jQuery-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Magnific Popup - Lightbox for the gallery-->
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Smooth scroll-->
  <script src="vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
  <!-- Bootstrap Select-->
  <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
  <script src="vendor/object-fit-images/ofi.min.js"></script>
  <!-- Swiper Carousel                       -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
  <script>var basePath = ''</script>
  <!-- Main Theme JS file    -->
  <script src="js/theme.js"></script>
</body>

</html>