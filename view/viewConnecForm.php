<?php
require_once ('../model/formInscConnec.php');
require ('../view/nav.php');
$connecForm = new FormInscConnec ($data);

echo $connecForm->input('pseudo');
echo $connecForm->input('pass');
echo $connecForm->submit();
$connecForm->connecMembre($data);
?>