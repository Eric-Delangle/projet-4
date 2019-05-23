<?php
//require(VIEW.'viewcomments.php');
if($_POST['signaler']) {

    $alertComm = new \projet4\Crudcomments($_GET['id']);

    $alert = $alertComm->signalCom($_GET['id']);

        if($alert == true) { 
        
            echo 'Ce commentaire a été signalé';
            header("Refresh:3;url=chapters");
        } else { 
            echo 'Ce commentaire n\'a pas été signalé';
            header("Refresh:3;url=chapters");
        }
 }