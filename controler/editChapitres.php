<?php
session_start();
require_once (VIEW.'viewEdit.php');

// affichage des messages signalés

$signMess = new \projet4\DataBase('comments');
$datas = $signMess->query("SELECT id_comment,comment,signalement FROM comments WHERE signalement = 1", true);

return $datas;