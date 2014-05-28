<?php 
  require_once('../conf/top.php');
  include('../all-variables.php');

  if (isset($_GET['id'])) {

  }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flat UI - Free Bootstrap Framework and Themes</title>
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="../css/flat-ui.css" rel="stylesheet">
    <link href="../css/admin.css" rel="stylesheet">

    <link rel="shortcut icon" href="../images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <div class="col-xs-2 column" id="menu">
      <img src="../images/icons/svg/clipboard.svg" alt="Clipboard">
      <h4>Navigation</h4>
      <nav>
        <a href="#"> > Les demandes emprunts</a>
        <a href="#" class="actif"> > Les emprunts </a>
        <a href="#"> > Matériel disponible</a>
        <a href="#"> > Historique</a>
        <a href="#"> > Gestion du matériel</a>
        <a href="#"> > Gestions des adminstrateurs</a>
        <a href="#"> > Déconnexion</a>
      </nav>
    </div>
    <div class="col-xs-10 column" id="content">
      <h3>Ajouter un emprunt</h3>
      
      <form id="form-emprunt" method="post" action="index.php" >
        <div class="line-form">
            <label for="name">Nom Prénom étudiant : </label>
            <input type="text" id="name" name="name" class="form-control" value="">
        </div>

        <div class="line-form">
            <label for="tutor">Nom Prénom responsable : </label>
            <input type="text" id="tutor" name="tutor" class="form-control" value="">
        </div>

        <div class="line-form">
            <label for="project_name">Nom du projet : </label>
            <input type="text" id="project_name" name="project_name" class="form-control" value="">
        </div>

        <div class="line-form">
            <label for="project_name">Date d'emprunt : </label>
            <input type="text" id="project_name" name="project_name" class="form-control" value="">
        </div>

        <div class="line-form">
            <label for="project_name">Date  : </label>
            <input type="text" id="project_name" name="project_name" class="form-control" value="">
        </div>

        <div class="line-form">
            <label for="name">Nom Prénom étudiants : </label>
            <textarea class="form-control" ></textarea>
        </div>

      </form>
      <a href="#" class="button">Ajouter un emprunt</a>
    </div>
    <div class="clear"></div>
    <footer>
      <p>@ 2014 Ingénieur IMAC - Site réalisé par des élèves</p>
    </footer>

    <!-- Load JS here for greater good =============================-->
    <script src="../js/jquery-1.8.3.min.js"></script>
    <script src="../js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="../js/jquery.ui.touch-punch.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-select.js"></script>
    <script src="../js/bootstrap-switch.js"></script>
    <script src="../js/flatui-checkbox.js"></script>
    <script src="../js/flatui-radio.js"></script>
    <script src="../js/jquery.tagsinput.js"></script>
    <script src="../js/jquery.placeholder.js"></script>
    <script src="../js/jquery.stacktable.js"></script>
    <script src="http://vjs.zencdn.net/4.3/video.js"></script>
    <script src="../js/application.js"></script>
  </body>
</html>