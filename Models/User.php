<?php

use App\Models\BaseModel;

class User extends BaseModel{
    public function save() {
        $sql = "UPDATE users SET username = :username, email = :email, 
        password = :password, bio = :bio WHERE id = :id";

        $pdo_statement = $this->db->prepare($sql);
        $pdo_statement->execute([
            ':id' => $this->id,
            ':username' => $this->username,
            ':email' => $this->email,
            ':password' => $this->password,
            ':bio' => $this->bio,
        ]);
    }
}