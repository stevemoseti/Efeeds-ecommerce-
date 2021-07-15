<?php
session_start();
include 'Connect.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    function test_input($data){
      $data= trim($data);
      $data= stripslashes($data);
      $data= htmlspecialchars($data);
      return $data;
    }
    $username=test_input($_POST['username']);
    $password=test_input($_POST['password']);


     if (empty($username)) {
      header("Location:adminlogin.php?error=username is required");
    }else if(empty($password)){
        header("Location:adminlogin.php?error=password is required");
    }else {
    // hashing the Password
    $password=md5($password);

    $sql = "SELECT * FROM admin WHERE username='$username'
    AND password='$password'";
    $result=mysqli_query($conn,$sql);
     if (mysqli_num_rows($result) === 1) {
       // the email must be unique.
       $row=mysqli_fetch_assoc($result);
       if ($row['username']===$username && $row['password']===$password) {
             $_SESSION['username']=$row['username'];
             $_SESSION['id']=$row['id'];


             header("Location: admin/adminhome.php");

                     	}else {
                     		header("Location: adminlogin.php?error=Incorect User name or password");
                     	}
                     }else {
                     	header("Location: adminlogin.php?error=Incorect User name or password");
                     }

             	}

             }else {
             	header("Location:Login.php");
             }
