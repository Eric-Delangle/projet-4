<?php

require_once (VIEW.'nav.php');
require_once (MODEL.'DataBase.php');
require_once (CONTROLER.'controlConnec.php');

function auth() { 

   if (isset($_POST['pseudo']) && isset($_POST['pass'])) {

    $admin = new DataBase('membres');

    $passe_hache = password_hash(htmlspecialchars($_POST['pass']), PASSWORD_DEFAULT);
    
      

     $login = $admin->prepare('INSERT INTO membres (pseudo, pass) VALUES (:pseudo, :pass)', array(':pseudo' => $_POST['pseudo'], ':pass' => $passe_hache), "DataBase", true);
   
   }

   else {
       echo 'prob de pass';
   }
}