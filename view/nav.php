<?php
require_once ('config.php');
require_once ('model/DataBase.php');

?>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/css/style.css" />

        <title>Billet simple pour l'Alaska</title>

    </head>
<body>

    	<div class="page_menu">

    		<header>
	
            <div class="codeco">
               <h1>
                   <form action="edition" method="post">
                         <input type="submit" id="connecter" class="liens_h1" value="Administration">
                    </form>
                </h1>
            </div>


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