<?php

$objetChapter = new \projet4\Crudchapters();

function showAllChap() {
    $objetChapter = new \projet4\Crudchapters();
    $allChap = $objetChapter->showChapters();
    require(VIEW.'frontend/listChapView.php');
}

function showOneChap() {
    $viewOneChap = new \projet4\Crudchapters();
    $readChapter = $viewOneChap->showChapter($_GET['number']); 
        foreach ($readChapter as $data) { 
            require(VIEW.'frontend/oneChapView.php');
        }
        if($data['title'] == null) {
            ?>
                <script>
                    alert("Ce chapitre n'éxiste pas. Vous allez être redirigé(e).");
                </script>
            <?php
            header("Refresh:3;url=chapters");
        }           
}

function signal($id, $number) { 
    $alertComm = new \projet4\Crudcomments();
    $alert = $alertComm->signalCom($_GET['id'], $_GET['number']);
}
  
// COMMENTAIRES 

function showCom() {    
// pour générer mon formulaire de commentaire
    $commentForm = new \projet4\FormInscConnec($data); 
// puis appel de la méthode d'affichage
    $objetComment = new \projet4\Crudcomments();
    $allCom = $objetComment->getComments(); 
    require(VIEW.'frontend/listComView.php');  
}

function creatCom($id) { 

    if(empty(htmlspecialchars($_POST['auth'])) && empty(htmlspecialchars($_POST['contenuComment']))) {
        ?>
            <script>
                alert("Tous les champs doivent être remplis. Vous allez être redirigé(e).");
            </script>
        <?php
     header("Refresh:3;url=chapter?number=".$_GET['number']."");
    }

    if(!empty(htmlspecialchars($_POST['auth'])) && !empty(htmlspecialchars($_POST['contenuComment']))) {
        $objetComment = new \projet4\Crudcomments();
        $com = $objetComment->createComment();
    }
}

// aller au chapitre suivant
function after() { 
    $read = new \projet4\Crudchapters();
    $read->getNextNumber($_GET['number']);   
}
// aller au chapitre precedent
function before() { 
    $read = new \projet4\Crudchapters();
    $read->getLastNumber($_GET['number']); 
}
