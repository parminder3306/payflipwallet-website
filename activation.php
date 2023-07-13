<?php require_once('auth/session/db.php');
$code=(isset($_GET['code']))?$sp->real_escape_string(trim($_GET['code'])):'';
$query="select * from users where Token='$code'";
$query=$sp->query($query) or die($sp->error);
$count=$query->num_rows;
$row=$query->fetch_assoc();
if($count>0) {
    $msg='<p style="color:olive;">Account is Activate</p>';
    $status="active";
}

else {
    $msg='<p style="color:tomato;">Account not Found</p>';
    $status="noactive";
}

if($status=='active') {
    $p='Your account activation status is successful, Login  Now';
    $self="update users set Access='active' where Token='$code'";
    if(mysqli_query($sp, $self));
    $link='login';
    $btn='Login';
}

else {
    $p='Your account activation status is  failed, please check your email and try again ';
    $btn='Home';
    $link='';
}

if($row['Access']=='active') {
    $msg='<p style="color:olive;">Account is already Activate</p>';
    $link='login';
    $btn='Login';
}

?> <!DOCTYPE html> <html lang='en-US'> <head> <meta charset="utf-8"> <meta name="viewport" content="width = device-width"> <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> <meta name="robots" content="index, follow"> <title>PayflipWallet Account Active</title> <link rel="icon" type="image/x-icon" href="/resource/ico/favicon.ico"> <link href="/resource/style/style.css" rel="stylesheet" type="text/css"> <link href="/resource/style/images.css" rel="stylesheet" type="text/css"> <style> .primary-btn,
.secondary-btn,
.cancel-btn {
    max-width: 320px;
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    font-size: 16px;
    display: inline-block;
    font-weight: bold;
    height: 40px;
    padding-top: 9px;
    padding-bottom: 9px;
    vertical-align: middle;
}

.default-btn {
    background-color: #fd4646;
    border: none;
    color: inherit;
    cursor: pointer;
    display: inline-block;
    padding: 0px;
}

*,
*:before,
*:after {
    box-sizing: inherit;
}

.primary-btn {
    background-color: #fd4646;
    border: 1px solid #fd4646;
    color: #fff;
}

.text {
    padding-top: 20px;
    color: black;
    font-family: sans-serif;
    font-size: 14px;
    margin-bottom: 35px;
    width: 28%;
}

.center {
    position: absolute;
    left: 50%;
    width: 300px;
    margin-left: -150px;
    margin-top: 9%;
}

.left {
    float: left;
}

.msg {
    text-align: center;
}

.heading {
    font-size: 21px;
    line-height: .8;
    margin-bottom: 10px;
    color: seagreen;
}

.smalls {
    display: inline-block;
    width: 100%;
    font-size: 14px;
    text-align: center;
    margin: 12px auto;
}

a {
    color: #65C3DF;
    text-decoration: none;
}

.icon {
    height: 90px;
    width: 90px;
    background: transparent url('/resource/logos/wallet/<?php echo $status;?>.png') no-repeat center center;
    margin: 0 auto 15px;
}

</style> </head> <body style="background:#fff"> <div style="box-shadow:0 0 8px rgba(0,0,0,.05);height:50px;padding:1% 2%;background:#fff;border-bottom:1px solid palegreen;"> <a href="https://payflipwallet.com" title="PayflipWallet" alt="PayflipWallet"><div class="logo"></div></a></div> <div class="center"> <div class="icon"></div> <div class="msg left"> <div class="heading"><?php if(isset($msg)) {
    echo $msg;
}

?></div> <div class="smalls"><?php if(isset($p)) {
    echo $p;
}

?></div> <a href="https://payflipwallet.com/<?php if(isset($link)){echo $link;}?>"> <button class="default-btn primary-btn mb20" ><?php if(isset($btn)) {
    echo $btn;
}

?></button></a> <!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96524897-1"></script> <script> window.dataLayer=window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}

gtag('js',
new Date());
gtag('config',
'UA-96524897-1');
</script> </body></html>