<?php 
ob_start(); 

?>
<div id="commentaires">
			
          <h3 class="ajoutComment">
              Ajouter un commentaire
        </h3>
            <hr />
         <div id="bloc_comments">
                 <form action="commentaire?number=<?= $_GET['number'] ?>" method="post">
                
                <?php
                    echo $commentForm->input('auth',"Votre nom/pseudo");
                    echo $commentForm->textarea('contenuComment',"Votre message");
                    ?>
                    <!-- test captcha -->
                    <!-- Notre boite de vérification -->
                        <div id="captcha">
                            <div class="g-recaptcha"
                                data-sitekey="6Ld5ZXAUAAAAABT0x_bOlMe6gCBYmOgUFOQuxXjL">
                            </div> 
                        </div>
                    
                    <!-- fin test -->
                    <?php
                    echo $commentForm->submit();
                ?>
            </form>
            
		</div>
<?php
    
    while ($data = $allCom->fetch()) { 
 
    ?>
        <div class="tableau">
             Pseudo:
                <?= htmlspecialchars($data['auth']) ?>
            <br>
                <?= htmlspecialchars($data['comment']) ?>
            <br>
             Posté le: 
                <?= htmlspecialchars($data['date_comment_fr']) ?>
            
                <form action="signal?id=<?=$data['id']?>&chapter_number=<?=$data['chapter_number']?>" onSubmit="return verif()" method="post" >
                     <input type="submit" class="liens_rouges" value="Signaler" name="signaler"/>
                 </form><hr />
        </div>

    <?php
          
    }

$allCom->closeCursor();
?>
<?php $comments = ob_get_clean(); ?>
<script>
    function verif(){
        if (confirm("Voulez vous vraiment signaler ce commentaire ?")) {
            return true;
        }
        else{
            return false;
        }
    }
    </script>
<?php require(VIEW.'frontend/templatecom.php'); ?>
</div>