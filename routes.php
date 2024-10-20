<?php

//$router->get('/', function() { echo 'Dit is de index vanuit de route'; });
$router->setNamespace('\App\Controllers');
$router->get('/', 'HomeController@index');

//users
$router->get('/users', 'UserController@all');
$router->get('/users/edit/(\d+)', 'UserController@edit');
$router->post('/users/edit/(\d+)', 'UserController@edit');
$router->get('/users/delete/(\d+)', 'UserController@delete');

//games
$router->get('/games', 'GameController@all');
$router->get('/games/edit/(\d+)', 'GameController@edit');
$router->post('/games/edit/(\d+)', 'GameController@edit');
$router->get('/games/delete/(\d+)', 'GameController@delete');

//publishers
$router->get('/publisher/(\d+)', 'PublisherController@detail');

/* $router->get('/test', function () {
    echo 'test';
}); */