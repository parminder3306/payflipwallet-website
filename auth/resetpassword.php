<?php 
include_once 'session/db.php';
include_once 'hashcode/hashcode.php';
$code=(isset($_REQUEST['code']))?$sp->real_escape_string(trim($_REQUEST['code'])):'';
$check="select * from users where Token='$code'"; 
$check=$sp->query($check) or die ($sp->error);
$count=$check->num_rows;
if($count>0){	
$updat='true';
}else{
$msg = "<div class='msgred'>Invalid key please try again</div>";	    
$updat='false';
}
if(isset($_REQUEST['submit'])){
$newpassword=(isset($_REQUEST['newpassword']))?$sp->real_escape_string(trim($_REQUEST['newpassword'])):'';
$cpassword=(isset($_REQUEST['cpassword']))?$sp->real_escape_string(trim($_REQUEST['cpassword'])):'';			
if (empty($_REQUEST["newpassword"]))  {
$error = true;
$msg = "<div class='msgred'>New Password is required</div>";
}
elseif (strlen($_REQUEST["newpassword"]) < 6)  {
$error = true;
$msg = "<div class='msgred'>Password must be minimum of 6 characters</div>";
}
if (empty($_REQUEST["cpassword"]))  {
$error = true;
$msg = "<div class='msgred'>Confirm Password is required</div>";
}
if($newpassword != $cpassword) {
$error = true;
$msg = "<div class='msgred'>Password and Confirm Password doesn't match</div>";
}
if($updat=='true'){
if (!$error) {
$update = "update users set Password='".md5($newpassword)."' where Token='$code'";
if(mysqli_query($sp, $update)){
$msg = "<div class='msggreen'>Your password reset sucessfully</div>";
$token="update users set Token='".sha1($hashcode)."' where Token='$code'";
if(mysqli_query($sp, $token));
header('refresh:2;https://payflipwallet.com/login');
}
}
}
}			
?>