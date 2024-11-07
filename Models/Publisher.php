<?php


use App\Models\BaseModel;

class Publisher extends BaseModel{

    public function allExceptFirst () {

        global $db;

        $sql = "SELECT * FROM publishers ORDER BY id LIMIT 18446744073709551615 OFFSET 1";
        $statement = $db->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        return self::castToModel($results);
    }

    public function save() {
        $sql = "UPDATE publishers SET name = :name, about = :about WHERE id = :id";

        $pdo_statement = $this->db->prepare($sql);
        $pdo_statement->execute([
            ':name' => $this->name,
            ':about' => $this->about,
            ':id' => $this->id,
        ]);         
    }

    public function countGamesPerPublisher() {
        global $db;

        $sql = "SELECT publishers.id, publishers.name, COUNT(games.id) AS game_count
        FROM publishers
        LEFT JOIN games ON publishers.id = games.publisher_id
        GROUP BY publishers.id, publishers.name
        ";

        $pdo_statement= $db->prepare($sql);
        $pdo_statement->execute();
        $results = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
        
        return self::castToModel($results);
    }
}