<?php
//require(VIEW.'viewcomments.php');
if($_POST['signaler']) {

    $alertComm = new \projet4\Crudcomments($_GET['id']);

    $alert = $alertComm->signalCom($_GET['id']);

<<<<<<< HEAD
        if($alert == true) { 
        
            echo 'Ce commentaire a été signalé';
            header("Refresh:3;url=chapters");
        } else { 
            echo 'Ce commentaire n\'a pas été signalé';
            header("Refresh:3;url=chapters");
        }
=======
            echo 'Ce commentaire a été signalé';
            header("Refresh:3;url=chapters");// la il me renvoi a l'id du commentaire pas celui du chapitre
      
>>>>>>> temp-branch
 }