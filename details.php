<?php
require_once('auth/session/session.php');
require_once('auth/session/authorize.php');
if(isset($_GET['orderId'])){
$id=(isset($_GET['orderId']))?$sp->real_escape_string(trim($_GET['orderId'])):'';
$query = "SELECT * FROM transactions where Orderid='".$id."' or Txnid='".$id."'  and Userid='".$userid."'";
$result = mysqli_query($sp,$query);
$Results = mysqli_fetch_array($result);
$count=$result->num_rows;			
$operator=$Results['Operator'];			
$opname = array("AIRTEL"=>"AIRTEL","VODAFONE"=>"VODAFONE","IDEA"=>"IDEA","TATA INDICOM"=>"TATAINDICOM","TATA DOCOMO"=>"TATADOCOMO","TELENOR"=>"TELENOR","BSNL"=>"BSNL","AIRCEL"=>"AIRCEL","Videocon"=>"Videocon","RELIANCE GSM"=>"RELIANCEGSM","Addmoney"=>"Addmoney","TATA PHOTON MAX"=>"TATAPHOTONMAX",
"RELIANCE CDMA"=>"RELIANCECDMA","AIRCEL POSTPAID"=>"AIRCELPOSTPAID","AIRTEL POSTPAID"=>"AIRTELPOSTPAID","AIRTEL LANDLINE"=>"AIRTELLANDLINE","AIRTEL BROADBAND"=>"AIRTELBROADBAND","AIRTEL DEGITAL TV"=>"AIRTELDEGITALTV","BSNL BROADBAND"=>"BSNLBROADBAND","BSNL LANDLINE"=>"BSNLLANDLINE","BSNL POSTPAID"=>"BSNLPOSTPAID","DISH TV"=>"DISHTV","IDEA POSTPAID"=>"IDEAPOSTPAID","MTS MBLAZE"=>"MTSMBLAZE","MTS MBROWSE"=>"MTSMBROWSE","RELIANCE GSM POSTPAID"=>"RELIANCEGSMPOSTPAID","RELIANCE NETCONNECT"=>"RELIANCENETCONNECT","RELIANCE CDMA POSTPAID"=>"RELIANCECDMAPOSTPAID",
"RELIANCE BIG TV"=>"RELIANCEBIGTV","SUNDIRECT"=>"SUNDIRECT","TATADOCOMO POSTPAID"=>"TATADOCOMOPOSTPAID","TATA PHOTON PLUS"=>"TATAPHOTONPLUS","TATASKY"=>"TATASKY","VIDEOCON D2H"=>"VIDEOCOND2H","VODAFONE POSTPAID"=>"VODAFONEPOSTPAID","Sendmoney"=>"Sendmoney","Transfer-to-bank"=>"Transfer-to-bank","PANJAB STATE POWER"=>"Electricity","RELIANCE JIO"=>"RELIANCEJIO","Transfer-to-bank"=>"Transfer-to-bank","GooglePlay"=>"GOOGLEPLAY");		
if($count==0){
	$emptyorders='<center><div class="Orders"></div><p style="color:#828282;font-size:17px;">No Orders Found</p>';
}
if($Results['Status']=="Success"){
$payment='<p style="margin:9px 0 0">Payment of '.$Results['Amount'].' received by Payflip Wallet !</p>';
$color='#7ed321!important';
$found='Your Order No is';
$form='<button style="color:#fff;background:#0073cf;border:2px solid #0073cf;font-size:12px;margin:0px 15px 0;border-radius:2px;"><a style="color: #fff;" href="https://payflipwallet.com/repeatorder/'.$Results['Orderid'].'">Repeat</a></button>
<button style="color:#fff;background:#0073cf;border:2px solid #0073cf;font-size:12px;margin:0;border-radius:2px;"><a style="color: #fff;" href="https://payflipwallet.com/invoice/'.$Results['Orderid'].'">invoice</a></button>
<button style="background:#0073cf;border:2px solid #0073cf;font-size:12px;margin:0px 15px 0;border-radius:2px;"><a style="color: #fff;" href="https://payflipwallet.com/contactus">Contact Us</a></button>';
if($Results['Type']=='googleplay'){$googleplay='1';}
if($Results['Promocode']!==''){$promocode='1';}
}
if($Results['Status']=="Failure"){
	$payment="Payment of ".$Results['Amount']." failed !<br>Your bank hasn't confirmed this payment. Add or Refund money in PayflipWallet Please check back in 4 hours.";
    $color='red';
    $refund='Refund Successfully';
	$found='Your Order No is';
	$form='
<button style="color:#fff;background:#0073cf;border:2px solid #0073cf;font-size:12px;margin:0px 15px 0;border-radius:2px;"><a style="color: #fff;" href="https://payflipwallet.com/repeatorder/'.$Results['Orderid'].'">Repeat</a></button>
<button style="color:#fff;background:#ccc;border:2px solid #ccc;font-size:12px;margin:0;border-radius:2px">invoice</button>
<button style="background:#0073cf;border:2px solid #0073cf;font-size:12px;margin:0px 15px 0;border-radius:2px;"><a style="color: #fff;" href="https://payflipwallet.com/contactus">Contact Us</a></button>';
	}	
	if($Results['Status']=="Pending"){
	$payment='<p style="margin:9px 0 0">Payment of '.$Results['Amount'].' is Waiting !</p>';
	$color='#0073cf!important';
    $found='Your Order No is';
$form='
<button style="color:#fff;background: #ccc;border: 2px solid #ccc;font-size:12px;margin:0px 15px 0;border-radius:2px">Repeat</button>
<button style="color:#fff;background: #ccc;border: 2px solid #ccc;font-size:12px;margin:0;border-radius:2px">invoice</button>
<button style="background:#0073cf;border:2px solid #0073cf;font-size:12px;margin:0px 15px 0;border-radius:2px;"><a style="color: #fff;" href="https://payflipwallet.com/contactus">Contact Us</a></button>';
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
        <meta http-equiv="refres" content="30" />
        <title>Order Details</title>
        <link rel="icon" type="image/x-icon" href="/resource/ico/favicon.ico">
        <meta name="keywords" content="online recharge, bill pays, send money, bank transfer, dth recharge, prepaid recharge, postpaid recharge, googleplay recharge">
        <meta name="description" content="Order Status - PayflipWallet ,online recharge fast service in india, prepaid recharges, postpaid recharges, dth recharges, googleplay recharge and more..">
        <link href="/resource/style/style.css" rel="stylesheet" type="text/css">
        <link href="/resource/style/images.css" rel="stylesheet" type="text/css">
        <script src="/resource/ajax/jquery.min.js"></script>
        <script type="text/javascript" src="/resource/ajax/show.js"></script>

    </head>

    <body id="scrollbar-custom">
        <div class="header">
<div class="headerlogo">PayflipWallet</div>
            <div class="header-right">
                <div class="wallet_icon">
                    <div class="header-right-wallet">
                        <a href="https://payflipwallet.com/payflipwallet" title="Payflip Wallet">
                            <div class="top"><span class="header-round-icon">&#x20B9;<?php echo $wallet;?>/-</span></div>
                    </div>
                </div>
                <div class="header-right-wallet-title">
                    <div class="font11">Payflip Wallet</div>
                    </a>
                </div>
                <div class="orders_icon">
                    <div class="header-right-orders">
                        <a href="https://payflipwallet.com/myOrders" title="My Orders">MyOrders</a>
                        <div class="top"><span class="header-round-icon"><?php echo $orderscount;?></span></div>
                    </div>
                </div>
                <div class="user_icon">
                    <div class="header-right-user">
                        <div class="dropdown">
                            <?php echo $name;?>
                                <div style="display:<?php echo $menudisplay;?>">
                                    <div class="dropdown-content">
                                        <a href="https://payflipwallet.com/profile">View Profile</a>
                                        <a href="https://payflipwallet.com/myOrders">Your Orders</a>
                                        <a href="https://payflipwallet.com/payflipwallet">Your Wallet</a>
                                        <!--<a href="help">Help Center</a>-->
                                        <a href="https://payflipwallet.com/logout">Log Out</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card3"></div>
        <div class="header-icon">
            <ul>
                <li>
                    <a class="clfff" href="https://payflipwallet.com/recharge">
                        <div><img src="/resource/images/mobile.png" height="35" width="35" alt="Mobile" title="Mobile Recharge"></div>Mobile</a>
                </li>
                <li>
                    <a class="clfff" href="https://payflipwallet.com/datacard">
                        <div><img src="/resource/images/datacard.png" height="35" width="35" alt="Datacard" title="Datacard Recharge"></div>Datacard</a>
                </li>
                <li>
                    <a class="clfff" href="https://payflipwallet.com/dth">
                        <div><img src="/resource/images/dth.png" height="35" width="35" alt="DTH" title="DTH Recharge"></div>DTH</a>
                </li>
                <li>
                    <a class="clfff" href="https://payflipwallet.com/landline-bill">
                        <div><img src="/resource/images/landline.png" height="35" width="35" alt="Landline" title="Landline"></div>Landline</a>
                </li>
                <li>
                    <a class="clfff" href="https://payflipwallet.com/broadband-bill">
                        <div><img src="/resource/images/broadband.png" height="35" width="35" alt="Broadband" title="Broadband"></div>Broadband</a>
                </li>
                <li>
                    <a class="clfff" href="https://payflipwallet.com/electricity-bill">
                        <div><img src="/resource/images/electricity.png" height="35" width="35" alt="Electricity" title="Electricity"></div>Electricity</a>
                </li>
                <li>
                    <a class="clfff" href="https://payflipwallet.com/sendmoney">
                        <div><img src="/resource/images/sendmoney.png" height="35" width="35" alt="SendMoney" title="SendMoney"></div>SendMoney</a>
                </li>
                <li>
                    <a class="clfff" href="https://payflipwallet.com/transferbank">
                        <div><img src="/resource/images/bank.png" height="35" width="35" alt="Transfer To Bank" title="Transfer To Bank"></div>Transfer To Bank</a>
                </li>
                <li>
                    <a class="clfff" href="https://payflipwallet.com/googleplay">
                        <div><img src="/resource/images/googleplay.png" height="35" width="35" alt="Google Play" title="Google Play"></div>Google Play</a>
                </li>
                <li>
                    <a class="clfff" href="https://payflipwallet.com/offers">
                        <div><img src="/resource/images/offers.png" height="35" width="35" alt="Deals/Offers" title="Deals/Offers"></div>Deals</a>
                </li>
            </ul>
        </div>
        </div>
        <div class="card-orders">
            <div style="font-size: 14px;margin:-3px 0 0;padding-left:10px;float: left!important;width:60%;">
                <?php if(isset($payment)){echo $payment;}?>
            </div>
            <div style="font-size: 12px;font-weight:500;text-align: right;color: #828282;float: right!important;margin:5px 5px 0;padding-bottom: 5px;">
                <?php if(isset($found)){echo $found;}?><span style="margin-left:5px;color:#000;"><?php echo $Results['Orderid'];?></span>
                    <br>
                    <?php echo $Results['Date'];?>
                        <?php echo $Results['Time'];?>
            </div>
        </div>
        <div style="border:1px solid #dff0f4;background:#fff;border-radius:4px;padding:80px;margin:20px 5% -40px;width:90%;">
            <p style="margin:-60px -55px 34px;border-bottom:2px dotted #DEEAEE;padding-bottom: 15px;">Order History</p>
            <div style="padding:0;float:left;margin-left: -42px;border-radius:4px" class="<?php echo $opname{$operator};?>"></div>
            <div style="padding:0 15px 0;color:#222;font-size: 12px;float:left;">
                <?php echo $Results['Orders'];?>
            </div>
            <div style="padding:32px 27px 0;color:#222;font-size: 12px;"></div>
            <?php if(isset($form)){echo $form;}?>
                <?php if(isset($emptyorders)){echo $emptyorders;}?>
                    <div style="margin:-45px -30px 0;color:#222;font-size: 12px;float:right;">
                        <?php if(isset($Results['Reamount'])){echo 'Rs.'.$Results['Reamount'].'';}?>
                    </div>
                    <div style="margin:0px -45px 0px;background:<?php if(isset($color)){echo $color;}?>;color:#fff;float:right;padding:2px 10px 2px;border-radius:2px">
                        <?php echo $Results['Status'];?>
                    </div>
                    <div style="margin-top:50px;color:#7ed321;float:right;font-weight:500;margin-right:-50px;">
                        <?php if(isset($refund)){ echo $refund;}?>
                    </div>
                    <div style="float:right;margin-top:-100px;font-size:12px;font-weight:600;margin-right:-60px">
                        <?php if(isset($promocode)){ echo '<span style="background:#ff8c00;padding:3px 5px;color:#fff;border-radius:3px">PROMO</span> : '.strtoupper($Results['Promocode']).'';}?>
                            <?php if(isset($googleplay)){ echo '<span style="background:#ff8c00;padding:3px 5px;color:#fff;border-radius:3px">PROMO</span> : '.strtoupper($Results['Coupon']).'';}?></div>
        </div>
        <div class="operator-card">
            <div class="payflipsevice">Payflip Wallet Service</div>
            <ul>
                <li>
                    <div><img style="border:2px solid #828282;border-radius:50px;" src="/resource/logos/operators/42x42/addmoney.png" height="40" width="40" alt="Addmoney" title="Addmoney"></div>Addmoney</li>
                <li>
                    <div><img style="border:2px solid #828282;border-radius:50px;" src="/resource/logos/operators/42x42/send_money.png" height="40" width="40" alt="Sendmoney" title="Sendmoney"></div>Sendmoney</li>
                <li>
                    <div><img style="border:2px solid #828282;border-radius:50px;" src="/resource/logos/operators/42x42/receive_money.png" height="40" width="40" alt="Received Money" title="Received Money"></div>Received Money</li>
                <li>
                    <div><img style="border:2px solid #828282;border-radius:50px;" src="/resource/logos/operators/42x42/transaction_limit.png" height="40" width="40" alt="Transaction limit" title="Transaction limit"></div>Transaction limit</li>
                <li>
                    <div><img style="border:2px solid #828282;border-radius:50px;" src="/resource/logos/operators/42x42/bank.png" height="40" width="40" alt="Bank Transfer" title="Bank Transfer"></div>IMPS/NEFT</li>
                <li>
                    <div><img style="border:2px solid #828282;border-radius:50px;" src="/resource/logos/operators/42x42/deals.png" height="40" width="40" alt="Deals/offers" title="Deals/offers"></div>Deals/offers</li>
                <li>
                    <div><img style="border:2px solid #828282;border-radius:50px;" src="/resource/logos/operators/42x42/refund.png" height="40" width="40" alt="Fast Refund" title="Fast Refund"></div>RefundCash</li>
                <li>
                    <div><img style="border:2px solid #828282;border-radius:50px;" src="/resource/logos/operators/42x42/icn_voucher.png" height="40" width="40" alt="Coupons" title="Coupons"></div>Coupons</li>
                <li>
                    <div><img style="border:2px solid #828282;border-radius:50px;" src="/resource/logos/operators/42x42/merchant.png" height="40" width="40" alt="Merchant Service" title="Merchant Service"></div>Merchant Service</li>
                <li>
                    <div><img style="border:2px solid #828282;border-radius:50px;" src="/resource/logos/operators/42x42/secure.png" height="40" width="40" alt="Secure" title="Secure"></div>Secure</li>
            </ul>
        </div>
        </div>
        <div class="partner-card">
            <div class="partner">PARTNER</div>
            <div class="partner1">
                <img src="/resource/logos/partner/partner.png" alt="Partner"></div>
            <div class="secured">SECURED</div>
            <span class="secured1"><img src="/resource/logos/secure/card.png" alt="SECURED"></span></div>
        <script type="application/ld+json">
            { "@context" : "https://schema.org", "@type" : "Organization", "name" : "Payflipwallet", "url" : "https://www.payflipwallet.com", "sameAs" : [ "https://twitter.com/payflipwallet", "https://plus.google.com/106896854490407554600", "https://www.facebook.com/payflipwallet" ], "logo": "https://payflipwallet.com/resource/logos/logos/logo.png" }
        </script>
         <div class="top-footer">
                <div class="container wraper">
 <div class="footer-menu">
                        <ul style="padding:0">
                            <li><a href="https://payflipwallet.com/aboutus">About Us</a></li>
                            <li><a href="https://payflipwallet.com/termsandconditions">Terms &amp; Conditions</a></li>
							  <li><a href="https://payflipwallet.com/refundpolicy">Refund Policy</a></li>
                            <li><a href="https://payflipwallet.com/privacy-policy">Privacy Policy</a></li>
                            <li><a href="https://payflipwallet.com/contactus">Contact Us</a></li>
                            <li><a href="https://payflipwallet.com/sitemap.xml">Sitemap</a></li>                         
                        </ul>
                    </div>        
                    <div class="footer-menu-box1 mobileRecharge">
                        <h3>MOBILE RECHARGE</h3>
                        <br clear="all">
                        <ul class="link">
                            <li><a href="javascript:void(0);">Aircel</a></li>
                            <li><a href="javascript:void(0);">Airtel</a></li>
                            <li><a href="javascript:void(0);">BSNL</a></li>
                            <li><a href="javascript:void(0);">Tata Docomo GSM</a></li>
                            <li><a href="javascript:void(0);">Idea</a></li>
                            <li><a href="javascript:void(0);">T24</a></li>
                            <li><a href="javascript:void(0);">Reliance</a></li>
                            <li><a href="javascript:void(0);">Jio</a></li>
                            </ul>
                                <ul>
                                <li><a href="javascript:void(0);">Telenor</a></li>
                                <li><a href="javascript:void(0);">Vodafone</a></li>
                                <li><a href="javascript:void(0);">MTS</a></li>
                                <li><a href="javascript:void(0);">Videocon Mobile</a></li>
                                <li><a href="javascript:void(0);">Tata Docomo CDMA</a></li>
                                <li><a href="javascript:void(0);">MTNL Mumbai</a></li>
                                <li><a href="javascript:void(0);">MTNL Delhi</a></li>
                                </ul>
                    </div><!--box1-->
                    
                    <div class="footer-menu-box1">
                        <h3>DTH RECHARGE</h3>
                        <br clear="all">
                            <ul>
                            <li><a href="javascript:void(0);">Dish TV</a></li>
                            <li><a href="javascript:void(0);">Tata Sky</a></li>
                            <li><a href="javascript:void(0);">Videocon D2H</a></li>
                            <li><a href="javascript:void(0);">Reliance Digital TV</a></li>
                            <li><a href="javascript:void(0);">Airtel Digital TV</a></li>
                            <li><a href="javascript:void(0);">Sun Direct</a></li>
                            </ul>
                    </div><!--box1-->
                    
                    <div class="footer-menu-box1">
                        <h3>BILL PAYMENT</h3>
                        <br clear="all">
                            <ul>
                            <li><a href="javascript:void(0);">Airtel Bill Payment</a></li>
                            <li><a href="javascript:void(0);">Idea Bill Payment</a></li>
                            <li><a href="javascript:void(0);">Vodafone Bill Payment</a></li>
                            <li><a href="javascript:void(0);">Reliance Bill Payment</a></li>
                            </ul>
                    </div><!--box1-->
                    
                    
                    
                    <div class="footer-menu-box1">
                        <h3>CONNECT WITH US</h3>
                        <br clear="all">
                        <div class="social-icon">
                            <a href="https://www.facebook.com/PayflipWallet" target="_blank"><img src="/resource/logos/social/facebook.svg" alt="Facebook"></a>
                            <a href="https://twitter.com/PayflipWallet" target="_blank"><img src="/resource/logos/social/twitter.svg" alt="Google Plus"></a>
                            <a href="https://plus.google.com/106896854490407554600" target="_blank"><img src="/resource/logos/social/google.svg" alt="Google Plus"></a>
                        </div><!--social icon-->
                        
                        <div class="app">
                            <h3>Download App</h3>
                            <br clear="all">
                            <a href="https://play.google.com/store/apps/details?id=com.payflipwallet.app" target="_blank"><img src="/resource/logos/social/google-play-download-android-app.svg" alt="PayflipWallet"></a>                          
                        </div><!--app-->
                    </div><!--box1-->
                    
                 
                    </div><!--sitemap list-->
                </div><!--wraper-->
            </div>
			<div class="company-description">
                <div class="copyright">            
                    <p>© 2018 Payflip Systems Pvt. Ltd. All Rights Reserved.</p>
                </div><!--copyright-->
            </div><!--wraper-->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96524897-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-96524897-1');
        </script>
    </body>

    </html>