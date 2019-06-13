<?php 
ob_start(); 
session_start();
?>
<link href="assets/css/style.css" rel="stylesheet" /> 
<script src = "https://cloud.tinymce.com/5/tinymce.min.js? apiKey = mibp5q8fc9tq6xnkjnimgpa1u02x01d45v2wt4mczl0uorhb "> </script>
        
   <script>tinymce.init({
      
      height : "400px",
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

<div class="cadre_tyni">
   <!-- ici commence l'espace de création de chapitre -->
   <form action="saveChapter" method="POST" name="addarticle">
 
    <div>
       <div class="label_for">  Titre :
       </div>
         <input id="chapter_title" name="chapter_title" type="text"  placeholder="Titre du chapitre" value="" required>
    </div>

   <div>
      <div class="label_for">  Chapitre :
      </div>
        <input type="number" name="chapter_number" placeholder="Numéro du chapitre" value="" required>                 
   </div>

<textarea name='contents' id ='contents'>
   
</textarea>


   <input type="submit" id="save_chapter" class="liens_h1" value="Sauvegarder">
</form>
</div>

<div id="vueChapMaj"> <!-- liste des chapitres en vue de les modifier -->
   <p><strong>Choisissez un chapitre pour le mettre à jour : </strong></p>
   </div>
<!-- la va apparaitre la div de modification des chapitres --> 
<div class="cadre_interface">

   <?php
       while ($data = $allChap->fetch()) { 
   ?>
      <div class="cadre">
         <p>
            <?=$data['title']?>
         </p> 
          <p>
             <form action="modifier?number=<?=$data['chapter_number']?>" method="post">
               <input type="submit" class="liens_h1" value="modifier" name="modifier">
            </form>
         </p>
      </div>  
      <?php
       }
       ?>
</div>
       


<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'backend/template.php'); ?>
