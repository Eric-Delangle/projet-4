<?php
require_once ('../controler/bdd.php');
require_once ('../model/formInscConnec.php');
require ('../view/nav.php');

$inscForm = new FormInscConnec ($data);
?>
<html>
    <body>
        <div class="bloc_form">
            <?php
                echo 'Inscrivez vous afin que nous puissions échanger plus facilement !';
                echo $inscForm->input('pseudo',"Votre pseudo");
                echo $inscForm->input('pass',"Votre mot de passe");
                echo $inscForm->input('passVerif',"Encore une fois");
                echo $inscForm->input('mail',"Votre email");
                echo $inscForm->submit();
            // $inscForm->checkInscription($data);
            //  $inscForm->inscMembre($data);
            ?>
        </div>
        <script>document.getElementById('accueil').style.display = 'block';</script>
    </body>
</html>


