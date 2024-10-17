<?php

namespace App\Controllers;

use App\Models\Game;
use App\Models\Publisher;
use PDO;

class GameController extends BaseController {

    public static function all () {
        $games = Game::allWithPublisher();

        
        self::loadView('/games', [
            'title' => 'Games',
            'games' => $games,
        ]);

    }

    public static function edit ($id) {
        print_r($id);

        $game = Game::find($id);

    }

    public static function delete ($id) {
        print_r($id);

        $game = Game::find($id);

    }

    public static function detail ($id) {
        //print_r($id);

        $game = Game::find($id);
        $gameTitle = $game->title;


        self::loadView('/games/game', [
            'title' => $gameTitle,
            'game' => $game,
        ]);
    }

} 