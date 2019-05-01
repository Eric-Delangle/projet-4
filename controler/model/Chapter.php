<?php
namespace projet4;
/*
* Class Chapter
*
*create a page for read chapter
*/
require_once (MODEL.'Crudchapters.php');
Class Chapter {
   
   // public $id;

    public function geturl() {
        return 'chapter?id='.$this->id;
    }

    public function getExtrait($id) {

        $db = new \projet4\DataBase('chapters');
        foreach($db->query("SELECT * FROM chapters WHERE id_chapter = id_chapter", true) as $post) {  
        $html = '<p>'.substr($post->contents, 219, 400).'...</p>';
        return $html;
     }  
    }

    public function chapitre($data) {
       ?>
       <div class="extraitChap">
       <?php
        echo '<p class="aligntext">Titre: '.$data->title.'</p>';
        echo '<p class="aligntext">'.$data->contents.'</p>';
        ?>
        </div>
        <?php
    }

}
    