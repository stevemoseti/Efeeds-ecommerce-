<?php
session_start();
require_once("../Connect.php");
// checking session is valid for not
if (strlen($_SESSION['id']==0)) {
  header('location:customers.php');
  } else{

// for deleting user
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($conn,"delete from users where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
echo "<script>window.open('customers.php?deleted=user has been deleted','_self')</script>";
}
}
}
?>
