<?php
session_start();
include_once 'session/db.php';
include_once 'hashcode/hashcode.php';
$openurl =false;
$promocode =false;
if(isset($_POST['electricity']))
{
$amount=$_POST['amount'];
$operator =$_POST['operator'];
$acnumber =$_POST['acnumber'];
$hash=md5($hashcode);
$procode =$_POST['promocode'];
$promocode=strtoupper($procode);
$query="select * from cashback where Coupon='$promocode'";
$query=$sp->query($query) or die($sp->error);
$count=$query->num_rows;
$row = $query->fetch_assoc() ;
if (empty($_POST["acnumber"]))  {
$error = true;
echo "Account number is required";
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
elseif ($amount< 100)  {
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
if($row['Type']=='Bill'){
$apply_promocode='Yes';
}else{
echo "<div class='msgred'>Promocode Vaild Only ".$row['Type']." Recharges</div>";
$openurl=false;			 
}	
if($date < $expire){	
}else{
echo "<div class='msgred'>Sorry, this offer has expired</div>";	
$openurl=false;	
}
if($row['Apply_minium']==$amount or $row['Apply_maxium']>$amount or $row['Apply_maxium']==$amount){	
}else{
echo "<div class='msgred'>Promocode only vaild Rs.".$row['Apply_minium']." to Rs.".$row['Apply_maxium']."</div>";
$openurl=false;	
}	
}	
}	
}	
if($openurl=='true'){
$_SESSION['page']='https://payflipwallet.com/electricity-bill-payment';
$_SESSION['start'] = time();
$_SESSION['electricity'] = $_SESSION['start'] + (5 * 60);
$_SESSION['Amount']=$amount;
$_SESSION['Opcode']='electricity';
$_SESSION['Operator']=$operator;
$_SESSION['Acnumber']=strtoupper($acnumber);
$_SESSION['Promocode']=strtoupper($promocode);
$_SESSION['Apply_promocode']=$apply_promocode;	
echo "ok";
}	
else{
echo "<h1 style='dd:10px;dd:10px;dd:33px'>Method Not Allowed</h1>
<p style='dd:10px;dd:10px;dd:33px'>".$_SERVER['REQUEST_METHOD']." : ".$_SERVER['PHP_SELF']."</p>";
}
?>