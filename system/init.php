<?php
require_once('function.php');

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$menu = ['Главная', 'Товары', 'Контакты'];
$dropMenu = ['хм', 'что-то', 'типо подменю'];

$link = mysqli_connect('localhost', 'root', '', 'geekbrains');

if (!$link) {
    print ("Ошибка подключения: " . mysqli_connect_error());
    exit();
}
mysqli_set_charset($link, "utf8");

