<?php
session_start();
session_destroy();
header('location: view/index.php');
{
	echo'Vous êtes maintenant déconnecté(e).';
}
?>