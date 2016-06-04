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
  echo '
  <!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rituel | Connexion</title>
    <meta name="description" content="site du label Rituel" />
    <meta name="keywords" content="label,musique,zazie,rituel,evenement,paris,soiree,beyondthedoors" />
    <meta name="author" content="HETIC" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/hamburgler.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="styles/style.css"/>
  </head>
  <body id="bodyConnect">
    <div>
      <div>
        <h2 class="title">rituel</h2>
        <div class="barre"></div>
        <h3>Connexion</h3>
      </div>
      <p id="error">
        Mauvais identifiant ou mot de passe !
      </p>
      <a href="connexion.php" title="reessayer">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <div>Réessayer</div>
      </a>
      <a href="index.html" title="retour accueil">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <div>Accueil</div>
      </a>
    </div>
  </body>
</html>
  ';
}
else
{
  session_start();
  $_SESSION['id'] = $resultat['id'];
  $_SESSION['pseudo'] = $_POST['pseudo'];
  ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rituel | Connexion</title>
    <meta name="description" content="site du label Rituel" />
    <meta name="keywords" content="label,musique,zazie,rituel,evenement,paris,soiree,beyondthedoors" />
    <meta name="author" content="HETIC" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/hamburgler.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="styles/style.css"/>
  </head>
  <body id="bodyConnect">
    <div>
      <div>
        <h2 class="title">rituel</h2>
        <div class="barre"></div>
        <h3>Connnecté(e) !</h3>
      </div>
      <p id="success">
        Bienvenue, vous êtes bien connecté(e) !
      </p>
      <form method="post" action="modif.php">
        <button type="submit">Modification</button>
      </form>
      <form method="post" action="deco.php">
        <button type="submit">Déconnexion</button>
      </form>
    </div>
  </body>
</html>
<html>

</html>
<?php
}?>