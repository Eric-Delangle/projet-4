<?php
/*
* Class Chapter
*
*create a page for read chapter
*/
Class Chapter {
   

    public function geturl() {
        return 'chapter?id='.$this->id;
    }

    public function getExtrait() {
        $html = substr($this->contents, 0, 100);
        return $html;
    }

    public function chapitre($data) {
       ?>
       <div id="cadreTexte">
       <?php
        echo '<p class="aligntext">Titre: '.$data->title.'</p>';
        echo '<p class="aligntext">'.$data->contents.'</p>';
        echo '<p class="aligntext">Paru le : '.$data->date_parution.'</p>';   
        ?>
        </div>
        <?php
    }

}
    