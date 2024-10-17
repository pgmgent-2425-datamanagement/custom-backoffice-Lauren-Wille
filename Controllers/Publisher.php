<?php

namespace App\Controllers;

use App\Models\Publisher;

class PublisherController extends BaseController {

    public static function all ($id) {
        $publishers = Publisher::all();

    }

    public static function edit ($id) {
        print_r($id);

        $publisher = Publisher::find($id);

    }

    public static function delete ($id) {
        print_r($id);

        $publisher = Publisher::find($id);

    }

    public static function detail ($id) {
        //print_r($id);

        $publisher = Publisher::find($id);
        $publisherTitle = $publisher->name;


        self::loadView('/publishers/publisher', [
            'title' => $publisherTitle,
            'publisher' => $publisher,
        ]);
    }

} 