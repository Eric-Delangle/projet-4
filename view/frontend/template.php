<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?>Billet simple pour l'Alaska</title>
        <link href="assets/css/style.css" rel="stylesheet" /> 
        <link rel="shortcut icon" type="image/png" href="<?php echo ASSETS;?>images/baleine3favicon.png"/>
        <link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
    </head>
        
    <body>
   
       <?= $content ?>
       <?= $comments ?>

        <script>document.getElementById('accueil').style.display = 'block';</script>
        <script>document.getElementById('chapters').style.display = 'none';</script>
        <script>document.getElementById('connecter').style.display = 'none';</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="assets/js/animChapitres.js"></script>
        <script src="assets/js/modernizr.custom.js"></script>
        <script src = "https://www.google.com/recaptcha/api.js"></script>
    </body>
</html>