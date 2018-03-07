<?php
require_once 'vendor/autoload.php';

$blocks = array(
    array(
        'url' => 'Bio-polo.html',
        'name' => 'РУБАШКИ-ПОЛО',
        'img' => 'img/Clothes/Bio%20polo/Group%20Photo.jpg',
        'description' => "Коллекция «Bio-Polo»"
    ),
    array(
        'url' => 'T-shirts.html',
        'name' => "ФУТБОЛКИ",
        'img' => 'img/Clothes/T-shirts/Group%20Photo.jpg',
        'description' => "Коллекция «Art T-shirt»"
    )
);

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache'));

$template = $twig->load('collections.twig');
echo $template->render(array('blocks' => $blocks, 'currentYear' => date("Y")));