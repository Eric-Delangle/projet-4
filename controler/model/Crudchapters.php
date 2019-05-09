<<<<<<< HEAD
<?php
namespace projet4;
/*
class CRUD for use all sql's commands
*/

class Crudchapters  {
   // require_once (MODEL.'Chapter.php');

   private $id;

   public function __construct(){
       $this->id = $id;
   }

   /* test en incluant ce qu'il y a dans Chapter */

   
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

   /* fin de test */

    public function showChapters ($id) {
        $db = new \projet4\DataBase('chapters');
      
        foreach($db->query("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr FROM chapters WHERE id_chapter = $this->id ", '\projet4\Chapter',true) as $post);
     // var_dump($post);
       echo $post->title;
       echo $post->contents;
      //  $post->chapitre($post);
         return $post;
    }

    public function getLastId() {
           
            $this--;
            return $id;
        }

    public function getNextId() {
            
            $this++;
            return $id;
        }

    public function readChapter ($id) {
        $db = new \projet4\DataBase('chapters');
        $req = "SELECT * FROM chapters WHERE id_chapter = $id";
        return $req;
    }

    public function createChapter ($chapter_number, $title, $contents, $date_parution) {
        $db = new \projet4\DataBase('chapters');
        $req = $db->prepare('INSERT INTO chapters(chapter_number, title, contents, date_parution) VALUES(:chapter_number, :chapter_title, :contents, now())', (array('chapter_number' => $_POST['chapter_number'],'chapter_title' => $_POST['chapter_title'], 'contents' => $_POST['contents'])), 'chapters', true);
    }

    public function updateChaper ($id) {
        $db = new \projet4\DataBase('chapters');
        $req = $db->prepare('UPDATE chapters(chapter_number, title, contents, date_parution) VALUES(:chapter_number, :chapter_title, :contents, now())', (array('chapter_number' => $_POST['chapter_number'],'chapter_title' => $_POST['chapter_title'], 'contents' => $_POST['contents'])), 'chapters', true);
    }

    public function deleteChapter ($id) {

    }

    // fonction pour afficher dynamiquement le dernier chapitre créé
=======
<?php
namespace projet4;
/*
class CRUD for use all sql's commands
*/

class Crudchapters  {
   // require_once (MODEL.'Chapter.php');

   private $id;

   public function __construct(){
       $this->id = $id;
   }

   /* test en incluant ce qu'il y a dans Chapter */

   
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

   /* fin de test */

    public function showChapters ($id) {
        $db = new \projet4\DataBase('chapters');
      
        foreach($db->query("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr FROM chapters WHERE id_chapter = $this->id ", '\projet4\Chapter',true) as $post);
     // var_dump($post);
       echo $post->title;
       echo $post->contents;
      //  $post->chapitre($post);
         return $post;
    }

    public function getLastId() {
           
            $this--;
            return $id;
        }

    public function getNextId() {
            
            $this++;
            return $id;
        }

    public function readChapter ($id) {
        $db = new \projet4\DataBase('chapters');
        $req = "SELECT * FROM chapters WHERE id_chapter = $id";
        return $req;
    }

    public function createChapter ($chapter_number, $title, $contents, $date_parution) {
        $db = new \projet4\DataBase('chapters');
        $req = $db->prepare('INSERT INTO chapters(chapter_number, title, contents, date_parution) VALUES(:chapter_number, :chapter_title, :contents, now())', (array('chapter_number' => $_POST['chapter_number'],'chapter_title' => $_POST['chapter_title'], 'contents' => $_POST['contents'])), 'chapters', true);
    }

    public function updateChaper ($id) {
        $db = new \projet4\DataBase('chapters');
        $req = $db->prepare('UPDATE chapters(chapter_number, title, contents, date_parution) VALUES(:chapter_number, :chapter_title, :contents, now())', (array('chapter_number' => $_POST['chapter_number'],'chapter_title' => $_POST['chapter_title'], 'contents' => $_POST['contents'])), 'chapters', true);
    }

    public function deleteChapter ($id) {

    }

    // fonction pour afficher dynamiquement le dernier chapitre créé
>>>>>>> 6b0edd753de8e5895b1f8659fb17fc0e663b8ef0
}