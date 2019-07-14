<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>>Billet simple pour l'Alaska</title>
        <link rel="stylesheet" href="<?= ASSETS;?>css/style.css" />
        <link rel="shortcut icon" type="image/png" href="<?php echo ASSETS;?>images/baleine3favicon.png"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
    </head>   
    <body>
        <?= $content ?> 
       <script>document.getElementById('connecter').style.display = 'none';</script>
       <script>document.getElementById('deconn').style.display = 'none';</script>
       <script>document.getElementById('accueil').style.display = 'block';</script>
    </body>
</html>
