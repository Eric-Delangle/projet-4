<?php
require_once (MODEL.'FormInscConnec.php');
//require_once (CONTROLER.'controlContact.php');
require_once (VIEW.'nav.php');
require_once (CONTROLER.'controlMail.php');

$contForm = new \projet4\FormInscConnec ($data);
echo '<div id="cadreContact"><div id="blocContact"><img src="assets/images/karib1.png" id="kariB"/></div></div>';
?>
<html>
    <body>
    <div id="bloc_form_contact" class="bloc_form">
        <form action="controlMail.php" method="post">
            <?php
                echo $contForm->input("pseudo","Votre pseudo");
                echo $contForm->input('mail',"Votre email");
                echo $contForm->textarea('message',"Votre message");
                echo '<form action="mail" method="post">
                            <input type="submit" class="liens_h1" value="Envoyer" name="envoyer"/>
                          </form>';
            ?>
        </form>
    </div>
        <script src="assets/js/animationContact.js"></script>
        <script>document.getElementById('accueil').style.display = 'block';</script>
        <script>document.getElementById('contact').style.display = 'none';</script>
        <script>document.getElementById('connecter').style.display = 'none';</script>
    </body>
</html>