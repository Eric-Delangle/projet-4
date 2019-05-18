<?php
/*
* Class Chapter
*
*create a page for read chapter
*/
Class Chapter {

    private $data;

    public function __construct($data = array()){
        $this->$data = $data;
    }

// pour afficher la date de parution
    public function date ($data) {
        echo $data['date_parution_fr'];
    }
// pour afficher le titre
    public function titre ($data) {
        echo $data['title'];
    }
// Pour afficher le chapitre
    public function chapitre($data) {
        echo $data['contents'];
    }

}
    