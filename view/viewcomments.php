<?php
require_once(CONTROLER.'controlcomments.php');
$commentForm = new \projet4\FormInscConnec ($data);
//$com = new \projet4\Crudcomments($_GET['id']);// j'instancie mon objet Crudcomments


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
           
             // var_dump($com[1]);
                 if(!empty($com)) { 
                 //  var_dump($com);
                   
                    echo '<p class="aligntext">Auteur: ' .$com['0']->auth. ' </p><br />';
                    echo '<p class="aligntext">Commentaire: '.$com['0']->comment.' </p><br />';
                    echo '<p class="aligntext">Ecrit le : '.$com['0']->date_comment_fr.'</p><br />';
                    // echo '<form action="controlcomments" method="POST">'
                        echo '<input type="submit" class="liens_rouges" value="Signaler" name="signaler"/>';
                    // </form> 
                  
                      
                    }  
                      else {
                        echo 'Aucun commentaire n\'a encore été posté sur ce chapitre.';
                     }
          ?>
			  	<p id="pasdecom">
		  	</div>
	  	</section>
		</div>
  </div>



				
