<?php

namespace App\Controllers;
use Publisher;
use Game;
use User;

class HomeController extends BaseController {

    public static function index () {
        $publisher = new Publisher();
        $publishersWithGames = $publisher->countGamesPerPublisher();

        $game = new Game();
        $gamesByMonth = $game->gamesEachMonth();

        self::loadView('/home', [
            'title' => 'Homepage',
            'publishersWithGames' => $publishersWithGames,
            'gamesByMonth' => $gamesByMonth
        ]);
    }

} 