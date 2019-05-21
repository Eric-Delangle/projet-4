<?php
// ce controleur affiche tous les chapitres les uns sous les autres

require_once (VIEW.'viewChapitres.php');


// afficher tous les chapitres
  $all = new \projet4\Crudchapters($_GET['id']);
  $allChap = $all->affichTable();
  return $allChap;

