<?php
$save = new \projet4\Crudchapters($_GET['id']);
$save->createChapter('chapter_number', 'title', 'contents', 'date_parution');