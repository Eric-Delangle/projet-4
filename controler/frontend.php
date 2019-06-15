<?php

$objetChapter = new \projet4\Crudchapters($_GET['id'], 'chapter_number');

// affiche tous les chapitres les uns sous les autres
function showAllChap() {
    $objetChapter = new \projet4\Crudchapters($_GET['id'], 'chapter_number');
    $allChap = $objetChapter->affichTable();
    require(VIEW.'frontend/listChapView.php');
}

// affiche le chapitre demandé

function showOneChap() {

    $objetChapter = new \projet4\Crudchapters($_GET['number']);
    $readChapter = $objetChapter->showChapters(); 
    require(VIEW.'frontend/oneChapView.php');

}

// aller au chapitre suivant

if($_POST['Chapitre_suivant']) { 

    $objetChapter->getNextId($_GET['number']);   
 }

// aller au chapitre precedent

 if($_POST['Chapitre_precedent']) { 
    
   $objetChapter->getLastId($_GET['number']);
    
 }  

 // Signalement d'un commentaire par l'utilisateur
function signal($chapter_number) { 
    $alertComm = new \projet4\Crudcomments($_GET['id'], $_GET['number']);
    $alert = $alertComm->signalCom();
    ?>
    <script language="javascript">
        alert("Ce commentaire a bien été signalé. Vous allez être redirigé(e) vers le sommaire des chapitres.");
    </script>

    <?php
   // pour le moment pas moyen de retourner au chapitre en question
   header("Refresh:3;url=chapters");
    
  
}
// COMMENTAIRES 

// affiche tous les commentaires sous le chapitre 
function showCom($chapter_number) {
    
// pour générer mon formulaire de commentaire
    $commentForm = new \projet4\FormInscConnec ($data); 

// puis appel de la méthode d'affichage
    $objetComment = new \projet4\Crudcomments($_GET['id'], $_GET['number']);
    $allCom = $objetComment->getComments($_GET['id'], $_GET['number']); 
    require(VIEW.'frontend/listComView.php');
   
}

// Créer un commentaire
function creatCom($chapter_number) { 

    $id = $_GET['number'];
    if(empty(htmlspecialchars($_POST['auth'])) && empty(htmlspecialchars($_POST['contenuComment']))) {
        ?>
        <script language="javascript">
            alert("Tous les champs doivent être remplis. Vous allez être redirigé(e).");
        </script>
     <?php
     header("Refresh:3;url=chapter?number=".$id."");
    }

    if(!empty(htmlspecialchars($_POST['auth'])) && !empty(htmlspecialchars($_POST['contenuComment']))) {
        $objetComment = new \projet4\Crudcomments($_GET['id'], $_GET['number']);
        $com = $objetComment->createComment($_GET['number']);
    
            // Captcha
            // Ma clé privée
            $secret = "6Ld5ZXAUAAAAAMBXzJ3sw3O4nygYe4QbTCZLHjWy";
            // Paramètre renvoyé par le recaptcha
            $response = $_POST['g-recaptcha-response'];
            // On récupère l'IP de l'utilisateur
            $remoteip = $_SERVER['REMOTE_ADDR'];

            $api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
                . $secret
                . "&response=" . $response
                . "&remoteip=" . $remoteip ;

            $decode = json_decode(file_get_contents($api_url), true);

            if ($decode['success'] == true) {
                // le code de vérification est correct
                ?>
                <script language="javascript">
                    alert("Votre commentaire a bien été enregistré. Vous allez être redirigé(e).");
                </script>
            <?php
                header("Refresh:3;url=chapter?number=".$id."");
            }

            else {
                // le code de vérification est incorrect
                ?>
                <script language="javascript">
                    alert("Veuillez préciser que vous n'êtes pas un robot. Vous allez être redirigé(e).");
                </script>
            <?php
                header("Refresh:3;url=chapter?number=".$id."");
            }
    }
}
    
