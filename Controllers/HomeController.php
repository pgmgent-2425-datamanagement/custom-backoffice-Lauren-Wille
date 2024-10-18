<?php

namespace App\Controllers;

class HomeController extends BaseController {

    public static function index () {


        //print_r($users);

        self::loadView('/home', [
            'title' => 'Homepage',
        ]);
    }

} 