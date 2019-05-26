<?php

require(VIEW.'viewEdit.php');

// modifier le commentaire
//$modifCom->updateComment($id);

// supprimer le commentaire
if($_POST['supprimer']) {

    $modifCom = new \projet4\Crudcomments($_GET['id']);
    $modifCom->deleteComment($_GET['id']);
  
    if($id_comment == null) {
        echo 'Le commentaire a bien été supprimé.';
        header("Refresh:3;url=edition");
    } else {
        echo 'Le commentaire n\'a pas été supprimé.';
        //header("Refresh:3;url=edition");
    }

}

 // modifier un com
 if($_POST['modifier']) { 
    $modifcom = new \projet4\Crudcomments($_GET['id']);
    // je recupere les comms
    $modifs = $modifcom->getSignComments();
  // var_dump($modifs);

    foreach($modifs as $modif) {
     var_dump($modif);
        return $modif;
          // $modif me retourne rien si j'ai plusieurs coms de signalés
    }
   
    
 }