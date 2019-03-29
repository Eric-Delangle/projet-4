<?php
session_start();
session_destroy();
header('location: home');
{
	echo'Vous êtes maintenant déconnecté(e).';
}
?>