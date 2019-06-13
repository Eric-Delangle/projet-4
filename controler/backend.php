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
    return $num;
    
    
}

// Connexion a l'interface admin

function admin() {
      
    require_once(VIEW.'backend/viewConnecForm.php');

        if($_POST['valider']) { 

            $logg = new \projet4\Connexion($_POST['pseudo'], $_POST['pass']);
            $logg->connecMembre();  
        }

        else {
            ?>
            <script language="javascript">
                alert("Tous les champs doivent être remplis.");
            </script>
        
            <?php 
        }        
} 
        
// Déconnexion de l'interface admin

function deco() { 

    session_destroy();
    
    header('location: home');
}

// Signalement d'un commentaire par l'utilisateur

function signal($chapter_number) { 

    $alertComm = new \projet4\Crudcomments($_GET['id'], $_GET['number']);
    $alert = $alertComm->signalCom();
    ?>
    <script language="javascript">
        alert("Ce commentaire a bien été signalé.");
    </script>

    <?php
   
   header("Refresh:3;url= home");
    
  
}

// Créer un chapitre

function creatChap() { 

    $save = new \projet4\Crudchapters($_GET['number']);
    $save->createChapter('chapter_number', 'title', 'contents', 'date_parution');

    ?>
    <script language="javascript">
        alert("Ce chapitre a bien été créé.");
    </script>

    <?php
   header("Refresh:3;url= edition");
}

// Afficher la liste des chapitres pour les modifier

function listChapForModif() {

    $objetChapter = new \projet4\Crudchapters($_GET['number']);
    $allChap = $objetChapter->affichTable();
    require(VIEW.'backend/viewEdit.php');
}

// modifier un chapitre

function modifChap($chapter_number) {
    /* je recupere le chapitre demandé dans ma bdd , puis je l'affiche dans mon tynimce */
    $modif = new \projet4\Crudchapters($_GET['number']);
    $maj = $modif->showChapters();
    require('view/backend/editChap.php');

}

// la je fais la mise à jour dans la bdd
function updateChap($chapter_number) {
   
    $updat = new \projet4\Crudchapters($_GET['number']);
    $maj = $updat->updateChatper($_POST['title'], $_POST['contents']);
    echo 'Ce chapitre a bien été mit à jour';
    header("Refresh:3;url=chapter?number=".$_GET['number']."");
   
}

// affichage des commentaires signalés

function affichSign() {
   
    $signMess = new \projet4\Crudcomments($_GET['id'], $_GET['number']);
    $signal = $signMess->getSignComments();
    require(VIEW.'backend/signalement.php');
    }
 
// supprimer le commentaire

function supCom() {

        $modifCom = new \projet4\Crudcomments($_GET['id'], $_GET['number']);
        $modifCom->deleteComment($_GET['number']);
  
    if($id_comment == null) {
        echo 'Le commentaire a bien été supprimé.';
        header("Refresh:3;url=edition");
    }
  
}

// rétablir un com

function unSignCom() { 

    $modifcom = new \projet4\Crudcomments($_GET['id'], $_GET['number']);
    // je remets le com a signalement = 0
    $modifs = $modifcom->updateComment();
    if($modifs->signalement == 0){
      echo 'Le commentaire a bien été rétabli';
      header("Refresh:3;url=edition");
    }
}
