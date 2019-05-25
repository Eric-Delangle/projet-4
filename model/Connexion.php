<?php
namespace projet4;


class Connexion {

    public $identifiant;
    public $pass;
    

    public function __construct($identifiant, $pass) {
       $this->identifiant = htmlspecialchars($identifiant);
       $this->pass = htmlspecialchars($pass);

    }

    public function connecMembre(){

        if(empty(htmlspecialchars($_POST['pseudo'])) && empty(htmlspecialchars($_POST['pass']))) {
            echo '<p class="erreur">Tous les champs doivent être remplis !</p>';
        }
        
        else if(isset($_POST['pseudo']) && isset($_POST['pass'])) { 
     
            $db = new DataBase('members');
            $admin =  $db->prepare("SELECT * FROM members WHERE pseudo = :pseudo", (array('pseudo' => $_POST['pseudo'])), 'members', true);
      ?>
         

            <?php
            $isPasswordCorrect = password_verify($_POST['pass'], $admin['pass']);
        
                if ($isPasswordCorrect) {
                    
                    session_start();
                    $_SESSION['pseudo']=$admin['pseudo'];
                    $_SESSION['pass']=$admin['pass'];
                    header('location: edition');
                }


                else {
                    echo '<p class="erreur">Votre identifiant ou votre mot de passe ne correspond pas !</p>';
                
                 }    
        }
    }
}

