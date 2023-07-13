<?php
require_once('auth/session/session.php');
if(isset($_GET['orderId'])){
$id=(isset($_GET['orderId']))?$sp->real_escape_string(trim($_GET['orderId'])):'';
$query = "SELECT * FROM transactions where Orderid='".$id."' and Userid='".$userid."'";
$result = mysqli_query($sp,$query);
$row = mysqli_fetch_array($result);

if($row['Type']=="mprepaid" || $row['Type']=="mpostpaid" || $row['Type']=="dprepaid" || $row['Type']=="dpostpaid" || $row['Type']=="addmoney" || $row['Type']=="sendmoney" || $row['Type']=="googleplay"){
$number='<span class="ltTxt">Mobile No.</span>
<span class="rtTxt">:&nbsp; <strong>'.$row['Recharge'].'</strong></span>
</li>';
}
elseif($row['Type']=="dth"){
$number='<span class="ltTxt">Card No.</span>
<span class="rtTxt">:&nbsp; <strong>'.$row['Recharge'].'</strong></span>
</li>';
}
elseif($row['Type']=="electricity" || $row['Type']=="banktransfer"){
$number='<span class="ltTxt">Account No.</span>
<span class="rtTxt">:&nbsp; <strong>'.$row['Acnumber'].'</strong></span>
</li>';
}
elseif($row['Type']=="broadband" || $row['Type']=="landline"){
$number='<span class="ltTxt">Phone No.</span>
<span class="rtTxt">:&nbsp; <strong>'.$row['Recharge'].'</strong></span>
</li>';
}	else{
  header('location:https://payflipwallet.com');
	}	
	}	
?>
    <!DOCTYPE html>
    <html lang='en-US'>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="robots" content="index, follow">
        <title>Invoice | PayflipWallet.com</title>
        <link rel="icon" type="image/x-icon" href="/resource/ico/favicon.ico">
        <link href="/resource/style/invoice.css" rel="stylesheet" type="text/css">

    </head>

    <body id="invoiceWrapper">
        <div class="pageWidth">
            <h1 class="invoicePageHeader">
<div class="invvoiceMainConatienr">
<div class="card">
<div class="invoiceContHeader clearfix">
<h4 class="titleMain fLeft">PAYMENT RECEIPT</h4>
<a href="https://payflipwallet.com/invoice/<?php echo $row['Orderid'];?>" class="invoiceLogo fRight"><h2 style="font-size:18px;padding:7px;color:#fff">PayflipWallet</h2></a>
</div>
<div class="invoiceContMiddle clearfix">
<div class="detailsOuter clearfix">
<ul class="detailsList fLeft">
<li>
<span class="ltTxt">Order Id</span>      
<span class="rtTxt">:&nbsp;  <?php echo $row['Orderid'];?></span> 
</li><li>                                              
<span class="ltTxt">Date</span>
<span class="rtTxt">:&nbsp;  <?php echo $row['Date'];?></span>
</li><li>
<?php if(isset($number)){echo $number;}?>
</ul>
<div class="paymentTable fRight">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="invoiceTable">
<tbody><tr>
<th width="11%" class="center">S.No</th>
<th width="55%">Particular</th>
<th width="34%">Amount</th>
</tr><tr>
<td class="center">1.</td>
<td>Amount</td>
<td><?php echo $row['Amount'];?></td>
</tr><tr>
<td class="center">2.</td>
<td>Service Tax</td>
<td>Rs. <?php echo $row['Tax'];?></td>
</tr><tr>
<td colspan="2" class="alignRt"> Total Amount</td>
<td><strong><?php echo $row['Amount'];?></strong></td></tr>
</tbody></table>
</div></div>    
<p class="contactDetails cl">
PayflipWallet Systems Pvt. Ltd, Lohakhera, Sangrur, Punjab-148106 <br> Contact us at <strong> care@payflipwallet.com </strong>
</p></div></div></div>
<center><button class="button_print" onclick="window.print();" >Print</button></center></div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96524897-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-96524897-1');
</script>
</body></html>