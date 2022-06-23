<?php
session_start();
include("../admin/countdown/db.php");

$duration = "";

$res= "SELECT * FROM countdowns";
$result = mysqli_query($conn,$res);
while ($row= mysqli_fetch_array($res)) {
  $duration = $row['duration'];
}

$_SESSION["duration"] = $duration;
$_SESSION["start_time"] = date("Y-m-d H:i:s");

$end_time = date('Y-m-d H:i:s',strtotime('+'.$_SESSION["duration"].'munites'.strtotime($_SESSION["start_time"])));

$_SESSION["end_time"] = $end_time;
 ?>

 <script type="text/javascript">
   window.location="index.php";
 </script>
