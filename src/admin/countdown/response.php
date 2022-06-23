<?php
 session_start();
include("../admin/countdown/db.php");
$from_time1=date('Y-m-d H:i:s');
$to_time1=$_SESSION["end_time"];

$time_first=strtotime($from_time1);
$time_second=strtotime($to_time1);

$diferenceinseconds=$time_second-$time_first;
echo gmdate("H:i:s",$diferenceinseconds);




 ?>
