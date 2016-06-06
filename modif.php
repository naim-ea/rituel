<?php
session_start();

if (!isset($_SESSION['pseudo'])) {
  header ('Location: connexion.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rituel | Modifications</title>
    <meta name="description" content="site du label Rituel" />
    <meta name="keywords" content="label,musique,zazie,rituel,evenement,paris,soiree,beyondthedoors" />
    <meta name="author" content="HETIC" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="favicon-96x96.png" />
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/hamburgler.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css" />
  </head>
  <body id="bodyModif">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 title">
          <h1> modifications</h1>
          <div class="barre"></div>
        </div> 
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2>Prochain évenement</h2>
          <div></div>
          <form action="#" method="post" id="modifNextEvent">
            <p>
              <label id="Nom">Nom</label>
              <input type="text" name="Nom" placeholder="Rituel Symphonia">
            </p>
            <p>
              <label id="Lieu">Lieu</label>
              <input type="text" name="Lieu" placeholder="Au pavillon des étangs">
            </p>
            <p>
              <label id="Date">Date</label>
              <input type="text" name="Date" placeholder="Le 29 Mai">
            </p>
            <p>
              <label id="Description">Description</label>
              <textarea type="text" name="Description" placeholder="Description" rows="4" id="countMe"></textarea>
            </p>
            <p>
              <label id="LienFB">Lien FB</label>
              <input type="text" name="LienFB" placeholder="Lien FB">
            </p>
          </form>
          <h2>Line Up</h2>
          <div></div>
          <a href="#" title="remove artiste" id="removeArtiste"> - </a>
          <p>Artistes</p>
          <a href="#" title="add artiste" id="addArtiste"> + </a>
          <form action="#" method="post" id="nextEventLineUp">

          </form>
          <h2>évenements</h2>
          <div></div>
          <a href="#" title="remove event" id="removeEvent"> - </a>
          <p>Evenements</p>
          <a href="#" title="add event" id="addEvent"> + </a>
          <form action="#" method="post" id="nextEventList">

          </form>

          <form action="domodifs.php" method="post" id="submitForm">
            <input type="text" name="new_data"/>
          <button type="submit">Appliquer</button>
          </form>
        <form method="post" action="deco.php" id="decoForm">
          <button type="submit">Déconnexion</button>
        </form>
      </div>
    </div>
    </div>
  <!-- SCRIPTS -->
  <script src="scripts/jquery-1.12.1.min.js"></script>
  <script src="scripts/parallax.min.js"></script>
  <script src="scripts/bootstrap.min.js"></script>
  <script src="data/data.json"></script>
  <script src="data/modifData.json"></script>
  <script src="scripts/main.js"></script>
  <script src="scripts/modif.js"></script>
  </body>
</html>
