<?php
require("addcustomer.php");
?>
<?php include("includes/header.php"); ?>
</head>
<body>
  <!--Navbar---------->
  <?php include("includes/navbar.php"); ?>
  <!--End of Navbar--->

  <!--End of Modal--->
  <!--add new customers--->
  <section>
    <div class="container-fluid">
        <div class="row">
          <div class=" col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row pt-md-5 mt-md-3 mb-10">

          <form class="form-group" action="" method="post">
            <h2 class="display-5">Register user</h2>
            <?php echo $success_msg; ?>
            <?php echo $email_exist; ?>

                <!-- TEXTB0X: user name -->
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="username" placeholder="UserName"><br>
                    <?php echo $emptyError1; ?>
                </div>
                <!-- TEXTB0X: email -->
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="email" placeholder="Email"><br>
                    <?php echo $emptyError2; ?>
                </div>
                        <!-- TEXTB0X: password -->
                <div class="col-sm-10">
                    <input class="form-control" type="password" name="password" placeholder="Password"><br>
                    <?php echo $emptyError3; ?>
                </div>
      					<div class="col-sm-10">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block">Add user</button>
      					</div>

         </form>

       </div>
       </div>
      </div>
    </div>
  </section>
  <!--end of adding new customers--->

  <!--Footer--->
  <?php include("includes/footer.php"); ?>
  <!-- end of footer -->
