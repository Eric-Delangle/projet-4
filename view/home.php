<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?php echo ASSETS;?>css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Billet simple pour l'Alaska</title>
    </head>

<body>
    <div class="site">
        <div class="infos_sur_le_site">
            <?php
                echo'Bienvenue sur le blog de Jean Forteroche';
                echo '<div id="cadre"><div id="bloc"><img src="assets/images/baleine2.png" id="baleine"/></div></div>';
            ?>
    
            <!-- animation titre -->
            <section id="title">
                <h1 class="ml6">
                    <span class="text-wrapper">
                    <span class="letters">Billet simple pour l'<span class="letter ableu">A</span>laska</span>
                    </span>
                </h1>
            </section>
            <!-- fin animation titre -->
        </div>
        <div id="si_responsive">
            <h2>Bienvenue sur le blog de Jean Forteroche</h2>
            <h1>Billet simple pour l'Alaska.</h1>
        </div>
            
    </div>
<br/>
<footer>
</footer>
    			 	
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="assets/js/animation.js"></script>
<script src="assets/js/titre.js"></script>
    </body>

</html>