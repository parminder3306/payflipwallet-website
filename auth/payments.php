<?php 
session_start();
include_once 'session/session.php';
include_once 'session/authorize.php';
include_once 'hashcode/hashcode.php';
$type=(isset($_GET['type']))?$sp->real_escape_string(trim($_GET['type'])):'';
$payto=(isset($_GET['payto']))?$sp->real_escape_string(trim($_GET['payto'])):''; 
if(isset($type)){
?>

<?php
if($type=='recharge' and $payto=='mobile'){
include_once 'cookies/mobile-prepaid-amount.php';
$sql= "select * from tax where Service='Recharge'";
$result= mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($result);
$opname=$_SESSION['Operator'];
$recharge=$_SESSION['No'];
$apply_promocode=$_SESSION['Apply_promocode'];
$amount=$_SESSION['Amount'];
$promocode=$_SESSION['Promocode'];
$tax = ($row['Tax'] / 100) * $amount;
$taxpay =$amount+$tax;
if (isset($_POST['submit'])) {
if ($wallet >= $taxpay) {
$_SESSION['start'] = time();
$_SESSION['checkout'] = $_SESSION['start'] + (1 * 60);
$_SESSION['orderid']=$orderid;
$_SESSION['tax']=$tax;
$update="update users set Wallet=Wallet - '$taxpay' where Userid='$userid'";if(mysqli_query($sp, $update));
$walletlimit="update users set Wlimit=Wlimit + '$amount' where Userid='$userid'";if(mysqli_query($sp, $walletlimit));
$insert = "INSERT INTO transactions(Userid,Orderid,Txnid,Txn,Orders,Amount,Statustxn,Status,Txnshow,Tick,Recharge,Operator,Reamount,Type,Promocode,Date,Time,Tax,Msg) VALUES('$userid', '$orderid','$txnid', 'Paid for order : #$orderid','Recharge $opname Mobile $recharge','Rs .$taxpay','Success','Pending','Myorders','-','$recharge','$opname','$amount','mprepaid','$promocode','$date','$time','$tax','Orders is Waiting')";
if(mysqli_query($sp, $insert));
header('location:https://payflipwallet.com/request/'.$orderid.'');	
}
if ($wallet >= 0.99) { 
$msg = "<div class='msgred'>Low Wallet Balance</div>";
}else{
	$msg = "<div class='msgred'>No Wallet Balance</div>";
}
}
if($promocode){
	$cashback='<p>Cashback :</p> <p style="margin: -20px 347px 11px;"><span style="color: #fff;background:darkorange;border-radius:4px;border: 1px solid darkorange;padding:2px 4px 2px;">&#8377;'.$cash.'</span></p>';
}
?>
<form method="POST" action="">
<p>Recharge No. :</p><p style="margin-top:-30px;margin-bottom:-30px;float:right;"><?php echo $recharge;?></p>
<p>Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $amount;?></p><p>Service Tax :</p>
<p style="margin-top:-30px;float:right;">Rs.<?php echo $tax;?></p>
<p>Total Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $taxpay;?></p><?php if(isset($cashback)){echo $cashback;}?>
<button type="submit" name="submit" onclick="walletcheck();" id="paybutton" class="btn">Pay &#x20B9;<?php echo $amount;?></button></form>
<?php 
}elseif($type=='postpaid' and $payto=='mobile'){
include_once 'cookies/mobile-postpaid-amount.php';
$sql= "select * from tax where Service='Recharge'";
$result= mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($result);
$opname=$_SESSION['Operator'];
$recharge=$_SESSION['No'];
$apply_promocode=$_SESSION['Apply_promocode'];
$amount=$_SESSION['Amount'];
$promocode=$_SESSION['Promocode'];
$tax = ($row['Tax'] / 100) * $amount;
$taxpay =$amount+$tax;		
if (isset($_POST['submit'])) {
if ($wallet >= $taxpay) {
$_SESSION['start'] = time();
$_SESSION['checkout'] = $_SESSION['start'] + (1 * 60);
$_SESSION['orderid']=$orderid;
$_SESSION['tax']=$tax;
$update="update users set Wallet=Wallet - '$taxpay' where Userid='$userid'";if(mysqli_query($sp, $update));
$walletlimit="update users set Wlimit=Wlimit + '$amount' where Userid='$userid'";if(mysqli_query($sp, $walletlimit));
$insert = "INSERT INTO transactions(Userid,Orderid,Txnid,Txn,Orders,Amount,Statustxn,Status,Txnshow,Tick,Recharge,Operator,Reamount,Type,Promocode,Date,Time,Tax,Msg) VALUES('$userid', '$orderid','$txnid', 'Paid for order : #$orderid','Recharge $opname $recharge','Rs .$taxpay','Success','Pending','Myorders','-','$recharge','$opname','$amount','mpostpaid','$promocode','$date','$time','$tax','Orders is Waiting')";
if(mysqli_query($sp, $insert));
header('location:https://payflipwallet.com/request/'.$orderid.'');	
}
if ($wallet >= 0.99) { 
$msg = "<div class='msgred'>Low Wallet Balance</div>";
}else{
	$msg = "<div class='msgred'>No Wallet Balance</div>";
}
}
if($promocode){
	$cashback='<p>Cashback :</p> <p style="margin: -20px 347px 11px;"><span style="color: #fff;background:darkorange;border-radius:4px;border: 1px solid darkorange;padding:2px 4px 2px;">&#8377;'.$cash.'</span></p>';
}
?>

<form method="POST" action="">
<p>Recharge No. :</p><p style="margin-top:-30px;float:right;"><?php echo $recharge;?></p>
<p>Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $amount;?></p>
<p>Service Tax :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $tax;?></p>
<p>Total Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $taxpay;?></p>
<?php if(isset($cashback)){echo $cashback;}?>
<button type="submit" name="submit" onclick="walletcheck();" id="paybutton" class="btn">Pay &#x20B9;<?php echo $amount;?></button></form>
<?php 
}elseif($type=='recharge' and $payto=='datacard'){ 
include_once 'cookies/datacard-prepaid-payment.php';
$sql= "select * from tax where Service='Recharge'";
$result= mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($result);
$opname=$_SESSION['Operator'];
$recharge=$_SESSION['No'];
$apply_promocode=$_SESSION['Apply_promocode'];
$amount=$_SESSION['Amount'];
$promocode=$_SESSION['Promocode'];
$tax = ($row['Tax'] / 100) * $amount;
$taxpay =$amount+$tax;
if (isset($_POST['submit'])) {
if ($wallet >= $taxpay) {
$_SESSION['start'] = time();
$_SESSION['checkout'] = $_SESSION['start'] + (1 * 60);
$_SESSION['orderid']=$orderid;
$_SESSION['tax']=$tax;
$update="update users set Wallet=Wallet - '$taxpay' where Userid='$userid'";if(mysqli_query($sp, $update));	
$walletlimit="update users set Wlimit=Wlimit + '$amount' where Userid='$userid'";if(mysqli_query($sp, $walletlimit));
$insert = "INSERT INTO transactions(Userid,Orderid,Txnid,Txn,Orders,Amount,Statustxn,Status,Txnshow,Tick,Recharge,Operator,Reamount,Type,Promocode,Date,Time,Tax,Msg) VALUES('$userid', '$orderid','$txnid', 'Paid for order : #$orderid','Recharge $opname $recharge','Rs .$taxpay','Success','Pending','Myorders','-','$recharge','$opname','$amount','dprepaid','$promocode','$date','$time','$tax','Orders is Waiting')";
if(mysqli_query($sp, $insert));
header('location:https://payflipwallet.com/request/'.$orderid.'');
}
if ($wallet >= 0.99) { 
$msg = "<div class='msgred'>Low Wallet Balance</div>";
}else{
	$msg = "<div class='msgred'>No Wallet Balance</div>";
}
}
if($promocode){
	$cashback='<p>Cashback :</p> <p style="margin: -20px 347px 11px;"><span style="color: #fff;background:darkorange;border-radius:4px;border: 1px solid darkorange;padding:2px 4px 2px;">&#8377;'.$cash.'</span></p>';
}
?>

<form method="POST" action="">
<p>Recharge No. :</p><p style="margin-top:-30px;float:right;"><?php echo $recharge;?></p>
<p>Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $amount;?></p>
<p>Service Tax :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $tax;?></p>
<p>Total Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $taxpay;?></p>
<?php if(isset($cashback)){echo $cashback;}?>
<button type="submit" name="submit" onclick="walletcheck();" id="paybutton" class="btn">Pay &#x20B9;<?php echo $amount;?></button></form>
<?php
}elseif($type=='postpaid' and $payto=='datacard'){ 
include_once 'cookies/datacard-postpaid-payment.php';
$sql= "select * from tax where Service='Recharge'";
$result= mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($result);
$opname=$_SESSION['Operator'];
$recharge=$_SESSION['No'];
$apply_promocode=$_SESSION['Apply_promocode'];
$amount=$_SESSION['Amount'];
$promocode=$_SESSION['Promocode'];
$tax = ($row['Tax'] / 100) * $amount;
$taxpay =$amount+$tax;
if (isset($_POST['submit'])) {
if ($wallet >= $taxpay) {
$_SESSION['start'] = time();
$_SESSION['checkout'] = $_SESSION['start'] + (1 * 60);
$_SESSION['orderid']=$orderid;
$_SESSION['tax']=$tax;
$update="update users set Wallet=Wallet - '$taxpay' where Userid='$userid'";if(mysqli_query($sp, $update));	
$walletlimit="update users set Wlimit=Wlimit + '$amount' where Userid='$userid'";if(mysqli_query($sp, $walletlimit));
$insert = "INSERT INTO transactions(Userid,Orderid,Txnid,Txn,Orders,Amount,Statustxn,Status,Txnshow,Tick,Recharge,Operator,Reamount,Type,Promocode,Date,Time,Tax,Msg) VALUES('$userid', '$orderid','$txnid', 'Paid for order : #$orderid','Recharge $opname $recharge','Rs.$taxpay','Success','Pending','Myorders','-','$recharge','$opname','$amount','dpostpaid','$promocode','$date','$time','$tax','Orders is Waiting')";
if(mysqli_query($sp, $insert));
header('location:https://payflipwallet.com/request/'.$orderid.'');
}
if ($wallet >= 0.99) { 
$msg = "<div class='msgred'>Low Wallet Balance</div>";
}else{
	$msg = "<div class='msgred'>No Wallet Balance</div>";
}
}
if($promocode){
	$cashback='<p>Cashback :</p> <p style="margin: -20px 347px 11px;"><span style="color: #fff;background:darkorange;border-radius:4px;border: 1px solid darkorange;padding:2px 4px 2px;">&#8377;'.$cash.'</span></p>';
}
?>

<form method="POST" action="">
<p>Recharge No. :</p><p style="margin-top:-30px;float:right;"><?php echo $recharge;?></p>
<p>Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $amount;?></p>
<p>Service Tax :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $tax;?></p>
<p>Total Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $taxpay;?></p>
<?php if(isset($cashback)){echo $cashback;}?>
<button type="submit" name="submit" onclick="walletcheck();" id="paybutton" class="btn">Pay &#x20B9;<?php echo $amount;?></button></form>
<?php 
}elseif($type=='recharge' and $payto=='dth'){ 
include_once 'cookies/dth-payment.php';
$sql= "select * from tax where Service='Recharge'";
$result= mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($result);
$opname=$_SESSION['Operator'];
$recharge=$_SESSION['No'];
$apply_promocode=$_SESSION['Apply_promocode'];
$amount=$_SESSION['Amount'];
$promocode=$_SESSION['Promocode'];
$tax = ($row['Tax'] / 100) * $amount;
$taxpay =$amount+$tax;
if (isset($_POST['submit'])) {
if ($wallet >= $taxpay) {
$_SESSION['start'] = time();
$_SESSION['checkout'] = $_SESSION['start'] + (1 * 60);
$_SESSION['orderid']=$orderid;
$_SESSION['tax']=$tax;
$update="update users set Wallet=Wallet - '$taxpay' where Userid='$userid'";if(mysqli_query($sp, $update));
$walletlimit="update users set Wlimit=Wlimit + '$amount' where Userid='$userid'";if(mysqli_query($sp, $walletlimit));
$insert = "INSERT INTO transactions(Userid,Orderid,Txnid,Txn,Orders,Amount,Statustxn,Status,Txnshow,Tick,Recharge,Operator,Reamount,Type,Promocode,Date,Time,Tax,Msg) VALUES('$userid', '$orderid','$txnid', 'Paid for order : #$orderid','Recharge $opname $recharge','Rs .$taxpay','Success','Pending','Myorders','-','$recharge','$opname','$amount','dth','$promocode','$date','$time','$tax','Orders is Waiting')";
if(mysqli_query($sp, $insert));
header('location:https://payflipwallet.com/request/'.$orderid.'');
}
if ($wallet >= 0.99) { 
$msg = "<div class='msgred'>Low Wallet Balance</div>";
}else{
	$msg = "<div class='msgred'>No Wallet Balance</div>";
}
}
if($promocode){
	$cashback='<p>Cashback :</p> <p style="margin: -20px 347px 11px;"><span style="color: #fff;background:darkorange;border-radius:4px;border: 1px solid darkorange;padding:2px 4px 2px;">&#8377;'.$cash.'</span></p>';
}
?>

<form method="POST" action="">
<p>Recharge No. :</p><p style="margin-top:-30px;float:right;"><?php echo $recharge;?></p>
<p>Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $amount;?></p>
<p>Service Tax :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $tax;?></p>
<p>Total Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $taxpay;?></p>
<?php if(isset($cashback)){echo $cashback;}?>           
<button type="submit" name="submit" onclick="walletcheck();" id="paybutton" class="btn">Pay &#x20B9;<?php echo $amount;?></button></form>
<?php
}elseif($type=='bill' and $payto=='landline'){ 
include_once 'cookies/landline-bill-payment.php';
$sql= "select * from tax where Service='Bill'";
$result= mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($result);
$opname=$_SESSION['Operator'];
$acnumber=$_SESSION['Acnumber'];
$recharge=$_SESSION['No'];
$apply_promocode=$_SESSION['Apply_promocode'];
$amount=$_SESSION['Amount'];
$promocode=$_SESSION['Promocode'];
$tax = ($row['Tax'] / 100) * $amount;
$taxpay =$amount+$tax;
if (isset($_POST['submit'])) {
if ($wallet >= $taxpay) {
$_SESSION['start'] = time();
$_SESSION['checkout'] = $_SESSION['start'] + (1 * 60);
$_SESSION['orderid']=$orderid;
$_SESSION['tax']=$tax;
$update="update users set Wallet=Wallet - '$taxpay' where Userid='$userid'";if(mysqli_query($sp, $update));	
$walletlimit="update users set Wlimit=Wlimit + '$amount' where Userid='$userid'";if(mysqli_query($sp, $walletlimit));
$insert = "INSERT INTO transactions(Userid,Orderid,Txnid,Txn,Orders,Amount,Statustxn,Status,Txnshow,Tick,Recharge,Operator,Reamount,Type,Acnumber,Promocode,Date,Time,Tax,Msg) VALUES('$userid', '$orderid','$txnid', 'Paid for order : #$orderid','Bill $opname $recharge','Rs.$taxpay','Success','Pending','Myorders','-','$recharge','$opname','$amount','landline','$acnumber','$promocode','$date','$time','$tax','Orders is Waiting')";
if(mysqli_query($sp, $insert));
header('location:https://payflipwallet.com/request/'.$orderid.'');
}
if ($wallet >= 0.99) { 
$msg = "<div class='msgred'>Low Wallet Balance</div>";
}else{
	$msg = "<div class='msgred'>No Wallet Balance</div>";
}
}
if($promocode){
	$cashback='<p>Cashback :</p> <p style="margin-top:-30px;"><span style="color:#fff;background:darkorange;border-radius:4px;border:1px solid darkorange;padding:2px 4px 2px">&#8377;'.$cash.'</span></p>';
}
?>

<form method="POST" action="">
<p>Bill Pay No. :</p><p style="margin-top:-30px;float:right;"><?php echo $recharge;?></p>
<p>Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $amount;?></p>
<p>Service Tax :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $tax;?></p>
<p>Total Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $taxpay;?></p>
<?php if(isset($cashback)){echo $cashback;}?>
<button type="submit" name="submit" onclick="walletcheck();" id="paybutton" class="btn">Pay &#x20B9;<?php echo $amount;?></button></form>
	
<?php 
}elseif($type=='bill' and $payto=='broadband'){ 
include_once 'cookies/broadband-bill-payment.php';
$sql= "select * from tax where Service='Bill'";
$result= mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($result);
$opname=$_SESSION['Operator'];
$acnumber=$_SESSION['Acnumber'];
$recharge=$_SESSION['No'];
$apply_promocode=$_SESSION['Apply_promocode'];
$amount=$_SESSION['Amount'];
$promocode=$_SESSION['Promocode'];
$tax = ($row['Tax'] / 100) * $amount;
$taxpay =$amount+$tax;		
if (isset($_POST['submit'])) {
if ($wallet >= $taxpay) {
$_SESSION['start'] = time();
$_SESSION['checkout'] = $_SESSION['start'] + (1 * 60);
$_SESSION['orderid']=$orderid;
$_SESSION['tax']=$tax;
$update="update users set Wallet=Wallet - '$taxpay' where Userid='$userid'";if(mysqli_query($sp, $update));	
$walletlimit="update users set Wlimit=Wlimit + '$amount' where Userid='$userid'";if(mysqli_query($sp, $walletlimit));
$insert = "INSERT INTO transactions(Userid,Orderid,Txnid,Txn,Orders,Amount,Statustxn,Status,Txnshow,Tick,Recharge,Operator,Reamount,Type,Acnumber,Promocode,Date,Time,Tax,Msg) VALUES('$userid', '$orderid','$txnid', 'Paid for order : #$orderid','Bill $opname $recharge','Rs.$amount','Success','Pending','Myorders','-','$recharge','$opname','$taxpay','broadband','$acnumber','$promocode','$date','$time','$tax','Orders is Waiting')";
if(mysqli_query($sp, $insert));
header('location:https://payflipwallet.com/request/'.$orderid.'');
}
if ($wallet >= 0.99) { 
$msg = "<div class='msgred'>Low Wallet Balance</div>";
}else{
$msg = "<div class='msgred'>No Wallet Balance</div>";
}
}
if($promocode){
	$cashback='<p>Cashback :</p> <p style="margin: -20px 347px 11px;"><span style="color: #fff;background:darkorange;border-radius:4px;border: 1px solid darkorange;padding:2px 4px 2px;">&#8377;'.$cash.'</span></p>';
}
?>

<form method="POST" action="">
<p>Bill Pay No. :</p><p style="margin-top:-30px;float:right;"><?php echo $recharge;?></p>
<p>Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $amount;?></p>
<p>Service Tax :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $tax;?></p>
<p>Total Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $taxpay;?></p>
<?php if(isset($cashback)){echo $cashback;}?>
<button type="submit" name="submit" onclick="walletcheck();" id="paybutton" class="btn">Pay &#x20B9;<?php echo $amount;?></button></form>
<?php 
}elseif($type=='bill' and $payto=='electricity'){ 
include_once 'cookies/electricity-bill-payment.php';
$sql= "select * from tax where Service='Bill'";
$result= mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($result);
$opname=$_SESSION['Operator'];
$acnumber=$_SESSION['Acnumber'];
$apply_promocode=$_SESSION['Apply_promocode'];
$amount=$_SESSION['Amount'];
$promocode=$_SESSION['Promocode'];	
$tax = ($row['Tax'] / 100) * $amount;
$taxpay =$amount+$tax;	
if (isset($_POST['submit'])) {
if ($wallet >= $taxpay) {
$_SESSION['start'] = time();
$_SESSION['checkout'] = $_SESSION['start'] + (1 * 60);
$_SESSION['orderid']=$orderid;
$_SESSION['tax']=$tax;
$update="update users set Wallet=Wallet - '$taxpay' where Userid='$userid'";if(mysqli_query($sp, $update));	
$walletlimit="update users set Wlimit=Wlimit + '$amount' where Userid='$userid'";if(mysqli_query($sp, $walletlimit));
$insert = "INSERT INTO transactions(Userid,Orderid,Txnid,Txn,Orders,Amount,Statustxn,Status,Txnshow,Tick,Recharge,Operator,Reamount,Type,Acnumber,Promocode,Date,Time,Tax,Msg) VALUES('$userid', '$orderid','$txnid', 'Paid for order : #$orderid','Bill $opname $acnumber','Rs.$taxpay','Success','Pending','Myorders','-','$acnumber','$opname','$amount','electricity','$acnumber','".strtoupper($promocode)."','$date','$time','$tax','Orders is Waiting')";
if(mysqli_query($sp, $insert));
header('location:https://payflipwallet.com/request/'.$orderid.'');
}
if ($wallet >= 0.99) { 
$msg = "<div class='msgred'>Low Wallet Balance</div>";
}else{
	$msg = "<div class='msgred'>No Wallet Balance</div>";
}
}
if($promocode){
	$cashback='<p>Cashback :</p> <p style="margin: -20px 347px 11px;"><span style="color: #fff;background:darkorange;border-radius:4px;border: 1px solid darkorange;padding:2px 4px 2px;">&#8377;'.$cash.'</span></p>';
}
?>

<form method="POST" action="">
<p>Bill Pay No. :</p><p style="margin-top:-30px;float:right;"><?php echo $acnumber;?></p>
<p>Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $amount;?></p>
<p>Service Tax :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $tax;?></p>
<p>Total Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $taxpay;?></p>
<?php if(isset($cashback)){echo $cashback;}?>
<button type="submit" name="submit" onclick="walletcheck();" id="paybutton" class="btn">Pay &#x20B9;<?php echo $amount;?></button></form>
<?php
}elseif($type=='recharge' and $payto=='googleplay'){ 
include_once 'cookies/googleplay-amount.php';
$sql= "select * from tax where Service='GooglePlay'";
$result= mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($result);
$opname=$_SESSION['Operator'];
$recharge=$_SESSION['No'];
$apply_promocode=$_SESSION['Apply_promocode'];
$amount=$_SESSION['Amount'];
$promocode=$_SESSION['Promocode'];
$tax = ($row['Tax'] / 100) * $amount;
$taxpay =$amount+$tax;		
if (isset($_POST['submit'])) {
if ($wallet >= $taxpay) {
$_SESSION['start'] = time();
$_SESSION['checkout'] = $_SESSION['start'] + (1 * 60);
$_SESSION['orderid']=$orderid;
$_SESSION['tax']=$tax;
$update="update users set Wallet=Wallet - '$taxpay' where Userid='$userid'";if(mysqli_query($sp, $update));
$walletlimit="update users set Wlimit=Wlimit + '$amount' where Userid='$userid'";if(mysqli_query($sp, $walletlimit));
$insert = "INSERT INTO transactions(Userid,Orderid,Txnid,Txn,Orders,Amount,Statustxn,Status,Txnshow,Tick,Recharge,Operator,Reamount,Type,Promocode,Date,Time,Tax,Msg) VALUES('$userid', '$orderid','$txnid', 'Paid for order : #$orderid','Recharge $opname $recharge','Rs .$taxpay','Success','Pending','Myorders','-','$recharge','$opname','$amount','googleplay','$promocode','$date','$time','$tax','Orders is Waiting')";
if(mysqli_query($sp, $insert));
header('location:https://payflipwallet.com/request/'.$orderid.'');
}
if ($wallet >= 0.99) { 
$msg = "<div class='msgred'>Low Wallet Balance</div>";
}else{
	$msg = "<div class='msgred'>No Wallet Balance</div>";
}
}
if($promocode){
	$cashback='<p>Cashback :</p> <p style="margin: -20px 347px 11px;"><span style="color: #fff;background:darkorange;border-radius:4px;border: 1px solid darkorange;padding:2px 4px 2px;">&#8377;'.$cash.'</span></p>';
}
?>

<form method="POST" action="">
<p>Recharge No. :</p><p style="margin-top:-30px;float:right;"><?php echo $recharge;?></p>
<p>Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $amount;?></p>
<p>Service Tax :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $tax;?></p>
<p>Total Amount :</p><p style="margin-top:-30px;float:right;">Rs.<?php echo $taxpay;?></p>
<?php if(isset($cashback)){echo $cashback;}?>
<button type="submit" name="submit" onclick="walletcheck();" id="paybutton" class="btn">Pay &#x20B9;<?php echo $amount;?></button></form>
<?php
}else{
header ('location:https://payflipwallet.com');
}
}
?>
