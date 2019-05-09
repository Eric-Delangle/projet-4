<<<<<<< HEAD
<?php
require_once (VIEW.'viewChapitres.php');

require_once (CONTROLER.'functions.php');


function tableau(){
  $all = new \projet4\Crudchapters($_GET['id']);
  $all->affichTable();
}
=======
<?php
require_once (VIEW.'viewChapitres.php');

require_once (CONTROLER.'functions.php');
//require_once (MODEL.'Chapter.php');
// ici je dois appeler une fonction pour afficher le dernier chapitre automatiquement



  $chapter = new \projet4\Crudchapters();
 $url = $chapter->geturl($_GET['id']);
 return $url;
 

function titre($url){ 
  $chapter = new \projet4\Crudchapters();
 
 // echo $chapter->titre('id_chapter');
 $titre = $chapter->chapitre($url);
 return $titre;
}

/*
function getExt(){ 
  $chapter = new \projet4\Crudchapters();
  $extrait = $chapter->getExtrait('id_chapter');
 echo $extrait;
}  
*/
>>>>>>> 6b0edd753de8e5895b1f8659fb17fc0e663b8ef0
