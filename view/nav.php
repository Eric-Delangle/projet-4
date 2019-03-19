<?php
require_once ('config.php');
?>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?php echo ASSETS;?>css/style.css" />

        <title>Billet simple pour l'Alaska</title>

    </head>
<body>

    	<div class="page_menu">

    		<header>
<?php
if(empty($_SESSION['pseudo']))
{?>	
            <div class="codeco">
               <h1> 
                   <form action="index.php?r=inscription" method="post">
                         <input type="submit" id="enregistrer" class="liens_h1" value="S'enregistrer">
                    </form>
                 
                   <form action="index.php?r=connection" method="post">
                         <input type="submit" id="connecter" class="liens_h1" value="Se connecter">
                    </form>
                </h1>
            </div>
    <?php
}

if(isset($_SESSION['pseudo']))
{
    ?>
        <div class="codeco">
               <h1> 
                   <form action="<?php echo CONTROLER;?>deconnexion.php" method="post">
                        <input type="submit" class="liens_h1" value="Se déconnecter">
                    </form>
                </h1>
            </div>
    <?php
}
?>
<br/>
<div class="container_menu">
            <nav>
                <ul class="menu">
                    <li><a href="index.php?r=home" id="accueil" class="accueil">Accueil</a></li>
                    <li><a href="index.php?r=chapitres" id="chapitres" class="Les chapitres">Les chapitres</a></li>
                    <li><a href="index.php?r=contact" id="contact">Contact</a></li>
                </ul>
            </nav>      
</div>

    </body>

</html>