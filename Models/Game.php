<?php


use App\Models\BaseModel;

class Game extends BaseModel {

    protected function allWithPublisher () {

        global $db;

        $sql = 'SELECT games.id AS game_id,
        games.title,
        games.release_date,
        games.price,
        games.developer,
        games.summary,
        games.image,
        games.average_rating, 
        publishers.name, 
        publishers.id AS publisher_id 
        FROM `' . $this->table . '` INNER JOIN publishers on publishers.id = publisher_id';

        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute();

        $db_items = $pdo_statement->fetchAll(); 
        
        return self::castToModel($db_items);
    }

    public function save() {
        $sql = "UPDATE games SET title = :title, release_date = :release_date, 
        price = :price, developer = :developer, 
        summary = :summary, publisher_id = :publisher_id WHERE id = :id";

        $pdo_statement = $this->db->prepare($sql);
        $pdo_statement->execute([
            ':title' => $this->title,
            ':release_date' => $this->release_date,
            ':price' => $this->price,
            ':developer' => $this->developer,
            ':summary' => $this->summary,
            ':publisher_id' => $this->publisher_id,
            ':id' => $this->id,
        ]);
    }
}
