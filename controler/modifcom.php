<?php

require(VIEW.'viewEdit.php');

// supprimer le commentaire
if($_POST['supprimer']) {

    $modifCom = new \projet4\Crudcomments($_GET['id']);
    $modifCom->deleteComment($_GET['id']);
  
    if($id_comment == null) {
        echo 'Le commentaire a bien été supprimé.';
        header("Refresh:3;url=edition");
    }
  }
 // rétablir un com
 if($_POST['retablir']) { 

    $modifcom = new \projet4\Crudcomments($_GET['id']);
    // je remets le com a signalement = 0
    $modifs = $modifcom->updateComment($_GET['id']);
    if($modifs->signalement == 0){
      echo 'Le commentaire a bien été rétabli';
      header("Refresh:3;url=edition");
    }
 
}