<?php

namespace App\Controllers;

use Publisher;

class PublisherController extends BaseController {

    public static function all () {
        $publishers = Publisher::allExceptFirst();

        self::loadView('/publishers', [
            'title' => 'Publishers', 
            'publishers' => $publishers,
        ]);
    }

    public static function edit ($id) {
        $publisher = Publisher::find($id);

        if(isset($_POST['title'])) {
            $publisher->name = $_POST['name'];
            $publisher->release_date = $_POST['about'];
            $publisher->save();
        }

        //load view
        self::loadView('/publishers/edit', [
            'title' => 'Edit Publisher',
            'publisher' => $publisher,
        ]);
    }

    public static function delete($id)
    {
        $publisher = Publisher::deleteById($id);
        self::redirect('/publishers');
    }


}  