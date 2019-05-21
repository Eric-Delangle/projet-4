<?php

if($_POST['signaler']) {
 
    $alertComm = new \projet4\Crudcomments($_GET['id']);
    print_r($alertComm);
     $sign = $alertComm->signalCom();
     echo $sign;
    }