<?php ob_start(); 
?>
<div id="vueComSign"> <!-- liste des commentaires signalés -->
  <p><strong>Voici les commentaires signalés : </strong></p>
</div>
<!-- la va apparaitre la div de modification ou de suppression des commentaires -->
<div class="cadre_interface">
   <?php

     while ($sign = $signal->fetch()) {
     
      if($sign['auth']) {
         
     ?>
     <div id="cadre_comSign">
        <p><strong>Auteur:</strong> 
           <?= $sign['auth'] ?>
       </p>
        <p><strong>Commentaire:</strong>
           <?= $sign['comment'] ?>
        </p>
        <p> <strong>Posté le:</strong> 
           <?= $sign['date_comment'] ?>
        </p>
           <form action="retablir?number=<?=$sign['id_comment']?>" method="post">
              <input type="submit" class="liens_h1" value="rétablir" name="retablir">
           </form>
           <form action="supprimer?number=<?=$sign['id_comment']?>" method="post">
              <input type="submit" class="liens_h1" value="Supprimer" name="supprimer">
           </form>
      </div>

           <?php  
       
         } if(empty($sign['auth'])) {  
            echo 'Aucun commentaire n\a été signalé.';  
      }
     }
   ?>
</div>
<?php
$signal->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'frontend/template.php'); ?>