<?php
$chapitres = new DataBase('chapters');

$req = $chapitres->prepare('INSERT INTO chapters(chapter_number, title, contents, date_parution) VALUES(:chapter_number, :chapter_title, :contents, now())', (array('chapter_number' => $_POST['chapter_number'],'chapter_title' => $_POST['chapter_title'], 'contents' => $_POST['contents'])), 'chapters', true);
