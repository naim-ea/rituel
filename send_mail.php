<?php

$errors = array();
$emails = array('toast.nine@gmail.com', 'elayadinaim@gmail.com',  'naim.el-ayadi@hetic.net', 'gautier.maillard@hetic.net', 'baptiste.villain@hetic.net', 'kenrig.dalle@hetic.net', 'louis.ghodsi@hetic.net');
$mail = 'rituel.fr';

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
  $passage_ligne = "\r\n";
}
else
{
  $passage_ligne = "\n";
}


// VERIF ERREURS ***************************************************************************
if(!array_key_exists('fname', $_POST) || $_POST['fname'] == ''){
  $errors['fname'] = "Vous n'avez pas renseigné votre prénom";
}
if(!array_key_exists('lname', $_POST) || $_POST['lname'] == ''){
  $errors['lname'] = "Vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('mail', $_POST) || $_POST['mail'] == ''){
  $errors['mail'] = "Vous n'avez pas renseigné un e-mail valide";
}
if(!array_key_exists('comm', $_POST) || $_POST['comm'] == ''){
  $errors['comm'] = "Vous n'avez pas renseigné votre message";
}


session_start();
if(!empty($errors)){
  $_SESSION['errors'] = $errors;
  $_SESSION['inputs'] = $_POST;
  header('Location: contact.php');
}else{
  $_SESSION['success'] = '1';

  // HEADER GENERIQUE ************************************************************************************
  $headers = 'From:'.$mail.$passage_ligne;
  $headers .= 'Reply-To: '.$_POST['fname']." ".$_POST['lname'].'<'.$_POST['mail'].'>'.$passage_ligne;
  $headers .= 'MIME-Version: 1.0' . $passage_ligne;
  $headers .= "X-Priority: 3" . $passage_ligne;
  $headers .= 'Content-Type: text/html; charset="utf-8"'. $passage_ligne;

  // CONSTRUCTION DU MESSAGE *****************************************************************************
  $message = $passage_ligne."--".$boundary.$passage_ligne;
  $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
  $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
  $message.= $passage_ligne;
  $message = '<html><body>';
  $message .= "Vous avez reçu message de la part de " .$_POST['fname']." ".$_POST['lname']. " (".$_POST['mail'].") || Ce message provient du formulaire de contact du site rituel.fr<br><br>";
  $message .= "<strong>Nom :</strong><br>".$_POST['fname']." ".$_POST['lname']."<br><br>";
  $message .= "<strong>E-mail :</strong><br>".$_POST['mail']."<br><br>";
  $message .= "<strong>Message :</strong><br>".$_POST['comm'];
  $message .= '</body></html>';
  $message .= $passage_ligne;



  mail($emails[$_POST['dest']], $_POST['subj'], $message, $headers);
  header('Location: contact.php');
}


?>

