<?php
if (!isset($_SESSION['landline-bill-payment'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['landline-bill-payment']) {
unset($_SESSION['landline-bill-payment']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>