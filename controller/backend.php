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
    if(isset($_POST['valider'])) {
     if(empty(htmlspecialchars($_POST['pseudo'])) || empty(htmlspecialchars($_POST['pass']))) {
        ?>
            <script language="javascript">
                alert("Tous les champs doivent être remplis.");
            </script>

        <?php 
    }  
    else{ 
        $logg = new \projet4\Connexion($_POST['pseudo'], $_POST['pass']);
        $logg->connecMembre($_POST['pseudo']);  
     }
    }
}        

        
// Déconnexion de l'interface admin
function deco() { 
    session_destroy();
    
    header('location: home');
}

// Créer un chapitre
function creatChap() { 
    $save = new \projet4\Crudchapters($_GET['number']);
    $save->createChapter('chapter_number', 'title', 'contents', 'date_parution');
   
  // header("Refresh:3;url= edition");
}
// Afficher la liste des chapitres pour les modifier
function listChapForModif() {
    $objetChapter = new \projet4\Crudchapters($_GET['number']);
    $allChap = $objetChapter->showChapters();
    require(VIEW.'backend/viewEdit.php');
}
// modifier un chapitre
function modifChap($chapter_number) {
    /* je recupere le chapitre demandé dans ma bdd , puis je l'affiche dans mon tynimce */
    $modif = new \projet4\Crudchapters($_GET['number']);
    $maj = $modif->showChapter($_GET['number']);
    require('view/backend/editChap.php');
}

// supprimer un chapitre
function supChap() {
    $suppr = new \projet4\Crudchapters($_GET['number']);
    $suppr->deleteChapter($_GET['number']);

        if($chapter_number == null) {
            echo 'Ce chapitre a bien été supprimé. Vous allez être redirigé.';
            header("Refresh:3;url=edition");
        }
}

// la je fais la mise à jour dans la bdd
function updateChap($chapter_number) {
   
    $updat = new \projet4\Crudchapters($_GET['number']);
    $maj = $updat->updateChatper($_POST['title'], $_POST['contents']);
   
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
        $modifCom->deleteComment();
  
    if($id == null) {
        echo 'Le commentaire a bien été supprimé. Vous allez être redirigé.';
        header("Refresh:3;url=edition");
    }
  
}
// rétablir un com
function unSignCom() { 
    $modifcom = new \projet4\Crudcomments($_GET['number']);
    // je remets le com a signalement = 0
    $modifs = $modifcom->updateComment();
    if($modifs->signalement == 0){
      echo 'Le commentaire a bien été rétabli. Vous allez être redirigé.';
      header("Refresh:3;url=edition");
    }
}



