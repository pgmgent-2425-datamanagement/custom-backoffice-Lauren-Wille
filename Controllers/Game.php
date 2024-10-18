<?php

namespace App\Controllers;

use App\Models\Game;
use App\Models\Publisher;

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

    public static function delete($id)
    {
        $id = intval($id); // Convert to integer
        
        // Find the game by ID, handle cases where the game doesn't exist
        $game = Game::find($id);

        if ($game) {
            // Call the delete method to delete the game
            $game->delete();
        }

        // Redirect back to the games page after deletion
        header('Location: /games');
        exit();
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