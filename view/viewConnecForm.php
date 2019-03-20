<?php
require (CONTROLER.'bdd.php');
require (VIEW.'nav.php');
require (MODEL.'FormInscConnec.php');

$inscForm = new FormInscConnec ($data);
?>
<html>
    <body>
        <div class="bloc_form">
        <form action="controlConnec.php" method="post">
                <?php
                    echo 'Connectez vous afin que nous puissions échanger plus facilement !';
                    echo $inscForm->input('pseudo',"Votre pseudo");
                    echo $inscForm->input('pass',"Votre mot de passe");
            
                    echo $inscForm->submit();

                    
                ?>
            </form>
        </div>
        <script>document.getElementById('accueil').style.display = 'block';</script>
        <script>document.getElementById('connecter').style.display = 'none';</script>
    </body>
</html>
<!--
<div class="container_connexion">

  <form class="pseudo" method="post" action="connexion.php">

    <p class="connexion">Connexion:</p>
  
       <label for="pseudo">Votre pseudo :</label>
       <input type="text" placeholder="pseudo" name="pseudo" id="pseudo" />
   </br>
       <label for="pass">Mot de passe :</label>
       <input type="password" placeholder="mot de passe" name="pass" id="pass" />
    </br>
       <input type="checkbox" name="resterconnecte" id="case" /> <label for="case">Rester connecté</label>
       <input type="submit" id="envoi" value="Envoyer" />
</form>
</div>
-->

<?php
/*
            if (isset($_POST['pseudo']) AND isset($_POST['pass']))
        {// Recupération des données
 $req=$bdd->prepare('SELECT id,pass FROM membres WHERE pseudo = :pseudo');
        $req->execute(array('pseudo' => $_POST['pseudo']));
        $membre = $req->fetch();
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
        */
      ?>  
      