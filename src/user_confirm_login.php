<?php
session_start();
include("db.php");
$email=$_POST['email'];
$pass=$_POST['password'];



$sql= "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn,$sql);
if($result->num_rows > 0){
 $rowcount=$result->fetch_array();
if(password_verify($pass,$rowcount['password'])){
    session_start();
    $_SESSION['login']=true;
    header("location:user_dash_board/index.php");

}
else{

    // $_SESSION['error']=true;
    // header("location:index.php");
    echo "Thik nai";
}

}
?>
