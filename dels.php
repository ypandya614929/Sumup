<?php
ob_start();
session_start();
unset($_SESSION['uid']);
$_SESSION['c']=0;
session_destroy();
ob_end_flush();
header("Location:index.php");
exit;
 ?>
