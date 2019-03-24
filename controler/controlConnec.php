<?php
require_once (VIEW.'nav.php');
require_once (MODEL.'DataBase.php');
require_once (MODEL.'Connexion.php');
require_once (VIEW.'viewConnecForm.php');
//require_once (CONTROLER.'editChapitres.php');
//$base = new DataBase('ericd995946');
$admin = new Connexion($data);
$admin->connecMembre($datas);