<?php

include("db.php");
if(isset($_GET['division_id']))
{
  $id = $_GET['division_id'];
  $sql = "SELECT * FROM divisions WHERE id=$id";
  $result = mysqli_query($conn,$sql);
  print_r($result);
  die();

}




 ?>
