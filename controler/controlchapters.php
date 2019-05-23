<?php

// Ce controleur appelle le chapitre voulu

require_once (VIEW.'nav.php');
require_once (VIEW.'viewcomments.php');
require_once(VIEW.'viewUnChapitre.php');

$read = new \projet4\Crudchapters($_GET['id']);

// afficher le chapitre
    
    $readChapter = $read->showChapters();
     return $readChapter;

// aller au chapitre suivant

   if(isset($_POST['Chapitre_suivant'])) { 
      
      $read->getNextId();   
   }

// aller au chapitre precedent

   if(isset($_POST['Chapitre_precedent'])) { 
      $read->getLastId();
   }  




  