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

    public function query($statement) {
        $db = $this->getPDO()->query($statement);
        $datas = $db->execute();
        return $datas;

    }

    public function prepare($statement, $attributes) {
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attributes);
        return $req;
    
    }

    public function adminPrepare($statement, $attributes, $one = false) {
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attributes);
        
        $req->setFetchMode(PDO::FETCH_ASSOC);
    
        if($one) {
            $datas = $req->fetch();
        } else {
            $datas = $req->fetchAll();
        }
        
        return $datas;
        
    }
}
