<?php
session_start();
?>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="public/css/style.css" />


        <title>Billet simple pour l'Alaska</title>

    </head>


    <body>
    	<div class="site">

    		<header>
<?php
require ("view/nav.php");
?>
    		</header>

            <div class="infos_sur_le_site">
    <?php
        if($_SESSION['pseudo'])
    {
     echo'Bienvenue sur le blog de Jean Forteroche '.$_SESSION['pseudo'].'.';
     echo '<div id="cadre"><div id="bloc"><img src="public/images/baleine2.png" id="baleine"/></div></div>';
    }
    
if(empty($_SESSION['pseudo']))
{
    echo'Bienvenue sur le blog de Jean Forteroche';
    echo '<div id="cadre"><div id="bloc"><img src="public/images/baleine2.png" id="baleine"/></div></div>';
}
?>
    <!-- animation titre -->
    <section class="container">
        <h1>
            <span class="title">Billet simple</span>
            <span class="title">pour</span>
            <span class="title">l'Alaska</span>
        </h1>
    </section>
    <!-- fin animation titre -->
            </div>
            <br/>
            <footer>
              
            </footer>
    			
    	
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="public/js/animation.js"></script>
    </body>

</html>