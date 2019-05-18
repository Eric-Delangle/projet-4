<<<<<<< HEAD
<?php
namespace projet4;
require_once (CONTROLER.'controlcomments.php');
/*
class CRUD for comments view and use all sql's comments commands
*/
class Crudcomments {

        
 public function showComments () {
     $db = new DataBase('comments');
        foreach($db->query("SELECT *,DATE_FORMAT(date_comment, '%d/%m/%Y à %Hh%i minutes')AS date_comment_fr  FROM comments WHERE id_chap = $_GET[id] ORDER BY date_comment", true) as $post){ 
          
      
         if(!empty($post->auth)) { 
           
            echo '<p class="aligntext">Auteur: '.$post->auth.'</p><br />';
            echo '<p class="aligntext">Commentaire: '.$post->comment.'</p><br />';
            echo '<p class="aligntext">Ecrit le : '.$post->date_comment_fr.'</p><hr />'; 
            
        }
    }
        if(empty($post->auth)) {
            echo 'Aucun commentaire n\'a encore été posté sur cet article.';
        }
    
}
    
    public function readComment ($id) {
       $db = new DataBase('comments');
        $req = "SELECT * FROM comments WHERE id_comment = $id";
        return $req;
    }

    public function createComment ($id) { // c'est la que je dois sans doute choisir dans quel table je met tel comm
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
=======
<?php
namespace projet4;
require_once (CONTROLER.'controlcomments.php');
/*
class CRUD for comments view and use all sql's comments commands
*/
class Crudcomments {

        
 public function showComments () {
     $db = new DataBase('comments');
        foreach($db->query("SELECT *,DATE_FORMAT(date_comment, '%d/%m/%Y à %Hh%i minutes')AS date_comment_fr  FROM comments WHERE id_chap = $_GET[id] ORDER BY date_comment", true) as $post){ 
          
      
         if(!empty($post->auth)) { 
           
            echo '<p class="aligntext">Auteur: '.$post->auth.'</p><br />';
            echo '<p class="aligntext">Commentaire: '.$post->comment.'</p><br />';
            echo '<p class="aligntext">Ecrit le : '.$post->date_comment_fr.'</p><hr />'; 
            
        }
    }
        if(empty($post->auth)) {
            echo 'Aucun commentaire n\'a encore été posté sur cet article.';
        }
    
}
    
    public function readComment ($id) {
       $db = new DataBase('comments');
        $req = "SELECT * FROM comments WHERE id_comment = $id";
        return $req;
    }

    public function createComment ($id) { // c'est la que je dois sans doute choisir dans quel table je met tel comm
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
>>>>>>> 6b0edd753de8e5895b1f8659fb17fc0e663b8ef0
}