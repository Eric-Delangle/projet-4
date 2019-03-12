<?php
require ('../controler/bdd.php');
require ('../model/formInscConnec.php');
require ('../view/nav.php');
$connecForm = new FormInscConnec ($data);
?>
<html>
    <div class="bloc_form">
        <?php
        echo $connecForm->input('pseudo',"Votre pseudo");
        echo $connecForm->input('pass',"Votre mot de passe");
        echo $connecForm->submit();
        $connecForm->connecMembre($data);
        ?>
    </div>
</html>
