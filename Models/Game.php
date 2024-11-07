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

    public function update() {
        $sql = "UPDATE games SET image = :image, title = :title, release_date = :release_date, price = :price, developer = :developer, summary = :summary, publisher_id = :publisher_id WHERE id = :id";

        $pdo_statement = $this->db->prepare($sql);
        $succes = $pdo_statement->execute([
            ':image' => $this->image,
            ':title' => $this->title,
            ':release_date' => $this->release_date,
            ':price' => $this->price,
            ':developer' => $this->developer,
            ':summary' => $this->summary,
            ':publisher_id' => $this->publisher_id,
            ':id' => $this->id,
        ]);
        return $succes;
    }

    public function save() {
        // Assuming you have a database connection set up
        $sql = "INSERT INTO games (image, title, release_date, price, developer, summary, average_rating, publisher_id) VALUES (:image, :title, :release_date, :price, :developer, :summary, :average_rating, :publisher_id)";
    
    $pdo_statement = $this->db->prepare($sql);
    $succes= $pdo_statement->execute([
        ':image' => $this->image,
        ':title' => $this->title,
        ':release_date' => $this->release_date,
        ':price' => $this->price,
        ':developer' => $this->developer,
        ':summary' => $this->summary,
        ':average_rating' => $this->average_rating,
        ':publisher_id' => $this->publisher_id,
    ]);
    return $succes;
    }
    

    public function allExceptFirst () {

        global $db;

        $sql = "SELECT * FROM publishers ORDER BY id LIMIT 18446744073709551615 OFFSET 1";
        $statement = $db->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        return self::castToModel($results);
    }

    public function gamesEachMonth() {
        global $db;

        $sql = "
        SELECT DATE_FORMAT(release_date, '%Y-%m') AS month, COUNT(*) AS releases
        FROM games
        WHERE release_date IS NOT NULL
        GROUP BY month
        ORDER BY month";
        
        $statement = $db->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    
        return self::castToModel($results);
    }
}
