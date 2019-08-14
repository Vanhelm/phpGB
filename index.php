<?php
require_once('system/init.php');
$title = "Главная страница";
$menu = ['Главная', 'Товары', 'Контакты'];
$dropMenu = ['хм', 'что-то', 'типо подменю'];
$files = [];
$errors = "";
$extension = ['jpg', 'jpeg', 'png', 'gif', 'PNG', 'JPG', 'JPEG', 'GIF'];


$sql = "SELECT * FROM picture ORDER BY count_shows DESC";
$result = mysqli_query($link, $sql);
$pathImg = mysqli_fetch_all($result, MYSQLI_ASSOC);



if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(is_uploaded_file($_FILES['file']['tmp_name'])) {
        $fileName = basename($_FILES['file']['name']);
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);
        if(in_array($ext, $extension)){
            $fileName = uniqid('img') . "." . $ext;
            $filePath = $_SERVER['DOCUMENT_ROOT'] . "/img" . "/";
            $url = "/img/" . $fileName;
            move_uploaded_file($_FILES['file']['tmp_name'], $filePath . $fileName);
        }else{
            $errors = "неверное разрешение";
        }
    }else{
        $errors = "Файл не загружен";
    }
    if(empty($errors)){
        $sql = "INSERT INTO picture (path) VALUES ('$url')";
        $result = mysqli_query($link, $sql);
        if($result){
            header("Location: /");
            exit();
        }else{
            print_r(mysqli_error($link));
        }
    }
}
print_r($errors);
$content = include_template('index.php', ['files' => $pathImg]);
$layout = include_template('layout.php', ['title' => $title, 'menu'=> $menu, 'dropMenu' => $dropMenu, 'content'=> $content, 'error' => $errors]);
print_r ($layout);
