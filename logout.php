<?php
include_once 'auth/session/db.php';
if(isset($_COOKIE['session'])){
session_start();
session_destroy();
if (isset($_POST)) {
$expire = time()-36000000;
setcookie("session","", $expire);
header('location:https://payflipwallet.com');
}
}else{
header('location:https://payflipwallet.com/login');
}
?>