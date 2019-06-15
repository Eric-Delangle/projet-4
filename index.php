<?php
//include('model/Router.php');
include('config.php');

// chargement automatique des classes
Myautoload::start();

// declaration de ma variable $request pour les redirections
$request = $_GET['r'];

// je créé une instance de la class routeur et j'appelle sa méthode renderControler()
$router = new Router($request);
$router->renderControler();
