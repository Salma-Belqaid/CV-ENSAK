<?php
include("connexion.php");
session_start();


$nom=$_POST['nom'];
$mail=$_POST['mail'];
$tel=$_POST['tel'];
$siege=$_POST['siege'];
$pass=$_POST['pass'];
$id=$_POST['id'];
$adresse=$_POST['adresse'];
$description=$_POST['description'];


$query="INSERT INTO entreprise VALUES($id,'$nom','$adresse','$mail','$siege','$tel','$pass','$description',1)";
$result=mysqli_query($link,$query);


header("location: http://localhost/projet12/admin/accueil_admin.php");

?>
