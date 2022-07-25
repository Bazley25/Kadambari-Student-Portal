<?php

include("db.php");
// if(isset($_GET['division_id']))
// {
//   $id = $_GET['division_id'];
//   $sql = "SELECT * FROM districts WHERE division_id =$id";
//   $result = mysqli_query($conn,$sql);
//    echo json_encode($result);
//
// }
if (!empty($_POST["id"])) {
  $query="SELCET * FROM districts WHERE id= ".$_POST['id']." AND ORDER BY name ASC";
  $result = mysqli_query($conn,$query);
}

echo '<option value='selected'>Select District</option>';

while ($row = mysqli_fetch_row($districts_queries)) {
  echo "<option value='$row[0]'>$row[2]</option>";
}



 ?>
