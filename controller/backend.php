<?php
session_start();
function sidejaco() { 
    if(empty($_SESSION['pseudo'])) {
            admin();
    } else {
        listChapForModif();
        affichSign();
    }
}

function admin() {
      
    require_once(VIEW.'backend/viewConnecForm.php');
    if(isset($_POST['valider'])) {
        if(empty(htmlspecialchars($_POST['pseudo'])) || empty(htmlspecialchars($_POST['pass']))) {
            ?>
                <script>
                    alert("Tous les champs doivent être remplis.");
                </script>
            <?php 
    }  
        else { 
            $logg = new \projet4\Connexion($_POST['pseudo'], $_POST['pass']);
            $logg->connecMembre($_POST['pseudo']);  
        }
    }
}        
      
function deco() { 
    session_destroy();
    header('location: home');
}

function creatChap() { 
    $save = new \projet4\Crudchapters();
    $save->createChapter('chapter_number', 'title', 'contents', 'date_parution');
}

function listChapForModif() {
    $objetChapter = new \projet4\Crudchapters();
    $allChap = $objetChapter->showChapters();
    require(VIEW.'backend/viewEdit.php');
}

function modifChap($chapter_number) {
    $modif = new \projet4\Crudchapters();
    $maj = $modif->showChapter($_GET['number']);
    require('view/backend/editChap.php');
}

function supChap() {
    $suppr = new \projet4\Crudchapters();
    $suppr->deleteChapter($_GET['number']);
        if($suppr->chapter_number == null) {
            echo 'Ce chapitre a bien été supprimé. Vous allez être redirigé.';
            header("Refresh:3;url=edition");
        }
}

function updateChap($chapter_number) {
    $updat = new \projet4\Crudchapters();
    $maj = $updat->updateChatper($_POST['title'], $_POST['contents']);
   
}

function affichSign() {
    $signMess = new \projet4\Crudcomments();
    $signal = $signMess->getSignComments();
    require(VIEW.'backend/signalement.php');
}
 
function supCom() {
    $modifCom = new \projet4\Crudcomments();
    $modifCom->deleteComment();
        if($modifCom->id == null) {
            echo 'Le commentaire a bien été supprimé. Vous allez être redirigé.';
            header("Refresh:3;url=edition");
        }
}

function unSignCom() { 
    $modifcom = new \projet4\Crudcomments();  
    $modifs = $modifcom->updateComment();
        if($modifs->signalement == 0){
            echo 'Le commentaire a bien été rétabli. Vous allez être redirigé.';
            header("Refresh:3;url=edition");
        }
}



