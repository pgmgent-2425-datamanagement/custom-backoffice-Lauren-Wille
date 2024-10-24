<?php

namespace App\Controllers;

use Game;
use Publisher;

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

        $publisher_id = $_POST['publisher_id'];

        if(isset($_POST['title'])) {
            $game->title = $_POST['title'];
            $game->release_date = $_POST['release_date'];
            $game->price = $_POST['price'];
            $game->developer = $_POST['developer'];
            $game->summary = $_POST['summary'];
            
            // Handle missing publisher
            $publisher_id = $_POST['publisher_id'] ?? 1;
            $game->publisher_id = !empty($publisher_id) ? $publisher_id : 1;

            $game->save();
        }

        //load view
        self::loadView('/games/edit', [
            'title' => 'Edit game',
            'game' => $game,
            'publishers' => $publishers
        ]);
    }

    public static function delete($id)
    {
        $game = Game::deleteById($id);
        self::redirect('/games');
    }


} 