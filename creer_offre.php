
<?php
session_start();
$nom=$_SESSION['nom_entreprise'];
$passe= $_SESSION['passwrd'];

$inti=$_POST['titule'];
$deb=$_POST["debut"];
$fin=$_POST["fin"];
$exp=$_POST["exp"];
$dip=$_POST["Dip"];
$langue=$_POST["langue"];

include("connexion.php");

$sql1="select id_entreprise from entreprise E,offre_stage S where E.id_entreprise=S.id_entreprise and E.passeword='$passe' and nom_entreprise='$nom'";
$result1=mysqli_query($link,$sql1);
$row=mysqli_fetch_assoc($result1);
$id=$row['id_entreprise'];


$sql="insert into offre_stage(intitulé,debut_sate,fin_stage,id_entreprise,experience,diplome,langue) values ('$inti','$deb','$fin','$id','$exp','$dip','$langue')";
$result=mysqli_query($link,$sql); ?>

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

<h1 align="center">Formulaire d'inscription</h1>
     <form method="POST" action="">
    <center><table align="center">
        
    <tr>
        <td>intitulé </td>
        <td><input type="text" size="30" MAXLENGTH="48" name="titule"></td>
    </tr>
        
    <tr>
        <td>date de debut stage:</td>
        <td><input type="date" size="30"  name="debut"></td>
    </tr>

    <tr>
        <td>Date de fin de stage:</td>
        <td><input type="Date" size="30" MAXLENGTH="48" name="fin"></td>
    </tr>

    <tr>
        <td>Langues:</td>
        <td><select NAME="langue" SIZE="1">
                <option>Anglais</option>
                <option>Francais</option>
                <option>Arabe</option>
                <option>Allemad</option>
                <option>Espagnol</option>
                <option>Turque</option>
                <option>danoise</option>
                <option>Chinoise</option>
            </select></td>
    </tr>
    <tr>
        <td>Experience:</td>
        <td><select NAME="exp" SIZE="1">
                <option>pas d'experience</option>
                <option>1ans d'experience</option>
                <option>2ans d'experience</option>
                <option>3ans d'experience</option>
                <option>4ans d'experience</option>
                <option>au cours de formation</option>
            </select></td>
    </tr>
    <tr>
        <td>Diplome:</td>
        <td><select NAME="Dip" SIZE="1">
                <option>Bac+1</option>
                <option>Bac+2</option>
                <option>Bac+3</option>
                <option>Bac+4</option>
                <option>Bac+5(INGENIEUR)</option>
                <option>Bac+5(MASTER)</option>
            </select></td>
        
    </tr>
     <input type="submit" name="submit" value="creer">
</table>
</center>
</form>
</body>
</html>