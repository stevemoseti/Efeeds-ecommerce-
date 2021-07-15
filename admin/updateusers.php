

<?php include("includes/header.php"); ?>
</head>
<body>
  <!--Navbar---------->
  <?php include("includes/navbar.php"); ?>
  <!--End of Navbar--->

  <!--add new customers--->
  <section>
    <div class="container-fluid">
        <div class="row">
          <div class=" col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row pt-md-5 mt-md-3 mb-5">



           <?php $ret=mysqli_query($conn,"select * from users where id='".$_GET['id']."'");
     	  while($row=mysqli_fetch_array($ret)){?>

           <section id="main-content">
               <section class="wrapper">
               	<h3><i class="fa fa-angle-right"></i> <?php echo $row['username'];?>'s Information</h3>
     				<div class="row">
                       <div class="col-md-12">
                           <div class="content-panel">
                           <p align="center" style="color:#F00;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']=""; ?></p>
                                <form class="form-horizontal style-form" name="form1" method="post" action="updateprofile.php" onSubmit="return valid();">
                                <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
                                   <div class="form-group">
                                   <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Username</label>
                                   <div class="col-sm-10">
                                       <input type="text" class="form-control" name="username" value="<?php echo $row['username'];?>" >
                                   </div>
                               </div>

                                   <div class="form-group">
                                   <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Email </label>
                                   <div class="col-sm-10">
                                       <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" readonly >
                                   </div>
                               </div>

                               <div style="margin-left:100px;">
                               <input type="submit" name="Submit" value="Update" class="btn btn-theme"></div>
                               </form>
                           </div>
                       </div>
                   </div>
     		</section>
       </div>
       </div>
      </div>
    </div>
  </section>


  <!--Footer--->
  <?php include("includes/footer.php"); ?>
  <!-- end of footer -->
<?php } ?>
