<?php
session_start();
include 'Connect.php';
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // filter the variables for security
    $email = strip_tags(mysqli_real_escape_string($conn,trim($email)));
    $password = strip_tags(mysqli_real_escape_string($conn,trim($password)));

  // checking if is empty
     if (empty($email)) {
      header("Location:Login.php?error=email is required");
    }else if(empty($password)){
        header("Location:Login.php?error=password is required");
    }else {
//query
    $sql = "SELECT * FROM users WHERE email='".$email."' ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
        {
// now email has matched we also need to verify password
         $row = mysqli_fetch_array($result);
         $password_hash = $row['password'];
         if (password_verify($password,$password_hash)) {
           // code...
          header("Location: user/userhome.php");
         }
        else
          header("Location:Login.php?error=password or username is incorrect");
    }
    else {
      header("Location:Login.php?error=password or username is incorrect");
    }
  }
}
  ?>
