<?php


// inserer un com
 
  if (!empty($_POST['auth']) && !empty($_POST['contenuComment'])) {
    $inscom = new \projet4\Crudcomments($_GET['id']);
    $inscom->createComment('id');
  }

 // afficher les commentaires

    $comm = new \projet4\Crudcomments($_GET['id']);
    $com = $comm->getComments($_GET['id']); 
    
?>
   <pre><?= var_dump($com); ?></pre> 
   <?php
    return $com;

 
// signaler un commentaire

  if($_POST['signaler']) {
    $signal = new \projet4\Crudcomments($_GET['id']);
    $signal->signalCom();
    }
  
  
 

 
  
  