<?php
require_once ('../view/nav.php');
require ('../controler/bdd.php');
require ('../model/formInscConnec.php');
$contForm = new FormInscConnec ($data);
echo "Contact";
echo '<div id="cadreContact"><div id="blocContact"><img src="../public/images/karib1.png" id="kariB"/></div></div>';
?>
<html>
    <body>
    <div id="bloc_form_contact" class="bloc_form">
        <?php
            echo $contForm->input('pseudo',"Votre pseudo");
            echo $contForm->input('mail',"Votre email");
            echo $contForm->input('message',"Votre message");
            echo $contForm->submit();
        ?>
    </div>
        <script src="../public/js/animationContact.js"></script>
        <script>document.getElementById('accueil').style.display = 'block';</script>
    </body>
</html>