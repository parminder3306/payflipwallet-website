<?php
include_once 'session/session.php';
include_once 'session/authorize.php';
include_once 'hashcode/hashcode.php';
if(isset($_POST['banktransfer'])){
$payeename=$_POST['payeename'];
$acnumber =$_POST['acnumber'];
$ifsccode =$_POST['ifsccode'];
$amount =$_POST['amount'];
$tax =$_POST['tax'];
if (empty($_POST["payeename"]))  {
$error = true;
}
elseif (!preg_match("/^[a-zA-Z ]+$/",$payeename)) {
$error = true;
}
elseif(strlen($payeename) < 6) {
$error = true;
}
if (empty($_POST["acnumber"])) {
$error = true;
}
elseif (!preg_match("/^[0-9]+$/",$acnumber)){
$error = true;
}
if (empty($_POST["ifsccode"])) {
$error = true;
}
if (empty($_POST["amount"])) {
$error = true;
}
elseif (!preg_match("/^[0-9]+$/",$amount)){
$error = true;
}
elseif ($_POST["amount"] < 500)  {
$error = true;
}
elseif ($_POST["amount"] > 5000)  {
$error = true;	
}	
if (!$error) {
if ($wallet >= $amount) {
$tamount=$amount-$tax;
$update="update users set Wallet=Wallet - '$amount' where Userid='$userid'";if(mysqli_query($sp, $update));
$insert = "INSERT INTO transactions(Userid,Orderid,Txnid,Txn,Orders,Tax,Amount,Statustxn,Status,Txnshow,Tick,Operator,Reamount,Acnumber,IFSC,Type,Date,Time,Holder,Recharge) VALUES('$userid', '$orderid','$txnid', 'Send Money to Bank : #$orderid','Send Money to Bank :".strtoupper($payeename)."','$tax','Rs .$amount','Success','Pending','Myorders','-','Transfer-to-bank','$tamount','".strtoupper($acnumber)."','".strtoupper($ifsccode)."','banktransfer','$date','$time','".strtoupper($payeename)."','$acnumber')";
if(mysqli_query($sp, $insert));
$data = array("status"=>"success","msg" =>"<div class='msggreen'>Successfully sent Rs.$tamount to Bank Account</div>","url" =>"https://payflipwallet.com/details/".$orderid."",);

}
elseif ($wallet >= 0.99) { 
$data = array("type" =>"wallet","msg" =>"<div class='msgred'>Low Wallet Balance</div>");
}else{
$data = array("type" =>"wallet","msg" =>"<div class='msgred'>No Wallet Balance</div>");
}
echo json_encode($data);
}
}
?>