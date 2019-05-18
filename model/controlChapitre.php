<?php
require_once (VIEW.'viewChapitres.php');

require_once (CONTROLER.'functions.php');
//require_once (MODEL.'Chapter.php');
// ici je dois appeler une fonction pour afficher le dernier chapitre automatiquement


function getId($id_chapter){ 
  $chapter = new \projet4\Crudchapters();
 $url = $chapter->geturl($_GET['id']);
 return $url;
 var_dump($url);

}  

function getTitle(){ 
  $chapter = new \projet4\Crudchapters();
 
 // echo $chapter->titre('id_chapter');
 $titre = $chapter->titre('id_chapter');
 return $titre;
}

/*
function getExt(){ 
  $chapter = new \projet4\Crudchapters();
  $extrait = $chapter->getExtrait('id_chapter');
 echo $extrait;
}  
*/