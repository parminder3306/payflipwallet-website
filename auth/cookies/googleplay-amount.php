<?php
if (!isset($_SESSION['googleplay-amount'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['googleplay-amount']) {
unset($_SESSION['googleplay-amount']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>