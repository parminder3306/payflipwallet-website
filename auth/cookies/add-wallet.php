<?php
if (!isset($_SESSION['add-wallet'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['add-wallet']) {
unset($_SESSION['add-wallet']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>