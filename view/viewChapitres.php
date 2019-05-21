<?php
// cette view affiche tous les chapitres les uns sous les autres


require (VIEW.'nav.php');

require(CONTROLER.'controlChapitre.php');


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
	
        <?php 
        foreach($allChap as $AllChapters) { 
            echo ' 
            <table id="tableau">
            <tr>
            <th></th>
            <th id="tableau"></th>
            <th></th>
            </tr>
            <tr>
            <td>'.$AllChapters->title.'</td>
            <td>'.substr($AllChapters->contents, 219, 400). '...</p></td>
            <td> <a class="liens_h1" href="chapter?id=' .$AllChapters->id_chapter. '">Lire le chapitre</a></td>
            </tr>
        </table>
        <hr />';
        
        }
    
        ?>
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