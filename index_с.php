<?php
	session_start();


include 'temp/head.php';
include 'temp/navbar.php';
include 'temp/header.php';

//выполним соединение с БД
$connection=new mysqli('localhost','root','','trade') or 
die(mysqli_errno($connect).mysqli_error($connect));
?>


	
<div class="container">
	<div class="row">
			
			
			<?php
	
            echo' <table class="table type'.$row_t['id_type'].'"> <tr > <th>Код</th> <th>Фамилия</th><th>Логин</th></tr>';
			$sql = "select * from clients";
			$result_p=$connection->query($sql);
			foreach($result_p as $row){
	//		  while ($row = $result->fetch_assoc()) {
	        echo '<tr ><td>'.$row['id_client'].'</td><td>'.$row['name_client'].'</td><td>'.$row['login'].'</td><td><button class=" btn btn-danger  btn-block ord" id="ord'.$row['id_client'].'" value="'.$row['id_client'].'" >Удалить</button></td></tr>';
        }
        echo ' </table>';
        $result_p->close();

    
    
			?>
	</div>	
</div>

<?php include 'temp/footer.php';  ?>