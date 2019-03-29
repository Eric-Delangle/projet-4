<?php
session_start();
require_once (MODEL.'DataBase.php');
require_once (CONTROLER.'changePseudoPass.php');
?>
  
</html>
<head>
   <meta charset="utf-8" />
   <link rel="stylesheet" href="<?php echo ASSETS;?>css/style.css" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src = "https://cloud.tinymce.com/5/tinymce.min.js? apiKey = mibp5q8fc9tq6xnkjnimgpa1u02x01d45v2wt4mczl0uorhb "> </script>
   <script>tinymce.init({ selector:'textarea' });</script>
</head>

    <body>
       <div class="disposition">
         <form  action="deconnexion" method="post">
            <input type="submit" id="deconnexion" class="liens_h1" value="Vous déconnecter">
         </form>

         <form  action="changer_identifiants" method="post">
            <input type="submit" id="changer_identifiants" class="liens_h1" value="Changer d'identifiants">
         </form>  
      </div>
  <h1 class="messageDeBienvenue"><?php echo "Bienvenue  ".$_SESSION['pseudo']." dans l'interface d'administration de votre blog."?></h1>;
    <textarea></textarea>

    </body>
</html>