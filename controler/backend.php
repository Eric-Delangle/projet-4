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


// recuperer le numero du chapitre et pas son id
function numb(){
    $number = new \projet4\Crudchapters($_GET['id']);
    $numero = $number->getNumber();
    
    
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

    $alertComm = new \projet4\Crudcomments($_GET['number']);
    $alert = $alertComm->signalCom($_GET['number']);

}

// Créer un chapitre

function creatChap() { 

    $save = new \projet4\Crudchapters($_GET['number']);
    $save->createChapter('chapter_number', 'title', 'contents', 'date_parution');
    
    //header("location : edition");
    
}

// Afficher la liste des chapitres pour les modifier

function listChapForModif() {

    $objetChapter = new \projet4\Crudchapters($_GET['number']);
    $allChap = $objetChapter->affichTable();
    require(VIEW.'backend/viewEdit.php');
}

// modifier un commentaire

function modifChap($chapter_number) {
    /* je recupere le chapitre demandé dans ma bdd , puis je l'affiche dans mon tynimce */
    $modif = new \projet4\Crudchapters($_GET['number']);
    $maj = $modif->showChapters();
    require('view/backend/editChap.php');

}

// la je fais la mise à jour dans la bdd
function updateChap($chapter_number) {
    
    $updat = new \projet4\Crudchapters($_GET['number']);
    $maj = $updat->updateChatper();
    var_dump($chapter_number);// renvoit null
   
}

// affichage des commentaires signalés

function affichSign() {
   
    $signMess = new \projet4\Crudcomments($_GET['number']);
    $signal = $signMess->getSignComments();
    require(VIEW.'backend/signalement.php');
    }
 
// supprimer le commentaire

function supCom() {

        $modifCom = new \projet4\Crudcomments($_GET['number']);
        $modifCom->deleteComment($_GET['number']);
  
    if($id_comment == null) {
        echo 'Le commentaire a bien été supprimé.';
        header("Refresh:3;url=edition");
    }
  
}

// rétablir un com

function unSignCom() { 

    $modifcom = new \projet4\Crudcomments($_GET['number']);
    // je remets le com a signalement = 0
    $modifs = $modifcom->updateComment($_GET['inumber']);
    if($modifs->signalement == 0){
      echo 'Le commentaire a bien été rétabli';
      header("Refresh:3;url=edition");
    }
}
