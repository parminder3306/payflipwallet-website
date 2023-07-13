<?php 
header('Access-Control-Allow-Origin: *');
include_once("../admin/auth/db.php");
$time = time();
$timecheck=$time-300;
echo $realtime=mysqli_query($sp,"select * from online where token='5957e4791b4b5208b7dda4b0f3541abce8f67ca1' and time>'$timecheck'")->num_rows;
?>