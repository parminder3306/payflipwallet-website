<?php
include "session/db.php";
$service=(isset($_REQUEST['src']))?$sp->real_escape_string(trim($_REQUEST['src'])):'';
$amount=(isset($_REQUEST['amount']))?$sp->real_escape_string(trim($_REQUEST['amount'])):'';
$sql= "select * from tax where Service='$service' ";
$resultset = mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($resultset);
if($service=='Bank' && $amount>499 && $amount<5001){
$tax = ($row['Tax'] / 100) * $amount;
echo $tax;
}elseif($service=='Sendmoney' && $amount>9.99 && $amount<5001){
$tax = ($row['Tax'] / 100) * $amount;
echo $tax;
}
else{

}
?>