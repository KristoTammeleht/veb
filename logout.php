<?php
session_start();
session_destroy();
header('Location: PHPKT.php');
exit;
?>