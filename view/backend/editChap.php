<?php
ob_start();
?>
<link href="assets/css/style.css" rel="stylesheet" />
<script src = "https://cloud.tinymce.com/5/tinymce.min.js? apiKey = mibp5q8fc9tq6xnkjnimgpa1u02x01d45v2wt4mczl0uorhb "> </script>
        
<script>tinymce.init({
     
      height : "600px",
      selector: 'textarea',
      init_instance_callback : function(editor) {
         var freeTiny = document.querySelector('.tox .tox-notification--in');
         freTiny.style.display = 'none';
      }
   });
</script>
<a class="liens_h1" href="edition">Administration</a>
<h2>Edition d'un chapitre :</h2>
<div class="cadre_tyni">
<div>

 <div class="label_for">  Titre :</div>
    <input id="chapter_title" name="chapter_title" type="text"  placeholder="Titre du chapitre" value="" required>
 </div>
 
<textarea name='contents' id ='contents'>
    <?php
       while ($data = $maj->fetch()) { 
    ?>
      <p>
         <?= $data['title'] ?>
      </p>
      <p>
         <?= $data['contents'] ?>
      </p>
    <?php
      }
     ?>
</textarea>
<form action="majChapter" method="POST" name="majarticle">
   <input type="submit" id="maj_chapter" class="liens_h1" value="Mettre à jour">
</form>
</div>
<?php
$content = ob_get_clean();
$title = "Edition d'un chapitre";
require(VIEW.'backend/template.php');
?>
