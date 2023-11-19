<?php
	session_start();


include 'temp/head.php';
include 'temp/navbar.php';
include 'temp/header.php';


?>


	
<div class="container">
	<div class="row">
			
			
			<?php
			$sql = 'select * from type_product';
			$result_t = $connection->query($sql);
			foreach($result_t as $row_t)
			{
			echo '<button class=" btn btn-primary btn-lg btn-block btype" value="'.$row_t['id_type'].'" >'.$row_t['name_type'].'</button>';
            echo' <table class="table type'.$row_t['id_type'].'"> <tr > <th>Код</th> <th>Название</th><th>Описание</th></tr>';
			$sql = "select * from product where id_type=".$row_t['id_type'];
			$result_p=$connection->query($sql);
			foreach($result_p as $row){
	//		  while ($row = $result->fetch_assoc()) {
	        echo '<tr ><td>'.$row['id_product'].'</td><td>'.$row['name_product'].'</td><td>'.$row['description'].'</td><td><button class=" btn btn-primary  btn-block ord" id="ord'.$row['id_product'].'" value="'.$row['id_product'].'" >Купить</button></td></tr>';
        }
        echo ' </table>';
        $result_p->close();
	}
    $result_t->close();
    
    
			?>
	</div>	
</div>

<?php include 'temp/footer.php';  ?>