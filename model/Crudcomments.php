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
 
    public function createComment ($id) { 

        $db = new \projet4\DataBase('comments');
        $db->prepare('INSERT INTO comments (id_chap, auth, comment, date_comment) VALUES (:id_chap, :auth, :comment, now())',
        (array('id_chap' => $_GET['id'], 'auth' => $_POST['auth'], 'comment' => $_POST['contenuComment'])), 'comments', false);
            echo 'Votre commentaire a bien été enregistré';     
    }

    public function updateComment ($id) {

    }

    public function deleteComment ($id) {

    }

    public function signalCom($id_chap) {

     
        $alert = new \projet4\DataBase('comments');
      /*
        $kelcom = $alert->query("SELECT id_comment FROM comments WHERE id_chap = '".$_GET['id']."' AND id_comment = '".$_GET['id_comment']."' ", true );
        //  var_dump($kelcom);
    
     
  
    // if($com == 0) { 
    */
       $signal = $alert->onlyquery("UPDATE comments SET signalement = 1 WHERE id_comment = '".$_GET['id']."' "); // des que je lui met le where ca marche pas
      return $signal;
    // }
      // header("Refresh:3;url=chapter?id=$_GET[id]");
     
    }
      
  }


