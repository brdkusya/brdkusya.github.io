<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">

<?php
	$phone = $_POST['form-phone'];
	$phone = htmlspecialchars($phone);
	$phone = urldecode($phone);
	$phone = trim($phone);

	$to  = 'berdichevskayaya@gmail.com';

	// содержание письма
	$subject = "Заявка с sklad.pw - 4";
	$message = '
	<html>
			<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<title>Заявка с sklad.pw - 4</title>
			</head>
			<body>
					<p>Номер телефона: '. $phone .'</p>
			</body>
	</html>';

	// устанавливаем тип сообщения Content-type, если хотим
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= "Content-type: text/html; charset=utf-8 \r\n";

	// дополнительные данные
	$headers .= "From: sklad.pw/sklad-4 <office@sklad.pw>\r\n";

	mail($to, $subject, $message, $headers);
?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/style.min.css">
	<title>Спасибо за заявку</title>
</head>
<body>
	<header class="page-header page-header--no-img">
		<div class="container">
			<div class="page-header__top-line">
				<a class="page-header__logo">
					<img width="106" height="26.63" src="img/logotype/logo.svg" alt="Логотип Wecheap">
				</a>
				<a class="page-header__phone" href="tel:+79819338141">8 <span>(981)</span> 933 81 41</a>
			</div>
		</div>
	</header>

	<main class="page-main">
		<div class="page-main__about container">
			<img src="img/photo.png" width="88" height="88" alt="Портрет Артема Сидорова">
			<h2 class="page-main__text"><span>Артем Сидоров</span>Генеральный директор компании WeSklad</h2>
		</div>
		<p class="page-main__descr container">Благодарю, что проявили интерес к нашей компании. Наши менеджеры подберут для вас индивидуальное предложение в ближайшее время</p>
		<img class="page-main__map" src="img/map.png" width="320" height="226" alt="Карта Wecheap">
		<div class="page-main__btns container">
			<a class="page-main__prev" href="/">Назад</a>
			<a class="page-main__form-btn" href="/">Перейти на сайт</a>
		</div>
	</main>
</body>
</html>