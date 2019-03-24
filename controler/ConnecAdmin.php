<?php
require_once (MODEL.'DataBase.php');

class Connexion {

    

        private function __construct(){

        }


        public function connecMembre($data){
            if (isset($_POST['pseudo']) AND isset($_POST['pass']))
            {// Recupération des données
            $db->prepare('SELECT id,pass FROM membres WHERE pseudo = :pseudo');
            $db->execute(array('pseudo' => $_POST['pseudo']));
            $membre = $db->fetch();
            $isPasswordCorrect = password_verify($_POST['pass'], $membre['pass']);
            }
            if ($isPasswordCorrect)
    
            {
                session_start();
                $_SESSION['id']=$membre['id'];
                $_SESSION['pseudo']=$_POST['pseudo'];
                $_SESSION['pass']=$_POST['pass'];
                header('location: index.php');
            }

            else
            {
            
                echo 'Vos identifiants ne sont pas valides,vous allez être redirigé(e)';
            }
        }
}
    