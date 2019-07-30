<?php

$today = getdate();

print_r("<pre>");
print_r($today);
print_r("</pre>");

$day = $today['mday'];
$month = $today['mon'];
$year = $today['year'];

?>

Текущее время: число: <?=$day?>, месяц: <?=$month?>, год: <?=$year?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Interior</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<div class="container">
		<div class="slider">
			<div class="header clearfix">
				<a href="#"><img src="/img/logo.svg" alt="logo"></a>
				<ul class="menu">
					<li class="menu-list"><a class="menu-link active-menu" href="#"> HOME </a></li>
					<li class="menu-list"><a class="menu-link" href="#"> PRODUCT </a></li>
					<li class="menu-list"><a class="menu-link" href="#"> HISTORY </a></li>
					<li class="menu-list"><a class="menu-link" href="#"> SHOWROOM </a></li>
					<li class="menu-list"><a class="menu-link" href="#"> CONTACT </a></li>
					<li class="menu-list"><a class="menu-link"><img src="/img/search.svg" alt="searh"></a></li>
				</ul>
			</div>
			<div class="content-text">
				<p class="trend">TRENDING</p>
				<h4 class="h2-text">Fishnet Chair</h4>
				<p class="content">Seat and back with upholstery made of cold cure foam. Steel frame, available in matt powder-coated black</p>
				<a class="button" href="#">ORDER US</a>
			</div>
			<div class="pagin">
				<a class="pag-list" href="#"></a>
				<a class="pag-list active-pag" href="#"></a>
				<a class="pag-list" href="#"></a>
			</div>
		</div>
	</div>
</body>
</html>