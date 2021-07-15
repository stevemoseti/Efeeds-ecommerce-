<?php
include("checkregister.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>efeeds ordering system</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>

    <body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <!-- <a href="index.php" class="logo">Farmers Store <em> E-Feeds</em></a> -->
                        <a href="index.php" class="logo"><img src="assets/images/efeed.png" alt=""/></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="products.php" class="active">Products</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="about.php">About Us</a>
                                    <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                                    <a class="dropdown-item" href="terms.php">Terms</a>
                                </div>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/agric2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- login in form start -->

    <div class="login">
  <div class="login-triangle"></div>

  <h2 class="login-header">sign up</h2>
  <?php echo $success_msg; ?>
  <?php echo $email_exist; ?>

  <form class="login-container" action="" method="post">
      <p><input type="username" name="username" placeholder="Username">
       <?php echo $emptyError1; ?>
       </p>

    <p><input type="email" name="email" placeholder="Email">
     <?php echo $emptyError2; ?>
    </p>

    <p><input type="password" name="password" placeholder="Password">
     <?php echo $emptyError3; ?>
    </p>




      <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block">Register</button>
    <p>Already have an account <a href="Login.php">sign in</a></p>
  </form>
</div>

    <!-- login in form end -->
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <p>
                      Copyright © 2020 Company Name
                      -  by: <a href="index.php">E-Feeds.com</a>
                  </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>
