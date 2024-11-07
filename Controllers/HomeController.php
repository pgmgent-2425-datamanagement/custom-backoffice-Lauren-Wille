<?php

namespace App\Controllers;
use Publisher;
use Game;
use User;

class HomeController extends BaseController {

    public static function index () {
        $publisher = new Publisher();
        $publishersWithGames = $publisher->countGamesPerPublisher();

        self::loadView('/home', [
            'title' => 'Homepage',
            'publishersWithGames' => $publishersWithGames
        ]);
    }

} 