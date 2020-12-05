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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <title>Page CV</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <?php
    include("connexion.php");
 //    session_start();
	// if(isset($_SESSION['login'])){

    //$sql="SELECT etudiant.nom, etudiant.prenom, etudiant.phone, etudiant.email, langue.langue, langue.niveau, diplome.diplome, diplome.annee, diplome.filiere, experience.nb_mois, experience.detail FROM etudiant, cv, experience, langue, diplome where etudiant.code_etud=cv.code_etud and cv.id_cv= diplome.id_cv and cv.id_cv= experience.id_cv and langue.id_cv=cv.id_cv";

    $sql1= "SELECT * FROM cv, etudiant where etudiant.cod_etu=cv.code_etud and etudiant.cod_etu= $code_etud ";
    // $sql2= "SELECT * from cv, etudiant";


    // $sql2= "SELECT * FROM cv, etudiant where etudiant.code_etud= cv.code_etud and email='$email'";

    $result=mysqli_query($link,$sql1);

    $row=mysqli_fetch_assoc($result);

    $lastname=$row['lib_nom_pat_ind'];
    $firstname=$row['lib_pr1_ind'];
    $email=$row['email'];
    $langue=$row['langue'];
    $niv_langue=$row['niv_lang'];
    $diplome=$row['diplome'];
    $annee_dip=$row['annee_dip'];
    $filiere=$row['filiere'];
    $exp_mois=$row['nb_mois'];
    $exp_detail=$row['experience'];
    $filename=$row["video"];

        
?>

    <div id="wrapper">

        <!-- Sidebar -->
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
        <!-- #sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Basculer le menu</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>

<form>

<table cellpadding="8" style="margin-top:80px; margin-left:350px; width:60%;"><center>
	<h3>Informations personnelles</h3>

      <tr>
        <td>PRENOM: </td>
        <td><?php echo "$firstname" ?></td></tr>

      <tr>
        <td>NOM: </td>
        <td><?php echo "$lastname" ?></td></tr>

        <tr><td>Video de l'etudiant: </td>
            <td><a href="http://localhost:8080/projet12/yassine/video/<?php echo $row['video'] ?>">Telecharger video</td>
        </tr>
     
      <tr>
        <td>Email: </td>
        <td><?php echo "$email" ?></td></tr>

      <table cellpadding="8" style="margin-top:80px; margin-left:350px; width:60%;"><center>
      <h3>Formations et Compétences</h3>
      <tr>
        <td>Diplome: </td>
        <td><?php echo $diplome ?></td></tr>

      <tr>
        <td>Filiere: </td>
        <td><?php echo $filiere ?></td></tr>
      <tr>
        <td>Annee Diplome: </td>
        <td><?php echo $annee_dip ?></td></tr>

      <tr>
        <td>Langue: </td>
        <td><?php echo $langue ?></td></tr>

      <tr>
        <td>Niveau Langue: </td>
        <td><?php echo $niv_langue ?></td></tr>
      </center></table>

      <table cellpadding="8" style="margin-top:80px; margin-left:350px; width:60%;"><center>
      <h3>Expérience </h3>
      <tr>
        <td>Experience totale en mois: </td>
        <td><?php echo $exp_mois ?></td></tr>
      <tr>
        <td>Postes occupés: </td>
        <td><?php echo $exp_detail?></td></tr>
      </center></table>

      </div>
      <input type="submit" class="btn btn-primary" name="submit" value="Exporter comme PDF" onClick="window.print()"> <br/></br>
      </form>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
