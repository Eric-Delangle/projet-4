<?php

$chapUn = new DataBase('chapters');
$req = $chapUn->query('SELECT * FROM chapters');



var_dump($req);
?>
<div id="affichageChapitre">

  <p><?php echo nl2br(htmlspecialchars($req['chapter_number']));?>
  <p><?php echo nl2br(htmlspecialchars($req['title']));?>
  <p><?php echo nl2br(htmlspecialchars($req['contents']));?>
  <p><?php echo nl2br(htmlspecialchars($req['date_parution']));?>

<em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
</div>