<?php

$objetChapter = new \projet4\Crudchapters($_GET['id'], 'chapter_number');

// affiche tous les chapitres les uns sous les autres
function showAllChap() {
    $objetChapter = new \projet4\Crudchapters($_GET['id'], 'chapter_number');
    $allChap = $objetChapter->affichTable();
    require(VIEW.'frontend/listChapView.php');
}

// affiche le chapitre demandé

function showOneChap() {
    $objetChapter = new \projet4\Crudchapters($_GET['id'], 'chapter_number');
    $readChapter = $objetChapter->showChapters(); 
    require(VIEW.'frontend/oneChapView.php');

}

// aller au chapitre suivant

if($_POST['Chapitre_suivant']) { 

    $objetChapter->getNextId($id);   
 }

// aller au chapitre precedent

 if($_POST['Chapitre_precedent']) { 
    
   $objetChapter->getLastId($id);
 }  

// COMMENTAIRES 

// affiche tous les commentaires sous le chapitre 
function showCom() {
// pour générer mon formulaire de commentaire
    $commentForm = new \projet4\FormInscConnec ($data); 
// puis appel de la méthode d'affichage
    $objetComment = new \projet4\Crudcomments($_GET['id'], 'chapter_number');
    $allCom = $objetComment->getComments($_GET['id']); 
    require(VIEW.'frontend/listComView.php');
   
}

// Créer un commentaire
function creatCom($id) { 
    $objetComment = new \projet4\Crudcomments($_GET['id'], 'chapter_number');
    $com = $objetComment->createComment($_GET['id']);
    $id = $_GET['id'];
        echo 'Votre commentaire a bien été enregistré';

        header("Refresh:3;url=chapter?id=".$id."");
       
    }
        
      //  header("location: ");
   // require(VIEW.'frontend/listComView.php');

