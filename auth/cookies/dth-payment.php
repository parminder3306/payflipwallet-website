<?php
if (!isset($_SESSION['dth-recharge-payment'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['dth-recharge-payment']) {
unset($_SESSION['dth-recharge-payment']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>