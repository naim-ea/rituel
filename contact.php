<?php

$errors = array();
$emails = array('toast.nine@gmail.com', 'elayadinaim@gmail',  'naim.el-ayadi@hetic.net', 'gautier.maillard@hetic.net', 'baptiste.villain@hetic.net', 'kenrig.dalle@hetic.net', 'louis.ghodsi@hetic.net');
$dest = $_POST['dest'];



// VERIF GENERIQUES ***************************************************************************
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
	header('Location: contact.html');
}else{
	$_SESSION['success'] = 1;

	// HEADER GENERIQUE ************************************************************************************
	$headers = 'FROM: '.$_POST['fname'].$_POST['lname'].'<'.$_POST['mail'].'>'."\n";
	$headers .= 'Reply-To: '.$_POST['fname'].$_POST['lname'].'<'.$_POST['mail'].'>'."\n";
	$headers .= 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-Type: text/html; charset="utf-8"'. "\n";
	$headers .= "Bcc: contact@mmmkr.com" . "\n";

	// CONSTRUCTION DU MESSAGE *****************************************************************************
	$message = '<html><body>';
	$message .= "Vous avez reçu message de la part de " .$_POST['fname']." ".$_POST['lname']. " (".$_POST['mail'].") || Ce message provient du formulaire de contact du site rituel.fr<br><br>";
	$message .= "<strong>Nom :</strong><br>".$_POST['fname']." ".$_POST['lname']."<br><br>";
	$message .= "<strong>E-mail :</strong><br>".$_POST['mail']."<br><br>";
	$message .= "<strong>Message :</strong><br>".$_POST['comm'];
	$message .= '</body></html>';



	mail($emails[$dest], $_POST['subj'], $message, $headers);
	header('Location: contact.html');
}


?>