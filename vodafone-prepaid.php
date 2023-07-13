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
        <title>Vodafone Prepaid Recharge</title>
        <link rel="icon" type="image/x-icon" href="/resource/ico/favicon.ico">
        <meta name="keywords" content="online recharge, bill pays, send money, bank transfer, dth recharge, prepaid recharge, postpaid recharge, googleplay recharge">
        <meta name="description" content="Mobile Recharge - PayflipWallet ,online recharge fast service in india, prepaid recharges, postpaid recharges, dth recharges, googleplay recharge and more..">
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
        <div class="recharge_card">
            <div class="card-header"><img style="margin-right:8px;" src="/resource/logos/operators/42x42/vodafone.png" height="40" width="40" alt="Vodafone" title="Vodafone"></div>
            <br>
            <div id="error"></div>
            <form method="POST" action="" class="prepaid-login" id="prepaid-form" autocomplete="off">
                <img style="margin:0 0 -40px" src="resource/images/ic_phone.png" height="20" width="20">
                <input type="text" name="mobile" id="mobile" maxLength="10" placeholder="Mobile Number">
                <img style="margin:0 0 -40px" src="resource/images/operator.png" height="20" width="20">
                <SELECT name="operator" id="operator">
                    <OPTION value="VODAFONE">VODAFONE</OPTION>
                </SELECT>
                <img style="margin:0 0 -40px" src="resource/images/rupee.png" height="20" width="20">
                <input type="text" name="amount" id="amount" maxLength="4" placeholder="Amount">
                <!--<a href="javascript:void(0);" onclick="promo();" style="color:#337ab7;font-size:12px">Have a Promo Code ?</a>-->
                <div id="promo" style="display:none">
                    <input type="text" name="promocode" id="promocode" maxLength="12" placeholder="Enter Promocode">
                </div>
                <button type="submit" name="prepaid" id="prepaid" class="btn red">Proceed</button>
            </form>
            <br>
        </div>
        <div class="operator-card" >
            <div style="font-size:11px;font-weight:600;color:#333;margin-bottom:15px">Operator</div>
            <ul>
                <li>
                    <a href="">
                        <div><img src="/resource/logos/operators/42x42/aircel.png" height="50" width="50" alt="Aircel" title="Aircel"></div>Aircel</a>
                </li>
                <li>
                    <a href="">
                        <div><img src="/resource/logos/operators/42x42/airtel.png" height="50" width="50" alt="Airtel" title="Airtel"></div>Airtel</a>
                </li>
                <li>
                    <a href="">
                        <div><img src="/resource/logos/operators/42x42/bsnl.png" height="50" width="50" alt="BSNL" title="BSNL"></div>BSNL</a>
                </li>
                <li>
                    <a href="">
                        <div><img src="/resource/logos/operators/42x42/docomo-gsm.png" height="50" width="50" alt="Tata Docomo GSM" title="Tata Docomo GSM"></div>TataDocomo GSM</a>
                </li>
                <li>
                    <a href="">
                        <div><img src="/resource/logos/operators/42x42/idea.png" height="50" width="50" alt="Idea" title="Idea"></div>Idea</a>
                </li>
                <li>
                    <a href="">
                        <div><img src="/resource/logos/operators/42x42/indicom.png" height="50" width="50" alt="Tata Indicom" title="Tata Indicom"></div>Tata Indicom</a>
                </li>
                <li>
                    <a href="">
                        <div><img src="/resource/logos/operators/42x42/reliance-gsm.png" height="50" width="50" alt="Reliance GSM" title="Reliance GSM"></div>Reliance GSM</a>
                </li>
                <li>
                    <a href="">
                        <div><img src="/resource/logos/operators/42x42/uninor.png" height="50" width="50" alt="Telenor" title="Telenor"></div>Telenor</a>
                </li>
                <li>
                    <a href="">
                        <div><img src="/resource/logos/operators/42x42/videocon.png" height="50" width="50" alt="Videocon" title="Videocon"></div>Videocon</a>
                </li>
                <li>
                    <a href="">
                        <div><img src="/resource/logos/operators/42x42/vodafone.png" height="50" width="50" alt="Vodafone" title="Vodafone"></div>Vodafone</a>
                </li>
            </ul>
        </div>
        <div class="card77">
            <h4>Instant Online Mobile Recharge</h4>
            <p>Mobile phones have become an essential part of our lives, so is mobile recharge. With the sudden advancement in technology, internet enables us to perform various tasks that were previously not possible. One such instance is online mobile recharge and with Payflip Wallet it is the most hassle-free recharge experience. Avail seamless &amp; quick facility online at our website and forget the old troublesome offline process. With Payflip Wallet, you can do easy recharge online anytime and from anywhere, be it from home, office, holiday or travelling, all you need is internet access and that’s it.</p>
            <p>In this ever busy world, nobody has time to visit stores for recharging their numbers. Payflip Wallet fast recharge service is an ultimate solution, it is quick &amp; uncomplicated process. </p>

            <h4>Major Prepaid Mobile Recharge Service Providers Available at Payflip Wallet</h4>

            <p>Enjoy the benefit of Prepaid Recharge online in a jiffy without even travelling to the stores. Payflip Wallet offers online recharge service for India's top cellular networks i.e. Airtel Mobile Recharge | Vodafone Mobile Recharge | Idea Mobile Recharge | Reliance Mobile Recharge | Tata Docomo GSM Mobile Recharge | MTNL Mobile Recharge | BSNL Mobile Recharge | Aircel Mobile Recharge | MTS Mobile Recharge | Tata Docomo CDMA Mobile Recharge and many more. </p>
            <h4>How to recharge mobile online? </h4>
            <p>Payflip Wallet helps you in recharging your prepaid mobile in simple steps, all you need to do is just enter the correct information in three tabs i.e. </p>
            <li> Enter your prepaid mobile number</li>
            <li>Select your mobile operator</li>
            <li>Enter the amount</li>
            <li>Pick recharge promo code of your choice and get cashback &amp; other offers</li>
            <li>Now proceed for payment, you can do so through Credit/ Debit Card, Net Banking or Payflip Wallet as per your choice, all our payment means are secure and protected</li>
            <p>It is an effortless task with Payflip Wallet, it saves your efforts, time and money too! </p>
            <p>
            </p>
            <h4>Easy Mobile Recharge Online, Exciting Offers &amp; More! </h4>
            <p>We are a very dependable platform to make your online recharge in just few stress-free steps. Avail prompt, uncomplicated &amp; safe online recharge service using detailed plans anytime through your mobile or desktop. Browse through the data plans, Full talk time (ftt) plans, roaming plans, top-up plans &amp; many more before doing so and grab the best offers on all operators.</p>
            <p>As easy as it sounds! Prepaid online recharge process with Payflip Wallet will complete in few minutes and immediately reflect the transaction through SMS or mail. Top up your phone in minutes. </p>
            <p>
            </p>
            <p>To make your experience the happiest one, we offer bucket full of promo codes, coupon codes &amp; cashback offers with every prepaid mobile recharge you make with us. </p>
        </div>
        </div>
        </div>
        <div class="operator-card" style="margin-top:13px">
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