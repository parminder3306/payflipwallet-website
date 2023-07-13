<?php
session_start();
include_once '../session/session.php';
include_once '../cookies/add-wallet-gateway.php';
$sql= "select * from gateway where GATEWAY='PAYU' and STATUS='ACTIVE'";
$result= mysqli_query($sp, $sql);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
$date = date("d-m-Y");
$time = date("h:i A");
$amount=$_SESSION['amount'];
$txnid=$_SESSION['txnid'];
$tax=$_SESSION['tax'];
$orderid=$_SESSION['orderid'];
$MERCHANT_KEY =$row['MERCHANT_KEY'];
$SALT = $row['MERCHANT_SALT'];
$PAYU_BASE_URL = "https://sandboxsecure.payu.in";
$taxpay=$amount+$tax;
$action = '';
$posted = array();
if(!empty($_POST)) {
foreach($_POST as $key => $value) {    
$posted[$key] = $value; 	
 }
}
$formError = 0;
if(empty($posted['txnid'])) {
} else {
  $txnid = $posted['txnid'];
  $userupdate="update users set Paytoken='AddCash-$txnid'  where Userid='$userid' ";if(mysqli_query($sp, $userupdate)); 
  $insert = "INSERT INTO transactions(Userid,Txnid,Orderid,Txn,Orders,Tick,Amount,Reamount,Status,Operator,Statustxn,Txnshow,Date,Time,Tax,Type,Recharge) VALUES('$userid', '$txnid','$orderid', 'AddMoney to PayflipWallet - $orderid','AddMoney to PayflipWallet - $txnid','+','Rs. $amount','$amount','Failure','Addmoney','Failure','MyOrders','$date','$time','$tax','addmoney','$mobi')";
  if(mysqli_query($sp, $insert)); 
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
if($count==0){
header('location:https://payflipwallet.com/Oops/paymentoff');
unset($_SESSION['add-wallet-gateway']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "https://www.w3.org/TR/html4/strict.dtd">
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Payflip Payment Request WaitPage</title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"></head>
<body onload="javascript:document.MetaRefreshForm.submit()" style="min-width: 1300px;">
<style type="text/css">
            .container{
              width: 100%;
              margin: 10% auto 0;
              font-family: Arial, Helvetica, sans-serif;
              color: #000;
            }

            .progress-bar{
              width: 80%;
              height: 5px;
              background-color:#dce6ef;
              clear: both;
              margin: 40px auto 0px;
              opacity: 0.7;
            }

			.progress{
              background-color:#0a243f;
              height: 5px;
              width: 0%;
              max-width: 100%;
              opacity: 1;
              -webkit-animation: progress 4s 1 forwards;
              -moz-animation: progress 4s 1 forwards;
              -ms-animation: progress 4s 1 forwards;
              animation: progress 4s 1 forwards;
            }

            .progress-shadow{
              background-color: #a8a8a8;
              height: 4px;
              width: 0%;
              max-width: 100%;
              opacity: 0.4;
              -webkit-animation: progress 4s 1 forwards;
              -moz-animation: progress 4s 1 forwards;
              -ms-animation: progress 4s 1 forwards;
              animation: progress 4s 1 forwards;
            }

            @-webkit-keyframes progress{
              from {}
              
              to {width: 95%}
            }
            @-moz-keyframes progress{
              from {}
              
              to {width: 95%}
            }
            @-ms-keyframes progress{
              from {}
              
              to {width: 95%}
            }
            @keyframes progress{
              from {}
              
              to {width: 95%}
            }

            .lvl-fbolt{
              background-repeat: no-repeat;
              background-position: center;
            }

            .progress-top{
              max-width: 440px;
              clear: both;
              margin: 5% auto;
            }

            .progress-bottom{
              width:100%;
              max-width: 600px;
              clear: both;
              margin: 0px auto;
              opacity: 0.6;
            }

            .progress-lvl1{
              text-align: center;
              margin: 20px 0;
              font-size: 0.8em;
              line-height: 1.6;
              opacity: 0.8;
            }
            
            .progress-lvl2{
              text-align: center;
              margin:25px 0 50px;
              font-size: 1.2em;
              opacity: 0.8;
            }

            .progress-lvl3{
              text-align: center;
              margin: 10px 0;
            }

            .spin-anim{
              -webkit-animation: spin 1s linear infinite;
              -moz-animation: spin 1s linear infinite;
              -ms-animation: spin 1s linear infinite;
              animation: spin 1s linear infinite;
            }

            @-webkit-keyframes spin{
              100% { -webkit-transform: rotate(360deg); }
            }
            @-moz-keyframes spin{
              100% { -moz-transform: rotate(360deg); }
            }
            @-ms-animation spin{
              100% { -ms-transform: rotate(360deg); } 
            }
            @animation spin{
              100% { transform: rotate(360deg); }
            }

			.text-lvl{
              margin: 15px 0;
              text-align: center;
              font-size: 0.9em;
            }
            
            .translate-anim{
              -webkit-animation: revprogress 4s 1 forwards;
              -moz-animation: revprogress 4s 1 forwards;
              -ms-animation: revprogress 4s 1 forwards;
              animation: revprogress 4s 1 forwards;
            }

            @-webkit-keyframes revprogress{
              from {width: 0%}
              
              to {width: 95%}
            }
            @-moz-keyframes revprogress{
              from {width: 0%}
              
              to {width: 95%}
            }
            @-ms-keyframes revprogress{
              from {width: 0%}
              
              to {width: 95%}
            }
            @keyframes revprogress{
              from {width: 0%}
              
              to {width: 95%}
            }

            .text-lvl{
              margin: 5px 0;
              text-align: center;
            }

            .font25{
              font-size: 25px;
            }
            .font14{
              font-size: 14px;
            }
            .font19{
              font-size: 17px;
            }

            .skewshadow-container{
              width: 80%;
              max-width: 440px;
              margin: 0 auto;
              overflow: hidden;
              -webkit-transform: skewX(35deg);
              -moz-transform: skewX(35deg);
              -ms-transform: skewX(35deg);
              transform: skewX(35deg);
            }

            .progress-skewshadow{
              position: relative;
              width: 22px;
              height: 50px;
              margin-left: 16px;
            }

            .shadow{
              background-repeat: repeat-x;
            }

            .lvl-span{
              border-right: 1px solid black;
              padding: 0 10px;
              margin-right: 10px;
            }

 </style>
<div class="container">
<div class="progress-top">
 <img style="margin-left: 120px;width: 200px;" src="https://payflipwallet.com/resource/logos/logos/logo.png"/>
          <div class="progress-bar">
            <div class="progress"></div>
            <div class="progress-shadow"></div>
          </div>
          <div class="skewshadow-container">
            <div class="progress-skewshadow translate-anim shadow" style="background-image: url(https://d1vi4hxtdrq9n9.cloudfront.net/Shadow.png)">
            </div>
          </div>
          <div class="progress-bottom font19">
            <div class="text-lvl">Please wait while we redirect you to payment gateway for processing...</div>
            <div class="text-lvl">Please do not press Stop, Back or Refresh button or Close this window.</div>
          </div>
        </div>  
<form action="<?php echo $action;?>" method="post" name="MetaRefreshForm"">
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
<input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
<input type="hidden" name="txnid" value="<?php echo $txnid; ?>" />
<input type="hidden" name="amount" value="<?php echo $taxpay; ?>" />
<input type="hidden" name="firstname" value="<?php echo $name;?>" />
<input type="hidden" name="email"  value="<?php echo $email;?>" />
<input type="hidden" name="phone" value="<?php echo $mobi;?>" />
<input type="hidden" name="productinfo" value="AddCash-<?php echo $txnid;?>"/>
<input type="hidden" name="surl" value="https://payflipwallet.com/auth/gateway/success" />
<input type="hidden" name="furl" value="https://payflipwallet.com/auth/gateway/failure" />
<input type="hidden" name="service_provider" value="payu_paisa" />
<input type="hidden" name="lastname"  value="empty" />
<input type="hidden" name="curl" value="https://payflipwallet.com/auth/gateway/failure" />
    
</body></html>