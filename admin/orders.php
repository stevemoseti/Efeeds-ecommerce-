<?php
include("includes/header.php");

?>
<link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;
     }
</style>

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

              <div class="table-scrol">
      <h1 align="center">All placed Orders</h1>

  <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->
      <table class="table table-bordered ">
          <thead>

          <tr>

              <th>Order Id</th>
              <th>User Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>payment Mode</th>
              <th>Products</th>
              <th>paid Amount</th>
              <th>Action</th>
          </tr>
          </thead>

          <?php
          require_once("../Connect.php");
          $view_users_query="select * from orders";//select query for viewing orders.
          $run=mysqli_query($conn,$view_users_query);//here run the sql query.

          while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
          {
              $order_id=$row[0];
              $username=$row[1];
              $email=$row[2];
              $phone=$row[3];
              $address=$row[4];
              $payment_mode=$row[5];
              $products=$row[6];
              $paid_amount=$row[7];


          ?>

          <tr>
  <!--here showing results in the table -->
              <td><?php echo $order_id;  ?></td>
              <td><?php echo $username;  ?></td>
              <td><?php echo $email;  ?></td>
              <td><?php echo $phone; ?></td>
              <td><?php echo $address; ?></td>
              <td><?php echo $payment_mode; ?></td>
              <td><?php echo $products; ?></td>
              <td>kes. <?php echo $paid_amount; ?></td>

              <td style="display:flex;" >
                <a href="approveorder.php?id=<?php echo $row['id'];?>">
                <button class="btn btn-success">Approve</button>
              </a>
                <a href="pend   order.php?id=<?php echo $row['id'];?>">
                <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to Pend the order');">Pending</button>
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
    </div>
  </section>

  <!--Footer--->
  <?php include("includes/footer.php"); ?>
  <!-- end of footer -->
