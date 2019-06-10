<?php 
ob_start(); 
session_start();

//include(VIEW.'nav.php');

?>
<link href="assets/css/style.css" rel="stylesheet" /> 
<script src = "https://cloud.tinymce.com/5/tinymce.min.js? apiKey = mibp5q8fc9tq6xnkjnimgpa1u02x01d45v2wt4mczl0uorhb "> </script>
        
   <script>tinymce.init({
      selector: 'textarea',
      init_instance_callback : function(editor) {
         var freeTiny = document.querySelector('.tox .tox-notification--in');
         freeTiny.style.display = 'none';
      }
   });
   
 </script>
       <div class="disposition">
         <form  action="deco" method="post">
            <input type="submit" id="deconnexion" class="liens_h1" value="Vous déconnecter">
         </form>
         <form  action="chapters" method="post">
            <input type="submit" class="liens_h1" value="Les chapitres">
         </form>
 
      </div>
     
  <h1 class="messageDeBienvenue"><?php echo "Bienvenue  ".$_SESSION['pseudo']." dans l'interface d'administration de votre blog."?></h1>


         <form action="saveChapter" method="POST" name="addarticle">
         <div>
                <div>
                 <div class="label_for">  Titre :</div>
                   <input id="chapter_title" name="chapter_title" type="text"  placeholder="Titre du chapitre" value="" required>
                </div>

               <div>
                <div class="label_for">  Chapitre :</div>
                   <input type="number" name="chapter_number" placeholder="Numéro du chapitre" value="" required>                 
               </div>

            <textarea name='contents' id ='contents'>
              
            </textarea>
            <input type="submit" id="save_chapter" class="liens_h1" value="Sauvegarder">
            
         </form>

         <form action="majChapter" method="POST" name="majarticle">
            <input type="submit" id="maj_chapter" class="liens_h1" value="Mettre à jour">
       </form>

         <!-- la va apparaitre la div de modification des chapitres --> 
         <div class="cadre_interface">
             <!-- j'affiche uniquement le titre de tous mes chapitres -->

             <div id="vueChapMaj"> <!-- liste des chapitres en vue de les modifier -->
             <p>Choisissez un chapitre pour le mettre à jour : </p>
   
            <?php
             while ($data = $allChap->fetch()) { 
               ?>
               <p>
                  <?=$data['title']?>
               </p> 
               <p>
                  <a class="liens_h1" href="chapter?id=<?=$data['id_chapter']?>">Mettre à jour</a>
               </p>
                  
                <?php  
             }  
             ?>
             
            </div>
           <?php // var_dump($majchap);
            ?>
         </div>

         <!-- la va apparaitre la div de modification ou de suppression des commentaires -->
       <div class="cadre_interface">
          <?php 
           affichSign();
           var_dump($signal);
       while ($data = $signal->fetch()) {
        
             
          ?>
            <p>
            <?= $data['comment'] ?>
        
        </p>

        <p> Posté le: 
            <?= $data['date_comment_fr'] ?>
        
        </p>
             <?php  
        }
           ?>
       </div>


<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'backend/template.php'); ?>