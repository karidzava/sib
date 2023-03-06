<!DOCTYPE html>
<html>
	
	<head>
			<meta charset="UTF-8">
			<title>Ceebcraft</title>
			<link href="css\ceebstyles.css" rel="stylesheet" type="text/css">
			<link rel="shortcut icon" href="img/mshkfrd.jpg" type="image/x-icon">
			<script src="script.js"></script>
			<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
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

			<img class ="иконка_магазин"src="img/shop.svg" width="40px">
			<span class="надпись_магазин">Магазин</span>

			<?php
				$mysql = new mysqli('127.0.0.1', 'root', '', 'ceeb_db');
				$result = $mysql->query("SELECT * FROM `product`");
			?> 

			<div class="block7">
				<ul class="ul_items">
				<?php 
					while ( ($shop = mysqli_fetch_assoc($result)) )
					{
						?>
						<li class="li_items">
							<img class="buy_img"src="img/<?php echo $shop['id']; ?>.png" alt="">
							<div class="content">
								<span class="items"><?php echo $shop['name'] . ': ' . $shop['price'] . ' р'; ?></span><br>
								<button class="basket" onclick="window.location.href = 'buy.php';"><img src="img/basket.png" height="30px"><span class="basket_text">Купить</span> </a></button>
							</div>
						</li>
						<?php 
					}
					?>
				</ul>
			</div>

			<?php $mysql->close(); ?>	

			<div class="block8"> 
				<img src="img/steeve.png" width="600px">
			</div>

		<div class="footer" id="ft_shop">
			<ul class="ft"> 
				<li class="footer1"><span><?php echo date ( 'Y' ) ; ?> «ceebcraft.ru»</span></li>
				<li class="footer1"><a href="agreement.php" class="соглашение">Пользовательское соглашение</a></li>	
				<li class="footer1">Разработка сайта: Михаил Гришко</li>
			</ul>
		</div>

		<?php else:?> 

			<div class="block1">
				<a href="index.php"><img src="img/icon.png" width="130px" style="margin:8px"></a>
				<ul class="title">
					<a class="text" href="index.php"><li class="title2"><img src="img/main.png" width="20x">Главная</li></a>
					<a class="text" href="rules.php"><li class="title2"><img src="img/book.png" width="20x">Правила</li></a>
					<a href="https://vk.com" target="_blank"><li class="title2"><img src="img/vk.png" width="30px"></li></a>
					<a href="https://discord.com/store" target="_blank"><li class="title2"><img src="img/discord.png" width="30px"></li></a>
					<a id="лк" class="text" href="account.php"><li class="title2"><?=$_COOKIE['user']?><img src="img/user.png" height="20x"></li></a>
					<!-- <button onclick="myFunction()" class="dropbtn"><li class="title2">Корзина</li></button> -->
				</ul>
			</div>

			<!-- <div id="myDropdown" class="dropdown-content">
				<a href="#">Ссылка 1</a>
				<a href="#">Ссылка 2</a>
				<a href="#">Ссылка 3</a>
 			 </div> -->
			  
			<img class ="иконка_магазин"src="img/shop.svg" height="40px">
			<span class="надпись_магазин">Магазин</span>

			<?php
				$mysql = new mysqli('127.0.0.1', 'root', '', 'ceeb_db');
				$result = $mysql->query("SELECT * FROM `product`");
			?> 

			<div class="block7">
				<ul class="ul_items">
				<?php 
					while ( ($shop = mysqli_fetch_assoc($result)) )
					{
						?>
						<li class="li_items">
							<img class="buy_img"src="img/<?php echo $shop['id']; ?>.png" alt="">
							<div class="content">
								<span class="items"><?php echo $shop['name'] . ': ' . $shop['price'] . ' р'; ?></span><br>
								<button class="basket" onClick="RedirectBuy(<?= $shop["id"]; ?>);"><img src="img/basket.png" height="30px"><span class="basket_text">Купить</span> </a></button>
							</div>
						</li>
						<?php 
					}
					?>
				</ul>
			</div>

			

			<div class="shopping">
					
			</div>

		<div class="footer" id="ft_shop">
			<ul class="ft"> 
				<li class="footer1"><span><?php echo date ( 'Y' ) ; ?> «ceebcraft.ru»</span></li>
				<li class="footer1"><a href="agreement.php" class="соглашение">Пользовательское соглашение</a></li>	
				<li class="footer1">Разработка сайта: Михаил Гришко</li>
			</ul>
		</div>

		<div class="block8"> 
			<img src="img/steeve.png" width="600px">
		</div>

		<?php endif;?> 

	</body>
</html>

