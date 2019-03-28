<?php
require (VIEW.'nav.php');
require_once (MODEL.'DataBase.php');

echo '<h1 id="chap" class="type typewriter">Ici commence notre histoire...</h1>';
//$datas = $db->query('SELECT * FROM articles');
?>
<html>
    <body>
        <script>document.getElementById('accueil').style.display = 'block';</script>
        <script>document.getElementById('chapitres').style.display = 'none';</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="assets/js/animChapitres.js"></script>
        
    </body>
</html>








