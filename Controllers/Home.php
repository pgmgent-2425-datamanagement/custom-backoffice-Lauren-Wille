<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Game;
use App\Models\Publisher;

class HomeController extends BaseController {

    public static function index () {

        $users = User::all();
        $games = Game::all();
        $publishers = Publisher::all();


        //print_r($users);

        self::loadView('/home', [
            'title' => 'Homepage',
            'users' => $users,
            'games'=>$games,
            'publishers'=>$publishers
        ]);
    }

} 