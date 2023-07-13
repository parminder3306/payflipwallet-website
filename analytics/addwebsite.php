<?php 
session_start();
include_once("../admin/auth/db.php");
include_once("../admin/auth/hashcode.php");
if(isset($_POST['submit'])) {
$pin=(isset($_POST['pin']))?$sp->real_escape_string(trim($_POST['pin'])):'';
$website=(isset($_POST['website']))?$sp->real_escape_string(trim($_POST['website'])):'';
$token=sha1($otpcode);
if (empty($website))  {
$error = true;
$msg='<div class="msgred">Please Website</div>';
}
elseif (empty($pin))  {
$error = true;
$msg='<div class="msgred">Please OTP PIN</div>';
}
if(!$error){
$sql = "SELECT * FROM analytics WHERE website='$website'";
$resultset = mysqli_query($sp, $sql) or die("database error:". mysqli_error($sp));
$row = mysqli_fetch_assoc($resultset);	
$count=$resultset->num_rows;	
if($count==0){		
$insert= "INSERT INTO analytics (website,pin,token) VALUES ('$website','$pin','$token')";
if($result = mysqli_query($sp,$insert));
$msg='<div class="msggreen">Website is Successfully Register</div>';	
$display="block";
}else{
$msg='<div class="msgred">Website is already Register</div>';	
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
<title>ANALYTICS ADD WEBSITES</title>
<meta name="keywords" content="Online recharge, Mobile recharge, Online mobile recharge, Easy Recharge, Prepaid Recharge">
<meta name="description" content="PayflipWallet.COM - The Simplest &amp; Fastest way to do a Online Recharge for Prepaid Mobile, Postpaid Bill">
<link rel="stylesheet" href="https://payflipwallet.com/admin/style/style.css" type="text/css" media="all">
<script>
function copy() {
  var copyText = document.getElementById("textarea");
  copyText.select();
  document.execCommand("copy");
  alert("Code is Successfully Copied");
}
</script>
</head>
<body>
<div class="login-card">
<div class="login-logo">PAYFLIPWALLET<span style="font-size:10px;">ANALYTICS</span></div>
<?php if(isset($msg)){ echo $msg;}?>
<form method="POST" action="" autocomplete="off">
<input type="text" name="website"  placeholder="Website Name">
<input type="tel" name="pin"  placeholder="New OTP PIN">
<button type="submit" name="submit" class="mybtn">Register</button>
</form></br>
<center>
<a href="https://payflipwallet.com/analytics/">LOGIN WEBSITE</a></br></br>
<div style="display:<?php if(isset($display)){echo $display;}else{echo "none";}?>">
<textarea style="width:100%;height:100px;" id="textarea">
<script>
function online(){
$.getScript("https://wurfl.io/wurfl.js", function(){
$.post("https://payflipwallet.com/analytics/online",
{
token:"<?php if(isset($token)){echo $token;}else{echo "blank";}?>",
webpage:window.location.href,
device:WURFL.complete_device_name,
devicetype:WURFL.form_factor,
refer:((window.opener!=(undefined||""))?window.opener:"Direct") || ((document.referrer!=(undefined || ""))?document.referrer:"Direct")
},
function() {
});
});
}
online();
setInterval(online, 3000);
</script>
</textarea>
<button class="mybtn" onclick="copy()">Copy Code</button>
</div></center>
</div>
</body></html>