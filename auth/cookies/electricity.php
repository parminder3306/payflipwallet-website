<?php
if (!isset($_SESSION['electricity'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['electricity']) {
unset($_SESSION['electricity']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>