<?php
session_start();
$email= $_SESSION['login'];
$code_etud= $_SESSION['pass'];

echo "Code etudiant: $code_etud";

include ("connexion.php");
$sql0= "SELECT lib_nom_pat_ind, lib_pr1_ind from etudiant where email='$email' AND cod_etu= $code_etud ";
$result0= mysqli_query($link, $sql0);
$row=mysqli_fetch_assoc($result0);
    $firstname=$row['lib_pr1_ind'];
    $lastname=$row['lib_nom_pat_ind'];


$sql1= "SELECT * from cv, etudiant where cv.code_etud=etudiant.cod_etu and etudiant.cod_etu= $code_etud";
$result1= mysqli_query($link, $sql1);
$row1=mysqli_fetch_assoc($result1);


 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <!--<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">-->
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <title>Editer CV</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
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
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Afficher Menu</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

    <div>   

  <div id="body" class="width">
  <center><h2>Créer facilement votre CV</h2></center>

 <table>

        <form style="margin:10px" action="traitement.php" method="POST" enctype="multipart/form-data">
   <img src="https://www.talentlms.com/blog/wp-content/uploads/2015/03/the-engaged-employee.png" align="left" width="350" height="350" style="padding-top:30px" />
    <div style="padding-left:400px; padding-top:25px margin-right:15px">
           <legend>Créer votre Curriculum Vitae Ici</legend></br>

           <h2>Informations personnelles</h2>

            <label for="name">&nbsp</label></br>
            <label for="user">&nbspNom & Prénom:</label></br>   
                
            <input size="80 px" type="text" name="firstname" value="<?php echo $firstname ?>" disabled="disabled" />
            <input type="text" id="lname" size="80 px" name="lastname" value="<?php echo $lastname ?>" disabled="disabled" /><br/>

            <label for="email">&nbsp Email: </label></br>
            <input type="email" size="80 px" name="email" value="<?php echo $email ?>" disabled="disabled" /></br>

            <label for="telephone">&nbsp Télephone: </label></br>
             <input type="text" size="80 px" maxlength="10" name="tel"  pattern="[0-9]{10}" value="06"></br>
            
            <label for="video">&nbspImporter une video </label></br>
            <input type="file" size="80 px" name="imgaff" placeholder="upload"/></br>
            

             <hr>
             <h2>Formations et Compétences</h2>
             </br>
             <label for="langue"><strong>Langues</strong></label></br>

                <!-- <input type="radio"  value="Ar_fr" name="langue" selected>&nbspArabe et Français&nbsp&nbsp&nbsp
                <input type="radio" value="ar_fr_en" name="langue">&nbspAr, Fr et Anglais&nbsp&nbsp&nbsp
                <input type="radio" value="autre" name="langue">&nbspAutre<br/></br> -->

                <input type="text" size="80px" name="langue" value="<?php if(!empty($row1['langue'])) echo $row1['langue']; ?>"><br/></br>
                <input type="text" size="80px" name="niv_langue" value="<?php if(!empty($row1['niv_lang'])) echo $row1['niv_lang']; ?>" required/></br></br>



             <label for="diplome"><strong>Diplôme</strong></label></br>

                <!-- <input type="radio"  value="bac5" name="diplome">&nbspINGENIEUR/ MASTER/ BAC+5&nbsp&nbsp&nbsp
                <input type="radio" value="bac3" name="diplome">&nbspLICENCE/ BAC+3&nbsp&nbsp&nbsp
                <input type="radio" value="bac2" name="diplome">&nbspBAC+2<br/></br> -->


                <input type="text" name="diplome" value="<?php if(!empty($row1['diplome'])) echo $row1['diplome']; ?>" placeholder="votre diplome"></br></br>
                <input type="text" size="80 px" maxlength="4" name="annee_dip"  pattern="[0-9.0-9]{4}" placeholder="Annee de graduation" value="<?php if(!empty($row1['annee_dip'])) echo $row1['annee_dip']; ?>" required/></br></br>

             <label for="filiere"><strong>Filière</strong></label></br>
             <input type="text" name="filiere" value="<?php if(!empty($row1['filiere'])) echo $row1['filiere']; ?>">
        <!--      <select name="filiere" class="form-control">
                <option value="geni_info"  selected="selected">Génie Informatique</option>
                <option value="geni_elec">Génie Eléctrique</option>
                <option value="RST">Génie Réseaux et Télecommunications</option>
                <option value="Mecatronique">Génie Mécatronique</option>
                <option value="Indus">Génie Industriel</option>
                <option value="Securite_Info">Master Sécurité Informatique</option>               
            </select> -->


            <hr>
            <h2>Expériences </h2>
            <label for="exp_mois">Expérience totale en mois: </label></br>
            <input type="number" size="100px" maxlength="3" name="exp_mois" pattern="[0-9.0-9]{2}" placeholder="nb de mois" value="<?php if(!empty($row1['nb_mois'])) echo $row1['nb_mois']; ?>" required/></br>
             <label for="exp_detail">Un résumé de vos experiences</label></br>
             <textarea name="exp_detail" placeholder="Details de vos experiences" required></textarea><br/>
            <hr>

          

            <input type="submit" class="btn btn-secondary" name="submit" value="Enregistrer">&nbsp&nbsp&nbsp
            <input type="submit" class="btn" name="submit" value="Imprimer PDF" onClick="window.print()"> <br/></br>
            </div>
            
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
