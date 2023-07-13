<?php
header("Content-Type: application/json");
require_once('session.php');
$time = time();
$timecheck=$time-300;

if(isset($_GET['tell'])&&isset($_GET['ago'])){
    $tell = $_GET['tell'];$ago = $_GET['ago'];
    switch($tell){
        case 'hours': $to_date=$time-(60*60*$ago);break;
        case 'days':$to_date= strtotime(date('F d, Y'))-(60*60*24*$ago);break;
        case 'months':$to_date=strtotime(date('F d, Y'))-(60*60*24*30*$ago);break;
        default: $to_date=strtotime(date('F d, Y'));
    }
}else{$to_date =  strtotime(date('F d, Y'));}
$q = "time>$to_date";
if(isset($_GET['yesterday'])){
    $from_date = strtotime(date('F d, Y'))-(60*60*24);
    $q = "time<$to_date and time>$from_date";
}

$realtime=mysqli_query($sp,"select * from online where token='$token' and time>'$timecheck' and again='0'")->num_rows;
$totalusers=mysqli_query($sp,"select * from online where token='$token' and $q")->num_rows;
$total=mysqli_query($sp,"select * from online where token='$token'")->num_rows;
$repeatusers=mysqli_query($sp,"select * from online where token='$token' and time>'$timecheck' and again>='1'")->num_rows;
$json= array("realtime"=>$realtime,"repeatusers"=>$repeatusers,"totalusers"=>$totalusers,"totalonline"=>$realtime+$repeatusers,"total"=>$total);
echo json_encode($json);
?>