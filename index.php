<?php
include_once ('config.php');
Myautoload::start();
// declaration de ma variable $request pour les redirections
$request = $_GET['r'];

// creation de l'objet routeur et appel de sa fonction rendeControler()
$rooter = new Rooter($request);
$rooter->renderControler();


