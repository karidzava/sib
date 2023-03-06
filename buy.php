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
			<div class="need_login">
				<ul>
					<li class="nd2"><a class="close" onclick="window.location.href = 'shop.php';"><img src="img/close.png" width="30px" class="img_close"></a></li>
					<li class="nd2"><span class="items">Для покупки необходимо авторизоваться:</span></li>
					<li class="nd2"><button class="basket" onclick="window.location.href = 'account.php';">Вход</button><br></li>
					<li class="nd2"><button class="basket" onclick="window.location.href = 'login.php';">Регистрация</button></li>
				</ul>
			</div>
			
			<?php else:?>
				<div class="buy_products">
				<span class="buy_title">Подтверждение покупки</span>
				<a class="close" onclick="window.location.href = 'shop.php';"><img src="img/close.png" width="30px" class="img_close"></a>
			
				<?php
					require "connect.php";
					$result = $mysql->query("SELECT * FROM `product` WHERE `id` = {$_GET['id']}");

					$the_cookie = $_COOKIE['user'];

					$user = $mysql->query("SELECT * FROM `user` WHERE `name` = '$the_cookie'");

					while ( ($summ = mysqli_fetch_assoc($user)) )
					{
						?>
						<div class="xyz"><br>Ваш баланс: <?php echo $summ['summ'] ;?> р. <br></div>
						<?php
					}		
				?> 

				<?php 
					while ( ($shop = mysqli_fetch_assoc($result)) )
					{
						?>
							<div class="content_confirmation">
								<span class="items"><?php echo $shop['name'] ?></span><br>
								<span class="items"><?php echo 'Цена: ' . $shop['price'] . ' р' . '. Количество: ' . $shop['quantity']; ?></span><br>
								<button onClick="Get_Summ(<?= $shop["id"]; ?>); Get_Quantity(<?= $shop["quantity"]; ?>) " class="basket"><img src="img/basket.png" height="30px"><span class="basket_text">Купить</span> </a></button>
							</div>
						<?php 
					}							
				?>
			</div>
			<?php $mysql->close(); ?>	

			<?php endif;?> 
				
	</body>
</html>

