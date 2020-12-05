<?php
include("connexion.php");
session_start();


$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$num_apogee=$_POST['num_apogee'];


$query="INSERT INTO etudiant VALUES('$nom','$prenom','$num_apogee','$mail',1)";
$result=mysqli_query($link,$query);


header("location: http://localhost:8080/projet12/admin/accueil_admin.php");

?>
