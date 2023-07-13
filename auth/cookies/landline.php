<?php
if (!isset($_SESSION['landline'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['landline']) {
unset($_SESSION['landline']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>