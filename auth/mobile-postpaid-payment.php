<?php session_start();
include_once 'session/session.php';
include_once 'session/authorize.php';
include_once 'hashcode/hashcode.php';
include_once 'cookies/mobile-postpaid.php';
$amount=$_SESSION['Amount'];
$operator=$_SESSION['Operator'];
$promocode=$_SESSION['Promocode'];
$number=$_SESSION['No'];
if(isset($_POST['Proceed'])) {
    $_SESSION['start']=time();
    $_SESSION['mobile-postpaid-amount']=$_SESSION['start'] + (1 * 60);
    header('location:https://payflipwallet.com/payments/postpaid/mobile');
}

$opname=array("AIRTEL POSTPAID"=>"AIRTELPOSTPAID", "AIRCEL POSTPAID"=>"AIRCELPOSTPAID", "BSNL POSTPAID"=>"BSNLPOSTPAID", "IDEA POSTPAID"=>"IDEAPOSTPAID", "RELIANCE GSM POSTPAID"=>"RELIANCEGSMPOSTPAID", "RELIANCE CDMA POSTPAID"=>"RELIANCECDMAPOSTPAID", "TATADOCOMO POSTPAID"=>"TATADOCOMOPOSTPAID", "VODAFONE POSTPAID"=>"VODAFONEPOSTPAID");
if($promocode) {
    $discount='<p>Promocode :</p> <p style="margin:-20px 347px 11px;"><span style="color: #fff;background:darkorange;border-radius:4px;border: 1px solid darkorange;padding:2px 4px 2px;">'.$promocode.'</span></p>';
}

?>