<?php
require_once (VIEW.'nav.php');
require_once (MODEL.'Chapter.php');
require_once (MODEL.'Crudchapters.php');



// aller au chapitre suivant
 if(isset($_POST['suivant']) AND $_POST['go']=='suivant') { 
 getNextId();
}

// aller au chapitre precedent
if(isset($_POST['precedent']) AND $_POST['return']=='precedent') { 
 getLastId();
 }
 
?>

  <div id="chapterPosition">
    <?php
    // afficher les chapitres
      $read = new Crudchapters();
      $read->showChapters();
      require (VIEW.'viewcomments.php');
     
    ?>
  </div>
  <div id='precsuiv'>
		<input type="submit" class="liens_h1" value="precedent" name="return" />
		<input type="submit" class="liens_h1" value="suivant" name="go" />
	</div>