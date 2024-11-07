<?php

namespace App\Controllers;

use User;

class UserController extends BaseController {

    public static function all () {
        $users = User::all();

        self::loadView('/users', [
            'title' => 'Users',
            'users' => $users,
        ]);

    }

    public static function edit ($id) {
        $user = User::find($id);

        if(isset($_POST['bio'])) {
            $user->username = $_POST['username'];
            $user->email = $_POST['email'];
            $user->password = $_POST['password'];
            $user->bio = $_POST['bio'];
            $user->update();
        }

        //load view
        self::loadView('/users/edit', [
            'title' => 'Edit user',
            'user' => $user,
        ]);
    }

    public static function delete($id)
    {
        $user = User::deleteById($id);
        self::redirect('/users');
    }


    public static function add () {

        //load view
        self::loadView('/users/add', [
            'title' => 'Add user'
        ]);
    }

     public static function save() {
        $user = new User();

        $name = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];

        $to_folder = BASE_DIR . "/public/images/profile-pictures/";

        $uuid = uniqid() . '-' . $name;

        move_uploaded_file($tmp, $to_folder . $uuid);
     
        $user -> profile_picture = $uuid;
        $user -> username = $_POST['username'];
        $user -> email = $_POST['email'];
        $user -> password = $_POST['password'];
        $user -> bio = $_POST['bio'];
        
        $succes = $user->save();


        if($succes){
            self::redirect('/users'); 
        }
        else {
            echo 'fout';
        }

    } 
} 