<?php
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

        
        $db = new DataBase('chapters');
        foreach($db->query("SELECT * FROM chapters WHERE id_chapter = $id", true) as $post) {  
        //  $html = substring(contents, 1, 100);
      //  $html = substr($post[contents], 0, 150);
       // var_dump($post);
       // var_dump(contents);
      $html = '<p>'.substr($post->contents, 219, 400).'...</p>';

     return $html;
     }   
    }

    public function chapitre($data) {
       ?>
       <div id="cadreTexte">
       <?php
        echo '<p class="aligntext">Titre: '.$data->title.'</p>';
        echo '<p class="aligntext">'.$data->contents.'</p>';
        ?>
        </div>
        <?php
    }

}
    