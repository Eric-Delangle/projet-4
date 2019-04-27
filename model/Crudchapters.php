<?php
/*
class CRUD for use all sql's commands
*/

class Crudchapters extends Chapter {
   // require_once (MODEL.'Chapter.php');

    public function showChapters () {
        $db = new DataBase('chapters');
       
        foreach($db->query("SELECT chapter_number,title,contents, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr FROM chapters WHERE id_chapter = $_GET[id] ", 'Chapter',true) as $post);
        $post->geturl();
        $post->chapitre($post);
         return $post;
    }

    public function getLastId() {
            $id  = $this->id;
            $id--;
            return $id;
        }

    public function getNextId() {
            $id  = $this->id;
            $id++;
            return $id;
        }
/*
    public function extrait() {
     $this->getExtrait();
     var_dump($this->getExtrait());
     /*
        $html = substr($this->contents, 0, 10);
       $html .= '<p><a href"' . $this->geturl() . '">Voir la suite</a></p>';
        var_dump($html);
       return $html;
     
}
    */
    public function readChapter ($id) {
        $db = new DataBase('chapters');
        $req = "SELECT * FROM chapters WHERE id_chapter = $id";
        return $req;
    }

    public function createChapter ($chapter_number, $title, $contents, $date_parution) {
        $db = new DataBase('chapters');
        $req = $db->prepare('INSERT INTO chapters(chapter_number, title, contents, date_parution) VALUES(:chapter_number, :chapter_title, :contents, now())', (array('chapter_number' => $_POST['chapter_number'],'chapter_title' => $_POST['chapter_title'], 'contents' => $_POST['contents'])), 'chapters', true);
    }

    public function updateChaper ($id) {

    }

    public function deleteChapter ($id) {

    }
}