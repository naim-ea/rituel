<?php

$emails = ["toast.nine@gmail.com", "elayadinaim@gmail",  "naim.el-ayadi@hetic.net", "gautier.maillard@hetic.net", "baptiste.villain@hetic.net", "kenrig.dalle@hetic.net", "louis.ghodsi@hetic.net"];

$headers = 'FROM: ' . $_POST['mail'];
mail($emails[$_POST['dest']], 'Formulaire de contact de ', $_POST['fname'] + ' ' + $_POST['lname'], $_POST['comm'], $headers);
header('Location: contact.html');

?>