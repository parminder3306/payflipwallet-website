<?php
if (!isset($_SESSION['mobile-postpaid-amount'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['mobile-postpaid-amount']) {
unset($_SESSION['mobile-postpaid-amount']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>