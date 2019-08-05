<?php

$today = getdate();
$last = 0;
$day = $today['mday'];
$month = $today['mon'];
$year = $today['year'];

$h2 = 'Fishnet Chair';
$title = 'Interior';
$arr = ['test','test2', 'test3', 'test4'];

$a = 11;
$b = 232;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "a = ";
echo $a;
echo " b = ";
echo $b;

function array_swap(array &$arr, $number)
{

	if($number == 0 OR $number == $last){
		end($arr);
		$last = key($arr);
		list($arr[$number], $arr[$last]) = array($arr[$last], $arr[$number]);
		return true;
	}
	if(isset($arr[$number])){
		list($arr[$number], $arr[0]) = array($arr[$last], $arr[0]);
		return true;
	}
	return false;
}

array_swap($arr, 1);
print_r($arr);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/css/main.css">
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
				<h4 class="h2-text"><?=$h2?></h4>
				<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum asperiores deleniti dolores adipisci voluptates quidem porro ab recusandae impedit distinctio.</p>
				<a class="button" href="#">ORDER US</a>
			</div>
			<div class="pagin">
				<a class="pag-list" href="#"></a>
				<a class="pag-list active-pag" href="#"></a>
				<a class="pag-list" href="#"></a>	
			</div>
			<div class="date_cur">
				<p>Дата: <?=$day?>.<?=$month?>.<?=$year?></p>
			</div>
		</div>
	</div>
</body>
</html>