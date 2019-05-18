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
      
        foreach($db->query("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr FROM chapters",true) as $post){
       
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
        </table>
        <hr />
      <?php
        }
    }
   

    public function showChapters() { // la au click sur le lien j'affiche le chapitre demandé
        $db = new \projet4\DataBase('chapters');
      
        foreach($db->query("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr FROM chapters WHERE id_chapter = $_GET[id]",true) as $post) { 
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
    
        $id  = $this->id_chapter; 
        $id--; 
        if($id == 0) {
         // ne fait rien
        }else { 
        echo '<script language="Javascript"> document.location.replace("chapter?id='.$id.'");  </script>';
        }
    }

    public function getNextId() {
           // penser a faire une condition pour pas aller plus loin que le dernier chapitre
        $id  = $this->id_chapter;
        $id++;
        
        if($id == null) { // c'est pas null qu'il faut mettre
            // ne fait rien
        }else{ 
        echo '<script language="Javascript"> document.location.replace("chapter?id='.$id.'");  </script>';
        }
    }
}
