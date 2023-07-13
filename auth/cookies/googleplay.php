<?php
if (!isset($_SESSION['googleplay'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['googleplay']) {
unset($_SESSION['datacard-prepaid']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>