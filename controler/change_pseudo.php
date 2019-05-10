<?php
session_start();
require_once (VIEW.'nav.php');
require_once (CONTROLER.'functions.php');


//if (isset($_SESSION['ouvert'])== true) {


   if (!empty($_POST['pseudo'])) {
 
    $admin = new \projet4\DataBase('members');
    
    $req = $admin->prepare("UPDATE members SET pseudo = ? WHERE pseudo = pseudo", array($_POST['pseudo']), 'members', false);
   
    
    header('location: edition');
    echo 'Votre pseudo a bien été enregistré.';
    
   }

   else {
       echo 'prob de pseudo';
   }
//}
