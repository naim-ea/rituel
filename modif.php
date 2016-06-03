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
  <meta charset="utf-8" />
  <title>Titre de la page</title>
  <link rel="stylesheet" href="styles/style.css">
</head>

<body>
<h1>WOWOWOWOWOW (test)</h1>

  <script src="scripts/jquery-1.12.1.min.js"></script>
  <script src="scripts/main.js"></script>
</body>

</html>
