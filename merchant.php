<?php
	require_once('auth/session/session.php');
	?>
    <!DOCTYPE html>
    <html>
    <title>Merchant | PayflipWallet</title>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }
        
        .bgimg {
            background: #00ff7f;
            height: 100%;
            background-position: center;
            background-size: cover;
            position: relative;
            color: white;
            font-family: "Courier New", Courier, monospace;
            font-size: 25px;
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
                <h1>COMING SOON</h1>
                <hr>
                <p>35 days left</p>
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