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
        <title>PayflipWallet | Offers</title>
        <link rel="icon" type="image/x-icon" href="/resource/ico/favicon.ico">
        <meta name="keywords" content="online recharge, bill pays, send money, bank transfer, dth recharge, prepaid recharge, postpaid recharge, googleplay recharge">
        <meta name="description" content="Deals and Offers - PayflipWallet ,online recharge fast service in india, prepaid recharges, postpaid recharges, dth recharges, googleplay recharge and more..">
        <link href="/resource/style/style.css" rel="stylesheet" type="text/css">
        <link href="/resource/style/images.css" rel="stylesheet" type="text/css">
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
                <li class="active">
                    <a class="clfff" href="https://payflipwallet.com/offers">
                        <div><img src="/resource/images/offers.png" height="35" width="35" alt="Deals/Offers" title="Deals/Offers"></div>Deals</a>
                </li>
            </ul>
        </div>
        </div>
<div class="contact-card" style="margin:65px 5% 0;background: #fff;color:#333333;padding:10px;border: 1px solid #dff0f4;text-align:center;border-radius:0">Enjoy new exclusive offers</div>
<?php
$result = mysqli_query($sp,"SELECT * FROM offers ");
$count=$result->num_rows;
while($row = mysqli_fetch_array($result)){
?>
<div>
<ul class="offers">
<li><span><?php echo $row['Type'];?></span>
<div style="margin-bottom: -35px;"><img style="width: 200px;height: 150px;" src="<?php echo $row['Logo'];?>"></div>
<div style="text-align:left;margin-top: 35px;"><h3 style=""><?php echo $row['Title'];?></h3><p><?php echo $row['Detail'];?></p>
</div>
<div style="float:right;margin-top:25px;color:#a5a5a5;">Vaild Date:<?php echo $row['Date'];?></div>
<div style="float:left;margin-top:20px;color:black;padding:5px 10px 0;font-weight:bold;margin-left:-20px;">Use Code</div>
<div style="float:left;margin-top:20px;color:darkorange;border:1px dashed darkorange;padding:5px;font-weight:bold;margin-left:-5px;"><?php echo $row['Promocode'];?>
</div></li>
</ul>
</div>
<?php } 
if($count==0){
echo '<div style="margin-top:120px;text-align:center;height:140px;font-size:25px;">COMING SOON</div></center>';
}
?>

<script type="application/ld+json">
{ "@context" : "https://schema.org", "@type" : "Organization", "name" : "Payflipwallet", "url" : "https://www.payflipwallet.com", "sameAs" : [ "https://twitter.com/payflipwallet", "https://plus.google.com/106896854490407554600", "https://www.facebook.com/payflipwallet" ], "logo": "https://payflipwallet.com/resource/logos/logos/logo.png" }
</script>
<div class="top-footer" style="margin-top:8px;">
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