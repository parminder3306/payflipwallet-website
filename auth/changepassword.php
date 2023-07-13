<?php 
include_once 'session/session.php';
include_once 'session/authorize.php';
include_once 'hashcode/hashcode.php';
		  $oldpassword=(isset($_POST['oldpassword']))?$sp->real_escape_string(trim($_POST['oldpassword'])):'';
		  $newpassword=(isset($_POST['newpassword']))?$sp->real_escape_string(trim($_POST['newpassword'])):'';

		  $oldpassword= md5 ($oldpassword);
		  $newpassword= md5 ($newpassword);
		 $check="select * from users where Userid='$userid' and Password='$oldpassword'"; 
		 $check=$sp->query($check) or die ($sp->error);
		 $count=$check->num_rows;
		  if(isset($_POST['submit'])){
		   if (empty($_POST["oldpassword"]))  {
		$error = true;
		$msg = "<div class='msgred'>Old Password is required</div>";
	     }
	     elseif (strlen($_POST["oldpassword"]) < 6)  {
		$error = true;
		$msg  = "<div class='msgred'>Password must be minimum of 6 characters</div>";
	    }
		 if (empty($_POST["newpassword"]))  {
		$error = true;
		$msg  = "<div class='msgred'>New Password is required</div>";
	     }
	     elseif (strlen($_POST["newpassword"]) < 6)  {
		$error = true;
		$msg  = "<div class='msgred'>Password must be minimum of 6 characters</div>";
	    }     
		elseif ($oldpassword == $newpassword)  {
		$error = true;
		$msg= "<div class='msgred'>Old and New Password Same use Different</div>";
		}

if (!$error) {
if($count>0){
$update="update users set Password='$newpassword' where Userid='$userid'";
if(mysqli_query($sp, $update)){
$msg = "<div class='msggreen'>Password Changed Successfully!</div>";
header('refresh:5;https://payflipwallet.com/logout');
}else{
$msg = "<div class='msgred'><b>Error !</b> '.$sp->error;</div>";			
}
}else{
$msg = "<div class='msgred'>Wrong old Password</div>";
}
}
}
?>