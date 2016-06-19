<?php 
session_start();?>
<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rituel | Contact</title>
    <meta name="description" content="site du label Rituel" />
    <meta name="keywords" content="label,musique,zazie,rituel,evenement,paris,soiree,beyondthedoors" />
    <meta name="author" content="HETIC" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="styles/jquery-ui.css" rel='stylesheet'>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="styles/hamburgler.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="favicon-96x96.png" />
    <link rel="stylesheet" href="styles/style.css" />
  </head>

  <body id="bodyContact">
    <div class="loadAnimation"></div>
    <div class="container-fluid">
      <div class="row topBar">
        <header id="header">
          <div class=" col-xs-11 col-xs-push-1 col-sm-push-0 col-xs-12 col-sm-2 col-md-2">
            <a href="index.html"><h1>Rituel</h1></a>
          </div>
          <div class="hidden-xs col-sm-10 col-md-8 col-md-push-1">
            <nav id="menu">
              <ul>
                <li><a href="artistes.html" title="page artistes"><div class="underline"></div>artistes</a></li><!--
--><li><a href="evenements.html" title="page evenements"><div class="underline"></div>evenements</a></li><!--
--><li><a href="#" title="page a propose"><div class="underline"></div>a propos</a></li><!--
--><li><a href="contact.php" title="page contact"><div class="underline"></div>contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="visible-xs">
            <a href="javascript:void(0)" class="icon">
              <div class="hamburger">
                <div class="menui top-menu"></div>
                <div class="menui mid-menu"></div>
                <div class="menui bottom-menu"></div>
              </div>
            </a>
          </div>
        </header> 
        <header id="headerMobile">
          <div class="col-sm-12 visible-xs visible-sm">
            <nav id="menu">
              <ul>
                <li><a href="artistes.html" title="page artistes">artistes</a></li><!--
--><li><a href="evenements.html" title="page evenements">evenements</a></li><!--
--><li><a href="about.html" title="page a propose">a propos</a></li><!--
--><li><a href="contact.php" title="page contact">contact</a></li>
              </ul>
            </nav>
          </div>
        </header>
      </div>
      <div class="col-md-12 title">
        <h1>Nous &nbsp; contacter</h1>
        <div class="barre"></div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <?php if(array_key_exists('errors', $_SESSION)): ?>
        <div class="alert alert-danger">
          <?= implode('<br>', $_SESSION['errors']); ?>
        </div>
        <?php  endif; ?>
        <?php if(array_key_exists('success', $_SESSION)): ?>
        <div class="alert alert-success">
          Votre email à bien été envoyé !!
        </div>
        <?php  endif; ?>

        <form action="send_mail.php" method="POST">

          <label for="sources" class="col-xs-4  col-xs-offset-1 col-sm-4  col-sm-offset-1 col-md-4  col-md-offset-1 col-lg-4 col-lg-offset-1">Destinataire</label>
          <select name="dest" id="sources" class="custom-select sources col-xs-12 col-xs-offset-1 col-sm-12 col-sm-offset-1 col-md-12 col-md-offset-1 col-lg-12" placeholder="Rituel">
            <option value="0">Rituel</option>
            <option value="1">Birds of Mind</option>
            <option value="2">Silens</option>
            <option value="3">Nato and Sahale</option>
            <option value="4">Victor and Norman</option>
            <option value="5">David Mears</option>
            <option value="6">Samarcande</option>
          </select>
          <input type="text" name="fname" placeholder="Prénom" class="col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
          <input type="text" name="lname" placeholder="Nom" class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
          <input required type="email" name="mail" placeholder="Email" class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
          <input type="text" name="subj" placeholder="Sujet" class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1" autocomplete="off">
          <textarea required name="comm" placeholder="Commentaire" class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1"></textarea>
          <button type="submit" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 submit">ENVOYER</button>
        </form>
      </div>


      <img src="images/testcontact.png" alt="Contactez-nous" id="contactImg" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="row">
        <footer id="footer">
          <div class="col-md-4 col-md-offset-4">
            <ul>
              <li><a href="https://www.youtube.com/watch?v=n0GGP_lV1jE" target="_blank" title="lien youtube"><i class="fa fa-youtube"></i></a></li><!--
--><li><a href="https://www.facebook.com/btd.paris/" target="_blank" title="lien facebook"><i class="fa fa-facebook"></i></a></li><!--
--><li><a href="https://www.instagram.com/explore/locations/1023309178/" target="_blank" title="lien instagram"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6 col-md-offset-3 condition-general">
            <p>© Rituel 2016 - Tout droits reservés - Design et developpement par des <a href="http://www.hetic.net" title="Lien Hetic" target="_blank"> Héticiens</a></p>
          </div>
        </footer>
      </div>
    </div>

    <!-- SCRIPTS -->
    <script src="scripts/jquery-ui.js"></script>
    <script src="scripts/jquery-1.12.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/hamburgler.js"></script>
    <script src="scripts/parallax.min.js"></script>
    <script src="scripts/main.js"></script>
  </body>

</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>