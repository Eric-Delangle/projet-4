<?php
require_once (VIEW.'nav.php');
$chapUn = new DataBase('chapters');
$req = $chapUn->query('SELECT * FROM chapters');
?>
  <div id="chapterPosition">
    <p>Paru le :<?php echo $req['date_parution'];?></p>
    <p><?php echo $req['title'];?></p>
    <p><?php echo $req['contents'];?></p>
</div>

   