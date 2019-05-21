<?php
namespace projet4;
//require(CONTROLER.'controlcomments.php');
/*
class CRUD for comments view and use all sql's comments commands
*/
class Crudcomments
{

    public $id;
    

    public function __construct($id){
        $this->id = $_GET['id'];  
    }
        

    public function getComments($id_chap) {

        $id_chap = $_GET['id'];
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

    public function signalCom() {
        $id_chap = $this->id;
        $pdo = new PDO('mysql:dbname=ericd995946;host=91.216.107.162', 'ericd995946', 'vaosjv8xde');
        $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->query("UPDATE comments SET signalement = 1 WHERE id_chap = '".$id_chap."' "); // des que je lui met le where ca marche pas
      var_dump($id_chap);
       echo 'Ce commentaire a bien été signalé.';
         header('Refresh:3;url=chapters');
    
    }
}
