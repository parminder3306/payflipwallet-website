<?php
session_start();
include_once 'session/session.php';
include_once 'session/authorize.php';
include_once 'cookies/checkout.php';
$refundid = substr(number_format(time() * rand(),0,'',''),0,12);
$date = date("d-m-Y");
$time = date("h:i A");
$code=$_SESSION['orderid'];
$taxpay=$_SESSION['tax'];
if(isset($code)){
session_destroy();
$query = "SELECT * FROM transactions where Orderid='".$code."'";
$result = mysqli_query($sp,$query);
$Results = mysqli_fetch_array($result);
$query1 = "SELECT * FROM api where Provider='Pay2all'";
$apikey1 = mysqli_query($sp,$query1);
$apikey = mysqli_fetch_array($apikey1);
$img=$Results['Status'];		
$operator=$Results['Operator'];		
$number=$Results['Recharge'];		
$amount=$Results['Reamount'];			
$txnid=$Results['Txnid'];		
$orderid=$Results['Orderid'];		
$type=$Results['Type'];		
$promocode=$Results['Promocode'];		
$apply_promocode=$Results['Apply_promocode'];		
$promo = "SELECT * FROM cashback where Coupon='".$promocode."'";
$row = mysqli_query($sp,$promo);
$data = mysqli_fetch_array($row);
$cash=$data['Value'];
$coupon=$data['Coupon']; 
$txnstatus = array("success"=>"Success","failure"=>"Failure");
$provider_id = array("AIRTEL"=>"1","VODAFONE"=>"2","IDEA"=>"3","TATA INDICOM"=>"4","TATA DOCOMO"=>"5","TELENOR"=>"6","BSNL"=>"8",
"AIRCEL"=>"9","VIDEOCON"=>"10","RELIANCE GSM"=>"39","RELIANCE CDMA"=>"40","AIRTEL POSTPAID"=>"23","AIRCEL POSTPAID"=>"29",
"BSNL POSTPAID"=>"73","IDEA POSTPAID"=>"24","RELIANCE GSM POSTPAID"=>"26","RELIANCE CDMA POSTPAID"=>"27","TATADOCOMO POSTPAID"=>"28",
"VODAFONE POSTPAID"=>"25","DISH TV"=>"12","RELIANCE BIG TV"=>"16","AIRTEL DEGITAL TV"=>"17","TATASKY"=>"13","SUNDIRECT"=>"14","VIDEOCON D2H"=>"15","MTS MBLAZE"=>"18","MTS MBROWSE"=>"19","RELIANCE NETCONNECT"=>"20","TATA PHOTON PLUS"=>"82",
"TATA PHOTON MAX"=>"22","AIRCEL POSTPAID"=>"29","BSNL POSTPAID"=>"73","IDEA POSTPAID"=>"24","VODAFONE POSTPAID"=>"25","RELIANCE JIO"=>"112");      
if ($type == 'mprepaid') {	    
$ch = 'https://www.pay2all.in/web-api/paynow?api_token='.$apikey['Apikey'].'&number='.$number.'&provider_id='.$provider_id{$operator}.'&amount='.$amount.'&client_id='.$orderid.'';
$api= file_get_contents($ch);
$obj = json_decode($api);
$load= $obj->{'status'};
$status=$txnstatus{$load};	
 } 
if ($type == 'mpostpaid') {	    
$ch = 'https://www.pay2all.in/web-api/paynow?api_token='.$apikey['Apikey'].'&number='.$number.'&provider_id='.$provider_id{$operator}.'&amount='.$amount.'&client_id='.$orderid.'';
$api= file_get_contents($ch);
$obj = json_decode($api);
$load= $obj->{'status'};
$status=$txnstatus{$load};	
 }   
 if ($type=='dth') {	    
$ch = 'https://www.pay2all.in/web-api/paynow?api_token='.$apikey['Apikey'].'&number='.$number.'&provider_id='.$provider_id{$operator}.'&amount='.$amount.'&client_id='.$orderid.'&cnumber='.$mobi.'';
$api= file_get_contents($ch);
$obj = json_decode($api);
$load= $obj->{'status'};
$status=$txnstatus{$load};		  	   
} 
if($type=='dprepaid') {	    
$ch = 'https://www.pay2all.in/web-api/paynow?api_token='.$apikey['Apikey'].'&number='.$number.'&provider_id='.$provider_id{$operator}.'&amount='.$amount.'&client_id='.$orderid.'';
$api= file_get_contents($ch);
$obj = json_decode($api);
$load= $obj->{'status'};
$status=$txnstatus{$load};				
} 
if($type=='dpostpaid') {	    
$ch = 'https://www.pay2all.in/web-api/paynow?api_token='.$apikey['Apikey'].'&number='.$number.'&provider_id='.$provider_id{$operator}.'&amount='.$amount.'&client_id='.$orderid.'';
$api= file_get_contents($ch);
$obj = json_decode($api);
$load= $obj->{'status'};
$status=$txnstatus{$load};	
}   
if ($type=='landline') {	    
$status ='Pending';						
 }
if ($type=='broadband') {	    
$status ='Pending';		  				
 } 
if ($type=='electricity') {	    
$status ='Pending';				  			
 }
 if ($type=='googleplay') {	    

 }  
if ($status =='Success' && $apply_promocode=='Yes') {	
$cashback = "INSERT INTO transactions(Userid,Txnid,Orderid,Txn,Orders,Tick,Amount,Status,Operator,Statustxn,Reamount,Txnshow) VALUES('$userid', '$refundid','$orderid', 'Payflip Wallet Cashback: #$orderid','Payflip Wallet Cashback: #$orderid','+','Rs. $cash','Success','Cashback','Success','$cash','Null')";if(mysqli_query($sp, $cashback));
$cashbackupdate="update users set Wallet=Wallet + '$cash' where Userid='$userid' ";if(mysqli_query($sp, $cashbackupdate));
}
if(empty($status)){
$txn="update transactions set Msg='Orders is Successful' where Txnid='".$txnid."'";if(mysqli_query($sp, $txn));
$statusupdate="update transactions set Status='Pending' where Txnid='".$txnid."'";if(mysqli_query($sp, $statusupdate));
}
if ($status =='Success') {	
$txn="update transactions set Msg='Orders is Successful' where Txnid='".$txnid."'";if(mysqli_query($sp, $txn));
$statusupdate="update transactions set Status='Success' where Txnid='".$txnid."'";if(mysqli_query($sp, $statusupdate));
}
if ($status =='Failure') {	
$total=$amount+$taxpay; 
$txn="update transactions set Msg='RefundMoney is Successful' where Txnid='".$txnid."'";if(mysqli_query($sp, $txn));
$refundcash = "INSERT INTO transactions(Userid,Txnid,Orderid,Txn,Orders,Tick,Amount,Status,Operator,Statustxn,Reamount,Date,Time,Type,Msg) VALUES('$userid', '$refundid','$txnid', 'Refund to Payflip Cash: #$orderid','Refund to Payflip Cash: #$orderid','+','Rs. $total','Success','Refundcash','Success','$amount','$date','$time','refundcash','RefundMoney is Successful')";if(mysqli_query($sp, $refundcash));
$walletupdate="update users set Wallet=Wallet + '$total' where Userid='$userid' ";if(mysqli_query($sp, $walletupdate));
$statusupdate="update transactions set Status='Failure' where Txnid='".$txnid."'";if(mysqli_query($sp, $statusupdate));
} 
}
header('location:https://payflipwallet.com/details/'.$orderid.'');
?>