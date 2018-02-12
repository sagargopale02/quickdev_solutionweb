<?php

header('Access-Control-Allow-Origin: *');
include 'db.php';

session_start();

$_SESSION['uname1']=$_GET['uname1'];
echo $_SESSION['uname1'];
?>
