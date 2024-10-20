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
            $user->save();
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
/* 
        $imagePath = $_SERVER['DOCUMENT_ROOT'] . '/images/' . $user->profile_picture;

            // Check if the image exists and delete it from the folder
            if (file_exists($imagePath)) {
                unlink($imagePath);  // This deletes the image file
            } */

            self::redirect('/users');
    }


} 