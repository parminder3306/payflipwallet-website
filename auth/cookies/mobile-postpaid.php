<?php
if (!isset($_SESSION['mobile-postpaid'])) {
header('location:https://payflipwallet.com/');
} else {
$now = time();
if ($now > $_SESSION['mobile-postpaid']) {
unset($_SESSION['mobile-postpaid']);
header('location:https://payflipwallet.com/Oops/expire');
}
}
?>