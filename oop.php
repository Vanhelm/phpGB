<?php

//учу ООП немного
//Объявляю класс
class ShopProduct{
	//Объявляю свойства
	public $title = "Стандартный товра";
	public $name = "Имя";
	public $firstName = "Фамилия";
	public $price = 0;
	//метод для быстрого создания объектов
	function __construct($title, $name, $firstName, $price){
		$this->title = $title;
		$this->name = $name;
		$this->firstName = $firstName;
		$this->price = $price;
	}
	//Быстрый вывод
	function getProducer(){
		return "{$this->name} " . "{$this->firstName}";
	}
}

class ShopProductWriter{
	public function write(ShopProduct $ShopProduct){
		$str = "$ShopProduct->title: " . $ShopProduct->getProducer() . " ($ShopProduct->price)";
		return  $str;
	}
}

$product = new ShopProduct("Собачье сердце", "Михаил", "Булгаков", 173);
$writer = new ShopProductWriter();
echo $writer->write($product);


