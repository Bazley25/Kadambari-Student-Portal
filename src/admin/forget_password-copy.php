<?php
session_start();
include("../db.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

?>


<?php
if (isset($_POST['email'])){

  $email =$_POST['email'];
  $sql= "SELECT  id FROM users WHERE email='$email'";
  $result = mysqli_query($conn,$sql);
  if ($result->num_rows > 0){

// token start
    $token = "abcdefghijklmnopqrstuvwxyz0123456789";
    $token = str_shuffle($token);
    $token = substr($token,0,10);

$query =" UPDATE users SET token ='$token', expire_token=DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE email='$email'";
$token_result = mysqli_query($conn,$query);

// token end

// mail send to
require '../librery/PHPMailer/src/Exception.php';
require '../librery/PHPMailer/src/PHPMailer.php';
require '../librery/PHPMailer/src/SMTP.php';



$mail = new PHPMailer();
$mail->address($email);
$mail->setFrom(address:"shubha@ergo-ventures.com", name:"Admin");
$mail->subject = "Reset Password";
$mail->isHTML(true);
$mail->body = "
              Hi, <br><br>

              In order to reset your password, please click on the link below:<br>
              <a href='http://localhost/Kadambari%20PHP%20Dynamic%202/src/admin/Forget_password.php?email=$email&token=$token'>http://localhost/Kadambari%20PHP%20Dynamic%202/src/admin/Forget_password.php?email=$email&token=$token</a> <br><br>


              kind Regards<br>
              Admin";

        if ($mail->send())


          exit(json_encode(array("status" => 1,"msg" =>'Please check Your Email Inbox !' )));

        } else {
            exit(json_encode(array("status" => 0,"msg" =>'Please check Your Input !' )));
        }
}

 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="shortcut icon" type="image/png" href="../favicon/khs.png">
    <title>Forget Password</title>
  </head>
  <body>
    <div class="container" style="margin-top:100px;">
      <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3" align="center">
          <!-- <?php if(isset($_SESSION['error_msg'])) { ?>
             <div class="alert alert-success mt-3" role="alert">
              <strong>Warning!</strong> <?php echo $_SESSION['error_msg'];?>
            </div>
          <?php }?>
          <?php if(isset($_SESSION['email_mass'])) { ?>
             <div class="alert alert-success mt-3" role="alert">
              <strong>Warning!</strong> <?php echo $_SESSION['email_mass'];?>
            </div>
          <?php }?> -->

           <h2 class="mt-2">Reset Your Password</h2>
           <hr>
            <!-- <form action="confirm_forget_password.php" method="POST"> -->

                <div class="form-group">
                    <label for="email">Email</label>
                    <br>
                    <p id="response"></p>
                    <input  class="form-control" id="email"  placeholder="Enter Email">
                      <br>

                    <input type="button" class="btn btn-primary" value="Reset Password">
                </div>
                <!-- <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" required name="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" required name="confirm_password" placeholder="Enter Confirm Password">
                </div> -->



                <!-- <a class="btn btn-outline-primary" href="login.php"> Login</a> -->
            <!-- </form> -->
        </div>
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">
var email = $("#email");

$(document).ready(function () {
  $('.btn-primary').on('click', function () {
    if (email.val() != ""){
      email.css('border', '1px solid green');

      $.ajax({
        url: 'forget_password.php',
        method: 'POST',
        dataType: 'json',
        data: {
          email: email.val()
        }, success: function (response) {
          if (!response.success){
          $("#response").html(response.msg) .css('color',"red");
          }else {
            $("#response").html(response.msg).css('color',"green");
          }

        }

      });


    }else {
      email.css('border', '1px solid red');
    }

  });
});

</script>



  </body>
</html>
<!-- <?php unset($_SESSION['error_msg']);?>
<?php unset($_SESSION['email_mass']);?> -->
