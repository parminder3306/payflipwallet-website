<?php
session_start();
include_once 'session/db.php';
include_once 'hashcode/hashcode.php';
$promocode =false;
$openurl =false;
if(isset($_POST['googleplay']))
{
	$amount=$_POST['amount'];
	$operator ="GooglePlay";
	$mobile =$_POST['mobile'];
	$hash=md5($hashcode);
    $procode =$_POST['promocode'];
	$promocode=strtoupper($procode);
	$sql="select * from cashback where Coupon='$promocode'";
    $resultset = mysqli_query($sp, $sql) or die("database error:". mysqli_error($sp));
    $row = mysqli_fetch_assoc($resultset);	
    $count=$resultset->num_rows;

	if (empty($_POST["mobile"]))  {
		$error = true;
		echo "Mobile number is required";
	}
	elseif (!preg_match("/^[0-9]+$/",$mobile)) {
		$error = true;
		echo "Mobile number must contain only numbers";
	}
	elseif (strlen($_POST["mobile"]) < 10)  {
		$error = true;
		echo "Enter your 10 digit mobile number";
	}
	if (empty($_POST["amount"])) {
		$error = true;
		echo "Amount is required";
	}
	elseif (!preg_match("/^[0-9]+$/",$amount)){
		$error = true;
		echo "Amount must contain only numbers";
	}
	elseif ($amount < 10)  {
		$error = true;
		echo "Amount must be more than or equal to 10";	
	}
	if ($_POST["promocode"]==false)  {
	}
	elseif (strlen($_POST["promocode"]) < 4)  {
		$error = true;
		echo "Promocode is not vaild";	
	}	
	if (!$error) {
	if($promocode==$row['Coupon']) {	
		$openurl="true";
		$apply_promocode='No';
		}
	}	
if($promocode){
$expire=$row['Date'];
if($count<1){
$error = true;
echo "Promocode is not vaild";
}
if($row['Channel']=='Web'){	
if($row['Type']=='googleplay'){
$apply_promocode='Yes';
}else{
echo "Promocode Vaild Only ".$row['Type']." Recharges";
$openurl=false;			 
}	
if($date < $expire){	
}else{
echo "<b>Sorry, this offer has expired</b>";	
$openurl=false;	
}
if($row['Apply_minium']==$amount or $row['Apply_maxium']>$amount or $row['Apply_maxium']==$amount){	
}else{
echo "Promocode only vaild Rs.".$row['Apply_minium']." to Rs.".$row['Apply_maxium']."";
$openurl=false;	
}	
}	
}	
}	
if($openurl=='true'){
$_SESSION['page']='https://payflipwallet.com/googleplay-recharge';
$_SESSION['start'] = time();
$_SESSION['googleplay'] = $_SESSION['start'] + (5 * 60);
$_SESSION['Amount']=$amount;
$_SESSION['Opcode']='googleplay';
$_SESSION['Operator']=$operator;
$_SESSION['No']=$mobile;
$_SESSION['Promocode']=strtoupper($promocode);
$_SESSION['Apply_promocode']=$apply_promocode;
echo "ok";
}else{
echo "<h1 style='dd:10px;dd:10px;dd:33px'>Method Not Allowed</h1>
<p style='dd:10px;dd:10px;dd:33px'>".$_SERVER['REQUEST_METHOD']." : ".$_SERVER['PHP_SELF']."</p>";
}
?>