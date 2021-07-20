
<?php
//session start here
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
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
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>

<?php

include 'dbcon.php';


//if User Submit create account
if (isset($_POST['submit'])){
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
  $password = mysqli_real_escape_string($con,$_POST['password']);
  $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

//password encryption
$pass = password_hash($password,PASSWORD_BCRYPT);
$cpass = password_hash($cpassword,PASSWORD_BCRYPT);
//password encryption end

//email already exits code here
$emailquery = "select * from registration where email = '$email'";
$query = mysqli_query($con, $emailquery);
$emailcount = mysqli_num_rows($query);

if ($emailcount>0){
?>
<script>
  alert("Email allready exit");
</script>
<?php
}else{
  //password both same or not
  if ($password === $cpassword){
$insertquery = "insert into registration (email,mobile,password,cpassword) values('$email','$mobile','$pass','$cpass')";
$query = mysqli_query ($con,$insertquery);  

//Account created succeffully or not
if($con){
  ?>
  <script>
    alert("Account created succesully");
  </script>
  <?php
}else{
?>
<script>
  alert("Something wen wrong");
</script>
<?php
}

}else{
  //password dosent match
  ?>
  <script>
    alert("Password dosn't match");
  </script>
<?php
  }
}

}


?>


    <div class="container-fluid px-3">
      <div class="row min-vh-100">
        <div class="col-md-8 col-lg-6 col-xl-5 d-flex align-items-center">
          <div class="w-100 py-5 px-md-5 px-xxl-6 position-relative">
            <div class="mb-4"><img class="img-fluid mb-4" src="img/logo.svg" alt="..." style="max-width: 8rem;">
              <h2>Register</h2>
              <p class="text-muted">Create an account today and gain access to Group Book deals! </p>
            </div>
            <form class="form-validate" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

              <div class="mb-4">
                <label class="form-label" for="loginUsername"> Email Address</label>
                <input class="form-control" name="email" id="loginUsername" type="email" placeholder="name@address.com" autocomplete="off" required data-msg="Please enter your email">
              </div>

              <div class="mb-4">
                <label class="form-label" for="loginUsername"> Phone Number</label>
                <input class="form-control" name="mobile" id="loginUsername" type="number" placeholder="10 Digit Mobile Number " autocomplete="off" required data-msg="Please enter your email">
              </div>

              <div class="mb-4">
                <label class="form-label" for="loginPassword"> Password</label>
                <input class="form-control" name="password" id="loginPassword" placeholder="Password" type="password" required data-msg="Please enter your password">
              </div>
              <div class="mb-4">
                <label class="form-label" for="loginPassword2"> Confirm your password</label>
                <input class="form-control" name="cpassword" id="loginPassword2" placeholder="Confirm Password" type="password" required data-msg="Please enter your password">
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-lg btn-primary" type="submit" name="submit">Create Account</button>
              </div>
              <hr class="my-3 hr-text letter-spacing-2" data-content="OR">
              <div class="d-grid gap-2">
                <button class="btn btn btn-outline-primary btn-social"><i class="fa-2x fa-facebook-f fab btn-social-icon"> </i>Connect <span class="d-none d-sm-inline">with Facebook</span></button>
                <button class="btn btn btn-outline-muted btn-social"><i class="fa-2x fa-google fab btn-social-icon"> </i>Connect <span class="d-none d-sm-inline">with Google</span></button>
              </div>
              <hr class="my-4">
              <p class="text-sm text-muted">You have allready account <a href="login.php">Login here</a>.</p>
            </form><a class="close-absolute me-md-5 me-xl-6 pt-5" href="#"> 
              <svg class="svg-icon w-3rem h-3rem">
                <use xlink:href="#close-1"> </use>
              </svg></a>
          </div>
        </div>
        <div class="col-md-4 col-lg-6 col-xl-7 d-none d-md-block">
          <!-- Image-->
          <div class="bg-cover h-100 me-n3" style="background-image: url(img/photo/blue-track.jpg);"></div>
        </div>
      </div>
    </div>
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
          ajax.onload = function(e) {
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