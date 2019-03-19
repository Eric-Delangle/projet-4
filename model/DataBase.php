<?php

class DataBase {
    private $pdo;

    public function __construct($pseudo,$pass,$database_name,$host ='localhost') {
        $this->pdo = new PDO("mysql:dbname=$database_name;host=$host", $pseudo, $pass);
        $this->pdo = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }

    public function query($query, $params) {
        $req = $this->pdo->prepare($query);
        $req = execute($params);
        return $req;
    }
}