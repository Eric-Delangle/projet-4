<?php

namespace projet4;

use PDO;
class DataBase {

    // la je crée un accesseur
    public function getPDO() {
        if($this->pdo === null){
        $this->$db_name = $db_name;
        $pdo = new PDO(secret);
        $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
        }
        return $this->pdo;
    }
}
