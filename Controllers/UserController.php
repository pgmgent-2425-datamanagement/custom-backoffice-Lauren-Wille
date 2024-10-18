<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController {

    public static function all () {
        $users = User::all();

        
        self::loadView('/users', [
            'title' => 'Users',
            'games' => $users,
        ]);

    }
    public static function edit ($id) {
        print_r($id);

        $user = User::find($id);

        //print_r($user);
    }

    public static function delete ($id) {
        print_r($id);

        $user = User::find($id);

        //print_r($user);
    }

} 