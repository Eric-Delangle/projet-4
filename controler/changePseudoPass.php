<?php
session_start();
require_once (MODEL.'DataBase.php');
require_once (MODEL.'FormInscConnec.php');
require_once (VIEW.'nav.php');
//require_once (CONTROLER.'change_pseudo.php');
//require_once (CONTROLER.'change_pass.php');
/*
if (isset($_SESSION['ouvert'])== true) {
   $change = new FormInscConnec($data);
}
*/
?>
<html>
    <head>
    <meta charset="utf-8" />
        <link rel="stylesheet" href="<?php echo ASSETS;?>css/style.css" />
</head>
    <body>
        <h2>Vous pouvez changer vos identifiants si vous le souhaitez.</h2>
            <div class="bloc_form">
                <form action="change_pseudo" method="post">
                        <?php
                            $change = new FormInscConnec($data);
                            echo 'Quel pseudo voulez vous utiliser pour vous connecter à votre blog.';
                            echo $change->input('pseudo',"Votre nouveau pseudo");
                            echo $change->submit();
                        ?>
                </form>
                <form action="change_pass" method="post">
                        <?php
                            echo 'Quel mot de passe voulez vous utiliser pour vous connecter à votre blog.';
                            echo $change->input('pseudo',"Votre nouveau mot de passe");
                            echo $change->submit();
                        ?>
                </form>

            </div>
    </body>
</html>