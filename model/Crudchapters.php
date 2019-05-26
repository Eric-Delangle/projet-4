<?php
namespace projet4;
/*
class CRUD for use all sql's commands
*/
class Crudchapters  {
    
    public $id_chapter;
    
    public function __construct($id_chapter){
        $this->id_chapter = $id_chapter;
       
    }
    public function geturl() {
       return 'chapter?id='.$this->id_chapter;     
        }
    public function affichTable(){  // la j'affiche la page chapters avec tous ses chapitres les uns sous les autres
        $db = new \projet4\DataBase('chapters');
      
        $allChapters = $db->query("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr 
        FROM chapters", true);
       return $allChapters;
       
     
        }
    

    public function showChapters() { // la au click sur le lien j'affiche le chapitre demandé
        $db = new \projet4\DataBase('chapters');
      
        $chap = $db->query("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr 
        FROM chapters WHERE id_chapter = $_GET[id]",true); 
         return $chap;
     
     }
    
    
    public function createChapter ($chapter_number, $title, $contents, $date_parution) {
        $db = new \projet4\DataBase('chapters');
        $req = $db->prepare('INSERT INTO chapters(chapter_number, title, contents, date_parution) VALUES(:chapter_number, :chapter_title, :contents, now())', (array('chapter_number' => $_POST['chapter_number'],'chapter_title' => $_POST['chapter_title'], 'contents' => $_POST['contents'])), 'chapters', true);
    }
    public function updateChatper() {
        $db = new \projet4\DataBase('chapters');
        $req = $db->prepare('UPDATE chapters(chapter_number, title, contents, date_parution) VALUES(:chapter_number, :chapter_title, :contents, now())', (array('chapter_number' => $_POST['chapter_number'],'chapter_title' => $_POST['chapter_title'], 'contents' => $_POST['contents'])), 'chapters', true);
        var_dump($req);
    }
    public function getLastId() {
    
        $id = $this->id;
        $id--;
        return $id;
     var_dump($id);
     
    }
    public function getNextId() {
        echo 'fait chier';
       /*
       
        $id = $this->id;
        $id++;
     return $id;
*/
    }
