<?php

//$router->get('/', function() { echo 'Dit is de index vanuit de route'; });
$router->setNamespace('\App\Controllers');
$router->get('/', 'HomeController@index');
$router->get('/user/edit/(\d+)', 'HomeController@edit');

/* $router->get('/test', function () {
    echo 'test';
}); */