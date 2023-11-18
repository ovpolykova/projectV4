<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'user';
$connect=mysqli_connect($host,$user,$pass,$db_name) or 
die(mysqli_errno($connect).mysqli_error($connect));
?>