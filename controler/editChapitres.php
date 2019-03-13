<?php
require ('../controler/bdd.php');
?>
<html>
    <head>
        <script src="../public/js/editeur.js"></script>
    </head>
    <body>
        <div id="edit">
            <input type="button" class="editButton" value="G" style="font-weight:bold;" onclick="commande('bold');" /> 
            <input type="button" class="editButton" value="I" style="font-style:italic;" onclick="commande('italic');"/> 
            <input type="button" class="editButton" value="S" style="text-decoration:underline;" onclick="commande('underline');"/> 
            <input type="button" class="editButton" value="Lien" onclick="commande('createLink');"/>
            <input type="button" class="editButton" value="Image" onclick="commande('insertImage');"/>
            <div id="editeur" contentEditable ></div> 
        </div> 
        
    </body>
</html>