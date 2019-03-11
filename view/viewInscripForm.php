<?php
require_once ('../model/formInscConnec.php');
require ('../view/nav.php');
require_once ('../model/pushmembre.php');
$inscForm = new FormInscConnec ($data);
/*$newMember = new Membre();*/

echo $inscForm->input('pseudo');
echo $inscForm->input('pass1');
echo $inscForm->input('passverif');
echo $inscForm->input('email');
echo $inscForm->submit();
$inscForm->inscMembre($data);
$_pseudo->checkInscription();
$_pass->checkInscription();
$_passVerif->checkInscription();
$_mail->checkInscription();

