<?php
session_start();
$mail=$_SESSION['login'];
$password= $_SESSION['pass'];

echo "bonjour ".$mail ;

include ("connexion.php");
$sql0= "SELECT id_entreprise, nom_entreprise from entreprise where mail='$mail' AND password='$password' ";
$result0= mysqli_query($link, $sql0);
$row=mysqli_fetch_assoc($result0);
    $id_entreprise=$row['id_entreprise'];
    $nom_entreprise=$row['nom_entreprise'];


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



    <title>Editer offre</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
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
  <center><h2>Créer facilement votre offre</h2></center>

 <table>

        <form style="margin:10px" action="traitement.php" method="POST" enctype="multipart/form-data">
   <img src="https://www.talentlms.com/blog/wp-content/uploads/2015/03/the-engaged-employee.png" align="left" width="350" height="350" style="padding-top:30px" />
    <div style="padding-left:400px; padding-top:25px margin-right:15px">
           <legend>Créer votre offre de stage ici</legend></br>

           <h2>Informations</h2>

            <label for="">&nbsp</label></br>
            <label for="id_entreprise">ID entreprise:</label></br>   
                
            <input size="80 px" type="number" name="id_entreprise" value="<?php echo $row['id_entreprise']; ?>" disabled="disabled" /><br/>

            <label for="nom_entreprise">Nom entreprise:</label></br>   

            <input type="text" size="80 px" name="nom_entreprise" value="<?php echo $row['nom_entreprise'] ?>" disabled="disabled" /><br/>

            <label for="intitule">&nbsp Intitulé de l'offre: </label></br>
            <input type="text" size="80 px" name="intitule" /></br>

            <label for="debut_sate">&nbsp date Debut stage: </label></br>
             <input type="text" size="80 px" name="debut_sate"></br>
            
            <label for="fin_stage">&nbsp date Fin de stage: </label></br>
            <input type="text" size="80 px" name="fin_stage"/></br>
            

             <hr>
             <h2>Formations et Compétences</h2>
             </br>
          <label for="langue"><strong>Langues</strong></label></br>
                <select name="langue">
<?php 

$sql1= "SELECT distinct(langue) from cv";
$result1= mysqli_query($link, $sql1);
while ($row1=mysqli_fetch_assoc($result1)) { ?>
    <option value="<?php echo $row1['langue']; ?>"> <?php echo $row1['langue']; ?> </option>

<?php 
}

?>
</select></br></br>





             <label for="diplome"><strong>Diplôme</strong></label></br>

             <select name="diplome">
                <option value="ingenieur">BAC+5 ingenieur</option>
                <option value="master">BAC+5 master</option>
                <option value="bac+4">BAC+4</option>
                <option value="bac+3">BAC+3</option>
                <option value="bac+2">BAC+2</option>
                <option value="bac+1">BAC+1</option>
            </select> <br/></br>

            <label for="experience">Expérience min requise en mois ( en lettres): </label></br>
            <input type="text" size="100px" name="experience" placeholder="nb de mois" /> </br>
          

            <input type="submit" class="btn btn-secondary" name="submit" value="Enregistrer">&nbsp <br/></br>
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
