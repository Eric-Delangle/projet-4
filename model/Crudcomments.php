<?php
namespace projet4;
require_once (CONTROLER.'controlcomments.php');
/*
class CRUD for comments view and use all sql's comments commands
*/
class Crudcomments
{

    public $id;
    

    public function __construct($id){
        $this->id = $id;
       
    }
        

 public function getComments($id_chap) {

     $id_chap = $_GET['id'];
     $db = new \projet4\DataBase('comments');
     $com = $db->query("SELECT *,DATE_FORMAT(date_comment, '%d/%m/%Y à %Hh%i minutes')
     AS date_comment_fr  FROM comments WHERE id_chap = '".$id_chap."' ", true ); 
     var_dump($com);
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

    public function signalCom() {

        $id = $_GET['id'];
        $db = new \projet4\DataBase('comments');
        $db->query("UPDATE comments SET signalement = 1 WHERE id_comment = '".$id."' "); // des que je lui met le where ca marche pas
  echo $id;
         ?>
         <pre><?php var_dump($req, 'merde'); ?></pre>
        <?php
       //  header('Refresh:3;url=chapters');
        
         echo 'Ce commentaire a bien été signalé.';
         
    }
}
