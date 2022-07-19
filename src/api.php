<?php

include("db.php");
if(isset($_GET['division_id']))
{
  $id = $_GET['division_id'];
  $sql = "SELECT * FROM districts WHERE division_id =$id";
  $result = mysqli_query($conn,$sql);
   echo json_encode($result);

}




 ?>
