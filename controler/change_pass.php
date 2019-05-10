<?php
session_start();
require_once (VIEW.'nav.php');
require_once (MODEL.'DataBase.php');
require_once (CONTROLER.'controlConnec.php');

//if (isset($_SESSION['ouvert'])== true) {
   
 

   if (isset($_POST['pass'])) {

    $admin = new \projet4\DataBase('members');

    $passe_hache = password_hash(htmlspecialchars($_POST['pass']), PASSWORD_DEFAULT);
    
      

     $login = $admin->prepare("UPDATE members SET pass = ? WHERE pass = pass", array('pass'=> $passe_hache), 'members', false);
     
     echo 'Votre pass a été changé';
   
   }

   else {
       echo 'prob de pass';
   }
//}