<<<<<<< HEAD
<?php
$save = new \projet4\Crudchapters($_GET['id']);
$save->createChapter('chapter_number', 'title', 'contents', 'date_parution');
=======
<?php
$save = new Crudchapters();
$save->createChapter('chapter_number', 'title', 'contents', 'date_parution');
>>>>>>> 6b0edd753de8e5895b1f8659fb17fc0e663b8ef0
