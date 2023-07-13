<?php
header('Access-Control-Allow-Origin: *');
include_once("../admin/auth/db.php");
include 'whoisip/lookup.php';
$time=time();
$timecheck=time()-300;
mysqli_query($sp,"delete from online where time<$timecheck");
$token=(isset($_POST['token']))?$sp->real_escape_string(trim($_POST['token'])):'';
$webpage=(isset($_POST['webpage']))?$sp->real_escape_string(trim($_POST['webpage'])):'';
$refer_url=(isset($_POST['refer']))?$sp->real_escape_string(trim($_POST['refer'])):'';
$device=(isset($_POST['device']))?$sp->real_escape_string(trim($_POST['device'])):'';
$device_type=(isset($_POST['devicetype']))?$sp->real_escape_string(trim($_POST['devicetype'])):'';
$db = new \IP2Location\Database('whoisip/database.BIN', \IP2Location\Database::FILE_IO);
$records = $db->lookup($_SERVER["REMOTE_ADDR"], \IP2Location\Database::ALL);
$ip_address=$_SERVER["REMOTE_ADDR"];
$country_code=$records["countryCode"];
$country_name=$records["countryName"];
$region_name=$records["regionName"];
$city=$records["cityName"];


if($ip_address && $country_code && $city && $country_name && $region_name & $token){
$sql=mysqli_query($sp,"select * from online  where ip_address='$ip_address' limit 1");
$row=mysqli_fetch_assoc($sql);
if($sql->num_rows=='1' && $row['time'] < $timecheck){
mysqli_query($sp,"update online set time='$time',webpage='$webpage',again=again+'1',device='$device',device_type='$device_type' where ip_address='$ip_address' and token='$token' limit 1");	 
}
if(mysqli_query($sp,"select * from online where ip_address='$ip_address' and token='$token'")->num_rows=='0' && $ip_address){
mysqli_query($sp,"insert into online (token,webpage,refer_url,ip_address,country_code,country_name,region_name,city,device,device_type,again,time) 
values ('$token','$webpage','$refer_url','$ip_address','$country_code','$country_name','$region_name','$city','$device','$device_type','0','$time')");
}else{
mysqli_query($sp,"update online set time='$time',webpage='$webpage',device='$device',device_type='$device_type' where ip_address='$ip_address' and token='$token' limit 1");	
}
}
?>