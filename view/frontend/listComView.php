<?php 
ob_start(); 

?>
<div id="commentaires">
			<section class="commentSection">
          <h3 class="ajoutComment">
              Ajouter un commentaire
            <hr />
         <div id="bloc_comments">
			     <form action="commentaire?id=<?= $_GET['id'] ?>" method="post">
                <?php
                    echo $commentForm->input('auth',"Votre nom/pseudo");
                    echo $commentForm->textarea('contenuComment',"Votre message");
                    echo $commentForm->submit();
                ?>
            </form>
            
		</div>
<?php
    
    while ($data = $allCom->fetch()) { 
 
    ?>
        <div id="tableau">
            <p> Pseudo:
                <?= htmlspecialchars($data['auth']) ?>
            
            </p>
            
            <p>
                <?= $data['comment'] ?>
            
            </p>

            <p> Posté le: 
                <?= $data['date_comment_fr'] ?>
            
            </p>

            <p>
                <form action="signal?id=<?=$data['id_comment']?>" method="post">
                     <input type="submit" class="liens_rouges" value="Signaler" name="signaler"/>
                 </form><hr />
            </p>
        
        </div>
    <?php
          
    }

$allCom->closeCursor();
?>
<?php $comments = ob_get_clean(); ?>

<?php require(VIEW.'frontend/template.php'); ?>