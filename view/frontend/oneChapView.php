<?php 
ob_start(); 
include(VIEW.'nav.php');

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
    <form method="post" action="precedent?number=<?=$_GET['number']?>">
        <input type="submit" class="liens_h1" value="precedent" name="precedent"/>
    </form>
    <form method="post" action="suivant?number=<?=$_GET['number']?>">
        <input type="submit" class="liens_h1" value="suivant" name= "suivant" />
    </form>
</div>
<?php
showCom($_GET['id']); // j'appelle ma fonction pour afficher les commentaires
$readChapter->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'frontend/template.php'); ?>