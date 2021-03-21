<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<link rel="stylesheet" href="style.css">
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
			scroll-behavior: smooth;
		}
		.link:hover {
			color: white;
			text-decoration-color: white;
			background: #5fa63d;
			transition: 0.3s all;
		}
		.link:not(:hover) {
			color: white;
			text-decoration-color: white;
			background: ;
			transition: 0.3s all;
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
		.bg-blue {
			background: #027cb4;
		}
		.col-1-5 {
			-ms-flex: 0 0 7.333333%;
			  flex: 0 0 7.333333%;
			  max-width: 7.333333%;
		}
	</style>
</head>
<body style="overflow-x: hidden; font-family: play;" class="bg-light">
	<nav class=" bg-eco">
		<div class="row">
			<div class="col-1-5 ml-5 mr-5 link">
				<a href="index.php">
				<img src="logo.png" style="width: 105%">
				</a>
			</div>
			<div class="d-flex">

				<a href="index.php" class="link ml-5 pl-4 pr-4 py-4-1 "><h5>Главная</h5></a>
				<a href="#foot" class="link pl-4 pr-4 py-4-1 "><h5>О нас</h5></a>
				<a href="https://minpriroda.sakha.gov.ru/" class="link pl-4 pr-4 py-4-1 "><h5>Министерство экологии</h5></a>
				<a href="npk.php" class="link pl-4 pr-4 py-4-1 "><h5>Научные работы</h5></a>
			</div>
		</div>
		
	</nav>
	
		<div class="col-10 mx-auto pt-5 bg-white border pb-5">
			<div class="row b">
				<!-- улусы -->
				<div class="col-5 ml-5">
					<div class="row">
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="1.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
										<button class="button">Абыйский улус</button>
										<input value="1" type="" name="ulus" class="d-none">
									</form>
									
								</div>
							</div>
							
						</div>
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="2.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
										<button class="button">Алданский район</button>
										<input value="2" type="" name="ulus" class="d-none">
									</form>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="3.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
										<button class="button">Аллаиховский улус</button>
										<input value="3" type="" name="ulus" class="d-none">
									</form>
								</div>
							</div>
							
						</div>
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="4.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
										<button class="button">Амгинский улус</button>
										<input value="4" type="" name="ulus" class="d-none">
									</form>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="5.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
										<button class="button">Анабарский национальный улус</button>
										<input value="5" type="" name="ulus" class="d-none">
									</form>
								</div>
							</div>
							
						</div>
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="6.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Булунский улус</button>
											<input value="6" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="7.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Верхневилюйский улус</button>
											<input value="7" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="8.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Верхнеколымский улус</button>
											<input value="8" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="9.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Верхоянский улус</button>
											<input value="9" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="10.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Вилюйский улус</button>
											<input value="10" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="11.jpg" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Горный улус</button>
											<input value="11" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="12.jpg" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Жиганский национальный эвенкийский улус</button>
											<input value="12" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="13.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Кобяйский улус</button>
											<input value="13" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="14.gif" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Ленский район</button>
											<input value="14" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="15.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Мегино-Кангаласский улус</button>
											<input value="15" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="16.gif" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Мирнинский район</button>
											<input value="16" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="17.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Момский район</button>
											<input value="17" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="18.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Намский улус</button>
											<input value="18" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="19.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Нерюнгринский район</button>
											<input value="19" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="20.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Нижнеколымский улус</button>
											<input value="20" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="21.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Нюрбинский улус</button>
											<input value="21" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="22.jpg" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Оймяконский улус</button>
											<input value="22" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="23.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Оленёкский национальный эвенкийский улус</button>
											<input value="23" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="24.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Олёкминский улус</button>
											<input value="24" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="25.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Среднеколымский улус</button>
											<input value="25" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="26.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Сунтарский улус</button>
											<input value="26" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
					</div>
					
					
				</div>
				
				
				<!-- picture -->
				<div class="col-6 ml-5 ">
					<img src="yaku1.jpg" class="w-100 p-4 border"> 
					<div class="col-10">
						<div class="row">
							<div class="col-6 border">
								<div class="row">
									<div class="col-4">
										<img src="29.png" class="w-100">
									</div>
									<div class="col-8">
										<form action="1.php" method="POST">  
											<button class="button">Усть-Алданский улус</button>
											<input value="29" type="" name="ulus" class="d-none">
										</form>
									</div>
								</div>
								
							</div>
							<div class="col-6 border">
								<div class="row">
									<div class="col-4">
										<img src="30.png" class="w-100">
									</div>
									<div class="col-8">
										<form action="1.php" method="POST">  
											<button class="button">Усть-Майский улус</button>
											<input value="30" type="" name="ulus" class="d-none">
										</form>
									</div>
								</div>
								
							</div>
						</div>
						<div class="row">
							<div class="col-6 border">
								<div class="row">
									<div class="col-4">
										<img src="31.png" class="w-100">
									</div>
									<div class="col-8">
										<form action="1.php" method="POST">  
											<button class="button">Усть-Янский улус</button>
											<input value="31" type="" name="ulus" class="d-none">
										</form>
									</div>
								</div>
								
							</div>
							<div class="col-6 border">
								<div class="row">
									<div class="col-4">
										<img src="32.png" class="w-100">
									</div>
									<div class="col-8">
										<form action="1.php" method="POST">  
											<button class="button">Хангаласский улус</button>
											<input value="32" type="" name="ulus" class="d-none">
										</form>
									</div>
								</div>
								
							</div>
						</div>
						<div class="row">
							<div class="col-6 border">
								<div class="row">
									<div class="col-4">
										<img src="33.gif" class="w-100">
									</div>
									<div class="col-8">
										<form action="1.php" method="POST">  
											<button class="button">Чурапчинский улус</button>
											<input value="33" type="" name="ulus" class="d-none">
										</form>
									</div>
								</div>
								
							</div>
							<div class="col-6 border">
								<div class="row">
									<div class="col-4">
										<img src="34.png" class="w-100">
									</div>
									<div class="col-8">
										<form action="1.php" method="POST">  
											<button class="button">Эвено-Бытантайский национальный улус</button>
											<input value="34" type="" name="ulus" class="d-none">
										</form>
									</div>
								</div>
								
							</div>
						</div>
						<div class="row">
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="27.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Таттинский улус</button>
											<input value="27" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
						<div class="col-6 border">
							<div class="row">
								<div class="col-4">
									<img src="28.png" class="w-100">
								</div>
								<div class="col-8">
									<form action="1.php" method="POST">  
											<button class="button">Томпонский район</button>
											<input value="28" type="" name="ulus" class="d-none">
										</form>
								</div>
							</div>
							
						</div>
					</div>
					</div>
				</div>
			</div>
			
		</div>

	<footer class="p-5 bg-blue text-white d-flex" style="height: 230px; ">
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
				<p>Осипов Анатолий</p>
				<p>Курчатов Артемий</p>
				<p>Андреев Сандал</p>
			</div>
			
			
		</div>
		
	</footer>
	



</body>
</html>