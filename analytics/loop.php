<?php
include_once 'session.php';
include 'whoisip/lookup.php';
$token=(isset($_POST['token']))?$sp->real_escape_string(trim($_POST['token'])):'';
if($token){
$sql= mysqli_query($sp, "SELECT * FROM online where token='$token'");
while($row = mysqli_fetch_array($sql)){
$ip=$row['ip_address'];
$db = new \IP2Location\Database('whoisip/database.BIN', \IP2Location\Database::FILE_IO);
$records = $db->lookup($ip, \IP2Location\Database::ALL);

$ip_address=$records["ipAddress"];
$country_code=$records["countryCode"];
$country_name=$records["countryName"];
$region_name=$records["regionName"];
$city=$records["cityName"];
$update=mysqli_query($sp,"update online set country_code='$country_code',country_name='$country_name',region_name='$region_name',city='$city' where token='$token'");	 
if($update){
	echo "File Successfully Updated";
}else{
	echo "File not update";
}
}
}
?>
<form action="" method="POST">
<input type="text" name="token"/>
<button type="submit" name="submit">Update</button>