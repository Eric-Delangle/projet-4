<?php
namespace projet4;
require_once (CONTROLER.'controlcomments.php');
/*
class CRUD for comments view and use all sql's comments commands
*/
class Crudcomments {

    public $id;
    

    public function __construct($id){
        $this->id = $id;
       
    }
        

 public function showComments() {
     $db = new DataBase('comments');

     $id_chap = $_GET['id'];
        foreach($db->query("SELECT *,DATE_FORMAT(date_comment, '%d/%m/%Y à %Hh%i minutes')AS date_comment_fr  FROM comments WHERE id_chap = '".$id_chap."' " ) as $post){ 
          
    
         if(!empty($post->auth)) { 
           
            echo '<p class="aligntext">Auteur: '.$post->auth.'</p><br />';
            echo '<p class="aligntext">Commentaire: '.$post->comment.'</p><br />';
            echo '<p class="aligntext">Ecrit le : '.$post->date_comment_fr.'</p><br />'; 
            echo '<input type="submit" class="liens_h1" value="Signaler" name="signal" /><hr />';
            }
        }
        if(empty($post->auth)) {
                echo 'Aucun commentaire n\'a encore été posté sur ce chapitre.';
            }
    
    
}
    
    public function readComment ($id) {
       $db = new DataBase('comments');
        $req = "SELECT * FROM comments WHERE id_comment = $id";
        return $req;
    }

    public function createComment ($id) { 
        $db = new DataBase('comments');

        if (!empty($_POST['auth']) && !empty($_POST['contenuComment'])) {

             $db->prepare('INSERT INTO comments (id_chap, auth, comment, date_comment) VALUES (:id_chap, :auth, :comment, now())',

             (array('id_chap' => $_GET['id'], 'auth' => $_POST['auth'], 'comment' => $_POST['contenuComment'])), 'comments', false);
             

             echo 'Votre commentaire a bien été enregistré';
        }
     else {
         echo 'Tous les champs doivent être remplis !';
    }
        
    }

    public function updateComment ($id) {

    }

    public function deleteComment ($id) {

    }
}