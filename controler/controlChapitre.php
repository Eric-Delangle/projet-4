<?php
require_once (VIEW.'viewChapitres.php');
require_once (CONTROLER.'functions.php');
//require_once (MODEL.'Chapter.php');
// ici je dois appeler une fonction pour afficher le dernier chapitre automatiquement


function getId($id){ 
  $chapter = new \projet4\Crudchapters();
  $chapter->geturl($_GET['id']);

}  



function getTitle(){ 
  $chapter = new \projet4\Crudchapters();
 
 // echo $chapter->titre('id_chapter');
 $titre = $chapter->titre($_GET['id']); // ça ca m'affiche toujours le titre du 1er chapitre
 echo $titre;
} 

function getExt(){ 
  $chapter = new \projet4\Crudchapters();
  $extrait = $chapter->getExtrait('id_chapter');
 echo $extrait;
}  
  



