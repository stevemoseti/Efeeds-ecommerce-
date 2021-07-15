<?php
// session_start();
require_once("../Connect.php");
error_reporting(0);
  global $success_msg, $email_exist, $emptyError1, $emptyError2, $emptyError3;


if(isset($_POST["submit"])) {
        $username   = $_POST["username"];
        $email      = $_POST["email"];
        $password   = password_hash($_POST["password"],PASSWORD_DEFAULT);



        // verify if email exists
        $emailCheck = "SELECT * FROM users WHERE email = '{$email}' ";
        // $rowCount = $emailCheck->fetchColumn();
       $rowCount = mysqli_query($conn, $emailCheck);
        // PHP validation
        if(!empty($username) && !empty($email) && !empty($password)  ){

            // check if user email already exist
            if(mysqli_num_rows($rowCount) > 0) {
                $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        user with email already exist!
                    </div>
                ';
            } else {

            // Password hash
            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            // $sql2 = "insert INTO users (username, email, password, role)
            // VALUES ('{$username}', '{$email}', '{$password}', '{$role}', now())";
             $sql2 = "insert into users (username, email, password) VALUES" . "('$username' , '$email' , '$password' )";
            $result2 = mysqli_query($conn, $sql2);
                if(!$result2){
                    die("MySQL query failed!" . mysqli_error($conn));
                } else {
                    $success_msg = '<div class="alert alert-success">
                        user registered successfully!
                </div>';
                }
            }
        } else {
            if(empty($username)){
                $emptyError1 = '<div class="alert alert-danger">
                    username is required.
                </div>';
            }
            if(empty($email)){
                $emptyError2 = '<div class="alert alert-danger">
                    Email is required.
                </div>';
            }
            if(empty($password)){
                $emptyError3 = '<div class="alert alert-danger">
                    Password is required.
                </div>';
            }


        }
    }
?>
