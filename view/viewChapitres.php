<?php
require (VIEW.'nav.php');
//require_once (MODEL.'Crudchapters.php');
//require_once (MODEL.'Chapter.php');
require_once (CONTROLER.'controlChapitre.php');
//require_once (CONTROLER.'controlchapters.php');
//$liste = new Crudchapters();

echo '<h1 id="chap" class="type typewriter">Ici commence notre histoire...</h1>';
?>
<html>
    <head>
		 <meta charset="utf-8"/>
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	</head>
    
    <body>



	<div class="cadre_chapitres">
	
		<?php tableau(); ?>
	
	</div>
	


	</div>
	
        <script>document.getElementById('accueil').style.display = 'block';</script>
        <script>document.getElementById('chapters').style.display = 'none';</script>
        <script>document.getElementById('connecter').style.display = 'none';</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="assets/js/animChapitres.js"></script>
        <script src="assets/js/modernizr.custom.js"></script>
        
    </body>
</html>