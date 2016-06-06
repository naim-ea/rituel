<?php $dataEvent = $_POST['new_data_Event'] . "\r\n";
$dataArtiste = $_POST['new_data_Artiste'] . "\r\n";
$dataList = $_POST['new_data_EventList'] . "\r\n";
$newData = $dataEvent . $dataArtiste . $dataList;
//set mode of file to writable.
chmod("data/data.json", 0777);
$f = fopen("data/data.json", "w+") or die("fopen failed");
fwrite($f, $newData);
fclose($f);
header('Location : modif.php');?>
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
  <body id="bodyModifSuccess">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 title">
          <h1> modifications</h1>
          <div class="barre"></div>
        </div> 
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 id="successModif"> Modification effectuée !</h2>
          <form method="post" action="modif.php" id="backModif">
            <button type="submit"><i class="fa fa-angle-left" aria-hidden="true"></i>Continuer les modifications</button>
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