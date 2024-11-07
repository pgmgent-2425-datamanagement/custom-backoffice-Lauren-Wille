<?php

namespace App\Controllers;

use Publisher;

class PublisherController extends BaseController {

    public static function all () {
        $publisher = new Publisher();
        $publishers = $publisher->allExceptFirst();

        self::loadView('/publishers', [
            'title' => 'Publishers', 
            'publishers' => $publishers,
        ]);
    }

    public static function edit ($id) {
        
        $publisher = Publisher::find($id);

        if(isset($_POST['name'])) {
            print_r($_POST);
            $publisher->name = $_POST['name'];
            $publisher->about = $_POST['about'];
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