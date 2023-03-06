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
			
		<div class="block5">
		    <img class="заголовок_книга" src="img/book.png" width="40x">
			<span class="заголовок_правила">Правила сервера</span><br>
			<button class="правила" id="btn1" onclick="readMore1()">Общие сведения</button><br>
			<button class="правила" id="btn2" onclick="readMore2()">Общие правила</button><br>
			<button class="правила" id="btn3" onclick="readMore3()">Правила игры</button><br>
		</div>
		
		<div class="sved">
			<ol class="сведения" id="s1"> 
				<li>
					Читы - Бан!
				</li><br>
				<li>
					Кемперство - Бан!
				</li><br>
				<li>
					Оскорбления администрации - расстрел, потом Бан!
				</li><br>
				<li>
					Создатель сервера вправе наказать игрока по причине, не указанной в настоящих правилах.
				</li><br>
				<li>
					Техническая поддержка не занимается восстановлением аккаунтов.
				</li><br>
				<li>
					 Восстановить аккаунт можно с помощью бота в сообщениях группы ВКонтакте или Дискорд. Для восстановления аккаунт должен быть привязан к вашей учетной записи.
				</li><br>
				<li>
					Привилегия покупается только на один сервер, выбранный вами при покупке. Средства за оплаченный донат не возвращаются.
				</li><br>
				<li>
					Кейсы покупаются на все сервера, например, купив кейсы на 1 сервер вы также сможете открыть их на 2 сервере.
				</li><br>
				<li>
					Запрещается распространять данные про покупку привилегии (например, передавать кому-либо чек оплаты). При восстановлении аккаунта вам могут отказать, либо вовсе снять донат. Исключением является, если вы купили привилегию знакомому.
				</li><br>
				<li>
					Передача аккаунта, дать поиграть аккаунт другу, продажа аккаунта, обмен аккаунтами являются нарушениями. Наказание выдается на усмотрение администрации проекта в зависимости от перечисленных в данном правиле нарушений.
				</li><br>
				<li>
					Попытка ввода администрации сервера в заблуждение, например, предоставление неверных данных об оплате и т.п. обман наказывается на усмотрение администрации проекта.
				</li>
				
			</ol>
			
		</div>
		
		<div class="sved">
		
			<ol class="сведения" id="s2"> 
				<li>
					Запрещается выдавать себя за администрацию сервера. Наказание: бан до вайпа, либо на усмотрение администрации.
				</li><br>
				<li>
					Запрещается рекламировать сторонние ресурсы в любой чат.
				</li><br>
				<li>
					Запрещается рекламировать стримы, трансляции, зазывать перейти игроков куда-либо. 
				</li><br>
				<li>
					Запрещается постройка логотипов канала, постройка ссылок на свои учетные записи, указывать на табличках или в книжках своё название группы или канала, писать призывы перейти или подписаться на свой канал, сайт и т.п.
				</li><br>
				<li>
					Упоминать сторонние сервера в глобальном чате запрещено и является пиаром.
				</li><br>
				<li>
					 Упоминание в разговоре какой-то игры, ресурса не считается за пиар, если диалог не преследует цель завлечения игроков поиграть во что-то или зайти куда-то.
				</li><br>
				<li>
					Разрешается писать (не в целях пиара, например: для передачи скринов, совместной игры) свои контактные данные в любой чата.
				</li><br>
				<li>
					Разрешается создателю клана и его модераторам рекламировать ресурсы только по тематике клана (группа ВКонтакте, Телеграмм канал, Дискорд сервер) для сплочения своего клана на клан-варпах или в клан чате.
				</li><br>
				<li>
					Запрещается проводить любые операции с реальными деньгами или аккаунтами. 
				</li>
			</ol>
		</div>
		
		<div class="sved">

			<ol class="сведения" id="s3"> 
				<li>
					Запрещается намеренная застройка территории впритык с приватом или засыпание/заливание.
				</li><br>
				<li>
					Создавать приваты рядом с постройками других игроков в мире разрешается через 15 блоков.
				</li><br>
				<li>
					Запрещается бессмысленная порча свободной территории карты заливание водой/лавой, застраивание головами/блоками больших площадей (примерно от 50х50 блоков). 
				</li><br>
				<li>
					 Запрещается делать дыры в мире, а также большие ямы вплоть до бедрока. Если вы и делаете такие ямы, например, для батутов, то запрещается делать огромные ямы (не больше 20х20 блоков), а также внизу обязана быть поверхность, из-за которой игрок не разобьется (вода или блоки слизи). 
				</li><br>
				<li>
					Запрещается постройка в воздухе над чужими приватами (даже если владелец региона не против постройки над его приватом). 
				</li><br>
				<li>
					 Полностью запрещены постройки в воздухе рядом со спавном в радиусе до 500 блоков. Постройки надписей, ников и т.п. разрешены.
				</li><br>
				<li>
					Если вы построились под уже существующем домом в воздухе и жалуетесь на постройку над вами, то это считается за фабриковку.
				</li><br>
				<li>
					Запрещается любым игрокам мешать игровому процессу других игроков. 
				</li><br>
				<li>
					Если вам мешает любой игрок, то вы обязуетесь его предупредить о помехе и если игрок продолжает мешать, то вы имеете право выдать наказание за помеху.
				</li>
			</ol>
		</div>

		<div class="footer" id="ft_rules">
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
			</ul>
		</div>
			
		<div class="block5">
		    <img class="заголовок_книга" src="img/book.png" width="40x">
			<span class="заголовок_правила">Правила сервера</span><br>
			<button class="правила" id="btn1" onclick="readMore1()">Общие сведения</button><br>
			<button class="правила" id="btn2" onclick="readMore2()">Общие правила</button><br>
			<button class="правила" id="btn3" onclick="readMore3()">Правила игры</button><br>
		</div>
		
		<div class="sved">
			<ol class="сведения" id="s1"> 
				<li>
					Читы - Бан!
				</li><br>
				<li>
					Кемперство - Бан!
				</li><br>
				<li>
					Оскорбления администрации - расстрел, потом Бан!
				</li><br>
				<li>
					Создатель сервера вправе наказать игрока по причине, не указанной в настоящих правилах.
				</li><br>
				<li>
					Техническая поддержка не занимается восстановлением аккаунтов.
				</li><br>
				<li>
					 Восстановить аккаунт можно с помощью бота в сообщениях группы ВКонтакте или Дискорд. Для восстановления аккаунт должен быть привязан к вашей учетной записи.
				</li><br>
				<li>
					Привилегия покупается только на один сервер, выбранный вами при покупке. Средства за оплаченный донат не возвращаются.
				</li><br>
				<li>
					Кейсы покупаются на все сервера, например, купив кейсы на 1 сервер вы также сможете открыть их на 2 сервере.
				</li><br>
				<li>
					Запрещается распространять данные про покупку привилегии (например, передавать кому-либо чек оплаты). При восстановлении аккаунта вам могут отказать, либо вовсе снять донат. Исключением является, если вы купили привилегию знакомому.
				</li><br>
				<li>
					Передача аккаунта, дать поиграть аккаунт другу, продажа аккаунта, обмен аккаунтами являются нарушениями. Наказание выдается на усмотрение администрации проекта в зависимости от перечисленных в данном правиле нарушений.
				</li><br>
				<li>
					Попытка ввода администрации сервера в заблуждение, например, предоставление неверных данных об оплате и т.п. обман наказывается на усмотрение администрации проекта.
				</li>
				
			</ol>
			
		</div>
		
		<div class="sved">
		
			<ol class="сведения" id="s2"> 
				<li>
					Запрещается выдавать себя за администрацию сервера. Наказание: бан до вайпа, либо на усмотрение администрации.
				</li><br>
				<li>
					Запрещается рекламировать сторонние ресурсы в любой чат.
				</li><br>
				<li>
					Запрещается рекламировать стримы, трансляции, зазывать перейти игроков куда-либо. 
				</li><br>
				<li>
					Запрещается постройка логотипов канала, постройка ссылок на свои учетные записи, указывать на табличках или в книжках своё название группы или канала, писать призывы перейти или подписаться на свой канал, сайт и т.п.
				</li><br>
				<li>
					Упоминать сторонние сервера в глобальном чате запрещено и является пиаром.
				</li><br>
				<li>
					 Упоминание в разговоре какой-то игры, ресурса не считается за пиар, если диалог не преследует цель завлечения игроков поиграть во что-то или зайти куда-то.
				</li><br>
				<li>
					Разрешается писать (не в целях пиара, например: для передачи скринов, совместной игры) свои контактные данные в любой чата.
				</li><br>
				<li>
					Разрешается создателю клана и его модераторам рекламировать ресурсы только по тематике клана (группа ВКонтакте, Телеграмм канал, Дискорд сервер) для сплочения своего клана на клан-варпах или в клан чате.
				</li><br>
				<li>
					Запрещается проводить любые операции с реальными деньгами или аккаунтами. 
				</li>
			</ol>
		</div>
		
		<div class="sved">

			<ol class="сведения" id="s3"> 
				<li>
					Запрещается намеренная застройка территории впритык с приватом или засыпание/заливание.
				</li><br>
				<li>
					Создавать приваты рядом с постройками других игроков в мире разрешается через 15 блоков.
				</li><br>
				<li>
					Запрещается бессмысленная порча свободной территории карты заливание водой/лавой, застраивание головами/блоками больших площадей (примерно от 50х50 блоков). 
				</li><br>
				<li>
					 Запрещается делать дыры в мире, а также большие ямы вплоть до бедрока. Если вы и делаете такие ямы, например, для батутов, то запрещается делать огромные ямы (не больше 20х20 блоков), а также внизу обязана быть поверхность, из-за которой игрок не разобьется (вода или блоки слизи). 
				</li><br>
				<li>
					Запрещается постройка в воздухе над чужими приватами (даже если владелец региона не против постройки над его приватом). 
				</li><br>
				<li>
					 Полностью запрещены постройки в воздухе рядом со спавном в радиусе до 500 блоков. Постройки надписей, ников и т.п. разрешены.
				</li><br>
				<li>
					Если вы построились под уже существующем домом в воздухе и жалуетесь на постройку над вами, то это считается за фабриковку.
				</li><br>
				<li>
					Запрещается любым игрокам мешать игровому процессу других игроков. 
				</li><br>
				<li>
					Если вам мешает любой игрок, то вы обязуетесь его предупредить о помехе и если игрок продолжает мешать, то вы имеете право выдать наказание за помеху.
				</li>
			</ol>
		</div>

		<div class="footer" id="ft_rules">
			<ul class="ft"> 
				<li class="footer1"><span><?php echo date ( 'Y' ) ; ?> «ceebcraft.ru»</span></li>
				<li class="footer1"><a href="agreement.php" class="соглашение">Пользовательское соглашение</a></li>	
				<li class="footer1">Разработка сайта: Михаил Гришко</li>
			</ul>
		</div>

	<?php endif;?> 

	</body>
</html>