<?php
session_start();
include("db.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'librery/php_mailer/src/Exception.php';
require 'librery/php_mailer/src/PHPMailer.php';
require 'librery/php_mailer/src/SMTP.php';

$name=$_POST['name'];
$email=$_POST['email'];
$password= ($_POST['password']);
$con_password= ($_POST['confirm_password']);
$token =bin2hex(random_bytes(15));
if($password != $con_password){
$_SESSION['error_msg'] ="Password And Confirm Password Did not Match !!";
header("location:student_registration.php");
}else {
  $sql1= "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn,$sql1);
   $rowcount=mysqli_num_rows($result);
  if($rowcount == 1){
      $_SESSION['email_mass']="Account already Created with This Email! Please Loging !!";
      header("location:student_registration.php");
  }else{
    $hash= password_hash($password, algo: PASSWORD_BCRYPT);
    $sql= "INSERT INTO users (name,email,user_type,password,token,status) VALUES ('$name','$email','gen_user','$hash','$token','inactive')";
    if(mysqli_query($conn,$sql)){
      $subject = "Account Activation";
      $body = "Hi, $name. Click here to varify your Email http://localhost/Kadambari-Student-Portal/src/user_activation_mail.php?token=$token";
      $sender = "From: shubha@ergo-ventures.com";

      if (mail($email, $subject, $body, $sender)) {
        $_SESSION['reg_msg'] ="Check your Inbox of this Email $email";
        header("location:user_login.php");
      } else {
          echo "Email sending failed...";
      }
    }
  }
}

?>
