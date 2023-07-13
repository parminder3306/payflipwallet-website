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
        <title>Datacard Recharge</title>
        <link rel="icon" type="image/x-icon" href="/resource/ico/favicon.ico">
        <meta name="keywords" content="online recharge, bill pays, send money, bank transfer, dth recharge, prepaid recharge, postpaid recharge, googleplay recharge">
        <meta name="description" content="Datacard - PayflipWallet ,online recharge fast service in india, prepaid recharges, postpaid recharges, dth recharges, googleplay recharge and more..">
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
                                        <a href="logout">Log Out</a>
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
                <li class="active">
                    <a href="javascript:void(0);">
                        <div><img src="/resource/images/datacard.png" height="35" width="35" alt="Datacard" title="Datacard Recharge"></div><span class="pd5">Datacard</span></a>
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
        <div style="display:block" id="prepaid">
            <div class="recharge_card" style="margin-bottom:15px">
                <div class="card-header">Datacard Prepaid</div>
                <br>
                <div id="error"></div>
                <form method="POST" action="" id="datacard-prepaid" autocomplete="off">
                    <img style="margin:0 0 -40px" src="resource/images/ic_phone.png" height="20" width="20">
                    <input type="text" name="mobile" id="mobile" maxLength="10" value="" placeholder="Mobile Number">
                    <img style="margin:0 0 -40px" src="resource/images/operator.png" height="20" width="20">
                    <SELECT id="operator" name="operator">
                        <option value="">Select Operator</option>
                        <OPTION value="AIRCEL">AIRCEL</OPTION>
                        <OPTION value="BSNL">BSNL</OPTION>
                        <OPTION value="IDEA">IDEA</OPTION>
                        <OPTION value="MTS MBLAZE">MTS MBLAZE</OPTION>
                        <OPTION value="MTS MBROWSE">MTS MBROWSE</OPTION>
                        <OPTION value="RELIANCE NETCONNECT">RELIANCE NETCONNECT</OPTION>
                        <OPTION value="TATA PHOTON PLUS">TATA PHOTON PLUS</OPTION>
                        <OPTION value="TATA PHOTON MAX">TATA PHOTON MAX</OPTION>
                        <OPTION value="VODAFONE">VODAFONE</OPTION>
                    </SELECT>
                    <img style="margin:0 0 -40px" src="resource/images/rupee.png" height="17" width="17">
                    <input name="amount" type="text" id="amount" maxLength="4" value="" placeholder="Amount">
                    <!--<a href="javascript:void(0);" onclick="promo();" style="color:#337ab7;font-size:12px">Have a Promo Code ?</a>-->
                    <div id="promo" style="display:none">
                        <input type="text" name="promocode" id="promocode" maxLength="12" placeholder="Enter Promocode">
                    </div>
                    <div style="padding-top:10px;">
                        <a href="javascript:void(0);"><img style="margin-bottom:-3px" src="/resource/images/checked.gif"><span style="padding:8px;">Prepaid</span></a>
                        <a href="javascript:void(0);" onclick="postselect();"><img style="margin-bottom:-3px" src="/resource/images/unchecked.gif"><span style="padding:8px;">Postpaid</span></a>
                    </div>
                    <button type="submit" name="datacard" id="datacard-button" class="btn red">Proceed</button>
                </form>
            </div>
        </div>
        <div style="display:none" id="postpaid">
            <div class="recharge_card" style="margin-bottom:15px">
                <div class="card-header">Datacard Postpaid</div>
                <br>
                <div id="error"></div>
                <form method="POST" action="" id="datacard-postpaid" autocomplete="off">
                    <img style="margin:0 0 -40px" src="resource/images/ic_phone.png" height="20" width="20">
                    <input type="text" name="mobile" id="mobile" maxLength="10" value="" placeholder="Mobile Number">
                    <img style="margin:0 0 -40px" src="resource/images/operator.png" height="20" width="20">
                    <SELECT id="operator" name="operator">
                        <option value="">Select Operator</option>
                        <OPTION value="AIRCEL">AIRCEL</OPTION>
                        <OPTION value="BSNL">BSNL</OPTION>
                        <OPTION value="IDEA">IDEA</OPTION>
                        <OPTION value="RELIANCE NETCONNECT">RELIANCE NETCONNECT</OPTION>
                        <OPTION value="TATA PHOTON PLUS">TATA PHOTON PLUS</OPTION>
                        <OPTION value="TATA PHOTON MAX">TATA PHOTON MAX</OPTION>
                        <OPTION value="VODAFONE">VODAFONE</OPTION>
                    </SELECT>
                    <img style="margin:0 0 -40px" src="resource/images/rupee.png" height="17" width="17">
                    <input name="amount" type="text" id="amount" maxLength="4" value="" placeholder="Amount">
                    <!--<a href="javascript:void(0);" onclick="promo();" style="color:#337ab7;font-size:12px">Have a Promo Code ?</a>-->
                    <div id="promo" style="display:none">
                        <input type="text" name="promocode" id="promocode" maxLength="12" placeholder="Have a Promo Code? Enter Here">
                    </div>
                    <div style="padding-top:10px;">
                        <a href="javascript:void(0);" onclick="preselect();"><img style="margin-bottom:-3px" src="/resource/images/unchecked.gif"><span style="padding:8px;">Prepaid</span></a>
                        <a href="javascript:void(0);"><img style="margin-bottom:-3px" src="/resource/images/checked.gif"><span style="padding:8px;">Postpaid</span></a>
                    </div>
                    <button type="submit" name="datacard" id="datacard-button" class="btn red">Proceed</form>
                <br>
            </div>
        </div>
        <div class="operator-card">
            <div style="font-size:11px;font-weight:600;color:#333;margin-bottom:15px">Prepaid Operator</div>
            <ul>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/aircel.png" height="50" width="50" alt="Aircel" title="Aircel"></div>Aircel</a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/airtel.png" height="50" width="50" alt="Airtel" title="Airtel"></div>Airtel</a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/bsnl.png" height="50" width="50" alt="BSNL" title="BSNL"></div>BSNL</a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/docomo-gsm.png" height="50" width="50" alt="Tata Docomo GSM" title="Tata Docomo GSM"></div>TataDocomo GSM</a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/idea.png" height="50" width="50" alt="Idea" title="Idea"></div>Idea</a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/indicom.png" height="50" width="50" alt="Tata Indicom" title="Tata Indicom"></div>Tata Indicom</a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/reliance-gsm.png" height="50" width="50" alt="Reliance GSM" title="Reliance GSM"></div>Reliance GSM</a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/uninor.png" height="50" width="50" alt="Telenor" title="Telenor"></div>Telenor</a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/videocon.png" height="50" width="50" alt="Videocon" title="Videocon"></div>Videocon</a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div><img src="/resource/logos/operators/42x42/vodafone.png" height="50" width="50" alt="Vodafone" title="Vodafone"></div>Vodafone</a>
                </li>
            </ul>
        </div>
        <div class="card77">
            <h4>Easy Data Card Recharge Online at PayflipWallet.com</h4>
            <p>In today's technologically advanced, data cards connect us to the internet wirelessly. They make internet extremely accessible, you can carry it to the office, while traveling on a business trip or on a vacation. Having such an importance in our lives, it is also important to recharge data cards on time to enjoy its uninterrupted service. If you are searching for a reliable platform to recharge your data card online then PayflipWallet is an ultimate solution for you. Experience the seamless service of online data card recharge and save your time &amp; efforts.</p>
            <br>
            <p>Remember the old days, when one had to drive to shops for getting recharge done? Now is the internet age, you can effortlessly do prepaid data card recharge online from anytime &amp; anywhere without any glitches. PayflipWallet offers an efficient and speedy service that can be availed from the comfort of wherever you are. You can get Data Card recharge done for all the top operators like BSNL Data Card, Reliance Netconnect, MTNL Data Card, Tata Photon and MTS. We also accept Bill payments for Reliance NetConnect, Tata Photon+, Tata Photon Whiz. Get access to all the plans before making the payment, choose from 6 Month Pack, Annual Pack, Monthly Pack or a 3 Month Pack and select the one that suits your needs. </p>
            <br>
            <h4>How to recharge data card online?</h4>
            <p>PayflipWallet allows you to experience the most hassle-free data card recharge service. You can instantly recharge your data card within seconds, all you need to do is follow these simple steps: </p>
            <br>
            <p>1. Enter your prepaid data card number</p>
            <p>2. Select your operator</p>
            <p>3. Enter the amount </p>
            <p>4. Pick data card recharge promo codes of your choice and get cashback &amp; other offers Choose payment method of your preference i.e. Debit/Credit Card, Net banking or Payflip Wallet. Our payment methods are safe and secured so you don’t have to worry about your money</p>
            <p>5. You are done with it!</p>
            <p>While you do so you get an instant auto update of your payment by receiving an e-mail. With PayflipWallet, you can make data card bill payments as well as recharge your prepaid data cards without disturbing your routine. With PayflipWallet, you have data card recharge access on-the-go, top up your data card connection in a jiffy.</p>
            <br>
            <h4>PayflipWallet Mobile App for Quick Recharges</h4>
            <p>What makes us stand out from the crowd is our easy to use mobile App. Payflip Wallet Mobile App can be used for both, prepaid data card recharge and postpaid data card recharge. Our app runs smoothly with all possible OS like Android, Windows, BB and iOS. Get PayflipWallet wallet cashback and various other exciting offers with every online data card recharge. </p>
            For quick and simple data card recharge, login or download the PayflipWallet Mobile App now!</div>
        </div>
        </div>
        <div class="operator-card" style="margin:15px 0 3px">
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