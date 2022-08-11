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
if (!empty($_POST["division_id"])) {
  $query="SELCET * FROM districts WHERE division_id=".$_POST['division_id']."  ORDER BY name ASC";
  $result = mysqli_query($conn,$query);
}

echo '<option value="">Select District</option>';

while ($row = $result->fetch_assoc()) {
  echo '<option value="'.$row[0].'">$row[2]</option>';
}



 ?>
