<?php
require_once (VIEW.'nav.php');
require_once (VIEW.'viewUnChapitre.php');
require_once (VIEW.'viewcomments.php');



// aller au chapitre suivant
   if(isset($_POST['Chapitre_suivant'])) { 
      $after = new \projet4\Crudchapters($_GET['id']);
      $after->getNextId();
   }

// aller au chapitre precedent
   if(isset($_POST['Chapitre_precedent'])) { 
      $before = new \projet4\Crudchapters($_GET['id']);
      $before->getLastId();
   }
 
    // afficher le chapitre
    function readChap(){ 
      $read = new \projet4\Crudchapters($_GET['id']);
      $read->showChapters();
       require (VIEW.'viewcomments.php');
    }
     
     ?>
    
  </div>
  <div id='precsuiv'>
      <form id="divSuivPrec" method="POST" action="">
            <input type="submit" class="liens_h1" value="Chapitre precedent" name="Chapitre_precedent" />
            <input type="submit" class="liens_h1" value="Chapitre suivant" name= "Chapitre_suivant" />
      </form>
  </div>



  