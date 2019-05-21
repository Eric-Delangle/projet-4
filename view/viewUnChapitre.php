<?php
// Cette view permet d'afficher le chapitre voulu
require(CONTROLER.'controlchapters.php');
?>
<!-- Lire un chapitre -->
<div class="cadre_chapitres">
	
	<p> <?php echo $readChapter['0']->title; ?> </p>
	<p> <?php echo $readChapter['0']->contents; ?></p>
	<p> Paru le: <?php echo $readChapter['0']->date_parution_fr; ?></p>
	
</div>

<div id='precsuiv'>
      <form id="divSuivPrec" method="POST" action="chapter">
            <input type="submit" class="liens_h1" value="Chapitre precedent" name="Chapitre_precedent" />
            <input type="submit" class="liens_h1" value="Chapitre suivant" name= "Chapitre_suivant" />
      </form>
  </div>