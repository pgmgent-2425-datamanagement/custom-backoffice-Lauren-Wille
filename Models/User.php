<?php

use App\Models\BaseModel;

class User extends BaseModel{
    public function update() {
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

    public function save() {
        // Assuming you have a database connection set up
        $sql = "INSERT INTO users (username, email, password, profile_picture, bio) VALUES (:username, :email, :password, :profile_picture, :bio)";
    
    $pdo_statement = $this->db->prepare($sql);
    $succes= $pdo_statement->execute([
        ':username' => $this->username,
        ':email' => $this->email,
        ':password' => $this->password,
        ':profile_picture' => $this->profile_picture,
        ':bio' => $this->bio,
    ]);
    return $succes;
    }
}