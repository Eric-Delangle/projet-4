<?php
require_once ('../model/InscMembre.php');
$membre = new InscMembre();
$membre->checkInscription();
$membre->validInscription();