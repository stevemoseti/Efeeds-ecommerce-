<?php include("includes/layouts/header.php"); ?>
<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
        <source src="assets/images/clipvideo_Trim.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h6>Have it your way</h6>
            <h2>quality <em>Farm Inputs,</em> better yields</h2>
            <div class="main-button">
                <a href="Login.php">User Login</a>
                <a href="Signup.php">Sign Up</a>
                <a href="adminlogin.php">Admin Login</a>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->
   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Products</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>we over quality products that can yield better outputs,try them today from our shop and you won't regret.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/beans.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>KES</sup>500</del> <sup>KES</sup>420
                            </span>

                            <h4>Beans.</h4>

                            <p>The maize seeds does well in red soil and black soil.</p>

                            <ul class="social-icons">
                                <li><a href="Signup.php">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/maize.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                              <del><sup>KES</sup>400</del> <sup>KES</sup>350
                            </span>

                            <h4>Maize Seeds.</h4>

                            <p>The maize seeds does well in red soil and black soil.</p>
                            <ul class="social-icons">
                                <li><a href="Signup.php">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/onion.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                              <del><sup>KES</sup>600</del> <sup>KES</sup>550
                            </span>

                            <h4>Red Onions.</h4>

                            <p>The Onions  does well in red soil and black soil with qulity produce.</p>

                            <ul class="social-icons">
                                <li><a href="Signup.php">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="main-button text-center">
                <a href="products.php">View our products</a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>Leave a comment how you were served and the quality of the products we over so that we will serve better next time.</p>
                        <div class="main-button">
                            <a href="contact.php">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
  <?php include("includes/layouts/testimony.php"); ?>

    <!-- ***** Testimonials Item End ***** -->

    <?php include("includes/layouts/footer.php"); ?>
