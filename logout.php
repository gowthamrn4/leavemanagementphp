<?php
include("db.php");
$username=$_SESSION['uname'];
session_start();
unset($_SESSION['username']);
header('location:index.php');
?>