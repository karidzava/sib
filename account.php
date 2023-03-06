<!DOCTYPE html>
<html>
	<head>
			<meta charset="UTF-8">
			<title>Ceebcraft</title>
			<link href="css\ceebstyles.css" rel="stylesheet" type="text/css">
			<link rel="shortcut icon" href="img/mshkfrd.jpg" type="image/x-icon">
	        <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
			<script type="text/javascript" src="script.js"></script>
	</head>
	<?php 
		if($_COOKIE['user'] == ''):
	?>
	<body class = "reg">
		<div class="вход">
			<form action="check.php" method="post">
			<h1 id="вх">Вход</h1>
			<input type="text" class="form-control" name="name" id="login" placeholder="Логин..."><br/>
			<input type="password" autocomplete="off" class="form-control" name="password" id="password" placeholder="Пароль..."><br/>
			<button type="submit" id="enter">Войти</button>
			<img id="line" src="img/line.png" width="400x" height="40px">
			<a class ="voiti"href="login.php">Нет аккаунта? Зарегистрироваться</a><br><br>
			<button id="btn_home"><a id="a_home" href="index.php">Вернуться на главную страницу</a></button>
			</form>
	    </div>

	<?php else:?> 
	<div class="successful_login">	 
		<p>Привет, <?=$_COOKIE['user']?>! Чтобы выйти из аккаунта, нажмите <a href="exit.php">здесь</a></p>
		<a href="index.php">Выйти в главное меню</a> 
			<?php
				$the_cookie = $_COOKIE['user'];
				require "connect.php";
				$result = $mysql->query("SELECT * FROM `user` WHERE `name` = '$the_cookie'");
			?> 
	</div>
	
	<?php endif;?> 
		
	</body>
 </html>
	

	