<?php
require_once 'vendor/autoload.php';

// Prepare app
$app = new \Slim\Slim(array(
    'templates.path' => 'templates',
));

// Prepare view
$app->view(new \Slim\Views\Twig());

// Parser options
$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);

// Adding twig extension
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());

// Twig vars we need in every page...
$twig = $app->view()->getEnvironment();

// Setting timezone...
$twig->getExtension('core')->setTimezone('Europe/Rome');

$twig->addGlobal('cssPath', '/assets/css/');
$twig->addGlobal('jsPath', '/assets/js/');

// Hello World...
$app->get('/', function () use ($app) {
    $app->render('/pages/homepage.twig', array('pageName' => 'homepage'));
});

