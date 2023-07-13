<?php
include_once 'auth/session/db.php';
include_once 'auth/hashcode/hashcode.php';
if(isset($_POST['login_button'])) {
$user= trim($_POST['user']);
$pass= trim($_POST['password']);
$password=md5($pass);
$sql = "SELECT * FROM users WHERE email='$user' or mobile='$user'";
$resultset = mysqli_query($sp, $sql) or die("database error:". mysqli_error($sp));
$row = mysqli_fetch_assoc($resultset);	
$count=$resultset->num_rows;	
$token=$row['token'];	
if (empty($_POST["user"]))  {
$error = true;
echo "Enter your Mobile No. or Email ID ";
}
elseif (empty($_POST["password"]))  {
$error = true;
echo "Enter your password";
}
elseif (strlen($_POST["password"]) < 6)  {
$error = true;
echo "Please enter at least 6 characters.";
}
if (!$error) {	
if($count<1){
$data = array("login" =>"error","msg" =>"<div class='msgred'>Invaild username and Password!</div>");
}
elseif($row['access']=='noactive'){
$data = array("login" =>"account","msg" =>"<div class='msgred'>Please Contact to Support !</div>");
}
elseif($row['account']=='block'){
$data = array("login" =>"lock","msg" =>"<div class='msgred'>Account is Lock</div>");
}
elseif($row['password']==$password){
$expire = time()+36000000;
setcookie("session", $token, $expire);
$data = array("login" =>"success");
}else{
$data = array("login" =>"wrong","msg" =>"<div class='msgred'>Wrong Password</div>");
}
echo json_encode($data);	
}
}	
?>