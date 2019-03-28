<?php
require_once (VIEW.'nav.php');
require_once (MODEL.'DataBase.php');
//require_once (MODEL.'Connexion.php');
require_once (VIEW.'viewConnecForm.php');
//require_once (CONTROLER.'editChapitres.php');


if(isset($_POST['pseudo']) && isset($_POST['pass'])) {



    $db = new DataBase('membres');
   
 
    $req=$db->query('SELECT * FROM membres',"membres");
    //$req->execute(array('pseudo' => $_POST['pseudo'], 'pass' => $_POST['pass']));
    //$donnees = $req->fetch();

   var_dump($req);  
   var_dump($datas);
   
   $isPasswordCorrect = password_verify($_POST['pass'], $datas[1]);
   var_dump($isPasswordCorrect);
    
   if ($isPasswordCorrect)

   {
      session_start();
      $_SESSION['id']=$req['id'];
      $_SESSION['pseudo']=$_POST['pseudo'];
      $_SESSION['pass']=$_POST['pass'];
      header('location: edition.php');
   }

     else
  {
     // header('Refresh:5;url=connexion');
      echo 'Vos identifiants ne sont pas valides,vous allez être redirigé(e)';
  }
   
}