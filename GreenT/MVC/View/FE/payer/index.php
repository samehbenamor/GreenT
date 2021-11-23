<?php 
    //require 'C:\xampp\htdocs\WebGreenT\GreenT\MVC\Model\utilisateur.php';
    //require 'C:\xampp\htdocs\WebGreenT\GreenT\MVC\Controller\utilisateurController.php';
	include_once '../../../Controller/payerController.php';
	require_once '../../../Model/payer.php';
    $error = "";

    // create utilisateur
    $don = null;
    // create an instance of the controller
    $DonC = new DonC();

	

    if (
		
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
		isset($_POST["adresse"]) && 
		isset($_POST["numc"]) && 
		isset($_POST["datex"]) && 
		isset($_POST["code"]) 
    ) {
        if (
            !empty($_POST["nom"]) && 
			!empty($_POST["prenom"]) &&
            !empty($_POST["adresse"]) && 
			!empty($_POST["numc"]) && 
			!empty($_POST["datex"]) && 
			!empty($_POST["code"])  
        ) {
			echo '<script type="text/javascript">alert("Hello! I am an alert box!!");</script>';
            $don = new don(
				$_POST['nom'],
                $_POST['prenom'], 
				$_POST['adresse'],
                $_POST['numc'],
				$_POST['datex'],
				$_POST['code']
				//kamil b9iyit les parametre mte3 constructeur fil class utilisateur 7at fil constructeur 8 parametre w lina ta3ti fih ken fi 4
				//ok
            );
            $DonC->ajouterDon($don);
            header('Location:../index.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
	<title>GreenT - Modifier</title>
	<script src="../../../Controller/payerController.js"></script>
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

				<form class="login100-form validate-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post" > 
					<span style="color:white" class="login100-form-title">
						Payer un don
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Un nom valide est requis">
						<input class="input100" type="text" name="nom" id="nom" placeholder="Nom">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Un prenom valide est requis">
						<input class="input100" type="text" name="prenom" id="prenom" placeholder="Prenom" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Un adresse valide est requis">
						<input class="input100" type="text" name="adresse" id="adresse" placeholder="Adresse" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</span>
					</div>

			

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="number" name="numc" id="numc" placeholder="Numero de compte" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Une date d'expiration est requise">
						<input class="input100" type="text" name="datex" id="datex" placeholder="Date d'expiration" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Un code est requis">
						<input class="input100" type="number" name="code" id="code" placeholder="Code du don ou projet" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-key" aria-hidden="true"></i>
						</span>
					</div>

            

					
        
					
					<div class="text-center p-t-20">
						<a id="err" class="txt2" style="color:red">
						<?php echo $error; ?>
						</a>
						</div>
						

					<div class="container-login100-form-btn">
						<button type="submit" onclick="verif();" class="login100-form-btn">Payer</button>
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