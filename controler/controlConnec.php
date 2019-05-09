<?php
session_start();
require_once (VIEW.'nav.php');
require_once (VIEW.'viewConnecForm.php');
require_once (CONTROLER.'functions.php');

if (isset($_SESSION['pseudo']) AND isset($_SESSION['pass'])) {
   header('location: edition');
}

if(isset($_POST['pseudo']) && isset($_POST['pass'])) {
$logg = new \projet4\Connexion($_POST['pseudo'], $_POST['pass']);
$logg->connecMembre();
//var_dump($logg);
}
