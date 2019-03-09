<?php
// connexion a la bdd
try
{
    $bdd=new PDO ('mysql:host=91.216.107.162;dbname=ericd995946;charset=utf8','ericd995946','vaosjv8xde');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>