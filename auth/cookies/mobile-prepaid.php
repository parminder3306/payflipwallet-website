<?php
if (!isset($_SESSION['mobile-prepaid'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['mobile-prepaid']) {
unset($_SESSION['mobile-prepaid']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>