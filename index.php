<?php
session_start();
ini_set("display_errors",0);error_reporting(0);// permet de cacher le message undefined
?>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />


        <title>Billet simple pour l'Alaska</title>

    </head>


    <body>
    	<div class="site">

    		<header>
<?php
include ("inc/menu.php");
?>
    		</header>
            <div class="infos_sur_le_site">
    <?php
        if($_SESSION['pseudo'])
    {
     echo'Bienvenue sur le blog de Jean Forteroche '.$_SESSION['pseudo'].'.';
     echo '<div id="cadre"><div id="bloc"><img src="images/baleine2.png" id="baleine"/></div></div>';
    }
    
if(empty($_SESSION['pseudo']))
{
    echo'Bienvenue sur le blog de Jean Forteroche';
    echo '<div id="cadre"><div id="bloc"><img src="images/baleine2.png" id="baleine"/></div></div>';
}
?>
            </div>
            <br/>
            <footer>
              
            </footer>
    			
    	
</div>
<script src="js/animation.js"></script>
    </body>

</html>