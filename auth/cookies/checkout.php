<?php
if (!isset($_SESSION['checkout'])) {
header('location:https://payflipwallet.com');
} else {
$now = time();
if ($now > $_SESSION['checkout']) {
unset($_SESSION['checkout']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>