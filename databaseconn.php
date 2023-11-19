<?php
//выполним соединение с БД
$connection=new mysqli('localhost','root','','trade') or 
die(mysqli_errno($connect).mysqli_error($connect));
?>