<?php
require_once 'vendor/autoload.php';

$title = 'Аксессуары';
$keywords = array('Аксессуары', 'P-lacebo');
$description = 'Аксессуары P-lacebo';
$blocks = array(
    array(
        'url' => 'Umbrellas.html',
        'name' => 'ЗОНТЫ',
        'img' => 'img/Accessories/Umbrellas/Group%20Photo.jpg',
        'description' => "Коллекция\n«Bio umbrella»"
    ),
    array(
        'url' => 'Cases.php',
        'name' => "ЧЕХЛЫ\nДЛЯ СМАРТФОНОВ",
        'img' => 'img/Accessories/Cases/Group%20Photo.jpg',
        'description' => 'Чехлы для смартфонов'
    ),
    array(
        'url' => 'Jewelry.php',
        'name' => "ЮВЕЛИРНЫЕ\nУКРАШЕНИЯ",
        'img' => 'img/Accessories/Jewelry/Group%20Photo.jpg',
        'description' => "Коллекция\n«BIO-Jewelry»"
    ),
    array(
        'url' => 'Women handkerchiefs.html',
        'name' => "ЖЕНСКИЕ\nНОСОВЫЕ ПЛАТОЧКИ",
        'img' => 'img/Accessories/Women%20handkerchiefs/Group%20Photo.jpg',
        'description' => "Коллекция\n«Bio-shawl»"
    ),
    array(
        'url' => 'Men handkerchiefs.html',
        'name' => "МУЖСКИЕ\nНОСОВЫЕ ПЛАТКИ",
        'img' => 'img/Accessories/Men%20handkerchiefs/Group%20Photo.jpg',
        'description' => "Коллекция\n«Bio-shawl»"
    )
);

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache', 'auto_reload' => true));

$template = $twig->load('collections.twig');
echo $template->render(array('blocks' => $blocks, 'title' => $title, 'keywords' => $keywords, 'description' => $description));