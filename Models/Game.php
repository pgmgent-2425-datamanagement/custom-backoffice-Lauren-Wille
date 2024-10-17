<?php

namespace App\Models;

use App\Models\BaseModel;

class Game extends BaseModel {
    protected function allWithPublisher () {

        $sql = 'SELECT games.*, publishers.name FROM `' . $this->table . '` INNER JOIN publishers on publishers.id = publisher_id';
        $pdo_statement = $this->db->prepare($sql);
        $pdo_statement->execute();

        $db_items = $pdo_statement->fetchAll(); 
        
        return self::castToModel($db_items);
    }
}
