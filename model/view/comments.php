<?php
require_once (CONTROLER.'controlcomments.php');
$commentForm = new FormInscConnec ($data);


?>
<div id="commentaires">
			<section class="commentSection">
          <h3 class="ajoutComment">
              Ajouter un commentaire
            <hr />
         <div id="bloc_comments">
			 <form action="controlcomments" method="post">
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
          <p id="com"><?php $datas->auth;?></p>
			  	<p id="pasdecom">
          <?php 
          if($datas) {
         
            var_dump($datas);
          }else { 
           ?> <p><?php ;?>Aucun commentaire n'a encore été publié sur cet article.</p><?php
          }
          ?>
		  	</div>
	  	</section>
		</div>
  </div>



				
