<?php
include_once 'session/session.php';
include_once 'session/authorize.php';
include_once 'hashcode/hashcode.php';
if(isset($_POST['sendmoney'])) {
$mobile= trim($_POST['mobile']);
$amount= trim($_POST['amount']);
$tax= trim($_POST['tax']);
$sql ="select Mobile,Name,Userid,Access,Account from users where Mobile='$mobile'";
$resultset = mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($resultset);	
$count=$resultset->num_rows;
$friendname=$row['Name'];
$friendid=$row['Userid'];
$friendactive=$row['Access'];
$friendlock=$row['Account'];
$number=$row['Mobile'];
if(empty($_POST["mobile"]))  {
$error = true;
}
elseif(!preg_match("/^[0-9]+$/",$mobile)) {
$error = true;
}
elseif(strlen($_POST["mobile"]) < 10)  {
$error = true;
}
elseif(empty($_POST["amount"])) {
$error = true;
}
elseif(!preg_match("/^[0-9]+$/",$amount)){
$error = true;
}
elseif($amount < 10)  {
$error = true;
}
elseif($amount > 5000)  {
$error = true;
}
if (!$error) {	
if($count==0){
$data = array("error" =>"true","msg" =>"<div class='msgred'>$mobile user not exits</div>");
}
elseif($mobi==$number){
$data = array("error" =>"true","msg" =>"<div class='msgred'>Cannot send money to yourself</div>");
}
elseif($friendlock=='block'){
$data = array("error" =>"true","msg" =>"<div class='msgred'>$mobile is locked</div>");
}
elseif($friendactive=='noactive'){
$data = array("error" =>"true","msg" =>"<div class='msgred'>$mobile is not Active</div>");
}	
elseif ($wallet >= $amount) {
$tamount=$amount-$tax;
$self="update users set Wallet=Wallet - '$amount' where Userid='$userid'";if(mysqli_query($sp, $self));
$self="update users set Wlimit=Wlimit + '$amount' where Userid='$userid'";if(mysqli_query($sp, $self));
$friend="update users set Wallet=Wallet + '$tamount' where Mobile='$number'";if(mysqli_query($sp, $friend));
$txnself = "INSERT INTO transactions(Userid,Orderid,Txnid,Txn,Orders,Amount,Status,Statustxn,Txnshow,Tick,Recharge,Operator,Reamount,Type,Date,Time,Tax) VALUES('$userid', '$orderid','$txnid', 'Send Money','Send Money To : $friendname','Rs.$amount','Success','Success','Myorders','-','$number','Sendmoney','$tamount','sendmoney','$date','$time','$tax')";
if(mysqli_query($sp, $txnself));
$txnfriend = "INSERT INTO transactions(Userid,Orderid,Txnid,Txn,Orders,Amount,Status,Statustxn,Txnshow,Tick,Recharge,Operator,Reamount,Type,Date,Time,Tax) VALUES('$friendid', '$friendorderid','$friendtxnid', 'Cash Received','Cash Received','Rs.$amount','Success','Success','','+','','Receivedmoney','$tamount','','$date','$time','0')";
if(mysqli_query($sp, $txnfriend));
$notifications="INSERT INTO notifications(userid,title,message,type,time,senderid,mtype) VALUES('$friendid','Cash Received','Received Rs.$amount From $name','New','$time','$senderid','Simple')";
if(mysqli_query($sp, $notifications));
$data = array("status"=>"success","msg" =>"<div class='msggreen'>Successfully sent Rs.$tamount to $friendname</div>","url" =>"https://payflipwallet.com/details/".$orderid."",);
}
elseif  ($wallet >= 0.99) { 
$data = array("type" =>"wallet","msg" =>"<div class='msgred'>Low Wallet Balance</div>");
}else{
$data = array("type" =>"wallet","msg" =>"<div class='msgred'>No Wallet Balance</div>");
}
echo json_encode($data);
}
}
?>