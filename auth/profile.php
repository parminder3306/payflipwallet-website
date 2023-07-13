<?php
include_once 'session/session.php';
include_once 'hashcode/hashcode.php';

$sql= "select * from kyc where Userid='$userid' ";
$resultset = mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($resultset);
$kyc=$row["Status"];
if($kyc=="Complete"){
$kycstatus="<span style='color:#008000'>Complete</span>";	
}
elseif($kyc=="Verifying"){
$kycstatus="<span style='color:#0073cf'>Verifying</span>";	
}else{
$kycstatus="<span style='color:#ff0000'>Incomplete</span>";	
}
if(isset($_POST['update'])) 
{
$username=(isset($_POST['name']))?$sp->real_escape_string(trim($_POST['name'])):'';
if (empty($_POST["name"]))  {
$error = true;
echo "Name is required";
}
elseif (!preg_match("/^[a-zA-Z ]+$/",$username)) {
$error = true;
echo "Name must only contain letters and whitespace";
}
elseif(strlen($username) < 3) {
$error = true;
echo "Name must be minimum of 3 characters";
}
if (!$error) {
$update="update users set Name='$username' where Userid='$userid'" ;
if($sp->query($update)){
echo "<div class='msggreen'>User Details Updated Successfully</div>";
}else{
echo "<div class='msgred'>erorr profile updated</div>";
}
}	              
}	              
  ?>