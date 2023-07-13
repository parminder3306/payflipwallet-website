<?php
 require_once('auth/session/session.php'); 
?>
    <!DOCTYPE html>
    <html lang='en-US'>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="robots" content="index, follow">
        <title>My Orders</title>
        <link rel="icon" type="image/x-icon" href="/resource/ico/favicon.ico">
        <meta name="keywords" content="online recharge, bill pays, send money, bank transfer, dth recharge, prepaid recharge, postpaid recharge, googleplay recharge">
        <meta name="description" content="MyOrders - PayflipWallet ,online recharge fast service in india, prepaid recharges, postpaid recharges, dth recharges, googleplay recharge and more..">
        <link href="/resource/style/style.css" rel="stylesheet" type="text/css">
        <link href="/resource/style/images.css" rel="stylesheet" type="text/css">
        <script src="/resource/ajax/jquery.min.js"></script>
        <script type="text/javascript" src="/resource/ajax/validation.min.js"></script>
        <script type="text/javascript" src="/resource/ajax/addmoney.js"></script>
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
        <div class="plans-card">
            <div style="border-bottom: 1px solid #ebebeb;padding:16px 28px;">Google Advertisement</div>
            <br>
            <div style="margin-left:200px">
                <?php if(isset($ads)){echo $ads;}?>
            </div>
        </div>
        <div class="addmoney-card">
            <div class="card-header">Add Money</div>
            <br>
            <div id="error"></div>
            <form method="post" action="" id="addmoney-form" autocomplete="off">
                <img style="margin:0 0 -40px" src="resource/images/rupee.png" height="17" width="17">
                <input type="text" name="amount" id="amount" maxLength="5" value="" placeholder="Amount">
                <!--<a href="javascript:void(0);" onclick="promo();" style="color:#337ab7;font-size:12px">Have a Promo Code ?</a>-->
                <div id="promo" style="display:none">
                    <input type="text" name="promocode" id="promocode" maxLength="12" placeholder="Enter Promocode">
                </div>
                <div class="amount-filter">
                    <a href="javascript:void(0);" data="1500" class="money-select" onclick="addamount1();">+ 500</a>
                    <a href="javascript:void(0);" data="2000" class="money-select" onclick="addamount2();">+ 1000</a>
                    <a href="javascript:void(0);" data="2500" class="money-select" onclick="addamount3();">+ 1500</a>
                    </div>
                <button type="submit" name="addmoney" id="addmoney-button" class="btn red">Add Money to Wallet</button>
            </form>
            <br>
        </div>
        </div>
        <div style="background:#fff;border:1px solid #dff0f4;border-radius:10px;padding:0;margin:155px 5% 0;width:90%;height:590px;">
            <div style="border-bottom:1px solid #ebebeb;padding:14px 30px 12px;font-size:15px;">Payflip Wallet Orders</div>
            <div style="padding:6px 6px 11px;border-radius:3px;color:#000000;background:#f7f7f7">
                <div style="padding-left:10px;margin-top:7px;font-size: 12px;font-weight:600">Product info</div>
                <div style="width:64%;margin-top: -17px;font-size: 12px;font-weight:600;float:right;">Status</div>
                <div style="width:47.8%;margin-top:-17px;font-size: 12px;font-weight:600;float:right">Amount</div>
                <div style="width:30.3%;margin-top:-17px;font-size: 12px;font-weight:600;float:right">Order-ID</div>
                <div style="width:11.7%;margin-top:-17px;font-size: 12px;font-weight:600;float:right">ServiceTax</div>
            </div>
            <div class="scrollbar" id="scrollbar-custom">
                <?php 
$id=false;
$tax=false;
$viewmore=(isset($_POST['viewmore']))?$sp->real_escape_string(trim($_POST['viewmore'])):'';
$load=20+$viewmore;
$result=mysqli_query($sp,"SELECT * FROM transactions WHERE Userid='$userid' and Txnshow='MyOrders' ORDER BY id DESC LIMIT 0,$load");
$count=$result->num_rows;
while($row = mysqli_fetch_array($result)){
$operator=$row['Operator'];
$id=$row['Userid'];
$opname = array("AIRTEL"=>"AIRTEL","VODAFONE"=>"VODAFONE","IDEA"=>"IDEA","TATA INDICOM"=>"TATAINDICOM","TATA DOCOMO"=>"TATADOCOMO","TELENOR"=>"TELENOR","BSNL"=>"BSNL","AIRCEL"=>"AIRCEL","Videocon"=>"Videocon","RELIANCE GSM"=>"RELIANCEGSM","Addmoney"=>"Addmoney","TATA PHOTON MAX"=>"TATAPHOTONMAX",
"RELIANCE CDMA"=>"RELIANCECDMA","AIRCEL POSTPAID"=>"AIRCELPOSTPAID","AIRTEL POSTPAID"=>"AIRTELPOSTPAID","AIRTEL LANDLINE"=>"AIRTELLANDLINE","AIRTEL BROADBAND"=>"AIRTELBROADBAND","AIRTEL DEGITAL TV"=>"AIRTELDEGITALTV","BSNL BROADBAND"=>"BSNLBROADBAND","BSNL LANDLINE"=>"BSNLLANDLINE","BSNL POSTPAID"=>"BSNLPOSTPAID","DISH TV"=>"DISHTV","IDEA POSTPAID"=>"IDEAPOSTPAID","MTS MBLAZE"=>"MTSMBLAZE","MTS MBROWSE"=>"MTSMBROWSE","RELIANCE GSM POSTPAID"=>"RELIANCEGSMPOSTPAID","RELIANCE NETCONNECT"=>"RELIANCENETCONNECT","RELIANCE CDMA POSTPAID"=>"RELIANCECDMAPOSTPAID",
"RELIANCE BIG TV"=>"RELIANCEBIGTV","SUNDIRECT"=>"SUNDIRECT","TATADOCOMO POSTPAID"=>"TATADOCOMOPOSTPAID","TATA PHOTON PLUS"=>"TATAPHOTONPLUS","TATASKY"=>"TATASKY","VIDEOCON D2H"=>"VIDEOCOND2H","VODAFONE POSTPAID"=>"VODAFONEPOSTPAID","Sendmoney"=>"Sendmoney","Transfer-to-bank"=>"Transfer-to-bank","PANJAB STATE POWER"=>"Electricity","RELIANCE JIO"=>"RELIANCE_JIO","GooglePlay"=>"GOOGLEPLAY");
if($count>10){$displayform="display:block;";}else{$displayform="display:none;";}
if($row['Status']=='Success'){$color="background:#7ed321;padding:0px 5px 0px;";}
elseif($row['Status']=='Pending'){$color="background:#ff7f50;padding:0px 5px 0px;";}
else{$color="background:red;padding:0px 9px 0px;";}
if($row['Tax']==""){
	$tax="Rs.0";
}else{
	$tax='Rs.'.$row['Tax'].'';
}

?>
                    <br>
                    <div style="margin-bottom:2px;"><a href="https://payflipwallet.com/details/<?php echo $row['Orderid'];?>">
<div style="margin-left:20px;margin-bottom:6px;border-radius:5px" class="<?php echo $opname{$operator};?>"></div>
<div style="margin-top: -38px;color:#828282;margin-left:85px;margin-bottom: 19px;"><?php echo $row['Orders'];?></div></a>
                        <div style="margin-right:59.6%;margin-top: -41px;font-size:12px;float:right;color:#fff;border-radius:3px;<?php echo $color;?>">
                            <?php echo $row['Status'];?>
                        </div>
                        <div style="width:47.2%;margin-top:-38px;color:#828282;font-size:12px;float: right;">Rs.
                            <?php echo $row['Reamount'];?>
                        </div>
                        <div style="width:30.3%;margin-top:-38px;color:#828282;font-size:12px;float: right;">#
                            <?php echo $row['Orderid'];?>
                        </div>
                        <div style="width:30%;margin-top:-24px;color:darkgrey;font-size:10px;float:right;">
                            <?php echo $row['Date'];?>
                                <?php echo $row['Time'];?>
                        </div>
                        <div style="width:11%;margin-top:-38px;color:#828282;font-size:12px;float:right;">
                            <?php echo $tax;?>
                        </div>
                        <div class="divider-lt"></div>
                    </div>
                    <?php } 
if($count==0){
echo '<center><div style="margin-top:80px;">
<h1 style="color: #000!important;">No orders found!</h1>
<div><img src="/resource/logos/wallet/Orders.png"><br></div><a href="https://payflipwallet.com"><button style="background:#0073cf;border-radius:5px;border:none;padding:10px;color:#fff" type="submit">
<span style="padding: 0px 20px 15px;" >Start Shopping</span></button></a></div></center>';
$displayform="display:none;";
}
?>
            </div>
            <div style="<?php echo $displayform;?>">
                <form method="POST" action="">
                    <input name="viewmore" type="hidden" value="50">
                    <center>
                        <button style="background:#0073cf;border-radius:50px;border:none;padding:8px 20px 8px;color:#fff;margin-top:25px;" type="submit">View More</button>
                        <center>
                </form>
            </div>
        </div>
        </div>
        <div class="operator-card" style="margin:-40px 0 3px">
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
    </body>

    </html>