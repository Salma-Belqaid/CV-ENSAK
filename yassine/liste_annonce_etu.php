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

    <title>Page Admin</title>

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
                    <a href="http://localhost:8080/projet12/yassine/logout.php">Deconnexion</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Basculer le menu</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <?php
    include("connexion.php");
    $sql="SELECT * FROM offre_stage ";
    $result=mysqli_query($link,$sql);

    echo '<table class="table table-hover" border="3px" cellpadding="6px" style="margin-top:130px; margin-left:350px; width:60%;">';
    echo '<thead>';
        echo'<tr>';
                
                echo'<th>Intitule</th>';
                echo'<th>Debut de stage</th>';
                echo'<th>Fin de stage</th>';
                echo '<th>Experience</th>';
                echo '<th>Diplome</th>';
                echo '<th>Langue</th>';
                echo '<th>Postuler</th>';

        echo'</tr>';
    echo'</thead>';
    while ($row=mysqli_fetch_assoc($result)) {
    echo'<tbody>';
            echo'<tr>';
                
                echo'<td>'.$row['intitule'].'</td>';
                echo'<td>'.$row['debut_sate'].'</td>';
                echo'<td>'.$row['fin_stage'].'</td>';
                echo '<td>'.$row['experience'].'</td>';
                echo '<td>'.$row['diplome'].'</td>';
                echo '<td>'.$row['langue'].'</td>';
                $a=$row['id_offre'];
                echo "<td><div id='page-content-wrapper'>
                    <div class='container-fluid'>
                <a class='btn btn-secondary' id='menu-toggle' href=postuler.php?b=$a>Postuler</a>
            </div>
        </div></td>" ;
               
            echo'</tr>';
            
        echo'</tbody>';}
        echo'</table>';
        ?>

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
