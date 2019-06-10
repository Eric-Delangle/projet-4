<?php ob_start(); 
include(VIEW.'nav.php');
echo '<h1 id="chap" class="type typewriter">Ici commence notre histoire...</h1>';
while ($data = $allChap->fetch())
{
?>
    <div id="tableau">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
           
        </h3>
        
        <p>
            <?= substr($data['contents'], 219, 400) ?>
          ...
        </p>
        <p>
        <a class="liens_h1" href="chapter?id=<?=$data['id_chap']?>">Lire le chapitre</a>
        </p>
    </div>
<?php
}

$allChap->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'frontend/template.php'); ?>
