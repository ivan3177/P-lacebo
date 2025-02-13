<?php
require_once 'vendor/autoload.php';

$partner = array(
    'title' => 'Русская Ювелирная Мастерская ювелира-эксперта Шевченко Андрея',
    'url' => 'http://rujm.ru/',
    'name' => 'Андрей Шевченко',
    'photo' => 'img/Andrey/Photo.jpg',
    'facebook' => 'https://www.facebook.com/shjeweler',
    'instagram' => 'https://www.instagram.com/rujmru/',
    'phone' => '',
    'email' => '',
    'description' => "Русская Ювелирная Мастерская™ это динамично развивающаяся сеть мастерских с инновационным подходом обслуживания в ювелирной сфере, в которой есть оперативные отделы, производственные мощности и обучающие программы. Больше не нужно искать, где выполнят интересующую Вас работу, не нужно ждать неделями, не нужно оставлять изделие.
    ● Все мастерские выполнены в \"Открытом\" стиле, что позволяет Вам следить за ходом выполнения работ.
    ● Большинство работ выполняется прямо при Вас.
    ● Только квалифицированный персонал выполняет Вашу работу, прошедший обучение и подтвердивший свой уровень.
    ● Не бывает \"невыполнимого\" ремонта.
    ● Очень большой коллектив, в котором есть как ювелиры, разного профиля так и околоювелирные специалисты(огранщики камней, гемологи, оценщики, эмальеры, модельеры, 3д модельеры, литейщики, восковщики, резинщики и т.д.)
    ● Четко прописанные цены на большинство популярных работ."
);
$title = $partner['name'];
$keywords = array('Русская Ювелирная Мастерская', $partner['name'], 'P-lacebo');
$description = $partner['title'];

$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'cache', 'auto_reload' => true));

$template = $twig->load('partner.twig');
echo $template->render(array('partner' => $partner, 'title' => $title, 'keywords' => $keywords, 'description' => $description));