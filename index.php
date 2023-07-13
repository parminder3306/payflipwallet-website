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
        <title>Payflip Wallet</title>
        <link rel="icon" type="image/x-icon" href="/resource/ico/favicon.ico">
        <meta name="keywords" content="online recharge, bill pays, send money, bank transfer, dth recharge, prepaid recharge, postpaid recharge, googleplay recharge">
        <meta name="description" content="PayflipWallet.CoM ,online recharge fast service in india, prepaid recharges, postpaid recharges, dth recharges, googleplay recharge and more..">
        <link href="/resource/style/style.css" rel="stylesheet" type="text/css">
        <link href="/resource/style/images.css" rel="stylesheet" type="text/css">
        <script src="/resource/ajax/jquery.min.js"></script>
        <script type="text/javascript" src="/resource/ajax/validation.min.js"></script>
        <script type="text/javascript" src="/resource/ajax/recharge.js"></script>
        <script type="text/javascript" src="/resource/ajax/autoselectOperator.js"></script>
        <script type="text/javascript" src="/resource/ajax/show.js"></script>
        <script type="text/javascript" src="/resource/ajax/slick.min.js"></script>

    </head>

    <body id="scrollbar-custom" >
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
        <div style="display:block" id="prepaid">
            <div class="index-card">
                <div style="font-size:12px;font-weight:600;color:#333;width:30%;">Mobile Recharge</div>
                <div style="padding-top:10px;">
                    <a href="javascript:void(0);"><img style="margin-bottom:-3px" src="/resource/images/checked.gif"><span style="padding:8px;">Prepaid</span></a>
                    <a href="javascript:void(0);" onclick="postselect();"><img style="margin-bottom:-3px" src="/resource/images/unchecked.gif"><span style="padding:8px;">Postpaid</span></a>
                </div>
                <form method="POST" action="" id="prepaid-index-form" autocomplete="off">
                    <div style="width:280px;margin-left:0;margin-top:0px;float:left">
                        <img style="margin:0 0 -40px" src="resource/images/ic_phone.png" height="20" width="20">
                        <input type="text" name="mobile" id="mobile" onkeyup="showUser(this.value)" maxLength="10" placeholder="Mobile Number">
                    </div>
                    <div style="width:280px;margin-left:13px;margin-top:-2px;float:left">
                        <img style="margin:0 0 -40px" src="resource/images/operator.png" height="20" width="20">
                        <SELECT name="operator" id="operator">
                            <option value="">Select Operator</option>
                            <OPTION value="AIRCEL">AIRCEL</OPTION>
                            <OPTION value="AIRTEL">AIRTEL</OPTION>
                            <OPTION value="BSNL">BSNL</OPTION>
                            <OPTION value="IDEA">IDEA</OPTION>
                            <OPTION value="RELIANCE CDMA">RELIANCE CDMA</OPTION>
                            <OPTION value="RELIANCE GSM">RELIANCE GSM</OPTION>
                            <OPTION value="TATA DOCOMO">TATA DOCOMO</OPTION>
                            <OPTION value="TATA INDICOM">TATA INDICOM</OPTION>
                            <OPTION value="TELENOR">TELENOR</OPTION>
                            <OPTION value="VIDEOCON">VIDEOCON</OPTION>
                            <OPTION value="VODAFONE">VODAFONE</OPTION>
                            <OPTION value="RELIANCE JIO">RELIANCE JIO</OPTION>
                        </SELECT>
                    </div>
                    <div style="width:280px;margin-left:13px;margin-top:0px;float:left">
                        <img style="margin:0 0 -40px" src="resource/images/rupee.png" height="17" width="17">
                        <input type="text" name="amount" id="amount" maxLength="4" placeholder="Amount">
                    </div>
                    <input type="hidden" name="promocode" id="promocode" maxLength="12" placeholder="Have a Promo Code? Enter Here">
                    <button type="submit" name="prepaid" id="prepaid-button" class="index-btn">Proceed</button>
                </form>
            </div>
        </div>
        <div style="display:none" id="postpaid">
            <div class="index-card">
                <div style="font-size:12px;font-weight:600;color:#333;width:30%;">Postpaid Recharge</div>
                <div style="padding-top:10px;">
                    <a href="javascript:void(0);" onclick="preselect();"><img style="margin-bottom:-3px" src="/resource/images/unchecked.gif"><span style="padding:8px;">Prepaid</span></a>
                    <a href="javascript:void(0);"><img style="margin-bottom:-3px" src="/resource/images/checked.gif"><span style="padding:8px;">Postpaid</span></a>
                </div>
                <form method="POST" action="" id="postpaid-index-form" autocomplete="off">
                    <div style="width:280px;margin-left:0;margin-top:0px;float:left">
                        <img style="margin:0 0 -40px" src="resource/images/ic_phone.png" height="20" width="20">
                        <input type="text" name="mobile" id="mobile" maxLength="10" placeholder="Mobile Number">
                    </div>
                    <div style="width:280px;margin-left:13px;margin-top:-2px;float:left">
                        <img style="margin:0 0 -40px" src="resource/images/operator.png" height="20" width="20">
                        <SELECT name="operator" id="operator">
                            <option value="">Select Operator</option>
                            <OPTION value="AIRTEL POSTPAID">AIRTEL POSTPAID</OPTION>
                            <OPTION value="AIRCEL POSTPAID">AIRCEL POSTPAID</OPTION>
                            <OPTION value="BSNL POSTPAID">BSNL POSTPAID</OPTION>
                            <OPTION value="IDEA POSTPAID">IDEA POSTPAID</OPTION>
                            <OPTION value="RELIANCE GSM POSTPAID">RELIANCE GSM POSTPAID</OPTION>
                            <OPTION value="RELIANCE CDMA POSTPAID">RELIANCE CDMA POSTPAID</OPTION>
                            <OPTION value="TATADOCOMO POSTPAID">TATADOCOMO POSTPAID</OPTION>
                            <OPTION value="VODAFONE POSTPAID">VODAFONE POSTPAID</OPTION>
                        </SELECT>
                    </div>
                    <div style="width:280px;margin-left:13px;margin-top:0px;float:left">
                        <img style="margin:0 0 -40px" src="resource/images/rupee.png" height="17" width="17">
                        <input type="text" name="amount" id="amount" maxLength="4" placeholder="Amount">
                    </div>
                    <input type="hidden" name="promocode" id="promocode" maxLength="12" placeholder="Have a Promo Code? Enter Here">
                    <button type="submit" name="postpaid" id="postpaid-button" class="index-btn">Proceed</button>
                </form>
            </div>
        </div>
        <div class="operator-card-index">
            <div style="font-size:11px;font-weight:600;color:#333;margin-bottom:15px">Operator</div>
            <ul>
                <li>
                    <a href="https://payflipwallet.com/aircel-prepaid">
                        <div><img src="/resource/logos/operators/42x42/aircel.png" height="40" width="40" alt="Aircel" title="Aircel"></div>Aircel</a>
                </li>
                <li>
                    <a href="https://payflipwallet.com/airtel-prepaid">
                        <div><img src="/resource/logos/operators/42x42/airtel.png" height="40" width="40" alt="Airtel" title="Airtel"></div>Airtel</a>
                </li>
                <li>
                    <a href="https://payflipwallet.com/bsnl-prepaid">
                        <div><img src="/resource/logos/operators/42x42/bsnl.png" height="40" width="40" alt="BSNL" title="BSNL"></div>BSNL</a>
                </li>
                <li>
                    <a href="https://payflipwallet.com/tata-docomo-gsm-prepaid">
                        <div><img src="/resource/logos/operators/42x42/docomo-gsm.png" height="40" width="40" alt="Tata Docomo GSM" title="Tata Docomo GSM"></div>TataDocomo GSM</a>
                </li>
                <li>
                    <a href="https://payflipwallet.com/idea-prepaid">
                        <div><img src="/resource/logos/operators/42x42/idea.png" height="40" width="40" alt="Idea" title="Idea"></div>Idea</a>
                </li>
                <li>
                    <a href="https://payflipwallet.com/tataindicom-prepaid">
                        <div><img src="/resource/logos/operators/42x42/indicom.png" height="40" width="40" alt="Tata Indicom" title="Tata Indicom"></div>Tata Indicom</a>
                </li>
                <li>
                    <a href="https://payflipwallet.com/reliance-gsm-prepaid">
                        <div><img src="/resource/logos/operators/42x42/reliance-gsm.png" height="40" width="40" alt="Reliance GSM" title="Reliance GSM"></div>Reliance GSM</a>
                </li>
                <li>
                    <a href="https://payflipwallet.com/telenor-prepaid">
                        <div><img src="/resource/logos/operators/42x42/uninor.png" height="40" width="40" alt="Telenor" title="Telenor"></div>Telenor</a>
                </li>
                <li>
                    <a href="https://payflipwallet.com/videocon-prepaid">
                        <div><img src="/resource/logos/operators/42x42/videocon.png" height="40" width="40" alt="Videocon" title="Videocon"></div>Videocon</a>
                </li>
                <li>
                    <a href="https://payflipwallet.com/vodafone-prepaid">
                        <div><img src="/resource/logos/operators/42x42/vodafone.png" height="40" width="40" alt="Vodafone" title="Vodafone"></div>Vodafone</a>
                </li>
            </ul>
        </div>
  <div class="slider-index">
  <div class="slider slider-for">
    <div><img style="width:100%;height:238px;border-radius:4px;" src="/api/v1/offers/banner/1.png"/></div>
    <div><img style="width:100%;height:238px;border-radius:4px;" src="/api/v1/offers/banner/2.png"/></div>
    <div><img style="width:100%;height:238px;border-radius:4px;" src="/api/v1/offers/banner/3.png"/></div>
    <div><img style="width:100%;height:238px;border-radius:4px;" src="/api/v1/offers/banner/4.png"/></div>
  </div>
</div>
<script > $('.slider-for').slick({
	autoplay: true,
    autoplaySpeed: 5000,
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   infinite: true,
   speed: 400,
   focusOnSelect: true,
 });
</script>
        <div class="daydeal">
            <div style="float:right;background: #f7f7f7;padding:8px;font-size:15px;">SPOTLIGHT</div>
            <center>
                <img style="height:auto;margin-top:-15px;padding:20px;" src="https://payflipwallet.com/resource/logos/offers/220x220/vodafone.png">
                <div style="width:160px;color:#fff;padding: 5px 0px 5px;border:none;border-radius:4px;background:#0073cf;">100% Cashback</div>
            </center>
        </div>
        <div class="card77-index">
            <h1>Go Easy on your Pocket – Online Recharge, Utility Bill Payments</h1>
            <p>PayflipWallet - India’s largest mobile e-commerce website is an ultimate destination for prompt <a href="https://PayflipWallet.com/mobile-prepaid">Online Recharge</a>, DTH, Data Card &amp; Metro Card Recharge and Mobile Bill Payment for Airtel, Aircel, BSNL, Tata Docomo, Idea, MTNL, Vodafone &amp; other operators for all the circles across India. Enjoy hassle-free recharge from anywhere &amp; anytime with our online recharge and bill payment service along with best bonus packs of internet &amp; roaming within a jiffy.</p>
            <h2>Mobile, DTH and Data Card Recharge</h2>
            <p>No need to rush to the market for <a href="https://PayflipWallet.com/dth">DTH Recharge</a> or <a href="https://PayflipWallet.com/mobile-postpaid">Mobile Bill Payment</a>, just login to PayflipWallet and make immediate payments. Cherish your experience with exciting Cashback and Discounts on every recharge or bill payment you make with us. Our online recharge and bill payment service is a one-stop solution for fast &amp; easy Prepaid Mobiles, DTH &amp; <a href="https://PayflipWallet.com/datacard-prepaid">Data Card recharge</a> and Postpaid Mobiles &amp; <a href="https://PayflipWallet.com/datacard-postpaid">Data Cards Bill Payment</a>. Effortlessly make payments through our safe methods, processed through secured gateways.</p>
            <h3>Quick Utility Bill Payments</h3>
            <p>Pay <a href="https://PayflipWallet.com/electricity-bill">Electricity Bill</a> &amp; instantly in just a few clicks Enjoy uncomplicated utility bill online payment service without even traveling to the stores at PayflipWallet. We are no doubt a reliable platform for speedy electricity</p>
            <p>Who would like to leave their cozy bed in this heart-felt season, PayflipWallet brings to you the best ever payment experience, through rapid <a href="https://PayflipWallet.com/mobile-prepaid">Recharge</a> &amp; Bill Payment of Mobile, Electricity, Data Card and Other Utilities. All these are just a tap away from your finger, with all transactions executed in a single go. You can make payment using the method of your choice i.e. <a href="https://PayflipWallet.com/payflipwallet">Pay with PayflipWallet</a>, Debit/Credit Card or Internet Banking. Sounds interesting right? So avail quick &amp; secure recharge and bill payment service using detailed recharge plans anytime while traveling, at home or in the office through your mobile or desktop.</p>
            <h4>Payflip Wallet Best Services</h4>
            <p><a href="https://PayflipWallet.com/sendmoney">Send Money</a> on Payflip Wallet to Bank Account & Friend PayflipWallet Fastest & Simplest,Payflip Wallet noupgrade User Monthly 20000 Rupee Transaction Limit Or Payflip Wallet upgrade User Monthly 100000 Lakh Transaction Limit & Sell Product by Seller use <a href="https://payflipwallet.com/merchant">Merchant Service</a> in Payflip Wallet and more Service use Payflip Wallet.</p>
            <p><a href="https://PayflipWallet.com/care">PayflipWallet 24*7 Customer Care Number</a> +919781267819 is always at your service to help you with prepaid recharge and bill payment, you can contact us anytime by clicking <a href="https://PayflipWallet.com/care">here</a>. Visit us and recharge your Prepaid Mobile, DTH and Data Card or Make Postpaid Mobile Bill Payments and other Utility Bill Payments in a click and indulge into an unbelievable online shopping experience.</p>
        </div>
        </div>
        </div>
        <div class="adscard">
            <center>
                <?php if(isset($ads1)){echo $ads1;}?>
            </center>
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
        </div>
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