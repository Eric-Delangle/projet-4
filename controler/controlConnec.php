<?php
require_once (VIEW.'nav.php');
require_once (MODEL.'DataBase.php');
//require_once (MODEL.'Connexion.php');
require_once (VIEW.'viewConnecForm.php');
//require_once (CONTROLER.'editChapitres.php');

$db = new DataBase('membres');


   if(isset($_POST['pseudo']) && isset($_POST['pass'])) {

      
     // auth();

      $req=$db->query('SELECT * FROM membres');

      
     $pass_hache = password_hash("azerty", PASSWORD_DEFAULT);

      $isPasswordCorrect = password_verify($_POST['pass'], $pass_hache);
     
    
      
      if ($isPasswordCorrect)

      {
         
         session_start();
         $_SESSION['ouvert']=true; 
         $_SESSION['id']=$req['id'];
         $_SESSION['pseudo']=$_POST['pseudo'];
         $_SESSION['pass']=$_POST['pass'];
         
         header('location: edition');
      }

      else
   {
      // header('Refresh:5;url=connexion');
         echo 'Vos identifiants ne sont pas valides !';
         
   }
      
}