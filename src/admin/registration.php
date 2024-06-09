<?php
session_start();
include("../db.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
<link rel="shortcut icon" type="image/png" href="../favicon/khs.png">
    <title>Registration</title>
  </head>
  <body >
    <div class="container mt-3">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-6 col-md-8 col-sm-10 py-5">
          <div class="card border-0 shadow-lg px-5 py-5 rounded-5">
          <?php if(isset($_SESSION['error_msg'])) { ?>
             <div class="alert alert-success mt-3" role="alert">
              <strong>Warning!</strong> <?php echo $_SESSION['error_msg'];?>
            </div>
          <?php }?>
          <?php if(isset($_SESSION['email_mass'])) { ?>
             <div class="alert alert-success mt-3" role="alert">
              <strong>Warning!</strong> <?php echo $_SESSION['email_mass'];?>
            </div>
          <?php }?>

           <h3 class="text-center">Create an account</h3>
           <hr>
           
            <form action="confirmregistration.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" required name="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" required name="email" placeholder="Enter Email">
                </div>
                <div class="form-group ">
                    <label for="user_type">Select User Type <span class="text-denger">*</span></label>
                    <select id="user_type" name="user_type" class="form-control" >
                      <option value="" selected>Select One</option>
                      <option value="super_admin" class="disabled form-control">Super Admin</option>
                      <option value="admin">Admin</option>
                      <option value="moderatore">Moderatore</option>
                    </select>
                    <p class="input_sms text-warning" id="blood_error"></p>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" required name="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" required name="confirm_password" placeholder="Enter Confirm Password">
                </div>

                <button type="submit" name="register_btn" class="btn btn-outline-primary">Registration</button> Already Have An account?
                <a class="btn btn-outline-primary" href="login.php"> Login</a>
            </form>
        </div>
        </div>
        </div>
</div>
    <script src="js/jquery-slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php unset($_SESSION['error_msg']);?>
<?php unset($_SESSION['email_mass']);?>
