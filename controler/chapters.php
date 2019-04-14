<?php
require_once (VIEW.'nav.php');
require_once (CONTROLER.'functions.php');
?>
  <div id="chapterPosition">
    <?php
      $chap = new DataBase('chapters');
      foreach($chap->query("SELECT * FROM chapters WHERE id = $_GET[id] ", 'Chapter') as $post);
      $post->geturl();
      $post->chapitre($post);
      $post->getExtrait();
      require_once (VIEW.'comments.php');
      ?>
  	
