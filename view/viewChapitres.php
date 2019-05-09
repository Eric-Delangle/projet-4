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
		<!--
	
		<div id="cadre_chapitres">
			<div class="extraitChap">
				<span>< </span><br><a class="liens_h1" href="chapter?id=1"> Lire le chapitre</a>
				<p><?php
				 
				// var_dump($chapter->getExtrait($id));
					
						?>	  
				</p>
				<hr />
			</div>
			<hr />
			
			<div class="extraitChap">
				<span> </span><br><a class="liens_h1" href="chapter?id=2"> Lire le chapitre</a>
				<p>
				
						
				</p>
				<hr />
			</div>
			
			<div class="extraitChap">
				<span>Chapitre n°3: </span><br><a class="liens_h1" href="chapter?id=3"> Lire le chapitre</a>
				<p><?php
				//	echo $ext->getExtrait(3);
						?>
						<hr />
				</p>
				</div>
			<div class="extraitChap">
				<span>Chapitre n°4: </span><br><a class="liens_h1" href="chapter?id=4"> Lire le chapitre</a>
				<p><?php
				//	echo $ext->getExtrait(4);
						?>
						<hr />
				</p>
			</div>
			<div class="extraitChap">
				<span>Chapitre n°5: </span><br><a class="liens_h1" href="chapter?id=5"> Lire le chapitre</a>
				<p><?php
					//echo $ext->getExtrait(5);
						?>
						<hr />
				</p>
			</div>
			<div class="extraitChap">
				<span>Chapitre n°6: </span><br><a class="liens_h1" href="chapter?id=6"> Lire le chapitre</a>
				<p><?php
				//	echo $ext->getExtrait(6);
						?>
						<hr />
				</p>
			</div>
			<div class="extraitChap">
				<span>Chapitre n°7: </span><br><a class="liens_h1" href="chapter?id=7"> Lire le chapitre</a>
				<p><?php
			//		echo $ext->getExtrait(7);
						?>
						<hr />
				</p>
			</div>
			<div class="extraitChap">
				<span>Chapitre n°8: </span><br><a class="liens_h1" href="chapter?id=8"> Lire le chapitre</a>
				<p><?php
				//	echo $ext->getExtrait(8);
						?>
						<hr />
				</p>
			</div>
			<div class="extraitChap">
				<span>Chapitre n°9: </span><br><a class="liens_h1" href="chapter?id=9"> Lire le chapitre</a>
				<p><?php
				//	echo $ext->getExtrait(9);
						?>
						<hr />
				</p>
			</div>
			<div class="extraitChap">
			<span>Chapitre n°10: </span><br><a class="liens_h1" href="chapter?id=10"> Lire le chapitre</a>
				<p><?php
			//		echo $ext->getExtrait(10);
						?>
						<hr />
				</p>
			</div>

	

  	</div>
	-->
        <script>document.getElementById('accueil').style.display = 'block';</script>
        <script>document.getElementById('chapters').style.display = 'none';</script>
        <script>document.getElementById('connecter').style.display = 'none';</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="assets/js/animChapitres.js"></script>
        <script src="assets/js/modernizr.custom.js"></script>
        
    </body>
</html>