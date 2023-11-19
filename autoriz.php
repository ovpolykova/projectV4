<?php
//выполним соединение с БД
include "databaseconn.php";
	//Если массив POST непустой, 	
	if (!empty($_POST)) 
{
	$login=$_POST['login'];
	$password=$_POST['password'];
	// $sql = ("select id_user, role,fio from users where login='$login' and password='$password'");
	
	// $result=$connection->query($sql);
	// $row = $result->fetch_assoc();

	session_start();
	// $_SESSION['id_user'] =  $row['id_user'];
	// $_SESSION['role'] =  $row['role'];
	// $_SESSION['fio'] =  $row['fio'];
	$_SESSION['id_user'] =  1;
	if ($login == 'ddd'){
		$_SESSION['role'] =  0;
		$page = 'index.php';
	}
	else
	{
		$_SESSION['role'] =  1;
		$page = 'index_с.php';
	}
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

	// if ($row['role'] == 0)
	// {
	// 	$page = 'index_z.php';
	// }
	// else
	// {
	// 	$page = 'index_b.php';
	// }
	header("Location: http://$host$uri/$page");
}
include 'temp/head.php';
include 'temp/navbar.php';
include 'temp/header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-4">
						</div>



				<div class="col-4">
				<form  method="POST"  role="form" >

				<div class="form-group mb-2 ">
					<input type="text" class="form-control"  name="login" placeholder="Введите login" requered>
				</div>
				<div class="form-group mb-2 ">
					<input type="password" class="form-control"  name="password" placeholder="Введите пароль" requered>
				</div>
			
				<div class="form-group mb-2 ">
					<button type="submit" class="form-control btn btn-primary">ОК</button>
				</div>

			</form>	
		</div>
	</div>
</div>

	

<?php include 'temp/footer.php';  ?>