<?php
if (!isset($_SESSION['add-wallet-gateway'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['add-wallet-gateway']) {
unset($_SESSION['add-wallet-gateway']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>