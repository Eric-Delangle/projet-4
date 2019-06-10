<?php 
ob_start(); 
include(VIEW.'nav.php');


while ($data = $readChapter->fetch())
{ 
?>
    <div id="tableau">
        <h3>
            <?= $data['title'] ?>
           
        </h3>
        
        <p>
            <?= $data['contents'] ?>
         
        </p>
        <p> Paru le: 
            <?= $data['date_parution_fr'] ?>
        </p>
    </div>

    <div id='precsuiv'>

      <form id="divSuivPrec" method="post" action="">
            <input type="submit" class="liens_h1" value="Précèdent" name="Chapitre_precedent" />
            <input type="submit" class="liens_h1" value="Suivant" name= "Chapitre_suivant" />
      </form>

  </div>
<?php
}
showCom(); // j'appelle ma fonction pour afficher les commentaires
$readChapter->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'frontend/template.php'); ?>