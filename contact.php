<?php
include_once 'Connect.php';
global $success_msg;
if(isset($_POST['save']))
{
	 $Name = $_POST['name'];
	 $Email = $_POST['email'];
	 $Subject = $_POST['subject'];
	 $Message = $_POST['message'];
	 $sql = "INSERT INTO messages (Name,Email,Subject,Message)
	 VALUES ('$Name','$Email','$Subject','$Message')";
	 if (mysqli_query($conn, $sql)) {
     echo "<script>alert('Comment sent');</script>";
     echo "<script>window.open('contact.php?sent=comment sent successfully','_self')</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

<?php include("includes/layouts/header.php"); ?>

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/agric2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>leave your comment <em>Contact Us</em></h2>
                        <p>We value your response concerning our services, Leave your comment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 offset-lg-3">
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>

                    <h5><a href="#">+254 743 470256</a><br>
											<a href="#">+254 743 470256</a>
										</h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>

                    <h5><a href="https://gmail.com">stephenmoseti12@gmail.com</a>
                    <a href="https://gmail.com">angelinewanjiku2000@gmail.com</a>
										</h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>

                    <h5><a href="#">53067 Africa Nazarene University</a> </h5>

                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us" style="margin-top: 0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-xs-12">
                    <div class="contact-form section-bg" style="background-image: url(assets/images/contact-1-720x480.jpg)">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" name="save" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    <?php include("includes/layouts/footer.php"); ?>
