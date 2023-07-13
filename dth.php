<?php require_once('auth/session/session.php');
?>
    <!DOCTYPE html>
    <html lang='en-US'>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="robots" content="index, follow">
        <title>DTH</title>
        <link rel="icon" type="image/x-icon" href="/resource/ico/favicon.ico">
        <meta name="keywords" content="online recharge, bill pays, send money, bank transfer, dth recharge, prepaid recharge, postpaid recharge, googleplay recharge">
        <meta name="description" content="Dth - PayflipWallet ,online recharge fast service in india, prepaid recharges, postpaid recharges, dth recharges, googleplay recharge and more..">
        <link href="/resource/style/style.css" rel="stylesheet" type="text/css">
        <link href="/resource/style/images.css" rel="stylesheet" type="text/css">
        <script src="/resource/ajax/jquery.min.js"></script>
        <script type="text/javascript" src="/resource/ajax/validation.min.js"></script>
        <script type="text/javascript" src="/resource/ajax/recharge.js"></script>
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
                <li class="active">
                    <a href="javascript:void(0);">
                        <div><img src="/resource/images/dth.png" height="35" width="35" alt="DTH" title="DTH Recharge"></div><span class="pd5">DTH</span></a>
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
            </div>
        </div>
        <div class="recharge_card" style="margin-bottom:30px">
            <div class="card-header">DTH Recharge</div>
            <br>
            <div id="error"></div>
            <form method="POST" action="" id="dth-form" autocomplete="off">
                <img style="margin:0 0 -40px" src="resource/images/icon_dth.png" height="20" width="20">
                <SELECT name="operator" id="operator">
                    <option value="">Select Operator</option>
                    <option value="DISH TV">DISH TV</option>
                    <option value="RELIANCE BIG TV">RELIANCE BIG TV</option>
                    <option value="AIRTEL DEGITAL TV">AIRTEL DEGITAL TV</option>
                    <option value="TATASKY">TATASKY</option>
                    <option value="SUNDIRECT">SUNDIRECT</option>
                    <option value="VIDEOCON D2H">VIDEOCON D2H</option>
                </SELECT>
                <img style="margin:0 0 -40px" src="resource/images/customer.png" height="20" width="20">
                <input type="text" id="number" name="number" value="" maxlength="14" placeholder="DTH Number">
                <img style="margin:0 0 -40px" src="resource/images/rupee.png" height="17" width="17">
                <input name="amount" id="amount" type="text" maxLength=4 value="" placeholder="Amount">
                <!--<a href="javascript:void(0);" onclick="promo();" style="color:#337ab7;font-size:12px">Have a Promo Code ?</a>-->
                <div id="promo" style="display:none">
                    <input type="text" name="promocode" id="promocode" maxLength="12" placeholder="Enter Promocode">
                </div>
                <button type="submit" name="dth" id="dth-button" class="btn red">Proceed</button>
            </form>
            <br>
        </div>
        </div>
        <div class="operator-card">
            <div style="font-size:11px;font-weight:600;color:#333;margin-bottom:15px">DTH Operators</div>
            <ul>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/sun.png" height="50" width="50" alt="SunDirect" title="SunDirect"></div>SunDirect</a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/airteltv.png" height="50" width="50" alt="Airtel Degital TV" title="Airtel Degital TV"></div>Airtel Degital TV</a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/sky.png" height="50" width="50" alt="TataSky" title="TataSky"></div>TataSky</a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/dishtv.png" height="50" width="50" alt="Dish TV" title="Dish TV"></div>Dish TV</a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/reliancetv.png" height="50" width="50" alt="Reliance Big TV" title="Reliance Big TV"></div>Reliance Big TV</a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/videocondth.png" height="50" width="50" alt="Videocon D2H" title="Videocon D2H"></div>Videocon D2H</a>
                </li>
            </ul>
        </div>
        <div class="card77">
            <h4>Easy Online DTH Recharge at PayflipWallet</h4>
            <p>PayflipWallet offers easy DTH recharge services. We bring forth a simple and easiest way for DTH Recharge for Airtel Digital TV, Dish TV, Reliance Digital TV, Sun Direct, Tata Sky and Videocon D2H. With the ease of recharging anytime, anywhere, anyhow, you also get the comfort of choosing plans before paying the final amount. Be it a 6 Month Pack, Annual Pack, Monthly Pack or a 3 Month Pack, you can easily get it recharged from PayflipWallet.com.</p>
            <br>
            <h4>Avail DTH Recharge Offers with PayflipWallet</h4>
            <p>PayflipWallet is the simplest way to recharge your DTH. With simple recharge method, you just need to select your operator and fill in the card number and the amount. Choose your payment method from Debit/Credit Card, Net banking or Payflip Wallet and recharge without a worry. And enjoy watching your favorite shows without interruption. Our user friendly App makes it easier for you to recharge through mobile phones. Download our PayflipWallet Mobile App for Android, Windows, BB and iOS platforms from your play store and recharge within seconds.</p>
        </div>
        </div>
        </div>
        <div class="operator-card" style="margin: 15px 0 3px;">
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