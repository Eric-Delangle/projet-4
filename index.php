<?php
include('model/Rooter.php');
//include('controller/home.php');
//require_once('controller/frontend.php');
include('config.php');


// chargement automatique des classes
Myautoload::start();

// declaration de ma variable $request pour les redirections
$request = $_GET['r'];


// creation de l'objet routeur et appel de sa fonction renderControler()
$rooter = new Rooter($request);
$rooter->renderControler();
/*
// test version openclassrooms
try {

  
        if ($request == 'chapters') {
           // include ('controller/frontend.php');
            showAllChap();
        }
        else {
            throw new Exception('Impossible de charger la page chapters');
        }
}
    catch(Exception $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
    */