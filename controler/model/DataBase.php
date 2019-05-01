<?php
namespace projet4;
use PDO;
class DataBase {

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'ericd995946', $db_pass = 'vaosjv8xde', $db_host ='91.216.107.162') {

        $this->$db_name = $db_name;
        $this->$db_user = $db_user;
        $this->$db_pass = $db_pass;
        $this->$db_db_host = $db_host;
    }
// la je crée un accesseur
    private function getPDO() {

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
        $datas = $db->fetchAll(PDO::FETCH_OBJ);
        return $datas;
    }
   
    public function prepare($attributes, $class_name,$one = false) {
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attributes);
        $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        if($one) {
            $datas = $req->fetch();
        } else {
            $datas = $req->fetchAll();
        }
        return $datas;
        
    }
    
    
}