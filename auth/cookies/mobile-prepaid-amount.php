<?php
if (!isset($_SESSION['mobile-prepaid-amount'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['mobile-prepaid-amount']) {
unset($_SESSION['mobile-prepaid-amount']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>