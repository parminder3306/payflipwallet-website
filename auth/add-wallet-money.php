<?php
session_start();
include_once 'session/session.php';
include_once 'session/authorize.php';
include_once 'hashcode/hashcode.php'; 
include_once 'cookies/add-wallet.php'; 
$sql= "select * from tax where Service='Wallet'";
$result= mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($result);
$amount=$_SESSION['amount'];
$tax = ($row['Tax'] / 100) * $amount;
if(isset($_POST['Proceed'])){
$_SESSION['start'] = time();
$_SESSION['add-wallet-gateway'] = $_SESSION['start'] + (1 * 60);
$_SESSION['txnid']=$txnid;
$_SESSION['orderid']=$orderid;
$_SESSION['amount']=$amount;
$_SESSION['tax']=$tax;
header('location:https://payflipwallet.com/auth/gateway/processPay');
}
?>