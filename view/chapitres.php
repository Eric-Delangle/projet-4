<?php
require ('../view/nav.php');

echo "Chapitres";
?>
<html>
    <body>
        <div id="edit">
            <input type="button" value="G" style="font-weight:bold;" /> 
            <input type="button" value="I" style="font-style:italic;" /> 
            <input type="button" value="S" style="text-decoration:underline;" /> 
            <div id="editeur" contentEditable ></div> 
        </div> 
        <script>document.getElementById('accueil').style.display = 'block';</script>
    </body>
</html>