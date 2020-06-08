<?php

use Router\Router;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__). DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);

$router->get('', 'App\Controllers\BlogController@index');
$router->get('/tl/:id', 'App\Controllers\BlogController@showPosts');
$router->get('/fights/:id', 'App\Controllers\BlogController@showFights');
$router->get('/login', 'App\Controllers\BlogController@login');
$router->get('/login_Creation', 'App\Controllers\BlogController@loginCreate');
$router->get('/changement_mdp', 'App\Controllers\BlogController@replacePassword');
$router->get('/createur_tierlist', 'App\Controllers\BlogController@createTierlist');
$router->get('/createur_comparaison', 'App\Controllers\BlogController@createFight');

$router->run();