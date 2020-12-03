<?php 
require_once '../vendor/autoload.php';
/* Load the template directory */
$loader = new \Twig\Loader\FilesystemLoader('../templates');

$twig = new \Twig\Environment($loader);

/* now reference the template to use to display the data*/
echo $twig->render('home.twig', array('name' => 'Fabien'));