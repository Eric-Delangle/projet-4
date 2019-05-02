<?php
session_start();
require_once (VIEW.'nav.php');
require_once (MODEL.'DataBase.php');
require_once (CONTROLER.'controlConnec.php');

if (isset($_SESSION['ouvert'])== true) {
   
 

   if (isset($_POST['pass'])) {

    $admin = new DataBase('members');

    $passe_hache = password_hash(htmlspecialchars($_POST['pass']), PASSWORD_DEFAULT);
    
      

     $login = $admin->prepare('INSERT INTO members (pass) VALUES (:pass)', array(':pass' => $passe_hache), "DataBase", true);
   
   }

   else {
       echo 'prob de pass';
   }
}