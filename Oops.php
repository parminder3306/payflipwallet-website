<?php
include 'auth/session/db.php';
$type=(isset($_GET['type']))?$sp->real_escape_string(trim($_GET['type'])):'';
?>
    <?php 

if($type=='expire'){
?>
        <!DOCTYPE html>
        <html lang='en-US'>

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width = device-width">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <meta name="robots" content="index, follow">
            <title>Session is expire</title>
            <link rel="icon" type="image/x-icon" href="/resource/ico/favicon.ico">
            <link href="/resource/style/style.css" rel="stylesheet" type="text/css">
            <link href="/resource/style/images.css" rel="stylesheet" type="text/css">
            <style>
                .default-btn {
                    background-color:#0073cf;
                    border: none;
                    color: #fff;
                    padding: 14px;
                    text-transform: uppercase;
                    border-radius: 65px;
                    font-size: 12px;
                    width: 200px;
                }
                
                .text {
                    padding-top: 20px;
                    font-family: sans-serif;
                    font-size: 15px;
                    margin-bottom: 35px;
                    width: 28%;
                    color: #4a4a4a;
                }
            </style>
        </head>

        <body style="background:#fff">
            <div style="height:75px;padding:1% 2%;background:#fff;border-bottom:1px solid #efefef">
                <div class="headerlogo">PayflipWallet</div>

            </div>
            <div class="barbottom">
                <center>
                    <div style="margin-top:30px;margin-bottom:13px;"><img src="/resource/logos/wallet/sessionexpire.png" title="Wallet Limit" alt="Wallet Limit" /></div>
                    <div class="text">
                        <b>Payment failed due to any of these reasons:</b>
                        <br>
                        <p style="color:#4a4a4a">Session expired due to inactivity
                            <br> Our system encountered an obstacle</p>
                    </div>
                    <a href="https://payflipwallet.com">
                        <button class="default-btn primary-btn mb20" title="Home">Home</button>
                    </a>
                </center>
            </div>
            </div>
            </div>
            <br>
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
        <?php } elseif($type=="paymentoff"){ ?>
            <!DOCTYPE html>
            <html>
            <title>Payment Gateway Off</title>
            <style>
                body,
                html {
                    height: 100%;
                    margin: 0;
                }
                
                .bgimg {
                    background: #283c4a;
                    height: 100%;
                    background-position: center;
                    background-size: cover;
                    position: relative;
                    color: white;
                    font-family: sans-serif;
                    font-size: 20px;
                }
                
                .topleft {
                    position: absolute;
                    top: 0;
                    left: 16px;
                }
                
                .bottomleft {
                    position: absolute;
                    bottom: 0;
                    left: 16px;
                }
                
                .middle {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    text-align: center;
                }
                
                hr {
                    margin: auto;
                    width: 40%;
                }
            </style>

            <body>

                <div class="bgimg">
                    <div class="topleft">
                        <p><b>PayflipWallet</b></p>
                    </div>
                    <div class="middle">
                        <h1>Payment Gateway Off</h1>
                        <hr>
                        <p>Thanks You</p>
                    </div>
                </div>
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

            <?php }
elseif($type=="limitfull"){
include 'limitfull.php';
}else{
header('location:https://payflipwallet.com');
} ?>