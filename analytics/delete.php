<?php
include_once("../admin/auth/db.php");
session_start();
session_destroy();
unset($_SESSION['analytics-session']);
$token=(isset($_GET['token']))?$sp->real_escape_string(trim($_GET['token'])):'';
header("Location:https://payflipwallet.com/analytics");	
?>