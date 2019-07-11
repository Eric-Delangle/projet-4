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
<?php
}
showCom($_GET['id']); // j'appelle ma fonction pour afficher les commentaires
$readChapter->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'frontend/template.php'); ?>