<?php
if (!isset($_SESSION['broadband'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['broadband']) {
unset($_SESSION['broadband']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>