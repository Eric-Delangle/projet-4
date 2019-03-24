<?php
require_once (MODEL.'DataBase.php');
require_once (CONTROLER.'editChapitres.php');
require_once (CONTROLER.'controlConnec.php');

class Connexion {

    private function __constructor() { 
       
    }

    public function connecMembre($data){
        $req = new DataBase('ericd995946');
       // if (!empty($_POST['pseudo']) AND !empty($_POST['pass'])) {// Recupération des données
                var_dump($req);
            $req->prepare('SELECT id,pass FROM membres WHERE pseudo = :pseudo', true);
            $req->execute(array('pseudo' => $_POST['pseudo']));
            $membre = $req->fetch();
            var_dump($membre);
            header('location: edition');
          //  $isPasswordCorrect = password_verify($_POST['pass'], $membre['pass']);
      //  }

      //  if ($isPasswordCorrect) {

        //    session_start();
         //   $_SESSION['id']=$membre['id'];
         //   $_SESSION['pseudo']=$_POST['pseudo'];
          //  $_SESSION['pass']=$_POST['pass'];
          //  header('location: edition');
        // } 

/*
           else
        {
            header('Refresh:3;url=connection');
            echo 'Vos identifiants ne sont pas valides,vous allez être redirigé(e)';
        }
       */
    }
}
    