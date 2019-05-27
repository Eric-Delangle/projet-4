<?php
namespace projet4;
//require(CONTROLER.'controlcomments.php');
/*
class CRUD for comments view and use all sql's comments commands
*/
class Crudcomments
{

    public $id;
    public $id_comment;

    public function __construct($id){
        $this->id = $id;  
        $this->id_comment = $id_comment;
    }
        

    public function getComments($id_chap) {

        $id_chap = $_GET['id'];
       // var_dump($id_chap);
        $db = new \projet4\DataBase('comments');
        $com = $db->query("SELECT *,DATE_FORMAT(date_comment, '%d/%m/%Y à %Hh%i minutes')
        AS date_comment_fr  FROM comments WHERE id_chap = '".$id_chap."' ", true); 
        return $com;
    }
 
// la je recupère les coms signalés pour les modifier
 public function getSignComments() {

    $db = new \projet4\DataBase('comments');
    $signCom = $db->query("SELECT * FROM comments WHERE signalement = 1", true ); 
   // var_dump($signCom);
       return $signCom;
}

    public function createComment ($id) { 

        $db = new \projet4\DataBase('comments');
        $db->prepare('INSERT INTO comments (id_chap, auth, comment, date_comment) VALUES (:id_chap, :auth, :comment, now())',
        (array('id_chap' => $_GET['id'], 'auth' => $_POST['auth'], 'comment' => $_POST['contenuComment'])), 'comments', false);
            echo 'Votre commentaire a bien été enregistré';     
    }


    public function updateComment($id) {
     $db = new \projet4\DataBase('comments');
     $db->onlyquery("UPDATE comments SET signalement = 0 WHERE id_comment = '".$id."' ");
    }

    public function deleteComment($id) {
        $id = $_GET['id'];
    $db = new \projet4\DataBase('comments');
    $db->onlyquery("DELETE  FROM comments WHERE id_comment = '".$id."' ");
       
    }

    public function signalCom($id_chap) {

     
        $alert = new \projet4\DataBase('comments');
      
       $signal = $alert->onlyquery("UPDATE comments SET signalement = 1 WHERE id_comment = '".$_GET['id']."' "); 
      return $signal;
    
     
    }
      
  }


