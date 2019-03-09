
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />

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
                   <form action="controler/inscription.php" method="post">
                         <input type="submit" class="liens_h1" value="S'enregistrer">
                    </form>
                 
                   <form action="controler/connexion.php" method="post">
                         <input type="submit" class="liens_h1" value="Se connecter">
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
                   <form action="controler/deconnexion.php" method="post">
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
                    <li><a href="../view/indexView.php" class="accueil">Accueil</a></li>
                    <li><a href="view/chapitres.php" class="Les chapitres">Les chapitres</a></li>
                    <li><a href="view/contact.php">Contact</a></li>
                </ul>
            </nav>      
</div>
    </body>

</html>