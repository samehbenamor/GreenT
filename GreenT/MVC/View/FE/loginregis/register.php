<?php 
    //require 'C:\xampp\htdocs\WebGreenT\GreenT\MVC\Model\utilisateur.php';
    //require 'C:\xampp\htdocs\WebGreenT\GreenT\MVC\Controller\utilisateurController.php';
	include_once '../../../Controller/utilisateurController.php';
	require_once '../../../Model/utilisateur.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'\WebGreenT\GreenT\MVC\config.php';
    $error = "";

    // create utilisateur
    $utilisateur = null;
    // create an instance of the controller
    $utilisateurC = new utilisateurC();
	/*if(isset($_POST['submit']) && $_POST['g-recaptcha-response']!="") {
	$secret = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
	$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
	$responseData = json_decode($verifyResponse);
	if($responseData->success) {*/
	
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
				1,
				0
				//kamil b9iyit les parametre mte3 constructeur fil class utilisateur 7at fil constructeur 8 parametre w lina ta3ti fih ken fi 4
				//ok
            );
            $utilisateurC->ajouterUtilisateur($utilisateur);
            header('Location:index.php');
        }
        else
            $error = "Missing information";
    	}	
	
	
/*else
$error = "Missing Captcha";
	}*/

    
?>
<html lang="en">
<head>
	<title>GreenT - Register</title>
	<script src="../../../Controller/registerController.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="">
					<span class="login100-form-title">
						Member Register
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Un nom valide est requis">
						<input class="input100" type="text" name="nom" id="nom" placeholder="Nom">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Un prenom valide est requis">
						<input class="input100" type="text" name="prenom" id="prenom" placeholder="Prenom">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="mdp" id="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Password confirmation is required">
						<input class="input100" type="password" name="repass" id="repass" placeholder="Password confirmation">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					
						
						<div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
					<div class="container-login100-form-btn">
					<div class="text-center p-t-20">
						<a id="err" class="txt2" style="color:red">
						<?php echo $error; ?>
						</a>
						</div>
						<button type="submit" onclick="verif();" class="login100-form-btn">Register</button>
					</div>


					
					<!--<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>-->

					<div class="text-center p-t-136">
						<a class="txt2" href="index.php">
							Already have an account ?
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
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