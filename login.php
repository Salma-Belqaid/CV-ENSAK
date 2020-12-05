<?php  
session_start();

if(isset($_POST['submit'])){
    $login=$_POST['login'];
    $pass=$_POST['pass'];
    include("connexion.php");

    $query="SELECT * FROM admin WHERE login='$login' AND password='$pass'";
    $result=mysqli_query($link,$query);
    $row=mysqli_fetch_assoc($result);

    $query1="SELECT * FROM etudiant WHERE email='$login' AND cod_etu= $pass";
    $result1=mysqli_query($link,$query1);
    $row1=mysqli_fetch_assoc($result1);

    $query2="SELECT * FROM entreprise WHERE mail='$login' AND password='$pass'";
    $result2=mysqli_query($link,$query2);
    $row2=mysqli_fetch_assoc($result2);


    if( $row != false ){
        $_SESSION['login']=$row['login'];
        $_SESSION['pass']=$row['password'];
        header("location: admin/accueil_admin.php");
    }elseif ( $row1 != false ) {
        $_SESSION['login']=$row1['email'];
        $_SESSION['pass']=$row1['cod_etu'];
        header("location: yassine/accueil_etudiant.php");
    }elseif ( $row2 != false ) {
        $_SESSION['login']=$row2['mail'];
        $_SESSION['pass']=$row2['password'];
        header("location: salma/accueil_entreprise.php");
    }else{
        header("location: login.php?erreur=1");
    }

 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>connexion_au_compte</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!--<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<!--<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">-->
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<span class="login100-form-title p-b-32">
						CONNEXION AU COMPTE
					</span>

					<span class="txt1 p-b-11">
						Nom d'utilisateur
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="login" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Mot de passe
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

				
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">	
						SE CONNECTER
						</button>
					</div>
				<?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>