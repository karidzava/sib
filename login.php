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
	<body class = "reg">
		<div class="вход">
			<form action="check_login.php" method="post">
			<h1 id="вх">Регистрация</h1>
			<input type="text" class="form-control" name="name" id="login" placeholder="Логин..."><br/>
			<input type="password" autocomplete="off" class="form-control" name="password" id="password" placeholder="Пароль..."><br/>
			<button type="submit" id="enter">Зарегистрироваться</button>
			<img id="line" src="img/line.png" width="400x" height="40px">
            <a class ="voiti" href="account.php">Уже есть аккаунт? Войти</a><br><br>
			<button id="btn_home"><a id="a_home" href="index.php">Вернуться на главную страницу</a></button>
			</form>
	    </div>
		
	</body>
 </html>
	

	