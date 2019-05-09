<?php
require_once (CONTROLER.'editChapitres.php');
?>
</html>
<head>
   <meta charset="utf-8" />
   <link rel="stylesheet" href="<?php echo ASSETS;?>css/style.css" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src = "https://cloud.tinymce.com/5/tinymce.min.js? apiKey = mibp5q8fc9tq6xnkjnimgpa1u02x01d45v2wt4mczl0uorhb "> </script>
  
   <script>tinymce.init({
      selector: 'textarea',
      init_instance_callback : function(editor) {
         var freeTiny = document.querySelector('.tox .tox-notification--in');
         freeTiny.style.display = 'none';
      }
   });
   
 </script>

</head>

    <body>
       <div class="disposition">
         <form  action="deconnexion" method="post">
            <input type="submit" id="deconnexion" class="liens_h1" value="Vous déconnecter">
         </form>

         <form  action="changer_identifiants" method="post">
            <input type="submit" id="changer_identifiants" class="liens_h1" value="Changer d'identifiants">
         </form>  
      </div>
      <?php require_once (VIEW.'nav.php');?>
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

            <textarea name='contents' id ='contents'></textarea>
            <input type="submit" id="save_chapter" class="liens_h1" value="Sauvegarder">
            
         </form>

         <form action="majChapter" method="POST" name="majarticle">
            <input type="submit" id="maj_chapter" class="liens_h1" value="Mettre à jour">
       </form>

         <!-- la va apparaitre la div de modification des chapitres ou des commentaires -->
       <div class="cadre_chapitres">
            <p>La j'affiche ce que je veux gérer.</p>
               <div class="gestion">

               </div>
               <div class="gestion">
                  
               </div>
       </div>

    <script>document.getElementById('connecter').style.display = 'none';</script>
    <script>document.getElementById('deconn').style.display = 'none';</script>
    <script>document.getElementById('accueil').style.display = 'block';</script>
    </body>
</html>