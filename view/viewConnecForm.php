<?php
require_once (MODEL.'FormInscConnec.php');
$inscForm = new \projet4\FormInscConnec ($data);
?>
<html>
    <body>
        <div class="bloc_form">
            <form action="connection" method="post">
                    <?php
                        echo 'Bonjour Mr Forteroche, connectez vous afin de pouvoir administrer votre blog.';
                        echo $inscForm->input('pseudo',"Votre pseudo");
                        echo $inscForm->input('pass',"Votre mot de passe");
                        echo $inscForm->submit();
                    ?>
            </form>
        </div>
        <script>document.getElementById('accueil').style.display = 'block';</script>
        <script>document.getElementById('connecter').style.display = 'none';</script>
    </body>
</html>

      