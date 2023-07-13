<?php
if (!isset($_SESSION['broadband-bill-payment'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['broadband-bill-payment']) {
unset($_SESSION['broadband-bill-payment']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>