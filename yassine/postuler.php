<?php 
	session_start();
	$z=$_SESSION['login'];
	$i=$_GET['b'];

	include("connexion.php");


	$row="SELECT cod_etu FROM etudiant WHERE email='$z' ";
	$res=mysqli_query($link,$row);
	$ress=mysqli_fetch_assoc($res);
	$a=$ress['cod_etu'];

	$row1= "INSERT INTO postuler VALUES($i,$a) ";
	$res1= mysqli_query($link,$row1);


	header("location: liste_annonce_etu.php");


?>
