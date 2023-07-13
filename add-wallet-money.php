<?php
require_once('auth/add-wallet-money.php'); 
 ?>
    <!DOCTYPE html>
    <html lang='en-US'>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="robots" content="index, follow">
        <title>Payflip Wallet</title>
        <link rel="icon" type="image/x-icon" href="/resource/ico/favicon.ico">
        <meta name="keywords" content="online recharge, bill pays, send money, bank transfer, dth recharge, prepaid recharge, postpaid recharge, googleplay recharge">
        <meta name="description" content="Wallet Addcash - PayflipWallet ,online recharge fast service in india, prepaid recharges, postpaid recharges, dth recharges, googleplay recharge and more..">
        <link href="/resource/style/style.css" rel="stylesheet" type="text/css">
        <link href="/resource/style/operators.css" rel="stylesheet" type="text/css">
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
        <div class="card">
            <div style="margin:10px 175px 20px" class="Addcash"></div>
            <form method="POST" action="">
                <p>Amount :</p>
                <p style="margin-top:-30px;float:right;">Rs.
                    <?php echo $amount;?>
                </p>
                <p>Tax :</p>
                <p style="margin-top:-30px;float:right;">Rs.
                    <?php echo $tax;?>
                </p>
                <p>Total Amount :</p>
                <p style="margin-top:-30px;float:right;">Rs.
                    <?php echo $amount+$tax;?>
                </p>
                <p class="mt10">
                    <input type="submit" name="Proceed" value="Proceed" class="btn red">
                </p>
            </form>
            <br>
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