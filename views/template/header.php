<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Gestion bancaire</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" type="text/css" href="../assets/css/flaticon.css">
        <!-- Place favicon.ico in the root directory -->
          <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../assets/css/main.css">
        <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>


      <header id="entete">

      <nav class="navbar navbar-light bg-light flex-row ">
        <a title="Accueil" class="navbar-brand" href="home.php"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a>



          <ul class="ml-auto nav nav-pills hidden-sm-down" id="tabpills" >
            <li class="nav-item active ">
              <a title="Ajouter un compte" class="nav-link" href="addAccount.php" >Créer un compte<span class="sr-only">(current)</span></a>
            </li>
<?php if (isset($_SESSION['account'])): ?>


            <li class="nav-item">
              <a title="Dépot" class="nav-link"  href="addMoney.php" >Dépot</a>
            </li>
            <li class="nav-item">
              <a title="Retrait" class="nav-link" href="withdrawal.php">Retrait</a>
            </li>
            <li class="nav-item">
              <a title="Virement" class="nav-link " href="transfer.php">Virement</a>
            </li>
<?php endif; ?>
          </ul>


      </nav>
  </header>

  <main class="container">

    <h1 class="text-center">La banque qu'il vous faut</h1>
