<?php
session_start();
$email= $_SESSION['login'];
$code_etud= $_SESSION['pass'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>accueil_etudiant</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a>
                        Menu
                    </a>
                </li>
                <li selected>
                    <a href="http://localhost:8080/projet12/yassine/accueil_etudiant.php">Acceuil Etudiant</a>
                </li>
                 <li>
                    <a href="http://localhost:8080/projet12/yassine/creer_cv.php">Editer mon CV</a>
                </li>
                <li>
                    <a href="http://localhost:8080/projet12/yassine/afficher_cv.php">Mon CV</a>
                </li>
                <li>
                    <a href="http://localhost:8080/projet12/yassine/liste_annonce_etu.php">Offres de stage</a>
                    
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
  

    <h2 align="right">Bonjour Cher Etudiant!</h2>



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

