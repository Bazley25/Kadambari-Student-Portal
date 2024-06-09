
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="shortcut icon" type="image/png" href="favicon/khs.png">
    <title>Forget Password</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-6 col-md-8 col-sm-10 py-5">
          <div class="card border-0 shadow-lg px-5 py-5 rounded-5">
           <h3 class="text-center">Reset Your Password</h3>
           <hr>
                <form  action="user_recover_account.php" method="post"  enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="email">Email</label>
                      <br>
                      <p id="response"></p>
                      <input  class="form-control" name="email"  placeholder="Enter Email">
                        <br>

                      <div class="col-12 text-center">
                        <button type="submit" name="reset_pass_btn" class="btn btn-primary ">Reset Password</button>
                      </div>
                  </div>
                </form>
              </div>
              </div>
            </div>
          </div>
  </body>
</html>
<!-- <?php unset($_SESSION['error_msg']);?>
<?php unset($_SESSION['email_mass']);?> -->
