<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="shortcut icon" type="image/png" href="../favicon/khs.png">
    <title>Forget Password</title>
  </head>
  <body >
    <div class="container mt-5">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-6 col-md-8 col-sm-10 col- py-5 ">
            <div class="card border-0 shadow-lg px-5 py-5 rounded-5">
           <h2 class="text-center">Reset Your Password</h2>
           <hr>
                <form  action="recover_account.php" method="post" onsubmit="return forgetPass()">
                  <div class="form-group">
                      <?php if(isset($_SESSION['user_not_exits'])) { ?>
                        <div class="text-danger mt-3" role="alert">
                          <strong>Ops! <?php echo $_SESSION['user_not_exits'];?> </strong>
                        </div>
                      <?php }?>

                      <?php if(isset($_SESSION['wrong_user'])) { ?>
                        <div class="text-danger mt-3" role="alert">
                          <strong>Ops! <?php echo $_SESSION['wrong_user'];?> </strong> 
                        </div>
                      <?php }?>

                     

                      <br>
                      <p id="response"></p>
                      <label for="email">Email</label>
                      <input  class="form-control" name="email" id="email"  placeholder="Enter Email">
                      <p class="input_sms text-warning " id="email_error"></p>
                        <br>
                         <div class="form-group ">
                          <label for="user_type">Select User Type <span class="text-denger">*</span></label>
                          <select id="user_type" name="user_type" class="form-control" >
                            <option value="" selected>Select One</option>
                            <option value="super_admin">Super Admin</option>
                            <option value="admin">Admin</option>
                            <option value="moderatore">Moderatore</option>
                          </select>
                          <p class="input_sms text-danger" id="user_type_error"></p>
                      </div>

                      
                      <div class="col-12 text-center">
                        <button type="submit" name="reset_pass_btn" class="btn btn-primary ">Reset Password</button>
                      </div>
                  </div>
                </form>
                </div>
              </div>
        </div>
      </div>
      <script>
       function forgetPass(){
          var email = document.getElementById("email");
          var user_type = document.getElementById("user_type");

          var mail_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

          if(email.value == ''){
          document.getElementById('email_error').innerHTML=" Please Enter Your Email address !";
            email.focus();
            return false;
        }

        

        if(mail_regex.test(email.value) === false){
          document.getElementById('email_error').innerHTML=" ** Please Enter Valid Email ! ** ";
            email.focus();
            return false;
        }
        else {
          document.getElementById('email_error').innerHTML="";
        }

        if(user_type.value == ''){
          document.getElementById('user_type_error').innerHTML=" Please Select User !";
            user_type.focus();
            return false;
        }


        }
      </script>
  </body>
</html>
<?php unset($_SESSION['user_not_exits']);?> 
<?php unset($_SESSION['wrong_user']);?>
<!-- <?php unset($_SESSION['error_msg']);?>

 <?php unset($_SESSION['email_mass']);?> -->
