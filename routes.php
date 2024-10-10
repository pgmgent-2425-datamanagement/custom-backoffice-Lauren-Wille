<?php

//$router->get('/', function() { echo 'Dit is de index vanuit de route'; });
$router->setNamespace('\App\Controllers');
$router->get('/', 'HomeController@index');

//users
$router->get('/user/edit/(\d+)', 'UserController@edit');
$router->get('/user/delete/(\d+)', 'UserController@delete');

//games
$router->get('/game/(\d+)', 'GameController@detail');

/* $router->get('/test', function () {
    echo 'test';
}); */