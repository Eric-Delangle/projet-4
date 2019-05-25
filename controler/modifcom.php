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
    $modif = $modifcom->getSignComments();
    var_dump($modif);
    return $modif;  
 }