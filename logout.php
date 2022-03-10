<?php


session_start();

$_SESSION = array();

header("Location:account.php");

exit();