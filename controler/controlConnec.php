<<<<<<< HEAD
<?php
session_start();
require_once (VIEW.'nav.php');
require_once (VIEW.'viewConnecForm.php');
require_once (CONTROLER.'functions.php');

if (isset($_SESSION['pseudo']) AND isset($_SESSION['pass'])) {
   header('location: edition');
}

if(isset($_POST['pseudo']) && isset($_POST['pass'])) {
$logg = new \projet4\Connexion($_POST['pseudo'], $_POST['pass']);
$logg->connecMembre();
//var_dump($logg);
}
=======
<?php
session_start();
require_once (VIEW.'nav.php');
require_once (VIEW.'viewConnecForm.php');
require_once (CONTROLER.'functions.php');

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])) {
    header('location: edition');
}

elseif (isset($_POST['pseudo']) && isset($_POST['pass'])) {
 
   $login = new \projet4\DataBase('members');
   $req = $login->prepare('SELECT * FROM members WHERE pseudo = :pseudo', (array('pseudo' => $_POST['pseudo'])), 'members', true);

   
   $isPasswordCorrect = password_verify($_POST['pass'], $req['pass']);

      if ($isPasswordCorrect) {
   
            session_start();
            $_SESSION['id']=$req['id'];
            $_SESSION['pseudo']=$_POST['pseudo'];
            $_SESSION['pass']=$_POST['pass'];
            
            header('location: edition');
         }
         
            else {
            
            echo 'Vos identifiants ne sont pas valides.';
           
         }

      if (empty($_POST['pseudo']) && empty($_POST['pass'])) {
   echo 'Tous les champs doivent ëtre remplis !';
   }
}
>>>>>>> 6b0edd753de8e5895b1f8659fb17fc0e663b8ef0
