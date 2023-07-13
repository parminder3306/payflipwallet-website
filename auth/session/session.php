<?php
include_once 'db.php';
if(isset($_COOKIE['session'])){
$date= date("d-m-Y");
$menudisplay='block';
$session=$_COOKIE['session'];
$sql= "select * from users where token='$session' ";
$resultset = mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($resultset);	
$logincount=$resultset->num_rows;
$userid=$row['userid'];
$wallet=$row['wallet'];
$email=$row['email'];
$usertype=$row['type'];
$user=$row['name'];
$fullname=$row['name'];
$mobi=$row['mobile'];
$name=substr($row['name'],0,16);
$shortname=substr($row['name'],0,1);
$ptoken=$row['paytoken'];
$loginpass=$row['password'];
$walletlimit=$row['wlimit'];
$user_wallet=$row['monthly_limit'];
$sql= "select * from transactions where userid='$userid' and date='$date' and txnshow='myorders'";
$query=$sp->query($sql) or die($sp->error);
$orderscount=$query->num_rows;
if($User_wallet=='20000'){
if('20000' < $walletlimit){
header('location:https://payflipwallet.com/Oops/limitfull/20000');
}
}
if($User_wallet=='100000'){
if('100000' < $walletlimit){
header('location:https://payflipwallet.com/Oops/limitfull/100000');
}	
}

}else{
$menudisplay='none';	
$userid=false;
$wallet="0";
$usertype=false;
$user="WELCOME";
$mobi=false;
$name='<div style="font-size:11px"><a href="https://payflipwallet.com/login">LOG IN</a> | <a href="https://payflipwallet.com/signup">REGISTER</a></div>';
$ptoken=false;
$loginpass=false;
$walletlimit=false;
$User_wallet=false;
$orderscount=0;
$displayform="display:none;";
}
?>