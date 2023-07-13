<?php session_start();
include_once 'session/session.php';
include_once 'session/authorize.php';
include_once 'hashcode/hashcode.php';
include_once 'cookies/datacard-prepaid.php';
$amount=$_SESSION['Amount'];
$operator=$_SESSION['Operator'];
$promocode=$_SESSION['Promocode'];
$number=$_SESSION['No'];
if(isset($_POST['Proceed'])) {
    $_SESSION['start']=time();
    $_SESSION['datacard-prepaid-payment']=$_SESSION['start'] + (1 * 60);
    header('location:https://payflipwallet.com/payments/recharge/datacard');
}

$opname=array("AIRCEL"=>"AIRCEL", "BSNL"=>"BSNL", "IDEA"=>"IDEA", "MTS MBLAZE"=>"MTSMBLAZE", "MTS MBROWSE"=>"MTSMBROWSE", "RELIANCE NETCONNECT"=>"RELIANCENETCONNECT", "TATA PHOTON PLUS"=>"TATAPHOTONPLUS", "TATA PHOTON MAX"=>"TATAPHOTONMAX", "VODAFONE"=>"VODAFONE");
if($promocode) {
    $discount='<p>Promocode :</p> <p style="margin:-20px 347px 11px"><span style="color: #fff;background:darkorange;border-radius:4px;border: 1px solid darkorange;padding:2px 4px 2px;">'.$promocode.'</span></p>';
}

?>