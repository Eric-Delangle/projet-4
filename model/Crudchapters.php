<?php
namespace projet4;
/*
class CRUD for use all sql's commands
*/
class Crudchapters  {
    
    public $id_chap;
    protected $chap_number;
    
    public function __construct(){
        $this->id_chap = $id_chap;
        $this->chap_number = $chap_number;
       }

// je récupère l'id du chapitre instancié
public function geturl() {

    return 'chapter?id='.$this->id_chap;     
    }

// la j'affiche la page chapters avec tous ses chapitres les uns sous les autres
public function affichTable(){  

    $db = new \projet4\DataBase('chapters');
    $allChapters = $db->prepare("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr 
    FROM chapters",[]);
    return $allChapters;
    }
    
 // au click sur le lien j'affiche le chapitre demandé
public function showChapters() {
    
    $db = new \projet4\DataBase('chapters');
    $chap = $db->prepare("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr 
    FROM chapters WHERE id_chap = $_GET[id]", []); 
    return $chap;
    }

// je crée un chapitre  
public function createChapter ($chapter_number, $title, $contents, $date_parution) {

    $db = new \projet4\DataBase('chapters');
    $req = $db->prepare('INSERT INTO chapters(chapter_number, title, contents, date_parution) VALUES(:chapter_number, :chapter_title, :contents, now())', (array('chapter_number' => $_POST['chapter_number'],'chapter_title' => $_POST['chapter_title'], 'contents' => $_POST['contents'])), []);
    }

// je mets à jour le chapitre
public function updateChatper($id) {

    $id = $_GET['id'];
    $db = new \projet4\DataBase('chapters');
    $req = $db->prepare("UPDATE chapters(title, contents) VALUES(:chapter_title, :contents) WHERE id_chap = '".$id."' ",(array('chapter_title' => $_POST['chapter_title'], 'contents' => $_POST['contents'])), []);
    }

// Aller au chapitre précèdent
public function getLastId($id) {
      
    $chapitre = $this->showChapters();
    foreach($chapitre as $post) {
    $post['chapter_number']--;
    }
        if($post['chapter_number'] == 0) {
            ?>
            <script language="javascript">
              alert("Vous êtes au premier chapitre.");
            </script>
            <?php
            
        } else {
            $id = $post['chapter_number'];
            header("location: chapter?id=$id");
        }
    }

// Aller au chapitre précèdent
public function getNextId($id) {
    var_dump($this->$chap);
    var_dump( $this->id_chap);

    $chapitre = $this->showChapters();
    foreach($chapitre as $post) {
        
        var_dump($post['chapter_number']);
    }

      /*
    $chapitre = $this->showChapters();
    foreach($chapitre as $post) {
        
        $post['chapter_number']++;
    }
        
   if($post['chapter_number'] == '') {
        echo 'La suite bientôt';
        } else {
        $id = $post['chapter_number'];
        header("location: chapter?id=$id");
        }
        */
    }
    
}