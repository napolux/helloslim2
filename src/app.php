<?php
require_once 'vendor/autoload.php';

// app setup...
$app    = new \Slim\Slim();
Twig_Autoloader::register();

// Twig setup...
$loader = new Twig_Loader_Filesystem('templates');
$twig   = new Twig_Environment($loader, array(

));

// twig globals...
$twig->addGlobal('cssPath', '/assets/css/');
$twig->addGlobal('jsPath', '/assets/js/');
$twig->addGlobal('get', $_GET);


// Hello World...
$app->get('/', function () {
    global $twig;
    echo $twig->render('pages/homepage.twig', array('pageName' => 'homepage'));
});

