<?php
if (!isset($_SESSION['electricity-bill-payment'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['electricity-bill-payment']) {
unset($_SESSION['electricity-bill-payment']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>