<?php
session_start();
include("../db.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../librery/php_mailer/src/Exception.php';
require '../librery/php_mailer/src/PHPMailer.php';
require '../librery/php_mailer/src/SMTP.php';


$name=$_POST['name'];
$email=$_POST['email'];
$user_type=$_POST['user_type'];
$password= $_POST['password'];
$con_password= $_POST['confirm_password'];

$token =bin2hex(random_bytes(15));

if($password != $con_password){
$_SESSION['error_msg'] ="Password And Confirm Password Did not Match !!";
header("location:registration.php");
}else {
  $sql1= "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn,$sql1);
   $rowcount=mysqli_num_rows($result);
  if($rowcount == 1){

      $_SESSION['email_mass']="Account already Created with This Email! Please Loging !!";
      header("location:registration.php");
  }else{
    $hash= password_hash($password, algo: PASSWORD_BCRYPT);
    $sql= "INSERT INTO users (name,email,user_type,password,token,status) VALUES ('$name','$email','$user_type','$hash','$token','inactive')";
    if(mysqli_query($conn,$sql)){

      $subject = "Account Varification";
      $body = "Hi, $name Click here to varify your Email http://localhost/Kadambari-Student-Portal/src/admin/sendmail.php?token=$token";
      $sender = "from: litabiswas46@gmail.com";

      if (mail($email, $subject, $body, $sender)) {
        $query =" UPDATE users SET  expire_link=DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE email='$email'";
        $token_result = mysqli_query($conn,$query);

        $_SESSION['reg_msg'] ="Hi, $name, Check your Inbox of this Email $email";
        header("location:login.php");
      } else {
          echo "Email sending failed";

      }

    }
  }
}


?>
