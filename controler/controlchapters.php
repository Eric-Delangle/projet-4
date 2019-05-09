<?php
require_once (VIEW.'nav.php');
require_once (VIEW.'viewUnChapitre.php');
require_once (VIEW.'viewcomments.php');



// aller au chapitre suivant
 if(isset($_POST['suivant']) AND $_POST['go']=='suivant') { 
 getNextId();
}

// aller au chapitre precedent
if(isset($_POST['precedent']) AND $_POST['return']=='precedent') { 
 getLastId();
 }
 
    // afficher le chapitre
    function readChap(){ 
      $read = new \projet4\Crudchapters($_GET['id']);
      $read->showChapters();
       require (VIEW.'viewcomments.php');
    }
    
    // afficher les commentaires
    function readCom(){
      $comm = new \projet4\Crudcomments($_GET['id']);
      $comm->showComments();
    }
   
     
     ?>
    
  </div>
  <div id='precsuiv'>
		<input type="submit" class="liens_h1" value="precedent" name="return" />
		<input type="submit" class="liens_h1" value="suivant" name="go" />
  </div>



  