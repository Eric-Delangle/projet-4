<?php

session_start();

// Si pas connécté a l'interface admin

function sidejaco() { 

    if(empty($_SESSION['pseudo'])) {
    admin();
    } else {
        listChapForModif();
        affichSign();
    }
}
// Connexion a l'interface admin

function admin() {
      
    require_once(VIEW.'backend/viewConnecForm.php');

      $logg = new \projet4\Connexion($_POST['pseudo'], $_POST['pass']);
      $logg->connecMembre();          
} 
        
// Déconnexion de l'interface admin

function deco() { 

    session_destroy();
    
    header('location: home');
}

// Signalement d'un commentaire par l'utilisateur

function signal() { 

    $alertComm = new \projet4\Crudcomments($_GET['id'], $chap_number);
    $alert = $alertComm->signalCom($_GET['id']);

}

// Créer un chapitre

function creatChap() { 

    $save = new \projet4\Crudchapters($_GET['id']);
    $save->createChapter('chapter_number', 'title', 'contents', 'date_parution');
    require(VIEW.'backend/viewEdit.php');
    
}

// Afficher la liste des chapitres pour les modifier

function listChapForModif() {

    $objetChapter = new \projet4\Crudchapters();
    $allChap = $objetChapter->affichTable();
   require(VIEW.'backend/viewEdit.php');
}

// modifier un commentaire

function modifChap() {
    /* je recupere le chapitre demandé dans ma bdd , puis je l'affiche dans mon tynimce */
    $modif = new \projet4\Crudchapters($_GET['id'], 'chapter_number');
    $maj = $modif->showChapters();
    require('view/backend/editChap.php');

}

function updateChap($id) {
    $updat = new \projet4\Crudchapters($_GET['id']);
    $maj = $updat->updateChatper($id);
}

// affichage des commentaires signalés

function affichSign() {
   
    $signMess = new \projet4\Crudcomments($_GET['id'], 'chap_number');
    $signal = $signMess->getSignComments();
    require(VIEW.'backend/signalement.php');
    }
 
// supprimer le commentaire

function supCom() {

        $modifCom = new \projet4\Crudcomments($_GET['id'], 'chap_number');
        $modifCom->deleteComment($_GET['id']);
  
    if($id_comment == null) {
        echo 'Le commentaire a bien été supprimé.';
        header("Refresh:3;url=edition");
    }
  
}

// rétablir un com

function unSignCom() { 

    $modifcom = new \projet4\Crudcomments($_GET['id'], 'chap_number');
    // je remets le com a signalement = 0
    $modifs = $modifcom->updateComment($_GET['id']);
    if($modifs->signalement == 0){
      echo 'Le commentaire a bien été rétabli';
      header("Refresh:3;url=edition");
    }
}
