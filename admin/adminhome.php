<?php include("includes/header.php"); ?>
<body>
  <!--Navbar---------->
  <?php include("includes/navbar.php"); ?>
  <!--End of Navbar--->

  <!--Cards--->
  <section class="">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-xl-10 col-lg-9 col-md-8 ml-auto">
          <div class="row pt-md-5 mt-md-3 mb-5">
            <div class="col-xl-3 col-sm-6 p-2">
              <div class="card card-common">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <i class="fas fa-shopping-cart fa-3x text-warning"></i>
                    <div class="text-right text-secondary">
                      <h4>Orders</h4>
                      <h6>placed orders</h6>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-secondary">
                  <i class="fas fa-sync mr-3"></i>
                <a href="orders.php"><span>Update now</span></a>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 p-2">
              <div class="card card-common">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <i class="fas fa-users fa-3x text-info"></i>
                    <div class="text-right text-secondary">
                      <h4>management</h4>
                      <h6>users</h6>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-secondary">
                  <i class="fas fa-sync mr-3"></i>
                <a href="customers.php"><span>Update now</span></a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 p-2">
              <div class="card card-common">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <i class="fas fa-chart-line fa-3x text-danger"></i>
                    <div class="text-right text-secondary">
                      <h4>Report</h4>
                      <h6>Analysis</h6>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-secondary">
                  <i class="fas fa-sync mr-3"></i>
                <a href="#"><span>Update now</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End of Cards--->

  <!--Tables--->
  <section>
    <div class="container-fluid">
      <div class="row mb-5">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
          <div class="row">
            <div class="col-12 mb-4">
              <h3 class="text-muted text-center mb-3">customer comments</h3>
              <table class="table table-dark table-hover text-center">
                <thead>
                  <tr class="text-muted">
                    <th>Message Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Contact</th>
                  </tr>
                  </thead>
                            <?php
                            require_once("../Connect.php");
                            $view_users_query="select * from messages";//select query for viewing comments.
                            $run=mysqli_query($conn,$view_users_query);//here run the sql query.

                            while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
                            {
                                $messageid=$row[0];
                                $Name=$row[1];
                                $Email=$row[2];
                                $Subject=$row[3];
                                $Message=$row[4];

                            ?>

                            <tr>
                    <!--here showing results in the table -->
                                <td><?php echo $messageid;  ?></td>
                                <td><?php echo $Name;  ?></td>
                                <td><?php echo $Email;  ?></td>
                                <td><?php echo $Subject; ?></td>
                                <td><?php echo $Message; ?></td>

                                <td style="display:flex;" >
                                  <a href="#?id=<?php echo $row['id'];?>">
                                  <button class="btn btn-success">Message</button>
                                </a>
                                </td>

                              </tr>

                            <?php } ?>


              </table>

            </div>


          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End of Tables--->

  
  <!--Footer--->
  <?php include("includes/footer.php"); ?>
  <!-- end of footer -->
