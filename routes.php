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
$router->get('/games/add', 'GameController@add');
$router->post('/games/add', 'GameController@save');

//publishers
$router->get('/publishers', 'PublisherController@all');
$router->get('/publishers/edit/(\d+)', 'PublisherController@edit');
$router->post('/publishers/edit/(\d+)', 'PublisherController@edit');
$router->get('/publishers/delete/(\d+)', 'PublisherController@delete');


/* $router->get('/test', function () {
    echo 'test';
}); */