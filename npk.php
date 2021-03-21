<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title></title>
	<style type="text/css">
		.bg-eco {
			background: #519033; 
		}
		@font-face {
			font-family: play;
			src: url(20289.ttf);
		}
		.py-4-1 {
			padding-bottom: 2rem !important;
			padding-top: 2rem !important;
		}
		.link {
			color: white;
			text-decoration-color: white;
		}
		.link:hover {
			color: white;
			text-decoration-color: white;
			background: #5fa63d;
			transition: 0.3s;
		}
		.link2 {
			color: black;
			text-decoration-color: black;
		}
		.link2:hover {
			color: black;
			text-decoration-color: black;
		}
		.button {
			border: 0;
			background: white;
		}
		.d-none {
			display: none;
		}
		.col-1-5 {
			-ms-flex: 0 0 7.333333%;
			  flex: 0 0 7.333333%;
			  max-width: 7.333333%;
		}
		.bg-blue {
			background: #027cb4;
		}
	</style>
</head>
<body style="overflow-x: hidden; font-family: play" class="bg-light">
	<?php

		$con = mysqli_connect('127.0.0.1', 'root', '', 'eco_hack');
		$query = mysqli_query($con, "SELECT * FROM articles"); 
		$result = $query->fetch_assoc();
		$query_user = mysqli_query($con, "SELECT * FROM accounts WHERE id = '{$_SESSION['id']}'");
		$table_count = mysqli_num_rows($query_user);
	 ?>
	<nav class=" bg-eco">
		<div class="row">
			<div class="col-1-5 ml-5 mr-5 link">
				<a href="index.php">
				<img src="logo.png" style="width: 105%">
				</a>
			</div>
			<div class="d-flex">
				<?php 
					if ($table_count == 1) {
						$result = $query_user->fetch_assoc();
						$check = true; 
					}
					else {
						$check = false;
					}
				?>	
				<a href="index.php" class="link ml-5 pl-4 pr-4 py-4-1 "><h5>Главная</h5></a>
				<a href="#foot" class="link pl-4 pr-4 py-4-1 "><h5>О нас</h5></a>
				<a href="https://minpriroda.sakha.gov.ru/" class="link pl-4 pr-4 py-4-1 "><h5>Министерство экологии</h5></a>
				<a href="npk.php" class="link pl-4 pr-4 py-4-1"><h5>Научные работы</h5></a>
				<a href="<?php if($check == false){echo "login.php";} ?>" class="link ml-5 border-left border-right pl-4 pr-4 py-4-1 text-right"><h5><?php if ($check == true) {echo $result['login'];}else{echo "Вход";} ?></h5></a>
			</div>
		</div>
		
	</nav>

	<div class="col-10 bg-white mx-auto p-5 text-center border">
		<h4>В разработке...</h4>
	</div>

	<footer class="p-5 bg-blue text-white d-flex" style="height: 230px;">
		<a name="foot"></a>
		<div class="col-6">
			<h4>О нас:</h4>
			<br>
			<p>Мы - команда Productive Day, занимаемся разработкой IT продуктов.</p>
			<p>Контактные данные:</p>
		</div>
		<div class="col-6">
			<h4>Участники: </h4>
			<div class="col-12">
				<br>
				<p>Владимир Владимирович Владимиров</p>
				<p>Иван Иванович Иванов</p>
				<p>Петр Петрович Петров</p>
			</div>
			
			
		</div>
		
	</footer>

</body>
</html>