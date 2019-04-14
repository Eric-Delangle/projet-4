<?php
require_once ('config.php');
require_once (MODEL.'DataBase.php');
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
                   <form action="connection" method="post">
                         <input type="submit" id="connecter" class="liens_h1" value="Administration">
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
                   <form action="deconnexion" method="post">
                        <input type="submit" id ="deconn" class="liens_h1" value="Se déconnecter">
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
                    <li><a href="home" id="accueil" class="accueil">Accueil</a></li>
                    <li><a href="chapters" id="chapters" class="Les chapitres">Les chapitres</a></li>
                    <li><a href="contact" id="contact">Contact</a></li>
                </ul>
            </nav>      
</div>

    </body>

</html>