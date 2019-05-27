    
<?php

//require(VIEW.'viewcomments.php');

// j'instancie mes deux classes
  $commentForm = new \projet4\FormInscConnec ($data);
  $inscomm = new \projet4\Crudcomments($_GET['id']);

// inserer un com

  if (!empty(htmlspecialchars($_POST['auth']) && !empty(htmlspecialchars($_POST['contenuComment'])))) {
    //$inscomm = new \projet4\Crudcomments($_GET['id']);
     $inscomm->createComment('id');
  }
 // afficher les commentaires
    //$inscomm = new \projet4\Crudcomments($_GET['id']);
    $com = $inscomm->getComments($_GET['id']);
    return $com;
     
// signaler un commentaire

  
 

 
  
  