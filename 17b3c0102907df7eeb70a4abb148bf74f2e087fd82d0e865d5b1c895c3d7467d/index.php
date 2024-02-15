  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SUP DE VINSSI - Intranet</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:400,300,700,900" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="index.php">Intranet</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.php?page=accueil.php">Intranet</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <?php
  $pages= array('accueil.php');
    if (isset($_GET['page'])){
      include($_GET['page']);
    }
    else{
      include("accueil.php");
    }
    
  ?>
  <!-- /.modal -->

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>SUP DE VINSSI</strong>. All Rights Reserved
      </p>
      <div class="credits">

        Créé par SUP DE VINSSI avec l'aide de Clère ALLARD
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/chart/chart.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
