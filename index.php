<?php
require_once('function.php');
$title = "Главная страница";
$menu = ['Главная', 'Товары', 'Контакты'];
$dropMenu = ['хм', 'что-то', 'типо подменю'];
$files = [];

$file = scandir('img');
foreach($file as $val){
    $extension = pathinfo($val, PATHINFO_EXTENSION);
    if($extension == "jpg" OR $extension == "jpeg" OR $extension == "png"){
        $files[] = "/" . 'img' . '/' . $val;
    }
}

$content = include_template('index.php', ['files' => $files]);
$layout = include_template('layout.php', ['title' => $title, 'menu'=> $menu, 'dropMenu' => $dropMenu, 'content'=> $content]);
print_r ($layout);
