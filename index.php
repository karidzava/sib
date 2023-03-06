<!DOCTYPE html>
<html>
	<head>
			<meta charset="UTF-8">
			<title>Ceebcraft</title>
			<link href="css\ceebstyles.css" rel="stylesheet" type="text/css">
			<link rel="shortcut icon" href="img/mshkfrd.jpg" type="image/x-icon">
			<script src="script.js"></script>
			
	</head>
	<body>
			<?php 
				if($_COOKIE['user'] == ''):
			?>
			<div class="block1">
				<a href="index.php"><img src="img/icon.png" width="130px" style="margin:8px"></a>
				<ul class="title">
					<a class="text" href="index.php"><li class="title2"><img src="img/main.png" width="20x">Главная</li></a>
					<a class="text" href="rules.php"><li class="title2"><img src="img/book.png" width="20x">Правила</li></a>
					<a href="https://vk.com" target="_blank"><li class="title2"><img src="img/vk.png" width="30px"></li></a>
					<a href="https://discord.com/store" target="_blank"><li class="title2"><img src="img/discord.png" width="30px"></li></a>
					<a id="лк" class="text" href="login.php"><li class="title2">Личный кабинет<img src="img/user.png" height="20x"></li></a>
				</ul>
			</div>
			
			<div class="block2"> 
				<img src="img/kreeper.png" height="500px">
			</div>
			
			<div class="block3">
				<h1>ДОБРО <img src="img/point.png" width="6px"><span class="версия">  Версия 1.8-1.18.1</span><br>ПОЖАЛОВАТЬ<br>НА <span class="servername">CEEBCRAFT</h1>
				<img src="img/users.png" width="70px">
				<span class="ip">Наш IP: ceebcraft.ru
			</div>
			
			<button class="shop" onclick="window.location.href = 'shop.php';">Перейти в Магазин</a></button>
			
		<div class="footer" id="ft_index">
			<ul class="ft"> 
				<li class="footer1"><span><?php echo date ( 'Y' ) ; ?> «ceebcraft.ru»</span></li>
				<li class="footer1"><a href="agreement.php" class="соглашение">Пользовательское соглашение</a></li>	
				<li class="footer1">Разработка сайта: Михаил Гришко</li>
			</ul>
		</div>
		
		<?php else:?> 

			<div class="wrapper">
				<div class="block1">
					<a href="index.php"><img src="img/icon.png" width="130px" style="margin:8px"></a>
					<ul class="title">
						<a class="text" href="index.php"><li class="title2"><img src="img/main.png" width="20x">Главная</li></a>
						<a class="text" href="rules.php"><li class="title2"><img src="img/book.png" width="20x">Правила</li></a>
						<a href="https://vk.com" target="_blank"><li class="title2"><img src="img/vk.png" width="30px"></li></a>
						<a href="https://discord.com/store" target="_blank"><li class="title2"><img src="img/discord.png" width="30px"></li></a>
						<a id="лк" class="text" href="account.php"><li class="title2"><?=$_COOKIE['user']?><img src="img/user.png" height="20x"></li></a>
					</ul>
				</div>

				<div class="block_price">	

				<?php
					$the_cookie = $_COOKIE['user'];
				?>		 
				<?php
					require "connect.php";
					$result = $mysql->query("SELECT * FROM `user` WHERE `name` = '$the_cookie'");
				?> 

				<?php $mysql->close(); ?>	
				</div>
			
			<div class="block2"> 
				<img src="img/kreeper.png" height="500px">
			</div>
			
			<div class="block3">
				<h1>ДОБРО <img src="img/point.png" width="6px"><span class="версия">  Версия 1.8-1.18.1</span><br>ПОЖАЛОВАТЬ<br>НА <span class="servername">CEEBCRAFT</h1>
				<img src="img/users.png" width="70px">
				<span class="ip">Наш IP: ceebcraft.ru
			</div>

			<button class="shop" onclick="window.location.href = 'shop.php';">Перейти в Магазин</a></button>
		</div?>	

		<div class="footer" id="ft_index">
			<ul class="ft"> 
				<li class="footer1"><span><?php echo date ( 'Y' ) ; ?> «ceebcraft.ru»</span></li>
				<li class="footer1"><a href="agreement.php" class="соглашение">Пользовательское соглашение</a></li>	
				<li class="footer1">Разработка сайта: Михаил Гришко</li>
			</ul>
		</div>
		
		<?php endif;?> 
	</body>
</html>
