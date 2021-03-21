<?php
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'eco_hack');
	$query = mysqli_query($con, "SELECT * FROM accounts WHERE id = '{$_SESSION['id']}'");
	$result = $query->fetch_assoc();
	mysqli_query($con, "INSERT INTO articles(title, text, author_id, author) VALUES ('{$_POST['title']}','{$_POST['text']}','{$_SESSION['id']}', '{$result['login']}')");
	header("Location: lk.php");
 ?>