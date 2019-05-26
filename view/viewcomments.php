<?php
// cette vue m'affiche les commentaires
require(CONTROLER.'controlcomments.php');
require(VIEW.'viewUnChapitre.php'); // la ça m'affiche bien le chapitre avant les coms
?>
<div id="commentaires">
			<section class="commentSection">
          <h3 class="ajoutComment">
              Ajouter un commentaire
            <hr />
         <div id="bloc_comments">
			     <form action="<?php $_GET['id'] ?>" method="post">
                <?php
                    echo $commentForm->input('auth',"Votre nom/pseudo");
                    echo $commentForm->textarea('contenuComment',"Votre message");
                    echo $commentForm->submit();
                ?>
            </form>
            
		</div>
          </h3>
				</section>
      	<section id="commentSection">
			  	<h3>
				  	Commentaires
					<hr />
			  	</h3>
           <div id="vuecom">
             <p id="com">
               <?php 
        
                 foreach($com as $vue) { 
               
                    echo '<p class="aligntext">Auteur: ' .$vue->auth. ' </p><br />';
                    echo '<p class="aligntext">Commentaire: '.$vue->comment.' </p><br />';
                    echo '<p class="aligntext">Ecrit le : '.$vue->date_comment_fr.'</p><br />';
                    echo '<form action="signal?id='.$vue->id_comment.' " method="post">
                            <input type="submit" class="liens_rouges" value="Signaler" name="signaler"/>
                          </form><hr />';
                   
                   }
                  
                      if(empty($com)) {
                       echo 'Aucun commentaire n\'a encore été posté sur ce chapitre.';
                    }
                   
          ?>
	  	</section>
		</div>
  </div>




				
