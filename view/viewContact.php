<?php
require_once (MODEL.'FormInscConnec.php');
require (CONTROLER.'controlContact.php');
require (VIEW.'nav.php');

$contForm = new FormInscConnec ($data);
echo "Contact";
echo '<div id="cadreContact"><div id="blocContact"><img src="assets/images/karib1.png" id="kariB"/></div></div>';
?>
<html>
    <body>
    <div id="bloc_form_contact" class="bloc_form">
        <?php
            echo $contForm->input('pseudo',"Votre pseudo");
            echo $contForm->input('mail',"Votre email");
            echo $contForm->textarea('message',"Votre message");
            echo $contForm->submit();
            if (isset($pseudo,$mail,$message)) {
                $contact->mail($mail,$sujet,$message,$header);
            }
            else {
                echo 'bah merde';
            }
        ?>
    </div>
        <script src="assets/js/animationContact.js"></script>
        <script>document.getElementById('accueil').style.display = 'block';</script>
        <script>document.getElementById('contact').style.display = 'none';</script>
    </body>
</html>