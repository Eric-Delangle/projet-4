<?php
require_once ('../controler/bdd.php');
require_once ('../model/formInscConnec.php');
require ('../view/nav.php');
$inscForm = new FormInscConnec ($data);
?>
<html>
    <div class="bloc_form">
        <?php
            echo $inscForm->input('pseudo',"Votre pseudo");
            echo $inscForm->input('pass',"Votre mot de passe");
            echo $inscForm->input('passVerif',"Encore une fois");
            echo $inscForm->input('mail',"Votre email");
            echo $inscForm->submit();
           // $inscForm->checkInscription($data);
          //  $inscForm->inscMembre($data);
        ?>
    </div>
</html>


