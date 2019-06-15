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
     
            $db = new DataBase('members');
            $admin =  $db->bigprepare("SELECT * FROM members WHERE pseudo = :pseudo", (array('pseudo' => $_POST['pseudo'])), 'members', true);
        
           
            $isPasswordCorrect = password_verify($_POST['pass'], $admin['pass']);
        if ($_POST['pseudo']!= $admin['pseudo']){ 
            ?>
            <script language="javascript">
                alert("Vos informations sont incorrectes.");
            </script>

        <?php 
        }
               else if ($isPasswordCorrect) {
                    
                    session_start();
                    $_SESSION['pseudo']=$admin['pseudo'];
                    $_SESSION['pass']=$admin['pass'];
                    header('location: edition');
                }
                else {
                    ?>
                    <script language="javascript">
                        alert("Vos informations sont incorrectes.");
                    </script>
        
                <?php 
                }
 
        }
    }


