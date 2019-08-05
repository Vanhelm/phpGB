<?php

//quest1
$a = -4;
$b = 3;

if($a >= 0 AND $b >= 0){
	echo $a-$b . "<br/>";
}elseif($a < 0 AND $b < 0){
	echo $a*$b . "<br/>";
}else{
	echo $a+$b . "<br/>";
}

//quest2

$n = rand(0,15);

switch ($n) {
	case 0:
		echo 0 . PHP_EOL;
	case 1:
		echo 1 . PHP_EOL;
	case 2:
		echo 2 . PHP_EOL;
	case 3:
		echo 3 . PHP_EOL;
	case 4:
		echo 4 . PHP_EOL;
	case 5:
		echo 5 . PHP_EOL;
	case 6:
		echo 6 . PHP_EOL;
	case 7:
		echo 7 . PHP_EOL;
	case 8:
		echo 8 . PHP_EOL;
	case 9:
		echo 9 . PHP_EOL;
	case 10:
		echo 10 . PHP_EOL;
	case 11:
		echo 11 . PHP_EOL;
	case 12:
		echo 12 . PHP_EOL;
	case 13:
		echo 13 . PHP_EOL;
	case 14:
		echo 14 . PHP_EOL;
	case 15:
		echo 15 . PHP_EOL;		
	default:
		echo "Конец<br/>";
		break;
}


//quest3,4
$arrayAct = ['sum', 'sub', 'div', 'mult'];
$num = rand(-100, 100);
$num1 = rand(-100, 100);
function getCalculation (int $a, int $b, array $act)
{
	$key = array_rand($act);
	if($b == 0 AND $act[$key]=='div')
	{
		return "На ноль делить нельзя <br/>";
	}
	switch ($act[$key]) {
		case 'sum':
			echo "Сумма:<br/>";
			return $a + $b . "<br/>";
		case 'sub':
			echo "Вычитание:<br/>";
			return $a - $b . "<br/>";
		case 'div':
			echo "Деление:<br/>";
			return $a/$b . "<br/>";		
		case 'mult':
			echo "Умножения:<br/>";
			return $a*$b . "<br/>";
		default:
			return "Неопазнанный енот";
	}
}

echo getCalculation($num, $num1, $arrayAct);

//Quest 6
$x = 3;
$b = 3;
function calkulatePower($val, $pow){
	if($pow == 1){
		return $val;
	}
	return $val * calkulatePower($val, $pow-1);
}

echo calkulatePower($x, $b) . "<br/>";

$hour = date("H");
$minut = date("i");
$second = date("s"); 
//quest7
//$one - единственное число
//$two - 2,3,4
//$many - множественное число для остальных
function get_form(int $default_date, string $one, string $two, string $many)
{
	$date = (int)$default_date;
	$score10 = $date % 10;
	$score100 = $date % 100;
	if($score100 >= 11 AND $score100<=20){
		return $many;
	}
	if($score10 >= 5)
	{
		return $many;
	}
	if($score10 == 1){
		return $one;
	}
	if($score10 >=2 AND $score10 >=4){
		return $two;
	}
	switch ($date) {
		case ($score100>=11 && $score100<=20):
			return $many;
		case ($score10===1):
			return $one;
		case ($score10 >= 2 && $score10 <= 4):
			return $two;
		default:
			return $many;
	}
}

echo $hour ." ". get_form($hour, "час", "часа", "часов") . " " . $minut . " " . get_form($minut, "минута", "минуты", "минут") . " " . $second . " " . get_form($second, "секунда", "секунды", "секунд") ;
