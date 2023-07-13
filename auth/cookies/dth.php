<?php
if (!isset($_SESSION['dth'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['dth']) {
unset($_SESSION['dth']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>