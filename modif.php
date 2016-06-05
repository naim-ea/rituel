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
              <input type="text" name="Description" placeholder="Description">
            </p>
            <p>
              <label id="LienFB">Lien FB</label>
              <input type="text" name="LienFB" placeholder="Lien FB">
            </p>
          </form>
          <h2>Line Up</h2>
          <div></div>
          <a href="#" title="remove artiste"> - </a>
          <p>Artistes</p>
          <a href="#" title="add artiste"> + </a>
          <form action="#" method="post" id="nextEventLineUp">
            <p>
              <label id="Artiste_1">Artiste_1</label>
              <input type="text" name="Artiste_1" placeholder="Artiste_1">
            </p>
          </form>
          <h2>évenements</h2>
          <div></div>
          <a href="#" title="remove event"> - </a>
          <p>Evenements</p>
          <a href="#" title="add event"> + </a>
          <form action="#" method="post" id="nextEventList">
            <p class="ArtisteModif">
              <label id="event_1">Event_1</label>
              <input type="text" name="Artiste_1_Nom" placeholder="Artiste_1_Nom">
              <input type="text" name="Artiste_1_Lieu" placeholder="Artiste_1_Lieu">
              <input type="text" name="Artiste_1_Date" placeholder="Artiste_1_Date">
              <input type="text" name="Artiste_1_LineUp" placeholder="Artiste_1_LineUp">
              <input type="text" name="Artiste_1_LienFB" placeholder="Artiste_1_LienFB">
            </p>
          </form>



          <form action="domodifs.php" method="post">
            <input value="prout" name="jsonString">
            <button type="submit">Appliquer</button>
          </form>
        </div>
      </div>
    </div>
    <!-- SCRIPTS -->
    <script src="scripts/jquery-1.12.1.min.js"></script>
    <script src="scripts/parallax.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="data/data.json"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>
