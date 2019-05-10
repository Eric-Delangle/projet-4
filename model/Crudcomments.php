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
            echo '<form action="viewEdit.php" method="POST"><input type="button" class="liens_h1" value="Signaler" name="signal" /></form><hr />';
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

    public function signalCom() {
        $db = new DataBase('comments');
        foreach($db->query("SELECT signalement,DATE_FORMAT(date_comment, '%d/%m/%Y à %Hh%i minutes')AS date_comment_fr  FROM comments WHERE id_chap = '".$id_chap."' " ) as $post){ 
        $this->signalement = 1;
        var_dump($this->signalement);
        }
        /*
        if(isset($_POST['Signaler'])) {
            $this->signalement = 1;
            var_dump($$this->signalement);
            echo 'Ce commentaire a bien été signalé.';
            // j'affiche le message dans l'interface d'administration
        } else {
            // rien du tout
        }*/
    }

    // signalement d'un commentaire 
    /* avec un boolen,si le commentaire n'est pas signalé bool(false) et si il l'est bool(true)
    Ajouter une colonne dans les commentaires qui aura pour valeur True, oui, 1 ou autre chose au choix.
     Quand cette valeur est ok j'affiche les commentaires grâce à une condition qui teste cette valeur,
      dans le cas contraire il ne s'affiche pas et apparaîtra dans la partie administration. 
    Le bouton "signaler" à pour effet de changer la valeur.
    */
}