<?php
session_start();
require_once('../Connect.php');
//Checking session is valid or not
if (strlen($_SESSION['id']==0)) {
  header('location:customer.php');
  } else{

// for updating user info
if(isset($_POST['Submit']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
  // $id=intval($_GET['id']);
$query=mysqli_query($conn,"update users set username='$username'   where email='$email'");
if($query)
{
echo "<script>alert('user information has been updated');</script>";
echo "<script>window.open('customers.php?deleted=user informaton has been updated','_self')</script>";
}
}
}
?>
