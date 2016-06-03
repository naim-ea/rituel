<?php 

include_once 'bdd_connect.php';
// Hachage du mot de passe
$pass_hache = sha1($_POST['pass']);

// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM connexion WHERE pseudo = :pseudo AND pass = :pass');
$req->execute(array(
    'pseudo' => $_POST['pseudo'],
    'pass' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $_POST['pseudo'];
    echo 'Vous êtes connecté !';?>
<html><form method="post" action="deco.php"><button type="submit">Déconnexion</button></form><form method="post" action="modif.php"><button type="submit">Modification</button></form></html>
    <?php
}?>