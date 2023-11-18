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
			
				<div class="form-group mb-2 ">
					<button type="submit" class="form-control btn btn-primary" id="submit" disabled >Зарегистрироваться</button>
				</div>

			</form>	
		</div>
	</div>
	<div> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2699.3606454595824!2d40.06861191561411!3d47.424410679172944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e24943faf63e27%3A0x406f3c1f07d36d28!2z0LPQvtGA0LPQsNC3!5e0!3m2!1sru!2sru!4v1619628548393!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>

		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6131bb3c73a8e1fc632226ec72cc9c6250c2d8c5ab0ecfed630015dd28a267e7&amp;width=830&amp;height=615&amp;lang=ru_RU&amp;scroll=true"></script>
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