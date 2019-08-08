<?php

$start = 0;
$finish = 100;
$start2 = 0;
$finish2 = 10;

while ($start <= $finish) {
	if(($start % 3) == 0)
	{
		echo $start . " ";
	}
	$start++;
}
echo "<br/>";

do {
	if($start2 == 0){
		echo "$start2 ноль <br/>";
	}
	if(($start2 % 2) == 0 AND $start2 != 0){
		echo "$start2 четное число<br/>";
	}
	if(($start2 % 2) != 0){
		echo "$start2 нечетное число<br/>";
	}
	$start2++;

} while($start2 < $finish2);

$shtat = ["Челябинская область" => ['Челябинск', 'Кмиасс', 'Каргаяш'],
		 "Московская область" => ['Москва', 'Все что за Мкадом', 'Клин']
		 ];
foreach ($shtat as $key => $value) {
	print_r($key . ": <br/>");
	foreach ($value as $k => $val) {
		print_r($val . ",");	
	}
	echo("<br/>");
}

$transcription = ['а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'yeu','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l', 'м'=>'m','н'=>'n','о' => 'o','п'=>'p', 'р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'she','ь'=>'/','ъ'=>'big', 'ы'=> 'bl','э'=>'ye','ю'=>'yu','я'=>'ya'];

function get_flip($arr)
{
	$change = [];
	foreach ($arr as $key => $value) {
		$change[$value] = $key;
	}
	return $change;
}
print_r(get_flip($transcription));
print_r("<br/>");

$str = "тут нужен русский текст чтобы понять or English?";

function change_probel($str){
	$string = preg_replace('/ {1,}/','_',$str);
}

function create_url($str, $arr){
	$change_space = preg_replace('/ {1,}/','_',$str);
	$create_array = preg_split('//u', $change_space, null, PREG_SPLIT_NO_EMPTY);
	$trans = strtr($change_space, $arr);
	return $trans;
}

print_r( htmlspecialchars(create_url($str, $transcription)) . "<br/>");

function print_city_k ($city){
	$city_K = null;
	foreach ($city as $key => $value) {
		foreach ($value as $k => $val) {
			if(mb_substr($val, 0, 1) == "К"){
				$city_K .= $val . " ";
			}
		}
	}
	return (is_null($city_K)) ? "Пусто" : $city_K;
}

print_r(print_city_k($shtat));