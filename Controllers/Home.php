<?php

namespace App\Controllers;

use App\Models\User;

class HomeController extends BaseController {

    public static function index () {

        $users = User::all();

        //print_r($users);

        self::loadView('/home', [
            'title' => 'Homepage',
            'users' => $users
        ]);
    }

    public static function edit ($id) {
        print_r($id);

        $user = User::find($id);

        print_r($user);
    }

} 