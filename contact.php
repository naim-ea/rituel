<?php 
session_start();?>
<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <title>RITUEL | HOME</title>
    <meta name="description" content="site du label Rituel" />
    <meta name="keywords" content="label,musique,zazie,rituel,evenement,paris,soiree,beyondthedoors" />
    <meta name="author" content="HETIC" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="styles/jquery-ui.css" rel='stylesheet'>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="styles/hamburgler.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css" />
  </head>

  <body id="bodyContact">
    <div class="loadAnimation"></div>
    <div class="container-fluid">
      <div class="row topBar">
        <header id="header">
          <div class=" col-xs-12 col-sm-2 col-md-2">
            <a href="index.html"><h1>Rituel</h1></a>
          </div>
          <div class="hidden-xs col-sm-10 col-md-8 col-md-push-1">
            <nav id="menu">
              <ul>
                <li><a href="artistes.html" title="page artistes">artistes</a></li><!--
--><li><a href="#" title="page evenements">evenements</a></li><!--
--><li><a href="#" title="page a propose">a propos</a></li><!--
--><li><a href="contact.php" title="page contact">contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="visible-xs visible-sm">
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
--><li><a href="#" title="page evenements">evenements</a></li><!--
--><li><a href="#" title="page a propose">a propos</a></li><!--
--><li><a href="contact.php" title="page contact">contact</a></li>
              </ul>
            </nav>
          </div>
        </header>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">

        <form action="send_mail.php" method="POST">
          <?php if(array_key_exists('errors', $_SESSION)): ?>
          <div class="alert alert-danger">
            <?= implode('<br>', $_SESSION['errors']); ?>
          </div>
          <?php  endif; ?>
          <?php if(array_key_exists('no', $tab)): ?>
          <div class="alert alert-success">
            Votre email à bien été envoyé !!
          </div>
          <?php  endif; ?>
          <label for="sources" class="col-xs-4  col-xs-offset-1 col-sm-4  col-sm-offset-1 col-md-4  col-md-offset-1 col-lg-4 col-lg-offset-1">Destinataire</label>
          <select name="dest" id="sources" class="custom-select sources col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Rituel">
            <option value="0">Rituel</option>
            <option value="1">Birds of Mind</option>
            <option value="2">Silens</option>
            <option value="3">Nato and Sahale</option>
            <option value="4">Victor and Norman</option>
            <option value="5">David Mears</option>
            <option value="6">Samarcande</option>
          </select>
          <input required type="text" name="fname" placeholder="Prénom" class="col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
          <input required type="text" name="lname" placeholder="Nom" class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
          <input required type="email" name="mail" placeholder="Email" class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
          <input type="text" name="subj" placeholder="Sujet" class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
          <textarea required name="comm" placeholder="Commentaire" class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1"></textarea>
          <button type="submit" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 submit">ENVOYER</button>
        </form>
      </div>
      <div class="row">
        <footer id="footer">
          <div class="col-md-4 col-md-offset-4">
            <ul>
              <li><a href="#" title="lien twitter"><i class="fa fa-twitter"></i></a></li><!--
--><li><a href="#" title="lien facebook"><i class="fa fa-facebook"></i></a></li><!--
--><li><a href="#" title="lien instagram"><i class="fa fa-instagram"></i></a></li>
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