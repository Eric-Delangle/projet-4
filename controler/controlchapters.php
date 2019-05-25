 <?php
// Ce controleur appelle le chapitre voulu
require(VIEW.'nav.php');
require(VIEW.'viewcomments.php');
require(VIEW.'viewUnChapitre.php');
$read = new \projet4\Crudchapters($_GET['id']);
// afficher le chapitre
    
    $readChapter = $read->showChapters();
     return $readChapter;
// aller au chapitre suivant
   if(isset($_POST['Chapitre_suivant'])) { 
      
      $read->getNextId('id_chapter');   
   }
// aller au chapitre precedent
   if(isset($_POST['Chapitre_precedent'])) { 
      $read->getLastId('id_chapter');
   }  