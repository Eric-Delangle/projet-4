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
      
        foreach($db->query("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr FROM chapters") as $post){
       
       ?>
            <table id="tableau">
            <tr>
            <th></th>
            <th id="tableau"></th> 
            <th></th>
            </tr>
            <tr>
            <td><?php print_r($post->title); ?></td>
            <td><?php echo '<p>'.substr($post->contents, 219, 400).'...</p>';?></td> 
            <td> <?php echo '<a class="liens_h1" href="chapter?id=' .$post->id_chapter. '">';?>Lire le chapitre</a></td>
            </tr>
            <hr />
        </table>
      <?php
        }
    }
   

    public function showChapters() { // la au click sur le lien j'affiche le chapitre demandé
        $db = new \projet4\DataBase('chapters');
      
        foreach($db->query("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr FROM chapters WHERE id_chapter = $_GET[id]") as $post) { 
            ?>
            <div id="chapterPosition">
                <?php
                    echo $post->title; 
                    echo $post->contents; 
                ?>
            </div> 
<?php
     
    }
}
}
/*
    public function getExtrait() {

        $db = new \projet4\DataBase('chapters');
        $this->geturl($_GET['id']);
        // en dessous si je met $id ou id_chapter c'est toujours l'extrait du 1er chapitre
        foreach($db->query("SELECT * FROM chapters WHERE id_chapter = id_chapter", true) as $post) {  
        $html = '<p>'.substr($post->contents, 219, 400).'...</p>';
        return $html;
    }  
}
}

    /*
     t//est en incluant ce qu'il y a dans Chapter 

    
        public function geturl($id_chapter) {
        return 'chapter?id='.$this->id_chapter; 
            
        }

        public function showChapters () {
            $db = new \projet4\DataBase('chapters');
          
            foreach($db->query("SELECT id_chapter,title,contents, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr FROM chapters WHERE id_chapter = $id_chap", '\projet4\Crudchapters') as $post);
        //  var_dump($post);
            $post->title;
           
           $post->contents;
           
          //  $post->chapitre($post);
             return $post;
        }

        public function getExtrait($id_chapter) {

            $db = new \projet4\DataBase('chapters');
            $this->geturl($_GET['id']);
            // en dessous si je met $id ou id_chapter c'est toujours l'extrait du 1er chapitre
            foreach($db->query("SELECT * FROM chapters WHERE id_chapter = id_chapter", true) as $post) {  
            $html = '<p>'.substr($post->contents, 219, 400).'...</p>';
            return $html;
        }  
    }
    */
/*

public function titre($id_chapter) {
        $db = new \projet4\DataBase('chapters');
        $this->geturl($_GET['id']);
        foreach($db->query("SELECT title FROM chapters WHERE id_chapter = id_chapter") as $post) {  
        $titre = $post->title;
        echo $post->title;
        return $titre;
        }
    }

    public function chapitre($id_chapter) {
    ?>
    <div class="extraitChap">
    <?php
        echo '<p class="aligntext">Titre: '.$data->title.'</p>';
        echo '<p class="aligntext">'.$data->contents.'</p>';
        ?>
        </div>
        <?php
    }
*/
  
   /* fin de test */
/*
    public function showChapters ($id) {
        $db = new \projet4\DataBase('chapters');
      
        foreach($db->query("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr FROM chapters WHERE id_chapter = $id ", '\projet4\Chapter',true) as $post);
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
    */

