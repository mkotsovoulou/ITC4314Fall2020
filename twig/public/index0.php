<?php 
require_once '../vendor/autoload.php';
/* in this example the template is loaded in this file*/
$loader = new \Twig\Loader\ArrayLoader([
    'index' => 'Hello {{ name }}!',
]);

$twig = new \Twig\Environment($loader);

echo $twig->render('index', array('name' => 'Fabien'));