<?php
namespace projet4;
//require(CONTROLER.'controlcomments.php');
/*
class CRUD for comments view and use all sql's comments commands
*/
class Crudcomments extends \projet4\Crudchapters
{
    
    public $id_comment;
    public $chapter_number;

public function __construct($id_comment, $chapter_number){
        $this->id_comment = $id_comment;  
        $this->chapter_number = $chapter_number;
      

    }

// je récupère la liste de tous les commentaires
public function getComments($chapter_number, $id_comment) {

    $db = new \projet4\DataBase('comments');
    $com = $db->prepare("SELECT *,DATE_FORMAT(date_comment, '%d/%m/%Y à %Hh%i minutes')
    AS date_comment_fr  FROM comments WHERE chapter_number = ".$_GET['number']." ", []); 
    return $com;
    }
 
// je recupère les coms signalés pour les modifier
public function getSignComments() {

    $db = new \projet4\DataBase('comments');
    $signCom = $db->prepare("SELECT * FROM comments WHERE signalement = 1", []); 
    return $signCom;       
    }

// je crée un commentaire
public function createComment ($chapter_number) { 

    $db = new \projet4\DataBase('comments');
    $db->prepare('INSERT INTO comments (chapter_number, auth, comment, date_comment)
     VALUES (:chapter_number, :auth, :comment, now())',
        (array(
            'chapter_number' => $_GET['number'],
            'auth' => $_POST['auth'],
            'comment' => $_POST['contenuComment']
            )
         ),
     []
    );
}
    
// je rétablis le commentaire signalé
public function updateComment() {
   // $id = $_GET['id'];
    $db = new \projet4\DataBase('comments');
    $db->prepare("UPDATE comments SET signalement = 0 WHERE id_comment = ".$_GET['number']." ", []);
    }

// je supprime le commentaire signalé
public function deleteComment() {

    $db = new \projet4\DataBase('comments');
    $db->prepare("DELETE FROM comments WHERE id_comment = ".$_GET['number']." ", []);   
    }

// je signale un commentaire
public function signalCom() {
    
    $alert = new \projet4\DataBase('comments');
    $signal = $alert->prepare("UPDATE comments SET signalement = 1
    WHERE id_comment = ".$_GET['number']." ", []);
    
    }

}
