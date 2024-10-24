<?php


use App\Models\BaseModel;

class Publisher extends BaseModel{

    protected function allExceptFirst () {

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
}