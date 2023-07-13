<?php 
session_start();
if(isset($_SESSION['analytics-session'])!=""){
header('location:https://payflipwallet.com/analytics/dashboard');
}
include_once("../admin/auth/db.php");
include_once("../admin/auth/hashcode.php");
if(isset($_POST['submit'])) {
$pin=(isset($_POST['pin']))?$sp->real_escape_string(trim($_POST['pin'])):'';
if (empty($pin))  {
$error = true;
$msg='<div class="msgred">Enter OTP PIN</div>';
}
if(!$error){
$sql = "SELECT * FROM analytics WHERE pin='$pin'";
$resultset = mysqli_query($sp, $sql) or die("database error:". mysqli_error($sp));
$row = mysqli_fetch_assoc($resultset);	
$count=$resultset->num_rows;	
if($count==1){		
$_SESSION['analytics-session']=$row['token'];
$msg='<div class="msggreen">Welcome '.$row['website'].'</div>';
header('refresh:2;https://payflipwallet.com/analytics/dashboard');
}else{
$msg='<div class="msgred">Wrong OTP PIN !</div>';	
}
}
}
?>
<!DOCTYPE html>
<html lang='en-US'>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width = device-width">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="robots" content="index, follow">
<title>ANALYTICS LOGIN</title>
<meta name="keywords" content="Online recharge, Mobile recharge, Online mobile recharge, Easy Recharge, Prepaid Recharge">
<meta name="description" content="PayflipWallet.COM - The Simplest &amp; Fastest way to do a Online Recharge for Prepaid Mobile, Postpaid Bill">
<link rel="stylesheet" href="https://payflipwallet.com/admin/style/style.css" type="text/css" media="all">
</head>
<body>
<div class="login-card">
<div class="login-logo">PAYFLIPWALLET<span style="font-size:10px;">ANALYTICS</span></div>
<?php if(isset($msg)){ echo $msg;}?>
<form method="POST" action="" autocomplete="off">
<input type="tel" name="pin" maxlength="4" placeholder="Enter OTP PIN">
<button type="submit" name="submit" class="mybtn">Login</button>
</form></br>
<center>
<a href="https://payflipwallet.com/analytics/addwebsite">REGISTER WEBSITE</a>
<center>
</div>
</body></html>