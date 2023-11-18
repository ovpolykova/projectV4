<?php
    $connection=new mysqli('localhost','root','','trade');
    $id_client = $_POST['id_client'];
    $id_product = $_POST['id_product'];
    $date_order = $_POST['date_order'];
    $sql = "insert into orders (id_client,id_product,date_order) values($id_client,$id_product,'$date_order')";
   // echo $sql;
    $result=$connection->query($sql) or die ('Ошибка ');
    echo 'Оформлено';
    //https://www.php.net/manual/ru/security.database.sql-injection.php
?>