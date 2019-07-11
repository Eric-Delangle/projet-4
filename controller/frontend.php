<?php

$objetChapter = new \projet4\Crudchapters($_GET['number']);

// affiche tous les chapitres les uns sous les autres
function showAllChap() {
    $objetChapter = new \projet4\Crudchapters($_GET['number']);
    $allChap = $objetChapter->showChapters();
    require(VIEW.'frontend/listChapView.php');
}

// affiche le chapitre demandé
function showOneChap() {
    $viewOneChap = new \projet4\Crudchapters($_GET['number']);
    $readChapter = $viewOneChap->showChapter(); 
    
    require(VIEW.'frontend/oneChapView.php');
}


 // Signalement d'un commentaire par l'utilisateur
function signal() { 
    $alertComm = new \projet4\Crudcomments($_GET['number']);
    $alert = $alertComm->signalCom();
  
}
// COMMENTAIRES 

// affiche tous les commentaires sous le chapitre 
function showCom() {
    
// pour générer mon formulaire de commentaire
    $commentForm = new \projet4\FormInscConnec ($data); 

// puis appel de la méthode d'affichage
    $objetComment = new \projet4\Crudcomments($_GET['number']);
    $allCom = $objetComment->getComments(); 
    require(VIEW.'frontend/listComView.php');
   
}

// Créer un commentaire
function creatCom($id) { 

    if(empty(htmlspecialchars($_POST['auth'])) && empty(htmlspecialchars($_POST['contenuComment']))) {
        ?>
            <script language="javascript">
                alert("Tous les champs doivent être remplis. Vous allez être redirigé(e).");
            </script>
        <?php
     header("Refresh:3;url=chapter?number=".$_GET['number']."");
    }

    if(!empty(htmlspecialchars($_POST['auth'])) && !empty(htmlspecialchars($_POST['contenuComment']))) {
        $objetComment = new \projet4\Crudcomments($_GET['number']);
        $com = $objetComment->createComment();
    }
}
    
