<?php
session_start();
$nom=$_SESSION['login'];
$passe= $_SESSION['pass'];

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>accueil_etreprise</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>
<body>
    

    <div id="wrapper">

        
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a> Menu </a>
                </li>
                <li>
                    <a href="http://localhost:8080/projet12/salma/accueil_entreprise.php">Acceuil entreprise</a>
                </li>
                <li>
                    <a href="http://localhost:8080/projet12/salma/creer_offre2.php">Editer offre</a>
                </li>
                <li>
                    <a href="http://localhost:8080/projet12/salma/listes_offres.php">Mes offres</a>
                </li>
                <li>
                    <a href="http://localhost:8080/projet12/salma/recherche.php">Recherche dichotomice sur les cv  </a>
                </li>
                <li>
                    <a href="logout.php">Deconnexion</a>
                </li>
            </ul>
        </div>
        
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Basculer le menu</a>
            </div>
        </div>
        

    </div>
  

    <h2 align="right">Bonjour Cher Entrepreneur !</h2>



    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>