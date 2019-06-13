<?php 
ob_start(); 

?>
<div id="commentaires">
			<section class="commentSection">
          <h3 class="ajoutComment">
              Ajouter un commentaire
            <hr />
         <div id="bloc_comments">
                 <form action="commentaire?number=<?= $_GET['number'] ?>" method="post">
                
                <?php
                    echo $commentForm->input('auth',"Votre nom/pseudo");
                    echo $commentForm->textarea('contenuComment',"Votre message");
                    echo $commentForm->submit();
                ?>
                 <!-- test captcha -->
                    <!-- Notre boite de vérification -->
                <div id="captcha">
                    <div class="g-recaptcha"
                        data-sitekey="6Ld5ZXAUAAAAABT0x_bOlMe6gCBYmOgUFOQuxXjL">
                    </div>  
                </div>
                    
                    <!-- fin test -->
            </form>
            
		</div>
<?php
    
    while ($data = $allCom->fetch()) { 
 
    ?>
        <div id="tableau">
            <p> Pseudo:
                <?= htmlspecialchars($data['auth']) ?>
            
            </p>
            
            <p>
                <?= $data['comment'] ?>
            
            </p>

            <p> Posté le: 
                <?= $data['date_comment_fr'] ?>
            
            </p>

            <p>
                <form action="signal?number=<?=$data['id_comment']?>" method="post">
                     <input type="submit" class="liens_rouges" value="Signaler" name="signaler"/>
                 </form><hr />
            </p>
        
        </div>
    <?php
          
    }

$allCom->closeCursor();
?>
<?php $comments = ob_get_clean(); ?>

<?php require(VIEW.'frontend/template.php'); ?>