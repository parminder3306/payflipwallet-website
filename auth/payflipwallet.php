<?php
session_start();
include_once 'session/db.php';
include_once 'hashcode/hashcode.php';

if(isset($_POST['addmoney'])){							
$amount=(isset($_POST['amount']))?$sp->real_escape_string(trim($_POST['amount'])):'';
if (empty($_POST["amount"])) {
$error = true;
}
elseif (!preg_match("/^[0-9]+$/",$amount)){
$error = true;
}
elseif ($amount < 10)  {
$error = true;
}
if (!$error) {
$_SESSION['page']='https://payflipwallet.com/add-wallet-money';
$_SESSION['start'] = time();
$_SESSION['add-wallet'] = $_SESSION['start'] + (1 * 60);
$_SESSION['amount']=$amount;
$data = array("addmoney" =>"true","url" =>"https://payflipwallet.com/add-wallet-money");
}else{
$data = array("error" =>"true","msg" =>"Opps something went wrong");
}
echo json_encode($data);
}
?>