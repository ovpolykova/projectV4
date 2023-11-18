<?php
include 'temp/head.php';
include 'temp/navbar.php';
include 'temp/header.php';

//выполним соединение с БД
$connection=new mysqli('localhost','root','','trade');
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
					<input type="text" class="form-control" id="fio"  name="fio" onkeyup="keyupfio()" onblur="checkr()" placeholder="Введите фамилию, И.О" requered>
					<p id="errfio">   </p>
				</div>	
				<div class="form-group mb-2 ">
					<input type="password" class="form-control "  id="password" onblur="checkr()" name="password" placeholder="Введите пароль" requered>
					<p id="errpass" >    </p>
				</div>
				<div class="form-group mb-2 ">
					<input type="password" class="form-control "  id="ppassword" onblur="checkr()" name="ppassword" placeholder="Введите подтверждение пароля" requered>
					<p id="perrpass" >    </p>
				</div>
				<div  class="form-check">
					 <input type="radio"class="form-check-input "  name="role" value="1" id="Radios2">
					 <label class="form-check-label" for="Radios2">Завуч</label>				
				<div  class="form-check">
				</div>	
					<input type="radio" class="form-check-input"  name="role" value="0" id="Radios1"> 
					<label class="form-check-label" for="Radios1">Бухгалтер</label>

				</div>			
				<div class="form-group mb-2 ">
					<button type="submit" class="form-control btn btn-primary" id="submit" disabled >ОК</button>
				</div>

			</form>	
		</div>
	</div>
</div>

<?php
	//Если массив POST непустой, 	
	if (!empty($_POST)) 
{
	$login=$_POST['login'];
	$password=$_POST['password'];
	$fio=$_POST['fio'];
	$role=$_POST['role'];	
	$sql = ("insert into clients (name_client,login,password, adres) values('$fio','$login','$password','$role')");
	$result=$connection->query($sql) or die ('Ошибка ');

}
?>	
	

<?php include 'temp/footer.php';  ?>