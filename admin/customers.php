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
      <h1 align="center">All the Users</h1>

  <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->
      <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
          <thead>

          <tr>

              <th>User Id</th>
              <th>User Name</th>
              <th>User E-mail</th>
              <!-- <th>Password</th> -->
              <th>Edit user</th>
          </tr>
          </thead>

          <?php
          require_once("../Connect.php");
          $view_users_query="select * from users";//select query for viewing users.
          $run=mysqli_query($conn,$view_users_query);//here run the sql query.

          while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
          {
              $id=$row[0];
              $username=$row[1];
              $email=$row[2];
              // $password=$row[3];


          ?>

          <tr>
  <!--here showing results in the table -->
              <td><?php echo $id;  ?></td>
              <td><?php echo $username;  ?></td>
              <td><?php echo $email;  ?></td>

              <td>
              <a href="updateusers.php?id=<?php echo $row['id'];?>">
              <button class="btn btn-info"><i class="fas fa-pencil-alt"></i></button></a>
              <a href="deleteuser.php?id=<?php echo $row['id'];?>">
              <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="far fa-trash-alt"></i></button></a>
              </td>
            </tr>

          <?php } ?>

      </table>

          <a href="addus.php"><button class="btn btn-primary btn-xs"><i class="fas fa-user-plus"></i></button></a>


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
