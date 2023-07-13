 <?php 
require_once('session/session.php'); 
$limit=(isset($_GET['limit']))?$sp->real_escape_string(trim($_GET['limit'])):'';
$load=0+$limit;
$result=mysqli_query($sp,"SELECT * FROM transactions WHERE Userid='$userid' ORDER BY id DESC LIMIT 0,$load");
$count=$result->num_rows;
while($row = mysqli_fetch_array($result)){
$operator=$row['Operator'];
$opname = array("AIRTEL"=>"Paidorder","VODAFONE"=>"Paidorder","IDEA"=>"Paidorder","TATA INDICOM"=>"Paidorder","TATA DOCOMO"=>"Paidorder","TELENOR"=>"Paidorder","BSNL"=>"Paidorder","AIRCEL"=>"Paidorder","Videocon"=>"Paidorder","RELIANCE GSM"=>"Paidorder","Addmoney"=>"Addmoney","TATA PHOTON MAX"=>"Paidorder",
"RELIANCE CDMA"=>"Paidorder","AIRCEL POSTPAID"=>"Paidorder","AIRTEL POSTPAID"=>"Paidorder","AIRTEL LANDLINE"=>"Paidorder","AIRTEL BROADBAND"=>"Paidorder","AIRTEL DEGITAL TV"=>"Paidorder","BSNL BROADBAND"=>"Paidorder","BSNL LANDLINE"=>"Paidorder","BSNL POSTPAID"=>"Paidorder","DISH TV"=>"Paidorder","IDEA POSTPAID"=>"Paidorder","MTS MBLAZE"=>"Paidorder","MTS MBROWSE"=>"Paidorder","RELIANCE GSM POSTPAID"=>"Paidorder","RELIANCE NETCONNECT"=>"Paidorder","RELIANCE CDMA POSTPAID"=>"Paidorder",
"RELIANCE BIG TV"=>"Paidorder","SUNDIRECT"=>"Paidorder","TATADOCOMO POSTPAID"=>"Paidorder","TATA PHOTON PLUS"=>"Paidorder","TATASKY"=>"Paidorder","VIDEOCON D2H"=>"Paidorder","VODAFONE POSTPAID"=>"Paidorder","Sendmoney"=>"Sendmoney","Transfer-to-bank"=>"Transfer-to-bank","GooglePlay"=>"Paidorder","PANJAB STATE POWER"=>"Paidorder","RELIANCE JIO"=>"Paidorder","Receivedmoney"=>"Receivedmoney","Refundcash"=>"Refundcash");
if($row['Tick']=='+'){$transaction_type='Credit';}else{$transaction_type='Debit';}
if($count>10){$displayform="display:block;";}else{$displayform="display:none;";}
if($row['Statustxn']=='Success'){$color="background:#7ed321;padding:0px 5px 0px;";}
elseif($row['Statustxn']=='Pending'){$color="background:#ff7f50;padding:0px 5px 0px;";}
else{$color="background:red;padding:0px 9px 0px;";}
?>
                    <br>
                    <div style="margin-bottom:2px;">
                        <div style="margin-left:20px;margin-top:-14px;border-radius:5px;box-shadow:0 0 1px 1px #e2e2e2" class="<?php echo $opname{$operator};?>"></div>
                        <div style="margin-top: -38px;color:#828282;margin-left:85px;margin-bottom: 20px;">
                            <?php echo $row['Txn'];?>
                        </div>
                        <div style="margin-right:65.6%;margin-top: -41px;font-size:12px;float:right;color:#fff;border-radius:3px;<?php echo $color;?>">
                            <?php echo $row['Statustxn'];?>
                        </div>
                        <div style="width:47.2%;margin-top:-38px;color:#828282;font-size:12px;float:right;">
                            <?php echo $row['Amount'];?>
                        </div>
                        <div style="width:30.3%;margin-top:-38px;color:#828282;font-size:12px;float:right;">#
                            <?php echo $row['Orderid'];?>
                        </div>
                        <div style="width:30%;margin-top:-24px;color:darkgrey;font-size:10px;float:right;">
                            <?php echo $row['Date'];?>
                                <?php echo $row['Time'];?>
                        </div>
                        <div style="width:11.5%;margin-top:-38px;color:#828282;font-size:12px;float:right;">
                            <?php echo $transaction_type;?>
                        </div>
                        <div class="divider-lt"></div>
                    </div>
                    <?php } 
if($count==0){
echo '<center><div style="margin-top:80px;">
<h1 style="color: #000!important;">No transactions found!</h1>
<div><img src="/resource/logos/wallet/Orders.png"><br></div><a href="https://payflipwallet.com"><button style="background:#e3714d;border-radius:5px;border:none;padding:10px;color:#fff" type="submit">
<span style="padding: 0px 20px 15px;" >Start Shopping</span></button></a></div></center>';
$displayform="display:none;";
}
?>