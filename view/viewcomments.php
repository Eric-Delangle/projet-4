<?php
require_once (CONTROLER.'controlcomments.php');
$commentForm = new \projet4\FormInscConnec ($data);
$com = new \projet4\Crudcomments();// j'instancie mon objet Crudcomments



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
          <p id="com"><?php affichCom();?></p>
          <hr />
			  	<p id="pasdecom">
          <?php 
       
          ?>
		  	</div>
	  	</section>
		</div>
  </div>



				
