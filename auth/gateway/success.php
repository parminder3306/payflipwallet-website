<?php
include_once '../session/session.php';
include_once '../online.php';
$sql= "select * from gateway where GATEWAY='PAYU'";
$resultset = mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($resultset);
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt=$row['MERCHANT_SALT'];
If (isset($_POST["additionalCharges"])) {
$additionalCharges=$_POST["additionalCharges"];
$retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
}else {	  
$retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
}
$hash = hash("sha512", $retHashSeq);
if ($hash != $posted_hash ||  $ptoken !=$productinfo ) {
header('location:https://payflipwallet.com/details/'.$txnid.'');
}else{
header('location:https://payflipwallet.com/details/'.$txnid.'');
$txnstatus="update transactions set Status='Success', Statustxn='Success' where Txnid='$txnid'";if(mysqli_query($sp, $txnstatus));
$walletupdate="update users set Wallet=Wallet + '$amount' ,Paytoken='' where Userid='$userid' ";if(mysqli_query($sp, $walletupdate));            
 }
 ?>