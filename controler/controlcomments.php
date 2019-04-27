<?php

$db = new DataBase('comments');


// Affichage des commentaires

function affichCom() {
     $com = new Crudcomments();
     $com->showComments();// j'appelle la methode pour afficher les comms;
     
     
    // var_dump($_GET['id']);
     
}

 // inserer un com
      if (isset($_POST['auth']) && isset($_POST['contenuComment'])) { 
          $inscom = new Crudcomments();
          $inscom->createComment('id');
      }

