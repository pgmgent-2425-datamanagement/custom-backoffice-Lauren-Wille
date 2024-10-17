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
        $game = Game::find($id);
        $publishers = Publisher::all();

        if(isset($_POST['title'])) {
            $game->title = $_POST['title'];
            $game->release_date = $_POST['release_date'];
            $game->price = $_POST['price'];
            $game->developer = $_POST['developer'];
            $game->summary = $_POST['summary'];
            $game->publisher_id = $_POST['publisher_id'];
            $game->save();
        }

        //load view
        self::loadView('/games/edit', [
            'title' => 'Edit game',
            'game' => $game,
            'publishers' => $publishers
        ]);

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