<?php
if (!isset($_SESSION['datacard-postpaid-payment'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['datacard-postpaid-payment']) {
unset($_SESSION['datacard-postpaid-payment']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>