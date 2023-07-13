<?php
session_start();
require_once('auth/session/session.php');
require_once('auth/session/authorize.php');
$id=(isset($_GET['Id']))?$sp->real_escape_string(trim($_GET['Id'])):'';
$query = "SELECT * FROM transactions where Orderid='".$id."' or Txnid='".$id."' and Userid='".$userid."'";
$result = mysqli_query($sp,$query);
$Results = mysqli_fetch_array($result);
$type=$Results['Type'];
if(isset($id)){
if($type=="addmoney"){
header('location:https://payflipwallet.com/add-wallet-money');
$_SESSION['start'] = time();
$_SESSION['add-wallet'] = $_SESSION['start'] + (1 * 60);
$_SESSION['amount']=$Results['Reamount'];
}
elseif($type=="mprepaid"){
header('location:https://payflipwallet.com/mobile-recharge');
$_SESSION['start'] = time();
$_SESSION['mobile-prepaid'] = $_SESSION['start'] + (1 * 60);
$_SESSION['Amount']=$Results['Reamount'];
$_SESSION['Opcode']='mprepaid';
$_SESSION['Operator']=$Results['Operator'];
$_SESSION['No']=$Results['Recharge'];
$_SESSION['Promocode']="";
$_SESSION['Apply_promocode']="No";
}
elseif($type=="mpostpaid"){
header('location:https://payflipwallet.com/mobile-postpaid-payment');
$_SESSION['start'] = time();
$_SESSION['mobile-postpaid'] = $_SESSION['start'] + (1 * 60);
$_SESSION['Amount']=$Results['Reamount'];
$_SESSION['Opcode']='mpostpaid';
$_SESSION['Operator']=$Results['Operator'];;
$_SESSION['No']=$Results['Recharge'];
$_SESSION['Promocode']="";
$_SESSION['Apply_promocode']="No";
}
elseif($type=="landline"){
header('location:https://payflipwallet.com/landline-bill-payment');
$_SESSION['start'] = time();
$_SESSION['landline'] = $_SESSION['start'] + (1 * 60);
$_SESSION['Amount']=$Results['Reamount'];
$_SESSION['Opcode']='landline';
$_SESSION['Acnumber']=$Results['Acnumber'];
$_SESSION['Operator']=$Results['Operator'];
$_SESSION['No']=$Results['Recharge'];
$_SESSION['Promocode']="";
$_SESSION['Apply_promocode']="No";
}
elseif($type=="electricity"){
header('location:https://payflipwallet.com/electricity-bill-payment');
$_SESSION['start'] = time();
$_SESSION['electricity'] = $_SESSION['start'] + (1 * 60);
$_SESSION['Amount']=$Results['Reamount'];
$_SESSION['Opcode']='electricity';
$_SESSION['Operator']=$Results['Operator'];
$_SESSION['Acnumber']=$Results['Acnumber'];
$_SESSION['Promocode']="";
$_SESSION['Apply_promocode']="No";
}
elseif($type=="dth"){
header('location:https://payflipwallet.com/dth-recharge');
$_SESSION['start'] = time();
$_SESSION['dth'] = $_SESSION['start'] + (1 * 60);
$_SESSION['Amount']=$Results['Reamount'];
$_SESSION['Opcode']='dth';
$_SESSION['Operator']=$Results['Operator'];
$_SESSION['No']=$Results['Recharge'];
$_SESSION['Promocode']="";
$_SESSION['Apply_promocode']="No";
}
elseif($type=="dprepaid"){
header('location:https://payflipwallet.com/datacard-recharge');
$_SESSION['start'] = time();
$_SESSION['datacard-prepaid'] = $_SESSION['start'] + (1 * 60);
$_SESSION['Amount']=$Results['Reamount'];
$_SESSION['Opcode']='dprepaid';
$_SESSION['Operator']=$Results['Operator'];
$_SESSION['No']=$Results['Recharge'];
$_SESSION['Promocode']="";
$_SESSION['Apply_promocode']="No";
}
elseif($type=="dpostpaid"){
header('location:https://payflipwallet.com/datacard-recharge');
$_SESSION['start'] = time();
$_SESSION['datacard-postpaid'] = $_SESSION['start'] + (1 * 60);
$_SESSION['Amount']=$Results['Reamount'];
$_SESSION['Opcode']='dpostpaid';
$_SESSION['Operator']=$Results['Operator'];
$_SESSION['No']=$Results['Recharge'];
$_SESSION['Promocode']="";
$_SESSION['Apply_promocode']="No";
}
elseif($type=="sendmoney"){
header('location:https://payflipwallet.com/sendmoney');
}
elseif($type=="banktransfer"){
header('location:https://payflipwallet.com/transferbank');
}
elseif($type=="googleplay"){
header('location:https://payflipwallet.com/googleplay');
}
elseif($type=='broadband'){
header('location:https://payflipwallet.com/broadband-bill-payment');
$_SESSION['start'] = time();
$_SESSION['broadband'] = $_SESSION['start'] + (1 * 60);
$_SESSION['Amount']=$Results['Reamount'];
$_SESSION['Opcode']='broadband';
$_SESSION['Acnumber']=$Results['Acnumber'];
$_SESSION['Operator']=$Results['Operator'];
$_SESSION['No']=$Results['Recharge'];
$_SESSION['Promocode']="";
$_SESSION['Apply_promocode']="No";
}else{
header('location:https://payflipwallet.com/');
}
}
?>