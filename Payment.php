<?php
	require_once('auth/session/session.php');
	?>
    <!DOCTYPE html>
    <html>
    <title>Gateway Disabled</title>
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