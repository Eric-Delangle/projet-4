<?php
$affichCom = new DataBase('comments');
 foreach($affichCom->query("SELECT auth,comment FROM comments WHERE id = $_GET[id] ", 'Comments' ) as $post);
$post->readComments($post);