<?php
include_once 'session/db.php';
include_once 'hashcode/hashcode.php';
if(isset($_POST['signup'])) {
$name= trim($_POST['name']);
$mobile= trim($_POST['mobile']);
$email= trim($_POST['email']);
$pass= trim($_POST['password']);
$password=md5($pass);
$token=sha1($otpcode);
$sql = "SELECT * FROM users WHERE Email='$email' or Mobile='$mobile'";
$resultset = mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($resultset);	
$count=$resultset->num_rows;		
if (empty($_POST["name"]))  {
$error = true;
echo "Enter your name";
}
elseif (empty($_POST["mobile"]))  {
$error = true;
echo "Enter your mobile number";
}
elseif (!preg_match("/^[0-9]+$/",$_POST["mobile"])) {
$error = true;
echo "Mobile number must contain only numbers";
}
elseif (strlen($_POST["mobile"]) < 10)  {
$error = true;
$mobile_error = "Enter your 10 digit mobile number";
}
elseif (empty($_POST["email"])) {
$error = true;
echo "Enter your email ID";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$error = true;
echo "Please Enter Valid Email ID";
}
elseif (empty($_POST["password"])) {
$error = true;
echo "Enter your password";
}
elseif (strlen($_POST["password"]) < 6)  {
$error = true;
echo "Password should be atleast 6 digit length";
}
if (!$error) {	
if($row['Mobile']==$mobile){
$data = array("status" =>"mobile");
}
elseif($row['Email']==$email){
$data = array("status" =>"email");
}
elseif($count==0){
if(mysqli_query($sp, "INSERT INTO users(Name,Access,Email,Mobile,Password,Account,Uwallet,Token,Date) VALUES('$name','active','$email', '$mobile', '$password','noblock','noupgrade','$token','$date')"));
$data = array("status" =>"success");
}else{
$data = array("status" =>"error");
}
echo json_encode($data);	
}
}
?>