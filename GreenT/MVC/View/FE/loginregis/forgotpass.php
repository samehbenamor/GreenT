<?php 
    //require 'C:\xampp\htdocs\WebGreenT\GreenT\MVC\Model\utilisateur.php';
    //require 'C:\xampp\htdocs\WebGreenT\GreenT\MVC\Controller\utilisateurController.php';
	include_once '../../../Controller/utilisateurController.php';
	require_once '../../../Model/utilisateur.php';
    $error = "";
	session_start();
	$utilisateurC=new utilisateurC();
	$utilisateur = NULL;
	$email = $_SESSION["email1"];
	$utilisateur = $utilisateurC->recupererUtilisateurEmail($email);
	$idu = $utilisateur['idu'];
	if (
		isset($_POST["pass"]) &&		
        isset($_POST["repass"])
    ) {
        if (
            !empty($_POST["pass"]) && 
			!empty($_POST["repass"]) 
		) {
			if ($_POST["pass"] == $_POST["repass"]) {
				var_dump($_POST["pass"]);
				$utilisateurC->ChangeMdpUtilisateur($idu, $_POST["repass"]);
			}
		}
	}
		

    

    
?>
<html lang="en">
<head>
	<title>GreenT - Reset password</title>
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

				<form class="login100-form validate-form" action=""  method="post" > 
					<span style="color:white" class="login100-form-title">
						Reset your password
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="email" id="email" value="<?php echo $_SESSION["email1"]; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Un nom valide est requis">
						<input class="input100" type="password" name="pass" id="pass" placeholder="New password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Un prenom valide est requis">
						<input class="input100" type="password" name="repass" id="repass" placeholder="Confirm new password" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>


            

					
        
					
					<div class="text-center p-t-20">
						<a id="err" class="txt2" style="color:red">
						<?php echo $error; ?>
						</a>
						</div>
						

					<div class="container-login100-form-btn">
						<button type="submit" onclick="verif();" class="login100-form-btn">Reset</button>
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