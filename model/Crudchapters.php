<?php
namespace projet4;
/*
class CRUD for use all sql's commands
*/
class Crudchapters  {
    
    public $id_chap;
    protected $chap_number;
    
    public function __construct($chapter_numb){
        $this->id_chap = $id_chap;
        $this->chap_number = $chap_numb;
       }

// je récupère le numero du chapitre instancié
public function getNumber() {

    $db = new \projet4\DataBase('chapters');
    $num = $db->prepare("SELECT * FROM chapters WHERE chapter_number = '".$_GET['numb']."'",[]);
    foreach($num as $numero) {
      //  var_dump($numero['1']);
        $num = "chapter?number= '".$numero['1']."'"; 
    }
return $num;
     
}

// la j'affiche la page chapters avec tous ses chapitres les uns sous les autres
public function affichTable(){  

    $db = new \projet4\DataBase('chapters');
    $allChapters = $db->prepare("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')
    AS date_parution_fr FROM chapters",[]);
    return $allChapters;
    }
    
 // au click sur le lien j'affiche le chapitre demandé
public function showChapters() {
    
    $db = new \projet4\DataBase('chapters');
    $chap = $db->prepare("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr 
    FROM chapters WHERE chapter_number = ".$_GET['number']." ", 
    []); 
   // var_dump($_GET['numb']);
    return $chap;
    }

// je crée un chapitre  
public function createChapter ($chapter_number, $title, $contents, $date_parution) {

    $db = new \projet4\DataBase('chapters');
    $req = $db->prepare('INSERT INTO chapters(chapter_number, title, contents, date_parution)
    VALUES(:chapter_number, :chapter_title, :contents, now())', 
    (array(
        'chapter_number' => $_POST['chapter_number'],
        'chapter_title' => $_POST['chapter_title'], 
        'contents' => $_POST['contents'])),
         []);
    }

// je mets à jour le chapitre
public function updateChatper() {

   // $chapter_number = $_GET['id'];
    $db = new \projet4\DataBase('chapters');
    $req = $db->prepare("UPDATE chapters SET title = :chapter_title,
                                            contents = :contents
                                            
    WHERE chapter_number = ".$_GET['number']." ",
    (array(
        'chapter_title' => $_POST['chapter_title'], 
        'contents' => $_POST['contents'])),
        
         []);
    }

// Aller au chapitre précèdent
public function getLastId($id) {
      
    $id = $_GET['number'];
    $id--;

        if($id == 0) {
            ?>
            <script language="javascript">
              alert("Vous êtes au premier chapitre.");
            </script>
            <?php
            
        } else {
            header("location: chapter?number=$id");
        }
    }

// Aller au chapitre suivant
public function getNextId($id) {
   
    $id = $_GET['number'];
    $id++;

        if($id == null) {
            ?>
            <script language="javascript">
            alert("Vous êtes au dernier chapitre.");
            </script>
            <?php
            
        } else {
            
            header("location: chapter?number=$id");
        }

    }
    
}