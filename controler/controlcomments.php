<?php
$com = new DataBase('comments');
$com->prepare("INSERT INTO comments (auth, comment) VALUES(:nameComment, :contenuComment, now())", (array('auth' => $_POST['nameComment'], 'comment' => $_POST['contenuComment'])), 'comments', true);









