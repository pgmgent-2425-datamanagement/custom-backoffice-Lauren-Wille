<?php

namespace App\Controllers;

use Game;
use Publisher;

class GameController extends BaseController {

    public static function all () {
        
        $search = $_GET['search'] ?? '';

        $games = Game::search($search);

        
        
        self::loadView('/games', [
            'title' => 'Games',
            'games' => $games,
            'search' => $search
        ]);

    }

    public static function edit ($id) {
        $game = Game::find($id);
        $publishers = Publisher::all();

        if(isset($_FILES["image"]))
        {
            $name = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];
            $to_folder = BASE_DIR . "/public/images/";

            $uuid = uniqid() . '-' . $name;

            if (move_uploaded_file($tmp, $to_folder . $uuid)) {
                $game->image = $uuid;
            }
                 
        }

 
        if(isset($_POST['title'])) {
            if(isset($uuid))
                {
                    $game->image = $uuid;
                }
           
            $game->title = $_POST['title'];
            $game->release_date = $_POST['release_date'];
            $game->price = $_POST['price'];
            $game->developer = $_POST['developer'];
            $game->summary = $_POST['summary'];
            
            // Handle missing publisher
            $publisher_id = $_POST['publisher_id'] ?? 1;
            $game->publisher_id = !empty($publisher_id) ? $publisher_id : 1;

            $game->update();
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

    public static function add () {

        $publishers = Publisher::all();

        //load view
        self::loadView('/games/add', [
            'title' => 'Add game',
            'publishers' => $publishers
        ]);
    }

    public static function save() {
        $game = new Game();

        $name = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];

        $to_folder = BASE_DIR . "/public/images/";

        $uuid = uniqid() . '-' . $name;

        move_uploaded_file($tmp, $to_folder . $uuid);
     
        $game->image = $uuid;
        $game->title = $_POST['title'];
        $game->release_date = $_POST['release_date'];
        $game->price = $_POST['price'];
        $game->developer = $_POST['developer'];
        $game->summary = $_POST['summary'];
        $game->average_rating = $_POST['average_rating'];
        
        // Handle missing publisher
        $publisher_id = $_POST['publisher_id'] ?? 1;
        $game->publisher_id = !empty($publisher_id) ? $publisher_id : 1;
        $succes = $game->save();



        if($succes){
            self::redirect('/games'); 
        }
        else {
            echo 'fout';
        }

    }
} 