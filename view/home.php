<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="shortcut icon" type="image/png" href="<?= ASSETS;?>images/baleine3favicon.png"/>
        <link rel="stylesheet" href="<?= ASSETS;?>css/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Billet simple pour l'Alaska</title>
    </head>
<body>
<div class="page_menu">
        <div class="codeco">
            <form action="edition" method="post">
                <input type="submit" id="connecter" class="liens_h1" value="Administration">
            </form>
        </div>
    </div>

    <div class="container_menu">
        <nav>
            <ul class="menu">
                <li><a href="home" id="accueil" class="accueil">Accueil</a></li>
                <li><a href="chapters" id="chapters" class="Les chapitres">Les chapitres</a></li>
                <li><a href="#" id="contact"><i class="fab fa-facebook"></i></a></li>
            </ul>
        </nav>      
    </div>
        <div class="site">
            <div class="infos_sur_le_site">
                <?php
                    echo'Bienvenue sur le blog de Jean Forteroche';
                    echo '<div id="cadre"><div id="bloc"><img src="assets/images/baleine2.png" alt="baleine" id="baleine"/></div></div>';
                ?>
        <!-- animation titre -->
                <div id="title">
                    <h1 class="ml6">
                        <span class="text-wrapper">
                        <span class="letters">Billet simple pour l'<span class="letter ableu">A</span>laska</span>
                        </span>
                    </h1>
            </div>
                <!-- fin animation titre -->
            </div>
            <div id="si_responsive">
                <h2>Bienvenue sur le blog de Jean Forteroche</h2>
                <h1>Billet simple pour l'Alaska.</h1>
            </div>       
        </div>
    <footer>
    </footer>  			 	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="assets/js/animation.js"></script>
        <script src="assets/js/titre.js"></script>
    </body>
</html>