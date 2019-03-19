<?php
require (CONTROLER.'bdd.php');
require (VIEW.'nav.php');
require (MODEL.'FormInscConnec.php');
require (MODEL.'InscMembre.php');
require_once (MODEL.'DataBase.php');
$inscForm = new FormInscConnec ($data);
?>
<html>
    <body>
        <div class="bloc_form">
            <?php
                echo 'Inscrivez vous afin que nous puissions échanger plus facilement !';
                echo $inscForm->input('pseudo',"Votre pseudo");
                echo $inscForm->input('pass',"Votre mot de passe");
                echo $inscForm->input('passVerif',"Encore votre mot de passe");
                echo $inscForm->input('mail',"Votre email");
                echo $inscForm->submit(); 
                $membre = new InscMembre();
                $membre->checkInscription();
                $db = new DataBase();
            ?>
        </div>
        <script>document.getElementById('accueil').style.display = 'block';</script>
        <script>document.getElementById('enregistrer').style.display = 'none';</script>
    </body>
</html>


