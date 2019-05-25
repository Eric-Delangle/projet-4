    
<?php
require(VIEW.'viewcomments.php');
// j'instancie mes deux classes
  $commentForm = new \projet4\FormInscConnec ($data);
  
// inserer un com
  if (!empty($_POST['auth']) && !empty($_POST['contenuComment'])) {
    $inscomm = new \projet4\Crudcomments($_GET['id']);
     $inscomm->createComment('id');
     echo 'Votre commentaire a bien été enregistré.';
     header('location: chapters');
  }
 // afficher les commentaires
    $vueComm = new \projet4\Crudcomments($_GET['id']);
    $com = $vueComm->getComments($_GET['id']);
    return $com;

  
 

 
  
  