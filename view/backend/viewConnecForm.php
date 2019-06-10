<?php
ob_start(); 
session_start();
include(VIEW.'nav.php');

?>

        <div class="bloc_form">
            <form action="edition" method="post">
                    <?php
                     $inscForm = new \projet4\FormInscConnec ($data);
                        echo 'Bonjour Mr Forteroche, connectez vous afin de pouvoir administrer votre blog.';
                        echo $inscForm->input('pseudo',"Votre pseudo");
                        echo $inscForm->input('pass',"Votre mot de passe");
                        echo $inscForm->submit();
                    ?>
            </form>
        </div>
        <script>document.getElementById('accueil').style.display = 'block';</script>
        <script>document.getElementById('connecter').style.display = 'none';</script>
 

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'backend/template.php'); ?>  