<?php ob_start(); 
include(VIEW.'nav.php');
echo '<h1 id="chap" class="type typewriter">Ici commence notre histoire...</h1>';

while ($data = $allChap->fetch()) {
?>
    <div  class="tableau">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
           
        </h3>
        
        <p>
            <?= htmlspecialchars(substr($data['contents'], 195, 204)) ?>
          ...
        </p>
        <p>
        <a class="liens_h1" href="chapter?number=<?=$data['chapter_number']?>">Lire le chapitre</a>
        </p>
    </div>
<?php
}

$allChap->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'frontend/template.php'); ?>

