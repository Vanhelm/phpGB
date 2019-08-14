<?php
require_once('system/init.php');

$title = "Просмотр изображения";
$img = null;
$path = null;

if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM picture WHERE id=$id";
    $result = mysqli_query($link, $sql);
    $img = mysqli_fetch_assoc($result);
    $path = $img['path'];
    $countShows = $img['count_shows'];
    $sql = "UPDATE picture SET count_shows = count_shows + 1 WHERE id=$id";
    $result = mysqli_query($link, $sql);
}

$content = include_template('showImage.php', ['path' => $path, 'show' => $countShows]);
$layout = include_template('layout.php', ['title' => $title, 'menu'=> $menu, 'dropMenu' => $dropMenu, 'content'=> $content]);
print_r ($layout);