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

        if(isset($_FILES["image"]))
        {
            $name = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];
            $to_folder = BASE_DIR . "/public/images/publishers/";

            $uuid = uniqid() . '-' . $name;

            if (move_uploaded_file($tmp, $to_folder . $uuid)) {
                $publisher->image = $uuid;
            }
                 
        }

        if(isset($_POST['name'])) {
            if(isset($uuid))
            {
                $publisher->image = $uuid;
            }

            $publisher->name = $_POST['name'];
            $publisher->about = $_POST['about'];
            $publisher->update();
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


    public static function add () {
        //load view
        self::loadView('/publishers/add', [
            'title' => 'Add publisher'
        ]);
    }

    public static function save() {
        $publisher = new Publisher();

        $name = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];

        $to_folder = BASE_DIR . "/public/images/publishers/";

        $uuid = uniqid() . '-' . $name;

        move_uploaded_file($tmp, $to_folder . $uuid);
     
        $publisher->image = $uuid;
        $publisher->name = $_POST['name'];
        $publisher->about = $_POST['about'];
        
        $succes = $publisher->save();


        if($succes){
            self::redirect('/publishers'); 
        }
        else {
            echo 'fout';
        }

    }
}  