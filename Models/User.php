<?php

use App\Models\BaseModel;

class User extends BaseModel{
    public function update() {
        $sql = "UPDATE users SET profile_picture = :profile_picture, username = :username, email = :email, 
        password = :password, bio = :bio WHERE id = :id";

        $pdo_statement = $this->db->prepare($sql);
        $succes = $pdo_statement->execute([
            ':profile_picture' => $this->profile_picture,
            ':id' => $this->id,
            ':username' => $this->username,
            ':email' => $this->email,
            ':password' => $this->password,
            ':bio' => $this->bio,
        ]);

        return $succes;
    }

    public function save() {
        // Assuming you have a database connection set up
        $sql = "INSERT INTO users (profile_picture, username, email, password, profile_picture, bio) VALUES (:profile_picture, :username, :email, :password, :profile_picture, :bio)";
    
    $pdo_statement = $this->db->prepare($sql);
    $succes= $pdo_statement->execute([
        ':profile_picture' => $this->profile_picture,
        ':username' => $this->username,
        ':email' => $this->email,
        ':password' => $this->password,
        ':profile_picture' => $this->profile_picture,
        ':bio' => $this->bio,
    ]);
    return $succes;
    }
}