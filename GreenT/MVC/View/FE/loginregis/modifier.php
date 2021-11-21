<?php 
    //require 'C:\xampp\htdocs\WebGreenT\GreenT\MVC\Model\utilisateur.php';
    //require 'C:\xampp\htdocs\WebGreenT\GreenT\MVC\Controller\utilisateurController.php';
	include_once '../../../Controller/utilisateurController.php';
	require_once '../../../Model/utilisateur.php';
    $error = "";
    session_start();
    // create adherent
    $utilisateur = null;

    // create an instance of the controller
    $utilisateurC = new utilisateurC();
    if (
		
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
		isset($_POST["email"]) && 
        isset($_POST["mdp"])
    ) {
        if (
            !empty($_POST["nom"]) && 
			!empty($_POST["prenom"]) &&
            !empty($_POST["email"]) && 
			!empty($_POST["mdp"])
        ) {
			//echo '<script type="text/javascript">alert("Hello! I am an alert box!!");</script>';
            $utilisateur = new utilisateur(
				$_POST['nom'],
                $_POST['prenom'], 
				$_POST['email'],
                $_POST['mdp'],
				$_POST['adresse'],
				$_POST['tel'],
				$_POST['ville'],
				1
            );
            $_SESSION["email"] = $_POST['email']; 
			$_SESSION["name"] = $_POST['nom'];
			$_SESSION["prenom"] = $_POST['prenom'];
            $_SESSION["mdp"] = $_POST['mdp'];
            $_SESSION["adresse"] = $_POST['adresse'];
            $_SESSION["ville"] = $_POST['ville'];
            $_SESSION["tel"] = $_POST['tel'];
            $utilisateurC->modifierUtilisateur($utilisateur, $_SESSION["id"]);
            //header('Location:../index.php');
        }
        else
            $error = "Missing information";
    }    
    
?>
<html lang="en">
<head>
	<title>GreenT - Modifier</title>
	<script src="../../../Controller/registerController.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login200">
				<!--<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>-->

				<form class="login100-form validate-form" method="post" action="">
					<span style="color:white" class="login100-form-title">
						Modifier votre profile
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Un nom valide est requis">
						<input class="input100" type="text" name="nom" id="nom" placeholder="Nom" value="<?php echo $_SESSION["name"]; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Un prenom valide est requis">
						<input class="input100" type="text" name="prenom" id="prenom" placeholder="Prenom" value="<?php echo $_SESSION["prenom"]; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Un email valide est requis">
						<input class="input100" type="text" name="email" id="email" placeholder="Email" value="<?php echo $_SESSION["email"]; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Un mot de passe valide est requis">
						<input class="input100" type="text" name="mdp" id="pass" placeholder="Password" value="<?php echo $_SESSION["mdp"]; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100" >
                        <?php
                        if (!empty($_SESSION['adresse'])) {
                            echo '<input class="input100" type="text" name="adresse" id="adresse" placeholder="Adresse" value="'.$_SESSION["adresse"].'">';
                        } else {
                            echo '<input class="input100" type="text" name="adresse" id="adresse" placeholder="Adresse">';
                        }
                        ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 " >
                    <?php
                        if (!empty($_SESSION['ville'])) {
                            echo '<input class="input100" type="text" name="ville" id="ville" placeholder="ville" value="'.$_SESSION["ville"].'">';
                        } else {
                            echo '<input class="input100" type="text" name="ville" id="ville" placeholder="ville">';
                        }
                        ?>
	
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-location-arrow" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 " >
                    <?php
                        if (!empty($_SESSION['tel'])) {
                            echo '<input class="input100" type="text" name="tel" id="tel" placeholder="Nombre de telephone" value="'.$_SESSION["tel"].'">';
                        } else {
                            echo '<input class="input100" type="text" name="tel" id="tel" placeholder="Nombre de telephone">';
                        }
                        ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="text-center p-t-20">
						<a id="err" class="txt2" style="color:red">
						<?php echo $error; ?>
						</a>
						</div>
						

					<div class="container-login100-form-btn">
						<button type="submit" onclick="verif();" class="login100-form-btn">Modify</button>
					</div>
                    <div class="text-center p-t-20">
						<a class="txt2" style="color:white" href="../index.php">
							Go back to home
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>


					
					<!--<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>-->
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>