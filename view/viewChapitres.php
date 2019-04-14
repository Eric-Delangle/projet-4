<?php
require (VIEW.'nav.php');
//require_once (MODEL.'DataBase.php');

echo '<h1 id="chap" class="type typewriter">Ici commence notre histoire...</h1>';
echo '<p id="explication">Découvrez le chapitre en survolant le livre.</p>';

?>
<html>
    <head>
         <meta name="author" content="Marco Barría for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
		
		<link rel="stylesheet" type="text/css" href="assets/css/book.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	</head>
    

    <body>
	
		<div id="cadre_chapitres">

			<div class="centrage_chapitre">

				<ul id="chapitreUn">
								<li id="livre">
									<figure class='book'>

										<!-- Front -->

										<ul class='hardcover_front'>
											<li>
												<div class="coverDesign blue">
													<span class="ribbon">1</span>
													<h1>Billet simple</h1>
													<p>pour l'Alaska</p>
												</div>
											</li>
											<li></li>
										</ul>

										<!-- Pages -->

										<ul class='page'>
											<li></li>
											<li>
												<a class="btn" href="chapter?id=1"> Lire le chapitre</a>
											</li>
											<li></li>
											<li></li>
											<li></li>
										</ul>

										<!-- Back -->

										<ul class='hardcover_back'>
											<li></li>
											<li></li>
										</ul>
										<ul class='book_spine'>
											<li></li>
											<li></li>
										</ul>
										<figcaption>
											<h1>Chapitre 1</h1>
											<span>par Jean Forteroche</span>
											<p><?php $extrait = new Chapter(); $extrait->getExtrait();?></p>
										</figcaption>
									</figure>
								</li>
					</ul>
				
				</div>

				<div class="centrage_chapitre">
					<ul id="chapitreDeux">
								<li id="livre">
									<figure class='book'>

										<!-- Front -->

										<ul class='hardcover_front'>
											<li>
												<div class="coverDesign blue">
													<span class="ribbon">2</span>
													<h1>Billet simple</h1>
													<p>pour l'Alaska</p>
												</div>
											</li>
											<li></li>
										</ul>

										<!-- Pages -->

										<ul class='page'>
											<li></li>
											<li>
												<a class="btn" href="chapter?id=2">Lire le chapitre</a>
											</li>
											<li></li>
											<li></li>
											<li></li>
										</ul>

										<!-- Back -->

										<ul class='hardcover_back'>
											<li></li>
											<li></li>
										</ul>
										<ul class='book_spine'>
											<li></li>
											<li></li>
										</ul>
										<figcaption>
											<h1>Chapitre 2</h1>
											<span>par Jean Forteroche</span>
											<p>But existing is basically all I do!...</p>
										</figcaption>
									</figure>
								</li>
					</ul>
				</div>

			<div class="centrage_chapitre">

				<ul id="chapitreTrois">
							<li id="livre">
								<figure class='book'>

									<!-- Front -->

									<ul class='hardcover_front'>
										<li>
											<div class="coverDesign blue">
												<span class="ribbon">3</span>
												<h1>Billet simple</h1>
												<p>pour l'Alaska</p>
											</div>
										</li>
										<li></li>
									</ul>

									<!-- Pages -->

									<ul class='page'>
										<li></li>
										<li>
											<a class="btn" href="chapter?id=3">Lire le chapitre</a>
										</li>
										<li></li>
										<li></li>
										<li></li>
									</ul>

									<!-- Back -->

									<ul class='hardcover_back'>
										<li></li>
										<li></li>
									</ul>
									<ul class='book_spine'>
										<li></li>
										<li></li>
									</ul>
									<figcaption>
										<h1>Chapitre 3</h1>
										<span>par Jean Forteroche</span>
										<p>Yes. You gave me a dollar and some candy...</p>
									</figcaption>
								</figure>
							</li>
				</ul>
			</div>

			<div class="centrage_chapitre">
					<ul id="chapitreQuatre">
								<li id="livre">
									<figure class='book'>

										<!-- Front -->

										<ul class='hardcover_front'>
											<li>
												<div class="coverDesign blue">
													<span class="ribbon">4</span>
													<h1>Billet simple</h1>
													<p>pour l'Alaska</p>
												</div>
											</li>
											<li></li>
										</ul>

										<!-- Pages -->

										<ul class='page'>
											<li></li>
											<li>
												<a class="btn" href="chapter?id=4">Lire le chapitre</a>
											</li>
											<li></li>
											<li></li>
											<li></li>
										</ul>

										<!-- Back -->

										<ul class='hardcover_back'>
											<li></li>
											<li></li>
										</ul>
										<ul class='book_spine'>
											<li></li>
											<li></li>
										</ul>
										<figcaption>
											<h1>Chapitre 4</h1>
											<span>par Jean Forteroche</span>
											<p>Perfectly symmetrical violence never solved anything...</p>
										</figcaption>
									</figure>
								</li>
					</ul>
				</div>

			<div class="centrage_chapitre">
					<ul id="chapitreCinq">
								<li id="livre">
									<figure class='book'>

										<!-- Front -->

										<ul class='hardcover_front'>
											<li>
												<div class="coverDesign blue">
													<span class="ribbon">5</span>
													<h1>Billet simple</h1>
													<p>pour l'Alaska</p>
												</div>
											</li>
											<li></li>
										</ul>

										<!-- Pages -->

										<ul class='page'>
											<li></li>
											<li>
												<a class="btn" href="chapter?id=5">Lire le chapitre</a>
											</li>
											<li></li>
											<li></li>
											<li></li>
										</ul>

										<!-- Back -->

										<ul class='hardcover_back'>
											<li></li>
											<li></li>
										</ul>
										<ul class='book_spine'>
											<li></li>
											<li></li>
										</ul>
										<figcaption>
											<h1>Chapitre 5</h1>
											<span>par Jean Forteroche</span>
											<p>In your time, yes, but nowadays shut up!...</p>
										</figcaption>
									</figure>
								</li>
					</ul>
				</div>

			<div class="centrage_chapitre">
					<ul id="chapitreSix">
								<li id="livre">
									<figure class='book'>

										<!-- Front -->

										<ul class='hardcover_front'>
											<li>
												<div class="coverDesign blue">
													<span class="ribbon">6</span>
													<h1>Billet simple</h1>
													<p>pour l'Alaska</p>
												</div>
											</li>
											<li></li>
										</ul>

										<!-- Pages -->

										<ul class='page'>
											<li></li>
											<li>
												<a class="btn" href="chapter?id=6">Lire le chapitre</a>
											</li>
											<li></li>
											<li></li>
											<li></li>
										</ul>

										<!-- Back -->

										<ul class='hardcover_back'>
											<li></li>
											<li></li>
										</ul>
										<ul class='book_spine'>
											<li></li>
											<li></li>
										</ul>
										<figcaption>
											<h1>Chapitre 6</h1>
											<span>par Jean Forteroche</span>
											<p>Now that the, uh, garbage ball is in space...</p>
										</figcaption>
									</figure>
								</li>
					</ul>
				</div>

			<div class="centrage_chapitre">
					<ul id="chapitreSept">
								<li id="livre">
									<figure class='book'>

										<!-- Front -->

										<ul class='hardcover_front'>
											<li>
												<div class="coverDesign blue">
													<span class="ribbon">7</span>
													<h1>Billet simple</h1>
													<p>pour l'Alaska</p>
												</div>
											</li>
											<li></li>
										</ul>

										<!-- Pages -->

										<ul class='page'>
											<li></li>
											<li>
												<a class="btn" href="chapter?id=7">Lire le chapitre</a>
											</li>
											<li></li>
											<li></li>
											<li></li>
										</ul>

										<!-- Back -->

										<ul class='hardcover_back'>
											<li></li>
											<li></li>
										</ul>
										<ul class='book_spine'>
											<li></li>
											<li></li>
										</ul>
										<figcaption>
											<h1>Chapitre 7</h1>
											<span>par Jean Forteroche</span>
											<p>Doctor, perhaps you can help me...</p>
										</figcaption>
									</figure>
								</li>
					</ul>
				</div>
			<div class="centrage_chapitre">
				
					<ul id="chapitreHuit">
								<li id="livre">
									<figure class='book'>

										<!-- Front -->

										<ul class='hardcover_front'>
											<li>
												<div class="coverDesign blue">
													<span class="ribbon">8</span>
													<h1>Billet simple</h1>
													<p>pour l'Alaska</p>
												</div>
											</li>
											<li></li>
										</ul>

										<!-- Pages -->

										<ul class='page'>
											<li></li>
											<li>
												<a class="btn" href="chapter?id=8">Lire le chapitre</a>
											</li>
											<li></li>
											<li></li>
											<li></li>
										</ul>

										<!-- Back -->

										<ul class='hardcover_back'>
											<li></li>
											<li></li>
										</ul>
										<ul class='book_spine'>
											<li></li>
											<li></li>
										</ul>
										<figcaption>
											<h1>Chapitre 8</h1>
											<span>par Jean Forteroche</span>
											<p>I haven't felt much of anything since my guinea pig died...</p>
										</figcaption>
									</figure>
								</li>
					</ul>
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








