<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>accueil_admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

<?php

	include("connexion.php");
	session_start();
	if(isset($_SESSION['login'])){

?>

    <div id="wrapper">

        
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a>
                        Menu
                    </a>
                </li>
                <li>
                    <a href="liste_entreprise.php">Liste des entreprise</a>
                </li>
                <li>
                    <a href="liste_annonce.php">Listes des annonces</a>
                </li>
                <li>
                    <a href="liste_etudiant.php">Listes des etudiants</a>
                </li>
                <li>
                    <a href="etudiant/creer_etudiant.php">creer etudiant</a>
                </li>
                <li>
                    <a href="entreprise/creer_entreprise.php">creer entreprise</a>
                </li>
            </ul>
        </div>
        
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Basculer le menu</a>
            </div>
        </div>
        

    </div>
  
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <?php }else{header("location: http://localhost:8080/projet12/index.php"); mysqli_close($link);}?>

</body>

</html>

