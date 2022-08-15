<?php

include("db.php");

$division_id = $_POST['division_data'];

$district_qry = " SELCET * FROM districts WHERE division_id =$division_id ";
$district_res = mysqli_query($conn, $district_qry);

$district_output = '<option value=" ">Select District</option>';

while ($district_row = mysqli_fetch_assoc($district_res)) {
  $district_output .= '<option value="'.$district_row['id'].'">'.$district_row['name'].'</option>';
}
echo $district_output;

?>
