<?php
if (!isset($_SESSION['datacard-postpaid'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['datacard-postpaid']) {
unset($_SESSION['datacard-postpaid']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>