<?php
if (!isset($_SESSION['datacard-prepaid'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['datacard-prepaid']) {
unset($_SESSION['datacard-prepaid']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>