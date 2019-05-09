<?php
require_once (VIEW.'viewChapitres.php');

require_once (CONTROLER.'functions.php');


function tableau(){
  $all = new \projet4\Crudchapters($_GET['id']);
  $all->affichTable();
}