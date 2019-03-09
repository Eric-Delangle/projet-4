<?php
require ('../model/inscripForm.php');
$form = new inscripForm($data);

echo $form->input('pseudo');
echo $form->input('pass');
echo $form->submit();