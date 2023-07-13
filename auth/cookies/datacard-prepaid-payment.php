<?php
if (!isset($_SESSION['datacard-prepaid-payment'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['datacard-prepaid-payment']) {
unset($_SESSION['datacard-prepaid-payment']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>