<?php
require_once('oop.php');
$title = "Главная страница";
$menu = ['Главная', 'Товары', 'Контакты'];
$dropMenu = ['хм', 'что-то', 'типо подменю'];

$content = include_template('index.php', ['title' => $title, 'menu'=> $menu, 'dropMenu' => $dropMenu]);
print_r($content);
