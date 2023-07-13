<?php
session_start();
include_once 'session/db.php';
include_once 'hashcode/hashcode.php';
$promocode =false;
$openurl =false;
if(isset($_POST['dth']))
{
$amount =$_POST['amount'];
$operator =$_POST['operator'];
$number =$_POST['number'];
$hash=md5($hashcode);
$procode =$_POST['promocode'];
$promocode=strtoupper($procode);
$query="select * from cashback where Coupon='$promocode'";
$query=$sp->query($query) or die($sp->error);
$count=$query->num_rows;
$row = $query->fetch_assoc() ;
if (empty($_POST["number"])) {
$error = true;
echo "DTH number is required";		
}
elseif (!preg_match("/^[0-9]+$/",$number)) {
$error = true;
echo "DTH number must contain only numbers";
}
elseif (strlen($_POST["number"]) < 10)  {
$error = true;
echo "DTH number is invalid";
}
if (empty($_POST["operator"])) {
$error = true;
echo "Operator name is required";
}
if (empty($_POST["amount"])) {
$error = true;
echo "Amount is required";
}
elseif (!preg_match("/^[0-9]+$/",$amount)){
$error = true;
echo "Amount must contain only numbers";
}
elseif ($amount < 100)  {
$error = true;
echo "Amount must be more than or equal to 100";	
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
if($row['Type']=='DTH'){
$apply_promocode='Yes';
}else{
echo "<div class='msgred'>promocode not use on DTH recharges</div>";
$openurl=false;			 
}	
if($date < $expire){	
}else{
echo "<div class='msgred'>Sorry, this offer has expired</div>";	
$openurl=false;	
}
if($promo_count==4){	
echo "<div class='msgred'>Promocode use many times</div>";	
$openurl=false;	
}
if($row['Apply_minium']==$amount or $row['Apply_maxium']>$amount or $row['Apply_maxium']==$amount){	
}else{
echo "<div class='msgred'>Promocode not apply this amount, use ".$row['Apply_minium']." to ".$row['Apply_maxium']."</div>";
$openurl=false;		
}	
}	
}	
}	
if($openurl=='true'){
$_SESSION['page']='https://payflipwallet.com/dth-recharge';
$_SESSION['start'] = time();
$_SESSION['dth'] = $_SESSION['start'] + (5 * 60);
$_SESSION['Amount']=$amount;
$_SESSION['Opcode']='dth';
$_SESSION['Operator']=$operator;
$_SESSION['No']=$number;
$_SESSION['Promocode']=strtoupper($promocode);
$_SESSION['Apply_promocode']=$apply_promocode;
echo "ok";
}	
?>