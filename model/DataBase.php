<?php

namespace projet4;

use PDO;
class DataBase {

    // la je crée un accesseur
    public function getPDO() {
        if($this->pdo === null){
        $this->$db_name = $db_name;
        $pdo = new PDO('mysql:dbname=ericd995946;host=91.216.107.162', 'ericd995946', 'vaosjv8xde');
        $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
        }
        return $this->pdo;
    }
}
