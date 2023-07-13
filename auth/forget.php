<?php
include_once 'session/db.php';
include_once 'hashcode/hashcode.php';
include_once 'session/authorize1.php';
if (isset($_POST['submit'])) {
$email=$_POST['email'];
if (empty($_POST["email"])) {
$error = true;
echo "Email is required";
}
else{
$sql = "SELECT * FROM users where Email='".$email."'";
$query = mysqli_query($sp,$sql);
$row = mysqli_fetch_array($query);
$email=$row['Email'];         
if(count($row)>=1){
echo "<div class='msggreen'>We have e-mailed your password reset link !</div>";
$to=$email;
$subject="Your Password Reset Link";
$from = 'info@payflipwallet.com("Payflip Wallet")';
$body='<b>Dear, '.$row['Name'].' <br><br>Click here to Reset your password https://payflipwallet.com/resetpassword?userid='.$row['Userid'].'&code='.$row['Token'].'   <br><br>Payflip Systems,<br>Thanks for You<br><br><b>';
$headers = "From: " . strip_tags($from) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
mail($to,$subject,$body,$headers);
}else{
echo "<div class='msgred'>Users not exits</div>";
}
}
}
?>