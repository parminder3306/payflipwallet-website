<?php
session_start();
session_destroy();
unset($_SESSION['analytics-session']);
header("Location:https://payflipwallet.com/analytics");
?>