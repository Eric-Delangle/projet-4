<?php
require_once (VIEW.'nav.php');
require_once (MODEL.'Chapter.php');
require_once (MODEL.'Crudchapters.php');
/*
function affichapitre() { // a faire dynamiquement pour que les chapitres soient affichés aussitot publiés
  $chap = new Crudchapters();
 // $chap->showChapters();// j'appelle la methode pour afficher les chapitres;
}
*/
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
    // afficher le chapitre
      $read = new \projet4\Crudchapters();
      $read->showChapters($this->id);
      require (VIEW.'viewcomments.php');
     
    ?>
  </div>
  <div id='precsuiv'>
		<input type="submit" class="liens_h1" value="precedent" name="return" />
		<input type="submit" class="liens_h1" value="suivant" name="go" />
  </div>


  <?php
  // fonction test pour afficher le dernier chapitre dynamiquement
/*
  function getLastChapter() {
    if(il y a un nouveau chapitre d'enregistré) {
      echo chapter_number,title,contents;
  }

  if()
 */
  