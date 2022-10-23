<?php
session_start();
include("db.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'librery/php_mailer/src/Exception.php';
require 'librery/php_mailer/src/PHPMailer.php';
require 'librery/php_mailer/src/SMTP.php';
$email = $_POST['email'];
$mail_query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn,$mail_query);
$mail_search =mysqli_num_rows($result);
if($mail_search){
$userdata = mysqli_fetch_array($result);
$name=$userdata['name'];
$token =$userdata['token'];

  $subject = "Reset Password";
  $body = "Hi, $name Click on the link to reset your password http://localhost/Kadambari-Student-Portal/src/user_reset_password.php?token=$token";
  $sender = "from: shubha@ergo-ventures.com";

  if (mail($email, $subject, $body, $sender)) {
    $_SESSION['password_reset'] ="Hi, $name, Check your Inbox To Reset your password.";
    header("location:user_login.php");
  } else {
      echo "Email sending failed";
  }
}
else {
  echo "There is No account associate with this email !!";
}


?>
