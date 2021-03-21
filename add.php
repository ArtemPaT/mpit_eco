<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="col-6 bg-light border mx-auto text-center mt-5">
		<h3>Добавьте работу</h3>
		<div class="col-10 mx-auto"><br>
			<form action="addzap.php" method="POST">
				<input class="form-control" type="" name="title" placeholder="title"><br>
				<textarea class="form-control" type="" name="text" placeholder="text"></textarea>
				<button class="mt-1 btn btn-info">Опубликовать</button>
			</form>
			<p class="mt-2"><a href="registration.php">Назад</a></p>
		</div>
		
	</div>
</body>
</html>