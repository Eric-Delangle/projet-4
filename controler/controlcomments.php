<?php
require_once (CONTROLER.'controlchapters.php');
$db = new \projet4\DataBase('comments');


// Affichage des commentaires

function affichCom() {
     $com = new \projet4\Crudcomments($_GET['id']);
     $com->showComments();// j'appelle la methode pour afficher les comms;
     
     
    // var_dump($_GET['id']);
     
}

 // inserer un com
      if (isset($_POST['auth']) && isset($_POST['contenuComment'])) { 
          $inscom = new \projet4\Crudcomments($_GET['id']);
          $inscom->createComment('id');
      }

 // afficher les commentaires
 function readCom(){
    $comm = new \projet4\Crudcomments($_GET['id']);
    $comm->showComments();
  }