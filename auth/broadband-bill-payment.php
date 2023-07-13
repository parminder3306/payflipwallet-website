<?php session_start();
include_once 'session/session.php';
include_once 'session/authorize.php';
include_once 'hashcode/hashcode.php';
include_once 'cookies/broadband.php';
$amount=$_SESSION['Amount'];
$operator=$_SESSION['Operator'];
$promocode=$_SESSION['Promocode'];
$number=$_SESSION['No'];
if(isset($_POST['Proceed'])) {
    $_SESSION['start']=time();
    $_SESSION['broadband-bill-payment']=$_SESSION['start'] + (1 * 60);
    header('location:https://payflipwallet.com/payments/bill/broadband');
}

$opname=array("AIRTEL BROADBAND"=>"AIRTELBROADBAND", "BSNL BROADBAND"=>"BSNLBROADBAND");
if($promocode) {
    $discount='<p>Promocode :</p> <p style="margin:-20px 347px 11px"><span style="color: #fff;background:darkorange;border-radius:4px;border: 1px solid darkorange;padding:2px 4px 2px;">'.$promocode.'</span></p>';
}

?>