<?php
session_start();
    $pseudo['pseudo']= '';
    $pass_hache['pass']='';
    $email['email']='';
    require ("../model/menu.php");
?>

<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

       <!-- <link rel="stylesheet" href="public/css/style.css" />-->

        <title>Billet simple pour l'Alaska</title>

    </head>


    <body>
    	

<div class="container_inscription">
  <form class="pseudo" method="post" action="controler/traitement.php">
    <p class="pseudo">Inscription:</p>

   <p>
       <label for="pseudo">Votre pseudo :</label>
       <input type="text" name="pseudo" id="pseudo" />
   <br>
       <label for="pass">Mot de passe :</label>
       <input type="password" name="pass" id="pass" />
    <br>
       <label for="pass2">Encore une fois :</label>
       <input type="password" name="passverif" id="passverif" />
    <br>
       <label for="email">Votre email :</label>
       <input type="email" name="email" id="email" />
       <input type="submit" id="envoi" value="Envoyer" />
       <?php
       $lecteur = new Membres;
       ?>
</p>
</form>


</div>
            <footer>
             
            </footer>
    			
    	
    </body>

</html>