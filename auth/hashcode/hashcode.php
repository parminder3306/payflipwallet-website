<?php
$error = false;
$date = date("d-m-Y");
$time = date("h:i A");
$timesession = time();
$refundid = substr(number_format(time() * rand(),0,'',''),0,12);
$txnid = substr(number_format(time() * rand(),0,'',''),0,12);
$orderid = substr(number_format(time() * rand(),0,'',''),0,12);
$friendtxnid = substr(number_format(time() * rand(),0,'',''),0,12);
$friendorderid = substr(number_format(time() * rand(),0,'',''),0,12);
$otpcode = substr(number_format(time() * rand(),0,'',''),0,6);
$hashcode = substr(number_format(time() * rand(),0,'',''),0,6);
$senderid= substr(number_format(time() * rand(),0,'',''),0,6);
?>